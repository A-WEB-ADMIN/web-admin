@extends('layouts.layout')
@section('main')

    <div class="container">
        <div class="top_titles">
            <ul class="location">
                <li>Home</li>
                <li>관리자</li>
                <li>사용자 관리</li>
            </ul>
            <h2>사용자 승인</h2>
        </div>

        <div class="admin user_input">
            <div class="left">
                <dl>
                    <dt>이메일</dt>
                    <dd><input type="text" name="" id=""></dd>
                    <dt>전화번호</dt>
                    <dd class="phone">
                        <select name="" id="">
                            <option value="010">010</option>
                        </select>
                        <input type="text" name="" id="">
                        <span>-</span>
                        <input type="text" name="" id="">
                    </dd>
                    <dt>부서</dt>
                    <dd><input type="text" name="" id=""></dd>
                    <dt>권한분류</dt>
                    <dd>
                        <select name="" id="">
                            <option value="combobox">combobox</option>
                            <option value="combobox">combobox</option>
                        </select>
                        <a href="#;" class="btn s style1">제거</a>
                    </dd>
                </dl>

                <div class="radio_box">
                    <strong>버전</strong>
                    <ul class="top_radio">
                        <li>
                            <label for="chks1">
                                <input type="radio" name="chks1" id="chks1">
                                전체 버전
                            </label>
                        </li>
                        <li>
                            <label for="chks2">
                                <input type="radio" name="chks1" id="chks2">
                                특징 버전
                            </label>
                        </li>
                    </ul>
                    <p>&nbsp;</p>
                    <ul class="bottom_input">
                        <li>
                            <input type="text" name="" id="">
                            <a href="#;" class="btn s style1">추가</a>
                        </li>
                        <li>
                            <textarea name="" id=""></textarea>
                            <a href="#;" class="btn s style1">제거</a>
                        </li>
                    </ul>
                </div>

                <div class="radio_box">
                    <strong>자산그룹</strong>
                    <ul class="top_radio">
                        <li>
                            <label for="chks1_1">
                                <input type="radio" name="chks1_1" id="chks1_1">
                                전체 자산그룹
                            </label>
                        </li>
                        <li>
                            <label for="chks2_1">
                                <input type="radio" name="chks1_1" id="chks2_1">
                                특징 자산그룹
                            </label>
                        </li>
                    </ul>
                    <ul class="bottom_input">
                        <li>
                            <input type="text" name="" id="">
                            <a href="#;" class="btn s style1">추가</a>
                        </li>
                        <li>
                            <textarea name="" id=""></textarea>
                            <a href="#;" class="btn s style1">제거</a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="right">
                <dl>

                    <dt>이름</dt>
                    <dd><input type="text" name="" id=""></dd>

                    <dt class="interval">직급</dt>
                    <dd><input type="text" name="" id=""></dd>

                    <dt>&nbsp</dt>
                    <dd>
                        <div>&nbsp</div>
                        <div>&nbsp</div>
                    </dd>

                </dl>



                <div class="radio_box">
                    <strong>IP 접근통제</strong>
                    <ul class="top_radio">
                        <li>
                            <label for="chks42_1">
                                <input type="radio" name="chks22" id="chks42_1">
                                전체 IP
                            </label>
                        </li>
                        <li>
                            <label for="chks52">
                                <input type="radio" name="chks22" id="chks52">
                                특정 IP
                            </label>
                        </li>
                    </ul>
                    <p>접속 IP : 0.000.000.000</p>
                    <ul class="bottom_input">
                        <li>
                            <input type="text" name="" id="">
                            <a href="#;" class="btn s style1">추가</a>
                        </li>
                        <li>
                            <textarea name="" id=""></textarea>
                            <a href="#;" class="btn s style1">제거</a>
                        </li>
                    </ul>
                </div>


                <div class="radio_box">
                    <strong>증적그룹</strong>
                    <ul class="top_radio">
                        <li>
                            <label for="chks21_1">
                                <input type="radio" name="chks33" id="chks21_1">
                                전체 증적그룹
                            </label>
                        </li>
                        <li>
                            <label for="chks32_1">
                                <input type="radio" name="chks33" id="chks32_1">
                                특징 증적그룹
                            </label>
                        </li>
                    </ul>
                    <ul class="bottom_input">
                        <li>
                            <input type="text" name="" id="">
                            <a href="#;" class="btn s style1">추가</a>
                        </li>
                        <li>
                            <textarea name="" id=""></textarea>
                            <a href="#;" class="btn s style1">제거</a>
                        </li>
                    </ul>
                </div>


            </div>
        </div>

        <div class="bottom_reason">
            <strong>승인 거부시 거부 사요를 작성해주세요.</strong>
            <textarea name="" id=""></textarea>
        </div>

        <div class="btn_box">
            <a href="#;" class="btn b">거부</a>
            <a href="#;" class="btn b">승인하기</a>
        </div>

    </div>

    </div>
    </div>


    <div class="pop" id="pop_payment_setting"> <!-- 결재 설정 팝업 -->
        <div class="dim"></div>
        <div class="in">
            <h3>결재 설정</h3>
            <div class="contents">
                <div class="payment_box">
                    <div class="left">
                        <div class="list">
                            <ul>
                                <li>
                                    <strong>홍길동</strong>
                                    <span>AAAA팀 팀장</span>
                                </li>
                                <li>
                                    <strong>안길동</strong>
                                    <span>BBBB팀 과장</span>
                                </li>
                                <li>
                                    <strong>강길동</strong>
                                    <span>AAAA팀 회장</span>
                                </li>
                                <li>
                                    <strong>안사요</strong>
                                    <span>AAAA팀 사원</span>
                                </li>
                                <li>
                                    <strong>안변태</strong>
                                    <span>BBBB팀 주임</span>
                                </li>
                                <li>
                                    <strong>안사요</strong>
                                    <span>AAAA팀 사원</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="right">
                        <select name="" id="">
                            <option value="3단 기본">3단 기본</option>
                            <option value="3단 기본">3단 기본</option>
                            <option value="3단 기본">3단 기본</option>
                        </select>
                        <ul id="sortable">
                            <li class="ui-state-default">
                                <i class="far fa-bars"></i>
                                <input type="text" name="" id="" value="홍길동1">
                                <button><i class="far fa-plus"></i></button>
                            </li>
                            <li class="ui-state-default">
                                <i class="far fa-bars"></i>
                                <input type="text" name="" id="" value="홍길동2">
                                <button><i class="far fa-plus"></i></button>
                            </li>
                            <li class="ui-state-default">
                                <i class="far fa-bars"></i>
                                <input type="text" name="" id="" value="홍길동3">
                                <button><i class="far fa-plus"></i></button>
                            </li>
                            <li class="ui-state-default">
                                <i class="far fa-bars"></i>
                                <input type="text" name="" id="" value="홍길동4">
                                <button><i class="far fa-plus"></i></button>
                            </li>
                            <li class="ui-state-default">
                                <i class="far fa-bars"></i>
                                <input type="text" name="" id="" value="홍길동5">
                                <button><i class="far fa-plus"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="btn_box">
                    <a href="#;" class="btn">저장</a>
                </div>
            </div>

            <a href="#;" class="close ok"><i class="far fa-plus"></i></a>
        </div>
    </div>


    <script>
        $( function() {
            $( "#pop_payment_setting #sortable" ).sortable();
            $( "#pop_payment_setting #sortable" ).disableSelection();
        } );
    </script>
    </body>
    </html>



@endsection