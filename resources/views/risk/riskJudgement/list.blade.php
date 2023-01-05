@extends('layouts.layout')
@section('main')


    <div class="container w_100">
        <div class="top_titles">
            <ul class="location">
                <li>Home</li>
                <li>위험관리</li>
                <li></li>
            </ul>
            <h2>
                위험평가 결과
            </h2>

        </div>


        <div class="tab_area s">
            <ul>
                <li class="on"><a href="#;">관리영역(ISMS)</a></li>
                <li><a href="#;">기술영역</a></li>
            </ul>

            <a href="#;" class="btn style1 b right">산출기준</a>
        </div>


        <div class="tab_box tb_type1 s">
            <table>
                <colgroup>
                    <col style="width:8%">
                    <col style="width:8%">
                    <col style="width:8%">
                    <col style="width:18%">
                    <col style="width:9%">
                    <col style="width:8%">
                    <col style="width:8%">
                    <col style="width:auto">
                    <col style="width:7%">
                    <col style="width:7%">
                </colgroup>
                <thead>
                <tr>
                    <th>자산그룹 </th>
                    <th>자산등급 </th>
                    <th>점검항목 </th>
                    <th>항목명 </th>
                    <th>취약성<br>등급 </th>
                    <th>위협코드 </th>
                    <th>위협내용 </th>
                    <th>위협등급 </th>
                    <th>위험내용 </th>
                    <th>위험도 </th>
                </tr>
                </thead>

                <tbody>

                    @foreach($riskJudgements as $riskJudgement)
                        <tr>
                            <td> {{ $riskJudgement->domain }} </td>
                            <td> </td>
                            <td> {{ $riskJudgement->depth }} </td>
                            <td> {{ $riskJudgement->clause }} </td>
                            <td> {{ $riskJudgement->grade_d }} </td>
                            <td> {{ $riskJudgement->code }} </td>
                            <td> {{ $riskJudgement->explanation_threat }} </td>
                            <td> {{ $riskJudgement->grade_t }} </td>
                            <td> {{ $riskJudgement->explanation_risk }} </td>
                            <td> </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>



        <div class="l-footer l">
            <a href="#;" class="btn_s b">분석 결과 다운로드</a>

        </div>

    </div>

    </div>
    </div>

    </body>
    </html>




















@endsection