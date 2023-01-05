<?php

namespace App\Http\Controllers\Asset;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Repositories\AssetRepository;
use App\Repositories\ColumnRepository;
use App\Repositories\MenuRepository;
use App\Repositories\StandardRepository;
use App\Repositories\TabRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    /**
     *  생성자
     *
     */
    public function __construct()
    {

    }
    /**==================================================================================
     *
     *  A. list
     *
     ===================================================================================*/
    public function list(Request $req, MenuRepository $menuRepository ,TabRepository $tabRepository, ColumnRepository $columnRepository, AssetRepository $assetRepository)
    {
        //$this->menuRepository->get_menus();
        /**------------------------------------------------------------
        -
        -  1. company 엔티티는 Layout 상단 SELECT 에서 뿌려준다
        -
        --------------------------------------------------------------*/

        /**------------------------------------------------------------
        -
        - 2. $company_id
        -
        ------------------------------------------------------------*/
        $company_id = $req->input('company_id');
        $standard_id = $req->input('standard_id');
        $group_id= $req->input('group_id');
        $tab_id = $req->input('tab_id');
        /**------------------------------------------------------------
        -
        - 3. $groups
        -
        ------------------------------------------------------------*/
        $groups = null;
        /**------------------------------------------------------------
        -
        - 4. $tabs
        -
        ------------------------------------------------------------*/
        $tabs = $tabRepository->get_tabs($company_id);
        /**------------------------------------------------------------
        -
        - 5. $columns
        -
        ------------------------------------------------------------*/
        $columns = $columnRepository->get_columns();
            /**--------------------
            - 4.1
            --------------------*/
            $myconfigcolumns = $columns->pluck('column')->toArray();
        /**------------------------------------------------------------
        -
        - 6. $assets
        -
        ------------------------------------------------------------*/
        $assets = $assetRepository->get_assets();
        //dd($assets);
        /**------------------------------------------------------------
        -
        - 7. [Vue용 변수] myconfigcolumns_for_vue,  tab_id,   tab_name
        -
        ------------------------------------------------------------*/
        $current_tab = $tabRepository->get_current_tab($company_id);


        $myconfigcolumns_for_vue = $columns->pluck('column');
        //dd($myconfigcolumns_for_vue);



        /*------------------------------------------------------------
        -
        - 7.
        -
        ------------------------------------------------------------*/
        return view('asset.main.list')
                                                ->with('company_id', $company_id)
                                                ->with('standard_id', $standard_id)
                                                ->with('group_id', $group_id)
                                                ->with('tab_id', $tab_id)
                                                ->with('groups', $groups)
                                                ->with('tabs', $tabs)
                                                ->with('columns', $columns)
                                                ->with('assets', $assets)
                                                ->with('myconfigcolumns', $myconfigcolumns)
                                                ->with('current_tab', $current_tab)
                                                ->with('myconfigcolumns_for_vue', $myconfigcolumns_for_vue);

    }
    /**==================================================================================
     *
     *  B. [ajax] get_assets
     *
    ===================================================================================*/
    public function get_assets_for_ajax(AssetRepository $assetRepo)
    {
        $assets = $assetRepo->get_assets_for_ajax();

        return response()->json([
            "assets" => $assets
        ]);
    }
    /**==================================================================================
     *
     *  B. [ajax] get_assets
     *
    ===================================================================================*/
    public function insert_or_update_to_asset(Request $req)
    {
        $company_id = $req->json('company_id');
        $tab_id = $req->json('tab_id');
        $tab = $req->json('tab');
        $assets = $req->json('asset');


        foreach($assets as $asset)
        {
            //logger("__name:" . $asset['name']);

            if( $asset['id'] )
            {
                logger("111_id:" . $asset['id']);
                logger("111_status:" . $asset['status']);
                logger("111_type:" . $asset['type']);

                $result = DB::table('asset_servers')->where('id', $asset['id'] )->update([
                    "company_id" => $company_id,
                    "tab_id" => $tab_id,
                    "tab" => $tab,
                    "status" => $asset['status'],
                    "type" => $asset['type'],
                    "code" => $asset['code'],
                    "alias_name" => $asset['alias_name'],
                    "version" => $asset['version']
                ]);
            }
            else
            {
                logger("222_status:" . $asset['status']);
                $result = DB::table('asset_servers')->insert([
                    "company_id" => $company_id,
                    "tab_id" => $tab_id,
                    "tab" => $tab,
                    "status" => $asset['status'],
                    "type" => $asset['type'],
                    "code" => $asset['code'],
                    "alias_name" => $asset['alias_name'],
                    "version" => $asset['version']
                ]);
            }
        }


        return response()->json([
            "__RESULT__" => $result
        ]);

    }
    /**==================================================================================
     *
     *  C. [ajax] update_all_to_asset
     *
    ===================================================================================*/
    public function update_all_to_asset(Request $req, AssetRepository $assetRepo)
    {
        $tab = $req->json('tab');
        $assets = $req->json('assets');

        $result = $assetRepo->update_all_to_assets($tab, $assets);


        return response()->json([
            "__RESUTL__" => $result
        ]);
    }
    /**==================================================================================
     *
     *  D. edit
     *
    ===================================================================================*/
    public function edit()
    {
        return view('asset.main.edit');
    }


































}
