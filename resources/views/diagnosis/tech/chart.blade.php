@extends('layouts.layout')
@section('main')


    <div class="container">
        <div class="top_titles">
            <ul class="location">
                <li>Home</li>
                <li>진단관리</li>
            </ul>
            <h2>기술적 진단 결과</h2>

            <div class="add_area">
                <a href="#;" class="pop_diagnosis_program btn_layer_open btn_search">진단 프로그램</a>
                <a href="#;" class="pop_guide_line btn_layer_open btn_search">조치 가이드라인</a>
                <a href="/diagnosis/tech/list" class="btn_search">상세결과</a>
            </div>
        </div>

        <div class="graph_box">

            <ul>
                <li class="w_100">
                    <h3><span>기술적 진단 진행률(%)</span></h3>
                    <div class="img">
                        <img src="/html/front/img/graph/img_graph2.jpg" alt="">
                    </div>
                </li>
                <li class="w_100">
                    <h3><span>기술적 진단 결과(%)</span></h3>
                    <p class="red">※ 영역 선택 시 상세 차트를 보실 수 있습니다.</p>
                    <div class="img">
                        <img src="/html/front/img/graph/img_graph4.jpg" alt="">
                    </div>
                </li>
            </ul>



        </div>

    </div>

    </div>
    </div>



    <div class="pop" id="pop_guide_line"> <!-- 조치 가이드라인 팝업 -->
        <div class="dim"></div>
        <div class="in">
            <h3>기술적 진단 가이드라인</h3>
            <div class="contents">

                <ul class="guide_list">
                    <li>
                        <strong>Windows 서버</strong>
                        <a href="#;" class="btn">다운로드</a>
                    </li>
                    <li>
                        <strong>Unix 서버</strong>
                        <a href="#;" class="btn">다운로드</a>
                    </li>
                    <li>
                        <strong>DBMS</strong>
                        <a href="#;" class="btn">다운로드</a>
                    </li>
                    <li>
                        <strong>WEB</strong>
                        <a href="#;" class="btn">다운로드</a>
                    </li>
                    <li>
                        <strong>IIS</strong>
                        <a href="#;" class="btn">다운로드</a>
                    </li>
                    <li>
                        <strong>WAS</strong>
                        <a href="#;" class="btn">다운로드</a>
                    </li>
                    <li>
                        <strong>네트워크 장비</strong>
                        <a href="#;" class="btn">다운로드</a>
                    </li>
                    <li>
                        <strong>보안장비</strong>
                        <a href="#;" class="btn">다운로드</a>
                    </li>
                    <li>
                        <strong>Windows PC</strong>
                        <a href="#;" class="btn">다운로드</a>
                    </li>
                    <li>
                        <strong>MAC PC</strong>
                        <a href="#;" class="btn">다운로드</a>
                    </li>
                </ul>

            </div>

            <a href="#;" class="close ok"><i class="far fa-plus"></i></a>
        </div>
    </div>


    <div class="pop" id="pop_diagnosis_program"> <!-- 진단 프로그램 팝업 -->
        <div class="dim"></div>
        <div class="in">
            <h3>진단 프로그램 </h3>
            <div class="contents">

                <ul class="guide_list">
                    <li>
                        <strong>Windows 서버</strong>
                        <a href="#;" class="btn">다운로드</a>
                    </li>
                    <li>
                        <strong>Unix 서버</strong>
                        <a href="#;" class="btn">다운로드</a>
                    </li>
                    <li>
                        <strong>Solaris 서버</strong>
                        <a href="#;" class="btn">다운로드</a>
                    </li>
                    <li>
                        <strong>Windows PC</strong>
                        <a href="#;" class="btn">다운로드</a>
                    </li>
                    <li>
                        <strong>MAC PC</strong>
                        <a href="#;" class="btn">다운로드</a>
                    </li>
                    <li>
                        <strong>취약점 조치<br>(Windows Pc)</strong>
                        <a href="#;" class="btn">다운로드</a>
                    </li>
                    <li>
                        <strong>개인정보 정책</strong>
                        <a href="#;" class="btn">다운로드</a>
                    </li>
                </ul>

            </div>

            <a href="#;" class="close ok"><i class="far fa-plus"></i></a>
        </div>
    </div>



    </body>
    </html>



@endsection