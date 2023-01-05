<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class EvidenceRepository
{
    protected $req;
    protected $company_repo;

    /**
     *
     */
    public function __construct(CompanyRepository $companyRepo)
    {
        $this->req = request();
        $this->company_repo = $companyRepo;
    }
    /**=================================================
     *
     * getEvidences()
     *
    ====================================================*/
    public function getEvidences(string $company_id, string $standard_id)
    {
        if( $this->req->query('company_id') && $this->req->query('standard_id') )
        {

            $sql = " SELECT e.id, f.evidence_id, e.CODE, e.subject, f.name, e.cycle, e.created_at, f.upload_at, f.col1, f.col2, f.col3, f.col4, f.col5, f.col6, f.col7, f.col8, f.col9, f.col10, f.col11, f.col12, f.col13, t.id as template_id    ";
            $sql.= " FROM                                                                                                                                                                                                               ";
            $sql.= "      (                                                                                                                                                                                                             ";
            $sql.= "        SELECT id, company_id, CODE, subject, cycle, created_at                                                                                                                                                     ";
            $sql.= "        FROM evidences                                                                                                                                                                                              ";
            $sql.= "        WHERE company_id = {$company_id} AND standard_id = {$standard_id}                                                                                                                                           ";
            $sql.= "      ) as e                                                                                                                                                                                                        ";
            $sql.= " LEFT OUTER JOIN	                                                                                                                                                                                                ";
            $sql.= "                 (                                                                                                                                                                                                  ";
            $sql.= " 		           SELECT evidence_id, name, upload_at, count(coltemp1) as col1, count(coltemp2) as col2, count(coltemp3) as col3, count(coltemp4) as col4, count(coltemp5) as col5, count(coltemp6) as col6, count(coltemp7) as col7, count(coltemp8) as col8, count(coltemp9) as col9, count(coltemp10) as col10, count(coltemp11) as col11, count(coltemp12) as col12, count(coltemp13) as col13 ";
            $sql.= "                   FROM                                                                                                                                                                                             ";
            $sql.= "                         (                                                                                                                                                                                          ";
            $sql.= "                             SELECT evidence_id,                                                                                                                                                                    ";
            $sql.= "                                    name,                                                                                                                                                                           ";
            $sql.= "                                    upload_at,                                                                                                                                                                      ";
            $sql.= "                                    CASE when month(upload_at) = month( date_add(now(), interval -6 month) ) then count(*)  END as coltemp1,                                                                        ";
            $sql.= "                                    CASE when month(upload_at) = month( date_add(now(), interval -5 month) ) then count(*)  END as coltemp2,                                                                        ";
            $sql.= "                                    CASE when month(upload_at) = month( date_add(now(), interval -4 month) ) then count(*)  END as coltemp3,                                                                        ";
            $sql.= "                                    CASE when month(upload_at) = month( date_add(now(), interval -3 month) ) then count(*)  END as coltemp4,                                                                        ";
            $sql.= "                                    CASE when month(upload_at) = month( date_add(now(), interval -2 month) ) then count(*)  END as coltemp5,                                                                        ";
            $sql.= "                                    CASE when month(upload_at) = month( date_add(now(), interval -1 month) ) then count(*)  END as coltemp6,                                                                        ";
            $sql.= "                                    CASE when month(upload_at) = month( now() ) then count(*)  END as coltemp7,                                                                                                     ";
            $sql.= "                                    CASE when month(upload_at) = month( date_add(now(), interval 1 month) ) then  count(*)  END as coltemp8,                                                                        ";
            $sql.= "                                    CASE when month(upload_at) = month( date_add(now(), interval 2 month) ) then  count(*)  END as coltemp9,                                                                        ";
            $sql.= "                                    CASE when month(upload_at) = month( date_add(now(), interval 2 month) ) then  count(*)  END as coltemp10,                                                                       ";
            $sql.= "                                    CASE when month(upload_at) = month( date_add(now(), interval 2 month) ) then  count(*)  END as coltemp11,                                                                       ";
            $sql.= "                                    CASE when month(upload_at) = month( date_add(now(), interval 2 month) ) then  count(*)  END as coltemp12,                                                                       ";
            $sql.= "                                    CASE when month(upload_at) = month( date_add(now(), interval 2 month) ) then  count(*)  END as coltemp13                                                                        ";
            $sql.= "                             FROM files                                                                                                                                                                             ";
            $sql.= "                             GROUP BY evidence_id, upload_at                                                                                                                                                        ";
            $sql.= "                             )as ff                                                                                                                                                                                 ";
            $sql.= "                    GROUP BY ff.evidence_id                                                                                                                                                                         ";
            $sql.= "                    )as f                                                                                                                                                                                           ";
            $sql.= "  ON e.id = f.evidence_id                                                                                                                                                                                           ";

            $sql.= "  LEFT OUTER JOIN templates as t ON e.id = t.evidence_id                                                                                                                                                                       ";






            $evidences = collect(DB::select($sql))->map(function($arr)
            {
                return (object)$arr;
            });

        }
        else
        {
            $evidences = null;
        }

        return $evidences;
    }
    /**=================================================
     *
     *
     *
    ====================================================*/
    public function getEvidenceNEWCODE($id)
    {
        $evidence = DB::table('evidences')->where('id', $id)->first();

        return $evidence->CODE;
    }
    /**=================================================
     *
     *
     *
    ====================================================*/
    public function update_filepath(string $id)
    {
        DB::table('evidences')->where('id', $id)->update([
            '' => ''
        ]);

    }
    /**=================================================
     *
     *  업로드된 파일이 있는지? 확인
     *
    ====================================================*/
    public function is_uploaded_file(string $evidence_id)
    {
        $exists = DB::table('files')->where('evidence_id', $evidence_id)->exists();

        if( $exists )
        {
            $result = true;
        }
        else
        {
            $result = false;
        }

        return $result;
    }

































}