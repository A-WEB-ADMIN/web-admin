<?php

namespace App\Http\Controllers\Asset;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\TabRepository;
use App\Repositories\ColumnRepository;
use App\Models\Company;

class ConfigController extends Controller
{

    /**===================================================
    =
    = 0. tabs가 비어 있는지 확인후 props로 줄 값을 결정
    =
    ====================================================*/
    public function list(Request $req)
    {
        $arr =  Company::find($req->query('company_id'))->tabs->toArray();
        $is_exist_tabs = sizeof($arr);


        $company_id = $req->input('company_id');
        $standard_id = $req->input('standard_id');
        $tab_id = $req->input('tab_id');


        return view('asset.config.list')->with('is_exist_tabs', $is_exist_tabs)
                                              ->with('company_id', $company_id)
                                              ->with('standard_id', $standard_id)
                                              ->with('tab_id', $tab_id);
    }
    /**===================================================
    =
    = 1. tab_defaults 테이블 가져오기
    =
    ====================================================*/
    public function tab_defaults_all(Request $req, TabRepository $tabRepo)
    {
        $tab_defaults = $tabRepo->tab_defaults_all();

        return response()->json([
            "tab_defaults" => $tab_defaults
        ]);
    }
    /**===================================================
    =
    = 2. tabs 테이블 가져오기
    =
    ====================================================*/
    public function tabs_all(Request $req, TabRepository $tabRepo)
    {
        $tabs = $tabRepo->tabs_all();

        return response()->json([
            "tabs" =>$tabs
        ]);
    }
    /**===================================================
    =
    = 3. tabs 테이블 INSERT 또는 UPDATE
    =
    ====================================================*/
    public function INSERT_or_UPDATE_TO_TABS_and_COLUMNS(Request $req, TabRepository $tabRepo, ColumnRepository $columnRepo)
    {
        /*-----------------------------------------
        - 1. 기본 변수
        ------------------------------------------*/
        $lefts = $req->json('lefts');
        $rights = $req->json('rights');
        $company_id = $req->json('company_id');
        /*-----------------------------------------
        - 2. [tabs 테이블] insert or update
        ------------------------------------------*/
        $tabRepo->INSERT_or_UPDATE_TO_TABS_and_COLUMNS($lefts, $rights, $company_id);
        /*----------------------------------------
        - 3. 결과
        -----------------------------------------*/
        return response()->json([
            "result" => "success"
        ]);
    }

    /**===================================================
    =
    = 4. 왼쪽 tab 클릭하면 => 오른쪽에 뿌릴 comlumns 가져오기
    =
    ====================================================*/
    public function get_columns_by_tab(Request $req, ColumnRepository $columnRepo)
    {
        $tab = $req->input('tab');

        $columns = $columnRepo->get_columns_by_tab($tab);

        return response()->json([
            "columns" => $columns
        ]);
    }











}



















