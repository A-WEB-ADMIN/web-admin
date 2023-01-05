<?php

namespace App\Http\Controllers\Diagnosis;

use App\Http\Controllers\Controller;
use App\Models\DiagnosisState;
use App\Repositories\DiagnosisHistoryRepository;
use Illuminate\Http\Request;
use App\Repositories\DiagnosisRepository;
use App\Repositories\DiagnosisStateRepository;
use App\Repositories\Ismsp4Repository;
use Illuminate\Support\Facades\DB;

class Flag_1_Controller extends Controller
{

    /*==========================================================================
    =
    =  1. 차트
    =
    ===========================================================================*/
    public function chart(Request $req, DiagnosisRepository $diagnosisRepo)
    {
        /*----------------------------
        - 1. 도넛
        ----------------------------*/
        $bad_percent = $diagnosisRepo->get_flag_1_for_Doughnut();
        /*----------------------------
        - 2. 레이더
        ----------------------------*/
        $diagnosisRepo->get_flag_1_for_Radar();
        /*----------------------------
        - 3. stacked bar
        ----------------------------*/
        $chartdata = $diagnosisRepo->get_flag_1_for_Bar();

        $domains_bar = $chartdata->pluck('domain');
        $goods_bar = $chartdata->pluck('good');
        $bads_bar = $chartdata->pluck('bad');
        $not_dones_bar = $chartdata->pluck('not_done');
        /*----------------------------
        - 4.
        ----------------------------*/
        return view('diagnosis.flag_1.chart')->with([
            "bad_percent" => $bad_percent,



            "domains_bar" => $domains_bar,
            "goods_bar" => $goods_bar,
            "bads_bar" => $bads_bar,
            "not_dones_bar" => $not_dones_bar,
        ]);

    }
    /*========================================================================
    =
    =  2. list
    =
    =========================================================================*/
    public function list(Request $req, DiagnosisRepository $diagnosisRepo, Ismsp4Repository $ismsp4Repo, DiagnosisHistoryRepository $diagnosisHistoryRepo)
    {
        /*-------------------------------------
        - 1. ismsp4s 에 DATA 몇개가 있는지
        -------------------------------------*/
        $count_ismsp4s = $ismsp4Repo->get_count_ISMS_P1_from_ismsp4s();
        /*-------------------------------------
        - 2. diagnoses 에 DATA 몇개가 있는지
        -------------------------------------*/
        $count_diagnoses = $diagnosisRepo->get_count_ISMS_P1_from_diagnoses();
        /*------------------------------------
        - 3. diagnosis_statuses 상태
        -------------------------------------*/
        $diagnosis_state =  DiagnosisState::where('type', 'ISMS-P1')->get()->first();

        if($diagnosis_state)
        {
            $state = $diagnosis_state->state;
        }
        else
        {
            $state = "";
        }
        /*------------------------------------
        - 4. diagnosis_histories 날짜 뽑아오기
        -------------------------------------*/
        $datetimes = $diagnosisHistoryRepo->get_datetime_from_diagnosis_histories();
        /*------------------------------------
        - 5. 리스트에 뿌릴 DATA
        -------------------------------------*/
        $domain = $req->input('domain');
        $datetime = $req->input('datetime');


        $latest_datetime = DB::table('diagnosis_histories')->max('created_at');
        $flag_1_diagnoses = $diagnosisRepo->get_flag_1_of_diagnoses($domain, $datetime, $latest_datetime);

        return view('diagnosis.flag_1.list')->with('datetimes', $datetimes)
                                                  ->with('count_ismsp4s', $count_ismsp4s)
                                                  ->with('count_diagnoses', $count_diagnoses)
                                                  ->with('state', $state)
                                                  ->with('flag_1_diagnoses', $flag_1_diagnoses);
    }

    /*========================================================================
    =
    =  3. INSERT to diagnoses
    =
    =========================================================================*/
    public function insert_to_diagnoses(Request $req, DiagnosisRepository $diagnosisRepo)
    {
        $ids = $req->json('ids');
        $company_id = $req->json('company_id');
        $explanations = $req->json('explanations');
        $grades = $req->json('grades');


        $result = $diagnosisRepo->insert_to_diagnoses($ids, $company_id, $explanations, $grades);


        return response()->json([
            "__RESULT__" => $explanations
        ]);
    }
    /*========================================================================
    =
    =  4. INSERT to diagnosis_states
    =
    =========================================================================*/
    public function insert_or_update_to_diagnosis_states(Request $req, DiagnosisStateRepository $diagnosisStateRepo)
    {
        $company_id = $req->json('company_id');
        $type = $req->json('type');


        $last_id = $diagnosisStateRepo->insert_or_update_to_diagnosis_states($company_id, $type);

        if($last_id)
        {
            return response()->json([
                "RESULT" => "SUCCESS"
            ]);
        }
        else
        {
            return response()->json([
                "RESULT" => "FAIL"
            ]);
        }

    }
    /*========================================================================
    =
    =  5. INSERT to diagnosis_histories
    =
    =========================================================================*/
    public function insert_to_diagnosis_histories(Request $req, DiagnosisHistoryRepository $diagnosisHistoryRepo, DiagnosisStateRepository $diagnosisStateRepo, DiagnosisRepository $diagnosisRepo)
    {
        $company_id = $req->json('company_id');
        $type = $req->json('type');

        $diagnosisHistoryRepo->insert_to_diagnosis_histories($company_id, $type);

        $diagnosisStateRepo->update_to_diagnosis_states($company_id, $type);

        $diagnosisRepo->delete_to_diagnoses($company_id, $type);


        return response()->json([
            "_RESULT_" => "OK"
        ]);
    }

























}
