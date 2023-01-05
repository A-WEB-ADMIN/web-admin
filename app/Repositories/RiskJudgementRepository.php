<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class RiskJudgementRepository
{

    public function get_riskJudgements()
    {

        $sql = " SELECT d.depth, d.type, d.explanation, d.grade_d, a.domain, a.clause, a.grade_asset, a.explanation_risk, a.protection_plan, t.code, t.subdomain, t.explanation_threat, t.grade_t ";
        $sql.= " FROM                                                                                                                                                                             ";
        $sql.= "     (                                                                                                                                                                            ";
        $sql.= "       SELECT  depth, company_id, type, explanation,                                                                                                                              ";
        $sql.= "          (                                                                                                                                                                       ";
        $sql.= "              CASE                                                                                                                                                                ";
        $sql.= "                  WHEN grade_diagnosis = 'N/A' THEN 'N/A'	                                                                                                                      ";
        $sql.= "                  WHEN grade_diagnosis = '5' THEN '-'                                                                                                                             ";
        $sql.= "                  WHEN grade_diagnosis = '4' THEN '1'                                                                                                                             ";
        $sql.= "                  WHEN (grade_diagnosis = '3' or grade_diagnosis= '2') THEN '2'                                                                                                   ";
        $sql.= "                  WHEN (grade_diagnosis = '1' or grade_diagnosis= '0') THEN '3'	                                                                                                  ";
        $sql.= "              END                                                                                                                                                                 ";
        $sql.= "          )as grade_d                                                                                                                                                             ";
        $sql.= "       FROM diagnosis_histories                                                                                                                                                   ";
        $sql.= "       )as d                                                                                                                                                                      ";
        $sql.= " JOIN assetgrades as a  ON d.depth = a.depth                                                                                                                                      ";
        $sql.= "                                                                                                                                                                                  ";
        $sql.= " JOIN                                                                                                                                                                             ";
        $sql.= "      (                                                                                                                                                                           ";
        $sql.= "          SELECT code, domain, subdomain, explanation_threat,                                                                                                                     ";
        $sql.= "                 (                                                                                                                                                                ";
        $sql.= "                     confidentiality + integrity + availability                                                                                                                   ";
        $sql.= "                  )as grade_t                                                                                                                                                     ";
        $sql.= "          FROM threatgrades                                                                                                                                                       ";
        $sql.= "      )as t  ON t.code = a.threatcode                                                                                                                                             ";



        $riskJudgements = collect(DB::select($sql))->map(function($arr)
        {
            return (object)$arr;
        });



        return $riskJudgements;
    }


}