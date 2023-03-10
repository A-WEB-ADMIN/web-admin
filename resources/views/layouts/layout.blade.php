<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title></title>


        <link rel="stylesheet" href="{{ asset('css/app.css') }}">


        <link rel="stylesheet" type="text/css" href="/css/common.css?v=152">

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-ekOryaXPbeCpWQNxMwSWVvQ0+1VrStoPJq54shlYhR8HzQgig1v5fas6YgOqLoKz" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">


        <script type='text/javascript' src='http://code.jquery.com/jquery-1.11.3.min.js'></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



        <script type="text/javascript" src="/js/scrollbar.js?v=30"></script>



        <script type="text/javascript" src="/js/common.js?v=32"></script>

        <script type="text/javascript" src="/js/popup.js?v=32"></script>
        <script type="text/javascript" src="/js/data_picker.js"></script>
        <script type="text/javascript" src="/js/swipe_js.js"></script>


        <!-- <script src="https://unpkg.com/axios/dist/axios.min.js"></script> -->


        <script type="text/javascript" src="/js/html2canvas.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/pdfjs-dist@2.0.943/build/pdf.min.js"></script>
        <!--<script type="text/javascript" src="/js/pdf_viewer.js"></script>-->

        <!-- sweetalert  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
        <script type="text/javascript" src="/js/Alert.js"></script>


        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>

        <div class="WRAPPER">

            <header class="l-header login"><!-- ????????? ????????? login class ?????? -->
                <button class="open_close">
                    <span class='line1'></span>
                    <span class='line2'></span>
                    <span class='line3'></span>
                </button>

                <h1><a href="#;"><img src="/img/common/logo.png" alt=""></a></h1>
                <div class="top_info">
                    <!--===========================================================
                    =
                    =  1. ????????? SELECT
                    =
                    =============================================================-->
                    @php
                        $companyRepositories = new \App\Repositories\CompanyRepository();
                        $companies = $companyRepositories->get_companies();
                    @endphp

                    @if( request()->query('company_id') )
                        <select name="" id="" onchange="change_company(this);">

                            @foreach($companies as $company)
                                <option value="{{ $company->id }}" {{ request()->query('company_id') == $company->id ? 'selected' : '' }}> {{ $company->name }} </option>
                            @endforeach

                        </select>
                    @else


                    @endif
                    <!--=========================================================
                    =
                    =  2. ????????? SELECT
                    =
                    ===========================================================-->
                    @php
                        $standardRepositories = new \App\Repositories\StandardRepository();
                        $standards = $standardRepositories->get_standards();
                    @endphp


                    <select name="" id="" onchange="change_standard(this);">

                        @foreach($standards as $standard)
                            <option value="{{ $standard->id }}" {{ request()->query('standard_id') == $standard->id ? 'selected' : '' }}> {{ $standard->name }} </option>
                        @endforeach

                    </select>


                </div>

                <div class="user_info">
                    <!-- ????????? -->
                    <p>
                        <strong>????????????</strong>
                        <em>D-NN</em>
                        <span>( YYYY-MM-DD / YYYY-MM-DD )</span>
                    </p>
                    <!-- //????????? -->

                    <!-- ?????? ??? -->
                    <p style="display:none;">
                        <strong>????????????????????? ?????? ????????????.</strong>
                        <a href="#;">( ???????????? )</a>
                    </p>
                    <!-- // ?????? ??? -->

                    <!--===================================================
                     =
                     =   ?????? ??? ????????? AND ???????????? ?????????
                     =
                     ===================================================-->
                    <div id="push" class="bell">
                        <push-pin :user="{{auth()->user()}}"></push-pin>
                    </div>
                    <!--===================================================
                     =
                     =   ???????????? ?????? ?????? ????????? ??????
                     =
                     ===================================================-->
                    <div class="user">

                        <button class="btn_toggle"> {{ auth()->user()->name }}</button>

                        <div class="toggle_layer user_layer">
                            <ul>
                                <li><a href="/html/front/member/pw_confirm.php">????????????</a></li>


                                <li><a href="/mypage/approval/main/list?company_id={{request()->query('company_id')}}&standard_id={{request()->query('standard_id')}}">?????? ??????</a></li>


                                <li class="new"><a href="/html/front/gnb/message.php">?????????</a></li>
                                <li><a href="#;">????????????</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="login_btn">
                    <a href="/html/front/member/join_step1.php" class="btn">????????????</a>
                    <a href="/html/front/member/login.php" class="btn">?????????</a>
                </div>
            </header>
            <!--====================================================================
            =
            =  2. ?????? SIDE BAR ??????
            =
            =======================================================================-->
            <!-- include -->
            @include('layouts.sidebar')


            <div class="left_dim"></div>
            <!--===================================================================
            =
            =  ?????? ?????????
            =
            =====================================================================-->
            <main class="l-main" id="app">
                @yield('main')
            </main>

        </div> <!-- WRAPPER_FINISH -->

        <script src="{{ mix('js/push.js') }}" async defer></script>
        <script src="{{ mix('js/app.js') }}" async defer></script>
    </body>

<script>
    /*================================================================
    =
    =
    =
    =================================================================*/
    var company_id = "{{request()->query('company_id')}}";
    var standard_id = "{{request()->query('standard_id')}}";
    var group_id = "{{request()->query('group_id')}}";

    var tab_id = 1;
    tab_id = "{{request()->query('tab_id')}}";

    function change_company(company)
    {
        var company_id = company.value;
        location.href = "?company_id=" + company_id + "&standard_id=" + standard_id + "&group_id=" + group_id + "&tab_id=" + tab_id;
    }

    function change_standard(standard)
    {
        var standard_id = standard.value;
        location.href = "?company_id=" + company_id + "&standard_id=" + standard_id + "&group_id=" + group_id + "&tab_id=" + tab_id;
    }

</script>



</html>