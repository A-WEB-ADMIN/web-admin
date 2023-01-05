@extends('layouts.layout_simple')
@section('main')

    <div class="container">
        <div class="top_titles">
            <ul class="location">
                <li>사용자</li>
            </ul>
            <h2>사용자 정보 변경</h2>
        </div>

        <div class="info_change">
            <div class="left user_input">
                <dl>
                    <dt class="hidden_input">기업코드</dt>
                    <dd class="hidden_input">
                        <input type="text" name="" id="" class="w_100">
                    </dd>

                    <dt>이메일</dt>
                    <dd>
                        <input type="text" name="" id="" class="w_100">
                    </dd>

                    <dt>비밀번호 <a href="#;" class="btn_s open_hidden">비밀번호 변경하기</a></dt>
                    <dd>
                        <input type="password" name="" id="">
                    </dd>

                    <dt class="hidden_input">현재 비밀번호</a></dt>
                    <dd class="hidden_input">
                        <input type="password" name="" id="">
                    </dd>

                    <dt class="hidden_input">비밀번호</a></dt>
                    <dd class="hidden_input">
                        <input type="password" name="" id="">
                    </dd>

                    <dt class="hidden_input">비밀번호 확인</a></dt>
                    <dd class="hidden_input">
                        <input type="password" name="" id="">
                    </dd>

                    <dt>이름</dt>
                    <dd>
                        <input type="text" name="" id="">
                    </dd>

                    <dt>휴대폰번호</dt>
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
            </div>

            <div class="right">
                <dl>
                    <dt>등록된 기업</dt>
                    <dd>
                        <table>
                            <colgroup>
                                <col style="width:50%" span="2">
                            </colgroup>
                            <thead>
                            <tr>
                                <th>기업명</th>
                                <th>상태</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>a기업</td>
                                <td>완료</td>
                            </tr>
                            <tr>
                                <td>B기업</td>
                                <td>대기</td>
                            </tr>
                            <tr>
                                <td>C기업</td>
                                <td>거절</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="btn_box">
                            <a href="#;" class="btn_s">선택 기업 삭제</a>
                            <a href="#;" class="pop_enter_add btn_layer_open btn_s">기업 추가 등록하기</a>
                        </div>
                    </dd>
                </dl>
                <dl class="radio_chk">
                    <dt>접속 설정하기</dt>
                    <dd>
                        <ul>
                            <li>
                                <label for="radio_chk1">
                                    <input type="radio" name="radio_chk" id="radio_chk1">
                                    마지막 사용 기업 유지
                                </label>
                            </li>
                            <li>
                                <label for="radio_chk2">
                                    <input type="radio" name="radio_chk" id="radio_chk2">
                                    기업 선택 화면 노출
                                </label>
                            </li>
                            <li>
                                <input type="radio" name="radio_chk" id="radio_chk3">
                                <select name="" id="">
                                    <option value="회사명1">회사명1</option>
                                    <option value="회사명2">회사명2</option>
                                    <option value="회사명3">회사명3</option>
                                </select>
                                유지
                            </li>
                        </ul>
                    </dd>
                </dl>
            </div>
        </div>

        <div class="btn_box r">
            <a href="#;" class="btn">변경완료</a>
        </div>

    </div>
    </div>
    </div>



    <div class="pop" id="pop_enter_add"> <!-- 기업 추가 등록하기 팝업 -->
        <div class="dim"></div>
        <div class="in">
            <h3>기업 추가 등록하기</h3>
            <div class="contents">

                <!-- strong class="title1">기업 추가 등록하기</strong -->

                <p class="blue">기업코드를 입력하여 기업인증을 요청 하실 수 있습니다.</p>
                <div class="enter_code">
                    <em>기업코드</em>
                    <p class="code">
                        <input type="text" name="" id="" value="01234567">
                    </p>
                    <a href="#;" class="btn s style1">인증</a>
                    <p class="right red">존재하지 않는 기업코드 입니다.</p>
                </div>

                <div class="btn_box">
                    <a href="#;" class="pop_request_complete btn_layer_open btn">승인요청</a>
                </div>
            </div>

            <a href="#;" class="close ok"><i class="far fa-plus"></i></a>
        </div>
    </div>

    <script>
        $(function(){
            $(".info_change .right table tr").click(function(){
                $(".info_change .right table tr").removeClass("on");
                $(this).addClass("on")
            })
        })
    </script>
    </body>
    </html>



@endsection