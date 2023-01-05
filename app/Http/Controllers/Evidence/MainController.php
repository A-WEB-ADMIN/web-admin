<?php

namespace App\Http\Controllers\Evidence;

use App\Http\Controllers\Controller;
use App\Models\CodeFirstCriterion;
use App\Repositories\EvidenceRepository;
use App\Services\CodeGeneratorService;
use App\Services\DateTimeService;
use Illuminate\Http\Request;

class MainController extends Controller
{
    protected $evidenceRepo;
    protected $datetimeService;
    protected $codeGenertorSerivce;
    
    /**
     *  생성자
     */
    public function __construct(EvidenceRepository $evidenceRepo, DateTimeService $dateTimeService, CodeGeneratorService $codeGenertorSerivce)
    {
        $this->evidenceRepo = $evidenceRepo;
        $this->datetimeService = $dateTimeService;
        $this->codeGenertorSerivce = $codeGenertorSerivce;
    }

    /**============================================
    =
    =  1. 증적목록
    =
    =============================================*/
    public function list(Request $req)
    {
        $company_id = $req->input('company_id');
        $standard_id = $req->input('standard_id');

        if( $company_id && $standard_id )
        {
            $evidences = $this->evidenceRepo->getEvidences($company_id, $standard_id);

            $period = $this->datetimeService->getMonthsInPeriod();



            return view('evidence.main.list')
                ->with('evidences', $evidences)
                ->with('period', $period);
        }
        else
        {
            return "ERROR";
        }
    }



    /**============================================
    =
    =  ???
    =
    =============================================*/
    public function register(Request $req)
    {
        return view('evidence.main.register');
    }

}






























