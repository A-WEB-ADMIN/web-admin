@extends('layouts.layout')
@section('main')

    <div class="container w_100">
        <div class="top_titles">
            <ul class="location">
                <li>Home</li>
                <li>증적관리</li>
            </ul>
            <h2>증적 목록</h2>

            <div class="add_area">
                <label for="search_chk">증적그룹</label>
                <select name="" id="" class="w_30">
                    <option value="전체">전체</option>
                    <option value="전체">전체</option>
                </select>
                <a href="#;" class="btn_s mr_10">적용</a>
                <a href="#;" class="btn b">증적그룹 편집</a>
            </div>
        </div>

        <div class="top_search">

            <div class="right w_50">
                <input type="text" name="" id="" class="w_50">
                <a href="#;" class="btn b style1">검색</a>
            </div>
        </div>

        <div class="tb_type1 s">
            <table>
                <!--===============================
                 =
                 =
                 =
                 =================================-->
                <thead>
                    <tr>
                        <th>번호</th>
                        <th>증적코드</th>
                        <th>증적명</th>
                        <th>이행주기</th>

                        @foreach($period as $datetime)

                            <th> {{ substr($datetime->year, 2, 2) }} / {{ $datetime->month }} </th>

                        @endforeach

                    </tr>
                </thead>
                <!--===============================
                 =
                 =
                 =
                 =================================-->
                <tbody>
                    @foreach($evidences as $evidence)
                    <tr>
                        <td> {{ $evidence->id }}</td>
                        <td> {{ $evidence->CODE }}</td>

                        @if( $evidence->template_id )
                            <td> <a href="{{ route( 'evidence.detail.list', "company_id=".request('company_id')."&standard_id=".request('standard_id')."&evidence_id=".$evidence->id."&template_id=".$evidence->template_id ) }}" style="color:blue;"> {{ $evidence->subject }} </a> </td>
                        @else
                            <td> <a href="{{ route( 'evidence.detail.list', "company_id=".request('company_id')."&standard_id=".request('standard_id')."&evidence_id=".$evidence->id ) }}" style="color:blue;"> {{ $evidence->subject }} </a> </td>
                        @endif



                        <td> {{ $evidence->cycle }}</td>
                        <td> {{ $evidence->col1 }}</td>
                        <td> {{ $evidence->col2 }}</td>
                        <td> {{ $evidence->col3 }}</td>
                        <td> {{ $evidence->col4 }}</td>
                        <td> {{ $evidence->col5 }}</td>
                        <td> {{ $evidence->col6 }}</td>
                        <td> {{ $evidence->col7 }}</td>
                        <td> {{ $evidence->col8 }}</td>
                        <td> {{ $evidence->col9 }}</td>
                        <td> {{ $evidence->col10 }}</td>
                        <td> {{ $evidence->col11 }}</td>
                        <td> {{ $evidence->col12 }}</td>
                        <td> {{ $evidence->col13 }}</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>




        <!--===============================
         =
         = 페이징
         =
         =================================-->
        <div class="paging">

        </div>



        <div class="l-footer c">

            <div class="left">
                <a href="#;" class="btn_s b">전체 증적 다운로드</a>
            </div>
            <!--=======================================
            =
            =  증적 업로드 버튼
            =
            =========================================-->
            <a href="{{ route( 'evidence.addtionRegistration.list', request()->query()) }}" class="btn b">증적 추가등록</a>

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


    </script>



@endsection

