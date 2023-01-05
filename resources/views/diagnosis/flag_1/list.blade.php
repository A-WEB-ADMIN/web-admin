@extends('layouts.layout')
@section('main')

    <div class="container w_100">
        <div class="top_titles">
            <ul class="location">
                <li>Home</li>
                <li>진단관리</li>
            </ul>
            <h2>관리체계 수립 및 운영</h2>

            <div class="add_area">
                <!--==============================================================
                =
                =   1. 비교하기
                =
                ================================================================-->
                <label for="chkchk3">
                    <input type="checkbox" name="" id="chkchk3">
                    비교하기
                </label>
                <!--==============================================================
                =
                =   2. 이전현황 불러오기
                =
                ================================================================-->
                <label for="chkchk2" class="bold">이전현황 불러오기</label>
                <select name="datetime" class="w_30" id="datatime_element">
                        <option>--선택하세요--</option>
                    @foreach($datetimes as $datetime)
                        <option value="{{$datetime}}"> {{ $datetime }} </option>
                    @endforeach

                </select>
            </div>
        </div>

        <div class="top_search">
            <div class="left">
                <!--==============================================================
                =
                =   3. 통제 영역
                =
                ================================================================-->
                <label for="chkchk2">통제영역</label>
                <select id="domain_element" >
                    <option value="전체" {{request("domain") == "전체" ? "selected" : ""}}>전체</option>
                    <option value="관리체계 기반 마련" {{request("domain") == "관리체계 기반 마련" ? "selected" : ""}}> 관리체계 기반 마련 </option>
                    <option value="위험 관리" {{request("domain") == "위험 관리" ? "selected" : ""}}> 위험 관리 </option>
                    <option value="관리체계 운영" {{request("domain") == "관리체계 운영" ? "selected" : ""}}> 관리체계 운영 </option>
                    <option value="관리체계 점검 및 개선" {{request("domain") == "관리체계 점검 및 개선" ? "selected" : ""}}> 관리체계 점검 및 개선 </option>
                </select>
                <!--==============================================================
                =
                =   4. 조회
                =
                ================================================================-->
                <input type="text" name="" id="">
                <a href="#;" class="btn_s">조회</a>
            </div>

            <div class="right">
                <a href="#;" class="btn style1">평가기준</a>
            </div>
        </div>

        <div class="tab_box tb_type1 ">
            <table>
                <colgroup>
                    <col style="width:8%">
                    <col style="width:auto">
                    <col style="width:25%">
                    <col style="width:8%">
                    <col style="width:25%">
                    <col style="width:8%">
                </colgroup>

                <thead>
                    <tr>
                        <th> 항목번호 </th>
                        <th> 점검항목 </th>
                        <th> 이전현황 </th>
                        <th> 이전점수 </th>
                        <th> 현재현황 </th>
                        <th> 현재점수 </th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($flag_1_diagnoses as $flag_1_diagnosis )
                    <tr>
                        <input type="hidden" name="ids[]" value="{{ $flag_1_diagnosis->id }}">
                        <!-- 항목번호 -->
                        <td> {{ $flag_1_diagnosis->depth }} </td>

                        <!-- 점검항목 -->
                        <td class="left"> {{ $flag_1_diagnosis->clause }} </td>

                        <!-- 이전현황 -->
                        <td class="left">
                            <textarea>{{$flag_1_diagnosis->old_explanation}}</textarea>
                        </td>

                        <!-- 이전점수 -->
                        <td>
                            {{ $flag_1_diagnosis->old_grade }}
                        </td>

                        <!-- 현재현황 -->
                        <td class="left">
                            <textarea name="explanations[]">{{$flag_1_diagnosis->explanation}}</textarea>
                        </td>

                        <!-- 현재점수 -->
                        <td>
                            <select name="grades[]" class="w_w">
                                <option value=""></option>
                                <option value="0" {{ $flag_1_diagnosis->grade == '0' ? 'selected' : ''}}>0</option>
                                <option value="1" {{ $flag_1_diagnosis->grade == '1' ? 'selected' : ''}}>1</option>
                                <option value="2" {{ $flag_1_diagnosis->grade == '2' ? 'selected' : ''}}>2</option>
                                <option value="3" {{ $flag_1_diagnosis->grade == '3' ? 'selected' : ''}}>3</option>
                                <option value="4" {{ $flag_1_diagnosis->grade == '4' ? 'selected' : ''}}>4</option>
                                <option value="5" {{ $flag_1_diagnosis->grade == '5' ? 'selected' : ''}}>5</option>
                                <option value="N/A" {{ $flag_1_diagnosis->grade == 'N/A' ? 'selected' : ''}}>N/A</option>
                            </select>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>


        <div class="l-footer r">
            <div class="left">
                <a href="#;" class="btn_s b">결과보고서 다운로드</a>
            </div>
            <!--==========================================
            =
            = 1. 최초작성 진단완료[위험관리 반영]
            =
            ============================================-->
            @if( $state == "NEW" || $state == "" )
                <a href="#;" class="btn w_15" id="button_step1_element">진단완료 [ 위험관리 반영 ]</a>
            <!--==========================================
            =
            = 2. 이후 작성 진단시작  [ 현재현황이 이전현황으로 이동, 새 현황 작성 ]
            =
            ============================================-->
            @else
                <a href="#;" class="btn w_30" id="button_step2_element">진단시작  [ 현재현황이 이전현황으로 이동, 새 현황 작성 ]</a>
            @endif
            <!--==========================================
            =
            = 3. 저장
            =
            ============================================-->
            <a href="#;" class="btn_s" id="button_save_element">저장</a>
        </div>

    </div>

    </div>
    </div>


    </body>
    </html>

<script>
window.onload = function()
{
    /*==========================================================================
    =
    =  1. 통제 영역 SELECT 박스 change 이벤트 발생시
    =
    ===========================================================================*/
    var company_id = "{{request()->query('company_id')}}";
    var standard_id= "{{request()->query('standard_id')}}";
    var group_id = "{{request()->query('group_id')}}";
    var type = "{{request()->query('type')}}";

    var domain_element = document.querySelector('#domain_element');

    domain_element.addEventListener('change', function(event){

        var domain = domain_element.value;
        location.href = "?company_id=" + company_id + "&standard_id=" + standard_id + "$type=" + type + "&domain=" + domain;

    })
    /*==========================================================================
    =
    =  2.
    =
    ===========================================================================*/
    var datatime_element = document.querySelector('#datatime_element');
    datatime_element.addEventListener('change', function (event) {

        var datetime = event.target.value;

        location.href = "?company_id=" + company_id + "&standard_id=" + standard_id + "$type=" + type + "&domain=" + "전체" + "&datetime=" + datetime;

    });

    /*==========================================================================
    =
    =  3. 단순 저장하기 버튼
    =
    ===========================================================================*/
    var button_save_element = document.querySelector('#button_save_element');

    button_save_element.addEventListener('click', function (event)
    {
        /*-------------------------------
        -  1. ismsp4s id들을 가져온다
        --------------------------------*/
        var ids_nodes = document.getElementsByName('ids[]');
        var ids = [];
        /*-------------------------------
        -  2. explanations를 가져온다
        --------------------------------*/
        var explanations_nodes = document.getElementsByName('explanations[]');
        var explanations = [];
        var filterd_explanations = [];

        /*-------------------------------
        -  3.
        --------------------------------*/
        var grades_nodes = document.getElementsByName('grades[]');
        var grades = [];

        /*-------------------------------
        -  4.
        --------------------------------*/
        for(var i=0; i<ids_nodes.length ;i++)
        {
            if(explanations_nodes[i].value != '')
            {
                ids.push( ids_nodes[i].value );
                explanations.push(explanations_nodes[i].value);

                grades.push(grades_nodes[i].value);
            }
        }

        console.log("__ids:", ids);
        console.log("__explanations:", explanations);
        console.log("__grades:", grades);
        /*-------------------------------
        -  5. json_object 에 담기
        --------------------------------*/
        var json_object = new Object();
        json_object.ids = ids;
        json_object.company_id = {!! request()->input('company_id') !!}
        json_object.explanations = explanations;
        json_object.grades = grades;

        console.log("json_object:", json_object);

        execute();
        /*-------------------------------
        -  5. ajax 처리
        --------------------------------*/
        function execute()
        {
            var csrf_token = document.head.querySelector('meta[name="csrf-token"]');
            window.axios.defaults.headers.common['X-CSRF-TOKEN'] = csrf_token.content;

            axios.post("/diagnosis/flag_1/insert_to_diagnoses", JSON.stringify(json_object))
                .then( response => {
                    console.log(response);
                    location.reload();
                })
                .catch( err => {
                    console.log( err );
                });
        }
    })
    /*=============================================================================================
    =
    =  4. STEP_1 진단완료 버튼 [ 최초에 시행, 모든 항목이 입력되어야 동작됨 ] 위험관리에 반영됨 (이후 수정불가)
    =
    ==============================================================================================*/
    var button_step1_element = document.querySelector('#button_step1_element');

    if(button_step1_element != null)
    {
        var count_ismsp4s = "{!! $count_ismsp4s !!}";

        console.log("__count_ismsp4s:", count_ismsp4s);

        var count_diagnoses = "{!! $count_diagnoses !!}";

        console.log("__count_diagnoses:", count_diagnoses);

        button_step1_element.addEventListener('click', function(event) {
            event.preventDefault();

            if( count_ismsp4s == count_diagnoses)
            {


                var json_data = new Object();
                json_data.company_id = "{!! request()->input('company_id') !!}";
                json_data.type = "{!! request()->input('type') !!}";
                /*--------------------------------
                - axios 진단 상태에 INSERT
                --------------------------------*/
                var csrf_token = document.head.querySelector('meta[name="csrf-token"]');
                window.axios.defaults.headers.common['X-CSRF-TOKEN'] = csrf_token.content;

                axios.post("/diagnosis/flag_1/insert_or_update_to_diagnosis_states", JSON.stringify(json_data))
                    .then( response => {
                        console.log(response);

                        if(response.data.RESULT == "SUCCESS")
                        {
                            location.reload();
                        }
                    })
                    .catch( err => {
                        console.log(err);
                    });
            }
            else
            {
                alert('항목을 다 입력하셔야 합니다');
                return false;
            }
        })
    }
    /*=============================================================================================
    =
    =  5. STEP_2 진단시작 [ 현재현황이 이전현황으로 이동, 새 현황 작성]
    =
    ==============================================================================================*/
    var button_step2_element = document.querySelector('#button_step2_element');

    if(button_step2_element != null)
    {

        button_step2_element.addEventListener('click', function (event) {

            var json_data = new Object();
            json_data.company_id = "{!! request()->input('company_id') !!}";
            json_data.type = "{!! request()->input('type') !!}";

            /*-------------------------------------
            - axios diagnosis_histories에 INSERT
            --------------------------------------*/
            var csrf_token = document.head.querySelector('meta[name="csrf-token"]');
            window.axios.defaults.headers.common['X-CSRF-TOKEN'] = csrf_token.content;

            axios.post("/diagnosis/flag_1/insert_to_diagnosis_histories", JSON.stringify(json_data))
                .then(response => {
                    console.log(response);
                    location.reload();
                })
                .catch(err => {
                    console.log(err);
                });
        });

    }








}









</script>


















@endsection