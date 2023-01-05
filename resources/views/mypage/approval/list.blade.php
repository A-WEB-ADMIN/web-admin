@extends('layouts.layout')
@section('main')

<div class="container">
    <div class="top_titles">
        <ul class="location">
            <li>사용자</li>
        </ul>

        <h2>전자결재 리스트</h2>
    </div>

    <div class="tb_type1">
        <table>

            <colgroup>
                <col style="width:15%">
                <col style="width:18%">
                <col style="width:20%">
                <col style="width:10%">
                <col style="width:auto">
                <col style="width:15%">
            </colgroup>

            <thead>
                <tr>
                    <th>다운로드</th>
                    <th>증적번호</th>
                    <th>증적명</th>
                    <th>기안자</th>
                    <th>기안시간</th>
                    <th>완료일</th>
                </tr>
            </thead>

            <tbody>
                @foreach($approvals as $approval)
                <tr>
                    <td> </td>
                    <td> <a href="/mypage/approval/detail/list?company_id={{request()->input('company_id')}}&standard_id={{request()->input('standard_id')}}&approval_id={{$approval->id}}" style="color:blue;"> {{ $approval->evidence->CODE }} </a> </td>
                    <td> {{ $approval->evidence->subject }} </td>
                    <td> {{ $approval->document->user_name }} </td>
                    <td> {{ $approval->document->created_at }} </td>
                    <td>대기</td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>



    <div class="paging">

    </div>

</div>


</div>
</div>
</body>
</html>

@endsection




























