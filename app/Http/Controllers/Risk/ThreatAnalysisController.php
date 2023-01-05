<?php

namespace App\Http\Controllers\Risk;

use App\Http\Controllers\Controller;
use App\Repositories\ThreatAnalysisRepository;
use Illuminate\Http\Request;

class ThreatAnalysisController extends Controller
{

    public function list(Request $req, ThreatAnalysisRepository $threatAnalysisRepo)
    {

        $treatgrades = $threatAnalysisRepo->get_threatgrades();

        return view('risk.threatAnalysis.list')->with('treatgrades', $treatgrades);
    }
}
