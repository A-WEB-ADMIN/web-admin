<?php
namespace App\Repositories;

use App\Models\AssetCumstom;
use App\Models\AssetDb;
use App\Models\AssetServer;
use App\Models\Tab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssetRepository
{
    protected $req;
    protected $columnRepository;

    /**
     *
     *
     */
    public function __construct(Request $req, ColumnRepository $columnRepository)
    {
        $this->req = $req;
        $this->columnRepository = $columnRepository;
    }

    /**===================================================================
     *
     *
     *  1. get_assets()
     *
     *
     ====================================================================*/
    public function get_assets()
    {
        /*-----------------------------------------------------
        -
        -  1. $props 구하기
        -
        ------------------------------------------------------*/
        //$columns = $this->columnRepository->get_columns();
        //$columns_props = $columns->pluck('column')->toArray();
        /*-----------------------------------------------------
        -
        -  2.
        -
        ------------------------------------------------------*/

        if( $this->req->query('tab_id') == 1 ) //SERVER
        {
            $assets = AssetServer::where('company_id', $this->req->query('company_id'))->where('tab_id', $this->req->query('tab_id'))->get();
        }
        else if( $this->req->query('tab_id') == 2 )
        {
            $assets = AssetDb::where('company_id', $this->req->query('company_id'))->where('tab_id', $this->req->query('tab_id'))->get();
        }
        else if( $this->req->query('tab_id') == 11 )
        {
            $assets = AssetCumstom::where('company_id', $this->req->query('company_id'))->where('tab_id', $this->req->query('tab_id'))->get();
        }

        else if( $this->req->query('tab_id') == 12 )
        {
            $assets = AssetCumstom::where('company_id', $this->req->query('company_id'))->where('tab_id', $this->req->query('tab_id'))->get();
        }

        else
        {
            $assets = null;
        }


        return $assets;



        /*------------------------------------
        -
        -  4. 파라미터 company_id && tab_id
        -
        -  꼭 있어야한다
        -
        ------------------------------------*/
        /*
        if( $this->req->query('company_id') && $this->req->query('tab_id') )
        {
            $assetsAll = AssetServer::where('company_id', $this->req->query('company_id'))->where('tab_id', $this->req->query('tab_id'))->get();
            $assets = $assetsAll->map->only($columns_props);
        }
        else
        {

            $assets = null;
        }
        */



    }
    /**===================================================================
     *
     *
     *  2. get_assets_for_ajax()
     *
     *
    ====================================================================*/
    public function get_assets_for_ajax()
    {
        $assets = AssetServer::all();

        return $assets;
    }
    /**===================================================================
     *
     *
     *
     *
     *
    ====================================================================*/
    public function update_all_to_assets($tab, $assets)
    {
        logger("000__tab_id:". $tab['id']);


        foreach($assets as $asset)
        {

            if($tab['id'] == 1)       //SERVER
            {
                logger("111__asset id:". $asset['id']);
                logger("222__asset status:". $asset['status']);
                logger("333__asset type:". $asset['type']);

                if($asset['status'])
                {
                    $arr = [
                        "status" => $asset['status']
                    ];
                }
                else if($asset['status'] && $asset['type'])
                {
                    $arr = [
                        "status" => $asset['status'],
                        "type" => $asset['type']
                    ];
                }

                $result = DB::table('asset_servers')->where('id', $asset['id'])->update($arr);

            }
            else if($tab['id'] == 2)
            {

            }
            else if($tab['id'] == 3)
            {

            }
            else if($tab['id'] == 4)
            {

            }

            else
            {
                $result = "NOT ASSET";
            }

        }

        return $result;
    }
    /**===================================================================
     *
     *
     *
     *
     *
    ====================================================================*/
}



















