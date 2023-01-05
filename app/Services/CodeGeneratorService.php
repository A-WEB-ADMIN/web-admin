<?php

namespace App\Services;

use App\Repositories\CompanyRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CodeGeneratorService
{
    protected $companyRepo;
    /**
     *  생성자
     *
     */
    public function __construct(CompanyRepository $companyRepository)
    {
        $this->companyRepo = $companyRepository;
    }

    /*===============================
    =
    =  완성된 최종 CODE를 얻는다
    =
    ================================*/
    public function getCompletedCODE(string $company_id, string $standard_id, string $code_first_part, string $field_inspection)
    {
        /*--------------------------------------------------------------------
        -
        - 1. "ISMS-01-" 를 sql like 로 검색한다
        -
        ----------------------------------------------------------------------*/
        $evidence_lastest = DB::table('evidences')
            ->where('company_id', $company_id )
            ->where('standard_id', $standard_id)
            ->where('CODE', 'like', $code_first_part.'%')
            ->orderByDesc('id')
            ->first();
        /*--------------------------------------------------------------------
        -
        - 2. $evidence_lastest 객체가 NULL 일수도 있으므로 조건분기
        -
        ----------------------------------------------------------------------*/
        //logger("evidence_lastest_CODE___::" . $evidence_lastest->CODE);

        IF( is_null($evidence_lastest) )
        {
            return null;
        }
        ELSE
        {
            $PREVIOUS_CODE = $evidence_lastest->CODE;
        }
        /*--------------------------------------------------------------------
        -
        - 3. 있으면 DB에서 가져온 "ISMS-01-05" 문자열에서 뒤에 "05"를 잘라낸후
        -
        ----------------------------------------------------------------------*/
        IF( $field_inspection == "실사")
        {
            $codeLastPart = "실사";
        }
        ELSE
        {
            if( isset($PREVIOUS_CODE) )
            {
                $CODE_INTEGER = intval(Str::substr($PREVIOUS_CODE,'8', '2'));

                //logger("__CODE_INTEGER:" . $CODE_INTEGER );

                //logger("__CODE_INTEGER__type:" . gettype($CODE_INTEGER) );


                $length = strlen($CODE_INTEGER);

                //logger("__code_length:" . $length);


                $CODE_NEW_INTEGER =  $CODE_INTEGER + 1;

                // 기존 숫자 길이가 1자리수 이면
                if($CODE_NEW_INTEGER < 10)
                {
                    //logger("__111__");
                    $codeLastPart = "0" . $CODE_NEW_INTEGER;
                }
                else if($CODE_NEW_INTEGER >= 10)
                {
                    //logger("__222__");
                    $codeLastPart = $CODE_NEW_INTEGER;
                }
                else
                {
                    //
                }
            }
            else //없으면 "-01"을 문자열로 합치고
            {
                $codeLastPart = "TEST-01-";
            }
        }
        /*--------------------------------------------------------------------
        -
        - 4. 최종 CODE
        -
        ----------------------------------------------------------------------*/
        $completedCODE = $code_first_part . $codeLastPart;

        return $completedCODE;

    }



























}