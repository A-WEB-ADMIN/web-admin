@extends('layouts.layout')
@section('main')

    <div class="container">
        <div class="top_titles">
            <ul class="location">
                <li>Home</li>
                <li>증적관리</li>
                <li>증적목록</li>
            </ul>
            <h2>증적 상세보기</h2>

            <div class="add_area">
                <a href="#;" class="btn_s">삭제</a>
            </div>

        </div>

        <div class="tb_type1">
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
                    <th class="none">증적 코드</th>
                    <th class="none">증적 명</th>
                    <th class="none">실사여부</th>
                    <th class="none">주기</th>
                    <th class="none">결재</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>  </td>
                    <td> {{ $evidence_datail->CODE }} </td>
                    <td> {{ $evidence_datail->subject }} </td>
                    <td> {{ $evidence_datail->field_inspection }} </td>
                    <td> {{ $evidence_datail->cycle }} </td>
                    <td>
                        @if( $evidence_datail->document != null)
                            {{ $evidence_datail->document->status }}
                        @endif
                    </td>
                </tr>
                </tbody>

            </table>
        </div>

        <div class="tb_content length3">

            <table class="tb_txt">
                <colgroup>
                    <col style="width:29%">
                    <col style="width:auto">
                </colgroup>
                <tbody>
                <tr>
                    <th>설명</th>
                    <td>
                        <p> {{ $evidence_datail->content }} </p>
                    </td>
                </tr>
                </tbody>
            </table>

            <!--=========================================
            =
            =  영역, 통제항목 박스
            =
            ===========================================-->
            <div class="tb_type1">

                <table>
                    <colgroup>
                        <col style="width:45%;">
                        <col style="width:55%;">
                    </colgroup>
                    <thead>
                    <tr>
                        <th class="none">영역</th>
                        <th class="none">통제항목</th>
                    </tr>
                    </thead>

                    <tbody>

                    @foreach($evidence_datail->ismsp3s as $ismsp3)
                    <tr>
                        <td> {{ $ismsp3->sub_domain }} </td>
                        <td> {{ $ismsp3->depth }} </td>
                    </tr>
                    @endforeach

                    </tbody>

                </table>

            </div>

            <table class="tb_txt">
                <colgroup>
                    <col style="width:29%">
                    <col style="width:auto">
                </colgroup>
                <tbody>


                <tr>
                    <th>담당자</th>
                    <td>
                        @foreach($evidence_datail->evidenceManagers as $evidenceManager)
                        <p>{{ $evidenceManager->manager_name }}</p>
                        @endforeach
                    </td>
                </tr>


                </tbody>
            </table>
        </div>
        <!--================================================================================
        =
        = 1. template_id 있으면
        =
        ==================================================================================-->
        @if( request()->input('templatedefault_id') || $is_saved_template )

            <section class="c-templateWRAPPER">
                <div class="c-templateTopBar">
                    <h1> 증적양식 [양식을 클릭해서 수정 하세요] </h1>
                </div>

                <!-----------------------------------
                - template 불러오는 부분
                ------------------------------------>
                @if( request()->input('templatedefault_id') )
                    <div id="template_zone">
                    @php
                        echo $template_default->file_blob;
                    @endphp
                    </div>

                @elseif( $is_saved_template )
                    <div id="template_zone">
                    @php
                            echo $template->file_blob;
                    @endphp
                    </div>
                @endif


            </section>
        <!--================================================================================
        =
        = 2. template_id 없으면
        =
        ==================================================================================-->
        @else
            <!----------------------------------------------------
            -
            -  step_1: [ DB에 파일없음 ] 증적이 등록되지 않았습니다.
            -
            ------------------------------------------------------>
                @if( !$is_uploaded_file )
                    <div class="c-notUploadedFileBox" id="notUploadedFileBox">
                        <strong>
                            증적이 등록되지 않았습니다. <br>
                            하단 버튼에서 증적을 업로드 하거나 양식을 선택 하실 수 있습니다.
                        </strong>
                    </div>
                @endif
            <!----------------------------------------------------
            -
            -  step_2: [ DB에 파일없음 ] 파일명 확장자
            -
            ------------------------------------------------------>
                @if( !$is_uploaded_file )
                    <div class="c-filenameBox" id="filenameBox">
                        <span>파일명.확장자 X</span>
                    </div>
                @endif
            <!------------------------------------------------------
            -
            -  step_3: [ DB에 파일있음 ] 미리보기 노출
            -
            ------------------------------------------------------>
                @if( $is_uploaded_file )
                    <div>
                        <iframe src="{{ url($pdf_path) }}" style="width:100%; height:1200px;" frameborder="0"></iframe>
                    </div>
                @endif

        @endif






        <DIV class="l-footer r">
            <div class="left">

                <!--===================================================
                =
                =  [ Vue ]  증적 양식 선택하기 버튼
                =
                =====================================================-->
                <button-form class="btn_s" :templatedefaults="{{$templatedefaults}}" :company_id="{{request()->query('company_id')}}" :standard_id="{{request()->query('standard_id')}}" :evidence_id="{{request()->query('evidence_id')}}">증적 양식 선택하기</button-form>


                <!-- 증적 파일 업로드 START -->
                <form method="POST" id="myform">
                    @csrf
                    <input type="text" name="company_id" value="{{request()->input('company_id')}}" hidden/>
                    <input type="text" name="evidence_id" value="{{request()->input('evidence_id')}}" hidden/>
                    <input type="file" name="my_file" id="file_input"  hidden/>
                    <label for="file_input" class="i-UploadButton" id="UploadButton">증적 파일 업로드</label>
                </form>
                <!-- 증적 파일 업로드 END -->


            </div>

            <div class="center">
                <a href="#;" class="btn" id="approval_btn">결재</a>
            </div>

            @if( request()->input('templatedefault_id') || $is_saved_template )
                        <button class="btn_s" id="button_save_to_template">템플릿 저장</button>
                        <button class="btn_s" id="button_template_to_pdf">템플릿 -> PDF 변환</button>
            @else

                <button class="btn_s" id="button_file_to_pdf">파일 -> PDF 변환</button>

            @endif

        </DIV>

        <!-- // 증적 목록이 없을시 -->

    </div>

    </div>
    </div>

    </body>
    </html>

    <!-- 양식선택 팝업 -->
    @include('evidence.detail.popup_form')
<!-------------------------------------------------------------------------------------------
-
-  자바스크립트
-
-------------------------------------------------------------------------------------------->
<script>
    window.onload = function()
    {
        var templatedefault_id = "{{request()->query('templatedefault_id')}}";
        var template_id = "{{request()->query('template_id')}}";

        console.log("__111__template_id:", template_id);
        /*==================================================================
        =
        =  A. template_id 있으면 [ 쿼리스트링 ]
        =
        ===================================================================*/
        if( templatedefault_id || template_id )
        {

            var href = "{!! route( 'evidence.main.list', request()->query() ) !!}";
            var button_save_to_template = document.querySelector('#button_save_to_template');
            var button_template_to_pdf = document.querySelector('#button_template_to_pdf');
            /*----------------------------------------------------
            -  1. 템플릿 저장
            -----------------------------------------------------*/
            button_save_to_template.addEventListener('click', function (event) {
                event.preventDefault();

                alert('test');

                var template_zone = document.querySelector('#template_zone');

                var company_id = "{{request()->query('company_id')}}";
                var evidence_id = "{{request()->query('evidence_id')}}";


                var templatedefault_id = "{{request()->query('templatedefault_id')}}";
                var templatedefault_name = "{{request()->query('templatedefault_name')}}";


                console.log("__222__template_id:", template_id);


                var formData = new FormData();
                formData.append('company_id', company_id);
                formData.append('evidence_id', evidence_id);
                formData.append('templatedefault_id', templatedefault_id);
                formData.append('templatedefault_name', templatedefault_name);

                formData.append('template_id', template_id);

                formData.append('template_zone', template_zone.innerHTML);



                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });


                $.ajax({
                    url: "{{route('evidence.detail.save_to_template')}}",
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType : "json",
                    success: function(response)
                    {
                        if(response.status == 200)
                        {
                            alert_href('템플릿이 저장 되었습니다', href);
                        }
                        else
                        {
                            alert("파일 업로드 ERROR");
                        }
                    },
                    error: function(err)
                    {
                        console.error(err);
                    }
                });
            });

            /*----------------------------------------------------
            -  2. 템플릿 -> PDF 저장
            -----------------------------------------------------*/

            button_template_to_pdf.addEventListener('click', function(event)
            {
                event.preventDefault();

                var template_zone = document.querySelector('#template_zone');
                var company_id = "{{request()->query('company_id')}}";
                var evidence_id = "{{request()->query('evidence_id')}}";
                var template_name = "{{request()->query('template_name')}}";

                html2canvas(template_zone, {
                    scale: 3,
                    //allowTaint: true,
                    onrendered: function(canvas)
                    {
                        console.log("2");
                        var ctx = canvas.getContext('2d');
                        ctx.webkitImageSmoothingEnabled = false;
                        ctx.mozImageSmoothingEnabled = false;
                        ctx.imageSmoothingEnabled = false;

                        var img = canvas.toDataURL("image/png", 1.0);
                        var doc = new jsPDF("p", "px", "a4");
                        var pageWidth = doc.internal.pageSize.getWidth();
                        var pageHeight = doc.internal.pageSize.getHeight();

                        var widthRatio = pageWidth / canvas.width;
                        var heightRatio = pageHeight / canvas.height;
                        var ratio = widthRatio > heightRatio ? heightRatio : widthRatio;

                        var canvasWidth = canvas.width * ratio;
                        var canvasHeight = canvas.height * ratio;

                        var marginX = (pageWidth - canvasWidth) / 2;
                        var marginY = (pageHeight - canvasHeight) / 2;


                        doc.addImage(img, 'PNG', marginX, 0, canvasWidth, canvasHeight);
                        var blob = doc.output('blob');

                        //console.log(blob);

                        var formData = new FormData();
                        formData.append('pdf', blob);
                        formData.append('company_id', company_id);
                        formData.append('evidence_id', evidence_id);
                        formData.append('template_name', template_name);
                        formData.append('template_zone', template_zone.innerHTML);

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });


                        $.ajax({
                            url: "{{route('evidence.detail.template_to_pdf')}}",
                            method: 'POST',
                            data: formData,
                            processData: false,
                            contentType: false,
                            dataType : "json",
                            success: function(response)
                            {
                                if(response.status == 200)
                                {
                                    alert_href('템플릿이 PDF로 변환 되었습니다.', href);
                                }
                                else
                                {
                                    alert("파일 업로드 ERROR");
                                }
                            },
                            error: function(err)
                            {
                                console.error(err);
                            }
                        });

                    }
                });


            });
        }
        else
        {
            /*==================================================================
            =
            =  B. template_id 없으면 [ 쿼리스트링 ]
            =
            ===================================================================*/
            console.log("___222___");
            var href = "{!! route( 'evidence.main.list', request()->query() ) !!}";

            var is_uploaded_file = "{{$is_uploaded_file}}";
            var file_input = document.querySelector('#file_input');

            var notUploadedFileBox = document.querySelector('#notUploadedFileBox');
            var filePreview = document.querySelector('#filePreview');
            var filenameBox = document.querySelector('#filenameBox');
            var button_file_to_pdf = document.querySelector('#button_file_to_pdf');

            var myform = document.querySelector('#myform');
            /*----------------------------------------------------
            -  1. [DB 없음] 리스트 -> 증적 상세보기 처음에 하면
            -----------------------------------------------------*/
            var is_file_on_html = file_input.files[0];

            // 파일 업로드도 잠시 안 했으면
            if( !is_file_on_html && !is_uploaded_file )
            {
                notUploadedFileBox.style.display = 'block';
                filenameBox.style.display = 'none';
            }
            else if( is_file_on_html && !is_uploaded_file )
            {
                notUploadedFileBox.style.display = 'none';
                filenameBox.style.display = 'block';
            }
            /*----------------------------------------------------
            -  2. [DB 없음] 증적 파일 업로드로 잠깐 파일 업로드를 하면
            -------------------------------------------------------*/
            file_input.addEventListener('change', function(event)
            {
                notUploadedFileBox.style.display = 'none';
                filenameBox.style.display = 'block';

                var files = event.target.files;
                var file_name = files[0].name;
                filenameBox.firstElementChild.innerHTML = file_name;
            })
            /*----------------------------------------------------
            -  3. [DB INSERT] 저장하기 버튼 클릭하면
            ------------------------------------------------------*/
            button_file_to_pdf.addEventListener('click', function(event)
            {
                event.preventDefault();

                $.ajax({
                    url: "{{route('evidence.detail.file_to_pdf')}}",
                    method: "POST",
                    data: new FormData(myform),
                    dataType: "json",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response)
                    {
                        if(response.status == 200)
                        {
                            alert_href('증적파일이 PDF로 변환 되었습니다', href);
                        }
                        else
                        {
                            alert("파일 업로드 ERROR");
                        }
                    },
                    error: function(err)
                    {
                        console.error(err);
                    }
                });

            })

        }//ELSE__END
        /*==================================================================
        =
        =  C. 결재 버튼 클릭하면
        =
        ===================================================================*/
        var href = "{!! route( 'evidence.main.list', request()->query() ) !!}";
        var evidence_id = "{{request()->query('evidence_id')}}";
        var company_id = "{{request()->query('company_id')}}";
        var subject = "{!! $evidence_datail->subject !!}";


        var approval_btn = document.querySelector('#approval_btn');
        approval_btn.addEventListener('click', function(event)
        {
            event.preventDefault();

            axios.get("{{ route('evidence.detail.insert_document_and_approval_using_ajax') }}", {
                params: {
                    evidence_id: evidence_id,
                    company_id: company_id,
                    subject:subject
                }
            }).then(function(response)
            {

                console.log("__detail_blade:", response);

                if(response.data.result=="SUCCESS")
                {
                    console.log(response);
                    alert_href("결재요청 성공", href);
                }
                else
                {
                    alert("결재요청 실패!!!");
                }
            }).catch(function(err)
            {
                console.error(err);
            });

        })



    } //window.onload__END
</script>


@endsection











































