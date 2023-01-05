<?php

namespace App\Repositories;


use App\Models\Threatgrade;

class ThreatAnalysisRepository
{

    /*=======================================================
    =
    =  리스트
    =
    ========================================================*/
    public function get_threatgrades()
    {
        $treatgrades = Threatgrade::all();
        
        //dd($treatgrades);

        return $treatgrades;
    }



}