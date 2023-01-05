@extends('layouts.layout_simple')
@section('main')

    <style>
        .front_wrap{ padding-top:0; }
        .front_wrap .contents .container{ width:100%; }
    </style>
    <script>
        $(function(){
            $(".header").removeClass("login");
            $("body").addClass("none")
        })
    </script>
    <div class="container h_100 join ">
        <div class="login_box">
            <div class="left">
                <strong>회원가입</strong>
                <p>
                    Athena회원가입 시 기업코드가 필요합니다. <br>
                    기업코드 입력 후 회원가입을 진행하실 수 있습니다.
                </p>
            </div>
            <div class="right">
                <dl>
                    <dt>*기업코드</dt>
                    <dd>
                        <input type="text" name="" id="" class="w_70">
                        <a href="#;" class="btn style1">코드인증</a>
                    </dd>
                </dl>
            </div>
        </div>

        <div class="btn_box r ">
            <a href="#l" class="btn_s list left">이전화면으로</a>
            <a href="#l" class="btn">다음</a>
        </div>
    </div>
    </div>
    </div>



    </body>
    </html>



@endsection

