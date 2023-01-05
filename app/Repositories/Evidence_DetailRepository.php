<?php

namespace App\Repositories;

use App\Models\Template;
use App\Models\Templatedefault;
use Illuminate\Http\Request;
use App\Models\Evidence;


class Evidence_DetailRepository
{
    protected $req;
    /*
     *
     */
    public function __construct(Request $req)
    {
        $this->req = $req;
    }
    /*===============================================================
    =
    =  1. [ JOIN ]
    =
    ================================================================*/
    public function get_evidence_detail($id)
    {
        $result = Evidence::with(['ismsp3s', 'evidenceManagers', 'document'])->where('id', $id)->first();

        /*
        foreach( $result->ismsp3s as $ismsp3 )
        {
            dd( $ismsp3->title );
        }
        */

        //dd( $result );


        return $result;
    }


}