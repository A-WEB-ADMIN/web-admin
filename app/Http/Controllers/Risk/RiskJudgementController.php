<?php

namespace App\Http\Controllers\Risk;

use App\Http\Controllers\Controller;
use App\Repositories\RiskJudgementRepository;
use Illuminate\Http\Request;

class RiskJudgementController extends Controller
{

    public function list(RiskJudgementRepository $riskJudgementRepo)
    {
        $riskJudgements = $riskJudgementRepo->get_riskJudgements();


        //dd($riskJudgements);


        return view('risk.riskJudgement.list')->with('riskJudgements', $riskJudgements);
    }

}
