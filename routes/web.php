<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Asset\AssetGroupController;
use App\Http\Controllers\Evidence\AddtionRegistrationController;
use App\Http\Controllers\Evidence\DetailController;
use App\Http\Controllers\Evidence\OperatingDocumentController;
use App\Http\Controllers\Push\PushController;
/*=======================================================================================
=
=   0. 알림 푸쉬
=
========================================================================================*/
Route::prefix('/push')->group(function(){

    Route::get('/get_notifications', [PushController::class, 'get_notifications']);

    Route::get('/mark_all_reading/{user_id}', [PushController::class, 'mark_all_reading']);

});

/*=======================================================================================
=
=   1. 자산 asset
=
========================================================================================*/
Route::prefix('/asset')->group(function (){
    
    // 자산-> 메인
    Route::prefix('/main')->group(function () {

        //목록->  리스트
        Route::get('/list', [App\Http\Controllers\Asset\MainController::class, 'list'])->name('asset.main.list');


        //자산->  [ ajax ] get_assets()
        Route::get('/get_assets_for_ajax', [App\Http\Controllers\Asset\MainController::class, 'get_assets_for_ajax'])->name('asset.main.get_assets_for_ajax');

        //자산->  [ ajax ] insert_or_update_to_asset()
        Route::post('/insert_or_update_to_asset', [App\Http\Controllers\Asset\MainController::class, 'insert_or_update_to_asset'])->name('asset.main.insert_or_update_to_asset');
        

        //자산->  추가/수정/삭제
        Route::get('/edit', [App\Http\Controllers\Asset\MainController::class, 'edit'])->name('asset.main.edit');
    });

    //자산-> 그룹편집
    Route::prefix('/group')->group(function () {
        Route::get('/edit', [AssetGroupController::class, 'edit'])->name('asset.group.edit');
    });





    //자산-> 설정__탭 칼럼
    Route::prefix('/config')->group(function () {
        Route::get('/list', [App\Http\Controllers\Asset\ConfigController::class, 'list'])->name('asset.config.list');
         
       
        Route::get('/tab_defaults_all', [App\Http\Controllers\Asset\ConfigController::class, 'tab_defaults_all'])->name('asset.config.tab_defaults_all');

       
        Route::get('/tabs_all', [App\Http\Controllers\Asset\ConfigController::class, 'tabs_all'])->name('asset.config.tabs_all');    
        
        
        Route::post('/INSERT_or_UPDATE_TO_TABS_and_COLUMNS', [App\Http\Controllers\Asset\ConfigController::class, 'INSERT_or_UPDATE_TO_TABS_and_COLUMNS'])->name('asset.config.INSERT_or_UPDATE_TO_TABS_and_COLUMNS');



        Route::get('/get_columns_by_tab', [App\Http\Controllers\Asset\ConfigController::class, 'get_columns_by_tab'])->name('asset.config.get_columns_by_tab');

    });

});
/*=======================================================================================
=
=   2. 진단 diagnosis
=
========================================================================================*/
Route::prefix('/diagnosis')->group(function (){

    //진단-> 관리체계구축
    Route::prefix('/flag_1')->group(function (){

        //진단-> chart
        Route::get('/chart', [\App\Http\Controllers\Diagnosis\Flag_1_Controller::class, 'chart'])->name('diagnosis.flag_1.chart');


        //진단-> data
        Route::get('/get_flag_1_for_BarChart', [\App\Http\Controllers\Diagnosis\Flag_1_Controller::class, 'get_flag_1_for_BarChart'])->name('diagnosis.flag_1.get_flag_1_for_BarChart');


        //진단-> list
        Route::get('/list', [\App\Http\Controllers\Diagnosis\Flag_1_Controller::class, 'list'])->name('diagnosis.flag_1.list');


        //진단-> insert_to_diagnoses
        Route::post('/insert_to_diagnoses', [\App\Http\Controllers\Diagnosis\Flag_1_Controller::class, 'insert_to_diagnoses'])->name('diagnosis.flag_1.insert_to_diagnoses');


        //진단-> insert_to_diagnosis_states
        Route::post('/insert_or_update_to_diagnosis_states', [\App\Http\Controllers\Diagnosis\Flag_1_Controller::class, 'insert_or_update_to_diagnosis_states'])->name('diagnosis.flag_1.insert_or_update_to_diagnosis_states');


        //진단-> insert_to_diagnosis_histories
        Route::post('/insert_to_diagnosis_histories', [\App\Http\Controllers\Diagnosis\Flag_1_Controller::class, 'insert_to_diagnosis_histories'])->name('diagnosis.flag_1.insert_to_diagnosis_histories');




    });

    //진단-> 보호대책 요구사항
    Route::prefix('/flag_2')->group(function (){

        //진단-> chart
        Route::get('/chart', [\App\Http\Controllers\Diagnosis\Flag_2_Controller::class, 'chart'])->name('diagnosis.flag_2.chart');

        //진단-> list
        Route::get('/list', [\App\Http\Controllers\Diagnosis\Flag_2_Controller::class, 'list'])->name('diagnosis.flag_2.list');

    });


    //진단-> 개인정보 처리 단계별 요구사항
    Route::prefix('/flag_3')->group(function (){

        //진단-> chart
        Route::get('/chart', [\App\Http\Controllers\Diagnosis\Flag_3_Controller::class, 'chart'])->name('diagnosis.flag_3.chart');

        //진단-> list
        Route::get('/list', [\App\Http\Controllers\Diagnosis\Flag_3_Controller::class, 'list'])->name('diagnosis.flag_3.list');

    });


    //진단-> 기술적 진단
    Route::prefix('/tech')->group(function (){

        //진단-> chart
        Route::get('/chart', [\App\Http\Controllers\Diagnosis\Tech_Controller::class, 'chart'])->name('diagnosis.tech.chart');

        //진단-> list
        Route::get('/list', [\App\Http\Controllers\Diagnosis\Tech_Controller::class, 'list'])->name('diagnosis.tech.list');

    });

});













/*=======================================================================================
=
=   3. 위험
=
========================================================================================*/
Route::prefix('/risk')->group(function (){


   Route::prefix('/threatAnalysis')->group(function (){

       Route::get('/list', [\App\Http\Controllers\Risk\ThreatAnalysisController::class, 'list'])->name('risk.threatAnalysis.list');

   });


    Route::prefix('/riskJudgement')->group(function (){

        Route::get('/list', [\App\Http\Controllers\Risk\RiskJudgementController::class, 'list'])->name('risk.riskJudgement.list');

    });


});






















/*=======================================================================================
=
=   4. 증적 evidence
=
========================================================================================*/
Route::prefix('/evidence')->group(function(){


    // 1. 증적 목록
    Route::prefix('/main')->group(function(){
        
        // 리스트
        Route::get('/list', [App\Http\Controllers\Evidence\MainController::class, 'list'])->name('evidence.main.list');

        // 증적목록 등록
        Route::get('/register', [App\Http\Controllers\Evidence\MainController::class, 'register'])->name('evidence.main.register');

    });


    // 2. 증적 추가 등록
    Route::prefix('/addtionRegistration')->group(function(){

        // 증적추가 등록
        Route::get('/list', [AddtionRegistrationController::class, 'list'])->name('evidence.addtionRegistration.list');

        //@@ [ AJAX ] 증적추가 등록 INSERT
        Route::post('/insert_additionRegistration_using_ajax', [AddtionRegistrationController::class, 'insert_additionRegistration_using_ajax'])->name('evidence.addtionRegistration.insert_additionRegistration_using_ajax');

        //@@ [ AJAX ] 통제 TAB INSERT
        Route::get('/insert_to_evidence_ismsp3_using_ajax', [AddtionRegistrationController::class, 'insert_to_evidence_ismsp3_using_ajax'])->name('evidence.addtionRegistration.insert_to_evidence_ismsp3_using_ajax');


        //@@ [ AJAX ] 증적추가 등록 INSERT
        Route::post('/insert_approval_lines_user_config_using_ajax', [AddtionRegistrationController::class, 'insert_approval_lines_user_config_using_ajax'])->name('evidence.addtionRegistration.insert_approval_lines_user_config_using_ajax');

        //@@ [ AJAX ] 증적 담당자 display를 위해서
        Route::post('/get_evidence_manager_names', [AddtionRegistrationController::class, 'get_evidence_manager_names'])->name('evidence.addtionRegistration.get_evidence_manager_names');

        //@@ [ AJAX ] 통제항목 선택된거 display를 위해서
        Route::post('/get_selected_control_items', [AddtionRegistrationController::class, 'get_selected_control_items'])->name('evidence.addtionRegistration.get_selected_control_items');
    });


    // 3. 증적 상세보기
    Route::prefix('/detail')->group(function(){

        // 디테일
        Route::get('/list', [DetailController::class, 'list'])->name('evidence.detail.list');


        // 파일 -> PDF 변환
        Route::post('/file_to_pdf', [DetailController::class, 'file_to_pdf'])->name('evidence.detail.file_to_pdf');


        // 템플릿 저장
        Route::post('/save_to_template', [DetailController::class, 'save_to_template'])->name('evidence.detail.save_to_template');
        
        
        // 템플릿 -> PDF 변환
        Route::post('/template_to_pdf', [DetailController::class, 'template_to_pdf'])->name('evidence.detail.template_to_pdf');





        




        // 결재버튼 클릭하면
        Route::get('/insert_document_and_approval_using_ajax', [DetailController::class, 'insert_document_and_approval_using_ajax'])->name('evidence.detail.insert_document_and_approval_using_ajax');


    });




    // 운영 명세서
    Route::prefix('/operatingdocument')->group(function(){

        //리스트
        Route::get('/list', [OperatingDocumentController::class, 'list'])->name('evidence.operatingdocument.list');

    });


});


/*=======================================================================================
=
=   MyPage
=
========================================================================================*/
Route::prefix('/mypage')->group(function(){
    
    // 결재
    Route::prefix('/approval')->group(function(){

        Route::prefix('/main')->group(function(){

            //리스트
            Route::get('/list', [\App\Http\Controllers\Mypage\Approval\MainController::class, 'list'])->name('mypage.approval.main.list');
        });

        Route::prefix('/detail')->group(function(){

            //리스트
            Route::get('/list', [\App\Http\Controllers\Mypage\Approval\DetailController::class, 'list'])->name('mypage.approval.detail.list');
        });

    });
});
/*=======================================================================================
=
=   로그인
=
========================================================================================*/
Route::prefix('/auth')->group(function (){

    Route::prefix('/login')->group(function(){

        Route::get('/login_form', [\App\Http\Controllers\Auth\LoginController::class, 'login_form'])->name('auth.login_form');

        Route::get('/login_proc', [\App\Http\Controllers\Auth\LoginController::class, 'login_proc'])->name('auth.login_proc');

    });


    Route::prefix('/register')->group(function(){

        Route::get('/step1', [\App\Http\Controllers\Auth\RegisterController::class, 'step1']);

        Route::get('/step2', [\App\Http\Controllers\Auth\RegisterController::class, 'step2']);

        Route::get('/step3', [\App\Http\Controllers\Auth\RegisterController::class, 'step3']);

    });

    Route::prefix('/myinfo')->group(function(){

        Route::get('/config', [\App\Http\Controllers\Auth\MyinfoController::class, 'config']);

    });


});
/*=======================================================================================
=
=   10 관리자의 setting 설정들
=
========================================================================================*/
Route::prefix('/setting')->group(function (){


    Route::prefix('/user')->group(function (){

        Route::get('/list', [\App\Http\Controllers\Setting\UserController::class, 'list'])->name('setting.user.list');

        Route::get('/detail', [\App\Http\Controllers\Setting\UserController::class, 'detail'])->name('setting.user.detail');




        Route::get('/insert_permission_form', [\App\Http\Controllers\Setting\UserController::class, 'insert_permission_form'])->name('setting.user.insert_permission_form');

        Route::get('/update_permission_form', [\App\Http\Controllers\Setting\UserController::class, 'update_permission_form'])->name('setting.user.update_permission_form');

        Route::post('/insert_permission', [\App\Http\Controllers\Setting\UserController::class, 'insert_permission'])->name('setting.permission.insert_permission');

        Route::post('/update_permission', [\App\Http\Controllers\Setting\UserController::class, 'update_permission'])->name('setting.permission.update_permission');


    });



});

/*=======================================================================================
=
=   101. html을 blob 로 컨버팅 하기 위한 화면
=
========================================================================================*/
Route::prefix('/convert')->group(function (){


    Route::get('/convert_form', [\App\Http\Controllers\Convert\Html2blobController::class, 'convert_form'])->name('convert.convert_form');

    Route::post('/insert_file', [\App\Http\Controllers\Convert\Html2blobController::class, 'insert_file'])->name('convert.insert_file');

    Route::get('/html', [\App\Http\Controllers\Convert\Html2blobController::class, 'html'])->name('convert.html');
});




























