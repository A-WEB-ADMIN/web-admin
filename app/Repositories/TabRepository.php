<?php
namespace App\Repositories;

use App\Models\Company;
use App\Models\Tab;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\never;

class TabRepository
{
    protected $req;
    protected $tab_id_arr = array('empty');
    /**
     * 생성자
     *
     */
    public function __construct()
    {
        $this->req = request();
    }
    /*=======================================================
    =
    =  1. [ 직원, 프리랜서에 따라 바뀌는 ]
    =
    ========================================================*/
    public function get_tabs()
    {
        if( auth()->user()->hasAnyRoles( ['STAFF','ADMIN', 'FREELANCER', 'AUDIT','BACK_ADMIN']) )
        {

            //logger( "_tabRepository_1:" . json_encode( Company::find($this->req->query('company_id') ) );

            //logger("_TabRepository_2:" . json_encode( Company::find($this->req->query('company_id'))->tabs ) );


            $tabs = Company::find($this->req->query('company_id'))->tabs;
        }
        else
        {
            $tabs = null;
        }


        return $tabs;
    }

    /*=======================================================
    =
    =  2. [ 직원, 프리랜서에 따라 바뀌는 ]
    =
    ========================================================*/
    public function getTabId()
    {
        if( auth()->user()->hasAnyRoles( ['STAFF','ADMIN', 'FREELANCER', 'AUDIT','BACK_ADMIN']) )
        {
            $exist = User::find(auth()->id())->tabs_is_exists();

            if($exist)
            {
                $tab_id = Company::find($this->req->query('company_id'))->tabs->first()->id;
            }
            else
            {
                $tab_id = 1;
            }
        }
        else
        {
            $tab_id = null;
        }

        return $tab_id;
    }
    /*============================================================================
    =
    =  3. [ 직원, 프리랜서에 따라 바뀌는 ]
    =
    =============================================================================*/
    public function get_current_tab()
    {
        $tab_id = $this->req->query('tab_id');

        $exist = User::find(auth()->id())->tabs_is_exists();

        if($exist)
        {
            $current_tab = Tab::find($tab_id)->first();
        }
        else
        {
            $current_tab = null;
        }

        //dd($current_tab);

        return $current_tab;
    }
    /*=========================================================================
    =
    =  101. [ 설정 ] tab_default 테이블 전부 가져오기
    =
    ===========================================================================*/
    public function tab_defaults_all()
    {
        $tab_defaults = DB::table('tab_defaults')->where('type', 'DEFAULT')->get();

        //dd($tab_defaults);

        return $tab_defaults;
    }
    /*===========================================================================
    =
    =  101. [ 설정 ] tab_default 테이블 전부 가져오기
    =
    ============================================================================*/
    public function tabs_all()
    {
        $tabs = User::find( auth()->user()->id )->tabs->all();

        //dd($tabs);

        return $tabs;
    }
    /*==========================================================================
    =
    =  102. tabs 테이블에 INSERT 또는 UPDATE
    =
    ===========================================================================*/
    public function INSERT_or_UPDATE_TO_TABS_and_COLUMNS($lefts, $rights, $company_id)
    {

        $left_arr =  Company::find($company_id)->tabs->toArray();
        $size_of_left_arr = sizeof($left_arr);

        $right_arr =  Company::find($company_id)->columns->toArray();
        $size_of_right_arr = sizeof($right_arr);
        /*--------------------------------
        - 1. INSERT [ 최초 세팅시 ]
        --------------------------------*/
        IF( $size_of_left_arr == 0 )
        {
            /*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
            @
            @ [tabs 테이블] 에 INSERT
            @
            @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/

            foreach ($lefts as $left)
            {
               //logger("__left:" . $left['tab']);

               $last_tab_id = DB::table('tabs')->insertGetId([
                   "tab" => $left['tab'],
                   "tab_korean" => $left['tab_korean'],
                   "explanation" => $left['explanation'],
                   "is_display" => $left['is_display']
               ]);

               DB::table('tab_company')->insert([
                   "tab_id" => $last_tab_id,
                   "company_id" => $company_id
               ]);

                $this->tab_id_arr[] = $last_tab_id;

            }//foreach

            /*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
            @
            @ [columns 테이블] 에 INSERT
            @
            @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
            $previos_tab = '';

            foreach ($rights as $right)
            {
                //logger("__right:" . $right['column']);

                if($previos_tab == $right['tab'])
                {
                }
                else
                {
                    $previos_tab = $right['tab'];
                    next($this->tab_id_arr);
                }


                $last_column_id = DB::table('columns')->insertGetId([
                    "tab_id" => current($this->tab_id_arr),
                    "tab" => $right['tab'],
                    "column" => $right['column'],
                    "column_korean" => $right['column_korean'],
                    "is_display" => $right['is_display']
                ]);

                DB::table('column_tab')->insert([
                    "column_id" => $last_column_id,
                    "tab_id" => current($this->tab_id_arr),
                ]);

            }//foreach
        }
        ELSE
        {
        /*--------------------------------
        - 2. UPDATE 이후 운영중 수정
        --------------------------------*/
            /*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
            @
            @ [tabs 테이블] 에 UPDATE
            @
            @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
            foreach ($lefts as $left)
            {
                DB::table('tabs')->where('id', $left['id'])->update([
                    "tab" => $left['tab'],
                    "tab_korean" => $left['tab_korean'],
                    "explanation" => $left['explanation'],
                    "is_display" => $left['is_display']
                ]);


            }
            /*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
            @
            @ [columns 테이블] 에 UPDATE
            @
            @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
            foreach ($rights as $right)
            {
                DB::table('columns')->where('id', $right['id'])->update([
                    "tab" => $right['tab'],
                    "column" => $right['column'],
                    "column_korean" => $right['column_korean'],
                    "is_display" => $right['is_display']
                ]);

            }

        }










    }//end of function



























}