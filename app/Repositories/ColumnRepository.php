<?php
namespace App\Repositories;

use App\Models\Column;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ColumnRepository
{
    protected $req;

    /**
     * 생성자
     *
     */
    public function __construct(Request $req)
    {
        $this->req = $req;
    }
    /**======================================================
     *
     *
     *
     ======================================================*/
    public function get_columns()
    {
        if( auth()->user()->hasAnyRoles( ['STAFF','ADMIN', 'FREELANCER', 'AUDIT','BACK_ADMIN']) )
        {
            $columns = Company::find( $this->req->query('company_id'))->columns->filter(function ($column) {

                return $this->req->query('tab_id') == $column->tab_id;

            });
        }
        else
        {
            $columns = null;
        }


        return $columns;
    }

    /**======================================================
     *
     *  왼쪽 tab 클릭하면 => 오른쪽에 뿌릴 comlumns 가져오기
     *
    ======================================================*/
    public function get_columns_by_tab($tab)
    {
        IF( auth()->user()->hasAnyRoles( ['STAFF','ADMIN', 'FREELANCER', 'AUDIT','BACK_ADMIN']) )
        {
            $exist = User::find( auth()->user()->id )->columns_is_exists();


            /*--------------------
            - 설정 후 사용시
            ---------------------*/
            if($exist)
            {
                $columns = User::find( auth()->user()->id )->columns->where('tab', $tab);

                logger("repo_columns" . json_encode($columns) );


            }
            else
            {
            /*--------------------
            - 최초 설정
            ---------------------*/
                $columns = DB::table('column_defaults')->where('tab', $tab)->get();
            }
        }
        ELSE IF( auth()->user()->type == 'FREELANCER' )
        {

        }
        ELSE
        {
            $columns = null;
        }



        return $columns;
    }



}




















