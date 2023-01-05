<?php

namespace App\Repositories;

use App\Models\Diagnosis;
use App\Models\DiagnosisHistory;
use Illuminate\Support\Facades\DB;

class DiagnosisHistoryRepository
{

    /*======================================================================
    =
    = 1.
    =
    =======================================================================*/
    public function insert_to_diagnosis_histories($company_id, $type)
    {
        $diagnoses = Diagnosis::where('company_id', $company_id)->where('type', $type)->get();

        foreach($diagnoses as $diagnosis)
        {

            DB::table('diagnosis_histories')->insertGetId([
                "ismsp4_id" => $diagnosis->ismsp4_id,
                "company_id" => $diagnosis->company_id,
                "type" => $diagnosis->type,
                "depth" => $diagnosis->depth,
                "explanation" => $diagnosis->explanation,
                "grade" => $diagnosis->grade,
                "created_at" => now()
            ]);

        }
    }
    /*======================================================================
    =
    = 2.
    =
    =======================================================================*/
    public function get_datetime_from_diagnosis_histories()
    {
        $datetimes = DB::table('diagnosis_histories')->groupBy('created_at')->orderBy('created_at', 'desc')->pluck('created_at')->toArray();

        return $datetimes;
    }



}