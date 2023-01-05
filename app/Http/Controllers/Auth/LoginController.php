<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\CompanyRepository;
use App\Repositories\StandardRepository;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $companyRepository;
    protected $standardRepository;
    
    /**
     *  생성자
     * 
     */
    public function __construct(CompanyRepository $companyRepository, StandardRepository $standardRepository)
    {
        $this->companyRepository = $companyRepository;
        $this->standardRepository = $standardRepository;
    }
    /**
     *  로그인 폼
     *
     */
    public function login_form()
    {
        return view('auth.login.login_form');
    }

    /**
     * 로그인 처리 과정
     *
     */
    public function login_proc(Request $req)
    {
        /*--------------------------
        - 1. 삼성
        ---------------------------*/

        auth()->attempt([
            'email' => 'haha@samsung.com',
            'password' => 1234
        ]);


        /*
        auth()->attempt([
            'email' => 'park@samsung.com',
            'password' => 1234
        ]);
        */

        /*
        auth()->attempt([
            'email' => 'you@samsung.com',
            'password' => 1234
        ]);
        */

        /*
        auth()->attempt([
            'email' => 'adminLEE@samsung.com',
            'password' => 1234
        ]);
        */

        /*--------------------------
        - 2. 현대
        ---------------------------*/
        /*
        auth()->attempt([
            'email' => 'lee@hyundai.com',
            'password' => 1234
        ]);

        auth()->attempt([
            'email' => 'jung@hyundai.com',
            'password' => 1234
        ]);
        */
        /*--------------------------
        - 3. 김우중 컨설팅 영업__여러회사를 볼수 있음
        ---------------------------*/
        /*
        auth()->attempt([
            'email' => 'kim@sales.com',
            'password' => 1234
        ]);
        */

        /*--------------------------
        - 4. 감사
        ---------------------------*/
        /*
        auth()->attempt([
            'email' => 'samsung_audit@gov.com',
            'password' => 1234
        ]);

        auth()->attempt([
            'email' => 'hyundai_audit@gov.com',
            'password' => 1234
        ]);
        */
        /*--------------------------
        - 5. 슈퍼 ADMIN
        ---------------------------*/
        /*
        auth()->attempt([
            'email' => 'superadmin@aegisecu.com',
            'password' => 1234
        ]);
        */

        if( $this->companyRepository->isCompanyMember() )
        {
            $company_id = $this->companyRepository->getCompanyId();
            $standard_id = $this->standardRepository->getStandardId();


            $url = "evidence/main/list?company_id=" . $company_id . "&standard_id=" . $standard_id;
        }
        else
        {
            $url = "asset/main/list";
        }

        return redirect($url);

    }
}








































