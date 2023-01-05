
<!-- 통제항목 팝업 -->

<div class="pop" id="pop_controll_items">
    <div class="dim"></div>
    <div class="in">
        <h3>통제항목</h3>


        <div class="contents">



            <div class="tab_area tab_event">
                <ul>
                    <li class="on"><a href="#;">관리체계</a></li>
                    <li><a href="#;">보호대책</a></li>
                    <li><a href="#;">개인정보</a></li>
                </ul>
            </div>
            <!--=============================================================
            =
            =  1. 관리체계
            =
            ==============================================================-->
            <div class="tab_box tb_type1 tab_event" style="display:block;">
                <table>
                    <colgroup>
                        <col style="width:20%">
                        <col style="width:auto">
                    </colgroup>
                    <thead>
                    <tr>
                        <th class="c">No</th>
                        <th class="c">통제항목</th>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach($control_1_tabs as $control_1_tab)
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="control[]" value="{{$control_1_tab->depth}}"> {{$control_1_tab->depth}}
                            </td>
                            <td> {{ $control_1_tab->title }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!--=============================================================
            =
            =  2. 보호대책
            =
            ==============================================================-->
            <div class="tab_box tb_type1 c tab_event">
                <table>
                    <colgroup>
                        <col style="width:20%">
                        <col style="width:auto">
                    </colgroup>
                    <thead>
                    <tr>
                        <th class="c">No</th>
                        <th class="c">통제항목</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($control_2_tabs as $control_2_tab)
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="control[]" value="{{$control_2_tab->depth}}"> {{ $control_2_tab->depth }}
                            </td>
                            <td> {{ $control_2_tab->title }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!--=============================================================
            =
            =  3. 개인정보
            =
            ==============================================================-->
            <div class="tab_box tb_type1 c tab_event">
                <table>
                    <colgroup>
                        <col style="width:20%">
                        <col style="width:auto">
                    </colgroup>
                    <thead>
                    <tr>
                        <th class="c">No</th>
                        <th class="c">통제항목</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($control_3_tabs as $control_3_tab)
                        <tr>
                            <td class="c">
                                <input type="checkbox" name="control[]" value="{{$control_3_tab->depth}}"> {{ $control_3_tab->depth }}
                            </td>
                            <td> {{ $control_3_tab->title }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>

            <div class="btn_box">
                <a href="#;" class="btn s" id="control_btn">추가</a>
                <a href="#;" class="btn_s s">취소</a>
            </div>
        </div>


        <!--=============================================================
        =
        =  4. 팝업창 닫기
        =
        ==============================================================-->
        <a href="#;" class="close ok"><i class="far fa-plus"></i></a>


    </div>
</div>

















































