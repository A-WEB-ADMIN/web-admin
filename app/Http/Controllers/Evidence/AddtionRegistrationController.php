<?php

namespace App\Http\Controllers\Evidence;

use App\Http\Controllers\Controller;
use App\Models\CodeFirstCriterion;
use App\Services\CodeGeneratorService;
use App\Services\DateTimeService;
use Illuminate\Http\Request;
use App\Repositories\Evidence_AddtionRepository;
use App\Repositories\UserRepository;
use App\Repositories\ApprovalLineUserConfigRepository;
use App\Repositories\ApprovalLineRepogitory;

class AddtionRegistrationController extends Controller
{
    protected $datetimeService;
    protected $codeGenertorSerivce;
    /**
     *
     */
    public function __construct(DateTimeService $dateTimeService, CodeGeneratorService $codeGenertorSerivce)
    {
        $this->datetimeService = $dateTimeService;
        $this->codeGenertorSerivce = $codeGenertorSerivce;
    }
    /**==============================================================
    =
    =  A. 증적 추가 등록 list
    =
    ================================================================*/
    public function list(Evidence_AddtionRepository $evidence_addtionRepo, UserRepository $userRepo, ApprovalLineUserConfigRepository $approvalLineUserConfigRepo)
    {
        /*---------------------------
        - 1. 통제영역 [코드 접두어]
        ----------------------------*/
        $codeFirstCriteria = CodeFirstCriterion::all();
        /*-----------------------
        - 2. 통제항목 modal
        ------------------------*/
        $tabs = $evidence_addtionRepo->get_tabs();
        /*-----------------------
        - 3. 결재라인 or 담당자
        ------------------------*/
        $is_exist_approval_line_user_config = $approvalLineUserConfigRepo->is_exist_users();

        $users_of_approval_lines_user_config = $approvalLineUserConfigRepo->get_approval_lines_user_config();
        /*-----------------------
        - 3. 결재라인 or 담당자
        ------------------------*/
        $users_of_company = $userRepo->get_users_of_company();
        /*-----------------------
        - 4.
        ------------------------*/
        return view('evidence.addtionRegistration.list')->with('codeFirstCriteria', $codeFirstCriteria)
            ->with('tabs', $tabs)
            ->with('is_exist_approval_line_user_config', $is_exist_approval_line_user_config)
            ->with('users_of_approval_lines_user_config', $users_of_approval_lines_user_config)
            ->with('users_of_company', $users_of_company);
    }

    /**@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    @
    @  B. [ AJAX ] INSERT 영역, 증적명
    @
    @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    public function insert_additionRegistration_using_ajax(Request $req, Evidence_AddtionRepository $evidence_addtionRepo, ApprovalLineUserConfigRepository $approvalLineUserConfigRepo, ApprovalLineRepogitory $approvalLineRepo)
    {
        /*--------------------
        - 0. ETC 값
        ---------------------*/
        $company_id = $req->json('company_id');
        $standard_id = $req->json('standard_id');
        /*--------------------
        - 1.통제영역 SELECT
        ---------------------*/
        $code_first_part = $req->json('control_area');
        /*--------------------
        - 2.증적명 INPUT
        ---------------------*/
        $evidence_name = $req->json('evidence_name');
        /*--------------------
        - 3.증적코드
        ---------------------*/

        /*--------------------
        - 4.실사여부
        ---------------------*/
        $field_inspection = $req->json('field_inspection');
        /*--------------------
        - 5.주기
        ---------------------*/
        $cycle = $req->json('cycle');
        /*--------------------
        - 6.[modal] 결재
        ---------------------*/
        $approval_line_ids = $req->json('approval_line_ids');
        /*--------------------
        - 7.설명
        ---------------------*/
        $content = $req->json('content');
        /*--------------------
        - 8.[modal] 통제항목
        ---------------------*/
        $contorl_items = $req->json('contorl_items');
        /*--------------------
        - 9.[modal] 담당자
        ---------------------*/
        $evidence_managers = $req->json('evidence_managers');
        /*==========================================================
        =
        =  증적 CODE 첫번째 문자열이 있으면
        =
        ===========================================================*/
        IF( $code_first_part )
        {
            /*--------------------------------
            - 1. CODE 생성
            ---------------------------------*/
            $completedCODE = $this->codeGenertorSerivce->getCompletedCODE($company_id, $standard_id, $code_first_part, $field_inspection);
            /*--------------------------------
            - 2. DB INSERT
            ---------------------------------*/
            if($completedCODE == null)
            {
                return response()->json(['NOT FOUNT PREVIOS_CODE IN DB']);
            }
            else
            {
                /********************************************************
                 *
                 *  1__ [증적추가등록] evidences 테이블에 INSERT
                 *
                 *******************************************************/
                $evidence_addtionRepo->setCompanyId($company_id)->setStandardId($standard_id)->setEvidenceName($evidence_name)->setCompletedCODE($completedCODE)->setContorlItems($contorl_items)
                                     ->setEvidenceManagers($evidence_managers)->setContent($content)->setFieldInspection($field_inspection)->setCycle($cycle);

                $evidence_last_id = $evidence_addtionRepo->insert_to_evidences();
                /********************************************************
                 *
                 *  2__ [증적추가등록] evidence_ismsp3 테이블에 INSERT
                 *
                 *******************************************************/
                $evidence_ismsp3_last_id = $evidence_addtionRepo->insert_to_evidence_ismsp3($evidence_last_id);
                /*********************************************************
                 *
                 *  3__ [증적추가등록] operatingdocuments 테이블에 INSERT
                 *
                 ********************************************************/
                $operating_last_id = $evidence_addtionRepo->insert_to_operatingdocuments();
                /*********************************************************
                 *
                 *  4__ [증적추가등록] 증적관리 담당자 evidence_manager 테이블에 INSERT
                 *
                 ********************************************************/
                $evidence_addtionRepo->insert_to_eviece_manager($evidence_last_id);
                /*********************************************************
                 *
                 *  5__ 결과 json으로 보여주기
                 *
                 ********************************************************/

                if( $evidence_last_id && $evidence_ismsp3_last_id )
                {
                    return response()->json(['completedCODE' => $completedCODE]);
                }
                else
                {
                    return response()->json(['result' => "ERROR"]);
                }

            }//else_end





        }//IF_END
        ELSE // 증적 CODE 첫번째 문자열이 없으면
        {
            return response()->json(
                ['ERROR_1','코드 첫번째 자리가 없습니다!!!']
            );
        }//ELSE_END


    }
    /**@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    @
    @  C. [ AJAX ] 결재설정하기 설정변경 클릭시 [ AJAX ] INSERT approval_lines_user_config 테이블
    @
    @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    public function insert_approval_lines_user_config_using_ajax(Request $req, ApprovalLineUserConfigRepository $approvalLineUserConfigRepo)
    {
        $right_users = $req->input('right_users');

        $last_id = $approvalLineUserConfigRepo->insert_to_approval_line_user_config($right_users);

        if( $last_id )
        {
            return response()->json([
                "__RESULT__" => "__OK__"
            ]);
        }
        else
        {
            return response()->json([
                "__RESULT__" => "__FAIL__"
            ]);
        }

    }
    /**@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    @
    @  C. [ AJAX ] 증적 담당자 Modal -> 담당자 변경 클릭시 -> display 담당자 이름 얻기
    @
    @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    public function get_evidence_manager_names(Request $req, Evidence_AddtionRepository $evidence_addtionRepo)
    {
        $evidence_managers = $req->input('evidence_managers');

        $selected_user_names = $evidence_addtionRepo->get_evidence_manager_names($evidence_managers);

        return response()->json([
            "selected_user_names" => $selected_user_names
        ]);
    }
    /**@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    @
    @  D. [ AJAX ]
    @
    @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    public function get_selected_control_items(Request $req, Evidence_AddtionRepository $evidence_addtionRepo)
    {
        $control_items = $req->input('control_items');

        $selected_control_items = $evidence_addtionRepo->get_selected_control_items($control_items);


        return response()->json([
            "selected_control_items" => $selected_control_items
        ]);
    }

























}
