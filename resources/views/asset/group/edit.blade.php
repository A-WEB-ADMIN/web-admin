@extends('layouts.layout')
@section('main')

<div class="container">
    <div class="top_titles">
        <ul class="location">
            <li>Home</li>
            <li>자산관리</li>
            <li>자산목록</li>
        </ul>
        <h2>자산그룹 편집</h2>

        <div class="add_area">
            <label for="search_chk">자산그룹 추가</label>
            <input type="text" name="search_chk" id="search_chk">
            <a href="#;" class="btn_search">추가</a>
        </div>
    </div>

    <div class="top_search">
        <select name="" id="">
            <option value="">자산 그룹을 선택해주세요</option>
        </select>
        <a href="#;" class="btn_s">삭제</a>
    </div>

    <div class="title_area">
        <h3>전체 자산목록</h3>
        <h3>그룹의 서비스시스템 자산목록</h3>
    </div>
    <div class="tab_area s">
        <ul>
            <li class="on"><a href="#;">서버시스템</a></li>
            <li><a href="#;">WEB</a></li>
            <li><a href="#;">DBMS</a></li>
            <li><a href="#;">소프트웨어</a></li>
            <li><a href="#;">네트워크</a></li>
            <li><a href="#;">응용프로그램</a></li>
            <li><a href="#;">정보보호시스템</a></li>
            <li><a href="#;">단말기</a></li>
            <li><a href="#;">문서</a></li>
            <li><a href="#;">부대시설</a></li>
        </ul>
    </div>

    <div class="info_setting tab_box">
        <div class="left">
            <div class="tb_type1 s">
                <table>
                    <colgroup>
                        <col style="width:10%">
                        <col style="width:20%" span="4">
                    </colgroup>
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>자산코드</th>
                        <th>상태</th>
                        <th>구분</th>
                        <th>HOSTNAME</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="right">
            <div class="tb_type1 s">
                <table>
                    <colgroup>
                        <col style="width:10%">
                        <col style="width:20%" span="4">
                    </colgroup>
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>자산코드</th>
                        <th>상태</th>
                        <th>구분</th>
                        <th>HOSTNAME</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="controll">
            <button class="s_right">
                <i class="far fa-chevron-right"></i>
            </button>
            <button class="l_right">
                <i class="far fa-chevron-right"></i>
                <i class="far fa-chevron-right"></i>
            </button>

            <button class="l_left">
                <i class="far fa-chevron-left"></i>
            </button>
            <button class="s_left">
                <i class="far fa-chevron-left"></i>
                <i class="far fa-chevron-left"></i>
            </button>
        </div>
    </div>



    <div class="btn_box r">
        <a href="#;" class="btn">저장</a>
    </div>


</div>

@endsection