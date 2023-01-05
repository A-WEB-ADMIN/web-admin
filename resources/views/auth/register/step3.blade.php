@extends('layouts.layout_simple')
@section('main')

      <style>
        .front_wrap{ padding-top:0; }
        .front_wrap .contents .container{ width:100%; }
      </style>

      <div class="container h_100 join step3">
        <div class="login_box">
          <div class="left">
            <strong>회원가입</strong>
            <p>
              Athena 가입이 완료되었습니다. <br>
              기업 담당자가 사용 승인을 한 이후에 사용 가능합니다.
            </p>
          </div>

        </div>

        <div class="btn_box r ">
          <a href="/html/front/member/login.php" class="btn b">로그인페이지로</a>
        </div>
      </div>
    </div>
  </div>



</body>
</html>



@endsection