@extends('layouts.layout')
@section('main')


    <div class="container w_100">
        <div class="top_titles">
            <ul class="location">
                <li>Home</li>
                <li>위험분석</li>
            </ul>
            <h2>위협분석 결과</h2>

            <div class="add_area">
                <a href="#;" class="btn style1">평가기준</a>
            </div>
        </div>

        <div class="tab_box tb_type1 ">
            <table>
                <thead>
                <tr>
                    <th>위협코드 </th>
                    <th>대분류 </th>
                    <th>중분류 </th>
                    <th>위협내용 </th>
                    <th>기밀성 </th>
                    <th>무결성 </th>
                    <th>가용성 </th>
                    <th>위협등급 </th>
                </tr>
                </thead>

                <tbody>
                    @foreach($treatgrades as $treatgrade)
                        <tr>
                            <td> {{ $treatgrade->code }} </td>
                            <td> {{ $treatgrade->domain }} </td>
                            <td> {{ $treatgrade->subdomain }} </td>
                            <td> {{ $treatgrade->explanation }} </td>
                            <td> {{ $treatgrade->confidentiality }} </td>
                            <td> {{ $treatgrade->integrity }} </td>
                            <td> {{ $treatgrade->availability }} </td>
                            <td> {{ ((int)$treatgrade->confidentiality) + ((int)$treatgrade->integrity) + ((int)$treatgrade->availability) }} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


        <div class="l-footer l">
            <a href="#;" class="btn_s b">분석결과 다운로드</a>
        </div>

    </div>

    </div>
    </div>


    </body>
    </html>










@endsection