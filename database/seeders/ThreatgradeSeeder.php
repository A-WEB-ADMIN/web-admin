<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThreatgradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('threatgrades')->insert(array (
            0 =>
                array (
                    'code' => 'TC1-01',
                    'domain' => '일반 위협',
                    'subdomain' => '관리 및 운영 절차의 미비 및 부재',
                    'explanation_threat' => '검증/모니터링, 보고 절차 미흡/부재',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 1.0,
                ),
            1 =>
                array (
                    'code' => 'TC1-02',
                    'domain' => '일반 위협',
                    'subdomain' => '관리 및 운영 절차의 미비 및 부재',
                    'explanation_threat' => '운영/접근통제 절차 미흡/부재',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 1.0,
                ),
            2 =>
                array (
                    'code' => 'TC1-03',
                    'domain' => '일반 위협',
                    'subdomain' => '관리 및 운영 절차의 미비 및 부재',
                    'explanation_threat' => '비상대책 미흡/부재',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 1.0,
                ),
            3 =>
                array (
                    'code' => 'TC1-04',
                    'domain' => '일반 위협',
                    'subdomain' => '관리 및 운영 절차의 미비 및 부재',
                    'explanation_threat' => '관리 및 운영 통제 미흡',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 1.0,
                ),
            4 =>
                array (
                    'code' => 'TC1-05',
                    'domain' => '일반 위협',
                    'subdomain' => '운영 및 테스트 환경 미분리',
                    'explanation_threat' => '운영 및 테스트 데이터의 혼용 사용',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 1.0,
                ),
            5 =>
                array (
                    'code' => 'TC1-06',
                    'domain' => '일반 위협',
                    'subdomain' => '인적 운영 관리의 미비',
                    'explanation_threat' => '조직 구성 미흡',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 1.0,
                ),
            6 =>
                array (
                    'code' => 'TC1-07',
                    'domain' => '일반 위협',
                    'subdomain' => '인적 운영 관리의 미비',
                    'explanation_threat' => 'R&R 정의 미흡',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 1.0,
                ),
            7 =>
                array (
                    'code' => 'TC1-08',
                    'domain' => '일반 위협',
                    'subdomain' => '인적 운영 관리의 미비',
                    'explanation_threat' => '외부직원 통제 미흡',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 0.0,
                ),
            8 =>
                array (
                    'code' => 'TC1-09',
                    'domain' => '일반 위협',
                    'subdomain' => '인적 운영 관리의 미비',
                    'explanation_threat' => '교육 및 인식 부족',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 1.0,
                ),
            9 =>
                array (
                    'code' => 'TC1-10',
                    'domain' => '일반 위협',
                    'subdomain' => '보안문서의 미비 및 부재',
                    'explanation_threat' => '보안 정책/지침/체계 부재',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 0.0,
                ),
            10 =>
                array (
                    'code' => 'TC1-11',
                    'domain' => '일반 위협',
                    'subdomain' => '보안문서의 미비 및 부재',
                    'explanation_threat' => '보안 문서(정책,지침,절차 등) 부재',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 0.0,
                ),
            11 =>
                array (
                    'code' => 'TC1-12',
                    'domain' => '일반 위협',
                    'subdomain' => '보안문서의 미비 및 부재',
                    'explanation_threat' => '보안 문서 현행화 미흡',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 0.0,
                ),
            12 =>
                array (
                    'code' => 'TC1-13',
                    'domain' => '일반 위협',
                    'subdomain' => '보안문서의 미비 및 부재',
                    'explanation_threat' => '보안 정책/지침 시행 당위성 부재',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 0.0,
                ),
            13 =>
                array (
                    'code' => 'TC1-14',
                    'domain' => '일반 위협',
                    'subdomain' => '보안문서의 미비 및 부재',
                    'explanation_threat' => '보안 문서(정책,지침,절차 등) 관리 미흡',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 0.0,
                ),
            14 =>
                array (
                    'code' => 'TC1-15',
                    'domain' => '일반 위협',
                    'subdomain' => '비인가 저장매체의 사용',
                    'explanation_threat' => '저장 매체(USB, CD, HDD)에 대한 비인가 사용',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 0.0,
                ),
            15 =>
                array (
                    'code' => 'TC2-01',
                    'domain' => '식별, 인가 위협',
                    'subdomain' => '신분위장(Spoofing ID)',
                    'explanation_threat' => '인가된 사용자/고객 위장 내부 공격',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 1.0,
                ),
            16 =>
                array (
                    'code' => 'TC2-02',
                    'domain' => '식별, 인가 위협',
                    'subdomain' => '식별 및 인증 실패',
                    'explanation_threat' => '식별 및 인증 절차/기능 부재',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 1.0,
                ),
            17 =>
                array (
                    'code' => 'TC2-03',
                    'domain' => '식별, 인가 위협',
                    'subdomain' => '식별 및 인증 실패',
                    'explanation_threat' => '식별 및 인증 절차/기능 우회',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 1.0,
                ),
            18 =>
                array (
                    'code' => 'TC2-04',
                    'domain' => '식별, 인가 위협',
                    'subdomain' => '정상프로그램 위장공격',
                    'explanation_threat' => 'Trojan 프로그램 사용 공격',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 1.0,
                ),
            19 =>
                array (
                    'code' => 'TC3-01',
                    'domain' => '서비스 신뢰도 위협',
                    'subdomain' => '자연재해',
                    'explanation_threat' => '화재, 홍수, 지진 등',
                    'confidentiality' => 0.0,
                    'integrity' => 0.0,
                    'availability' => 1.0,
                ),
            20 =>
                array (
                    'code' => 'TC3-02',
                    'domain' => '서비스 신뢰도 위협',
                    'subdomain' => '환경재해',
                    'explanation_threat' => '온습도 조절장치 고장, 장애',
                    'confidentiality' => 0.0,
                    'integrity' => 0.0,
                    'availability' => 1.0,
                ),
            21 =>
                array (
                    'code' => 'TC3-03',
                    'domain' => '서비스 신뢰도 위협',
                    'subdomain' => '환경재해',
                    'explanation_threat' => '전원공급 실패 (불완전한 전원공급)',
                    'confidentiality' => 0.0,
                    'integrity' => 0.0,
                    'availability' => 1.0,
                ),
            22 =>
                array (
                    'code' => 'TC3-04',
                    'domain' => '서비스 신뢰도 위협',
                    'subdomain' => '서비스 장애',
                    'explanation_threat' => '네트워크 서비스 장애',
                    'confidentiality' => 0.0,
                    'integrity' => 0.0,
                    'availability' => 1.0,
                ),
            23 =>
                array (
                    'code' => 'TC3-05',
                    'domain' => '서비스 신뢰도 위협',
                    'subdomain' => '서비스 장애',
                    'explanation_threat' => 'H/W 장애',
                    'confidentiality' => 0.0,
                    'integrity' => 1.0,
                    'availability' => 1.0,
                ),
            24 =>
                array (
                    'code' => 'TC3-06',
                    'domain' => '서비스 신뢰도 위협',
                    'subdomain' => '서비스 장애',
                    'explanation_threat' => 'S/W 장애',
                    'confidentiality' => 0.0,
                    'integrity' => 1.0,
                    'availability' => 1.0,
                ),
            25 =>
                array (
                    'code' => 'TC3-07',
                    'domain' => '서비스 신뢰도 위협',
                    'subdomain' => '서비스 장애',
                    'explanation_threat' => 'DB 장애',
                    'confidentiality' => 0.0,
                    'integrity' => 1.0,
                    'availability' => 1.0,
                ),
            26 =>
                array (
                    'code' => 'TC3-08',
                    'domain' => '서비스 신뢰도 위협',
                    'subdomain' => '서비스 거부',
                    'explanation_threat' => '네트워크 Traffic 과부하',
                    'confidentiality' => 0.0,
                    'integrity' => 0.0,
                    'availability' => 1.0,
                ),
            27 =>
                array (
                    'code' => 'TC3-09',
                    'domain' => '서비스 신뢰도 위협',
                    'subdomain' => '서비스 거부',
                    'explanation_threat' => '서버 과부하',
                    'confidentiality' => 0.0,
                    'integrity' => 0.0,
                    'availability' => 1.0,
                ),
            28 =>
                array (
                    'code' => 'TC3-10',
                    'domain' => '서비스 신뢰도 위협',
                    'subdomain' => '서비스 거부',
                    'explanation_threat' => '스팸 메일 공격',
                    'confidentiality' => 0.0,
                    'integrity' => 0.0,
                    'availability' => 1.0,
                ),
            29 =>
                array (
                    'code' => 'TC3-11',
                    'domain' => '서비스 신뢰도 위협',
                    'subdomain' => '서비스 거부',
                    'explanation_threat' => 'DOS(Denial of Service) 공격',
                    'confidentiality' => 0.0,
                    'integrity' => 0.0,
                    'availability' => 1.0,
                ),
            30 =>
                array (
                    'code' => 'TC3-12',
                    'domain' => '서비스 신뢰도 위협',
                    'subdomain' => '비인가 소프트웨어의 유입',
                    'explanation_threat' => '악성코드(웜, 바이러스) 감염',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 1.0,
                ),
            31 =>
                array (
                    'code' => 'TC3-13',
                    'domain' => '서비스 신뢰도 위협',
                    'subdomain' => '비인가 소프트웨어의 유입',
                    'explanation_threat' => '스파이웨어/애드웨어 감염',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 1.0,
                ),
            32 =>
                array (
                    'code' => 'TC3-14',
                    'domain' => '서비스 신뢰도 위협',
                    'subdomain' => '비인가 소프트웨어의 유입',
                    'explanation_threat' => '불법소프트웨어 사용',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 1.0,
                ),
            33 =>
                array (
                    'code' => 'TC4-01',
                    'domain' => '기밀성 위협',
                    'subdomain' => '문서 유출',
                    'explanation_threat' => '개인정보 문서 유출(PC, 책상, 휴지통, 복사기 등)',
                    'confidentiality' => 1.0,
                    'integrity' => 0.0,
                    'availability' => 0.0,
                ),
            34 =>
                array (
                    'code' => 'TC4-02',
                    'domain' => '기밀성 위협',
                    'subdomain' => '스니핑(Sniffing)',
                    'explanation_threat' => '인터넷 스니핑을 통한 민감한 데이터 접근',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 1.0,
                ),
            35 =>
                array (
                    'code' => 'TC4-03',
                    'domain' => '기밀성 위협',
                    'subdomain' => '스니핑(Sniffing)',
                    'explanation_threat' => '내부 네트워크 스니핑을 통한 민감한 데이터 접근',
                    'confidentiality' => 1.0,
                    'integrity' => 0.0,
                    'availability' => 0.0,
                ),
            36 =>
                array (
                    'code' => 'TC4-04',
                    'domain' => '기밀성 위협',
                    'subdomain' => '피싱(Phishing) & 파밍(Pharming)',
                    'explanation_threat' => '사이트 위조(사용자 도용)',
                    'confidentiality' => 1.0,
                    'integrity' => 0.0,
                    'availability' => 0.0,
                ),
            37 =>
                array (
                    'code' => 'TC4-05',
                    'domain' => '기밀성 위협',
                    'subdomain' => 'Application 프로그램 악용',
                    'explanation_threat' => 'Application 프로그램을 통한 개인정보 조회, 유출',
                    'confidentiality' => 1.0,
                    'integrity' => 0.0,
                    'availability' => 0.0,
                ),
            38 =>
                array (
                    'code' => 'TC4-06',
                    'domain' => '기밀성 위협',
                    'subdomain' => 'Application 프로그램 악용',
                    'explanation_threat' => 'Client 프로그램 개인정보(cache 정보)의 조회, 유출',
                    'confidentiality' => 1.0,
                    'integrity' => 0.0,
                    'availability' => 0.0,
                ),
            39 =>
                array (
                    'code' => 'TC4-07',
                    'domain' => '기밀성 위협',
                    'subdomain' => '취약한 시스템 설정 악용',
                    'explanation_threat' => '시스템 정보, 설정 정보 등 중요 정보 유출',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 0.0,
                ),
            40 =>
                array (
                    'code' => 'TC4-08',
                    'domain' => '기밀성 위협',
                    'subdomain' => '저장매체 정보 유출',
                    'explanation_threat' => '저장 매체를 통한 중요 정보 유출',
                    'confidentiality' => 1.0,
                    'integrity' => 0.0,
                    'availability' => 0.0,
                ),
            41 =>
                array (
                    'code' => 'TC4-09',
                    'domain' => '기밀성 위협',
                    'subdomain' => '중요 정보 유출',
                    'explanation_threat' => '개인정보, 비밀번호 등 암호화하지 않은 중요정보의 유출',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 0.0,
                ),
            42 =>
                array (
                    'code' => 'TC5-01',
                    'domain' => '무결성 위협',
                    'subdomain' => '정보 및 정보처리 프로세스의 변조',
                    'explanation_threat' => '정보의 의도적 변조 및 손상',
                    'confidentiality' => 0.0,
                    'integrity' => 1.0,
                    'availability' => 1.0,
                ),
            43 =>
                array (
                    'code' => 'TC5-02',
                    'domain' => '무결성 위협',
                    'subdomain' => '정보 및 정보처리 프로세스의 변조',
                    'explanation_threat' => '시스템 주요 파일 및 프로그램의 의도적 변조 및 손상',
                    'confidentiality' => 0.0,
                    'integrity' => 1.0,
                    'availability' => 1.0,
                ),
            44 =>
                array (
                    'code' => 'TC6-01',
                    'domain' => '접근제어 위협',
                    'subdomain' => '정보 수집',
                    'explanation_threat' => 'Scanning 등을 통한 시스템 정보 수집',
                    'confidentiality' => 1.0,
                    'integrity' => 0.0,
                    'availability' => 0.0,
                ),
            45 =>
                array (
                    'code' => 'TC6-02',
                    'domain' => '접근제어 위협',
                    'subdomain' => '정보 수집',
                    'explanation_threat' => '네트워크 정보 수집',
                    'confidentiality' => 1.0,
                    'integrity' => 0.0,
                    'availability' => 0.0,
                ),
            46 =>
                array (
                    'code' => 'TC6-03',
                    'domain' => '접근제어 위협',
                    'subdomain' => '패스워드 Cracking',
                    'explanation_threat' => '패스워드 추측 공격',
                    'confidentiality' => 1.0,
                    'integrity' => 0.0,
                    'availability' => 0.0,
                ),
            47 =>
                array (
                    'code' => 'TC6-04',
                    'domain' => '접근제어 위협',
                    'subdomain' => '패스워드 Cracking',
                    'explanation_threat' => '패스워드 파일 접근',
                    'confidentiality' => 1.0,
                    'integrity' => 0.0,
                    'availability' => 0.0,
                ),
            48 =>
                array (
                    'code' => 'TC6-05',
                    'domain' => '접근제어 위협',
                    'subdomain' => '취약한 권한접근',
                    'explanation_threat' => '사용자/프로그램 권한 상승',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 1.0,
                ),
            49 =>
                array (
                    'code' => 'TC6-06',
                    'domain' => '접근제어 위협',
                    'subdomain' => '취약한 권한접근',
                    'explanation_threat' => '불필요하게 부여된 권한에 따른 권한 오남용',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 1.0,
                ),
            50 =>
                array (
                    'code' => 'TC6-07',
                    'domain' => '접근제어 위협',
                    'subdomain' => '취약한 권한접근',
                    'explanation_threat' => '파일/디렉토리 취약한 권한 설정 악용',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 1.0,
                ),
            51 =>
                array (
                    'code' => 'TC6-08',
                    'domain' => '접근제어 위협',
                    'subdomain' => '비인가된 시스템 및 네트워크 접근',
                    'explanation_threat' => '네트워크 구성(접근통제 등)의 오류 이용',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 1.0,
                ),
            52 =>
                array (
                    'code' => 'TC6-09',
                    'domain' => '접근제어 위협',
                    'subdomain' => '비인가된 시스템 및 네트워크 접근',
                    'explanation_threat' => '시스템(OS, DB, App 등) 설정 오류',
                    'confidentiality' => 0.0,
                    'integrity' => 1.0,
                    'availability' => 1.0,
                ),
            53 =>
                array (
                    'code' => 'TC6-10',
                    'domain' => '접근제어 위협',
                    'subdomain' => '비인가된 시스템 및 네트워크 접근',
                    'explanation_threat' => '네트워크 프로토콜의 버그 이용',
                    'confidentiality' => 1.0,
                    'integrity' => 0.0,
                    'availability' => 1.0,
                ),
            54 =>
                array (
                    'code' => 'TC6-11',
                    'domain' => '접근제어 위협',
                    'subdomain' => '비인가된 시스템 및 네트워크 접근',
                    'explanation_threat' => '비인가 시스템 접근(필터링 미설정, 방화벽 미설치 이용한 공격)',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 1.0,
                ),
            55 =>
                array (
                    'code' => 'TC6-12',
                    'domain' => '접근제어 위협',
                    'subdomain' => '비인가된 시스템 및 네트워크 접근',
                    'explanation_threat' => '비인가 PC 및 단말기의 사용',
                    'confidentiality' => 1.0,
                    'integrity' => 1.0,
                    'availability' => 0.0,
                ),
            56 =>
                array (
                    'code' => 'TC6-13',
                    'domain' => '접근제어 위협',
                    'subdomain' => '웹 서비스 공격',
                    'explanation_threat' => '취약한 웹 서버 설정 이용',
                    'confidentiality' => 1.0,
                    'integrity' => 0.0,
                    'availability' => 1.0,
                ),
            57 =>
                array (
                    'code' => 'TC6-14',
                    'domain' => '접근제어 위협',
                    'subdomain' => '웹 서비스 공격',
                    'explanation_threat' => '악성 스크립트 또는 명령 실행',
                    'confidentiality' => 1.0,
                    'integrity' => 0.0,
                    'availability' => 1.0,
                ),
            58 =>
                array (
                    'code' => 'TC6-15',
                    'domain' => '접근제어 위협',
                    'subdomain' => '웹 서비스 공격',
                    'explanation_threat' => 'Buffer Overflow 공격 등을 통한 관리자 권한 획득',
                    'confidentiality' => 1.0,
                    'integrity' => 0.0,
                    'availability' => 1.0,
                ),
            59 =>
                array (
                    'code' => 'TC6-16',
                    'domain' => '접근제어 위협',
                    'subdomain' => '웹 서비스 공격',
                    'explanation_threat' => '어플리케이션에 내재된 취약성 이용 공격',
                    'confidentiality' => 1.0,
                    'integrity' => 0.0,
                    'availability' => 1.0,
                ),
            60 =>
                array (
                    'code' => 'TC6-17',
                    'domain' => '접근제어 위협',
                    'subdomain' => '비인가된 물리적 접근',
                    'explanation_threat' => '사무실, 지점의 비인가 접근',
                    'confidentiality' => 1.0,
                    'integrity' => 0.0,
                    'availability' => 1.0,
                ),
            61 =>
                array (
                    'code' => 'TC7-01',
                    'domain' => '부인 위협',
                    'subdomain' => '침해 부인',
                    'explanation_threat' => '비인가 및 공격 행위 부인(Log 미설정 등)',
                    'confidentiality' => 0.0,
                    'integrity' => 1.0,
                    'availability' => 0.0,
                ),
            62 =>
                array (
                    'code' => 'TC7-02',
                    'domain' => '부인 위협',
                    'subdomain' => '침해 부인',
                    'explanation_threat' => '침해 증거(로그) 변조 및 파괴',
                    'confidentiality' => 0.0,
                    'integrity' => 1.0,
                    'availability' => 0.0,
                ),
            63 =>
                array (
                    'code' => 'TC8-01',
                    'domain' => '법적 위협',
                    'subdomain' => '규제 및 법적 요건의 미준수',
                    'explanation_threat' => '상위기관 규정 위배에 따른 벌금, 징계 등',
                    'confidentiality' => 0.0,
                    'integrity' => 0.0,
                    'availability' => 1.0,
                ),
        ));







    }
}
