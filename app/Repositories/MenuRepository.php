<?php

namespace App\Repositories;

use App\Models\Menu;

class MenuRepository
{
    protected $req;

    /**
     *
     */
    public function __construct()
    {
        $this->req = request();
    }

    /**=========================================
    =
    =  3. 진단관리
    =
    ==========================================*/
    public function getMenuDianoses()
    {
        $menuDianoses = Menu::where('standard_id', $this->req->query('standard_id'))->where('category', '진단관리')->get();
        return $menuDianoses;
    }
    /**=========================================
    =
    =  4. 위험관리
    =
    ==========================================*/
    /**=========================================
    =
    =  5. 증적관리
    =
    ==========================================*/
    public function getMenuEvidences()
    {
        $menuEvidences = Menu::where('standard_id', $this->req->query('standard_id'))->where('category', '증적관리')->get();
        return $menuEvidences;
    }



}