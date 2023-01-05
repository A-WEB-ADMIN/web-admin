@extends('layouts.layout')
@section('main')

  <form method="POST" action="/setting/user/insert_permission">
  <article class="container">
    <div class="top_titles">
      <ul class="location">
        <li>Home</li>
        <li>관리자</li>
        <li>사용자관리</li>
      </ul>
      <h2>권한분류 추가</h2>

      <div class="add_area">

        <label for="search_chk">권한명</label>
        <input type="text" name="role-name">

      </div>
    </div>

    <div class="page_tab">
      <div class="tab_area">
        <ul>
          <li class="on"><a href="#;">ISMS</a></li>
          <li><a href="#;">IS027001</a></li>
        </ul>
      </div>

      <div class="tab_box tb_type1 c_left s">


          @csrf
          <table>
            <tbody>
            <!--================================================================
            =
            =  0. 정책
            =
            =================================================================-->
              <tr>
                <td class="first">정책관리</td>
                <td colspan="6" class="left">정보보호 정책</td>
              </tr>
              <!--================================================================
              =
              =  1. 자산
              =
              =================================================================-->
              <tr class="bg">
                <td class="first">자산관리</td>
                <td>자산목록</td>

                <td class="gray">
                  <label>수정</label>
                  <input type="checkbox" name="permissions[]" value="3">
                </td>


                <td class="gray">
                  <label>다운로드</label>
                  <input type="checkbox" name="permissions[]" value="4">
                </td>


                <td class="gray">네트워크 구성도</td>
                <td class="gray" colspan="2">수정</td>
              </tr>
              <!--================================================================
              =
              =  2. 진단
              =
              =================================================================-->
              <tr>
                <td class="first" rowspan="2">진단관리</td>
                <td>관리체계 수립</td>

                <td>
                  <label>수정</label>
                  <input type="checkbox" name="permissions[]" value="7">
                </td>

                <td class="gray">
                  <label>다운로드</label>
                  <input type="checkbox" name="permissions[]" value="9">
                </td>

                <td>보호대책 요구사항</td>
                <td>수정</td>
                <td>다운로드</td>
              </tr>
              <tr class="bg">
                <td>개인정보 처리단계</td>
                <td>수정</td>
                <td class="gray">다운로드</td>
                <td>기술적진단</td>
                <td>수정</td>
                <td class="gray">다운로드</td>
              </tr>
            <!--================================================================
            =
            =  3. 위험
            =
            =================================================================-->
              <tr>
                <td class="first bg" rowspan="2">위험관리</td>
                <td class="gray" colspan="2">위험분석</td>
                <td class="gray">다운로드</td>
                <td colspan="2">위험평가</td>
                <td class="gray">다운로드</td>
              </tr>
              <tr class="bg">
                <td class="gray">위험관리수준</td>
                <td class="gray" colspan="2">수정</td>
                <td>정보보호계획</td>
                <td>수정</td>
                <td class="gray">다운로드</td>
              </tr>
            <!--================================================================
            =
            =  4. 증적
            =
            =================================================================-->
              <tr>
                <td class="first">증적관리</td>
                <td colspan="3">증적목록</td>
                <td colspan="3">운영명세서</td>
              </tr>
            <!--================================================================
            =
            =  5. 보안검사
            =
            =================================================================-->
              <tr class="bg">
                <td class="first">보안검사</td>
                <td colspan="6"></td>
              </tr>
            <!--================================================================
            =
            =  6. 관리자
            =
            =================================================================-->
              <tr>
                <td class="first" rowspan="3">관리자</td>
                <td>사용자 관리</td>
                <td colspan="2">수정</td>
                <td>담당자 관리</td>
                <td class="gray" colspan="2">수정</td>
              </tr>
              <tr class="bg">
                <td>로그관리</td>
                <td class="gray" colspan="2">다운로드</td>
                <td>메뉴관리</td>
                <td class="gray" colspan="2">수정</td>
              </tr>
              <tr>
                <td>부가기능</td>
                <td class="gray" colspan="5">수정</td>
              </tr>
            </tbody>

          </table>

      </div>



    </div>


    <div class="l-footer c">

      <a href="#;" class="btn">
        <button type="submit" class="c-button__blue">권한 추가하기</button>
      </a>

    </div>

  </form>
  </article>



</div>
</div>
  <!--===========================================================
  =
  =  자바스크립트
  =
  =============================================================-->
  <script>


  </script>












</body>
</html>
@endsection
