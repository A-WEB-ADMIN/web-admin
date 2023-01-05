@extends('layouts.layout')
@section('main')

    <div class="container">
        <div class="top_titles">
            <ul class="location">
                <li>사용자</li>
                <li>전자결재</li>
            </ul>

            <h2>전자결재 상세</h2>
            <!--=======================================================
            =
            =  1.  도장 찍힌 부분
            =
            =========================================================-->
            <div class="approval_box">
                <table>
                    <colgroup>
                        <col style="width:10%;">
                        <col style="width:30%;" span="3">
                    </colgroup>
                    <tbody>
                    <tr>
                        <th rowspan="2">결재</th>
                        <th>팀장</th>
                        <th>이사</th>
                        <th>대표이사</th>
                    </tr>
                    <tr>
                        <td><span class="approval">결재</span></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--=======================================================
        =
        =  2. detail
        =
        =========================================================-->
        <div class="tb_type1">
            <table>
                <colgroup>
                    <col style="width:auto">
                    <col style="width:10%">
                    <col style="width:25%">
                    <col style="width:30%">
                </colgroup>
                <thead>
                    <tr>
                        <th>증적명</th>
                        <th>기안자</th>
                        <th>기안시간</th>
                        <th>참조</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> {{ $approval->evidence->subject }} </td>
                        <td> {{ $approval->document->user_name }} </td>
                        <td> {{ $approval->document->created_at }} </td>
                        <td> </td>
                    </tr>
                </tbody>
            </table>
        </div>




        <div class="rolling_area">
            <div class="swiper-wrapper">
                <div class='swiper-slide'><img src="../img/img_view.jpg" alt=""></div>
                <div class='swiper-slide'><img src="../img/img_view.jpg" alt=""></div>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        <script>
            var swiper = new Swiper('.rolling_area', {
                slidesPerView: 1, // 보여지게 하려는 이미지 수 / auto는 왼쪽기준
                spaceBetween: 0, // 사이 간격
                loop: true, // 무한 롤링
                autoplay: {
                    delay: 500000000,
                    disableOnInteraction: false, // 클릭후 재실행
                },
                pagination: {
                    el: '.rolling_area .swiper-pagination',
                    clickable: true, // 썸네일 클릭 활성화
                },
                navigation: {
                    nextEl: '.rolling_area .swiper-button-next',
                    prevEl: '.rolling_area .swiper-button-prev',
                }
            });
        </script>

        <div class="l-footer r">
            <a href="#;" class="btn left b">증적 다운로드</a>
            <a href="#;" class="pop_companion btn_layer_open btn point">반려</a>
            <a href="#;" class="pop_approval btn_layer_open btn">결재하기</a>
        </div>

    </div>
    </div>
    </div>

    <!-- 반려 팝업 -->
    @include('mypage.approval.popup_reject')

    <!-- 결재승인 팝업 -->
    @include('mypage.approval.popup_approval')

    </body>
    </html>














@endsection