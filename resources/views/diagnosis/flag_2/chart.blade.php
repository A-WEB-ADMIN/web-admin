@extends('layouts.layout')
@section('main')


    <div class="container">
        <div class="top_titles">
            <ul class="location">
                <li>Home</li>
                <li>진단관리</li>
            </ul>
            <h2>보호대책 요구사항</h2>

            <div class="add_area">
                <a href="/diagnosis/flag_2/list" class="btn_search">상세결과</a>
            </div>
        </div>

        <div class="graph_box">

            <ul>
                <li>
                    <h3><span>보호대책 수준도(%)</span></h3>
                    <div class="img">
                        <img src="/html/front/img/graph/img_graph2.jpg" alt="">
                    </div>
                </li>
                <li>
                    <h3><span>영역별 보안 수준(%)</span></h3>
                    <div class="img">
                        <img src="/html/front/img/graph/img_graph3.jpg" alt="">
                    </div>
                </li>
                <li class="w_100">
                    <h3><span>영역별 이행 현황(%)</span></h3>
                    <div class="img">
                        <img src="/html/front/img/graph/img_graph4.jpg" alt="">
                    </div>
                </li>
            </ul>

        </div>

    </div>

    </div>
    </div>



    </body>
    </html>



@endsection