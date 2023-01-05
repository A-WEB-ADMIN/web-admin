<?php

namespace App\Http\Controllers\Evidence;

use App\Models\Template;
use App\Repositories\TemplateRepository;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\isEmpty;
use Unoconv\Unoconv;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Repositories\EvidenceRepository;
use App\Repositories\Evidence_DetailRepository;
use App\Repositories\FileRepository;
use App\Repositories\DocumentRepository;
use App\Repositories\ApprovalLineRepogitory;
use App\Notifications\DBNotification;
use App\Models\Document;
use App\Models\User;
use App\Events\PushEvent;
use App\Models\ApprovalLine;


class DetailController extends Controller
{

    /**=======================================================
    =
    =  A. list
    =
    =========================================================*/
    public function list(Request $req, EvidenceRepository $evidenceRepo, Evidence_DetailRepository $evidence_detailRepo, TemplateRepository $templateRepo, FileRepository $fileRepo)
    {
        /*-----------------
        - 1.
        -----------------*/
        $company_id = $req->input('company_id');
        $evidence_id = $req->input('evidence_id');
        $templatedefault_id =$req->input('templatedefault_id');
        $template_id =$req->input('template_id');
        /*-----------------
        - 2.
        -----------------*/
        $evidence_datail = $evidence_detailRepo->get_evidence_detail($evidence_id);

        $templatedefaults = $templateRepo->get_template_defaults();

        $template = $templateRepo->get_template($evidence_id);

        if( $templatedefault_id )
        {
            $template_default = $templateRepo->get_template_default($templatedefault_id);
        }
        else
        {
            $template_default = null;
        }
        /*-----------------
        - 3. 존재 여부
        -----------------*/
        $is_saved_template = $templateRepo->is_saved_template($company_id, $evidence_id);

        $is_uploaded_file = $evidenceRepo->is_uploaded_file($evidence_id);
        $pdf_path = $fileRepo->get_pdfPath($evidence_id);
        /*-----------------
        - 4. view
        -----------------*/
        return view('evidence.detail.list')->with('evidence_datail', $evidence_datail)
                                                ->with('templatedefaults', $templatedefaults)
                                                ->with('template_default', $template_default)
                                                ->with('template', $template)
                                                ->with('is_saved_template', $is_saved_template)
                                                ->with('is_uploaded_file', $is_uploaded_file)
                                                ->with('pdf_path', $pdf_path);

    }









    /**=======================================================
    =
    =  B. 파일 -> PDF 변환
    =
    =========================================================*/
    public function file_to_pdf(Request $req, FileRepository $fileRepo)
    {
        /*-----------------------------------------
        -
        -  1. $file 객체
        -
        -----------------------------------------*/
        $file = $req->file('my_file');
        /*-----------------------------------------
        -
        -  2. 변수 선언
        -
        -----------------------------------------*/
        $date = Carbon::now()->format('Ymd_His');
        $folder = 'documents';
        $orgin_file_name = $file->getClientOriginalName();
        $only_name = pathinfo($orgin_file_name, PATHINFO_FILENAME);
        $size = $file->getSize();
        /*-----------------------------------------
        -
        -  3. public에 .doc 파일 저장하기
        -
        -----------------------------------------*/
        $file->move( public_path($folder), $orgin_file_name);
        /*-----------------------------------------------------------
        -
        -  4. PDF 내부 경로 미리 변수에 세팅
        -
        ------------------------------------------------------------*/
        $target_temp_path = public_path($folder) . '/' . $orgin_file_name;
        $pdf_temp_path = public_path($folder) . '/' . $only_name . '.pdf';
        /*------------------------------------------------------------
        -
        -  5. 원본파일을 PDF 파일로 컨버팅해서 저장
        -
        -------------------------------------------------------------*/
        $unoconv = Unoconv::create([
            'timeout' => 42,
            'unoconv.binaries' => '/opt/unoconv'
        ]);

        $unoconv->transcode($target_temp_path , 'pdf', $pdf_temp_path);

        /*------------------------------------------------------------
        -
        -  6. storage 안에 PDF 파일 저장
        -
        -------------------------------------------------------------*/
        $pdf_path_storage = Storage::putFileAs('public/documents', new File($pdf_temp_path),  $date . $only_name . '.pdf');
        $symbolic_url = Storage::url($pdf_path_storage);
        /*------------------------------------------------------------
        -
        -  7. 임시 파일2개 삭제
        -
        -------------------------------------------------------------*/
        \Illuminate\Support\Facades\File::delete($target_temp_path);
        \Illuminate\Support\Facades\File::delete($pdf_temp_path);
        /*------------------------------------------------------------
        -
        -  8. DB에 PDF파일 경로 저장
        -
        ------------------------------------------------------------*/
        $company_id = $req->input('company_id');

        logger("__company_id:" . $company_id);

        $evidence_id = $req->input('evidence_id');

        $result = $fileRepo->insert_evidence_id_and_PDFPath($company_id, $evidence_id, $symbolic_url, $size);

        if( $result )
        {
            return response()->json([
                'status' => 200
            ]);
        }
        else
        {
            return response()->json([
                'status' => 'ERROR'
            ]);
        }
    }
    /**=======================================================
    =
    =  C. 템플릿 저장
    =
    ==========================================================*/
    public function save_to_template(Request $req , TemplateRepository $templateRepo)
    {
        $company_id = $req->input('company_id');
        $evidence_id = $req->input('evidence_id');
        $templatedefault_id = $req->input('templatedefault_id');
        $templatedefault_name = $req->input('templatedefault_name');

        $template_id = $req->input('template_id');

        $template_zone = $req->input('template_zone');
        $mime = "";


        $template_exist = DB::table('templates')->where('evidence_id', $evidence_id)->exists();

        //logger("__template_exist:" . $template_exist);

        logger("__template_id:" . $template_id);

            /*--------------------------------
            -  템플릿 저장한게 없으면
            ---------------------------------*/
        if( ((int)$template_id) > 0 )
        {   /*--------------------------------
            -  템플릿 저장한게 있으면
            ---------------------------------*/
            logger("__111");
            $result = $templateRepo->update_to_template($template_id, $template_zone);
        }
        else
        {
            logger("__222");
            $result = $templateRepo->insert_to_template($company_id, $evidence_id, $templatedefault_name, $mime , $template_zone);
        }





        if($result)
        {
            return response()->json([
                'status' => 200
            ]);
        }
        else
        {
            return response()->json([
                'status' => 400
            ]);
        }
    }






    /**=======================================================
    =
    =  D. 템플릿 -> PDF 변환
    =
    ==========================================================*/
    public function template_to_pdf(Request $req, FileRepository $fileRepo, TemplateRepository $templateRepo)
    {
        $date = Carbon::now()->format('Y-m-d__H-i-s');
        $company_id = $req->input('company_id');
        $evidence_id = $req->input('evidence_id');
        $template_zone = $req->input('template_zone');
        $mime = "";

        $template_name = $req->input('template_name');
        if( $template_name == '')
        {
            $template_name = $date;
        }
        /*-----------------------------------------
        -
        -  1. 변수 선언
        -
        -----------------------------------------*/

        $origen_file_name =  $template_name . '.pdf';
        $folder = 'documents';
        /*-----------------------------------------
        -
        -  2. 실제 파일 저장하기
        -
        -----------------------------------------*/
        $file = $req->file('pdf');
        $file->move( public_path($folder), $origen_file_name);
        /*-----------------------------------------
       -
       -  3. PDF 경로 설정
       -
       -----------------------------------------*/
        $pdf_temp_path = public_path($folder) . '/' . $origen_file_name;
        /*-----------------------------------------
        -
        -  4
        -
        -----------------------------------------*/
        $pdf_path_storage = Storage::putFileAs('public/documents', new File($pdf_temp_path), $origen_file_name);
        $symbolic_url = Storage::url($pdf_path_storage);
        /*-----------------------------------------
        -
        -  5. DB에 PDF파일 경로저장
        -
        -----------------------------------------*/
        $size = "1";

        $templateRepo->insert_to_template($company_id, $evidence_id, $origen_file_name, $mime , $template_zone);

        $result = $fileRepo->insert_evidence_id_and_PDFPath($company_id, $evidence_id, $symbolic_url, $size);


        if($result)
        {
            return response()->json([
                'status' => 200
            ]);
        }
        else
        {
            return response()->json([
                'status' => 400
            ]);
        }
    }
    /**=======================================================
    =
    =  E. 결재버튼 클릭시 [ ajax ]  AND  푸쉬 메시지 보내기
    =
    =========================================================*/
    public function insert_document_and_approval_using_ajax(Request $req, DocumentRepository $documentRepo, ApprovalLineRepogitory $approvalRepo)
    {
        /*---------------------------------------------------
        -
        -  1. [ INSERT ] document, [ UPDATE ] approval
        -
        ---------------------------------------------------*/
        $evidence_id = $req->input('evidence_id');
        $company_id = $req->input('company_id');
        $subject = $req->input('subject');

        $document_id = $documentRepo->insert_document($evidence_id, $company_id, $subject);
        $approval_id = $approvalRepo->insert_to_approval_line($evidence_id, $document_id);

        if( $document_id && $approval_id )
        {
            $result = "SUCCESS";
        }
        else
        {
            $result = "FAIL";
        }
        /*---------------------------------------------------
        -
        -  2. 푸쉬 메이지 보내기
        -
        ---------------------------------------------------*/
        /*@@@@@@@@@@@@@@@@@@@@@@@@@@@
        - A. 메시지 읽음 안읽음 처리
        @@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/

        $arr = $approvalRepo->get_users_for_notification($document_id);
        $users = User::find($arr);

        Notification::send( $users, new DBNotification(Document::latest('id')->first()) );




        /*@@@@@@@@@@@@@@@@@@@@@@@@@@
        - B. 푸쉬 이벤트
        @@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
        $approval_lines = ApprovalLine::all();

        foreach($approval_lines as $approval_line)
        {
            event( new PushEvent($approval_line) );
        }
        /*---------------------------------------------------
        -
        -  3. 결과 json으로 답해주기
        -
        ---------------------------------------------------*/
        return response()->json([
            "result" => $result
        ]);
    }





}





























