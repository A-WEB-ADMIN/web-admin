@extends('layouts.layout_simple')
@section('main')

    <style>
        .front_wrap{ padding-top:0; }
        .front_wrap .contents .container{ width:100%; }
    </style>

    <div class="container h_100 join step2">
        <div class="login_box">
            <div class="left">
                <strong>회원가입</strong>
                <p>
                    Athena를 사용시 필요한 정보를 입력해주세요. <br>
                    사용중이신 휴대폰번호를 입력해주세요. <br>
                    *는 필수입력 사항입니다.
                </p>
            </div>
            <div class="right user_input">
                <dl>
                    <dt>*이메일</dt>
                    <dd class="email_area">
                        <input type="text" name="" id=""> @
                        <select name="" id="">
                            <option value="naver.com">naver.com</option>
                            <option value="gmail.com">gmail.com</option>
                        </select>
                        <a href="#;" class="email">이메일 인증</a>
                        <a href="#;" class="btn_s">재전송</a>
                    </dd>

                    <dt>*인증번호 입력</dt>
                    <dd>
                        <input type="text" name="" id="">
                        <span class="count_num">03:00</span>
                        <a href="#;" class="btn style1 s">인증</a>
                    </dd>

                    <dt>*비밀번호</dt>
                    <dd>
                        <input type="password" name="" id="">
                    </dd>

                    <dt>*비밀번호 확인</dt>
                    <dd>
                        <input type="password" name="" id="">
                    </dd>

                    <dt>*이름</dt>
                    <dd>
                        <input type="text" name="" id="">
                    </dd>

                    <dt>*전화번호</dt>
                    <dd class="phone">
                        <select name="" id="">
                            <option value="010">010</option>
                            <option value="011">011</option>
                        </select>
                        <input type="text" name="" id="">
                        <span>-</span>
                        <input type="text" name="" id="">
                    </dd>
                </dl>
                <div class="bottom">
                    <dl>
                        <dt>부서</dt>
                        <dd><input type="text" name="" id=""></dd>
                    </dl>
                    <dl>
                        <dt>직급</dt>
                        <dd><input type="text" name="" id=""></dd>
                    </dl>
                </div>
                <ul class="chk_list">
                    <li>
                        <input type="checkbox" name="" id="chkchk1">
                        [필수] <a href="#;" class="pop_terms btn_layer_open">이용약관</a>에 동의합니다.
                    </li>
                    <li>
                        <input type="checkbox" name="" id="chkchk1">
                        [필수] <a href="#;" class="pop_privacy btn_layer_open">개인정보 수집·이용</a>에 동의합니다.
                    </li>
                </ul>
            </div>

        </div>

        <div class="btn_box r ">
            <a href="#l" class="btn_s list left">이전화면으로</a>
            <a href="#l" class="btn">회원가입</a>
        </div>
    </div>
    </div>
    </div>


    <div class="pop" id="pop_terms"> <!-- OTP 등록하기 -->
        <div class="dim"></div>
        <div class="in">
            <h3>이용약관</h3>
            <div class="contents">

                <div class="con">
                    <p>테스트 이용약관</p>
                    <p>테스트 이용약관</p>
                    <p>테스트 이용약관</p>
                    <p>테스트 이용약관</p>
                    <p>테스트 이용약관</p>
                    <p>테스트 이용약관</p>
                    <p>테스트 이용약관</p>
                    <p>테스트 이용약관</p>
                    <p>테스트 이용약관</p>
                </div>
            </div>

            <a href="#;" class="close ok"><i class="far fa-plus"></i></a>
        </div>
    </div>

    <div class="pop" id="pop_privacy"> <!-- 개인정보 수집/이용 팝업 -->
        <div class="dim"></div>
        <div class="in">
            <h3>개인정보 수집·이용</h3>
            <div class="contents">

                <div class="con">
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                    <p>테스트 개인정보 수집·이용</p>
                </div>
            </div>

            <a href="#;" class="close ok"><i class="far fa-plus"></i></a>
        </div>
    </div>


    </body>
    </html>



@endsection