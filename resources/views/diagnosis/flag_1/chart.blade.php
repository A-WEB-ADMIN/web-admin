@extends('layouts.layout')
@section('main')

    <div class="container">
        <div class="top_titles">
            <ul class="location">
                <li>Home</li>
                <li>진단관리</li>
            </ul>
            <h2>관리체계 수립 및 운영</h2>

            <div class="add_area">
                <a href="{{ route('diagnosis.flag_1.list', request()->query() ) }}" class="btn_search">상세결과</a>
            </div>
        </div>




        <div class="graph_box">

            <ul>
                <li>
                    <h3><span>관리체계 운영 수준도(%)</span></h3>
                    <div class="img">

                        <doughnut-chart :bad_percent="{{$bad_percent}}"></doughnut-chart>

                    </div>
                </li>
                <li>
                    <h3><span>영역별 보안 수준(%)</span></h3>
                    <div class="img">

                        <radar-chart></radar-chart>

                    </div>
                </li>
                <li class="w_100">
                    <h3><span>영역별 이행 현황(%)</span></h3>
                    <div class="img">

                        <stacked-bar-chart :domains="{{$domains_bar}}" :goods="{{$goods_bar}}" :bads="{{$bads_bar}}" :not_dones="{{$not_dones_bar}}"></stacked-bar-chart>

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