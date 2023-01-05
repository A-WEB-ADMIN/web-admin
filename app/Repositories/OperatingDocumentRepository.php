<?php

namespace App\Repositories;

use App\Models\Evidence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OperatingDocumentRepository
{
    protected $req;

    /*
     *  생성자
     */
    public function __construct(Request $req)
    {
        $this->req = $req;
    }

    /*============================================================
    =
    =
    =
    =============================================================*/
    public function get_ismsp3_and_operating()
    {
        $sql = " SELECT  i.id, i.domain, i.sub_domain, i.depth, i.clause, o. is_using, current_situation, o.id as operating_id      ";
        $sql.= " FROM ismsp3s as i                                                                                                  ";
        $sql.= " LEFT OUTER JOIN operatingdocuments as o ON i.depth = o.depth                                                       ";
        $sql.= " ORDER BY i.id                                                                                                      ";

        $ismsp3_and_operating = collect(DB::select($sql))->map(function($arr)
        {
            return (object)$arr;
        });

        return $ismsp3_and_operating;
    }

}