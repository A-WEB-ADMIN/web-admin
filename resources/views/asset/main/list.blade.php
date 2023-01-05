@extends('layouts.layout')
@section('main')



    <div class="container w_100">
        <!--=======================================================================
        =
        = 1. home > 자산관리 >
        =
        ========================================================================-->
        <div class="top_titles">
            <ul class="location">
                <li>Home</li>
                <li>자산관리</li>
            </ul>
            <!--=======================================================================
            =
            = 2. <h1>자산 목록</h1>,  자산그룹,  자산그룹 편집
            =
            ========================================================================-->
            <h2>자산 목록</h2>

            <div class="add_area">
                <label for="search_chk">자산그룹</label>
                <!--======================================
                =
                = 자산 그룹 SELECT
                =
                =======================================-->
                @if($groups)

                    <select id="group" class="w_30" onchange="group(this)">
                        <option value="">선택하세요</option>
                        @foreach($groups as $group)

                            <option value="{{ $group->id }}" {{ request()->query('group_id')==$group->id ? 'selected' : '' }}> {{ $group->name }} </option>

                        @endforeach
                    </select>

                @else
                    <select id="group" class="w_30" onchange="group(this)">
                        <option value="">회사를 먼저 선택하세요</option>
                    </select>
                @endif



                <a href="#;" class="btn_s mr_10">적용</a>
                <a href="/asset/group/edit" class="btn b">자산그룹 편집</a>
            </div>
        </div>
        <!--=======================================================================
        =
        = 3. 전체,  검색,  자산분류기준,  자산중요도 평가기준
        =
        ========================================================================-->
        <div class="top_search">

            <div class="left">
                <select name="" id="">
                    <option value="전체">전체</option>
                    <option value="전체">전체</option>
                </select>
                <input type="text" name="" id="">
                <a href="#;" class="btn_s">검색</a>
            </div>

            <div class="right">
                <a href="#;" class="btn b style1">자산 분류기준</a>
                <a href="#;" class="btn b style1">자산중요도 평가기준</a>
            </div>


        </div>
        <!--=======================================================================
        =
        = 4. Tab 메뉴들
        =
        ========================================================================-->
        <section class="c-tabmenu">

            <nav>
                <ul>
                    @if( $tabs )
                        @foreach($tabs as $tab)

                            <li> <a onclick="tab('{{ $tab->id }}')" class="{{ request()->query('tab_id')==$tab->id ? 'active' : ''}}"> {{ $tab->tab_korean }} </a> </li>

                        @endforeach
                    @else

                    @endif
                </ul>
            </nav>

            <div>
                <a href="{{ route( 'asset.config.list', request()->query()) }}"><i class="far fa-cog"></i></a>
            </div>

        </section>
        <!--=======================================================================
        =
        = 5. 테이블
        =
        ========================================================================-->
            @if($assets)
            <section>
                <table class="c-table__undertab">

                    <tr>
                        @foreach($columns as $column)
                            <th> {{ $column->column_korean }} </th>
                        @endforeach
                    </tr>

                    @foreach($assets as $asset)
                        @php
                            $asset = (object)$asset
                        @endphp

                        <tr>
                            @foreach($myconfigcolumns as $myconfigcolumn)
                                <td> {{ $asset->${'myconfigcolumn'} }} </td>
                            @endforeach
                        </tr>
                    @endforeach

                </table>
            </section>
            @else

            @endif

        <!--=======================================================================
        =
        = 6. footer 버튼들
        =
        ========================================================================-->
        <div class="l-footer r">
            <div class="left">
                <a href="#;" class="btn_s b">자산대장 다운로드</a>
                <a href="/front/asset/share/list.php" class="btn_s b">자산공유하기</a>
            </div>


            <div class="center">
                @can('edit-asset')
                    <a href="/front/asset/history/list.php" class="btn b">권한 테스트 버튼</a>
                @endcan

            </div>


            <a href="/front/asset/history/list.php" class="btn b">제·계정 이력</a>



            <!--===================================================
            =
            =  자산 등록 수정 삭제 pin 버튼
            =
            =====================================================-->
            @if($assets)

                @if($current_tab)
                    <asset-crud-pin class="btn b" :company_id="{{$company_id}}" :standard_id="{{$standard_id}}" :tab_id="{{$tab_id}}" :current_tab="{{$current_tab}}"  :columns="{{$columns}}" :myconfigcolumns="{{$myconfigcolumns_for_vue}}">자산 추가/수정/삭제</asset-crud-pin>
                @else

                @endif

            @endif




        </div>


    </div>


    </div>
    </div>
</body>
</html>
<!--================================
=
==================================-->
<script>
    var company_id = "{{request()->query('company_id')}}";
    var group_id = "{{request()->query('group_id')}}";

    var tab_id = 1;
    tab_id = "{{request()->query('tab_id')}}";

    console.log(group_id);
    console.log(tab_id);

    function group(group)
    {
        group_id = group.value;
        location.href = "?company_id=" + company_id + "&standard_id=" + standard_id + "&group_id=" + group_id + "&tab_id=" + tab_id;
    }

    function tab(tab_id) {

        location.href = "?company_id=" + company_id + "&standard_id=" + standard_id + "&group_id=" + group_id + "&tab_id=" + tab_id;
    }
</script>

@endsection