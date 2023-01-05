@php
    $companyRepo = new \App\Repositories\CompanyRepository();
    $company_id = $companyRepo->getCompanyId();

    $standardRepo = new \App\Repositories\StandardRepository();
    $standard_id = $standardRepo->getStandardId();

    if( request()->input('tab_id') )
    {
            $tabRepo = new \App\Repositories\TabRepository();
            $tab_id = $tabRepo->getTabId();
    }
    else
    {
        $tab_id = 1;
    }

    $menuRepo = new \App\Repositories\MenuRepository();
    $menuDianoses = $menuRepo->getMenuDianoses();
    $menuEvidences = $menuRepo->getMenuEvidences();

    $domain = request()->has('domain') ? request()->input('domain') : '전체';

@endphp

<aside class="l-sidebar">
    <div class="menu_box">
        <ul class="depth_1">

        @if( auth()->user()->hasAnyRoles( ['STAFF','ADMIN', 'FREELANCER', 'AUDIT','BACK_ADMIN']) )
            <li>
                <a href="#;">정책관리</a>
                <ul class="depth_2">
                    <li><a href="/policy/infomation/list.php">정보보호정책</a></li>
                </ul>
            </li>

            <li>
                <a href="#;">자산관리</a>
                <ul class="depth_2">
                    <li><a href="/asset/main/list?company_id={{$company_id}}&standard_id={{$standard_id}}&group_id=&tab_id={{$tab_id}}"> 자산 목록 </a></li>
                    <li><a href="/html/front/assets_management/network_config.php">네트워크 구성도</a></li>
                </ul>
            </li>



            <li>
                <a href="#;">진단관리</a>
                <ul class="depth_2">

                    @foreach($menuDianoses as $menuDianosis)
                        <li><a href="{{$menuDianosis->href}}?company_id={{$company_id}}&standard_id={{$standard_id}}&type={{$menuDianosis->type}}&domain={{$menuDianosis->domain}}"> {{ $menuDianosis->menu }} </a></li>
                    @endforeach

                </ul>
            </li>


            <li>
                <a href="#;">위험관리</a>
                <ul class="depth_2">
                    <li><a href="/risk/threatAnalysis/list?company_id={{$company_id}}&standard_id={{$standard_id}}">위협분석</a></li>
                    <li><a href="/risk/riskJudgement/list?company_id={{$company_id}}&standard_id={{$standard_id}}">위험평가</a></li>
                    <li><a href="/risk/level/list.php">위험관리수준</a></li>
                    <li><a href="/risk/plan/list.php">정보보호 계획</a></li>
                </ul>
            </li>

            <li>
                <a href="#;">증적관리</a>
                <ul class="depth_2">

                    @foreach($menuEvidences as $menuEvidence)
                    <li><a href="{{$menuEvidence->href}}?company_id={{$company_id}}&standard_id={{$standard_id}}&group_id=&tab_id={{$tab_id}}"> {{ $menuEvidence->menu }} </a></li>
                    @endforeach
                </ul>
            </li>
        @endif

        @if( auth()->user()->hasAnyRoles( ['ADMIN','BACK_ADMIN']) )
            <li>
                <a href="#;">보안감사</a>
                <ul class="depth_2">
                    <li><a href="#;">정보보호정책</a></li>
                    <li><a href="#;">자산목록</a></li>
                    <li><a href="#;">네트워크 구성도</a></li>
                    <li><a href="#;">기술적 진단</a></li>
                    <li><a href="#;">위험분석</a></li>
                    <li><a href="#;">위험평가</a></li>
                    <li><a href="#;">위험관리수준</a></li>
                    <li><a href="#;">정보보호계획</a></li>
                    <li><a href="#;">증적목록</a></li>
                    <li><a href="#;">운영명세서</a></li>
                </ul>
            </li>
        @endif


        </ul>

        <!--==============================================================================-->

        <ul class="depth_1 middle">
            @if( auth()->user()->hasAnyRoles( ['STAFF','ADMIN', 'BACK_ADMIN']) )
            <li>
                <a href="#;">일정관리</a>
            </li>
            <li>
                <a href="#;">게시판</a>
                <ul class="depth_2">
                    <li><a href="/html/front/board/list.php">게시판1</a></li>
                    <li><a href="#;">게시판2</a></li>
                </ul>
            </li>
            <li>
                <a href="#;">고객센터</a>
                <ul class="depth_2">
                    <li><a href="#;">공지사항</a></li>
                    <li><a href="#;">사용방법</a></li>
                    <li><a href="#;">자주 묻는 질문</a></li>
                    <li><a href="#;">1:!문의</a></li>
                </ul>
            </li>
            @endif
        </ul>

        <!--==============================================================================-->

        <div class="bottom_gnb">
            <ul class="depth_1">
                @if( auth()->user()->hasAnyRoles( ['ADMIN', 'BACK_ADMIN']) )
                <li>
                    <a href="#;">관리자</a>
                    <ul class="depth_2">
                        <li><a href="/setting/user/list">사용자관리</a></li>
                        <li><a href="/setting/diagnosis/list">관리진단 설정</a></li>
                        <li><a href="/setting/tech/list">기술진단 설정</a></li>
                        <li><a href="/setting/etc/list">부가기능설정</a></li>
                        <li><a href="/setting/log/list">로그관리</a></li>
                    </ul>
                </li>
                @endif
            </ul>
            <div class="license_info">
                <strong>라이선스 만료 D-000</strong>
                <span>(YYYY/MM/DD)</span>
            </div>
        </div>


    </div>


</aside>