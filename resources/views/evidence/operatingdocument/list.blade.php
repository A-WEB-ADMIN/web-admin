@extends('layouts.layout')
@section('main')

    <div class="container w_100">
        <div class="top_titles">
            <ul class="location">
                <li>Home</li>
                <li>증적관리</li>
            </ul>
            <h2>운영명세서</h2>

            <div class="add_area">
                <label for="chkchkchk1">
                    <input type="checkbox" name="" id="chkchkchk1">
                    관련문서 보기
                </label>
            </div>

        </div>
        <div class="top_search select_style">
            <div class="left">
                <label for="chks1">통제영역</label>
                <select name="" id="chks1" class="w_15">
                    <option value="정보보호 관리과정">정보보호 관리과정</option>
                    <option value="정보보호 관리과정">정보보호 관리과정</option>
                </select>
                <select name="" id="chks2" class="w_15">
                    <option value="전체">전체</option>
                    <option value="전체">전체</option>
                </select>
                <a href="#;" class="btn s">조회</a>

            </div>
        </div>


        <div class="tb_type1 s middie_size">
            <table class="c-table__common">
                <thead>
                    <tr>
                        <th>번호</th> <th>통제항목</th> <th>상세내용</th> <th>운영여부</th> <th>운영현황</th> <th>관련문서</th> <th>기록(증적자료)</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($ismsp3_and_operatings as $ismsp3_and_operating)



                    <tr>

                        <td> {{ $ismsp3_and_operating->depth }} </td>
                        <td> {{ $ismsp3_and_operating->sub_domain }} </td>
                        <td> {{ $ismsp3_and_operating->clause }}</td>
                        <td> {{ $ismsp3_and_operating->is_using }}</td>
                        <td> {{ $ismsp3_and_operating->current_situation }}</td>

                        <td> </td>

                        <!-- 증적자료 -->
                        <td>
                        @php
                            $ismsp3_id = $ismsp3_and_operating->id;
                            $operating_id = $ismsp3_and_operating->operating_id;

                            if($operating_id)
                            {
                                $sql = " SELECT evidence_ismsp3.ismsp3_id, evidences.CODE, evidences.subject       ";
                                $sql.= " FROM evidence_ismsp3                                                      ";
                                $sql.= " JOIN evidences ON evidence_ismsp3.evidence_id = evidences.id              ";
                                $sql.= " WHERE evidence_ismsp3.ismsp3_id = {$ismsp3_id}                            ";

                                $evidences = collect(\Illuminate\Support\Facades\DB::select($sql))->map(function($arr)
                                {
                                    return (object)$arr;
                                });
                            }
                        @endphp

                        @if($operating_id)
                            @foreach($evidences as $evidence)

                                <p>{{ $evidence->CODE }} &nbsp&nbsp {{ $evidence->subject }}</p> <br>

                            @endforeach
                        @endif
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>



        <div class="l-footer r">
            <div class="left">
                <a href="#;" class="btn_s b">운영명세서 다운로드</a>
                <a href="#;" class="btn_s b">진단결과 불러오기</a>
            </div>

            <a href="#;" class="btn">제·개정 이력</a>
            <a href="#;" class="btn">저장</a>
        </div>

    </div>

    </div>
    </div>





    <div class="pop" id="pop_view"> <!-- 증적보기_증적명 팝업 --> <!-- [승호생각] 팝업을 너무 초간단하게 해 놨음 -->
        <div class="dim"></div>
        <div class="in">
            <h3>증적보기_증적명</h3>
            <div class="contents">

                <!-- <ul class="top_con">
                  <li>View</li>
                  <li>Zoom</li>
                  <li>Goto</li>
                </ul> -->

                <div class="img">
                    <img src="/html/front/img/common/img.jpg" alt="">
                </div>

            </div>

            <a href="#;" class="close ok"><i class="far fa-plus"></i></a>
        </div>
    </div>



    </body>
    </html>






@endsection

