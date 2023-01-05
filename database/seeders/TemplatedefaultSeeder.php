<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemplatedefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('templatedefaults')->insert([
            "name" => "01_(정기 임시)정보보호위원회 회의록",
            "mime" => "text/html",

            "file_blob" =>
                '
                    <div class="c-template" id="template">
        
                        <table contenteditable="true" id="template_table">
                    
                            <caption class="top">(정기/임시) 정보보호위원회 회의록</caption>
                    
                            <thead>
                            <tr>
                                <td>회의일시</td> <td colspan="3">
                                <span></span> <label contenteditable="false">년</label>
                                <span></span> <label contenteditable="false">월</label>
                                <span></span> <label contenteditable="false">일</label>
                            </td>
                            </tr>
                    
                            <tr>
                                <td>회의장소</td> <td colspan="3"></td>
                            </tr>
                    
                            <tr>
                                <td>보고사항</td> <td colspan="3"></td>
                            </tr>
                    
                            <tr>
                                <td>협의사항</td> <td colspan="3"></td>
                            </tr>
                    
                            <tr>
                                <td>의결사항</td> <td colspan="3"></td>
                            </tr>
                    
                            <tr>
                                <td>참고사항</td> <td colspan="3"></td>
                            </tr>
                    
                            <tr>
                                <td>이행사항</td> <td colspan="3"></td>
                            </tr>
                            </thead>
                    
                            <tbody>
                            <tr>
                                <th colspan="4">참석 인원</th>
                            </tr>
                            </tbody>
                    
                            <tfoot>
                            <tr>
                                <th>참석인원</th> <th>직위</th> <th>성명</th> <th>서명</th>
                            </tr>
                    
                            <tr>
                                <td>참석</td> <td></td> <td></td> <td></td>
                            </tr>
                    
                            <tr>
                                <td>참석</td> <td></td> <td></td> <td></td>
                            </tr>
                    
                            <tr>
                                <td>참석</td> <td></td> <td></td> <td></td>
                            </tr>
                    
                            <tr>
                                <td>참석</td> <td></td> <td></td> <td></td>
                            </tr>
                    
                            <tr>
                                <td>참석</td> <td></td> <td></td> <td></td>
                            </tr>
                    
                            </tfoot>
                    
                            <caption class="bottom"> 본 회의록은 보고사항, 회의안건 및 협의사항, 의결사항 이행방법 및 시기 등을 문서로 작성 1년간 보존한다 </caption>
                    
                    
                        </table>
        
                    </div>
                '


        ]);


        DB::table('templatedefaults')->insert([

            "name" => "02_테스트 템플릿",
            "mime" => "text/html",

            "file_blob" =>
                '
                    <section class="box">
                        <h1>hello</h1>
                    
                        <div>
                            this is a test
                        </div>
                    
                        <button id="button">클릭</button>
                    </section>
                
                '
        ]);
    }
}
