@extends('layouts.layout')
@section('main')


    <div class="container">
        <div class="top_titles">
            <ul class="location">
                <li>Home</li>
                <li>관리자</li>
                <li>사용자관리</li>
            </ul>
            <h2>권한분류 관리</h2>
        </div>

        <div class="top_search select_style">
            <div class="left">
                <label for="chks1">권한명</label>
                <select name="" id="chks1" class="w_15">
                    <option value="First-item">First-item</option>
                    <option value="Second Item">Second Item</option>
                    <option value="Third Item">Third Item</option>
                    <option value="Fourth Item">Fourth Item</option>
                    <option value="Fifth Item">Fifth Item</option>
                </select>
            </div>
        </div>

        <div class="tb_type1 c_left s">
            <table>
                <tbody>
                <tr>
                    <td class="first">정책관리</td>
                    <td colspan="6" class="left">정보보호 정책</td>
                </tr>
                <tr class="bg">
                    <td class="first">자산관리</td>
                    <td>자산목록</td>
                    <td>수정</td>
                    <td>다운로드</td>
                    <td>네트워크 구성도</td>
                    <td colspan="2">수정</td>
                </tr>
                <tr>
                    <td class="first" rowspan="2">진단관리</td>
                    <td>관리체계 수립</td>
                    <td>수정</td>
                    <td>다운로드</td>
                    <td>보호대책 요구사항</td>
                    <td>수정</td>
                    <td>다운로드</td>
                </tr>
                <tr class="bg">
                    <td>개인정보 처리단계</td>
                    <td>수정</td>
                    <td>다운로드</td>
                    <td>기술적진단</td>
                    <td>수정</td>
                    <td>다운로드</td>
                </tr>
                <tr>
                    <td class="first bg" rowspan="2">위험관리</td>
                    <td colspan="2">위험분석</td>
                    <td>다운로드</td>
                    <td colspan="2">위험평가</td>
                    <td>다운로드</td>
                </tr>
                <tr class="bg">
                    <td>위험관리수준</td>
                    <td colspan="2">수정</td>
                    <td>정보보호계획</td>
                    <td>수정</td>
                    <td>다운로드</td>
                </tr>
                <tr>
                    <td class="first">증적관리</td>
                    <td colspan="3">증적목록</td>
                    <td colspan="3">운영명세서</td>
                </tr>
                <tr class="bg">
                    <td class="first">보안검사</td>
                    <td colspan="6"></td>
                </tr>
                <tr>
                    <td class="first" rowspan="3">관리자</td>
                    <td>사용자 관리</td>
                    <td colspan="2">수정</td>
                    <td>담당자 관리</td>
                    <td colspan="2">수정</td>
                </tr>
                <tr class="bg">
                    <td>로그관리</td>
                    <td colspan="2">다운로드</td>
                    <td>메뉴관리</td>
                    <td colspan="2">수정</td>
                </tr>
                <tr>
                    <td>부가기능</td>
                    <td colspan="5">수정</td>
                </tr>
                </tbody>

            </table>
        </div>

        <div class="btn_box r">
            <a href="#;" class="btn b">권한 삭제</a>
            <a href="#;" class="btn b">수정완료</a>
        </div>
    </div>

    </div>
    </div>


    </body>
    </html>





























@endsection