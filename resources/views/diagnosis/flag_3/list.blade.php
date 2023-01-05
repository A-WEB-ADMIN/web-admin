@extends('layouts.layout')
@section('main')


    <div class="container w_100">
        <div class="top_titles">
            <ul class="location">
                <li>Home</li>
                <li>진단관리</li>
            </ul>
            <h2>개인정보 처리단계별 요구사항</h2>

            <div class="add_area">
                <label for="chkchk3">
                    <input type="checkbox" name="" id="chkchk3">
                    비교하기
                </label>
                <label for="chkchk2" class="bold">이전현황 불러오기</label>
                <select name="" id="chkchk2" class="w_30">
                    <option value="2016/06/13 14:00">2016/06/13 14:00</option>
                    <option value="2016/06/13 14:00">2016/06/13 14:00</option>
                </select>
            </div>
        </div>

        <div class="top_search">
            <div class="left">
                <label for="chkchk1">통제영역</label>
                <select name="" id="chkchk1">
                    <option value="전체">전체</option>
                    <option value="전체">전체</option>
                </select>
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
                    <th>항목번호 @include('layouts.filter') </th>
                    <th>점검항목 @include('layouts.filter') </th>
                    <th>이전현황 @include('layouts.filter') </th>
                    <th>이전점수 @include('layouts.filter') </th>
                    <th>현재현황 @include('layouts.filter') </th>
                    <th>현재점수 @include('layouts.filter') </th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>1.1.1.1</td>
                    <td class="left">정보보호 및 개인정보보호 관리체계의 수립 및 운영활동 전반에 경영진의 참여가 이루어질 수 있도록 보고 및 의사결정 등의 책임과 역할을 문서화하고 있는가?</td>
                    <td class="left">o 정보보호정책 및 정책시행 문서를 제정중에 있으며, 정보보호위원회의 검토 과정을 거쳐 제정할 예정임</td>
                    <td>4</td>
                    <td class="left">
                        <textarea name="" id="" class="w_100">o 정보보호정책 및 정책시행 문서를 제정중에 있으며, 정보보호위원회의 검토 과정을 거쳐 제정할 예정임 </textarea>
                    </td>
                    <td>
                        <select name="" id="" class="w_w">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="N/A">N/A</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>1.1.1.2</td>
                    <td class="left">경영진이 정보보호 및 개인정보보호 활동에 관한 의사결정에 적극적으로 참여할 수 있는 보고, 검토 및 승인 절차를 수립,이행하고 있는가?</td>
                    <td class="left">o 정보보호정책을 제정 중에 있으며, 대표이사의 승인을 받을 예쩡임</td>
                    <td>3</td>
                    <td class="left">
                        <textarea name="" id="" class="w_100">o 정보보호정책 및 정책시행 문서를 제정중에 있으며, 정보보호위원회의 검토 과정을 거쳐 제정할 예정임 </textarea>
                    </td>
                    <td>
                        <select name="" id="" class="w_w">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="N/A">N/A</option>
                        </select>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td>1.1.2.1</td>
                    <td class="left">최고경영자는 정보보호 및 개인정보보호처리에 관한 업무를 총괄하여 책임질 최고책임자를 공식적으로 지정하고 있는가?</td>
                    <td class="left">o 최고책임자를 지정하고 있음</td>
                    <td>0</td>
                    <td class="left">
                        <textarea name="" id="" class="w_100">o 정보보호정책 및 정책시행 문서를 제정중에 있으며, 정보보호위원회의 검토 과정을 거쳐 제정할 예정임 </textarea>
                    </td>
                    <td>
                        <select name="" id="" class="w_w">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="N/A">N/A</option>
                        </select>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td>1.1.2.2</td>
                    <td class="left">정보보호 최고책임자 및 개인정보 보호책임자는 예산, 인력 등 지원을 할당할 수 있는 임원급으로 지정하고 있으며 관련 법령에 따른 자격요건을 충족하고 있는가?</td>
                    <td class="left">o 해당 법령을 고려하여 정보보호 최고책임자 및 개인정보 보호책임자를 지정하고 있음</td>
                    <td>3</td>
                    <td class="left">
                        <textarea name="" id="" class="w_100">o 정보보호정책 및 정책시행 문서를 제정중에 있으며, 정보보호위원회의 검토 과정을 거쳐 제정할 예정임 </textarea>
                    </td>
                    <td>
                        <select name="" id="" class="w_w">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="N/A">N/A</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>1.1.3.1</td>
                    <td class="left">정보보호 최고책임자 및 개인정보 보호책임자의 업무를 지원하고 조직의 정보보호 및 개인정보보호 활동을 체계적으로 이행하기 위해 전문성을 갖춘 실무조직을 구성하여 운영하고 있는가?</td>
                    <td class="left">o 일부 담당자가 참여하지 않는 실무 협의체를 구성하고 있음</td>
                    <td>3</td>
                    <td class="left">
                        <textarea name="" id="" class="w_100">o 정보보호정책 및 정책시행 문서를 제정중에 있으며, 정보보호위원회의 검토 과정을 거쳐 제정할 예정임 </textarea>
                    </td>
                    <td>
                        <select name="" id="" class="w_w">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="N/A">N/A</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>1.1.3.2</td>
                    <td class="left">정보보호 최고책임자 및 개인정보 보호책임자의 업무를 지원하고 조직의 정보보호 및 개인정보보호 활동을 체계적으로 이행하기 위해 전문성을 갖춘 실무조직을 구성하여 운영하고 있는가?</td>
                    <td class="left">o 일부 담당자가 참여하지 않는 실무 협의체를 구성하고 있음</td>
                    <td>3</td>
                    <td class="left">
                        <textarea name="" id="" class="w_100">o 정보보호정책 및 정책시행 문서를 제정중에 있으며, 정보보호위원회의 검토 과정을 거쳐 제정할 예정임 </textarea>
                    </td>
                    <td>
                        <select name="" id="" class="w_w">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="N/A">N/A</option>
                        </select>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>


        <div class="btn_box r">
            <div class="left">
                <a href="#;" class="btn_s b">결과보고서 다운로드</a>
            </div>

            <a href="#;" class="btn">진단시작</a>
            <a href="#;" class="btn">저장</a>
        </div>

    </div>

    </div>
    </div>


    </body>
    </html>



@endsection