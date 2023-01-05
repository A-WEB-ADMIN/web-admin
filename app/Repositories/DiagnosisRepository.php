<?php

namespace App\Repositories;

use App\Models\Ismsp4;
use Illuminate\Support\Facades\DB;
use App\Models\Diagnosis;

class DiagnosisRepository
{

    /*===============================================================
    =
    =  1.1 도넛 차트용
    =
    ================================================================*/
    public function get_flag_1_for_Doughnut()
    {
        /*-------------------------
        - 1. ISMS-P1 전체 갯수
        --------------------------*/
        $total = DB::table('ismsp4s')->where('type', 'ISMS-P1')->count();
        /*-------------------------
        - 2. ISMS-P1 취약 갯수
        --------------------------*/
        $sql = " SELECT count( CASE WHEN grade = '0' or grade = '1' or grade = '2' or grade = '3' or grade = '4' THEN 1 END ) bad       ";
        $sql.= " FROM diagnoses                                                                                                         ";

        $datasets = collect(DB::select($sql))->map(function($arr)
        {
            return (object)$arr;
        });
        
        $obj = $datasets->first();
        $bad = (int)$obj->bad;
        /*-------------------------
        - 3. 취약 퍼센트
        --------------------------*/
        $bad_percent = round( ($bad / $total) * 100 );
        return $bad_percent;
    }
    /*===============================================================
    =
    =  1.2 레이더
    =
    ================================================================*/
    public function get_flag_1_for_Radar()
    {
        /*------------------------------
        - 1. 현재 현황
        -------------------------------*/





    }
    /*===============================================================
    =
    =  1.3 stacked bar 차트용
    =
    ================================================================*/
    public function get_flag_1_for_Bar()
    {
        $sql = " SELECT domain, depth, grade,                                                                                               ";
        $sql.= "                                                                                                                            ";
        $sql.= "        count( CASE WHEN grade = '' THEN 1 END ) not_done,                                                                  ";
        $sql.= "        count( CASE WHEN grade = '0' or grade = '1' or grade = '2' or grade = '3' or grade = '4' THEN 1 END ) bad,          ";
        $sql.= "        count( CASE WHEN grade = '5'  THEN 1 END ) good                                                                     ";
        $sql.= "                                                                                                                            ";
        $sql.= " FROM                                                                                                                       ";
        $sql.= "       (                                                                                                                    ";
        $sql.= "         SELECT i.domain, i.depth, ifnull(d.grade, '') grade                                                                ";
        $sql.= "         FROM                                                                                                               ";
        $sql.= "              (                                                                                                             ";
        $sql.= "                 SELECT id, domain, depth                                                                                   ";
        $sql.= "                 FROM ismsp4s                                                                                               ";
        $sql.= "                 WHERE type = 'ISMS-P1'                                                                                     ";
        $sql.= "              )as i                                                                                                         ";
        $sql.= " LEFT OUTER JOIN                                                                                                            ";
        $sql.= "                (                                                                                                           ";
        $sql.= "                   SELECT ismsp4_id, company_id, type, depth, explanation, grade                                            ";
        $sql.= "                   FROM diagnoses                                                                                           ";
        $sql.= "                   WHERE company_id=1                                                                                       ";
        $sql.= "                 )as d ON i.id = d.ismsp4_id                                                                                ";
        $sql.= "       )as join_table                                                                                                       ";
        $sql.= " GROUP BY domain                                                                                                            ";
        $sql.= " ORDER BY depth                                                                                                             ";



        $datasets = collect(DB::select($sql))->map(function($arr)
        {
            return (object)$arr;
        });


        return $datasets;

    }

    /*===============================================================
    =
    =  2. 리스트 DATA
    =
    ================================================================*/
    public function get_flag_1_of_diagnoses($domain, $datetime, $latest_datetime)
    {

        $sql = " SELECT i.id, i.type, i.depth, i.clause, h.explanation as old_explanation, h.grade as old_grade , d.explanation, d.grade    ";
        $sql.= " FROM                                                                                                                       ";
        $sql.= "      (                                                                                                                     ";
        $sql.= "         SELECT id, type, depth, clause                                                                                     ";
        $sql.= "         FROM ismsp4s                                                                                                       ";
        $sql.= "         WHERE type = 'ISMS-P1'                                                                                             ";
        
    if($domain != "전체")
    {
        $sql .= "         AND domain = '$domain'                                                                                            ";
    }

        $sql.= "      )as i                                                                                                                 ";

    if( $datetime )
    {
        $sql.= " LEFT OUTER JOIN                                                                                                            ";
        $sql.= "                (                                                                                                           ";
        $sql.= "                  SELECT ismsp4_id, company_id, type, explanation, grade, created_at                                        ";
        $sql.= "                  FROM diagnosis_histories                                                                                  ";
        $sql.= "                  WHERE created_at = '$datetime'                                                                            ";
        $sql.= "                 )as h ON i.id = h.ismsp4_id                                                                                ";
    }
    else
    {
        $sql.= " LEFT OUTER JOIN                                                                                                            ";
        $sql.= "                (                                                                                                           ";
        $sql.= "                  SELECT ismsp4_id, company_id, type, explanation, grade, created_at                                        ";
        $sql.= "                  FROM diagnosis_histories                                                                                  ";
        $sql.= "                  WHERE created_at = '$latest_datetime'                                                                  ";
        $sql.= "                 )as h ON i.id = h.ismsp4_id                                                                                ";
    }

        $sql.= " LEFT OUTER JOIN diagnoses as d ON i.id = d.ismsp4_id                                                                       ";
        $sql.= " ORDER BY i.id                                                                                                              ";

        $diagnoses = collect(DB::select($sql))->map(function($arr)
        {
            return (object)$arr;
        });

        return $diagnoses;
    }
    /*===============================================================
    =
    =  3. diagnoses 테이블에 DATA가 몇개가 있는지
    =
    ================================================================*/
    public function get_count_ISMS_P1_from_diagnoses()
    {
        $count_diagnoses = DB::table('diagnoses')->where('type', 'ISMS-P1')->count();
        return $count_diagnoses;
    }
    /*===============================================================
    =
    =  4. insert_to_diagnoses
    =
    ================================================================*/
    public function insert_to_diagnoses($ids, $company_id, $explanations, $grades)
    {

        for($i=0; $i<count($ids) ;$i++)
        {
            logger("__ids:" . $ids[$i]);
            /*---------------------------------------------
            - 1. id에 해당하는 ismsp4s 테이블 가져오기
            ----------------------------------------------*/
            $ismsp4 = DB::table('ismsp4s')->where('id', $ids[$i])->first();

            logger("__ismsp4:" . $ismsp4->depth );
            logger("__grades:" . json_encode($grades) );

            if( DB::table('diagnoses')->where('depth', $ismsp4->depth)->exists() )
            {
                /*--------------------------------------------
                - 2. 기존에 값이 있으면 UPDATE
                ---------------------------------------------*/
                $last_id = DB::table('diagnoses')->where('depth', $ismsp4->depth)->update([
                    "explanation" => $explanations[$i],
                    "grade" => $grades[$i]
                ]);
            }
            else
            {
                /*--------------------------------------------
                - 3. 기존에 값이 없으면 INSERT
                ---------------------------------------------*/
                $last_id = DB::table('diagnoses')->insertGetId([
                    "ismsp4_id" => $ids[$i],
                    "company_id" => $company_id,
                    "type" => $ismsp4->type,
                    "depth" => $ismsp4->depth,
                    "explanation" => $explanations[$i],
                    "grade" => $grades[$i]
                ]);
            }

        }//for_end


        return $last_id;
    }
    /*===============================================================
    =
    =  5. delete_to_diagnoses
    =
    ================================================================*/
    public function delete_to_diagnoses($company_id, $type)
    {
        DB::table('diagnoses')->where('company_id', $company_id)->where('type', $type)->delete();

    }










}

























