<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class DiagnosisStateRepository
{

    /*=====================================================================
    =
    =  1. STEP 1
    =
    ======================================================================*/
    public function insert_or_update_to_diagnosis_states($company_id, $type)
    {
        if( DB::table('diagnosis_states')->where('company_id', $company_id)->where('type', $type)->exists() )
        {
            $last_id = DB::table('diagnosis_states')->where('company_id', $company_id)->where('type', $type)->update([
                "state" => "APPLY_TO_RISK"
            ]);
        }
        else
        {
            $last_id = DB::table('diagnosis_states')->insertGetId([
                "company_id" => $company_id,
                "type" => $type,
                "state" => "APPLY_TO_RISK"
            ]);
        }






        return $last_id;
    }

    /*=====================================================================
    =
    =  2. STEP 2
    =
    ======================================================================*/
    public function update_to_diagnosis_states($company_id, $type)
    {
        DB::table('diagnosis_states')->where('company_id', $company_id)->where('type', $type)->update([
            "state" => "NEW"
        ]);
    }




}