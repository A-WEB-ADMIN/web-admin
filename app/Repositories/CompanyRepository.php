<?php

namespace App\Repositories;

use App\Models\Company;
use App\Models\User;

class CompanyRepository
{

    /**
     * 생성자
     *
     */
    public function __construct()
    {
        
    }

    /**
     *  직원 or 보안 감사관 인지 확인 하는 메서드
     *
     */
    public function isCompanyMember()
    {
        $result = User::find(auth()->id())->companies()->exists();
        return $result;
    }

    /**
     *  get_companies()
     *
     */
    public function get_companies()
    {
        $companies = User::find(auth()->id())->companies;
        return $companies;
    }

    /**
     * get_company_id()
     *
     */
    public function getCompanyId()
    {
        $companies = User::find(auth()->id())->companies;
        return $companies->first()->id;
    }



}