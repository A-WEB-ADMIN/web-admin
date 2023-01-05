@extends('layouts.layout')
@section('main')

    <div class="container w_100">
        <div class="top_titles">
            <ul class="location">
                <li>Home</li>
                <li>진단관리</li>
            </ul>
            <h2>
                기술적 진단 결과
                <span>※진단상태<br>- 미진단 > 진단중 > 진단완료 > 이행중 > 이행완료</span>
            </h2>

        </div>

        <div class="top_search">
            <div class="left">
                <input type="text" name="" id="">
                <a href="#;" class="btn_s">검색</a>
            </div>

            <div class="right">
                <a href="#;" class="btn style1 b">서버시스템 상세결과</a>
            </div>
        </div>

        <div class="tab_box tb_type1 ">
            <table>
                <thead>
                <tr>
                    <th><input type="checkbox" name="" id=""></th>
                    <th>No @include('layouts.filter') </th>
                    <th>상태 @include('layouts.filter') </th>
                    <th>구분 @include('layouts.filter') </th>
                    <th>HOSTNAME @include('layouts.filter') </th>
                    <th>사용자 @include('layouts.filter') </th>
                    <th>VERSION @include('layouts.filter') </th>
                    <th>IP ADDRESS @include('layouts.filter') </th>
                    <th>자산코드 @include('layouts.filter') </th>
                    <th>용도 @include('layouts.filter') </th>
                    <th>담당자 @include('layouts.filter') </th>
                    <th>등급 @include('layouts.filter') </th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>&nbsp;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>&nbsp;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>&nbsp;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>&nbsp;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>&nbsp;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>&nbsp;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>&nbsp;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>&nbsp;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>&nbsp;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>&nbsp;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>&nbsp;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>


        <div class="btn_box r">
            <div class="left">
                <a href="#;" class="pop_complete_choice btn_layer_open btn_s b">진단 결과 업로드</a>
                <a href="#;" class="pop_manual_choice btn_layer_open btn_s b">수동진단 시작</a>
            </div>

            <a href="#;" class="btn">진단시작</a>
            <a href="#;" class="btn">저장</a>
        </div>

    </div>

    </div>
    </div>


    <div class="pop" id="pop_complete_choice"> <!-- 결과보고서 업로드 진단 선택 팝업 -->
        <div class="dim"></div>
        <div class="in">
            <h3>결과보고서 업로드 진단 선택 </h3>
            <div class="contents">

                <ul class="choice_list">
                    <li>
                        <input type="radio" name="chkchk12" id="chkchk12">
                        <label for="chkchk12">초행진단(최초진단)</label>
                        <select name="" id="">
                            <option value="템플릿 선택">템플릿 선택</option>
                            <option value="템플릿 선택">템플릿 선택</option>
                            <option value="템플릿 선택">템플릿 선택</option>
                        </select>
                        <a href="#;" class="btn style1 s">설정</a>
                    </li>
                    <li>
                        <input type="radio" name="chkchk12" id="chkchk22">
                        <label for="chkchk22">이행진단(취약점 조치 후 진단)</label>
                    </li>
                </ul>
                <div class="btn_box">
                    <a href="#;" class="btn">OK</a>
                    <a href="#;" class="btn_s ok ">Cancel</a>
                </div>
            </div>

            <a href="#;" class="close ok"><i class="far fa-plus"></i></a>
        </div>
    </div>

    <div class="pop" id="pop_manual_choice"> <!-- 수동 진단 선택 팝업 -->
        <div class="dim"></div>
        <div class="in">
            <h3>수동 진단 선택 </h3>
            <div class="contents">

                <ul class="choice_list">
                    <li>
                        <input type="radio" name="chkchk12123" id="chkchk_choice1">
                        <label for="chkchk_choice1">초행진단(최초진단)</label>
                        <select name="" id="">
                            <option value="템플릿 선택">템플릿 선택</option>
                            <option value="템플릿 선택">템플릿 선택</option>
                            <option value="템플릿 선택">템플릿 선택</option>
                        </select>
                        <a href="#;" class="btn style1 s">설정</a>
                    </li>
                    <li>
                        <input type="radio" name="chkchk12123" id="chkchk_choice2">
                        <label for="chkchk_choice2">이행진단(취약점 조치 후 진단)</label>
                    </li>
                </ul>
                <div class="btn_box">
                    <a href="#;" class="btn">OK</a>
                    <a href="#;" class="btn_s ok ">Cancel</a>
                </div>
            </div>

            <a href="#;" class="close ok"><i class="far fa-plus"></i></a>
        </div>
    </div>



    </body>
    </html>



@endsection