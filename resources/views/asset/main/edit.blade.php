@extends('layouts.layout')
@section('main')

<div class="container">

    <div class="top_titles">
        <ul class="location">
            <li>Home</li>
            <li>자산관리</li>
            <li>자산 목록</li>
        </ul>
        <h2>자산 추가/수정/삭제</h2>

    </div>



    <session class="c-table__addremove">
        <div class="c-table__addremove--top">
            <button class="i-btn__add"> 추가 </button>
        </div>

        <div class="c-table__addremove--bottom">
            <table>
                <thead>
                    <tr>
                        <th> 번호 </th> <th> 제목 </th> <th> 내용 </th> <th> </th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td> <input type="text" value=""> </td>
                        <td> <input type="text" value=""> </td>
                        <td> <input type="text" value=""> </td>
                        <td> <button class="i-btn__remove">삭제</button> </td>
                    </tr>
                    <tr>
                        <td> <input type="text" value=""> </td>
                        <td> <input type="text" value=""> </td>
                        <td> <input type="text" value=""> </td>
                        <td> <button class="i-btn__remove">삭제</button> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </session>

</div>



@endsection















<!--================================================
=
=  2. 자바스크립트
=
==================================================-->
<script>
    var html =  "<tr> <td> <input type='text' value=''> </td> <td> <button class='i-btn__remove'>삭제</button> </td> </tr>";

    $('.i-btn__add').click(function(){
        $('tbody').append(html);
    });

    $(document).on('click', '.i-btn__remove', function(){
        $(this).parents('tr').remove();
    });
</script>




</body>
</html






















