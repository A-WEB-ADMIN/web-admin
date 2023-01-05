@extends('layouts.layout')
@section('main')

    <div class="container w_100">
        <div class="top_titles">
            <ul class="location">
                <li>Home</li>
                <li>관리자</li>
            </ul>
            <h2>사용자관리</h2>

        </div>

        <div class="top_search">
            <div class="left">
                <select name="" id="chkchk1">
                    <option value="전체">전체</option>
                    <option value="전체">전체</option>
                </select>
                <input type="text" name="" id="" placeholder="Search">
                <a href="#;" class="btn_s">확인</a>
            </div>

        </div>

        <div class="tb_type1 ">
            <table>
                <colgroup>
                    <col style="width:5%">
                    <col style="width:auto">
                    <col style="width:10%">
                    <col style="width:16%">
                    <col style="width:10%">
                    <col style="width:8%">
                    <col style="width:8%">
                    <col style="width:11%">
                    <col style="width:8%">
                </colgroup>
                <thead>
                <tr>
                    <th>No</th>
                    <th>E-mail</th>
                    <th>이름</th>
                    <th>부서</th>
                    <th>직급</th>
                    <th>인증여부</th>
                    <th>가입일</th>
                    <th>접속일</th>
                    <th>상태</th>
                    <th>비밀번호만료</th>
                    <th>OTP</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><span class="complete">완료</span></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="/setting/user/detail"><span class="ing" style="color:blue;">대기</span></a></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="/setting/user/detail"><span class="ing" style="color:blue;">대기</span></a></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><span class="denial">거부</span></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="l-footer r">
            <div class="left">
                <a href="#;" class="btn_s b">결재순서 설정</a>
            </div>

            <a href="/setting/user/insert_permission_form" class="btn b">권한분류추가</a>
            <a href="/setting/user/update_permission_form" class="btn b">권한분류관리</a>
        </div>

    </div>

    </div>
    </div>


    </body>
    </html>



























@endsection