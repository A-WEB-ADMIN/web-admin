@extends('layouts.layout')
@section('main')

    <div class="container">
        <div class="top_titles">
            <ul class="location">
                <li>Home</li>
                <li>증적관리</li>
                <li>증적목록</li>
            </ul>
            <h2>증적 목록 등록</h2>
        </div>

        <div class="tb_content">
            <div class="tb_type1 w_100">
                <table>
                    <colgroup>
                        <col style="width:20%;">
                        <col style="width:13%;">
                        <col style="width:auto">
                        <col style="width:15%;">
                        <col style="width:15%;">
                        <col style="width:15%;">
                    </colgroup>
                    <thead>
                    <tr>
                        <th class="none">통제영역</th>
                        <th class="none">증적 코드</th>
                        <th class="none">증적 명</th>
                        <th class="none">실사여부</th>
                        <th class="none">주기</th>
                        <th class="none">결재</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>
                            <select name="" id="">
                                <option value="관리체계 수립 및 운영">관리체계 수립 및 운영</option>
                                <option value="관리체계 수립 및 운영">관리체계 수립 및 운영</option>
                                <option value="관리체계 수립 및 운영">관리체계 수립 및 운영</option>
                            </select>
                        </td>
                        <td>ISMS-00-00</td>
                        <td>정보보호관리체계 명세서</td>
                        <td>
                            <select name="" id="" class="w_100">
                                <option value="일반">일반</option>
                                <option value="일반">일반</option>
                            </select>
                        </td>
                        <td>
                            <select name="" id="" class="w_100">
                                <option value="상시">상시</option>
                                <option value="일반">일반</option>
                            </select>
                        </td>
                        <td>
                            <select name="" id="" class="w_100">
                                <option value="3단계">3단계</option>
                                <option value="일반">일반</option>
                            </select>
                        </td>
                    </tr>
                    </tbody>

                </table>
            </div>
        </div>

        <div class="tb_content length3">

            <table class="tb_txt">
                <colgroup>
                    <col style="width:29%">
                    <col style="width:auto">
                </colgroup>
                <tbody>
                <tr>
                    <th>설명</th>
                    <td>
                        <textarea name="" id=""></textarea>
                    </td>
                </tr>
                </tbody>
            </table>

            <div class="tb_type1 s ">
                <table>
                    <colgroup>
                        <col style="width:45%;">
                        <col style="width:55%;">
                    </colgroup>
                    <thead>
                    <tr>
                        <th class="none">영역</th>
                        <th class="none">통제항목 <a href="#;" class="pop_controll_items btn_layer_open">추가하기</a></th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td><input type="text" name="" id=""></td>
                        <td><input type="text" name="" id=""></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="" id=""></td>
                        <td><input type="text" name="" id=""></td>
                    </tr>
                    </tbody>

                </table>
            </div>

            <table class="tb_txt">
                <colgroup>
                    <col style="width:29%">
                    <col style="width:auto">
                </colgroup>
                <tbody>
                <tr>
                    <th>담당자 <a href="#;" class="pop_evidence_manager btn_layer_open">추가하기</a></th>
                    <td>
                        <textarea name="" id=""></textarea>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <!-- 증적 목록이 없을시 -->
        <div class="evidence_empty">
            <strong>
                미리보기 노출
            </strong>
        </div>

        <div class="btn_box r">
            <a href="#;" class="btn">등록</a>
        </div>
        <!-- // 증적 목록이 없을시 -->

    </div>

    </div>
    </div>



    <div class="pop" id="pop_list_choice"> <!-- 양식 선택 팝업 -->
        <div class="dim"></div>
        <div class="in">
            <h3>양식 선택</h3>
            <div class="contents">
                <div class="tab_area tab_event">
                    <ul>
                        <li class="on"><a href="#;">관리체계</a></li>
                        <li><a href="#;">보호대책</a></li>
                        <li><a href="#;">개인정보</a></li>
                    </ul>
                </div>

                <div class="tab_box tb_type1 c tab_event" style="display:block;">
                    <table>
                        <thead>
                        <tr>
                            <th class="c">No</th>
                            <th class="c">영역구분</th>
                            <th class="c">증적명</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td class="c">1.1.1</td>
                            <td>경영진의 참여</td>
                            <td>정보보호관리체계 명세서</td>
                        </tr>
                        <tr>
                            <td class="c">1.1.2</td>
                            <td>최고책임자의 지정</td>
                            <td>정보보호 운영명세서</td>
                        </tr>
                        <tr>
                            <td class="c">1.1.3</td>
                            <td>조직 구성</td>
                            <td>정보서비스 업무 흐름도</td>
                        </tr>
                        <tr>
                            <td class="c">1.1.4</td>
                            <td>범위 설정</td>
                            <td>위험관리 계획서</td>
                        </tr>
                        <tr>
                            <td class="c">1.1.5</td>
                            <td>정책 수립</td>
                            <td>정보보호관리체계 명세서</td>
                        </tr>
                        <tr>
                            <td class="c">1.1.6</td>
                            <td>자원 할당</td>
                            <td>정보보호 운영명세서</td>
                        </tr>
                        <tr>
                            <td class="c">1.1.7</td>
                            <td>정보자산 식별</td>
                            <td>정보서비스 업무 흐름도</td>
                        </tr>
                        <tr>
                            <td class="c">1.1.8</td>
                            <td>현황 및 흐름분석</td>
                            <td>정보보호 운영명세서</td>
                        </tr>
                        <tr>
                            <td class="c">1.1.9</td>
                            <td>위험평가</td>
                            <td>정보서비스 업무 흐름도</td>
                        </tr>
                        <tr>
                            <td class="c">1.2.1</td>
                            <td>보호대책 선정</td>
                            <td>위험관리 계획서</td>
                        </tr>
                        <tr>
                            <td class="c">1.2.2</td>
                            <td>보호대책 구현</td>
                            <td>정보보호관리체계 명세서</td>
                        </tr>
                        <tr>
                            <td class="c">1.2.3</td>
                            <td>보호대책 공유</td>
                            <td>위험관리 계획서</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="tab_box tb_type1 c tab_event">
                    <table>
                        <thead>
                        <tr>
                            <th class="c">No</th>
                            <th class="c">영역구분</th>
                            <th class="c">증적명</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td class="c">2.1.1</td>
                            <td>경영진의 참여</td>
                            <td>정보보호관리체계 명세서</td>
                        </tr>
                        <tr>
                            <td class="c">1.1.2</td>
                            <td>최고책임자의 지정</td>
                            <td>정보보호 운영명세서</td>
                        </tr>
                        <tr>
                            <td class="c">1.1.3</td>
                            <td>조직 구성</td>
                            <td>정보서비스 업무 흐름도</td>
                        </tr>
                        <tr>
                            <td class="c">1.1.4</td>
                            <td>범위 설정</td>
                            <td>위험관리 계획서</td>
                        </tr>
                        <tr>
                            <td class="c">1.1.5</td>
                            <td>정책 수립</td>
                            <td>정보보호관리체계 명세서</td>
                        </tr>
                        <tr>
                            <td class="c">1.1.6</td>
                            <td>자원 할당</td>
                            <td>정보보호 운영명세서</td>
                        </tr>
                        <tr>
                            <td class="c">1.1.7</td>
                            <td>정보자산 식별</td>
                            <td>정보서비스 업무 흐름도</td>
                        </tr>
                        <tr>
                            <td class="c">1.1.8</td>
                            <td>현황 및 흐름분석</td>
                            <td>정보보호 운영명세서</td>
                        </tr>
                        <tr>
                            <td class="c">1.1.9</td>
                            <td>위험평가</td>
                            <td>정보서비스 업무 흐름도</td>
                        </tr>
                        <tr>
                            <td class="c">1.2.1</td>
                            <td>보호대책 선정</td>
                            <td>위험관리 계획서</td>
                        </tr>
                        <tr>
                            <td class="c">1.2.2</td>
                            <td>보호대책 구현</td>
                            <td>정보보호관리체계 명세서</td>
                        </tr>
                        <tr>
                            <td class="c">1.2.3</td>
                            <td>보호대책 공유</td>
                            <td>위험관리 계획서</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="tab_box tb_type1 c tab_event">
                    <table>
                        <thead>
                        <tr>
                            <th class="c">No</th>
                            <th class="c">영역구분</th>
                            <th class="c">증적명</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td class="c">3.1.1</td>
                            <td>경영진의 참여</td>
                            <td>정보보호관리체계 명세서</td>
                        </tr>
                        <tr>
                            <td class="c">1.1.2</td>
                            <td>최고책임자의 지정</td>
                            <td>정보보호 운영명세서</td>
                        </tr>
                        <tr>
                            <td class="c">1.1.3</td>
                            <td>조직 구성</td>
                            <td>정보서비스 업무 흐름도</td>
                        </tr>
                        <tr>
                            <td class="c">1.1.4</td>
                            <td>범위 설정</td>
                            <td>위험관리 계획서</td>
                        </tr>
                        <tr>
                            <td class="c">1.1.5</td>
                            <td>정책 수립</td>
                            <td>정보보호관리체계 명세서</td>
                        </tr>
                        <tr>
                            <td class="c">1.1.6</td>
                            <td>자원 할당</td>
                            <td>정보보호 운영명세서</td>
                        </tr>
                        <tr>
                            <td class="c">1.1.7</td>
                            <td>정보자산 식별</td>
                            <td>정보서비스 업무 흐름도</td>
                        </tr>
                        <tr>
                            <td class="c">1.1.8</td>
                            <td>현황 및 흐름분석</td>
                            <td>정보보호 운영명세서</td>
                        </tr>
                        <tr>
                            <td class="c">1.1.9</td>
                            <td>위험평가</td>
                            <td>정보서비스 업무 흐름도</td>
                        </tr>
                        <tr>
                            <td class="c">1.2.1</td>
                            <td>보호대책 선정</td>
                            <td>위험관리 계획서</td>
                        </tr>
                        <tr>
                            <td class="c">1.2.2</td>
                            <td>보호대책 구현</td>
                            <td>정보보호관리체계 명세서</td>
                        </tr>
                        <tr>
                            <td class="c">1.2.3</td>
                            <td>보호대책 공유</td>
                            <td>위험관리 계획서</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>

            <a href="#;" class="close ok"><i class="far fa-plus"></i></a>
        </div>
    </div>

    <div class="pop" id="pop_controll_items"> <!-- 통제항목 팝업 -->
        <div class="dim"></div>
        <div class="in">
            <h3>통제항목</h3>
            <div class="contents">
                <div class="tab_area tab_event">
                    <ul>
                        <li class="on"><a href="#;">관리체계</a></li>
                        <li><a href="#;">보호대책</a></li>
                        <li><a href="#;">개인정보</a></li>
                    </ul>
                </div>

                <div class="tab_box tb_type1 tab_event" style="display:block;">
                    <table>
                        <colgroup>
                            <col style="width:20%">
                            <col style="width:auto">
                        </colgroup>
                        <thead>
                        <tr>
                            <th class="c">No</th>
                            <th class="c">통제항목</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.1.1
                            </td>
                            <td>경영진의 참여</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.1.2
                            </td>
                            <td>최고책임자의 지정</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.1.3
                            </td>
                            <td>조직 구성</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.1.4
                            </td>
                            <td>범위 설정</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.1.5
                            </td>
                            <td>정책 수립</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.1.6
                            </td>
                            <td>자원 할당</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.1.7
                            </td>
                            <td>정보자산 식별</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.1.8
                            </td>
                            <td>현황 및 흐름분석</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="tab_box tb_type1 c tab_event">
                    <table>
                        <colgroup>
                            <col style="width:20%">
                            <col style="width:auto">
                        </colgroup>
                        <thead>
                        <tr>
                            <th class="c">No</th>
                            <th class="c">통제항목</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 2.1.1
                            </td>
                            <td>경영진의 참여</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.1.2
                            </td>
                            <td>최고책임자의 지정</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.1.3
                            </td>
                            <td>조직 구성</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.1.4
                            </td>
                            <td>범위 설정</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.1.5
                            </td>
                            <td>정책 수립</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.1.6
                            </td>
                            <td>자원 할당</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.1.7
                            </td>
                            <td>정보자산 식별</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.1.8
                            </td>
                            <td>현황 및 흐름분석</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.1.9
                            </td>
                            <td>위험평가</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.2.1
                            </td>
                            <td>보호대책 선정</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.2.2
                            </td>
                            <td>보호대책 구현</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.2.3
                            </td>
                            <td>보호대책 공유</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="tab_box tb_type1 c tab_event">
                    <table>
                        <colgroup>
                            <col style="width:20%">
                            <col style="width:auto">
                        </colgroup>
                        <thead>
                        <tr>
                            <th class="c">No</th>
                            <th class="c">통제항목</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 3.1.1
                            </td>
                            <td>경영진의 참여</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.1.2
                            </td>
                            <td>최고책임자의 지정</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.1.3
                            </td>
                            <td>조직 구성</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.1.4
                            </td>
                            <td>범위 설정</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.1.5
                            </td>
                            <td>정책 수립</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.1.6
                            </td>
                            <td>자원 할당</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.1.7
                            </td>
                            <td>정보자산 식별</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.1.8
                            </td>
                            <td>현황 및 흐름분석</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.1.9
                            </td>
                            <td>위험평가</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.2.1
                            </td>
                            <td>보호대책 선정</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.2.2
                            </td>
                            <td>보호대책 구현</td>
                        </tr>
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="" id=""> 1.2.3
                            </td>
                            <td>보호대책 공유</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="btn_box">
                    <a href="#;" class="btn s">추가</a>
                    <a href="#;" class="btn_s s">취소</a>
                </div>
            </div>

            <a href="#;" class="close ok"><i class="far fa-plus"></i></a>
        </div>
    </div>


    <div class="pop" id="pop_evidence_manager"> <!-- 증적 관리 담당자 팝업 -->
        <div class="dim"></div>
        <div class="in">
            <h3>증적 관리 담당자</h3>
            <div class="contents">

                <div class="pop_search">
                    <input type="text" name="" id="">
                    <a href="#;" class="btn style1 s">검색</a>
                </div>

                <div class="tab_box tb_type1 c">
                    <table>
                        <colgroup>
                            <col style="width:6%">
                            <col style="width:10%">
                            <col style="width:20%">
                            <col style="width:15%">
                            <col style="width:15%">
                            <col style="width:auto">
                        </colgroup>
                        <thead>
                        <tr>
                            <th><input type="checkbox" name="" id=""></th>
                            <th>No</th>
                            <th>부서</th>
                            <th>직급</th>
                            <th>이름</th>
                            <th>이메일</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>
                                <input type="checkbox" name="" id="">
                            </td>
                            <td>1</td>
                            <td>기술지원팀</td>
                            <td>책임</td>
                            <td>홍길동</td>
                            <td>test@naver.com</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="" id="">
                            </td>
                            <td>2</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="" id="">
                            </td>
                            <td>3</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="" id="">
                            </td>
                            <td>4</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="" id="">
                            </td>
                            <td>5</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="" id="">
                            </td>
                            <td>6</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="" id="">
                            </td>
                            <td>7</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="" id="">
                            </td>
                            <td>8</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="" id="">
                            </td>
                            <td>9</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="" id="">
                            </td>
                            <td>10</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="" id="">
                            </td>
                            <td>11</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="" id="">
                            </td>
                            <td>12</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="btn_box">
                    <a href="#;" class="btn b">담당자 변경</a>
                </div>
            </div>

            <a href="#;" class="close ok"><i class="far fa-plus"></i></a>
        </div>
    </div>


    <div class="pop" id="pop_payment_selection"> <!-- 결재 선택하기 팝업 -->
        <div class="dim"></div>
        <div class="in">
            <h3>결재 선택하기</h3>
            <div class="contents">
                <div class="payment_box">
                    <div class="left">
                        <input type="text" name="" id="">
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
                        <strong>결재순서</strong>
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
                    <a href="#;" class="btn">설정완료</a>
                </div>
            </div>

            <a href="#;" class="close ok"><i class="far fa-plus"></i></a>
        </div>
    </div>

    <script>
        $( function() {
            $( "#pop_payment_selection #sortable" ).sortable();
            $( "#pop_payment_selection #sortable" ).disableSelection();
        } );
    </script>


    </body>
    </html>

@endsection

