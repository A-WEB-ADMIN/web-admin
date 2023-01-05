<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Company;

class UserRepository
{
    protected $req;

    public function __construct(Request $req)
    {
        $this->req = $req;
    }

    public function get_users_of_company()
    {
        $company_id = $this->req['company_id'];

        $users = Company::find($company_id)->users;

        $result= $users->filter( function($user) {
            return $user->hasAnyRoles( ['STAFF','ADMIN']);
        });

        return $result;
    }

}