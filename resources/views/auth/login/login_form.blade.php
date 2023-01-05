@extends('layouts.layout_simple')
@section('main')

    <div class="container">
        <!-- 상단 -->
        <div class="l-headerloginform">
            ATHENA
        </div>

        <!-- 왼쪽 -->
        <div class="login_box">
            <div class="left">
                <strong>ATHENA</strong>
                <p>Athena를 사용하시려면 로그인이 필요합니다.</p>
                <ul>
                    <li>
                        <span>ATHENA 회원가입 코드를 가지고 계신가요?</span>
                        <a href="#;">회원가입</a>
                    </li>
                    <li>
                        <span>ID/비밀번호를 잊으셨나요?</span>
                        <a href="#;">ID/비밀번호 찾기</a>
                    </li>
                </ul>
            </div>

            <!-- 오른쪽 로그인 -->
            <div class="right">
                <div class="tb_type1 s border_n">
                    <FORM method="GET">
                        <table>
                            <colgroup>
                                <col style="width:30%">
                                <col style="width:auto">
                            </colgroup>
                            <tbody>
                            <tr>
                                <th><label for="email_chk">이메일 주소</label></th>
                                <td>
                                    <input type="text" name="email" id="email_chk" class="w_100">
                                </td>
                            </tr>
                            <tr>
                                <th><label for="pw_chk">비밀번호</label></th>
                                <td class="pw_box">
                                    <input type="password" name="password" id="pw_chk" class="w_100">
                                    <label for="id_chk">
                                        <input type="checkbox" name="" id="id_chk">
                                        ID 저장
                                    </label>
                                    <a href="/auth/login/login_proc" class="btn">LOGIN</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </FORM>
                </div>
            </div>




        </div>
    </div>





















@endsection


