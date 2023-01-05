@extends('layouts.layout')
@section('main')

<div class="container">

    <div class="top_titles">
        <ul class="location">
            <li>Home</li>
            <li>증적관리</li>
            <li>증적목록</li>
        </ul>
        <h2>증적 추가 등록</h2>
    </div>

    <div class="tb_content">
        <div class="tb_type1 w_100">
            <table>
                <colgroup>
                    <col style="width:20%;">
                    <col style="width:13%;">
                    <col style="width:auto">
                    <col style="width:15%;">
                    <col style="width:15%;">
                    <col style="width:15%;">
                </colgroup>
                <thead>
                <tr>
                    <th class="none">통제영역</th>
                    <th class="none">증적 명</th>
                    <th class="none">증적 코드</th>
                    <th class="none">실사여부</th>
                    <th class="none">주기</th>
                    <!--====================================================
                    =
                    =   6. [modal] 결재 __ 설정하기  버튼
                    =
                    ======================================================-->
                    <th>결재

                        @if( $is_exist_approval_line_user_config )
                            <approval-line-pin :l_users="{{ $users_of_company }}" :r_users="{{ $users_of_approval_lines_user_config }}"></approval-line-pin>
                        @else
                            <approval-line-pin :l_users="{{ $users_of_company }}" :r_users="{{ $users_of_approval_lines_user_config }}"></approval-line-pin>
                        @endif


                    </th>

                </tr>
                </thead>

                <tbody>
                <tr>
                    <!--====================================================
                    =
                    =  1. 통제영역 SELECT
                    =
                    ======================================================-->
                    <td>

                        <select id="control_area_element">
                                <option value="">---선택하세요---</option>

                            @foreach($codeFirstCriteria as $codeFirstCriterion)

                                <option value="{{$codeFirstCriterion->codeFirstPart}}"> {{ $codeFirstCriterion->domain }}</option>

                            @endforeach

                        </select>


                    </td>
                    <!--====================================================
                    =
                    =  2. 증적 명
                    =
                    ======================================================-->
                    <td>
                        <input type="text" name="" class="w_100" value="" id="evidence_name_element">
                    </td>

                    <!--====================================================
                    =
                    =   3. 증적 코드
                    =
                    ======================================================-->
                    <td>
                        <input type="text" name=""  class="w_100" value="" disabled id="evidence_code_element">
                    </td>

                    <!--====================================================
                    =
                    =   4. 실사여부
                    =
                    ======================================================-->
                    <td>
                        <select name="" class="w_100" id="field_inspection_element">
                            <option value="일반">일반</option>
                            <option value="실사">실사</option>
                        </select>
                    </td>
                    <!--====================================================
                    =
                    =   5. 주기
                    =
                    ======================================================-->
                    <td>
                        <select name="" class="w_100" id="cycle_element">
                            <option value="1">상시</option>
                            <option value="30">1개월</option>
                            <option value="60">2개월</option>
                            <option value="90">3개월</option>
                            <option value="365">1년</option>
                        </select>
                    </td>



                    <td>
                        <select name="" class="w_100">
                            <option value="3단계">3단계</option>
                            <option value="일반">일반</option>
                        </select>
                    </td>



                </tr>
                </tbody>

            </table>
        </div>
    </div>

    <div class="tb_content length3">

        <table class="tb_txt">
            <colgroup>
                <col style="width:29%">
                <col style="width:auto">
            </colgroup>
            <tbody>
                <!--====================================================
                =
                =   7. 설명
                =
                ======================================================-->
                <tr>
                    <th>설명</th>
                    <td>
                        <textarea name="" id="explanation_element"></textarea>
                    </td>
                </tr>
            </tbody>
        </table>
        <!--====================================================
         =
         =   8. [modal] 통제항목 __ BOX
         =
         ======================================================-->
        <div class="tb_type1 s ">

            <control-item-box :tabs="{{$tabs}}"></control-item-box>

        </div>

        <!--====================================================
         =
         =   9. [modal] 담당자 __ BOX
         =
         ======================================================-->
        <evidence-manager-box class="tb_txt" :users="{{ $users_of_company }}"></evidence-manager-box>

    </div>


    <div class="l-footer c">

        <button class="btn" id="button_for_save_element">저장하기</button>

    </div>
    <!-- // 증적 목록이 없을시 -->

</div>

</div>
</div>







<!------------------------------------------------------------------
-
-  자바스크립트
-
------------------------------------------------------------------->
<script>
window.onload = function ()
{
    /*===========================================
    =
    =  1__ ajax영 json_data 선언
    =
    ============================================*/
    var json_object = new Object();
    /*===========================================
    =
    =  2__ [ 변수 선언 ] 화면에 안보이는
    =
    ============================================*/
    json_object.company_id = "{{ request()->input('company_id') }}";
    json_object.standard_id = "{{ request()->input('standard_id') }}";

    var href = "{!! route( 'evidence.main.list', request()->query() ) !!}";
    /*===========================================
    =
    =  3__ [ 변수 선언 ] element 화면단
    =
    ============================================*/
        /*--------------------
        - 1.통제영역 SELECT
        ---------------------*/
        var control_area_element = document.querySelector('#control_area_element');
        /*--------------------
        - 2.증적명 INPUT
        ---------------------*/
        var evidence_name_element = document.querySelector('#evidence_name_element');
        /*--------------------
        - 3.증적코드
        ---------------------*/
        var evidence_code_element = document.querySelector('#evidence_code_element');
        /*--------------------
        - 4.실사여부
        ---------------------*/
        var field_inspection_element = document.querySelector('#field_inspection_element');
        /*--------------------
        - 5.주기
        ---------------------*/
        var cycle_element = document.querySelector('#cycle_element');
        /*--------------------
        - 6.[modal] 결재
        ---------------------*/

        /*--------------------
        - 7.설명
        ---------------------*/
        var explanation_element = document.querySelector('#explanation_element');
        /*--------------------
        - 8.[modal] 통제항목
        ---------------------*/

        /*--------------------
        - 9.[modal] 담당자
        ---------------------*/

        /*--------------------
        - 10.[modal] display 담당자
        ---------------------*/
        var display_evidence_managers = document.querySelector('#display_evidence_managers');
    /*===========================================
    =
    =  4__ 실제값 대입
    =
    ============================================*/
    var button_for_save = document.querySelector('#button_for_save_element');
    button_for_save.addEventListener('click', function(event)
    {
        event.preventDefault();
        /*---------------------------
        -  1. 통제영역
        ---------------------------*/
        json_object.control_area = control_area_element.value;
        console.log("__control_area__", json_object.control_area);
        /*--------------------
        - 2.증적명 INPUT
        ---------------------*/
        json_object.evidence_name = evidence_name_element.value;
        /*--------------------
        - 3.증적코드
        ---------------------*/

        /*--------------------
        - 4.실사여부
        ---------------------*/
        json_object.field_inspection = field_inspection_element.value;
        /*--------------------
        - 5.주기
        ---------------------*/
        json_object.cycle = cycle_element.value;
        /*--------------------
        - 6.[modal] 결재
        ---------------------*/
        if( localStorage.getItem("approval_line_ids") == null )
        {
        }
        else
        {
            var approval_line_ids_arr = JSON.parse( localStorage.getItem("approval_line_ids") );
            json_object.approval_line_ids = approval_line_ids_arr;

            localStorage.removeItem('approval_line_ids');
            console.log("__approval_line_ids:", JSON.stringify(json_object));
        }

        /*--------------------
        - 7.설명
        ---------------------*/
        json_object.content = explanation_element.value;
        /*--------------------
        - 8.[modal] 통제항목
        ---------------------*/
        if( localStorage.getItem('control_items') == null )
        {
        }
        else
        {
            var control_items_arr = JSON.parse( localStorage.getItem('control_items') ) ;
            json_object.contorl_items = control_items_arr;

            localStorage.removeItem("control_items");
            console.log("__control_items:", JSON.stringify(json_object));
        }
        /*--------------------
        - 9.[modal] 담당자
        ---------------------*/
        if( localStorage.getItem("evidence_managers") == null )
        {
            console.log("__111__");
        }
        else
        {
            console.log("__222__");

            var evience_managers_arr = JSON.parse( localStorage.getItem("evidence_managers") );
            json_object.evidence_managers = evience_managers_arr;

            localStorage.removeItem("evidence_managers");
            console.log("__evidence_managers:", json_object.evidence_managers);
        }
    /*===========================================
    =
    =  5__  validation 검사
    =
    ============================================*/
        /*---------------------------
        -  1. 통제영역
        ---------------------------*/

        if( json_object.control_area == '' || json_object.control_area == null )
        {
            alert("통제영역을 선택하세요!!!");
            return false;
        }

        /*--------------------
        - 2.증적명 INPUT
        ---------------------*/
        else if( json_object.evidence_name == '' || json_object.evidence_name == null )
        {
            alert("증적명을 입력하세요!!!");
            return false;
        }

        /*--------------------
        - 3.증적코드
        ---------------------*/

        /*--------------------
        - 4.실사여부
        ---------------------*/

        /*--------------------
        - 5.주기
        ---------------------*/

        /*--------------------
        - 6.[modal] 결재
        ---------------------*/
        /*
        else if( json_object.approval_line_ids == '' || json_object.approval_line_ids == null)
        {
            alert("결재라인을 선택하세요!!!");
            return false;
        }
        */
        /*--------------------
        - 7.설명
        ---------------------*/
        else if( json_object.content == '' || json_object.content == null)
        {
            alert("설명을 입력하세요!!!");
            return false;
        }
        /*--------------------
        - 8.[modal] 통제항목
        ---------------------*/
        else if( json_object.contorl_items == '' || json_object.contorl_items == null)
        {
            alert("통제항목을 추가하세요!!!");
            return false;
        }
        /*--------------------
        - 9.[modal] 담당자
        ---------------------*/
        else if( json_object.evidence_managers == '' || json_object.evidence_managers == null )
        {
            alert("증적관리 담당자를 선택해 주세요");
            return false;
        }
        /*--------------------
        - 10. 최종 실행
        ---------------------*/
        else if( json_object.control_area != '' && json_object.evidence_name != '')
        {
            alert('execute');
            execute();
        }

    });
    /*===========================================
    =
    =  6__ ajax 처리
    =
    ============================================*/
    function execute()
    {
        var csrf_token = document.head.querySelector('meta[name="csrf-token"]');
        window.axios.defaults.headers.common['X-CSRF-TOKEN'] = csrf_token.content;

        console.log("__json_string__blade:", JSON.stringify(json_object));

        axios.post("{{route('evidence.addtionRegistration.insert_additionRegistration_using_ajax')}}", JSON.stringify(json_object) )
        .then(function(response)
        {
            json_object.contorl_items.splice(0);

            console.log(response);

            evidence_code_element.value = response.data.completedCODE;


        }).catch(function(err)
        {
            json_object.contorl_items.splice(0);

            console.error(err);
        });
    }// function execute_END

} //window.onload_END











</script>


</body>
</html>

@endsection
































