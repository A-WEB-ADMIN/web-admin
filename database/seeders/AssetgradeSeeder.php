<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssetgradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('assetgrades')->insert(array (
            0 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호정책',
                    'depth' => '1.1.1.1',
                    'clause' => '정보보호정책 및 정책시행 문서(지침, 절차 등)의 제·개정 시 이해관련자의 검토를 받고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '이해관련자의 검토가 수행되지 않아, 조직 내에서 실제 수행하는 정보보호 활동이 문서에 반영되지 않을 위험',
                    'protection_plan' => '정보보호정책 및 정책시행 문서(지침, 절차 등)의 제·개정 시 이해관련자 검토',
                    'threatcode' => 'TC1-12',
                ),
            1 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호정책',
                    'depth' => '1.1.1.2',
                    'clause' => '정보보호정책 제·개정 시 최고경영자의 승인을 받고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호정책의 시행 당위성 부재에 따른 정보보호 업무에 대한 기준 적용의 어려움 발생 위험',
                    'protection_plan' => '정보보호정책 제·개정 시 최고경영자 승인',
                    'threatcode' => 'TC1-13',
                ),
            2 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호정책',
                    'depth' => '1.1.1.3',
                    'clause' => '지침, 절차 등 정책시행 문서 제·개정 시 최고경영자의 위임을 받은 책임자 (CISO 등)의 승인을 받고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호정책의 시행 당위성 부재에 따른 정보보호 업무에 대한 기준 적용의 어려움 발생 위험',
                    'protection_plan' => '지침, 절차 등 정책시행 문서 제·개정 시 최고경영자의 위임을 받은 책임자(CISO 등) 승인',
                    'threatcode' => 'TC1-13',
                ),
            3 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호정책',
                    'depth' => '1.1.2.1',
                    'clause' => '정보보호정책 및 정책시행 문서의 제·개정 시 그 내용을 관련 임직원에게 공표 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '임직원의 명시적인 정보보호 기준 미 인지로 보안기준에 적합하지 않은 업무 수행 위험',
                    'protection_plan' => '정보보호정책 제·개정 시 관련 임직원에 대한 공표',
                    'threatcode' => 'TC1-09',
                ),
            4 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호정책',
                    'depth' => '1.1.2.2',
                    'clause' => '정보보호정책 및 정책시행 문서를 관련 임직원에게 이해하기 쉬운 형태로 전달하고 최신본으로 제공하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '임직원의 명시적인 정보보호 기준 미 인지로 보안기준에 적합하지 않은 업무 수행 위험',
                    'protection_plan' => '정보보호정책 문서의 최신본 제공',
                    'threatcode' => 'TC1-09',
                ),
            5 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호정책',
                    'depth' => '1.2.1.1',
                    'clause' => '정보보호정책이 상위 조직 및 관련기관의 정책과 연계성이 있는지 검토하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '상위 정보보호정책과의 불일치 및 내용의 누락에 따른 상위 정보보호정책의 보안요건 미준수 위험',
                    'protection_plan' => '정보보호정책이 상위 조직 및 관련기관의 정책과의 연계성 검토',
                    'threatcode' => 'TC8-01',
                ),
            6 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호정책',
                    'depth' => '1.2.2.1',
                    'clause' => '정보보호정책의 시행을 위하여 필요한 세부적인 방법, 절차, 주기 등을 규정한 정보보호 지침, 절차, 매뉴얼 등을 수립하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 활동에 대한 체계적인 문서화 및 세부적인 정보보호 활동의 정의가 미흡하여 체계적이고 일관된 보안업무 적용이 어려울 위험',
                    'protection_plan' => '정보보호정책의 시행을 위하여 필요한 세부적인 방법, 절차, 주기 등을 규정한 정보보호 지침, 절차, 매뉴얼 등 수립',
                    'threatcode' => 'TC1-11',
                ),
            7 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호정책',
                    'depth' => '1.2.2.2',
                    'clause' => '정보보호정책과 지침, 절차 등과 같은 정책시행 문서 간 내용의 일관성 여부를 검토하고 유지하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 활동에 대한 체계적인 문서화 및 세부적인 정보보호 활동의 정의가 미흡하여 체계적이고 일관된 보안업무 적용이 어려울 위험',
                    'protection_plan' => '정보보호정책과 지침, 절차 등과 같은 정책시행 문서 간 내용의 일관성 여부 검토',
                    'threatcode' => 'TC1-11',
                ),
            8 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호정책',
                    'depth' => '1.3.1.1',
                    'clause' => '정보보호정책 및 정책시행 문서의 정기적 타당성 검토 절차를 수립하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호정책 및 정책시행 문서에 대한 검토활동을 수행하지 않아, 필요 절차가 누락되거나 정보보호 환경 변화 사항을 반영하지 못할 위험',
                    'protection_plan' => '정기적 타당성 검토 절차 수립',
                    'threatcode' => 'TC1-12',
                ),
            9 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호정책',
                    'depth' => '1.3.1.2',
                    'clause' => '중대한 환경 변화 시 정보보호정책 및 정책시행 문서에 미치는 영향을 분석하고 제·개정 필요성 여부를 검토하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호정책 및 정책시행 문서에 대한 검토활동을 수행하지 않아, 필요 절차가 누락되거나 정보보호 환경 변화 사항을 반영하지 못할 위험',
                    'protection_plan' => '중대한 환경 변화 시 정보보호정책 및 정책시행 문서에 미치는 영향을 분석하고 제·개정 필요성 여부 검토',
                    'threatcode' => 'TC1-12',
                ),
            10 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호정책',
                    'depth' => '1.3.2.1',
                    'clause' => '정보보호정책 및 정책시행 문서의 제정, 개정, 배포, 폐기 등의 이력을 확인할 수 있도록 관리절차를 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호정책 및 정책시행 문서에 대한 관리절차가 정형화되어 있지 않아, 업무의 비정형화로 인해 필요 절차가 누락되거나 정보보호정책에 따른 활동의 운영 기록 관리가 미흡할 위험',
                    'protection_plan' => '정보보호정책서의 제정, 개정, 배포, 폐기 등의 이력을 확인할 수 있도록 관리절차 수립/이행',
                    'threatcode' => 'TC1-14',
                ),
            11 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호정책',
                    'depth' => '1.3.2.2',
                    'clause' => '정보보호정책 및 정책시행 문서는 최신본으로 관리하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호정책 및 정책시행 문서에 대한 관리절차가 정형화되어 있지 않아, 업무의 비정형화로 인해 필요 절차가 누락되거나 정보보호정책에 따른 활동의 운영 기록 관리가 미흡할 위험',
                    'protection_plan' => '정보보호정책 및 정책시행 문서의 최신본 관리',
                    'threatcode' => 'TC1-14',
                ),
            12 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호정책',
                    'depth' => '1.3.2.3',
                    'clause' => '정보보호정책 및 정책시행 문서에서 정한 정보보호 활동 수행에 관한 운영 기록을 생성하여 유지하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호정책 및 정책시행 문서에 대한 관리절차가 정형화되어 있지 않아, 업무의 비정형화로 인해 필요 절차가 누락되거나 정보보호정책에 따른 활동의 운영 기록 관리가 미흡할 위험',
                    'protection_plan' => '정보보호정책 및 정책시행 문서에서 정한 정보보호 활동 수행에 관한 운영 기록 생성 및 유지',
                    'threatcode' => 'TC1-14',
                ),
            13 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호 조직',
                    'depth' => '2.1.1.1',
                    'clause' => '최고경영자는 조직의 정보보호 관련 업무를 총괄 관리할 수 있는 임원급의 정보보호 최고책임자(CISO)를 지정하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 업무 전반의 총괄책임자 부재에 따른 실행력 저하 위험',
                    'protection_plan' => '정보보호 관련 업무를 총괄 관리할 수 있는 임원급의 정보보호 최고책임자(CISO) 지정',
                    'threatcode' => 'TC1-06',
                ),
            14 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호 조직',
                    'depth' => '2.1.2.1',
                    'clause' => '최고경영자는 정보보호 최고책임자 (CISO)의 역할을 지원하고 조직의 정보보호활동을 체계적으로 이행하기 위한 실무조직을 구성하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 실무조직 구성이 미흡하여 정보보호활동이 체계적으로 이행되지 않을 위험',
                    'protection_plan' => '정보보호활동을 체계적으로 이행하기 위한 실무조직 구성',
                    'threatcode' => 'TC1-06',
                ),
            15 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호 조직',
                    'depth' => '2.1.2.2',
                    'clause' => '정보보호 전문성을 고려하여 실무조직 구성원을 임명하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호 실무조직 구성이 미흡하여 정보보호활동이 체계적으로 이행되지 않을 위험',
                    'protection_plan' => '정보보호 전문성을 고려하여 실무조직 구성원 임명',
                    'threatcode' => 'TC1-06',
                ),
            16 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호 조직',
                    'depth' => '2.1.3.1',
                    'clause' => '정보보호위원회 구성, 운영, 역할 및 책임 등을 정한 규정을 마련하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '중요 정보보호 사안에 대한 즉시적이고 효율적인 의사결정이 지연될 위험',
                    'protection_plan' => '정보보호위원회 구성, 운영, 역할 및 책임 등을 정한 규정수립',
                    'threatcode' => 'TC1-06',
                ),
            17 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호 조직',
                    'depth' => '2.1.3.2',
                    'clause' => '정보보호위원회는 중요한 정보보호 관련사항에 대해 검토 및 의사결정을 할 수 있는 인원으로 구성하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '중요 정보보호 사안에 대한 즉시적이고 효율적인 의사결정이 지연될 위험',
                    'protection_plan' => '정보보호위원회는 중요한 정보보호 관련 사항에 대해 검토 및 의사결정이 가능한 인원으로 구성',
                    'threatcode' => 'TC1-06',
                ),
            18 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호 조직',
                    'depth' => '2.2.1.1',
                    'clause' => '정보보호 최고책임자와 정보보호 관련 담당자의 역할 및 책임을 정의하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 관련 담당자의 직무별 역할이 불명확하여 정보보호 활동이 체계적으로 수행되지 않을 위험',
                    'protection_plan' => '정보보호 최고책임자와 정보보호 관련 담당자의 역할 및 책임 정의',
                    'threatcode' => 'TC1-07',
                ),
            19 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호 조직',
                    'depth' => '2.2.1.2',
                    'clause' => '정보보호 최고책임자와 정보보호 관련 담당자의 활동을 평가할 수 있는 체계를 수립하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호 인력의 책임업무 이행 지원 미흡 및 업무 추진 활동의 평가체계 부재로 인한 업무 실행력 저하 위험',
                    'protection_plan' => '정보보호 최고책임자와 정보보호 관련 담당자의 활동을 평가할 수 있는 체계 수립',
                    'threatcode' => 'TC1-07',
                ),
            20 =>
                array (
                    'type' => 'Management',
                    'domain' => '외부자 보안',
                    'depth' => '3.1.1.1',
                    'clause' => '조직의 정보처리 업무를 외부자에게 위탁하는 경우 다음과 같은 보안요구사항을 정의하여 계약 시 반영하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '외부자의 보안규범 준수에 대한 강제화 불가능 및 피해발생에 따른 피해 구제의 어려움',
                    'protection_plan' => '외부자 계약 시 보안요구사항 정의 및 계약 반영',
                    'threatcode' => 'TC1-08',
                ),
            21 =>
                array (
                    'type' => 'Management',
                    'domain' => '외부자 보안',
                    'depth' => '3.2.1.1',
                    'clause' => '외부자가 계약서에 명시한 보안요구사항을 준수하고 있는 지 주기적으로 점검 또는 감사를 수행하고 문제점 발견 시 개선할 수 있는 보호대책을 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '외부자에 대한 보안관리가 이루어지지 않아 정보유출 등 보안사고가 발생할 위험',
                    'protection_plan' => '외부자가 계약서에 명시한 보안요구사항을 준수하고 있는 지 주기적으로 점검 또는 감사 수행',
                    'threatcode' => 'TC1-08',
                ),
            22 =>
                array (
                    'type' => 'Management',
                    'domain' => '외부자 보안',
                    'depth' => '3.2.2.1',
                    'clause' => '외부자가 위탁 업무 수행과정에서 담당자퇴직 등의 변경사항이 발생할 경우 위탁사 관련부서에 보고하고 공식적인 절차에 따라 정보자산 반납, 접근계정 삭제 등의 조치를 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '외부자에 대한 보안관리가 이루어지지 않아 정보유출 등 보안사고가 발생할 위험',
                    'protection_plan' => '위탁 업무 수행과정에서의 변경이력에 대한 보고 절차 수립 및 그에 따른 정보자산 반납, 접근계정 삭제 등의 조치 이행',
                    'threatcode' => 'TC1-08',
                ),
            23 =>
                array (
                    'type' => 'Management',
                    'domain' => '외부자 보안',
                    'depth' => '3.2.2.2',
                    'clause' => '외부자와의 계약 만료, 업무 종료 시 공식적인 절차에 따라 정보자산의 반납, 정보 시스템 접근계정 삭제, 중요정보 파기, 물리적 출입권한 삭제 업무 수행 시 알게 된 정보의 비밀유지서약서 작성 등을 확인하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '외부자에 대한 보안관리가 이루어지지 않아 정보유출 등 보안사고가 발생할 위험',
                    'protection_plan' => '외부자 철수 시 공식적인 절차에 따른 정보자산 반납, 접근계정 삭제, 비밀유지서약서 작성 등의 조치 이행 확인',
                    'threatcode' => 'TC1-08',
                ),
            24 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보자산 분류',
                    'depth' => '4.1.1.1',
                    'clause' => '정보자산(정보시스템, 정보보호시스템, 정보)의 분류기준을 수립하고 정보보호 관리체계 범위 내 모든 정보자산을 식별하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호관리체계 범위내의 모든 정보자산에 대한 식별 및 분류가 미흡하여 정보자산의 관리 소홀에 따른 사고 발생 위험 ',
                    'protection_plan' => '정보자산의 분류기준 수립 및 정보보호 관리체계 범위 내 모든 정보자산 식별',
                    'threatcode' => 'TC1-02',
                ),
            25 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보자산 분류',
                    'depth' => '4.1.1.2',
                    'clause' => '식별된 정보자산을 다음 항목이 포함된 별도 목록으로 관리하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호관리체계 범위내의 모든 정보자산에 대한 식별 및 분류가 미흡하여 정보자산의 관리 소홀에 따른 사고 발생 위험 ',
                    'protection_plan' => '식별된 정보자산 별도 목록으로 관리',
                    'threatcode' => 'TC1-04',
                ),
            26 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보자산 분류',
                    'depth' => '4.1.1.3',
                    'clause' => '정기적으로 정보자산 현황을 조사하고 정보자산목록을 최신으로 유지하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호관리체계 범위내의 모든 정보자산에 대한 식별 및 분류가 미흡하여 정보자산의 관리 소홀에 따른 사고 발생 위험 ',
                    'protection_plan' => '정기적으로 정보자산 현황을 조사하고 정보자산목록을 최신으로 유지',
                    'threatcode' => 'TC1-04',
                ),
            27 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보자산 분류',
                    'depth' => '4.1.2.1',
                    'clause' => '식별된 정보자산에 대한 책임자 및 관리자(또는 담당자)를 지정하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '책임소재 불명확화에 따른 정보자산관리 소홀 및 문제 상황이 발생할 위험',
                    'protection_plan' => '식별된 정보자산에 대한 책임자 및 관리자 지정',
                    'threatcode' => 'TC1-07',
                ),
            28 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보자산 분류',
                    'depth' => '4.2.1.1',
                    'clause' => '기밀성, 무결성, 가용성, 법적 요구사항 등을 고려하여 정보자산의 중요도를 평가하기 위한 기준을 수립하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '보안등급 정의 미흡에 따른 관리력 낭비 및 상위 보안등급 정보자산에 대한 관리 소홀에 따른 정보유출 등 보안사고 발생 위험',
                    'protection_plan' => '정보자산의 중요도를 평가하기 위한 기준 수립',
                    'threatcode' => 'TC1-02',
                ),
            29 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보자산 분류',
                    'depth' => '4.2.1.2',
                    'clause' => '정보자산별로 중요도를 평가하고 각 자산별 특성에 적합한 보안등급 부여하고 보안등급을 쉽게 확인할 수 있도록 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '보안등급 정의 미흡에 따른 관리력 낭비 및 상위 보안등급 정보자산에 대한 관리 소홀에 따른 정보유출 등 보안사고 발생 위험',
                    'protection_plan' => '정보자산별로 중요도를 평가하고 각 자산별 특성에 적합한 보안등급 부여',
                    'threatcode' => 'TC1-04',
                ),
            30 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보자산 분류',
                    'depth' => '4.2.1.3',
                    'clause' => '정보자산의 보안등급에 따른 취급절차(생성, 저장, 이용, 파기 등)를 정의하고 이행 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '보안등급 정의 미흡에 따른 관리력 낭비 및 상위 보안등급 정보자산에 대한 관리 소홀에 따른 정보유출 등 보안사고 발생 위험',
                    'protection_plan' => '정보자산의 보안등급에 따른 취급절차(생성, 저장, 이용, 파기 등) 정의 및 이행',
                    'threatcode' => 'TC1-04',
                ),
            31 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호 교육',
                    'depth' => '5.1.1.1',
                    'clause' => '정보보호 교육의 시기, 기간, 대상, 내용, 방법 등의 내용이 포함된 연간 정보보호교육 계획을 수립하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '교육 계획 수립 미흡으로 인하여 체계적인 교육이 실시되지 않아 조직 전반의 정보보호 수준 저하 위험',
                    'protection_plan' => '정보보호 교육의 시기, 기간, 대상, 내용, 방법 등의 내용이 포함된 연간 정보보호교육 계획 수립',
                    'threatcode' => 'TC1-09',
                ),
            32 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호 교육',
                    'depth' => '5.1.1.2',
                    'clause' => '정보보호교육 시행을 책임질 수 있는 경영진 (최고경영자 등)이 정보보호 교육 계획을 검토 하여 승인하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '교육 계획 수립 미흡으로 인하여 체계적인 교육이 실시되지 않아 조직 전반의 정보보호 수준 저하 위험',
                    'protection_plan' => '정보보호교육 시행을 책임질 수 있는 경영진(최고경영자 등)의 정보보호 교육 계획 승인',
                    'threatcode' => 'TC1-09',
                ),
            33 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호 교육',
                    'depth' => '5.1.2.1',
                    'clause' => '정보보호 교육대상에 정보보호 관리체계 범위 내 정보자산에 직·간접적으로 접근하는 임직원 및 외부자를 모두 포함하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호 교육 대상의 누락 또는 교육의 질적 저하로 인한 조직 전체 보안 수준 및 효율성 저하 위험',
                    'protection_plan' => '정보보호 교육대상에 임직원 및 외부자 모두 포함',
                    'threatcode' => 'TC1-09',
                ),
            34 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호 교육',
                    'depth' => '5.1.3.1',
                    'clause' => '임직원 대상 기본 정보보호교육에 다음의 내용을 포함하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호 교육 대상의 누락 또는 교육의 질적 저하로 인한 조직 전체 보안 수준 및 효율성 저하 위험',
                    'protection_plan' => '정보보호 관리체계 개요, 정보보호 관련 내부규정, 유관 법률, 침해사고 등을 포함하여 기본 정보보호 교육 시행',
                    'threatcode' => 'TC1-09',
                ),
            35 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호 교육',
                    'depth' => '5.1.3.2',
                    'clause' => 'IT 및 정보보호 조직 내 임직원은 정보보호와 관련하여 직무별 전문성 제고를 위하여 필요한 별도의 교육을 받고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호 교육 대상의 누락 또는 교육의 질적 저하로 인한 조직 전체 보안 수준 및 효율성 저하 위험',
                    'protection_plan' => '정보보호 직무특화 교육 시행',
                    'threatcode' => 'TC1-09',
                ),
            36 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호 교육',
                    'depth' => '5.2.1.1',
                    'clause' => '정보보호 관리체계 범위 내 임직원 및 외부자를 대상으로 연 1 회 이상 기본 정보보호 교육을 수행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호 교육 대상의 누락 또는 교육의 질적 저하로 인한 조직 전체 보안 수준 및 효율성 저하 위험',
                    'protection_plan' => '연 1회 이상 기본 정보보호 교육 수행',
                    'threatcode' => 'TC1-09',
                ),
            37 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호 교육',
                    'depth' => '5.2.1.2',
                    'clause' => '정보보호 정책 및 절차의 중대한 변경, 조직 내·외부 보안사고 발생, 정보보호 관련 법률변경 등 발생 시 이에 대한 추가 교육을 수행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호 교육 대상의 누락 또는 교육의 질적 저하로 인한 조직 전체 보안 수준 및 효율성 저하 위험',
                    'protection_plan' => '정보보호 주요 환경 변화 시 추가 교육 시행',
                    'threatcode' => 'TC1-09',
                ),
            38 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호 교육',
                    'depth' => '5.2.1.3',
                    'clause' => '출장, 휴가 등의 사정으로 정기 정보보호 교육을 받지 못한 인력에 대한 교육 방법을 마련하고 시행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호 교육 대상의 누락 또는 교육의 질적 저하로 인한 조직 전체 보안 수준 및 효율성 저하 위험',
                    'protection_plan' => '교육 불참자에 대한 추가 교육 시행',
                    'threatcode' => 'TC1-09',
                ),
            39 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호 교육',
                    'depth' => '5.2.1.4',
                    'clause' => '임직원 및 외부자 신규 채용 계약 시, 업무 시작 전에 정보보호 교육을 시행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호 교육 대상의 누락 또는 교육의 질적 저하로 인한 조직 전체 보안 수준 및 효율성 저하 위험',
                    'protection_plan' => '신규 입사자에 대한 정보보호 교육 시행',
                    'threatcode' => 'TC1-09',
                ),
            40 =>
                array (
                    'type' => 'Management',
                    'domain' => '정보보호 교육',
                    'depth' => '5.2.1.5',
                    'clause' => '교육시행에 대한 기록을 남기고 교육 효과와 적정성을 평가하여 다음 교육 계획에 반영하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호 교육 대상의 누락 또는 교육의 질적 저하로 인한 조직 전체 보안 수준 및 효율성 저하 위험',
                    'protection_plan' => '교육시행에 대한 기록을 남기고 교육 효과와 적정성을 평가하여 다음 교육 계획에 반영',
                    'threatcode' => 'TC1-09',
                ),
            41 =>
                array (
                    'type' => 'Management',
                    'domain' => '인적보안',
                    'depth' => '6.1.1.1',
                    'clause' => '조직 내 중요 정보자산(정보, 시스템 등) 을 취급하는 직무를 정의하고 해당 직무를 수행하는 주요 직무자를 지정하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '주요 직무자에 대한 식별 및 직무 분리가 이뤄지지 않아, 의도적/비의도적 권한 오남용 발생 위험',
                    'protection_plan' => '조직 내 중요 정보자산(정보, 시스템 등)을 취급하는 직무를 정의하고 해당 직무를 수행하는 주요 직무자 지정',
                    'threatcode' => 'TC1-07',
                ),
            42 =>
                array (
                    'type' => 'Management',
                    'domain' => '인적보안',
                    'depth' => '6.1.1.2',
                    'clause' => '중요정보를 취급하는 주요 직무자는 최소한으로 지정하고 주기적으로 주요 직무자 현황을 관리하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '주요 직무자에 대한 식별 및 직무 분리가 이뤄지지 않아, 의도적/비의도적 권한 오남용 발생 위험',
                    'protection_plan' => '중요정보를 취급하는 주요 직무자는 최소한으로 지정하고 주기적으로 주요 직무자 현황 관리',
                    'threatcode' => 'TC1-04',
                ),
            43 =>
                array (
                    'type' => 'Management',
                    'domain' => '인적보안',
                    'depth' => '6.1.2.1',
                    'clause' => '직무의 권한 오남용을 예방하기 위하여 정보보호 관련 주요 직무 분리 기준을 수립하고 직무별 역할과 책임을 명확하게 기술하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '주요 직무자에 대한 식별 및 직무 분리가 이뤄지지 않아, 의도적/비의도적 권한 오남용 발생 위험',
                    'protection_plan' => '직무의 권한 오남용을 예방하기 위하여 정보보호 관련 주요 직무 분리 기준을 수립하고 직무별 역할과 책임 명확화',
                    'threatcode' => 'TC6-06',
                ),
            44 =>
                array (
                    'type' => 'Management',
                    'domain' => '인적보안',
                    'depth' => '6.1.2.2',
                    'clause' => '직무분리가 어려운 경우 직무자간 상호 검토, 상위관리자 정기 모니터링 및 변경 사항 승인, 책임추적성 확보 방안 등의 보완통제를 마련하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '주요 직무자에 대한 식별 및 직무 분리가 이뤄지지 않아, 의도적/비의도적 권한 오남용 발생 위험',
                    'protection_plan' => '직무분리가 어려운 경우 직무자간 상호 검토, 상위관리자 정기 모니터링 및 변경사항 승인, 책임추적성 확보 방안 등의 보완통제 마련',
                    'threatcode' => 'TC6-06',
                ),
            45 =>
                array (
                    'type' => 'Management',
                    'domain' => '인적보안',
                    'depth' => '6.1.3.1',
                    'clause' => '신규 인력 채용 시 정보보호 책임이 명시된 정보보호서약서를 받고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호서약서 미징구에 따른 정보보호 의식 수준 저하 및 책임을 묻기 어려울 위험',
                    'protection_plan' => '신규 인력 채용 시 정보보호 책임이 명시된 정보보호서약서 징구',
                    'threatcode' => 'TC1-09',
                ),
            46 =>
                array (
                    'type' => 'Management',
                    'domain' => '인적보안',
                    'depth' => '6.1.3.2',
                    'clause' => '임시직원 혹은 외주용역과 같은 외부자에게 정보자산에 대한 접근권한을 부여 할 경우, 정보보호에 대한 책임을 계약서에 명시하고 이에 대한 정보보호서약서를 받고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호서약서 미징구에 따른 정보보호 의식 수준 저하 및 책임을 묻기 어려울 위험',
                    'protection_plan' => '외부자에 대한 정보보호서약서 징구',
                    'threatcode' => 'TC1-08',
                ),
            47 =>
                array (
                    'type' => 'Management',
                    'domain' => '인적보안',
                    'depth' => '6.1.3.3',
                    'clause' => '임직원 퇴직 시 별도의 비밀유지에 관련한 서약서를 받고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호서약서 미징구에 따른 정보보호 의식 수준 저하 및 책임을 묻기 어려울 위험',
                    'protection_plan' => '임직원 퇴직 시 별도의 비밀유지에 관련한 서약서 징구',
                    'threatcode' => 'TC1-09',
                ),
            48 =>
                array (
                    'type' => 'Management',
                    'domain' => '인적보안',
                    'depth' => '6.1.3.4',
                    'clause' => '정보보호서약서 및 비밀유지서약서는 법적 분쟁 발생 시 증거자료로 사용할 수 있도록 안전하게 보존하고 용이하고 찾아볼 수 있도록 관리하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호서약서 미징구에 따른 정보보호 의식 수준 저하 및 책임을 묻기 어려울 위험',
                    'protection_plan' => '징구한 정보보호 서약서의 안전한 관리',
                    'threatcode' => 'TC1-04',
                ),
            49 =>
                array (
                    'type' => 'Management',
                    'domain' => '인적보안',
                    'depth' => '6.2.1.1',
                    'clause' => '부서 및 직무변경, 휴직, 퇴직 등으로 인한 인사변경 내용이 인사부서, 정보보호부서, 정보시스템 운영부서 간에 공유되고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '퇴직 및 직무변경에 따른 자산반납, 권한회수 체계 및 절차가 미흡하여 퇴직자 등에 의한 자산분실, 정보유출 등 보안사고가 발생할 위험',
                    'protection_plan' => '인사변경 내용의 공유',
                    'threatcode' => 'TC1-04',
                ),
            50 =>
                array (
                    'type' => 'Management',
                    'domain' => '인적보안',
                    'depth' => '6.2.1.2',
                    'clause' => '조직 내 인력(정규직 임직원, 임시직원, 외주용역업체 직원 등)의 직무변경 혹은 퇴직 시 정보자산 반납, 접근권한 조정·회수, 결과 확인 등 수립된 절차에 따라 지체 없이 이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '퇴직 및 직무변경에 따른 자산반납, 권한회수 체계 및 절차가 미흡하여 퇴직자 등에 의한 자산분실, 정보유출 등 보안사고가 발생할 위험',
                    'protection_plan' => '조직 내 인력의 직무변경 혹은 퇴직 시 정보자산 반납, 접근권한 조정/회수, 결과 확인 등 수립된 절차에 따라 지체 없이 이행',
                    'threatcode' => 'TC6-06',
                ),
            51 =>
                array (
                    'type' => 'Management',
                    'domain' => '인적보안',
                    'depth' => '6.2.2.1',
                    'clause' => '인사규정에 임직원이 정보보호 책임과 의무를 충실히 수행했는지 여부에 따른 상벌규정이 문서로 명시화 되어 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호 책임과 의무에 따른 상벌 규정이 불명확하여 정보보호 준수에 대한 미이행 및 위반자 처벌이 어려울 위험',
                    'protection_plan' => '인사규정에 상벌규정 명시화',
                    'threatcode' => 'TC1-10',
                ),
            52 =>
                array (
                    'type' => 'Management',
                    'domain' => '물리적 보안',
                    'depth' => '7.1.1.1',
                    'clause' => '주요 설비 및 시스템을 보호하기 위하여 물리적 보호구역을 다음과 같이 정의하고 구역별 보호대책을 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '비인가자의 물리적 접근 및 환경적 재난 발생 위험 ',
                    'protection_plan' => '주요 설비 및 시스템을 보호하기 위하여 물리적 보호구역을 정의하고 구역별 보호대책 수립/이행',
                    'threatcode' => 'TC1-02',
                ),
            53 =>
                array (
                    'type' => 'Management',
                    'domain' => '물리적 보안',
                    'depth' => '7.1.2.1',
                    'clause' => '각 보호구역의 중요도 및 특성에 따라 화재, 전력 이상 등 인재 및 자연재해 등에 대비하여 필요한 설비를 갖추고 운영절차를 수립·관리하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '보호설비 설치 및 운영 관리 미흡으로 인한 서비스 장애 발생 위험',
                    'protection_plan' => '각 보호구역의 중요도 및 특성에 따라 화재, 전력 이상 등 인재 및 자연재해 등에 대한 필요한 설비 운영',
                    'threatcode' => 'TC3-01',
                ),
            54 =>
                array (
                    'type' => 'Management',
                    'domain' => '물리적 보안',
                    'depth' => '7.1.2.2',
                    'clause' => '보호구역 내 주요 시스템 및 인력을 화재로부터 보호하기 위하여 필요한 설비를 설치하고 지속적으로 운영·관리하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '보호설비 설치 및 운영 관리 미흡으로 인한 서비스 장애 발생 위험',
                    'protection_plan' => '각 보호구역의 중요도 및 특성에 따라 화재, 전력 이상 등 인재 및 자연재해 등에 대한 필요설비 설치 운영 및 지속적인 점검 관리',
                    'threatcode' => 'TC3-01',
                ),
            55 =>
                array (
                    'type' => 'Management',
                    'domain' => '물리적 보안',
                    'depth' => '7.1.2.3',
                    'clause' => '보호구역 내 주요 시스템을 수해로부터 보호할 수 있도록 누수를 탐지할 수 있는 설비를 설치하고 지속적으로 운영·관리 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '보호설비 설치 및 운영 관리 미흡으로 인한 서비스 장애 발생 위험',
                    'protection_plan' => '각 보호구역의 중요도 및 특성에 따라 누수탐지설비 설치 운영 및 지속적인 점검 관리',
                    'threatcode' => 'TC3-01',
                ),
            56 =>
                array (
                    'type' => 'Management',
                    'domain' => '물리적 보안',
                    'depth' => '7.1.2.4',
                    'clause' => '보호구역 내 주요 정보시스템이 안정적인 환경에서 동작할 수 있도록 적절한 온도와 습도를 유지시키는 항온항습 또는 에어컨을 설치하여 운영·관리하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '보호설비 설치 및 운영 관리 미흡으로 인한 서비스 장애 발생 위험',
                    'protection_plan' => '각 보호구역의 중요도 및 특성에 따라 항온항습설비 설치 운영 및 지속적인 점검 관리',
                    'threatcode' => 'TC3-02',
                ),
            57 =>
                array (
                    'type' => 'Management',
                    'domain' => '물리적 보안',
                    'depth' => '7.1.2.5',
                    'clause' => '보호구역 내 주요 시스템이 전력을 안정적으로 공급받을 수 있도록 시설을 설치 하고 지속적으로 운영·관리하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '보호설비 설치 및 운영 관리 미흡으로 인한 서비스 장애 발생 위험',
                    'protection_plan' => '각 보호구역의 중요도 및 특성에 따라 전력공급설비(UPS, 비상발전기, 전압유지기 등) 설치 운영 및 지속적인 점검 관리',
                    'threatcode' => 'TC3-03',
                ),
            58 =>
                array (
                    'type' => 'Management',
                    'domain' => '물리적 보안',
                    'depth' => '7.1.2.6',
                    'clause' => '화재 등의 재해 발생 시 임직원이 대피절차에 따라 안전하게 대피할 수 있도록 비상벨, 비상등, 비상통로 안내표지 등을 설치하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '보호설비 설치 및 운영 관리 미흡으로 인한 서비스 장애 발생 위험',
                    'protection_plan' => '화재 및 재난대피 절차 마련 및 비상벨, 비상등, 비상로 안내표지 등 설치',
                    'threatcode' => 'TC3-01',
                ),
            59 =>
                array (
                    'type' => 'Management',
                    'domain' => '물리적 보안',
                    'depth' => '7.1.2.7',
                    'clause' => '주요 정보시스템을 외부 집적정보통신시설(IDC)에 위탁 운영하는 경우, 물리적보호에 필요한 요구사항을 계약서에 반영하고 운영상태를 주기적으로 검토하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보통신시설(IDC) 위탁 운영 계약에 보안요구사항이 반영되어 있지 않아, 정보시스템에 대한 손실 및 장애발생 등 사고가 발생하거나 사고 발생 시 책임이 모호할 위험',
                    'protection_plan' => '계약서에 IDC 운영 안정성 확보를 위한 내용 반영 및 운영 현황의 주기적인 점검',
                    'threatcode' => 'TC1-02',
                ),
            60 =>
                array (
                    'type' => 'Management',
                    'domain' => '물리적 보안',
                    'depth' => '7.1.3.1',
                    'clause' => '정보시스템 도입, 유지보수 등으로 보호구역 내 작업이 필요한 경우 작업신청 및 수행 관련 절차를 수립하고 작업기록을 주기적으로 검토하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '보호구역 내 작업 통제 미흡으로 인한 서비스 장애 발생 위험',
                    'protection_plan' => '보호구역 내 작업기록 주기적 검토',
                    'threatcode' => 'TC1-02',
                ),
            61 =>
                array (
                    'type' => 'Management',
                    'domain' => '물리적 보안',
                    'depth' => '7.1.4.1',
                    'clause' => '각 보호구역별 내·외부자 출입통제 절차를 마련하고 출입 가능한 임직원 현황을 관리하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '비인가자의 접근에 따른 정보시스템 분실, 도난, 파괴 등에 따른 장애 발생 위험 ',
                    'protection_plan' => '각 보호구역별 내/외부자 출입통제 절차를 마련하고 출입 가능한 임직원 현황 관리',
                    'threatcode' => 'TC6-17',
                ),
            62 =>
                array (
                    'type' => 'Management',
                    'domain' => '물리적 보안',
                    'depth' => '7.1.4.2',
                    'clause' => '각 보호구역에 대한 내·외부자 출입기록을 일정기간 보존하고 출입기록 및 출입권한을 주기적으로 검토하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '비인가자의 접근에 따른 정보시스템 분실, 도난, 파괴 등에 따른 장애 발생 위험 ',
                    'protection_plan' => '각 보호구역에 대한 내/외부자 출입기록을 일정기간 보존하고 출입기록 및 출입권한 주기적 검토',
                    'threatcode' => 'TC6-17',
                ),
            63 =>
                array (
                    'type' => 'Management',
                    'domain' => '물리적 보안',
                    'depth' => '7.1.4.3',
                    'clause' => '보호구역 내 중요한 장비, 문서, 매체 등에 대한 반출입 관련 정책 및 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '장비, 문서, 매체 미승인 반출입으로 인한 정보시스템 분실, 도난 등 보안사고 발생 위험',
                    'protection_plan' => '보호구역 내 중요한 장비, 문서, 매체 등에 대한 반출입 관련 정책 및 절차 수립/이행',
                    'threatcode' => 'TC6-17',
                ),
            64 =>
                array (
                    'type' => 'Management',
                    'domain' => '물리적 보안',
                    'depth' => '7.1.5.1',
                    'clause' => '노트북, 패드 등 모바일 기기 반출입 시 반출입 통제 및 보안사고 예방 절차를 수립하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '노트북 등 모바일 기기 미승인 반출입을 통한 중요정보 유출, 내부망 악성코드 감염 등의 보안사고 발생 위험',
                    'protection_plan' => '노트북, 패드 등 모바일 기기 반출입 시 반출입 통제 및 보안사고 예방 절차 수립',
                    'threatcode' => 'TC6-12',
                ),
            65 =>
                array (
                    'type' => 'Management',
                    'domain' => '물리적 보안',
                    'depth' => '7.1.5.2',
                    'clause' => '모바일 기기 반출입 절차에 따라 반출입대장을 작성하고 관리자는 주기적으로 모바일 기기 반출입 이력을 점검하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '노트북 등 모바일 기기 미승인 반출입을 통한 중요정보 유출, 내부망 악성코드 감염 등의 보안사고 발생 위험',
                    'protection_plan' => '모바일 기기 반출입 절차에 따라 반출입대장을 작성하고 관리자는 주기적으로 모바일 기기 반출입 이력 점검',
                    'threatcode' => 'TC6-12',
                ),
            66 =>
                array (
                    'type' => 'Management',
                    'domain' => '물리적 보안',
                    'depth' => '7.2.1.1',
                    'clause' => '전력 및 통신케이블이 외부로부터의 물리적 손상이나 전기적 영향(예 : 간섭)으로부터 보호되고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '전력 및 통신케이블의 물리적 손상, 전기 간섭 등으로 인한 서비스 장애 발생 위험',
                    'protection_plan' => '데이터를 송수신하는 통신케이블이나 전력을 공급하는 전력 케이블은 손상을 입지 않도록 보호',
                    'threatcode' => 'TC3-04',
                ),
            67 =>
                array (
                    'type' => 'Management',
                    'domain' => '물리적 보안',
                    'depth' => '7.2.2.1',
                    'clause' => '정보시스템의 특성을 고려하여 배치 장소를 분리하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '장애 또는 보안사고 발생 시 대응이 지연될 위험',
                    'protection_plan' => '정보시스템의 특성을 고려하여 배치 장소 분리',
                    'threatcode' => 'TC1-04',
                ),
            68 =>
                array (
                    'type' => 'Management',
                    'domain' => '물리적 보안',
                    'depth' => '7.2.2.2',
                    'clause' => '정보시스템의 실제 물리적 위치를 손쉽게 확인할 수 있는 방안(배치도, 자산목록 등)을 마련하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '장애 또는 보안사고 발생 시 대응이 지연될 위험',
                    'protection_plan' => '정보시스템의 실제 물리적 위치를 손쉽게 확인할 수 있는 방안(배치도, 자산목록 등) 마련',
                    'threatcode' => 'TC1-11',
                ),
            69 =>
                array (
                    'type' => 'Management',
                    'domain' => '물리적 보안',
                    'depth' => '7.3.1.1',
                    'clause' => '개인업무 환경에서의 정보보호에 대한 정책을 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인PC 등에 대한 개인업무 환경 보안 관리 부주의에 의한 정보유출 등의 보안사고 발생 위험',
                    'protection_plan' => '개인업무 환경에서의 정보보호에 대한 정책 수립/이행',
                    'threatcode' => 'TC1-02',
                ),
            70 =>
                array (
                    'type' => 'Management',
                    'domain' => '물리적 보안',
                    'depth' => '7.3.1.2',
                    'clause' => '개인업무 환경에서의 정보보호 준수여부를 주기적으로 점검하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인PC 등에 대한 개인업무 환경 보안 관리 부주의에 의한 정보유출 등의 보안사고 발생 위험',
                    'protection_plan' => '개인업무 환경에서의 정보보호 준수여부를 주기적으로 점검',
                    'threatcode' => 'TC4-01',
                ),
            71 =>
                array (
                    'type' => 'Management',
                    'domain' => '물리적 보안',
                    'depth' => '7.3.2.1',
                    'clause' => '팩스, 복사기, 프린터, 공용 PC, 파일서버, 문서고 등 공용으로 사용하는 사무장비 및 시설에 대한 보호대책을 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '공용업무 환경 보안관리 부주의에 의한 정보유출 등의 보안사고 발생 위험',
                    'protection_plan' => '팩스, 복사기, 프린터, 공용 PC, 파일서버, 문서고 등 공용으로 사용하는 사무장비 및 시설에 대한 보호대책 수립/이행',
                    'threatcode' => 'TC4-01',
                ),
            72 =>
                array (
                    'type' => 'Management',
                    'domain' => '물리적 보안',
                    'depth' => '7.3.2.2',
                    'clause' => '공용업무 환경 보안에 대한 관리자를 지정하고 준수여부를 주기적으로 검토하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '공용업무 환경 보안관리 부주의에 의한 정보유출 등의 보안사고 발생 위험',
                    'protection_plan' => '공용업무 환경 보안에 대한 관리자를 지정하고 준수여부 주기적으로 검토',
                    'threatcode' => 'TC4-01',
                ),
            73 =>
                array (
                    'type' => 'Management',
                    'domain' => '시스템 개발보안',
                    'depth' => '8.1.1.1',
                    'clause' => '신규 정보시스템 개발 및 기존 시스템 변경 시 법적 요구사항을 포함한 보안요구 사항을 정의하고 설계 단계에서부터 반영하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개발에 대한 보안요구사항의 정의 및 업무 절차가 미흡하여 신규 정보시스템 개발 또는 기존 시스템 변경에 따른 취약점 발생 위험',
                    'protection_plan' => '신규 정보시스템 개발 및 기존 시스템 변경 시 법적 요구사항을 포함한 보안 요구사항 정의',
                    'threatcode' => 'TC1-04',
                ),
            74 =>
                array (
                    'type' => 'Management',
                    'domain' => '시스템 개발보안',
                    'depth' => '8.1.2.1',
                    'clause' => '정보시스템 설계 시 사용자 인증에 대한 보안 요구사항을 정의하여 반영하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '사용자 식별, 인증 미흡으로 인한 비인가자의 접근 등 보안사고 발생 위험',
                    'protection_plan' => '정보시스템 설계 시 사용자 인증에 대한 보안 요구사항 정의 및 반영',
                    'threatcode' => 'TC2-02',
                ),
            75 =>
                array (
                    'type' => 'Management',
                    'domain' => '시스템 개발보안',
                    'depth' => '8.1.2.2',
                    'clause' => '중요정보에 대하여 암호화가 요구되는 경우 법적 요구사항을 고려한 적절한 암호화 방법을 사용하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '중요정보(개인정보, 인증정보 등)에 대한 암호화가 적용되지 않아 정보유출 등 보안사고 발생 위험',
                    'protection_plan' => '중요정보에 대하여 암호화가 요구되는 경우 법적 요구사항을 고려한 적절한 암호화 방법 사용',
                    'threatcode' => 'TC4-02',
                ),
            76 =>
                array (
                    'type' => 'Management',
                    'domain' => '시스템 개발보안',
                    'depth' => '8.1.2.3',
                    'clause' => '개인정보 및 인증정보 등의 중요한 정보 전송 시 SSL 보안서버 구축 등을 통하여 암호화하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '중요정보(개인정보, 인증정보 등)에 대한 암호화가 적용되지 않아 정보유출 등 보안사고 발생 위험',
                    'protection_plan' => '개인정보 및 인증정보 등의 중요한 정보 전송 시 SSL보안서버 구축 등을 통하여 암호화',
                    'threatcode' => 'TC4-02',
                ),
            77 =>
                array (
                    'type' => 'Management',
                    'domain' => '시스템 개발보안',
                    'depth' => '8.1.3.1',
                    'clause' => '정보시스템 설계 시 보안관련 로그, 감사증적 등을 확보할 수 있는 기능을 반영하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '보안로그 기록 및 보관 관리가 미흡하여 침해사고 발생 시 대응 및 분석이 어려울 위험',
                    'protection_plan' => '정보시스템 설계 시 보안관련 로그, 감사증적 등을 확보할 수 있는 기능 반영',
                    'threatcode' => 'TC7-01',
                ),
            78 =>
                array (
                    'type' => 'Management',
                    'domain' => '시스템 개발보안',
                    'depth' => '8.1.3.2',
                    'clause' => '정보시스템 설계 시 보안로그를 보호하기 위한 대책을 마련하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '보안로그 기록 및 보관 관리가 미흡하여 침해사고 발생 시 대응 및 분석이 어려울 위험',
                    'protection_plan' => '정보시스템 설계 시 보안로그를 보호하기 위한 대책 마련',
                    'threatcode' => 'TC7-02',
                ),
            79 =>
                array (
                    'type' => 'Management',
                    'domain' => '시스템 개발보안',
                    'depth' => '8.1.4.1',
                    'clause' => '정보시스템 설계 시 시스템 사용자의 업무 목적, 기능, 중요도에 따라 접근권한이 부여될 수 있도록 접근권한 부여 기능을 보안 요구사항 및 설계에 반영하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '업무 목적에 따른 접근권한이 분리되지 않아 자원에 대한 침탈 및 오남용 발생 위험',
                    'protection_plan' => '접근권한 부여 기능을 보안 요구사항 및 설계에 반영',
                    'threatcode' => 'TC6-06',
                ),
            80 =>
                array (
                    'type' => 'Management',
                    'domain' => '시스템 개발보안',
                    'depth' => '8.2.1.1',
                    'clause' => '정보시스템의 안전한 구현을 위한 코딩 표준이 마련되어야 하며 이에 따라 구현하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '기술적 취약성에 대한 상시 점검 및 관리가 미흡하여 취약점을 이용한 정보시스템 침해사고 발생 위험',
                    'protection_plan' => '정보시스템의 안전한 구현을 위한 코딩 표준 마련',
                    'threatcode' => 'TC6-16',
                ),
            81 =>
                array (
                    'type' => 'Management',
                    'domain' => '시스템 개발보안',
                    'depth' => '8.2.1.2',
                    'clause' => '기술적 보안취약점 점검을 하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '기술적 취약성에 대한 상시 점검 및 관리가 미흡하여 취약점을 이용한 정보시스템 침해사고 발생 위험',
                    'protection_plan' => '기술적 보안취약점 점검 수행',
                    'threatcode' => 'TC6-16',
                ),
            82 =>
                array (
                    'type' => 'Management',
                    'domain' => '시스템 개발보안',
                    'depth' => '8.2.1.3',
                    'clause' => '구현된 기능이 사전 정의된 보안 요구사항을 충족하는지 시험을 수행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '기술적 취약성에 대한 상시 점검 및 관리가 미흡하여 취약점을 이용한 정보시스템 침해사고 발생 위험',
                    'protection_plan' => '구현된 기능이 사전 정의된 보안 요구사항의 충족 시험 수행',
                    'threatcode' => 'TC6-16',
                ),
            83 =>
                array (
                    'type' => 'Management',
                    'domain' => '시스템 개발보안',
                    'depth' => '8.2.2.1',
                    'clause' => '정보시스템의 개발 및 시험 시스템을 운영 시스템과 분리하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개발/테스트 시스템과 운영시스템이 분리되지 않아 테스트 용도의 어플리케이션에 내재된 취약점이 악용한 공격이 발생되거나 개발 상의 오류 등이 시스템에 영향을 미쳐 장애가 발생할 위험',
                    'protection_plan' => '정보시스템의 개발 및 시험 시스템을 운영시스템과 분리',
                    'threatcode' => 'TC1-05',
                ),
            84 =>
                array (
                    'type' => 'Management',
                    'domain' => '시스템 개발보안',
                    'depth' => '8.2.3.1',
                    'clause' => '운영환경으로의 이관 절차를 수립·이행 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '운영환경으로 이관 작업에 대한 관리가 미흡하여 실수 또는 고의적인 변경, 서비스 장애 등 보안사고가 발생할 위험',
                    'protection_plan' => '운영환경으로의 이관 절차를 수립/이행',
                    'threatcode' => 'TC1-02',
                ),
            85 =>
                array (
                    'type' => 'Management',
                    'domain' => '시스템 개발보안',
                    'depth' => '8.2.3.2',
                    'clause' => '운영환경으로의 이관 시 발생할 수 있는 문제 대응 방안을 마련하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '운영환경으로 이관 작업에 대한 관리가 미흡하여 실수 또는 고의적인 변경, 서비스 장애 등 보안사고가 발생할 위험',
                    'protection_plan' => '운영환경으로의 이관 시 발생할 수 있는 문제 대응 방안을 마련',
                    'threatcode' => 'TC1-02',
                ),
            86 =>
                array (
                    'type' => 'Management',
                    'domain' => '시스템 개발보안',
                    'depth' => '8.2.3.3',
                    'clause' => '운영환경에는 서비스 실행에 필요한 파일만을 설치하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '운영환경으로 이관 작업에 대한 관리가 미흡하여 실수 또는 고의적인 변경, 서비스 장애 등 보안사고가 발생할 위험',
                    'protection_plan' => '운영환경에는 서비스 실행에 필요한 파일만 설치',
                    'threatcode' => 'TC1-02',
                ),
            87 =>
                array (
                    'type' => 'Management',
                    'domain' => '시스템 개발보안',
                    'depth' => '8.2.4.1',
                    'clause' => '시스템 시험 과정에서 실제 운영 데이터 사용을 제한하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '시스템 시험 과정에서 실 운영데이터 사용에 대한 제한 및 사용 절차 수립이 미흡하여 실 운영데이터가 유출될 위험',
                    'protection_plan' => '시스템 시험 과정에서 실제 운영 데이터 사용 제한',
                    'threatcode' => 'TC1-05',
                ),
            88 =>
                array (
                    'type' => 'Management',
                    'domain' => '시스템 개발보안',
                    'depth' => '8.2.4.2',
                    'clause' => '불가피하게 운영데이터를 시험 환경에서 사용할 경우 책임자 승인 등의 인가 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '시스템 시험 과정에서 실 운영데이터 사용에 대한 제한 및 사용 절차 수립이 미흡하여 실 운영데이터가 유출될 위험',
                    'protection_plan' => '불가피하게 운영데이터를 시험 환경에서 사용할 경우 책임자 승인 등의 인가 절차 수립/이행',
                    'threatcode' => 'TC1-02',
                ),
            89 =>
                array (
                    'type' => 'Management',
                    'domain' => '시스템 개발보안',
                    'depth' => '8.2.5.1',
                    'clause' => '소스 프로그램에 대한 변경이력을 관리하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '소스프로그램에 대한 변경 및 보관 관리가 미흡하여 소스프로그램 변조, 장애 등 보안사고 발생 위험',
                    'protection_plan' => '소스 프로그램에 대한 변경이력 관리',
                    'threatcode' => 'TC1-04',
                ),
            90 =>
                array (
                    'type' => 'Management',
                    'domain' => '시스템 개발보안',
                    'depth' => '8.2.5.2',
                    'clause' => '시스템 운영 장애 등 비상시를 대비하여 이전 시스템의 소스 프로그램을 보관하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '소스프로그램에 대한 변경 및 보관 관리가 미흡하여 소스프로그램 변조, 장애 등 보안사고 발생 위험',
                    'protection_plan' => '시스템 운영 장애 등 비상시를 대비하여 이전 시스템의 소스 프로그램 보관',
                    'threatcode' => 'TC3-06',
                ),
            91 =>
                array (
                    'type' => 'Management',
                    'domain' => '시스템 개발보안',
                    'depth' => '8.2.5.3',
                    'clause' => '비인가된 자의 소스프로그램의 접근을 통제하기 위하여 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '소스프로그램에 대한 변경 및 보관 관리가 미흡하여 소스프로그램 변조, 장애 등 보안사고 발생 위험',
                    'protection_plan' => '비인가된 자의 소스프로그램의 접근을 통제하기 위하여 절차 수립/이행',
                    'threatcode' => 'TC5-02',
                ),
            92 =>
                array (
                    'type' => 'Management',
                    'domain' => '시스템 개발보안',
                    'depth' => '8.3.1.1',
                    'clause' => '정보시스템 개발을 외주 위탁하는 경우 개발 시 준수해야 할 보안 요구사항을 제안요청서에 기재하고 계약 시에 반영하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '외주 위탁 개발에 대한 계약에 보안요구사항이 반영되어 있지 않아, 정보시스템에 대한 손실 및 장애발생 등 사고가 발생하거나 사고 발생 시 책임이 모호할 위험',
                    'protection_plan' => '정보시스템 개발을 외주 위탁하는 경우 개발 시 준수해야 할 보안 요구사항을 제안요청서에 기재하고 계약 시 반영',
                    'threatcode' => 'TC1-11',
                ),
            93 =>
                array (
                    'type' => 'Management',
                    'domain' => '시스템 개발보안',
                    'depth' => '8.3.1.2',
                    'clause' => '외주 위탁업체가 계약서에 명시된 보안요구사항을 준수하는 지 여부를 관리·감독하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '외주 위탁 개발에 대한 보안코딩, 보안준수 점검 등 보안요구사항의 정의 및 보안관리 활동이 미흡하여 개발 시스템에 대한 취약점 관리가 어려울 위험',
                    'protection_plan' => '외주 위탁업체가 계약서에 명시된 보안요구사항을 준수하는 지 여부 관리/감독',
                    'threatcode' => 'TC1-01',
                ),
            94 =>
                array (
                    'type' => 'Management',
                    'domain' => '시스템 개발보안',
                    'depth' => '8.3.1.3',
                    'clause' => '정보시스템 개발 완료 후 SW 보안취약점 제거여부 진단, SW 보안취약점 발견사항 조치 여부 등을 확인 후 검수·인수하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '외주 위탁 개발에 대한 보안코딩, 보안준수 점검 등 보안요구사항의 정의 및 보안관리 활동이 미흡하여 개발 시스템에 대한 취약점 관리가 어려울 위험',
                    'protection_plan' => '정보시스템 개발 완료 후 SW 보안취약점 제거여부 진단, SW 보안취약점 발견사항 조치 여부 등을 확인 후 검수/인수',
                    'threatcode' => 'TC6-16',
                ),
            95 =>
                array (
                    'type' => 'Management',
                    'domain' => '암호통제',
                    'depth' => '9.1.1.1',
                    'clause' => '개인정보 등 중요정보의 전송 및 저장 시 안전한 보호를 위한 암호정책을 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보 및 중요정보 저장/전송에 대한 명시적인 기준 수립 및 암호화 적용이 미흡하여, 중요정보가 유출되거나 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보 등 중요정보의 전송 및 저장 시 안전한 보호를 위한 암호 정책 수립/이행',
                    'threatcode' => 'TC1-10',
                ),
            96 =>
                array (
                    'type' => 'Management',
                    'domain' => '암호통제',
                    'depth' => '9.1.1.2',
                    'clause' => '서비스 이용자 및 내부 사용자(임직원 등) 비밀번호 저장 시 암호화 정책을 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보 및 중요정보 저장/전송에 대한 명시적인 기준 수립 및 암호화 적용이 미흡하여, 중요정보가 유출되거나 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '서비스 이용자 및 내부 사용자(임직원 등) 비밀번호 저장 시 암호화 정책을 수립/이행',
                    'threatcode' => 'TC4-07',
                ),
            97 =>
                array (
                    'type' => 'Management',
                    'domain' => '암호통제',
                    'depth' => '9.1.1.3',
                    'clause' => '중요정보 저장 시 암호화 정책을 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보 및 중요정보 저장/전송에 대한 명시적인 기준 수립 및 암호화 적용이 미흡하여, 중요정보가 유출되거나 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '중요정보 저장 시 암호화 정책 수립/이행',
                    'threatcode' => 'TC4-07',
                ),
            98 =>
                array (
                    'type' => 'Management',
                    'domain' => '암호통제',
                    'depth' => '9.1.1.4',
                    'clause' => '정보통신망을 통해 중요정보를 송·수신 하는 경우 암호화 정책을 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보 및 중요정보 저장/전송에 대한 명시적인 기준 수립 및 암호화 적용이 미흡하여, 중요정보가 유출되거나 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '정보통신망을 통해 중요정보를 송/수신 하는 경우 암호화 정책 수립/이행',
                    'threatcode' => 'TC4-02',
                ),
            99 =>
                array (
                    'type' => 'Management',
                    'domain' => '암호통제',
                    'depth' => '9.1.1.5',
                    'clause' => '조직 내 중요정보를 개인용 컴퓨터(PC등)에 저장할 경우 암호화 정책을 수립 ·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인PC에 저장된 중요정보 문서 등에 대한 암호화 적용 관리가 미흡하여 정보유출 사고가 발생할 위험',
                    'protection_plan' => '조직 내 중요정보를 개인용 컴퓨터(PC 등)에 저장할 경우 암호화 정책 수립/이행',
                    'threatcode' => 'TC4-01',
                ),
            100 =>
                array (
                    'type' => 'Management',
                    'domain' => '암호통제',
                    'depth' => '9.2.1.1',
                    'clause' => '암호키 생성, 이용, 보관, 배포, 복구, 파기 등에 관한 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '암호키 분실 및 비인가자 접근으로 인한 변조 및 중요정보 유출 위험',
                    'protection_plan' => '암호키 생성, 이용, 보관, 배포, 복구, 파기 등에 관한 절차를 수립/이행',
                    'threatcode' => 'TC1-10',
                ),
            101 =>
                array (
                    'type' => 'Management',
                    'domain' => '암호통제',
                    'depth' => '9.2.1.2',
                    'clause' => '암호키 생성 후 암호키는 별도의 안전한 장소에 소산 보관하고 암호키 사용에 관한 접근권한 부여를 최소화하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '암호키 분실 및 비인가자 접근으로 인한 변조 및 중요정보 유출 위험',
                    'protection_plan' => '암호키 생성 후 암호키는 별도의 안전한 장소에 소산 보관하고 암호키 사용에 관한 접근권한 부여 최소화',
                    'threatcode' => 'TC6-07',
                ),
            102 =>
                array (
                    'type' => 'Management',
                    'domain' => '암호통제',
                    'depth' => '9.2.1.3',
                    'clause' => '암호키 변경에 관한 정책을 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '암호키 분실 및 비인가자 접근으로 인한 변조 및 중요정보 유출 위험',
                    'protection_plan' => '암호키 변경에 관한 정책 수립/이행',
                    'threatcode' => 'TC1-04',
                ),
            103 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.1.1.1',
                    'clause' => '접근 통제영역을 정의하고 접근 통제영역 별로 접근통제 정책을 수립하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '접근통제 관련 정책, 절차의 수립이 미흡하여 인가되지 않은 사용자 또는 외부인으로부터의 정보탈취 및 서비스 장애유발 위험',
                    'protection_plan' => '접근 통제영역을 정의하고 접근 통제영역별로 접근통제 정책 수립',
                    'threatcode' => 'TC1-02',
                ),
            104 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.2.1.1',
                    'clause' => '정보시스템의 사용자 계정 등록·삭제(비 활성화) 및 접근권한 등록·변경·삭제 에 관한 공식적인 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템에 등록된 사용자 계정 및 접근권한 부여 현황에 대한 관리가 미흡하여, 권한의 오남용에 따른 보안사고 발생 및 책임추적성의 확보가 어려울 위험',
                    'protection_plan' => '정보시스템의 사용자 계정 등록/삭제(비활성화) 및 접근권한 등록/변경/삭제에 관한 공식적인 절차 수립/이행',
                    'threatcode' => 'TC1-02',
                ),
            105 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.2.1.2',
                    'clause' => '정보시스템의 사용자 계정 생성 및 변경 시 직무별 접근권한 분류 체계 따라 업무상 필요한 최소한의 권한만을 부여하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템에 등록된 사용자 계정 및 접근권한 부여 현황에 대한 관리가 미흡하여, 권한의 오남용에 따른 보안사고 발생 및 책임추적성의 확보가 어려울 위험',
                    'protection_plan' => '정보시스템의 사용자 계정 생성 및 변경 시 직무별 접근권한 분류 체계 따라 업무상 필요한 최소한의 권한만을 부여',
                    'threatcode' => 'TC6-06',
                ),
            106 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.2.1.3',
                    'clause' => '사용자 계정 등록·삭제(비활성화) 및 접근권한 등록·변경·삭제 권한을 한 사람에게 집중되지 않도록 하고 불가피한 경우, 접근권한 활동의 적정성을 주기적으로 검토하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템에 등록된 사용자 계정 및 접근권한 부여 현황에 대한 관리가 미흡하여, 권한의 오남용에 따른 보안사고 발생 및 책임추적성의 확보가 어려울 위험',
                    'protection_plan' => '사용자 접근권한 변경이력 기록하고, 사용자 계정 발급/접근권한 부여 활동의 적정성을 주기적으로 검토',
                    'threatcode' => 'TC1-01',
                ),
            107 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.2.2.1',
                    'clause' => '관리자 및 특수권한은 최소한의 인원에게만 부여하고 권한 부여 시 책임자 승인절차를 수립하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '관리자 및 특수 권한에 대한 관리가 미흡하여 권한의 오남용에 따른 보안사고 발행 위험',
                    'protection_plan' => '관리자 및 특수 권한은 최소한의 인원에게만 부여하고 권한 부여 시 책임자 승인 절차 수립',
                    'threatcode' => 'TC1-02',
                ),
            108 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.2.2.2',
                    'clause' => '관리자 권한 및 특수 권한을 식별하여 별도 목록으로 관리하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '관리자 및 특수 권한에 대한 관리가 미흡하여 권한의 오남용에 따른 보안사고 발행 위험',
                    'protection_plan' => '정보시스템 및 중요정보에 대한 접근권한 검토 기준, 검토주체, 검토방법, 주기 등을 정하여 정기적 검토 이행',
                    'threatcode' => 'TC1-04',
                ),
            109 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.2.2.3',
                    'clause' => '외부자에게 부여하는 계정은 한시적으로 부여하고 사용이 끝난 후에는 즉시 삭제 또는 정지하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '관리자 및 특수 권한에 대한 관리가 미흡하여 권한의 오남용에 따른 보안사고 발행 위험',
                    'protection_plan' => '접근권한의 검토 결과 접근권한 오남용 등의 이상징후가 발견된 경우 그에 따른 조치절차 수립/이행',
                    'threatcode' => 'TC6-06',
                ),
            110 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.2.3.1',
                    'clause' => '직무별 또는 역할별 정보시스템 접근권한을 정의한 접근권한 분류 체계를 수립하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '직무에 따른 접근권한 분류체계의 정의가 미흡하여 불필요 권한 부여 등에 따른 권한 오남용 위험',
                    'protection_plan' => '직무별 또는 역할별 정보시스템 접근권한을 정의한 접근권한 분류 체계 수립',
                    'threatcode' => 'TC1-02',
                ),
            111 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.2.3.2',
                    'clause' => '정보시스템 및 중요정보에 대한 접근권한 검토 기준, 검토주체, 검토방법, 주기 등을 정하여 정기적 검토를 이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템에 대한 계정 및 권한 현황 관리와 주기적인 검토 활동이 미흡하여 미사용 계정 및 퇴직자 계정, 잘못된 권한 부여 등이 존재할 위험',
                    'protection_plan' => '정보시스템 및 중요정보에 대한 접근권한 검토 기준, 검토주체, 검토방법, 주기 등을 정하여 정기적 검토 이행',
                    'threatcode' => 'TC1-01',
                ),
            112 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.2.3.3',
                    'clause' => '접근권한의 검토 결과 접근권한 오남용 등의 이상징후가 발견된 경우 그에 따른 조치절차를 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템에 대한 계정 및 권한 현황 관리와 주기적인 검토 활동이 미흡하여 미사용 계정 및 퇴직자 계정, 잘못된 권한 부여 등이 존재할 위험',
                    'protection_plan' => '접근권한의 검토 결과 접근권한 오남용 등의 이상징후가 발견된 경우 그에 따른 조치절차 수립/이행',
                    'threatcode' => 'TC1-01',
                ),
            113 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.3.1.1',
                    'clause' => '정보시스템에 대한 접근은 사용자 인증, 로그인 횟수 제한, 불법 로그인 시도 경고 등 안전한 사용자 인증 절차에 의해 통제 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템 접근에 대한 인증 절차 적용이 미흡하여 비인가자에 의한 시스템 접근 등 보안사고가 발생할 위험',
                    'protection_plan' => '정보시스템에 대한 접근은 사용자 인증, 로그인 횟수 제한, 불법 로그인 시도 경고 등 안전한 사용자 인증 절차에 의해 통제',
                    'threatcode' => 'TC2-02',
                ),
            114 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.3.1.2',
                    'clause' => '싱글사인온 등의 인증 방법을 사용하는 경우 이에 대한 별도의 보호대책을 수립하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '싱글사인온에 대한 인증 절차 적용이 미흡하여 계정 노출 등에 의하여 중요 서비스에 대한 보안사고 발생 위험',
                    'protection_plan' => '싱글사인온 등의 인증 방법을 사용하는 경우 이에 대한 별도의 보호대책 수립',
                    'threatcode' => 'TC2-03',
                ),
            115 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.3.2.1',
                    'clause' => '정보시스템에서 사용자를 유일하게 구분할 수 있는 식별자를 할당하고 추측 가능한 식별자의 사용을 제한하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '사용자 계정 및 공용 계정 사용에 대한 통제가 미흡하여 보안사고 발생 시 작업내역 분석 및 추적이 불가능할 위험',
                    'protection_plan' => '정보시스템에서 사용자를 유일하게 구분할 수 있는 식별자를 할당하고 추측 가능한 식별자의 사용 제한',
                    'threatcode' => 'TC7-01',
                ),
            116 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.3.2.2',
                    'clause' => '동일한 식별자를 공유하여 사용하는 경우 그 사유와 타당성을 검토하고 책임자의 승인을 받고 있는가 ?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '사용자 계정 및 공용 계정 사용에 대한 통제가 미흡하여 보안사고 발생 시 작업내역 분석 및 추적이 불가능할 위험',
                    'protection_plan' => '동일한 식별자를 공유하여 사용하는 경우 그 사유와 타당성을 검토하고 책임자의 승인',
                    'threatcode' => 'TC7-01',
                ),
            117 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.3.3.1',
                    'clause' => '정보시스템 및 정보보호시스템에 대한 안전한 사용자 패스워드 관리절차를 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템 패스워드 관리에 대한 명확한 기준 부재로 인하여 패스워드 관리가 소홀해 지거나 비인가 시스템 접근이 발생할 위험',
                    'protection_plan' => '정보시스템 사용자 패스워드에 대한 정책 적용 관리',
                    'threatcode' => 'TC6-03',
                ),
            118 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.3.3.2',
                    'clause' => '정보시스템 관리자 패스워드는 별도 목록 (문서 또는 파일)으로 유지·관리하고 비밀등급에 준하는 보호대책을 적용하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템 패스워드 관리에 대한 명확한 기준 부재로 인하여 패스워드 관리가 소홀해 지거나 비인가 시스템 접근이 발생할 위험',
                    'protection_plan' => '정보시스템 관리자 패스워드의 별도 목록화 및 안전한 보관 관리',
                    'threatcode' => 'TC1-04',
                ),
            119 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.3.3.3',
                    'clause' => '패스워드 관리 책임이 사용자에게 있음을 주지시키고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템 패스워드 관리에 대한 명확한 기준 부재로 인하여 패스워드 관리가 소홀해 지거나 비인가 시스템 접근이 발생할 위험',
                    'protection_plan' => '교육, 안내 등을 통해 사용자 계정 및 패스워드 관리 절차에 대해 공지하고 그에 따른 책임이 사용자(임직원)에게 있음을 주지',
                    'threatcode' => 'TC1-09',
                ),
            120 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.3.4.1',
                    'clause' => '고객, 회원 등 서비스 이용자가 접근하는 정보시스템 또는 웹 서비스의 안전한 이용을 위하여 계정 및 패스워드 관리절차를 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '고객, 회원 등 이용자 패스워드 관리 기준이 미흡하여 이용자 패스워드가 노출되거나 크랙 등 공격이 발생할 위험',
                    'protection_plan' => '고객, 회원 등 서비스 이용자가 접근하는 정보시스템 또는 웹 서비스의 안전한 이용을 위하여 계정 및 패스워드 관리절차 수립/이행',
                    'threatcode' => 'TC1-04',
                ),
            121 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.3.4.2',
                    'clause' => '이용자 계정 및 패스워드 관리절차 관련내용을 홈페이지 또는 메일 등을 통하여 사용자가 쉽게 확인하고 이해할 수 있도록 공지하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '고객, 회원 등 이용자 패스워드 관리 기준이 미흡하여 이용자 패스워드가 노출되거나 크랙 등 공격이 발생할 위험',
                    'protection_plan' => '이용자 계정 및 패스워드 관리절차 관련 내용을 홈페이지 또는 메일 등을 통하여 사용자가 쉽게 확인하고 이해할 수 있도록 공지',
                    'threatcode' => 'TC1-04',
                ),
            122 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.4.1.1',
                    'clause' => '접근통제 정책에 따라 인가된 사용자만이 네트워크에 접근할 수 있도록 네트워크 식별자(IP) 할당 등을 통제하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '내부 네트워크 접근 통제가 미흡하여 외부 또는 불필요한 내부사용자의 중요시스템 접근이 가능할 위험',
                    'protection_plan' => '접근통제 정책에 따라 인가된 사용자만이 네트워크에 접근할 수 있도록 네트워크 식별자(IP) 할당 등을 통제',
                    'threatcode' => 'TC6-11',
                ),
            123 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.4.1.2',
                    'clause' => '네트워크 구성 변경 시에는 공식적인 변경관리 절차를 준수하고 자체적인 보안성 검토를 수행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '네트워크 구성 및 설정 변경에 대한 변경 통제 관리가 미흡하여 네트워크 구성 및 설정 상의 취약점으로 인한 비인가 시스템 접근이 가능할 위험',
                    'protection_plan' => '네트워크 구성 변경 시에는 공식적인 변경 관리 절차를 준수하고 자체적인 보안성 검토 수행',
                    'threatcode' => 'TC6-11',
                ),
            124 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.4.1.3',
                    'clause' => '네트워크를 구성하는 주요자산 목록, 구성도, IP 현황을 최신으로 유지하고 안전하게 관리하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '네트워크 구성 및 IP 현황 등에 대한 관리가 미흡하여 네트워크 정보 노출, 비인가 시스템 접근 등 보안사고 발생 위험',
                    'protection_plan' => '네트워크를 구성하는 주요자산 목록, 구성도, IP 현황을 최신으로 유지하고 안전하게 관리',
                    'threatcode' => 'TC1-04',
                ),
            125 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.4.1.4',
                    'clause' => '내부 네트워크 IP 주소는 사설 IP로 할당하고 국제권고표준을 따르고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '내부 네트워크 접근 통제가 미흡하여 외부 또는 불필요한 내부사용자의 중요시스템 접근이 가능할 위험',
                    'protection_plan' => '내부 네트워크 IP 주소는 사설 IP로 할당하고 국제권고표준 준수',
                    'threatcode' => 'TC6-11',
                ),
            126 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.4.1.5',
                    'clause' => '서비스, 사용자 그룹, 정보자산의 중요도, 법적 요구사항에 따라 네트워크 영역을 물리적 또는 논리적으로 분리하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '네트워크 영역을 용도 또는 중요도에 따라 분리하지 않아 비인가 시스템 접근이 가능할 위험',
                    'protection_plan' => '서비스, 사용자 그룹, 정보자산의 중요도, 법적 요구사항에 따라 네트워크 영역을 물리적 또는 논리적으로 분리',
                    'threatcode' => 'TC6-08',
                ),
            127 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.4.1.6',
                    'clause' => '접근통제 정책에 따라 분리된 네트워크 영역간에 침입차단시스템 등을 통한 접근통제를 하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '내부 네트워크 접근 통제가 미흡하여 외부 또는 불필요한 내부사용자의 중요시스템 접근이 가능할 위험',
                    'protection_plan' => '접근통제 정책에 따라 분리된 네트워크 영역간에 침입차단시스템 등을 통한 접근통제',
                    'threatcode' => 'TC6-11',
                ),
            128 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.4.1.7',
                    'clause' => '물리적으로 떨어진 IDC 센터, 지사, 대리점 등과의 네트워크 연결 시 전용회선을 구축하고 전용선 구축이 불가능한 경우 VPN(가상사설망) 등의 대책을 마련하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '내부 네트워크 접근 통제가 미흡하여 외부 또는 불필요한 내부사용자의 중요시스템 접근이 가능할 위험',
                    'protection_plan' => '물리적으로 떨어진 IDC 센터, 지사, 대리점 등과의 네트워크 연결 시 전용회선을 구축하고 전용선 구축이 불가능한 경우 VPN(가상사설망) 등의 대책 마련',
                    'threatcode' => 'TC6-11',
                ),
            129 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.4.2.1',
                    'clause' => '서버별로 접근이 허용된 사용자를 명확하게 식별·인증하고 안전한 접근수단을 적용하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템에 대한 접근 통제, 안전한 접근 수단의 적용이 미흡하여 비인가 시스템 접근, 자원 침탈, 정보 유출, 장애 발생 등 위험',
                    'protection_plan' => '서버별로 접근이 허용된 사용자를 명확하게 식별/인증하고 안전한 접근수단 적용',
                    'threatcode' => 'TC2-02',
                ),
            130 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.4.2.2',
                    'clause' => '중요한 서버의 연결시간을 제한하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템에 대한 접근 통제, 안전한 접근 수단의 적용이 미흡하여 비인가 시스템 접근, 자원 침탈, 정보 유출, 장애 발생 등 위험',
                    'protection_plan' => '중요 서버의 연결시간 제한',
                    'threatcode' => 'TC2-02',
                ),
            131 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.4.2.3',
                    'clause' => '서버의 사용목적과 관계없는 서비스를 제거하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템에 대한 서비스 구성 및 운영 관리가 미흡하여 비인가 시스템 접근, 자원 침탈, 정보 유출, 장애 발생 등 위험',
                    'protection_plan' => '서버의 사용목적과 관계없는 서비스 제거',
                    'threatcode' => 'TC6-09',
                ),
            132 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.4.2.4',
                    'clause' => '자체 DNS를 사용하는 경우 DNS 서버의 과부하 및 침해사고를 예방하기 위한 보호대책을 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템에 대한 서비스 구성 및 운영 관리가 미흡하여 비인가 시스템 접근, 자원 침탈, 정보 유출, 장애 발생 등 위험',
                    'protection_plan' => '자체 DNS를 사용하는 경우 DNS 서버의 과부하 및 침해사고를 예방하기 위한 보호대책 수립/이행',
                    'threatcode' => 'TC6-11',
                ),
            133 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.4.2.5',
                    'clause' => '주요서비스를 제공하는 서버는 독립된 서버로 운영하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템에 대한 서비스 구성 및 운영 관리가 미흡하여 비인가 시스템 접근, 자원 침탈, 정보 유출, 장애 발생 등 위험',
                    'protection_plan' => '주요서비스를 제공하는 서버는 독립된 서버로 운영',
                    'threatcode' => 'TC6-11',
                ),
            134 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.4.3.1',
                    'clause' => '응용프로그램 및 중요정보 접근을 통제하기 위하여 사용자의 업무에 따라 접근권한을 차등 부여하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '업무 목적에 따른 응용프로그램 접근 통제가 미흡하여 시스템 자원 침탈, 정보유출, 서비스 장애 등 보안사고 발생 위험',
                    'protection_plan' => '응용프로그램 및 중요정보 접근을 통제하기 위하여 사용자의 업무에 따라 접근권한 차등 부여',
                    'threatcode' => 'TC6-06',
                ),
            135 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.4.3.2',
                    'clause' => '중요정보의 노출(조회, 출력, 다운로드 등)을 최소화 하도록 응용 프로그램을 구현하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '업무 목적에 따른 응용프로그램 접근 통제가 미흡하여 시스템 자원 침탈, 정보유출, 서비스 장애 등 보안사고 발생 위험',
                    'protection_plan' => '중요정보의 노출(조회, 출력, 다운로드 등)을 최소화 하도록 응용 프로그램 구현',
                    'threatcode' => 'TC4-05',
                ),
            136 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.4.3.3',
                    'clause' => '일정 시간 동안 입력이 없는 세션은 자동 차단하고, 동일 사용자의 동시 세션 수를 제한하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '응용프로그램 접근에 대한 안전한 접근 수단 적용이 미흡하여 비인가 시스템 접근, 정보 유출 등 보안사고 발생 위험',
                    'protection_plan' => '일정 시간 동안 입력이 없는 세션은 자동 차단하고, 동일 사용자의 동시 세션 수 제한',
                    'threatcode' => 'TC6-09',
                ),
            137 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.4.3.4',
                    'clause' => '관리자 전용 응용프로그램(관리자 웹 페이지, 관리콘솔 등)을 외부에 오픈 되지 않도록 접근통제하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '응용프로그램 접근에 대한 안전한 접근 수단 적용이 미흡하여 비인가 시스템 접근, 정보 유출 등 보안사고 발생 위험',
                    'protection_plan' => '관리자 전용 응용프로그램(관리자 웹 페이지, 관리콘솔 등)을 외부에 오픈 되지 않도록 접근통제',
                    'threatcode' => 'TC6-11',
                ),
            138 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.4.4.1',
                    'clause' => '데이터베이스 관리자 및 사용자의 직무별 접근 통제 정책을 수립하고 이에 따라 운영하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '업무 목적에 따른 데이터베이스 접근 통제가 미흡하여 주요 데이터베이스에 대한 조회/수정/삭제가 가능할 위험',
                    'protection_plan' => '데이터베이스 관리자 및 사용자의 직무별 접근 통제 정책을 수립하고 이에 따라 운영',
                    'threatcode' => 'TC6-06',
                ),
            139 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.4.4.2',
                    'clause' => '중요정보를 저장하고 있는 데이터베이스는 별도의 네트워크 영역으로 구분하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '데이터베이스 접근에 대한 안전한 접근 수단 적용 및 구성 관리가 미흡하여 주요 데이터베이스에 대한 비인가 조회/수정/삭제가 가능할 위험',
                    'protection_plan' => '중요정보를 저장하고 있는 데이터베이스는 별도의 네트워크 영역으로 구분',
                    'threatcode' => 'TC6-08',
                ),
            140 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.4.4.3',
                    'clause' => '데이터베이스 접근을 허용하는 IP, 포트, 응용프로그램을 통제하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '데이터베이스 접근에 대한 안전한 접근 수단 적용 및 구성 관리가 미흡하여 주요 데이터베이스에 대한 비인가 조회/수정/삭제가 가능할 위험',
                    'protection_plan' => '데이터베이스 접근을 허용하는 IP, 포트, 응용프로그램을 통제',
                    'threatcode' => 'TC6-11',
                ),
            141 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.4.4.4',
                    'clause' => '중요정보를 포함하고 있는 데이터베이스의 경우 데이터베이스 계정 또는 오브젝트(테이블, 뷰 또는 컬럼 등)수준에서 사용자 접근을 통제하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '업무 목적에 따른 데이터베이스 접근 통제가 미흡하여 주요 데이터베이스에 대한 조회/수정/삭제가 가능할 위험',
                    'protection_plan' => '중요정보를 포함하고 있는 데이터베이스의 경우 데이터베이스 계정 또는 오브젝트(테이블, 뷰 또는 컬럼 등)수준에서 사용자 접근 통제',
                    'threatcode' => 'TC6-06',
                ),
            142 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.4.4.5',
                    'clause' => '중요정보를 저장하고 있는 데이터베이스의 경우 사용자 접속내역을 기록하고 접근의 타당성을 정기적으로 검토하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '중요정보 저장 DB에 대한 사용자 접근의 타당성을 정기적으로 검토하고 있지 않아, 사고발생 상황에 대하여 적절히 대응하지 못할 위험',
                    'protection_plan' => '중요정보를 저장하고 있는 데이터베이스의 경우 사용자 접속내역을 기록하고 접근의 타당성을 정기적으로 검토',
                    'threatcode' => 'TC1-01',
                ),
            143 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.4.5.1',
                    'clause' => '모바일 기기에 대한 보안 통제 정책을 마련하고 이에 따라 이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '모바일 기기에 대한 물리적, 기술적 보안 통제 미흡으로 인한 비인가 접근 및 정보유출 위험',
                    'protection_plan' => '모바일기기에 대한 보안 통제 정책을 마련하고 이에 따라 이행',
                    'threatcode' => 'TC6-12',
                ),
            144 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.4.6.1',
                    'clause' => '다음과 같은 인터넷 접속에 대한 정책을 수립하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '인터넷 접속 및 사용을 제한하지 않아, 고의 또는 실수로 인한 정보 유출, 악성코드 감염 등 보안사고가 발생할 위험',
                    'protection_plan' => '인터넷 접속에 대한 정책 수립',
                    'threatcode' => 'TC1-02',
                ),
            145 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.4.6.2',
                    'clause' => '중요정보를 취급·운영하는 주요 직무자를 식별하여 인터넷 접속을 제한하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '인터넷 접속 및 사용을 제한하지 않아, 고의 또는 실수로 인한 정보 유출, 악성코드 감염 등 보안사고가 발생할 위험',
                    'protection_plan' => '중요정보를 취급/운영하는 주요 직무자 식별하여 인터넷 접속 제한',
                    'threatcode' => 'TC4-01',
                ),
            146 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.4.6.3',
                    'clause' => '내부 직원의 업무용 PC에서 유해사이트 등의 접속을 차단하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '인터넷 접속 및 사용을 제한하지 않아, 고의 또는 실수로 인한 정보 유출, 악성코드 감염 등 보안사고가 발생할 위험',
                    'protection_plan' => '내부 직원의 업무용 PC에서 유해사이트 접속 및 P2P 등 공유프로그램 사용 제한',
                    'threatcode' => 'TC4-01',
                ),
            147 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.4.6.4',
                    'clause' => '내부 서버에서 외부 인터넷접속을 제한하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '인터넷 접속 및 사용을 제한하지 않아, 고의 또는 실수로 인한 정보 유출, 악성코드 감염 등 보안사고가 발생할 위험',
                    'protection_plan' => '내부 서버에서 외부 인터넷접속 제한',
                    'threatcode' => 'TC3-12',
                ),
            148 =>
                array (
                    'type' => 'Management',
                    'domain' => '접근통제',
                    'depth' => '10.4.6.5',
                    'clause' => '인터넷 PC 와 내부 업무용 PC를 분리하고 있는 경우 PC 간의 자료전송을 통제하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '인터넷 접속 및 사용을 제한하지 않아, 고의 또는 실수로 인한 정보 유출, 악성코드 감염 등 보안사고가 발생할 위험',
                    'protection_plan' => '인터넷 PC와 내부 업무용 PC를 분리하고 있는 경우 PC간의 자료전송 통제',
                    'threatcode' => 'TC1-04',
                ),
            149 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.1.1.1',
                    'clause' => '정보시스템 운영을 위한 운영절차(또는 매뉴얼)를 수립하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템 운영 절차 수립 미흡으로 정보시스템 운영 관리가 소홀하거나 체계적인 운영이 어려울 위험',
                    'protection_plan' => '정보시스템 운영을 위한 운영절차(또는 매뉴얼) 수립',
                    'threatcode' => 'TC1-02',
                ),
            150 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.1.1.2',
                    'clause' => '각종 정보시스템 운영절차(또는 매뉴얼)를 목록으로 관리하고 주기적인 내용 검토를 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템 운영 절차 수립 미흡으로 정보시스템 운영 관리가 소홀하거나 체계적인 운영이 어려울 위험',
                    'protection_plan' => '각종 정보시스템 운영절차(또는 매뉴얼)를 목록으로 관리하고 주기적인 내용 검토',
                    'threatcode' => 'TC1-02',
                ),
            151 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.1.1.3',
                    'clause' => '정보시스템 운영을 외부 위탁하는 경우 운영절차(매뉴얼) 수립 여부를 확인 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템 운영 절차 수립 미흡으로 정보시스템 운영 관리가 소홀하거나 체계적인 운영이 어려울 위험',
                    'protection_plan' => '정보시스템 운영을 외부 위탁하는 경우 운영절차(매뉴얼) 수립 여부 확인',
                    'threatcode' => 'TC1-02',
                ),
            152 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.1.2.1',
                    'clause' => '정보시스템 관련 자산(하드웨어, 운영체제, 상용 소프트웨어 패키지 등) 변경에 관한 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템 자산 변경에 대한 통제가 미흡하여 시스템 또는 서비스 장애가 및 보안사고가 발생할 위험',
                    'protection_plan' => '정보시스템 관련 자산(하드웨어, 운영체제, 상용 소프트웨어 패키지 등) 변경에 관한 절차 수립/이행',
                    'threatcode' => 'TC1-04',
                ),
            153 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.1.2.2',
                    'clause' => '정보시스템 관련 자산 변경을 수행하기 전 성능 및 보안에 미치는 영향을 분석하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템 자산 변경에 대한 통제가 미흡하여 시스템 또는 서비스 장애가 및 보안사고가 발생할 위험',
                    'protection_plan' => '정보시스템 관련 자산 변경을 수행하기 전 성능 및 보안에 미치는 영향 분석',
                    'threatcode' => 'TC1-04',
                ),
            154 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.2.1.1',
                    'clause' => '정보시스템 도입 또는 개선 계획을 수립하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '인수 적합성 미흡에 따른 시스템 또는 서비스 제공 불가 위험',
                    'protection_plan' => '정보시스템 도입 및 개선 필요 시 계획 수립',
                    'threatcode' => 'TC1-01',
                ),
            155 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.2.1.2',
                    'clause' => '정보시스템 인수 여부를 판단하기 위한 시스템 인수기준을 수립하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '인수 적합성 미흡에 따른 시스템 또는 서비스 제공 불가 위험',
                    'protection_plan' => '정보시스템 인수 적합성 판단을 위한 기준 수립',
                    'threatcode' => 'TC1-01',
                ),
            156 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.2.1.3',
                    'clause' => '정보시스템 인수 전 인수기준 적합성 여부를 확인하기 위하여 테스트를 수행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '인수 적합성 미흡에 따른 시스템 또는 서비스 제공 불가 위험',
                    'protection_plan' => '정보시스템 인수 전 인수기준 적합성 여부를 확인하기 위하여 테스트 수행',
                    'threatcode' => 'TC1-01',
                ),
            157 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.2.2.1',
                    'clause' => '조직에서 운영하고 있는 보안시스템 운영절차를 수립하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '보안시스템에 대한 운영관리 절차가 수립되지 않아 비인가 시스템 접근 등 보안사고 발생이 가능할 위험',
                    'protection_plan' => '조직에서 운영하고 있는 보안시스템 운영절차 수립',
                    'threatcode' => 'TC1-02',
                ),
            158 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.2.2.2',
                    'clause' => '보안시스템 관리자 등 접근이 허용된 인원을 최소화하고 비인가자 접근을 엄격하게 통제하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '보안시스템에 대한 접근통제 및 정책 관리가 미흡하여 비인가 접근, 불법 정책 변조 등에 의한 침해사고가 발생할 위험',
                    'protection_plan' => '보안시스템 관리자 등 접근이 허용된 인원을 최소화하고 비인가자 접근을 엄격하게 통제',
                    'threatcode' => 'TC6-11',
                ),
            159 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.2.2.3',
                    'clause' => '보안시스템별 정책(룰셋 등) 신규 등록, 변경, 삭제 등 절차를 수립하고 정책의 타당성 검토를 주기적으로 수행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '보안시스템에 대한 접근통제 및 정책 관리가 미흡하여 비인가 접근, 불법 정책 변조 등에 의한 침해사고가 발생할 위험',
                    'protection_plan' => '보안시스템별 정책(룰셋 등) 신규 등록, 변경, 삭제 등 절차를 수립하고 정책의 타당성 검토 주기적 수행',
                    'threatcode' => 'TC1-01',
                ),
            160 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.2.3.1',
                    'clause' => '정보시스템의 성능 및 용량을 지속적으로 모니터링 하기 위한 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템 성능 및 용량 임계치 초과로 인한 서비스 장애 발생 위험',
                    'protection_plan' => '정보시스템의 성능 및 용량을 지속적으로 모니터링 하기 위한 절차 수립/이행',
                    'threatcode' => 'TC1-01',
                ),
            161 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.2.3.2',
                    'clause' => '정보시스템 성능 및 용량 요구사항(임계치)을 초과하는 경우 조치절차를 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템 성능 및 용량 임계치 초과로 인한 서비스 장애 발생 위험',
                    'protection_plan' => '정보시스템 성능 및 용량 요구사항(임계치)을 초과하는 경우 조치절차 수립/이행',
                    'threatcode' => 'TC1-01',
                ),
            162 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.2.4.1',
                    'clause' => '정보시스템 장애를 즉시 인지하고 대응하기 위한 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템 장애 발생 시 체계적인 대응 및 조치가 이루어지지 않아 서비스 복구 지연, 금전적 손실 등 피해가 발생할 위험',
                    'protection_plan' => '정보시스템 장애를 즉시 인지하고 대응하기 위한 절차 수립/이행',
                    'threatcode' => 'TC1-02',
                ),
            163 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.2.4.2',
                    'clause' => '장애 발생 시 절차에 따라 조치하고 장애조치보고서 등을 통해 기록·관리 하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템 장애 발생 시 체계적인 대응 및 조치가 이루어지지 않아 서비스 복구 지연, 금전적 손실 등 피해가 발생할 위험',
                    'protection_plan' => '장애 발생 시 절차에 따라 조치하고 장애조치보고서 등을 통해 기록/관리',
                    'threatcode' => 'TC1-04',
                ),
            164 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.2.4.3',
                    'clause' => '심각도가 높은 장애의 경우 원인분석을 통한 재발방지 대책을 수립·이행 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템 장애 발생 시 체계적인 대응 및 조치가 이루어지지 않아 서비스 복구 지연, 금전적 손실 등 피해가 발생할 위험',
                    'protection_plan' => '심각도가 높은 장애의 경우 원인분석을 통한 재발방지 대책 수립/이행',
                    'threatcode' => 'TC1-04',
                ),
            165 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.2.5.1',
                    'clause' => '내부 네트워크를 통해서 원격으로 시스템을 운영하는 경우 특정 단말에 한해서만 접근을 허용하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템에 대한 원격접근 통제가 미흡하여, 비인가자의 정보시스템에 접근이 가능할 위험',
                    'protection_plan' => '내부 네트워크를 통해서 원격으로 시스템을 운영하는 경우 특정 단말에 한해서만 접근 허용',
                    'threatcode' => 'TC6-11',
                ),
            166 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.2.5.2',
                    'clause' => '인터넷과 같은 외부 네트워크를 통한 정보시스템 원격운영은 원칙적으로 금지하고 있으며 부득이하게 허용하는 경우 다음과 같은 대책을 마련하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템에 대한 원격접근 통제가 미흡하여, 비인가자의 정보시스템에 접근이 가능할 위험',
                    'protection_plan' => '외부 네트워크를 통한 정보시스템 원격운영 시 보호대책 적용 (접속 단말 및 사용자 인증, VPN 등 전송구간 암호화 등)',
                    'threatcode' => 'TC6-11',
                ),
            167 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.2.6.1',
                    'clause' => '재택근무, 원격협업 등과 같은 원격업무 수행, 클라우드 환경을 이용한 스마트워크 환경에서 주요정보자산을 보호하기 위한 정책 및 절차가 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '스마트워크 사용에 대한 보안 대책 수립이 미흡하여 비인가 시스템 접근, 정보유출 등 보안사고 발생 위험',
                    'protection_plan' => '재택근무, 원격협업 등과 같은 원격업무 수행, 클라우드 환경을 이용한 스마트워크 환경에서 주요정보자산을 보호하기 위한 정책 및 절차가 수립/이행',
                    'threatcode' => 'TC1-02',
                ),
            168 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.2.7.1',
                    'clause' => '조직 내 무선네트워크 환경을 구축(AP설치)할 경우 허가(승인), 보안성 검토 등 절차를 마련하고 구축에 따른 다음 (주요)보호대책을 적용하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '무선 네트워크 사용에 대한 통제 및 보안 관리가 미흡하여 비인가자의 내부 네트워크 접근, 정보 유출 등 보안사고 발생 위험',
                    'protection_plan' => '조직 내 무선네트워크 환경을 구축(AP 설치)할 경우 허가(승인), 보안성 검토 등 절차를 마련하고 구축에 따른 보호대책 적용',
                    'threatcode' => 'TC1-02',
                ),
            169 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.2.7.2',
                    'clause' => '정상적인 절차에 따라 무선네트워크 사용을 허가한 경우 인가된 임직원만 무선네트워크를 사용할 수 있도록 사용 신청 및 해지 절차를 수립하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '무선 네트워크 사용에 대한 통제 및 보안 관리가 미흡하여 비인가자의 내부 네트워크 접근, 정보 유출 등 보안사고 발생 위험',
                    'protection_plan' => '정상적인 절차에 따라 무선네트워크 사용을 허가한  경우 인가된 임직원만 무선네트워크를 사용할 수 있도록 사용 신청 및 해지 절차 수립',
                    'threatcode' => 'TC1-02',
                ),
            170 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.2.7.3',
                    'clause' => '외부인에게 제공하는 무선네트워크를 내부네트워크(업무망)와 분리하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '외부인에게 무선네트워크 사용 허용할 경우에 대한 보안 통제가 미흡하여 내부정보 유출, 내부 서버 공격 등 보안사고가 발생할 위험',
                    'protection_plan' => '외부인에게 제공하는 무선네트워크를 내부네트워크(업무망)와 분리',
                    'threatcode' => 'TC6-08',
                ),
            171 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.2.8.1',
                    'clause' => '웹 서버 등 공개서버를 운영하는 경우 이에 대한 보호대책을 마련하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '공개서버 보안관리 미흡으로 인한 시스템 자원 침탈, 정보유출, 서비스 장애 위험',
                    'protection_plan' => '웹 서버 등 공개 서버에 대한 기술적 취약점 이행 조치',
                    'threatcode' => 'TC1-02',
                ),
            172 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.2.8.2',
                    'clause' => '공개서버는 내부 네트워크와 분리된 DMZ(Demilitarized Zone)영역에 설치 하고 침입차단시스템 등 보안시스템을 통해 보호하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '공개서버에 대한 네트워크 구성 및 접근통제 관리가 미흡하여 비인가 시스템 접근 등 침해사고 발생 위험',
                    'protection_plan' => 'DMZ(Demilitarized Zone) 구성 및 보안시스템을 통한 보호 적용',
                    'threatcode' => 'TC6-08',
                ),
            173 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.2.8.3',
                    'clause' => '공개서버의 취약점 점검을 주기적으로 수행하고 발견된 취약점을 조치하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템에 대한 정기적 취약점점검 체계 부재로 인하여 취약점 노출에 따른 보안사고의 발생 위험',
                    'protection_plan' => '주기적 취약점 점검 수행 및 취약점 조치',
                    'threatcode' => 'TC1-04',
                ),
            174 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.2.8.4',
                    'clause' => '웹사이트에 중요정보를 게시하거나 웹 서버에 중요정보를 저장하여야 할 경우 책임자 승인 등 게시절차를 수립·이행하고 중요정보 노출 여부를 주기적으로 확인하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '공개서버 보안관리 미흡으로 인한 시스템 자원 침탈, 정보유출, 서비스 장애 위험',
                    'protection_plan' => '중요정보 게시 절차 수립 및 중요정보 노출 여부 주기적 확인',
                    'threatcode' => 'TC1-02',
                ),
            175 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.2.9.1',
                    'clause' => '백업 대상, 주기, 방법, 절차 등이 포함된 백업 및 복구절차를 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '중요정보에 대한 백업 및 보관 관리가 미흡하여 보안사고 발생시 시스템 복구가 어려울 위험',
                    'protection_plan' => '백업 대상, 주기, 방법, 절차 등이 포함된 백업 및 복구절차 수립/이행',
                    'threatcode' => 'TC1-04',
                ),
            176 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.2.9.2',
                    'clause' => '중요정보가 저장된 백업매체의 경우 재난에 대처할 수 있도록 백업매체를 물리적으로 떨어진 장소에 소산하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '중요정보에 대한 백업 및 보관 관리가 미흡하여 보안사고 발생시 시스템 복구가 어려울 위험',
                    'protection_plan' => '중요정보가 저장된 백업매체의 경우 재난에 대처할 수 있도록 백업매체를 물리적으로 떨어진 장소에 소산',
                    'threatcode' => 'TC1-04',
                ),
            177 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.2.10.1',
                    'clause' => '정보시스템 취약점 점검 절차를 수립하여 정기적으로 점검을 수행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템에 대한 정기적 취약점점검 체계 부재로 인하여 취약점 노출에 따른 보안사고의 발생 위험',
                    'protection_plan' => '정보시스템 취약점 점검 절차를 수립하여 정기적으로 점검 수행',
                    'threatcode' => 'TC1-04',
                ),
            178 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.2.10.2',
                    'clause' => '발견된 취약점에 대한 조치를 수행하고 그 결과를 책임자에게 보고하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템에 대한 정기적 취약점점검 체계 부재로 인하여 취약점 노출에 따른 보안사고의 발생 위험',
                    'protection_plan' => '발견된 취약점에 대한 조치를 수행하고 그 결과를 책임자에게 보고',
                    'threatcode' => 'TC1-04',
                ),
            179 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.3.1.1',
                    'clause' => '전자(상)거래서비스를 제공하는 경우 전자(상)거래의 안전성과 신뢰성 확보를 위한 보호대책을 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '전자거래에 대한 보안 관리가 미흡하여 정보유출, 데이터 조작, 사기 등의 침해사고 발생 위험',
                    'protection_plan' => '전자(상)거래의 안전성과 신뢰성 확보를 위한 보호대책 수립/이행',
                    'threatcode' => 'TC5-01',
                ),
            180 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.3.1.2',
                    'clause' => '전자(상)거래 서비스 제공을 위하여 전자적 수단의 거래대금 지급방법을 이용하는 경우 전자(상)거래사업자와 전자결제업자간에 송·수신되는 결제 관련 정보의 보호를 위한 대책을 수립· 이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '전자거래에 대한 보안 관리가 미흡하여 정보유출, 데이터 조작, 사기 등의 침해사고 발생 위험',
                    'protection_plan' => '전자(상)거래의 안전성과 신뢰성 확보를 위한 보호대책 수립/이행',
                    'threatcode' => 'TC5-01',
                ),
            181 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.3.2.1',
                    'clause' => '업무상 조직 간에 중요정보(개인정보, 기밀정보 등)를 상호 교환하는 경우 안전한 전송을 위한 협약체결 등 보호대책을 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '조직간 중요정보 전송 시 암호화 미적용에 따른 정보유출 위험',
                    'protection_plan' => '업무상 조직 간에 중요정보(개인정보, 기밀정보 등)를 상호 교환하는 경우 안전한 전송을 위한 협약체결 등 보호대책 수립/이행',
                    'threatcode' => 'TC4-03',
                ),
            182 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.4.1.1',
                    'clause' => '정보시스템 폐기 또는 재사용 발생 시 중요정보를 담고 있는 저장매체 처리 (폐기, 재사용) 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템 저장매체의 폐기 또는 재사용 기준 부재 및 불용처리 미흡으로 인한 폐기 또는 재사용 매체를 통한 정보유출 위험',
                    'protection_plan' => '정보시스템 폐기 또는 재사용(양도, 내부판매, 재활용 등)시 저장매체 처리에 관한 절차 수립/이행',
                    'threatcode' => 'TC4-08',
                ),
            183 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.4.1.2',
                    'clause' => '저장매체 폐기 또는 재사용 시 정보가 복구되지 않는 방법으로 처리하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템 저장매체의 폐기 또는 재사용 기준 부재 및 불용처리 미흡으로 인한 폐기 또는 재사용 매체를 통한 정보유출 위험',
                    'protection_plan' => '저장매체 폐기 또는 재사용 시 정보가 복구되지 않는 방법으로 처리',
                    'threatcode' => 'TC4-08',
                ),
            184 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.4.1.3',
                    'clause' => '자체적으로 저장매체를 폐기할 경우 관리대장을 통해 폐기이력을 남기고 폐기확인증적을 함께 보관하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템 저장매체의 폐기 또는 재사용 기준 부재 및 불용처리 미흡으로 인한 폐기 또는 재사용 매체를 통한 정보유출 위험',
                    'protection_plan' => '자체적으로 저장매체를 폐기할 경우 관리대장을 통해 폐기이력을 남기고 폐기확인증적 보관',
                    'threatcode' => 'TC4-08',
                ),
            185 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.4.1.4',
                    'clause' => '외부업체를 통해 저장매체를 폐기할 경우 폐기 절차를 계약서에 명시하고 완전한 폐기에 대한 확인을 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템 저장매체의 폐기 또는 재사용 기준 부재 및 불용처리 미흡으로 인한 폐기 또는 재사용 매체를 통한 정보유출 위험',
                    'protection_plan' => '외부업체를 통해 저장매체를 폐기할 경우 폐기 절차 계약서 명시 및 완전한 폐기 확인',
                    'threatcode' => 'TC4-08',
                ),
            186 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.4.1.5',
                    'clause' => '정보시스템, PC 등 유지보수, 수리 과정에서 저장매체 교체, 복구 등 발생 시 저장매체 내 정보를 보호하기 위한 대책을 마련하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템 저장매체의 폐기 또는 재사용 기준 부재 및 불용처리 미흡으로 인한 폐기 또는 재사용 매체를 통한 정보유출 위험',
                    'protection_plan' => '정보시스템, PC 등 유지보수, 수리 과정에서 저장매체 교체, 복구 등 발생 시 저장매체 내 정보를 보호하기 위한 대책 마련',
                    'threatcode' => 'TC4-08',
                ),
            187 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.4.2.1',
                    'clause' => '외장하드, USB, CD 등 휴대용 저장매체 취급(사용), 보관, 폐기, 재사용에 대한 정책 및 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '휴대용 저장매체 사용에 대한 통제 및 관리가 미흡하여, 중요 정보 유출, 악성코드 감염 등 보안사고가 발생할 위험',
                    'protection_plan' => '외장하드, USB, CD 등 휴대용 저장매체 취급(사용), 보관, 폐기, 재사용에 대한 정책 및 절차 수립/이행',
                    'threatcode' => 'TC1-15',
                ),
            188 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.4.2.2',
                    'clause' => '주요 정보시스템이 위치한 통제구역, 중요 제한구역 등에서 휴대용 저장매체 사용을 제한하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '휴대용 저장매체 사용에 대한 통제 및 관리가 미흡하여, 중요 정보 유출, 악성코드 감염 등 보안사고가 발생할 위험',
                    'protection_plan' => '주요 정보시스템이 위치한 통제구역, 중요 제한구역 등에서 휴대용 저장매체 사용 제한',
                    'threatcode' => 'TC1-15',
                ),
            189 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.4.2.3',
                    'clause' => '휴대용 저장매체를 통한 악성코드 감염 및 중요정보 유출 방지를 위한 대책을 마련하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '휴대용 저장매체 사용에 대한 통제 및 관리가 미흡하여, 중요 정보 유출, 악성코드 감염 등 보안사고가 발생할 위험',
                    'protection_plan' => '휴대용 저장매체를 통한 악성코드 감염 및 중요정보 유출 방지를 위한 대책 마련',
                    'threatcode' => 'TC3-12',
                ),
            190 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.4.2.4',
                    'clause' => '휴대용 저장매체 보유현황 및 관리실태를 주기적으로 점검하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '휴대용 저장매체 사용에 대한 통제 및 관리가 미흡하여, 중요 정보 유출, 악성코드 감염 등 보안사고가 발생할 위험',
                    'protection_plan' => '휴대용 저장매체 보유현황 및 관리실태 주기적 점검',
                    'threatcode' => 'TC1-15',
                ),
            191 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.5.1.1',
                    'clause' => '바이러스, 웜, 트로이목마 등의 악성코드로부터 정보시스템을 보호하기 위하여 보호대책을 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '악성코드 및 바이러스 감염으로 인한 중요 데이터 유출/손실, 시스템 장애가 발생할 위험',
                    'protection_plan' => '바이러스, 웜, 트로이목마 등의 악성코드로부터 정보시스템을 보호하기 위하여 보호대책 수립/이행',
                    'threatcode' => 'TC3-12',
                ),
            192 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.5.1.2',
                    'clause' => '백신프로그램 등을 통한 최신 악성코드 예방, 탐지 활동을 지속적으로 수행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '악성코드 및 바이러스 감염으로 인한 중요 데이터 유출/손실, 시스템 장애가 발생할 위험',
                    'protection_plan' => '백신프로그램 등을 통한 최신 악성코드 예방, 탐지 활동 지속 수행',
                    'threatcode' => 'TC3-12',
                ),
            193 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.5.1.3',
                    'clause' => '악성코드 감염 발견 시 악성코드 확산 및 피해 최소화 등의 대응절차를 수립· 이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '악성코드 및 바이러스 감염으로 인한 중요 데이터 유출/손실, 시스템 장애가 발생할 위험',
                    'protection_plan' => '악성코드 감염 발견 시 악성코드 확산 및 피해 최소화 등의 대응절차 수립/이행',
                    'threatcode' => 'TC3-12',
                ),
            194 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.5.2.1',
                    'clause' => '서버, 네트워크 장비, 보안시스템, PC 등 자산 중요도 또는 특성에 따라 OS, 소프트웨어 패치관리 정책 및 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'OS 및 어플리케이션 패치 관리가 미흡하여 버그, 보안 취약점을 악용한 침해사고가 발생할 위험',
                    'protection_plan' => '서버, 네트워크 장비, 보안시스템, PC 등 자산 중요도 또는 특성에 따라 OS, 소프트웨어 패치관리 정책 및 절차 수립/이행',
                    'threatcode' => 'TC6-16',
                ),
            195 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.5.2.2',
                    'clause' => '주요 서버, 네트워크 장비 등의 경우 설치된 OS, 소프트웨어 패치적용 현황을 관리하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'OS 및 어플리케이션 패치 관리가 미흡하여 버그, 보안 취약점을 악용한 침해사고가 발생할 위험',
                    'protection_plan' => '주요 서버, 네트워크 장비 등의 경우 설치된 OS, 소프트웨어 패치적용 현황 관리',
                    'threatcode' => 'TC6-16',
                ),
            196 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.5.2.3',
                    'clause' => '주요 서버, 네트워크 장비, 정보보호시스템 등의 경우 공개 인터넷 접속을 통한 패치를 제한하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'OS 및 어플리케이션 패치 관리가 미흡하여 버그, 보안 취약점을 악용한 침해사고가 발생할 위험',
                    'protection_plan' => '주요 서버, 네트워크 장비, 정보보호시스템 등의 경우 공개 인터넷 접속을 통한 패치 제한',
                    'threatcode' => 'TC6-16',
                ),
            197 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.5.2.4',
                    'clause' => '패치관리시스템(PMS)를 활용하는 경우 접근통제 등 충분한 보호대책을 마련하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'OS 및 어플리케이션 패치 관리가 미흡하여 버그, 보안 취약점을 악용한 침해사고가 발생할 위험',
                    'protection_plan' => 'PMS 시스템에 대한 접근통제 강화',
                    'threatcode' => 'TC6-16',
                ),
            198 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.5.2.5',
                    'clause' => '운영시스템 경우 패치 적용하기 전 시스템 가용성에 미치는 영향을 분석하여 패치를 적용하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'OS 및 어플리케이션 패치 관리가 미흡하여 버그, 보안 취약점을 악용한 침해사고가 발생할 위험',
                    'protection_plan' => '운영시스템 경우 패치 적용하기 전 시스템 가용성에 미치는 영향을 분석하여 패치 적용',
                    'threatcode' => 'TC6-16',
                ),
            199 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.6.1.1',
                    'clause' => '각 정보시스템 시각을 표준시각으로 동기화 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '시각동기화 관리 미흡으로 인한 시스템 내 이슈 발생 시 명확한 시기 파악이 불가능할 위험',
                    'protection_plan' => '각 정보시스템 시각을 표준시각으로 동기화',
                    'threatcode' => 'TC7-01',
                ),
            200 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.6.2.1',
                    'clause' => '주요정보시스템에 대한 로그관리 절차를 수립하고 이에 따라 로깅하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '주요 정보시스템 자산에 대한 로그 기록, 보관 및 관리 절차가 미흡하여 보안사고 발생시 대응이 어려울 위험',
                    'protection_plan' => '주요 정보시스템에 대한 로그관리 절차를 수립하고 이에 따라 로깅',
                    'threatcode' => 'TC7-01',
                ),
            201 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.6.2.2',
                    'clause' => '로그기록은 별도 저장장치를 통해 백업하고 로그기록에 대한 접근권한 부여를 최소화 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '주요 정보시스템 자산에 대한 로그 기록, 보관 및 관리 절차가 미흡하여 보안사고 발생시 대응이 어려울 위험',
                    'protection_plan' => '로그기록은 별도 저장장치를 통해 백업하고 로그기록에 대한 접근권한 부여 최소화',
                    'threatcode' => 'TC7-02',
                ),
            202 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.6.3.1',
                    'clause' => '중요정보 및 주요 정보시스템에 대한 사용자 접속 기록을 주기적으로 검토(모니터링)하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템 및 중요정보, 응용프로그램에 대한 사용자 접근이력에 대해 주기적인 점검활동이 없어 내부 악의적인 사용자에 의한 정보유출 등 보안사고 발생 위험',
                    'protection_plan' => '중요정보 및 주요 정보시스템에 대한 사용자 접속 기록 주기적 검토(모니터링)',
                    'threatcode' => 'TC1-01',
                ),
            203 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.6.3.2',
                    'clause' => '사용자 접속기록 검토결과를 책임자에게 보고하고 이상징후 발견 시 절차에 따라 대응하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템 및 중요정보, 응용프로그램에 대한 사용자 접근이력에 대해 주기적인 점검활동이 없어 내부 악의적인 사용자에 의한 정보유출 등 보안사고 발생 위험',
                    'protection_plan' => '사용자 접속기록 검토결과를 책임자에게 보고하고 이상징후 발견 시 절차에 따라 대응',
                    'threatcode' => 'TC1-01',
                ),
            204 =>
                array (
                    'type' => 'Management',
                    'domain' => '운영보안',
                    'depth' => '11.6.4.1',
                    'clause' => '외부로부터의 침해시도가 의심되는 이상징후를 지체 없이 인지할 수 있도록 모니터링 체계 및 절차를 수립하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '침해시도에 대한 모니터링이 이루어지지 않아 외부자의 침해 발생 차단 및 대응이 어려울 위험',
                    'protection_plan' => '외부로부터의 침해시도가 의심되는 이상징후를 지체 없이 인지할 수 있도록 모니터링 체계 및 절차 수립',
                    'threatcode' => 'TC1-01',
                ),
            205 =>
                array (
                    'type' => 'Management',
                    'domain' => '침해사고 관리',
                    'depth' => '12.1.1.1',
                    'clause' => '침해사고 대응절차가 수립되어 있고 대응절차에는 다음과 같은 사항을 포함하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '침해사고 대응절차 및 체계 구축이 미흡하여 사고 발생시 효과적으로 대응하지 못할 위험',
                    'protection_plan' => '침해사고 발생 시 신속한 대응을 위한 내용(비상연락체계, 보고절차, 대응 및 복구절차, 훈련 등)을 포함한 대응절차 수립',
                    'threatcode' => 'TC1-01',
                ),
            206 =>
                array (
                    'type' => 'Management',
                    'domain' => '침해사고 관리',
                    'depth' => '12.1.2.1',
                    'clause' => '침해사고를 모니터링 하고 신속하게 대응할 수 있도록 모니터링 및 대응 방법, 절차, 대응 조직 및 인력, 보고 및 승인 방법 등을 포함한 중앙집중적인 대응체계를 수립하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '침해사고 대응절차 및 체계 구축이 미흡하여 사고 발생시 효과적으로 대응하지 못할 위험',
                    'protection_plan' => '침해사고 모니터링 및 대응 방법, 절차, 대응 조직 및 인력, 보고 및 승인 방법 등을 포함한 중앙집중적인 대응체계 수립',
                    'threatcode' => 'TC1-01',
                ),
            207 =>
                array (
                    'type' => 'Management',
                    'domain' => '침해사고 관리',
                    'depth' => '12.1.2.2',
                    'clause' => '침해사고가 유형 및 중요도에 따라 분류되어 있고 이에 따른 보고체계를 정의하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '침해사고 대응절차 및 체계 구축이 미흡하여 사고 발생시 효과적으로 대응하지 못할 위험',
                    'protection_plan' => '침해사고가 유형 및 중요도에 따른 유형 분류 및 보고체계 정의',
                    'threatcode' => 'TC1-01',
                ),
            208 =>
                array (
                    'type' => 'Management',
                    'domain' => '침해사고 관리',
                    'depth' => '12.1.2.3',
                    'clause' => '외부관제시스템 등 외부 기관을 통해 침해사고 대응체계를 구축·운영하는 경우 침해사고 대응절차의 세부사항을 계약서에 반영하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '침해사고 대응절차 및 체계 구축이 미흡하여 사고 발생시 효과적으로 대응하지 못할 위험',
                    'protection_plan' => '침해사고 대응절차의 세부사항을 계약서에 반영',
                    'threatcode' => 'TC1-01',
                ),
            209 =>
                array (
                    'type' => 'Management',
                    'domain' => '침해사고 관리',
                    'depth' => '12.1.2.4',
                    'clause' => '침해사고의 모니터링, 대응 및 처리와 관련된 외부전문가, 전문업체, 전문기관(KISA) 등과의 협조체계를 수립하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '침해사고 대응절차 및 체계 구축이 미흡하여 사고 발생시 효과적으로 대응하지 못할 위험',
                    'protection_plan' => '침해사고의 모니터링, 대응 및 처리와 관련된 외부전문가, 전문업체, 전문기관(KISA) 등과의 협조체계 수립',
                    'threatcode' => 'TC1-01',
                ),
            210 =>
                array (
                    'type' => 'Management',
                    'domain' => '침해사고 관리',
                    'depth' => '12.2.1.1',
                    'clause' => '침해사고 대응절차에 관한 모의훈련계획을 수립하고 이에 따라 주기적으로 훈련을 실시하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '침해사고 대응 절차를 임직원들이 숙지할 수 있도록 한 모의훈련의 부족에 따른 실제 상황에서의 실효성 부재 위험',
                    'protection_plan' => '침해사고 대응절차에 관한 모의훈련계획을 수립하고 이에 따라 주기적으로 훈련 실시',
                    'threatcode' => 'TC1-04',
                ),
            211 =>
                array (
                    'type' => 'Management',
                    'domain' => '침해사고 관리',
                    'depth' => '12.2.2.1',
                    'clause' => '침해사고의 징후 또는 침해사고 발생을 인지한 경우 정의된 침해사고 보고절차에 따라 신속하게 보고가 이루어지고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '침해사고 발생 시 정해진 절차에 따른 사고 경위 분석 및 보고가 미흡하여 적절한 조치, 대응이 이루어지지 않을 위험',
                    'protection_plan' => '침해사고 대응 체계에 따른 보고 수행',
                    'threatcode' => 'TC1-01',
                ),
            212 =>
                array (
                    'type' => 'Management',
                    'domain' => '침해사고 관리',
                    'depth' => '12.2.2.2',
                    'clause' => '침해사고보고서에는 사고 날짜, 사고 내용 등 필요 내용을 모두 포함하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '침해사고 발생 시 정해진 절차에 따른 사고 경위 분석 및 보고가 미흡하여 적절한 조치, 대응이 이루어지지 않을 위험',
                    'protection_plan' => '침해사고 발생시 필요 내용을 모두 포함하여 침해사고보고서 작성',
                    'threatcode' => 'TC1-01',
                ),
            213 =>
                array (
                    'type' => 'Management',
                    'domain' => '침해사고 관리',
                    'depth' => '12.2.2.3',
                    'clause' => '침해사고가 조직에 미치는 영향이 심각할 경우 최고경영층까지 신속하게 보고하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '침해사고 발생 시 정해진 절차에 따른 사고 경위 분석 및 보고가 미흡하여 적절한 조치, 대응이 이루어지지 않을 위험',
                    'protection_plan' => '심각한 침해사고 발견 및 발생시 최고경영층까지 신속한 보고',
                    'threatcode' => 'TC1-01',
                ),
            214 =>
                array (
                    'type' => 'Management',
                    'domain' => '침해사고 관리',
                    'depth' => '12.2.2.4',
                    'clause' => '침해사고 발생 시 관련 법률 및 규정에 따라 신고, 통지하는 절차를 따르고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '침해사고 발생 시 정해진 절차에 따른 사고 경위 분석 및 보고가 미흡하여 적절한 조치, 대응이 이루어지지 않을 위험',
                    'protection_plan' => '침해사고 발생시 관계기관에 신고 통지 절차 수립 및 이행',
                    'threatcode' => 'TC1-01',
                ),
            215 =>
                array (
                    'type' => 'Management',
                    'domain' => '침해사고 관리',
                    'depth' => '12.2.3.1',
                    'clause' => '침해사고가 발생한 경우 절차에 따라 처리 및 복구를 수행하고 그 기록을 남기고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '침해사고 발생 시 정해진 절차에 따른 사고 경위 분석 및 보고가 미흡하여 적절한 조치, 대응이 이루어지지 않을 위험',
                    'protection_plan' => '침해사고 대응 체계에 따른 대응 및 복구 수행',
                    'threatcode' => 'TC1-04',
                ),
            216 =>
                array (
                    'type' => 'Management',
                    'domain' => '침해사고 관리',
                    'depth' => '12.3.1.1',
                    'clause' => '침해사고가 종결된 후 사고의 원인을 분석하고 그 결과를 보고하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '침해사고 발생 시 정해진 절차에 따른 사고 경위 분석 및 보고가 미흡하여 적절한 조치, 대응이 이루어지지 않을 위험',
                    'protection_plan' => '침해사고 분석 및 재발방지를 위한 활동 수행
- 사고 원인 분석 및 결과보고',
                    'threatcode' => 'TC1-04',
                ),
            217 =>
                array (
                    'type' => 'Management',
                    'domain' => '침해사고 관리',
                    'depth' => '12.3.1.2',
                    'clause' => '침해사고 정보와 발견된 취약점을 관련조직 및 인력과 공유하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '침해사고 발생 시 정해진 절차에 따른 사고 경위 분석 및 보고가 미흡하여 적절한 조치, 대응이 이루어지지 않을 위험',
                    'protection_plan' => '침해사고 분석 및 재발방지를 위한 활동 수행
- 관련 조직 및 인력에 취약점 공유',
                    'threatcode' => 'TC1-04',
                ),
            218 =>
                array (
                    'type' => 'Management',
                    'domain' => '침해사고 관리',
                    'depth' => '12.3.2.1',
                    'clause' => '침해사고 분석을 통해 얻어진 정보를 활용하여 유사 사고가 재발하지 않도록 대책을 수립하고 필요한 경우 침해사고 대응절차 등을 변경하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '침해사고 발생 시 정해진 절차에 따른 사고 경위 분석 및 보고가 미흡하여 적절한 조치, 대응이 이루어지지 않을 위험',
                    'protection_plan' => '침해사고 분석 및 재발방지를 위한 활동 수행
- 재발방지대책 수립 및 침해사고 대응절차 변경 검토',
                    'threatcode' => 'TC1-04',
                ),
            219 =>
                array (
                    'type' => 'Management',
                    'domain' => 'IT 재해복구',
                    'depth' => '13.1.1.1',
                    'clause' => '다음과 같은 내용을 포함하는 IT 재해복구 체계를 구축하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'IT재해복구 절차 수립이 미흡하여 사고 발생시 효과적으로 대응하지 못할 위험',
                    'protection_plan' => 'IT 재해복구 체계 구축',
                    'threatcode' => 'TC1-03',
                ),
            220 =>
                array (
                    'type' => 'Management',
                    'domain' => 'IT 재해복구',
                    'depth' => '13.2.1.1',
                    'clause' => '조직의 핵심 서비스(업무) 연속성을 위협할 수 있는 IT 재해 위험요인을 식별하고 위험요인에 따른 피해규모 및 업무에 미치는 영향을 고려하여 핵심 IT 서비스(업무) 및 시스템을 식별하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'IT재해복구 절차 수립이 미흡하여 사고 발생시 효과적으로 대응하지 못할 위험',
                    'protection_plan' => 'IT 재해복구 체계 구축
- 업무 영향도에 따른 핵심 업무 시스템 식별',
                    'threatcode' => 'TC1-03',
                ),
            221 =>
                array (
                    'type' => 'Management',
                    'domain' => 'IT 재해복구',
                    'depth' => '13.2.1.2',
                    'clause' => '핵심 IT 서비스 및 시스템의 복구목표시간, 복구시점을 정의하고 있는가? ',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'IT재해복구 절차 수립이 미흡하여 사고 발생시 효과적으로 대응하지 못할 위험',
                    'protection_plan' => 'IT 재해복구 체계 구축
- 핵심 IT 서비스 및 시스템의 복구목표시간, 복구시점을 정의',
                    'threatcode' => 'TC1-03',
                ),
            222 =>
                array (
                    'type' => 'Management',
                    'domain' => 'IT 재해복구',
                    'depth' => '13.2.1.3',
                    'clause' => '정의한 복구목표시간 및 복구시점을 달성할 수 있는 적절한 복구전략 및 대책을 수립하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'IT재해복구 절차 수립이 미흡하여 사고 발생시 효과적으로 대응하지 못할 위험',
                    'protection_plan' => 'IT 재해복구 체계 구축
- 적절한 복구전략 및 대책 수립',
                    'threatcode' => 'TC1-03',
                ),
            223 =>
                array (
                    'type' => 'Management',
                    'domain' => 'IT 재해복구',
                    'depth' => '13.2.2.1',
                    'clause' => '수립된 IT 재해 복구 대책의 실효성을 판단하기 위하여 다음과 같은 내용이 포함된 시험계획을 수립·수행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'IT 서비스 복구전략 및 대책에 따라 효과적인 복구가 가능한지 시험 실시하기 위한 재해복구 훈련의 부족에 따른 실제 상황에서의 실효성 부재 위험',
                    'protection_plan' => 'IT재해복구 훈련 시행 계획 수립 및 실시',
                    'threatcode' => 'TC1-04',
                ),
            224 =>
                array (
                    'type' => 'Management',
                    'domain' => 'IT 재해복구',
                    'depth' => '13.2.2.2',
                    'clause' => '시험결과, IT 환경변화, 법률 등에 따른 변화를 반영할 수 있도록 복구전략 및 대책을 정기적으로 검토·보완하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'IT 서비스 복구전략 및 대책에 따라 효과적인 복구가 가능한지 시험 실시하기 위한 재해복구 훈련의 부족에 따른 실제 상황에서의 실효성 부재 위험',
                    'protection_plan' => 'IT재해복구 훈련 결과에 따른 체계 보완',
                    'threatcode' => 'TC1-04',
                ),
            225 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '1',
                    'clause' => '개인정보를 수집하는 경우 서비스 제공 또는 법령에 근거한 처리 등을 위해 필요한 범위 내에서 최소한의 정보만을 수집하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보통신서비스의 제공을 위하여 필요한 범위에서 최소한의 개인정보의 수집 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '필수동의 항목으로 수집하는 개인정보 항목 수집목적 외 최소화',
                    'threatcode' => 'TC8-01',
                ),
            226 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '2',
                    'clause' => '정보주체(이용자)가 수집 목적에 필요한 최소한의 정보 이외의 개인정보 수집에 동의하지 않는다는 이유로 서비스 또는 재화의 제공을 거부하지 않도록 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '이용자가 필요한 최소한의 개인정보 이외의 개인정보를 제공하지 아니한다는 이유로 해당 서비스 제공 거부 금지 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '이용자가 필요한 최소한의 개인정보 이외의 개인정보를 제공하지 아니한다는 이유로 해당 서비스 제공 거부 금지',
                    'threatcode' => 'TC8-01',
                ),
            227 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3',
                    'clause' => '개인정보 수집 시 법령에 특별한 규정이 있는 경우를 제외하고는 정보주체(이용자)에게 관련 내용을 명확하게 고지하고 동의를 받고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보 수집에 대한 동의 획득 절차 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보 수집/이용 목적, 수집 항목, 보유 및 이용 기간, 거부권 및 불이익을 명확히 고지하고 동의 획득',
                    'threatcode' => 'TC8-01',
                ),
            228 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '4',
                    'clause' => '정보주체(이용자)에게 동의를 서면(전자문서 포함)으로 받는 경우 법령에서 정한 중요한 내용에 대해 명확히 표시하여 알아보기 쉽게 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보 수집에 대한 동의 획득 절차 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보 수집/이용 목적, 수집 항목, 보유 및 이용 기간, 거부권 및 불이익을 명확히 고지하고 동의 획득',
                    'threatcode' => 'TC8-01',
                ),
            229 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '5',
                    'clause' => '만 14세 미만 아동의 개인정보에 대해 수집·이용·제공 등의 동의를 받는 경우 법정대리인에게 필요한 사항에 대하여 고지하고 동의를 받고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보의 수집/이용에 대한 동의와 제3자 제공, 처리위탁 동의 등에 대한 별도 동의 방식 지원 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보의 수집/이용에 대한 동의와 제3자 동의, 마케팅 목적 처리 동의 등에 대한 별도 동의 방식 지원',
                    'threatcode' => 'TC8-01',
                ),
            230 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '6',
                    'clause' => '법정대리인의 동의를 받기 위하여 필요한 최소한의 개인정보만을 수집하고 있으며, 법정대리인이 자격 요건을 갖추고 있는지 확인하는 절차와 방법을 마련하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '법정대리인의 동의를 받기 위한 필요 최소한의 개인정보 수집 및 자격 요건 확인 절차, 방법 마련 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '동의를 받기 위해 필요한 법정대리인의 최소한의 정보(이름，연락처)만을 수집하고, 법정대리인 자격 요건 충족 확인 절차 및 방법 마련',
                    'threatcode' => 'TC8-01',
                ),
            231 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '7',
                    'clause' => '주민등록번호는 명확한 법적 근거가 있는 경우에만 처리하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '법률에 근거하지 않는 주민등록번호의 수집 및 이용 금지 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '법에 근거한 주민등록번호 수집 및 처리',
                    'threatcode' => 'TC8-01',
                ),
            232 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '8',
                    'clause' => '법적 근거에 따라 정보주체(이용자)의 주민등록번호 수집이 가능한 경우에도 아이핀, 휴대폰 인증 등 주민등록번호를 대체하는 수단을 제공하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '회원가입 시 주민등록번호 대체 수단을 제공하지 않음으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '법률에 근거한 주민등록번호 수집 및 처리시에도 주민등록번호 외 회원가입 대체수단 제공
* I-PIN, 공인인증서, 휴대전화 인증 등',
                    'threatcode' => 'TC8-01',
                ),
            233 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '9',
                    'clause' => '민감정보는 정보주체(이용자)로부터 별도의 동의를 받거나 관련 법령에 근거가 있는 경우에만 처리하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보의 수집/이용에 대한 동의와 제3자 제공, 처리위탁 동의 등에 대한 별도 동의 방식 지원 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보의 수집/이용에 대한 동의와 제3자 동의, 마케팅 목적 처리 동의 등에 대한 별도 동의 방식 지원',
                    'threatcode' => 'TC8-01',
                ),
            234 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '10',
                    'clause' => '고유식별정보(주민등록번호 제외)는 정보주체(이용자)로부터 별도의 동의를 받거나 관련 법령에 구체적인 근거가 있는 경우에만 처리하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보의 수집/이용에 대한 동의와 제3자 제공, 처리위탁 동의 등에 대한 별도 동의 방식 지원 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보의 수집/이용에 대한 동의와 제3자 동의, 마케팅 목적 처리 동의 등에 대한 별도 동의 방식 지원',
                    'threatcode' => 'TC8-01',
                ),
            235 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '11',
                    'clause' => '정보주체(이용자) 이외로부터 수집한 개인정보를 처리하는 경우 개인정보의 종류·규모 등이 법적 요건에 해당하는 경우 필요한 사항을 정보주체(이용자)에게 알리고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '이용자 이외로부터 수집 및 처리하는 개인정보의 법적 요건 만족 시 필요한 사항의 통지 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '이용자 이외로부터 수집 및 처리하는 개인정보의 종류·규모 등이 법적 요건에 해당하는 경우 필요한 사항을 이용자에게 통지',
                    'threatcode' => 'TC8-01',
                ),
            236 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '12',
                    'clause' => '정보주체(이용자)에게 재화나 서비스를 홍보하거나 판매를 권유하기 위하여 개인정보 처리에 대한 동의를 받는 경우 정보주체(이용자)가 이를 명확하게 인지할 수 있도록 알리고 별도 동의를 받고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보의 수집/이용에 대한 동의와 제3자 제공, 처리위탁 동의 등에 대한 별도 동의 방식 지원 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보의 수집/이용에 대한 동의와 제3자 동의, 마케팅 목적 처리 동의 등에 대한 별도 동의 방식 지원',
                    'threatcode' => 'TC8-01',
                ),
            237 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '13',
                    'clause' => '전자적 전송매체를 이용하여 영리목적의 광고성 정보를 전송하는 경우 수신자의 명시적인 사전 동의를 받고 있으며, 2년 마다 정기적으로 수신자의 수신동의 여부를 확인하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '전자적 전송매체를 이용한 영리목적의 광고성 정보 전송 시 동의 방식 지원 및 정기적인 수신동의 여부 확인 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '문서 또는 구술의 방법으로 수신자의 명시적인 수신동의를 받아야 하며, 수신 동의를 받은 날로부터 수신 동의 여부를 2년마다 확인',
                    'threatcode' => 'TC8-01',
                ),
            238 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 보유 및 이용 시 보호조치',
                    'depth' => '14',
                    'clause' => '개인정보의 조회 및 출력(인쇄, 화면표시, 파일생성 등) 시 용도를 특정하고 용도에 따라 출력항목을 최소화하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보처리시스템 등에서 개인정보 조회 및 출력 시 용도에 따른 출력항목 최소화 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보처리시스템에 대한 최소한의 개인정보 조회 및 출력이 가능하도록 기능 구현',
                    'threatcode' => 'TC8-01',
                ),
            239 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 보유 및 이용 시 보호조치',
                    'depth' => '15',
                    'clause' => '정보주체(이용자)의 이동통신단말장치 내에 저장되어 있는 정보 및 이동통신단말장치에 설치된 기능에 대하여 접근할 수 있는 권한이 필요한 경우 명확하게 인지할 수 있도록 알리고 정보주체(이용자)의 동의를 받고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '접근권한 필요성에 대한 고지 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '앱 서비스에 접근권한의 필요성에 대해 고지하고 동의를 받도록 함',
                    'threatcode' => 'TC8-01',
                ),
            240 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 보유 및 이용 시 보호조치',
                    'depth' => '16',
                    'clause' => '이동통신단말장치 내에서 해당 서비스를 제공하기 위하여 반드시 필요한 접근권한이 아닌 경우, 정보주체(이용자)가 동의하지 않아도 서비스 제공을 거부하지 않도록 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '접근권한 부여에 대한 동의획득 절차 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '앱 서비스에 접근권한 부여 시 동의여부를 선택하도록 함',
                    'threatcode' => 'TC8-01',
                ),
            241 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 보유 및 이용 시 보호조치',
                    'depth' => '17',
                    'clause' => '이동통신단말장치 내에서 해당 접근권한에 대한 정보주체(이용자)의 동의 및 철회방법을 마련하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '앱 서비스 접근권한에 대한 이용자의 동의 및 철회방법 제공 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '앱 서비스 접근권한별 동의 및 철회방법을 제공할 수 있는 기능 구현',
                    'threatcode' => 'TC8-01',
                ),
            242 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 보유 및 이용 시 보호조치',
                    'depth' => '18',
                    'clause' => '개인정보를 수집 목적 또는 범위를 초과하여 이용하거나 제공하는 경우 정보주체(이용자)로부터 별도의 동의를 받거나 법적 근거가 있는 경우로 제한하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '수집 목적 이외로의 개인정보 유용 시 정보주체의 동의 없이 개인정보가 다른 곳에 사용되어 법적 요구사항을 만족시키지 못할 위험 ',
                    'protection_plan' => '수집 목적 이외로의 개인정보 유용을 절대 금지',
                    'threatcode' => 'TC8-01',
                ),
            243 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 제공 시 보호조치',
                    'depth' => '19',
                    'clause' => '개인정보를 제3자에게 제공하는 경우 법령에 규정이 있는 경우를 제외하고는 정보주체(이용자)에게 관련 내용을 명확하게 고지하고 동의를 받고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '이용자 개인정보의 제 3자에게 제공에 따른 고지 및 동의를 하지 않아 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '필요한 사항에 대하여 이용자 개인정보의 제 3자에게 제공에 따른 고지 및 동의를 반드시 득함',
                    'threatcode' => 'TC8-01',
                ),
            244 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 제공 시 보호조치',
                    'depth' => '20',
                    'clause' => '개인정보의 제3자 제공 동의는 수집·이용에 대한 동의와 구분하여 받고 이에 동의하지 않는다는 이유로 해당 서비스의 제공을 거부하지 않도록 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보의 수집 이용에 관한 동의와 구분하여 제3자 제공 동의 획득 절차 구현 및 미동의 시 서비스 제공 거부로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보의 수집 • 이용에 대한 동의와 제3자 제공 동의를 구분하여 받고, 이에 동의하지 않는다는 이유로 서비스 제공 거부 금지',
                    'threatcode' => 'TC8-01',
                ),
            245 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 제공 시 보호조치',
                    'depth' => '21',
                    'clause' => '개인정보 처리업무를 제3자에게 위탁하는 경우 인터넷 홈페이지 등에 위탁하는 업무의 내용과 수탁자를 현행화하여 공개하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보 처리 수탁사에 대한 미공개 및 누락으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보 처리 수탁사를 현행화하여 개인정보 처리방침 내 공개
* 개인정보 처리위탁을 받는 자, 위탁 업무 내용',
                    'threatcode' => 'TC8-01',
                ),
            246 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 제공 시 보호조치',
                    'depth' => '22',
                    'clause' => '개인정보 처리 위탁에 대한 동의가 필요한 경우 처리 위탁을 받은 자와 위탁하는 업무의 내용을 알리고 동의를 받고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '이용자에게 개인정보 처리 위탁 동의 획득 시 수탁자, 위탁 업무 내용 고지 및 동의 획득 절차 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보 처리 위탁에 대한 이용자 동의 필요 시 수탁자, 위탁 업무 내용을 고지하고 동의 획득',
                    'threatcode' => 'TC8-01',
                ),
            247 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 제공 시 보호조치',
                    'depth' => '23',
                    'clause' => '재화 또는 서비스를 홍보하거나 판매를 권유하는 업무를 위탁하는 경우에는 서면, 전자우편, 문자전송 등의 방법으로 위탁하는 업무의 내용과 수탁자를 정보주체에게 알리고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '재화 또는 서비스 홍보 및 판매 권유 업무 위탁 시 이용자에게 수탁자, 위탁 업무 내용 통지 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '재화 또는 서비스 홍보 및 판매 권유 업무 위탁 시 이용자에게 전자우편 등을 이용해 수탁자, 위탁 업무 내용 통지',
                    'threatcode' => 'TC8-01',
                ),
            248 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 제공 시 보호조치',
                    'depth' => '24',
                    'clause' => '수탁자가 위탁받은 업무를 제3자에게 재위탁하려는 경우 위탁자의 사전 동의를 받도록 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '위탁받은 업무의 제3자 재위탁에 대한 동의획득 절차 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '위탁자의 사전 동의를 받은 경우에 한하여 수탁자가 위탁받은 업무의 제3자 재위탁이 가능한 절차 수립',
                    'threatcode' => 'TC8-01',
                ),
            249 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 제공 시 보호조치',
                    'depth' => '25',
                    'clause' => '영업의 전부 또는 일부의 양도·합병 등으로 개인정보를 다른 사람에게 이전하는 경우 필요한 사항을 사전에 정보주체(이용자)에게 알리고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '영업양도자가 영업 양도 및 합병에 따른 개인정보 이전에 필요한 사항 통지 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '영업양도자가 영업 양도 및 합병에 따른 개인정보 이전에 필요한 사항을 이용자에게 명확히 고지하고 동의 획득',
                    'threatcode' => 'TC8-01',
                ),
            250 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 제공 시 보호조치',
                    'depth' => '26',
                    'clause' => '영업양수자 등은 법적 통지 요건에 해당될 경우 개인정보를 이전받은 사실을 정보주체(이용자)에게 지체 없이 알리고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '영업양수자가 영업 양수에 따른 개인정보 이전 사실 통지 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '영업 양수에 따른 따른 개인정보 이전 시 이전받은 사실을 이용자에게 통지',
                    'threatcode' => 'TC8-01',
                ),
            251 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 제공 시 보호조치',
                    'depth' => '27',
                    'clause' => '개인정보를 국외의 제3자에게 제공하는 경우 정보주체(이용자)에게 필요한 사항을 모두 알리고 동의를 받고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '이용자 개인정보의 국외(제 3자) 제공에 따른 고지 및 동의를 하지 않아 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '필요한 사항에 대하여 이용자 개인정보의 국외(제 3자) 제공에 따른 고지 및 동의를 반드시 득함',
                    'threatcode' => 'TC8-01',
                ),
            252 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 제공 시 보호조치',
                    'depth' => '28',
                    'clause' => '정보통신서비스의 제공에 관한 계약을 이행하고 이용자 편의 증진 등을 위하여 필요한 경우로서 이용자의 개인정보를 국외에 처리위탁 또는 보관하는 경우에는 동의에 갈음하여 관련 사항을 이용자에게 알리고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보통신서비스 제공에 관한 계약 이행 및 이용자 편의 증진 등을 위한 경우 이용자 개인정보 국외 처리위탁 또는 보관 시 이용자에게 관련 사항 통지 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '정보통신서비스 제공에 관한 계약 이행 및 이용자 편의 증진 등을 위한 경우 이용자 개인정보 국외 처리위탁 또는 보관 시 개인정보 처리방침 내 공개 또는 전자우편 등을 이용해 관련 사항 통지',
                    'threatcode' => 'TC8-01',
                ),
            253 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 파기 시 보호조치',
                    'depth' => '29',
                    'clause' => '개인정보의 처리목적이 달성되거나 보유기간이 경과한 경우 지체 없이 해당 개인정보를 파기하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '수집/이용 목적의 달성, 이용 기간 만료, 폐업(서비스 중지)의 경우 개인정보의 완전파기 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '수집 목적을 달성하고 더 이상 필요하지 않은 개인정보의 경우에는 저장하지 않고 파기해야 함(법령에 따라 보존이 필요한 경우 보존기간 만료 시 파기)',
                    'threatcode' => 'TC8-01',
                ),
            254 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 파기 시 보호조치',
                    'depth' => '30',
                    'clause' => '개인정보의 보유기간 경과 또는 처리목적 달성 후에도 관련 법령 등에 따라 파기하지 아니하고 보존하는 경우, 관련 법령에 따른 최소한의 기간으로 한정하여 최소한의 정보만을 보존하도록 관리하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '관련 법령 등에 따라 개인정보를 파기하지 않고 보관 시 최소한의 기간 및 정보만을 보관하지 않아 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '관련 법령 등에 따라 개인정보를 파기하지 않고 보존하는 경우 최소한의 기간으로 최소 정보만을 보관',
                    'threatcode' => 'TC8-01',
                ),
            255 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 파기 시 보호조치',
                    'depth' => '31',
                    'clause' => '개인정보의 보유기간 경과 또는 처리목적 달성 후에도 관련 법령 등에 따라 파기하지 아니하고 보존하는 경우 해당 개인정보 또는 개인정보파일을 다른 개인정보와 분리하여 저장·관리하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '법령에 따라 개인정보 보관 시 별도 분리 보관하지 않아 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '법령에 따라 개인정보 보관 시 별도의 DB로 분리 보관',
                    'threatcode' => 'TC8-01',
                ),
            256 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 파기 시 보호조치',
                    'depth' => '32',
                    'clause' => '정보통신서비스 제공자등은 법령에서 정한 기간 동안 이용하지 않는 휴면 이용자의 개인정보를 파기 또는 분리 보관하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '1년 미사용 고객 개인정보에 대한 분리 보관 관리가 미흡하여 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '1년이상 서비스 미이용자의 개인정보를 별도의 DB로 분리보관',
                    'threatcode' => 'TC8-01',
                ),
            257 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 파기 시 보호조치',
                    'depth' => '33',
                    'clause' => '휴면 이용자의 개인정보를 파기하거나 분리하여 저장·관리하려는 경우 이용자에게 알리고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '1년 미이용 기간의 만료 30일 전까지 개인정보의 파기 혹은 분리되어 저장·관리되는 사실과 기간 만료일 및 해당 개인정보의 항목에 대한 이용자 고지 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '1년 미 이용 기간의 만료 30일 전까지 이용자 고지 함
* 개인정보의 파기 혹은 분리되어 저장·관리되는 사실
* 기간 만료일 및 해당 개인정보의 항목',
                    'threatcode' => 'TC8-01',
                ),
            258 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '개인정보 파기 시 보호조치',
                    'depth' => '34',
                    'clause' => '분리되어 저장·관리하는 휴면 이용자의 개인정보에 대하여 접근권한을 최소한의 인원으로 제한하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '분리 저장·관리되는 휴면 이용자의 개인정보 접근 가능 인원 최소화 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '분리 저장·관리되는 휴면 이용자의 개인정보가 저장된 DB 접근 가능 인원 최소화',
                    'threatcode' => 'TC8-01',
                ),
            259 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '정보주체 권리보호',
                    'depth' => '35',
                    'clause' => '개인정보 처리방침을 정보주체(이용자)가 쉽게 확인할 수 있도록 인터넷 홈페이지 등에 지속적으로 현행화하여 공개하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보 처리방침 변경내역 공개 및 이력관리 미흡으로 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '운영하는 홈페이지 공지를 통해 변경/시행일, 변경된 내용을 변경 전/후를 비교하여 지속적으로 공개',
                    'threatcode' => 'TC8-01',
                ),
            260 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '정보주체 권리보호',
                    'depth' => '36',
                    'clause' => '개인정보 처리방침이 변경되는 경우 사유 및 변경 내용을 지체없이 공지하고 정보주체(이용자)가 언제든지 변경된 사항을 쉽게 알아 볼 수 있도록 조치하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보 처리방침 변경내역 공개 및 이력관리 미흡으로 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '운영하는 홈페이지 공지를 통해 변경/시행일, 변경된 내용을 변경 전/후를 비교하여 지속적으로 공개',
                    'threatcode' => 'TC8-01',
                ),
            261 =>
                array (
                    'type' => 'Privacy2',
                    'domain' => '정보주체 권리보호',
                    'depth' => '37',
                    'clause' => '법적 의무 대상자에 해당하는 경우 개인정보 이용내역을 주기적으로 정보주체(이용자)에게 통지하고 그 기록을 남기고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '연 1회 이상 개인정보 이용내역의 통지 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '연 1회 이상 개인정보 이용내역의 통지 함
* 개인정보의 수집·이용 목적 및 항목
* 개인정보를 제공받은 자, 목적, 항목
* 개인정보 처리위탁을 받는 자, 위탁 업무 내용',
                    'threatcode' => 'TC8-01',
                ),
            262 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 기반 마련',
                    'depth' => '1.1.1.1',
                    'clause' => '정보보호 및 개인정보보호 관리체계의 수립 및 운영활동 전반에 경영진의 참여가 이루어질 수 있도록 보고 및 의사결정 등의 책임과 역할을 문서화하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '중요 정보보호 사안에 대한 경영진 보고 및 의사결정 지연 또는 누락',
                    'protection_plan' => '중요 정보보호 사안에 대한 경영진 참여 활동 근거를 정보보호 정책 등에 명시',
                    'threatcode' => 'TC1-11',
                ),
            263 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 기반 마련',
                    'depth' => '1.1.1.2',
                    'clause' => '경영진이 정보보호 및 개인정보보호 활동에 관한 의사결정에 적극적으로 참여할 수 있는 보고, 검토 및 승인 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '중요 정보보호 활동에 대한 경영진 보고 및 승인 누락',
                    'protection_plan' => '조직의 규모 및 특성에 맞게 경영진 보고 및 의사결정 절차 수립',
                    'threatcode' => 'TC1-13',
                ),
            264 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 기반 마련',
                    'depth' => '1.1.2.1',
                    'clause' => '최고경영자는 정보보호 및 개인정보보호 처리에 관한 업무를 총괄하여 책임질 최고책임자를 공식적으로 지정하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 업무 전반의 총괄책임자 부재에 따른 실행력 저하 위험',
                    'protection_plan' => '정보보호 관련 업무를 총괄 관리할 수 있는 임원급의 정보보호 최고책임자(CISO) 공식 지정(인사발령 등)',
                    'threatcode' => 'TC1-06',
                ),
            265 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 기반 마련',
                    'depth' => '1.1.2.2',
                    'clause' => '정보보호 최고책임자 및 개인정보 보호책임자는 예산, 인력 등 지원을 할당할 수 있는 임원급으로 지정하고 있으며 관련 법령에 따른 자격요건을 충족하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '총괄책임자(CISO/CPO)의 적격성 미비로 인해 즉시적이고 효율적인 자원 할당이 지연될 위험',
                    'protection_plan' => '관련 법령에 따른 자격 요건을 충족하는 총괄책임자(CISO, CPO) 지정',
                    'threatcode' => 'TC1-06',
                ),
            266 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 기반 마련',
                    'depth' => '1.1.3.1',
                    'clause' => '정보보호 최고책임자 및 개인정보 보호책임자의 업무를 지원하고 조직의 정보보호 및 개인정보보호 활동을 체계적으로 이행하기 위해 전문성을 갖춘 실무조직을 구성하여 운영하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '실무조직 구성이 미흡하여 정보보호 및 개인정보보호  활동이 체계적으로 이행되지 않을 위험',
                    'protection_plan' => '정보보호 및 개인정보보호 전문성(학위/자격/경력/관련교육이수 등)을 고려하여 실무조직 구성원 공식 임명',
                    'threatcode' => 'TC1-06',
                ),
            267 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 기반 마련',
                    'depth' => '1.1.3.2',
                    'clause' => '조직 전반에 걸친 중요한 정보보호 및 개인정보보호 관련사항에 대하여 검토, 승인 및 의사결정을 할 수 있는 위원회를 구성하여 운영하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 및 개인정보보호 관련 위원회 구성이 미흡하여 실질적인 검토 및 중요 의사결정이 지연될 위험',
                    'protection_plan' => '정보보호위원회는 중요한 정보보호 관련 사항에 대해 검토 및 의사결정이 가능한 인원으로 구성',
                    'threatcode' => 'TC1-06',
                ),
            268 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 기반 마련',
                    'depth' => '1.1.3.3',
                    'clause' => '전사적 정보보호 및 개인정보보호 활동을 위하여 정보보호 및 개인정보보호 관련 담당자 및 부서별 담당자로 구성된 실무 협의체를 구성하여 운영하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 및 개인정보보호 관련 실무 협의체 구성이 미흡하여 실무 차원에서의 중요 의사결정이 지연될 위험',
                    'protection_plan' => '정보보호활동을 체계적으로 이행하기 위한 실무조직 구성',
                    'threatcode' => 'TC1-06',
                ),
            269 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 기반 마련',
                    'depth' => '1.1.4.1',
                    'clause' => '조직의 핵심 서비스 및 개인정보 처리에 영향을 줄 수 있는 핵심자산을 포함하도록 관리체계 범위를 설정하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '관리체계 범위 내의 모든 정보자산에 대한 식별 및 분류가 미흡하여 정보자산의 관리 소홀에 따른 사고 발생 위험 ',
                    'protection_plan' => '정보자산의 분류기준 수립 및 정보보호 관리체계 범위 내 모든 정보자산 식별',
                    'threatcode' => 'TC1-02',
                ),
            270 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 기반 마련',
                    'depth' => '1.1.4.2',
                    'clause' => '정의된 범위 내에서 예외사항이 있을 경우 명확한 사유 및 관련자 협의·책임자 승인 등 관련 근거를 기록·관리하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '임의로 인증범위에서 제외한 서비스 및 정보시스템 관리 소홀에 따른 사고 발생 위험',
                    'protection_plan' => '특정 서비스/정보시스템의 인증범위 제외 사유 및 근거에 대한 내부 협의 및 책임자 승인 내역 기록 관리',
                    'threatcode' => 'TC1-04',
                ),
            271 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 기반 마련',
                    'depth' => '1.1.4.3',
                    'clause' => '정보보호 및 개인정보보호 관리체계 범위를 명확히 확인할 수 있도록 관련된 내용(주요 서비스 및 업무 현황, 정보시스템 목록, 문서목록 등)이 포함된 문서를 작성하여 관리하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '관리체계 범위 정의 미흡에 따른 미식별 서비스 및 정보자산에 대해 보안업무 기준 적용이 어려움',
                    'protection_plan' => '관리체계 범위 내 관련 서비스/업무/정보자산 등을 파악하여 관리체계 명세서 등에 기록하여 유지 관리',
                    'threatcode' => 'TC1-04',
                ),
            272 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 기반 마련',
                    'depth' => '1.1.5.1',
                    'clause' => '조직이 수행하는 모든 정보보호 및 개인정보보호 활동의 근거를 포함하는 최상위 수준의 정보보호 및 개인정보보호 정책을 수립하였는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호정책의 시행 당위성 부재에 따른 정보보호 업무에 대한 기준 적용의 어려움 발생 위험',
                    'protection_plan' => '정보보호 및 개인정보보호 활동의 근거를 포함하는 최상위 정책 수립',
                    'threatcode' => 'TC1-11',
                ),
            273 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 기반 마련',
                    'depth' => '1.1.5.2',
                    'clause' => '정보보호 및 개인정보보호 정책의 시행을 위하여 필요한 세부적인 방법, 절차, 주기 등을 규정한 지침, 절차, 매뉴얼 등을 수립하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 활동에 대한 체계적인 문서화 및 세부 활동 정의가 미흡하여 체계적이고 일관된 보안업무 적용이 어려울 위험',
                    'protection_plan' => '정보보호정책의 시행을 위하여 필요한 세부적인 방법, 절차, 주기 등을 규정한 정보보호 지침, 절차, 매뉴얼 등 수립',
                    'threatcode' => 'TC1-11',
                ),
            274 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 기반 마련',
                    'depth' => '1.1.5.3',
                    'clause' => '정보보호 및 개인정보보호 정책·시행문서의 제·개정 시 최고경영자 또는 최고경영자로부터 권한을 위임받은 자의 승인을 받고 있는가',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호정책의 시행 당위성 부재에 따른 정보보호 업무에 대한 기준 적용의 어려움 발생 위험',
                    'protection_plan' => '지침, 절차 등 정책시행 문서 제·개정 시 최고경영자의 위임을 받은 책임자(CISO 등) 승인',
                    'threatcode' => 'TC1-13',
                ),
            275 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 기반 마련',
                    'depth' => '1.1.5.4',
                    'clause' => '정보보호 및 개인정보보호 정책·시행문서의 최신본을 관련 임직원에게 접근하기 쉬운 형태로 제공하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '명시적인 정보보호 기준을 인지하지 못하여 보안기준에 적합하지 않은 업무 수행 위험',
                    'protection_plan' => '정보보호정책 문서의 최신본 제공',
                    'threatcode' => 'TC1-09',
                ),
            276 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 기반 마련',
                    'depth' => '1.1.6.1',
                    'clause' => '정보보호 및 개인정보보호 분야별 전문성을 갖춘 인력을 확보하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 실무조직 구성이 미흡하여 정보보호활동이 체계적으로 이행되지 않을 위험',
                    'protection_plan' => '정보보호 전문성을 고려하여 실무조직 구성원 임명',
                    'threatcode' => 'TC1-06',
                ),
            277 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 기반 마련',
                    'depth' => '1.1.6.2',
                    'clause' => '정보보호 및 개인정보보호 관리체계의 효과적 구현과 지속적 운영을 위해 필요한 자원을 평가하여 필요한 예산과 인력을 지원하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '예산 및 인력 운영 평가 및 계획 미비로 인해 지속적인 관리체계 운영 및 지원에 상당한 어려움 발생',
                    'protection_plan' => '관리체계 구축 및 운영에 필요한 예산, 자원을 평가하여 운영 계획 수립 및 경영진 승인',
                    'threatcode' => 'TC1-04',
                ),
            278 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 기반 마련',
                    'depth' => '1.1.6.3',
                    'clause' => '연도별 정보보호 및 개인정보보호 업무 세부추진 계획을 수립·시행하고 그 추진결과에 대한 심사분석·평가를 실시하는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 및 개인정보보호 업무 세부추진 계획 및 심사분석 미비/부재로 인해 실제 업무 추진에 어려움 발생, 행정규칙/자치법규 위반',
                    'protection_plan' => '연간 정보보호 계획서 등을 참고하여 업무 세부추진 계획을 수립 시행하고, 심사 분석평가 결과 제출',
                    'threatcode' => 'TC1-04',
                ),
            279 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '위험 관리',
                    'depth' => '1.2.1.1',
                    'clause' => '정보자산의 분류기준을 수립하고 정보보호 및 개인정보보호 관리체계 범위 내의 모든 자산을 식별하여 목록으로 관리하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보자산 식별 및 분류가 미흡하여 정보자산의 관리 소홀에 따른 사고 발생 위험 ',
                    'protection_plan' => '정보자산 분류기준에 따라 관리체계 범위 내 모든 정보자산을 식별하여 목록으로 관리',
                    'threatcode' => 'TC1-02',
                ),
            280 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '위험 관리',
                    'depth' => '1.2.1.2',
                    'clause' => '식별된 정보자산에 대해 법적 요구사항 및 업무에 미치는 영향 등을 고려하여 중요도를 결정하고 보안등급을 부여하고 있는가? ',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '보안등급 정의 미흡에 따른 관리력 낭비 및 상위 보안등급 정보자산에 대한 관리 소홀에 따른 정보유출 등 보안사고 발생 위험',
                    'protection_plan' => '정보자산별로 중요도를 평가하고 각 자산별 특성에 적합한 보안등급 부여',
                    'threatcode' => 'TC1-04',
                ),
            281 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '위험 관리',
                    'depth' => '1.2.1.3',
                    'clause' => '정기적으로 정보자산 현황을 조사하여 정보자산목록을 최신으로 유지하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호관리체계 범위 내의 모든 정보자산에 대한 식별 및 분류가 미흡하여 정보자산의 관리 소홀에 따른 사고 발생 위험 ',
                    'protection_plan' => '정기적으로 정보자산 현황을 조사하고 정보자산목록을 최신으로 유지',
                    'threatcode' => 'TC1-04',
                ),
            282 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '위험 관리',
                    'depth' => '1.2.2.1',
                    'clause' => '관리체계 전 영역에 대한 정보서비스 현황을 식별하고 업무 절차와 흐름을 파악하여 문서화하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '관리체계 전 영역에 대한 정보서비스 현황을 파악 및 문서화 하는 절차가 미흡하여, 업무 절차와 흐름을 파악하기 어려운 위험',
                    'protection_plan' => '관리체계 범위 내 정보서비스 영역에 대한 현황 및 업무 절차와 흐름을 파악 후 문서화',
                    'threatcode' => 'TC1-02',
                ),
            283 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '위험 관리',
                    'depth' => '1.2.2.2',
                    'clause' => '관리체계 범위 내 개인정보 처리 현황을 식별하고 개인정보의 흐름을 파악하여 개인정보흐름도 등으로 문서화하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '관리체계 범위 내 개인정보 처리 현황을 파악 및 문서화하지 않아, 개인정보의 흐름을 파악하기 어려운 위험',
                    'protection_plan' => '관리체계 범위 내 개인정보의 흐름을 파악하여 개인정보흐름도 등 작성',
                    'threatcode' => 'TC1-12',
                ),
            284 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '위험 관리',
                    'depth' => '1.2.2.3',
                    'clause' => '서비스 및 업무, 정보자산 등의 변화에 따른 업무절차 및 개인정보 흐름을 주기적으로 검토하여 흐름도 등 관련 문서의 최신성을 유지하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '서비스 및 업무 절차와 개인정보 흐름의 변화에 대한 검토가 미흡하여, 업무 절차 및 개인정보 흐름의 최신 현황을 파악하기 어려운 위험',
                    'protection_plan' => '서비스 및 업무, 정보자산 등의 변화에 따라 업무절차 및 개인정보 흐름을 검토하여, 관련 문서의 최신성을 유지',
                    'threatcode' => 'TC1-12',
                ),
            285 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '위험 관리',
                    'depth' => '1.2.3.1',
                    'clause' => '조직 또는 서비스의 특성에 따라 다양한 측면에서 발생할 수 있는 위험을 식별하고 평가할 수 있는 방법을 정의하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '다양한 측면에서 발생 가능한 위험을 식별하고 평가할 수 있는 방법을 정의하지 못하여, 합리적이고 실질적인 위험평가가 수행되지 않을 위험',
                    'protection_plan' => '다양한 측면에서 발생 가능한 위험을 식별하고 합리적이고 실직적인 위험을 평가할 수 있는 방법을 정의',
                    'threatcode' => 'TC1-02',
                ),
            286 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '위험 관리',
                    'depth' => '1.2.3.2',
                    'clause' => '위험관리 방법 및 절차(수행인력, 기간, 대상, 방법, 예산 등)를 구체화한 위험관리계획을 매년 수립하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '구체화 된 위험관리 계획을 수립하지 못하여, 연간 위험관리 절차가 체계적으로 수행되지 않을 위험',
                    'protection_plan' => '위험관리 방법 및 절차(수행인력, 기간, 대상, 방법, 예산 등)를 구체화한 위험관리계획을 수립',
                    'threatcode' => 'TC1-02',
                ),
            287 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '위험 관리',
                    'depth' => '1.2.3.3',
                    'clause' => '위험관리계획에 따라 연 1회 이상 정기적으로 또는 필요한 시점에 위험평가를 수행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '위험평가의 미수행으로 서비스 및 정보자산의 취약점과 법적 요구사항 준수 여부 등의 위험을 식별하지 못할 위험 ',
                    'protection_plan' => '위험관리 계획에 따라른 관리체계 범위 전 영역에 대해 위험평가를 시행',
                    'threatcode' => 'TC1-04',
                ),
            288 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '위험 관리',
                    'depth' => '1.2.3.4',
                    'clause' => '조직에서 수용 가능한 목표 위험수준을 정하고 그 수준을 초과하는 위험을 식별하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '수용 가능한 목표 위험수준의 설정이 미흡하여, 전체 위험에서 수용 가능한 위험의 식별이 어려운 위험 ',
                    'protection_plan' => '조직의 의사결정을 통해 수용 가능한 목표 위험수준을 정하고 그 수준을 초과하는 위험을 식별',
                    'threatcode' => 'TC1-02',
                ),
            289 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '위험 관리',
                    'depth' => '1.2.3.5',
                    'clause' => '위험식별 및 평가 결과를 경영진에게 보고하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '위험식별 및 평가결과를 경영진에게 보고하지 않음으로, 위험관리 활동에 대한 실행력이 저하되는 위험',
                    'protection_plan' => '위험식별 및 평가 결과를 경영진에게 보고',
                    'threatcode' => 'TC1-13',
                ),
            290 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '위험 관리',
                    'depth' => '1.2.4.1',
                    'clause' => '식별된 위험에 대한 처리 전략(감소, 회피, 전가, 수용 등)을 수립하고 위험처리를 위한 보호대책을 선정하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '식별된 위험에 대한 처리 전략 및 보호대책 수립이 미흡하여, 적절한 처리를 통한 위험수준 감소가 어려운 위험',
                    'protection_plan' => '위험수준 감소를 위한 처리전략을 수립하고, 보호대책을 선정',
                    'threatcode' => 'TC1-04',
                ),
            291 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '위험 관리',
                    'depth' => '1.2.4.2',
                    'clause' => '보호대책의 우선순위를 고려하여 일정, 담당부서 및 담당자, 예산 등의 항목을 포함한 보호대책 이행계획을 수립하고 경영진에 보고하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '보호대책 이행계획의 수립 후 경영진에게 보고하지 않음으로, 활동에 대한 실행력이 저하되는 위험',
                    'protection_plan' => '보호대책의 이행계획을 수립한 후 경영진에게 보고',
                    'threatcode' => 'TC1-13',
                ),
            292 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 운영',
                    'depth' => '1.3.1.1',
                    'clause' => '이행계획에 따라 보호대책을 효과적으로 구현하고 이행결과의 정확성 및 효과성 여부를 경영진이 확인할 수 있도록 보고하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '이행계획에 따른 진행 상황 및 이행계획의 변동 사항 등을 경영진에게 보고하지 않음으로, 활동에 대한 지속적인 당위성 확보가 어려운 위험',
                    'protection_plan' => '이행계획에 따른 진행 상황 및 이행계획의 변동 사항 등을 경영진에게 보고',
                    'threatcode' => 'TC1-13',
                ),
            293 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 운영',
                    'depth' => '1.3.1.2',
                    'clause' => '관리체계 인증기준 별로 보호대책 구현 및 운영 현황을 기록한 운영명세서를 구체적으로 작성하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '관리체계 및 보호대책 인증 기준에 따른 운영명세서 작성이 미흡하여, 정보보호관리체계의 현황 파악이 어려운 위험',
                    'protection_plan' => '정보호호관리체계 운영 현황을 기록한 운영명세서 작성',
                    'threatcode' => 'TC1-12',
                ),
            294 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 운영',
                    'depth' => '1.3.2.1',
                    'clause' => '구현된 보호대책을 운영 또는 시행할 부서 및 담당자를 명확하게 파악하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '보호대책을 운영 또는 시행할 부서 및 담당자에 대해 식별이 미흡하여, 불명확한 책임소재 등으로 적절한 운영 또는 시행이 이루어지지 않을 위험',
                    'protection_plan' => '보호대책을 운영 또는 시행할 부서 및 담당자를 명확히 파악 ',
                    'threatcode' => 'TC1-07',
                ),
            295 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 운영',
                    'depth' => '1.3.2.2',
                    'clause' => '구현된 보호대책을 운영 또는 시행할 부서 및 담당자에게 관련 내용을 공유 또는 교육하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '보호조치에 관한 내용의 공유 및 교육이 미흡하여, 시행하는 부서 및 담당자의 보호대책 운영 또는 시행이 미흡한 위험',
                    'protection_plan' => '보호조치 시행 부서 및 담당자에게 관련 내용 공유 또는 교육',
                    'threatcode' => 'TC1-09',
                ),
            296 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 운영',
                    'depth' => '1.3.3.1',
                    'clause' => '관리체계 운영을 위해 주기적 또는 상시적으로 수행해야 하는 정보보호 및 개인정보보호 활동을 문서화하여 관리하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '관리체계 운영을 위한 활동의 문서화 및 주기적 관리가 미흡하여, 정보보호 활동에 대한 증빙 및 법적 요구사항을 준수하지 못할 위험',
                    'protection_plan' => '관리체계 운영을 위한 활동의 문서화 및 주기적 관리',
                    'threatcode' => 'TC1-12',
                ),
            297 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 운영',
                    'depth' => '1.3.3.2',
                    'clause' => '경영진은 주기적으로 관리체계 운영활동의 효과성을 확인하고 이를 관리하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '관리체계 운영 활동의 경영진의 주기적인 확인 및 관리가 미흡하여, 관리체계 운영 활동에 대한 효과성 검증이 어려운 위험',
                    'protection_plan' => '경영진의 관리체계 운영활동 주기적 점검',
                    'threatcode' => 'TC1-01',
                ),
            298 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 점검 및 개선',
                    'depth' => '1.4.1.1',
                    'clause' => '조직이 준수하여야 하는 정보보호 및 개인정보보호 관련 법적 요구사항을 파악하여 최신성을 유지하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 및 개인정보보호 관련 법적 요구사항을 파악하지 못해 법적 요구사항을 준수하지 못할 위험',
                    'protection_plan' => '조직이 준수해야할 정보보호 및 개인정보보호 관련 법적요구사항을 파악',
                    'threatcode' => 'TC8-01',
                ),
            299 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 점검 및 개선',
                    'depth' => '1.4.1.2',
                    'clause' => '법적 요구사항의 준수여부를 연 1회 이상 정기적으로 검토하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '법적 요구사항의 준수여부를 연 1회 이상 검토하지 않아, 법적 요구사항의 준수여부를 파악하지 못할 위험',
                    'protection_plan' => '연 1회 이상 법적 요구사항 준수 검토',
                    'threatcode' => 'TC8-01',
                ),
            300 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 점검 및 개선',
                    'depth' => '1.4.2.1',
                    'clause' => '법적 요구사항 및 수립된 정책에 따라 정보보호 및 개인정보보호 관리체계가 효과적으로 운영되는지를 점검하기 위한 관리체계 점검기준, 범위, 주기, 점검인력 자격요건 등을 포함한 관리체계 점검 계획을 수립하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '구체적인 관리체계 점검 계획을 수립하지 못하여, 체계적인 관리체계 점검을 수립하지 못할 위험',
                    'protection_plan' => '구체적인 관리체계 점검 계획을 수립',
                    'threatcode' => 'TC1-02',
                ),
            301 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 점검 및 개선',
                    'depth' => '1.4.2.2',
                    'clause' => '관리체계 점검 계획에 따라 독립성, 객관성 및 전문성이 확보된 인력을 구성하여 연 1회 이상 점검을 수행하고 발견된 문제점을 경영진에게 보고하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '계획에 따른 독립성, 전문성을 갖춘 감사 인력을 통한 점검 및 점검 후 경영전 보고 등이 미흡하여, 관리체계 점검의 객관성 및 당위성 확보가 어려운 위험',
                    'protection_plan' => '객관성을 갖춘 감사인원을 통해 관리쳬계 점검 수행 후 경영진에게 결과 보고',
                    'threatcode' => 'TC1-13',
                ),
            302 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 점검 및 개선',
                    'depth' => '1.4.3.1',
                    'clause' => '법적 요구사항 준수검토 및 관리체계 점검을 통해 식별된 관리체계 상의 문제점에 대한 근본 원인을 분석하여 재발방지 및 개선 대책을 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '식별된 관리체계 상의 문제점을 분석 및 개선 대책을 수립하지 못하여, 식별된 관리체계 상의 문제점을 조치하지 못하는 위험',
                    'protection_plan' => '식별된 관리체계 상의 문제점에 대한 개선 대책 수립 및 이행',
                    'threatcode' => 'TC1-01',
                ),
            303 =>
                array (
                    'type' => 'ISMS-P1',
                    'domain' => '관리체계 점검 및 개선',
                    'depth' => '1.4.3.2',
                    'clause' => '재발방지 및 개선 결과의 정확성 및 효과성 여부를 확인하기 위한 기준과 절차를 마련하였는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '재발방지 및 개선 결과의 기준과 절차를 수립하지 못하여, 정확성 및 효과성 여부를 확인하기 어려운 위험',
                    'protection_plan' => '재발방지 및 개선 결과의 정확성 및 효과성 여부를 확인하기위한 기준과 절차 수립',
                    'threatcode' => 'TC1-01',
                ),
            304 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '정책, 조직, 자산 관리',
                    'depth' => '2.1.1.1',
                    'clause' => '정보보호 및 개인정보보호 관련 정책 및 시행문서에 대한 정기적인 타당성 검토 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호정책 및 정책시행 문서에 대한 검토활동을 수행하지 않아, 필요 절차가 누락되거나 정보보호 환경 변화 사항을 반영하지 못할 위험',
                    'protection_plan' => '정기적 타당성 검토 절차 수립',
                    'threatcode' => 'TC1-12',
                ),
            305 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '정책, 조직, 자산 관리',
                    'depth' => '2.1.1.2',
                    'clause' => '조직의 대내외 환경에 중대한 변화 발생 시 정보보호 및 개인정보보호 관련 정책 및 시행문서에 미치는 영향을 검토하고 필요 시 제·개정하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호정책 및 정책시행 문서에 대한 검토활동을 수행하지 않아, 필요 절차가 누락되거나 정보보호 환경 변화 사항을 반영하지 못할 위험',
                    'protection_plan' => '중대한 환경 변화 시 정보보호정책 및 정책시행 문서에 미치는 영향을 분석하고 제·개정 필요성 여부 검토',
                    'threatcode' => 'TC1-12',
                ),
            306 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '정책, 조직, 자산 관리',
                    'depth' => '2.1.1.3',
                    'clause' => '정보보호 및 개인정보보호 관련 정책 및 시행문서의 제·개정 시 이해 관계자의 검토를 받고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '이해관련자의 검토가 수행되지 않아, 조직 내에서 실제 수행하는 정보보호 활동이 문서에 반영되지 않을 위험',
                    'protection_plan' => '정보보호정책 및 정책시행 문서(지침, 절차 등)의 제·개정 시 이해관련자 검토',
                    'threatcode' => 'TC1-12',
                ),
            307 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '정책, 조직, 자산 관리',
                    'depth' => '2.1.1.4',
                    'clause' => '정보보호 및 개인정보보호 관련 정책 및 시행문서의 제·개정 내역에 대하여 이력 관리를 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호정책 및 정책시행 문서 관리 절차 미흡으로 인해 현행 보안기준에 적합하지 않은 업무 수행 위험',
                    'protection_plan' => '정보보호정책서의 제정, 개정, 배포, 폐기 등의 이력을 확인할 수 있도록 관리절차 수립/이행',
                    'threatcode' => 'TC1-14',
                ),
            308 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '정책, 조직, 자산 관리',
                    'depth' => '2.1.2.1',
                    'clause' => '정보보호 및 개인정보보호 관련 책임자와 담당자의 역할 및 책임을 명확히 정의하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호 관련 담당자의 직무별 역할이 불명확하여 정보보호 활동이 체계적으로 수행되지 않을 위험',
                    'protection_plan' => '정보보호 최고책임자와 정보보호 관련 담당자의 역할 및 책임 정의',
                    'threatcode' => 'TC1-07',
                ),
            309 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '정책, 조직, 자산 관리',
                    'depth' => '2.1.2.2',
                    'clause' => '정보보호 및 개인정보보호 관련 책임자와 담당자의 활동을 평가할 수 있는 체계를 수립하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호 인력의 책임업무 이행 지원 미흡 및 업무 추진 활동의 평가체계 부재로 인한 업무 실행력 저하 위험',
                    'protection_plan' => '정보보호 최고책임자와 정보보호 관련 담당자의 활동을 평가할 수 있는 체계 수립',
                    'threatcode' => 'TC1-07',
                ),
            310 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '정책, 조직, 자산 관리',
                    'depth' => '2.1.2.3',
                    'clause' => '정보보호 및 개인정보보호 관련 조직 및 조직의 구성원간 상호 의사소통할 수 있는 체계 및 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호 및 개인정보보호 관련 조직 및 구성원간 의사소통 체계 및 절차가 미흡하여, 조직 및 구성원간 협조, 협의 등이 어려운 위험',
                    'protection_plan' => '정보보보 및 개인정보보호 관련 조직 및 구성원간 의사소통 체계 및 절차 수립·이행',
                    'threatcode' => 'TC1-04',
                ),
            311 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '정책, 조직, 자산 관리',
                    'depth' => '2.1.3.1',
                    'clause' => '정보자산의 보안등급에 따른 취급절차(생성·도입, 저장, 이용, 파기) 및 보호대책을 정의하고 이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '보안등급 정의 미흡에 따른 관리력 낭비 및 상위 보안등급 정보자산에 대한 관리 소홀에 따른 정보유출 등 보안사고 발생 위험',
                    'protection_plan' => '정보자산의 보안등급에 따른 취급절차(생성, 저장, 이용, 파기 등) 정의 및 이행',
                    'threatcode' => 'TC1-04',
                ),
            312 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '정책, 조직, 자산 관리',
                    'depth' => '2.1.3.2',
                    'clause' => '식별된 정보자산에 대하여 책임자 및 관리자를 지정하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '불분명한 책임소재로 인해 정보자산관리 소홀 및 문제 상황이 발생할 위험',
                    'protection_plan' => '식별된 정보자산에 대한 책임자 및 관리자 지정',
                    'threatcode' => 'TC1-07',
                ),
            313 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인적 보안',
                    'depth' => '2.2.1.1',
                    'clause' => '개인정보 및 중요정보의 취급, 주요 시스템 접근 등 주요 직무의 기준을 명확히 정의하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '주요 직무자에 대한 식별 및 직무 분리가 이뤄지지 않아, 의도적/비의도적 권한 오남용 발생 위험',
                    'protection_plan' => '조직 내 중요 정보자산(개인정보, 시스템 등)을 취급하는 직무를 정의하고 해당 직무를 수행하는 주요 직무자 지정',
                    'threatcode' => 'TC1-07',
                ),
            314 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인적 보안',
                    'depth' => '2.2.1.2',
                    'clause' => '주요 직무를 수행하는 임직원 및 외부자를 주요 직무자로 지정하고 그 목록을 최신으로 관리하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '주요 직무자에 대한 식별 및 직무 분리가 이뤄지지 않아, 의도적/비의도적 권한 오남용 발생 위험',
                    'protection_plan' => '중요정보를 취급하는 주요 직무자 지정 및 해당 직무자 현황을 주기적으로 목록화하여 관리',
                    'threatcode' => 'TC1-04',
                ),
            315 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인적 보안',
                    'depth' => '2.2.1.3',
                    'clause' => '업무상 개인정보를 취급하는 자를 개인정보취급자로 지정하고 목록을 관리하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '주요 직무자에 대한 식별 및 직무 분리가 이뤄지지 않아, 의도적/비의도적 권한 오남용 발생 위험',
                    'protection_plan' => '개인정보를 취급하는 임직원(수탁업체 소속직원 포함)을 최소한으로 지정하고 주기적으로 목록화하여 관리',
                    'threatcode' => 'TC1-04',
                ),
            316 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인적 보안',
                    'depth' => '2.2.1.4',
                    'clause' => '업무 필요성에 따라 주요 직무자 및 개인정보취급자 지정을 최소화하는 등 관리방안을 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '주요 직무자에 대한 식별 및 직무 분리가 이뤄지지 않아, 의도적/비의도적 권한 오남용 발생 위험',
                    'protection_plan' => '주요 직무자 및 개인정보 취급자를 최소한으로 지정하고 주기적으로 직무자 현황을 관리(권한 관리, 교육 등)',
                    'threatcode' => 'TC1-04',
                ),
            317 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인적 보안',
                    'depth' => '2.2.2.1',
                    'clause' => '권한 오·남용 등으로 인한 잠재적인 피해 예방을 위하여 직무 분리 기준을 수립하여 적용하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '주요 직무자에 대한 식별 및 직무 분리가 이뤄지지 않아, 의도적/비의도적 권한 오남용 발생 위험',
                    'protection_plan' => '개발/운영/정보보호 관련 업무 주요 직무 분리 기준을 수립하고 직무별 역할과 책임 명확화',
                    'threatcode' => 'TC6-06',
                ),
            318 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인적 보안',
                    'depth' => '2.2.2.2',
                    'clause' => '직무분리가 어려운 경우 직무자간 상호 검토, 상위관리자 정기 모니터링 및 변경사항 승인, 책임추적성 확보 방안 등의 보완통제를 마련하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '주요 직무자에 대한 식별 및 직무 분리가 이뤄지지 않아, 의도적/비의도적 권한 오남용 발생 위험',
                    'protection_plan' => '직무분리가 어려운 경우 직무자간 상호 검토, 상위관리자 정기 모니터링 및 변경사항 승인, 책임추적성 확보 방안 등의 보완통제 마련',
                    'threatcode' => 'TC6-06',
                ),
            319 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인적 보안',
                    'depth' => '2.2.3.1',
                    'clause' => '신규 인력 채용 시 정보보호 및 개인정보보호 책임이 명시된 정보보호 및 개인정보보호 서약서를 받고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호서약서 미징구에 따른 정보보호 의식 수준 저하 및 책임을 묻기 어려울 위험',
                    'protection_plan' => '신규 인력 채용 시 정보보호 책임이 명시된 정보보호서약서 징구',
                    'threatcode' => 'TC1-09',
                ),
            320 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인적 보안',
                    'depth' => '2.2.3.2',
                    'clause' => '임시직원, 외주용역직원 등 외부자에게 정보자산에 대한 접근권한을 부여할 경우 정보보호 및 개인정보보호에 대한 책임, 비밀유지 의무 등이 명시된 서약서를 받고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호서약서 미징구에 따른 정보보호 의식 수준 저하 및 책임을 묻기 어려울 위험',
                    'protection_plan' => '외부자에 대한 정보보호서약서 징구',
                    'threatcode' => 'TC1-08',
                ),
            321 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인적 보안',
                    'depth' => '2.2.3.3',
                    'clause' => '임직원 퇴직 시 별도의 비밀유지에 관련한 서약서를 받고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호서약서 미징구에 따른 정보보호 의식 수준 저하 및 책임을 묻기 어려울 위험',
                    'protection_plan' => '임직원 퇴직 시 별도의 비밀유지에 관련한 서약서 징구',
                    'threatcode' => 'TC1-09',
                ),
            322 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인적 보안',
                    'depth' => '2.2.3.4',
                    'clause' => '정보보호, 개인정보보호 및 비밀유지 서약서는 안전하게 보관하고 필요 시 쉽게 찾아볼 수 있도록 관리하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호서약서 미징구에 따른 정보보호 의식 수준 저하 및 책임을 묻기 어려울 위험',
                    'protection_plan' => '징구한 정보보호 서약서의 안전한 관리',
                    'threatcode' => 'TC1-04',
                ),
            323 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인적 보안',
                    'depth' => '2.2.4.1',
                    'clause' => '정보보호 및 개인정보보호 교육의 시기, 기간, 대상, 내용, 방법 등의 내용이 포함된 연간 교육 계획을 수립하고 경영진의 승인을 받고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '교육 계획 수립 미흡으로 인하여 체계적인 교육이 실시되지 않아 조직 전반의 정보보호 수준 저하 위험',
                    'protection_plan' => '정보보호 교육의 시기, 기간, 대상, 내용, 방법 등의 내용이 포함된 연간 정보보호교육 계획 수립',
                    'threatcode' => 'TC1-09',
                ),
            324 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인적 보안',
                    'depth' => '2.2.4.2',
                    'clause' => '관리체계 범위 내 모든 임직원과 외부자를 대상으로 연간 교육계획에 따라 연1회 이상 정기적으로 교육을 수행하고, 관련 법규 및 규정의 중대한 변경  시 이에 대한 추가교육을 수행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호 교육 대상의 누락 또는 교육의 질적 저하로 인한 조직 전체 보안 수준 및 효율성 저하 위험',
                    'protection_plan' => '연 1회 이상 기본 정보보호 교육 수행',
                    'threatcode' => 'TC1-09',
                ),
            325 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인적 보안',
                    'depth' => '2.2.4.3',
                    'clause' => '임직원 채용 및 외부자 신규 계약 시, 업무 시작 전에 정보보호 및 개인정보보호 교육을 시행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호 교육 대상의 누락 또는 교육의 질적 저하로 인한 조직 전체 보안 수준 및 효율성 저하 위험',
                    'protection_plan' => '신규 입사자에 대한 정보보호 교육 시행',
                    'threatcode' => 'TC1-09',
                ),
            326 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인적 보안',
                    'depth' => '2.2.4.4',
                    'clause' => 'IT 및 정보보호, 개인정보보호 조직 내 임직원은 정보보호 및 개인정보보호와 관련하여 직무별 전문성 제고를 위한 별도의 교육을 받고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호 교육 대상의 누락 또는 교육의 질적 저하로 인한 조직 전체 보안 수준 및 효율성 저하 위험',
                    'protection_plan' => '정보보호 직무특화 교육 시행',
                    'threatcode' => 'TC1-09',
                ),
            327 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인적 보안',
                    'depth' => '2.2.4.5',
                    'clause' => '교육시행에 대한 기록을 남기고 교육 효과와 적정성을 평가하여 다음 교육 계획에 반영하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호 교육 대상의 누락 또는 교육의 질적 저하로 인한 조직 전체 보안 수준 및 효율성 저하 위험',
                    'protection_plan' => '교육시행에 대한 기록을 남기고 교육 효과와 적정성을 평가하여 다음 교육 계획에 반영',
                    'threatcode' => 'TC1-09',
                ),
            328 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인적 보안',
                    'depth' => '2.2.5.1',
                    'clause' => '퇴직, 직무변경, 부서이동, 휴직 등으로 인한 인사변경 내용이 인사부서, 정보보호 및 개인정보보호 부서, 정보시스템 및 개인정보처리시스템 운영부서 간에 공유되고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '퇴직 및 직무변경에 따른 자산반납, 권한회수 체계 및 절차가 미흡하여 퇴직자 등에 의한 자산분실, 정보유출 등 보안사고가 발생할 위험',
                    'protection_plan' => '인사변경 내용의 공유',
                    'threatcode' => 'TC1-04',
                ),
            329 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인적 보안',
                    'depth' => '2.2.5.2',
                    'clause' => '조직 내 인력(임직원, 임시직원, 외주용역직원 등)의 퇴직 또는 직무변경 시 지체 없는 정보자산 반납, 접근권한 회수·조정, 결과 확인 등의 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '퇴직 및 직무변경에 따른 자산반납, 권한회수 체계 및 절차가 미흡하여 퇴직자 등에 의한 자산분실, 정보유출 등 보안사고가 발생할 위험',
                    'protection_plan' => '조직 내 인력의 직무변경 혹은 퇴직 시 정보자산 반납, 접근권한 조정/회수, 결과 확인 등 수립된 절차에 따라 지체 없이 이행',
                    'threatcode' => 'TC6-06',
                ),
            330 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인적 보안',
                    'depth' => '2.2.6.1',
                    'clause' => '임직원 및 관련 외부자가 법령과 규제 및 내부정책에 따른 정보보호 및 개인정보보호 책임과 의무를 위반한 경우에 대한 처벌 규정을 수립하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호 책임과 의무에 따른 상벌 규정이 불명확하여 정보보호 준수에 대한 미이행 및 위반자 처벌이 어려울 위험',
                    'protection_plan' => '인사규정에 상벌규정 명시화',
                    'threatcode' => 'TC1-10',
                ),
            331 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인적 보안',
                    'depth' => '2.2.6.2',
                    'clause' => '정보보호 및 개인정보 보호 위반 사항이 적발된 경우 내부 절차에 따른 조치를 수행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호 및 개인정보보호 위반 사항 발생 시 적절한 조치가 미흡하여, 재발 가능한 위험 및 법적 요구사항을 준수하지 못할 위험',
                    'protection_plan' => '정보보호 및 개인정보보호 위반 사항 적발 시 내부 절차에 따른 조치',
                    'threatcode' => 'TC1-09',
                ),
            332 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '외부자 보안',
                    'depth' => '2.3.1.1',
                    'clause' => '관리체계 범위 내에서 발생하고 있는 업무 위탁 및 외부 시설·서비스의 이용 현황을 식별하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '관리체계 범위 내 업무 위탁 및 외부 시설·서비스의 이용 현황 식별이 미흡하여, 외부업체 및 외부인 관리가 어려운 위험',
                    'protection_plan' => '관리체계 범위 내 업무 위탁 및 외부 시설·서비스의 이용 현황 식별',
                    'threatcode' => 'TC1-12',
                ),
            333 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '외부자 보안',
                    'depth' => '2.3.1.2',
                    'clause' => '업무 위탁 및 외부 시설·서비스의 이용에 따른 법적 요구사항과 위험을 파악하고 적절한 보호대책을 마련하였는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '업무 위탁 및 외부 서비스 이용 시 법적 요구사항과 위험 파악이 미흡하여, 업무 위탁 등에 따른 법적 요구사항을 준수하지 못할 위험',
                    'protection_plan' => '업무 위탁 및 외부 서비스 이용 시 법적 요구사항과 위험에 대한 보호대책 마련',
                    'threatcode' => 'TC8-01',
                ),
            334 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '외부자 보안',
                    'depth' => '2.3.2.1',
                    'clause' => '중요정보 및 개인정보 처리와 관련된 외부 서비스 및 위탁 업체를 선정하는 경우 정보보호 및 개인정보 보호 역량을 고려하도록 절차를 마련하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '중요정보 및 개인정보 위탁 업체 선정 시 정보보호 및 개인정보 보호 역량을 고려하지 못해, 법적 요구사항을 준수하지 못할 위험',
                    'protection_plan' => '중요정보 및 개인정보 위탁 업체 선정 시 정보보호 역량을 고려하는 절차 수립',
                    'threatcode' => 'TC8-01',
                ),
            335 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '외부자 보안',
                    'depth' => '2.3.2.2',
                    'clause' => '외부 서비스 이용 및 업무 위탁에 따른 정보보호 및 개인정보보호 요구사항을 식별하고 이를 계약서 또는 협정서에 명시하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '외부자의 보안규범 준수에 대한 강제화 불가능 및 피해발생에 따른 피해 구제의 어려움',
                    'protection_plan' => '외부자 계약 시 보안요구사항 정의 및 계약 반영',
                    'threatcode' => 'TC1-08',
                ),
            336 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '외부자 보안',
                    'depth' => '2.3.2.3',
                    'clause' => '정보시스템 및 개인정보처리시스템 개발을 위탁하는 경우 개발 시 준수해야 할 정보보호 및 개인정보보호 요구사항을 계약서에 명시하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '외주 위탁 개발에 대한 계약에 보안요구사항이 반영되어 있지 않아, 정보시스템에 대한 손실 및 장애발생 등 사고가 발생하거나 사고 발생 시 책임이 모호할 위험',
                    'protection_plan' => '정보시스템 개발을 외주 위탁하는 경우 개발 시 준수해야 할 보안 요구사항을 제안요청서에 기재하고 계약 시 반영',
                    'threatcode' => 'TC1-11',
                ),
            337 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '외부자 보안',
                    'depth' => '2.3.3.1',
                    'clause' => '외부자가 계약서, 협정서, 내부정책에 명시된 정보보호 및 개인정보보호 요구사항을 준수하고 있는지 주기적으로 점검 또는 감사를 수행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '외부자에 대한 보안관리가 이루어지지 않아 정보유출 등 보안사고가 발생할 위험',
                    'protection_plan' => '외부자가 계약서에 명시한 보안요구사항을 준수하고 있는 지 주기적으로 점검 또는 감사 수행',
                    'threatcode' => 'TC1-08',
                ),
            338 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '외부자 보안',
                    'depth' => '2.3.3.2',
                    'clause' => '외부자에 대한 점검 또는 감사 시 발견된 문제점에 대하여 개선계획을 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '외부자에 대한 보안관리가 이루어지지 않아 정보유출 등 보안사고가 발생할 위험',
                    'protection_plan' => '외부자가 계약서에 명시한 보안요구사항을 준수하고 있는 지 주기적으로 점검 또는 감사 수행',
                    'threatcode' => 'TC1-08',
                ),
            339 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '외부자 보안',
                    'depth' => '2.3.3.3',
                    'clause' => '개인정보 처리업무를 위탁받은 수탁자가 관련 업무를 제3자에게 재위탁하는 경우 위탁자의 승인을 받도록 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '수탁자의 제3자 재위탁에 대해 요구하지 않아, 법적 요구사항을 준수하지 못할 위험',
                    'protection_plan' => '수탁자와 계약 시 재위탁 금지 사항 포함',
                    'threatcode' => 'TC8-01',
                ),
            340 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '외부자 보안',
                    'depth' => '2.3.4.1',
                    'clause' => '외부자 계약만료, 업무 종료, 담당자 변경시 공식적인 절차에 따른 정보자산 반납, 정보시스템 접근계정 삭제, 비밀유지 확약서 징구 등이 이루어질 수 있도록 보안대책을 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '외부자에 대한 보안관리가 이루어지지 않아 정보유출 등 보안사고가 발생할 위험',
                    'protection_plan' => '위탁 업무 수행과정에서의 변경이력에 대한 보고 절차 수립 및 그에 따른 정보자산 반납, 접근계정 삭제 등의 조치 이행',
                    'threatcode' => 'TC1-08',
                ),
            341 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '외부자 보안',
                    'depth' => '2.3.4.2',
                    'clause' => '외부자 계약 만료 시 위탁 업무와 관련하여 외부자가 중요정보 및 개인정보를 보유하고 있는지 확인하고 이를 회수·파기할 수 있도록 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '외부자에 대한 보안관리가 이루어지지 않아 정보유출 등 보안사고가 발생할 위험',
                    'protection_plan' => '외부자 철수 시 공식적인 절차에 따른 정보자산 반납, 접근계정 삭제, 비밀유지서약서 작성 등의 조치 이행 확인',
                    'threatcode' => 'TC1-08',
                ),
            342 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '물리 보안',
                    'depth' => '2.4.1.1',
                    'clause' => '물리적, 환경적 위협으로부터 개인정보 및 중요정보, 문서, 저장매체, 주요 설비 및 시스템 등을 보호하기 위하여 통제구역, 제한구역, 접견구역 등 물리적 보호구역 지정기준을 마련하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '비인가자의 물리적 접근 및 환경적 재난 발생 위험 ',
                    'protection_plan' => '주요 설비 및 시스템을 보호하기 위하여 물리적 보호구역을 정의하고 구역별 보호대책 수립/이행',
                    'threatcode' => 'TC1-02',
                ),
            343 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '물리 보안',
                    'depth' => '2.4.1.2',
                    'clause' => '물리적 보호구역 지정기준에 따라 보호구역을 지정하고 구역별 보호대책을 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '비인가자의 물리적 접근 및 환경적 재난 발생 위험 ',
                    'protection_plan' => '주요 설비 및 시스템을 보호하기 위하여 물리적 보호구역을 정의하고 구역별 보호대책 수립/이행',
                    'threatcode' => 'TC1-02',
                ),
            344 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '물리 보안',
                    'depth' => '2.4.2.1',
                    'clause' => '보호구역은 출입절차에 따라 출입이 허가된 자만 출입하도록 통제하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '비인가자의 접근에 따른 정보시스템 분실, 도난, 파괴 등에 따른 장애 발생 위험 ',
                    'protection_plan' => '각 보호구역별 내/외부자 출입통제 절차를 마련하고 출입 가능한 임직원 현황 관리',
                    'threatcode' => 'TC6-17',
                ),
            345 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '물리 보안',
                    'depth' => '2.4.2.2',
                    'clause' => '각 보호구역에 대한 내·외부자 출입기록을 일정기간 보존하고 출입기록 및 출입권한을 주기적으로 검토하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '비인가자의 접근에 따른 정보시스템 분실, 도난, 파괴 등에 따른 장애 발생 위험 ',
                    'protection_plan' => '각 보호구역에 대한 내/외부자 출입기록을 일정기간 보존하고 출입기록 및 출입권한 주기적 검토',
                    'threatcode' => 'TC6-17',
                ),
            346 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '물리 보안',
                    'depth' => '2.4.3.1',
                    'clause' => '정보시스템의 중요도, 용도, 특성 등을 고려하여 배치 장소를 분리하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '장애 또는 보안사고 발생 시 대응이 지연될 위험',
                    'protection_plan' => '정보시스템의 특성을 고려하여 배치 장소 분리',
                    'threatcode' => 'TC1-04',
                ),
            347 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '물리 보안',
                    'depth' => '2.4.3.2',
                    'clause' => '정보시스템의 실제 물리적 위치를 손쉽게 확인할 수 있는 방안을 마련하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '장애 또는 보안사고 발생 시 대응이 지연될 위험',
                    'protection_plan' => '정보시스템의 실제 물리적 위치를 손쉽게 확인할 수 있는 방안(배치도, 자산목록 등) 마련',
                    'threatcode' => 'TC1-11',
                ),
            348 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '물리 보안',
                    'depth' => '2.4.3.3',
                    'clause' => '전력 및 통신케이블을 외부로부터의 물리적 손상 및 전기적 영향으로부터 안전하게 보호하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '전력 및 통신케이블의 물리적 손상, 전기 간섭 등으로 인한 서비스 장애 발생 위험',
                    'protection_plan' => '데이터를 송수신하는 통신케이블이나 전력을 공급하는 전력 케이블은 손상을 입지 않도록 보호',
                    'threatcode' => 'TC3-04',
                ),
            349 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '물리 보안',
                    'depth' => '2.4.4.1',
                    'clause' => '각 보호구역의 중요도 및 특성에 따라 화재, 수해, 전력 이상 등 인재 및 자연재해 등에 대비하여 필요한 설비를 갖추고 운영절차를 수립하여 운영하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '보호설비 설치 및 운영 관리 미흡으로 인한 서비스 장애 발생 위험',
                    'protection_plan' => '각 보호구역의 중요도 및 특성에 따라 화재, 전력 이상 등 인재 및 자연재해 등에 대한 필요한 설비 운영',
                    'threatcode' => 'TC3-01',
                ),
            350 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '물리 보안',
                    'depth' => '2.4.4.2',
                    'clause' => '외부 집적정보통신시설(IDC)에 위탁 운영하는 경우 물리적 보호에 필요한 요구사항을 계약서에 반영하고 운영상태를 주기적으로 검토하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보통신시설(IDC) 위탁 운영 계약에 보안요구사항이 반영되어 있지 않아, 정보시스템에 대한 손실 및 장애발생 등 사고가 발생하거나 사고 발생 시 책임이 모호할 위험',
                    'protection_plan' => '계약서에 IDC 운영 안정성 확보를 위한 내용 반영 및 운영 현황의 주기적인 점검',
                    'threatcode' => 'TC1-02',
                ),
            351 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '물리 보안',
                    'depth' => '2.4.5.1',
                    'clause' => '정보시스템 도입, 유지보수 등으로 보호구역 내 작업이 필요한 경우에 대한 공식적인 작업신청 및 수행 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '보호구역 내 작업 통제 미흡으로 인한 서비스 장애 발생 위험',
                    'protection_plan' => '보호구역 내 작업기록 주기적 검토',
                    'threatcode' => 'TC1-02',
                ),
            352 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '물리 보안',
                    'depth' => '2.4.5.2',
                    'clause' => '보호구역내 작업이 통제 절차에 따라 적절히 수행되었는지 여부를 확인하기 위하여 작업 기록을 주기적으로 검토하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '보호구역 내 작업 통제 미흡으로 인한 서비스 장애 발생 위험',
                    'protection_plan' => '보호구역 내 작업기록 주기적 검토',
                    'threatcode' => 'TC1-02',
                ),
            353 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '물리 보안',
                    'depth' => '2.4.6.1',
                    'clause' => '정보시스템, 모바일기기, 저장매체 등을 보호구역에 반입하거나 반출하는 경우 정보유출, 악성코드 감염 등 보안사고 예방을 위한 통제 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '장비, 문서, 매체 미승인 반출입으로 인한 정보시스템 분실, 도난 등 보안사고 발생 위험',
                    'protection_plan' => '보호구역 내 중요한 장비, 문서, 매체 등에 대한 반출입 관련 정책 및 절차 수립/이행',
                    'threatcode' => 'TC6-17',
                ),
            354 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '물리 보안',
                    'depth' => '2.4.6.2',
                    'clause' => '반출입 통제절차에 따른 기록을 유지·관리하고, 절차 준수 여부를 확인할 수 있도록 반출입 이력을 주기적으로 점검하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '노트북 등 모바일 기기 미승인 반출입을 통한 중요정보 유출, 내부망 악성코드 감염 등의 보안사고 발생 위험',
                    'protection_plan' => '모바일 기기 반출입 절차에 따라 반출입대장을 작성하고 관리자는 주기적으로 모바일 기기 반출입 이력 점검',
                    'threatcode' => 'TC6-12',
                ),
            355 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '물리 보안',
                    'depth' => '2.4.7.1',
                    'clause' => '문서고, 공용 PC, 복합기, 파일서버 등 공용으로 사용하는 시설 및 사무용 기기에 대한 보호대책을 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '공용업무 환경 보안관리 부주의에 의한 정보유출 등의 보안사고 발생 위험',
                    'protection_plan' => '팩스, 복사기, 프린터, 공용 PC, 파일서버, 문서고 등 공용으로 사용하는 사무장비 및 시설에 대한 보호대책 수립/이행',
                    'threatcode' => 'TC4-01',
                ),
            356 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '물리 보안',
                    'depth' => '2.4.7.2',
                    'clause' => '업무용 PC, 책상, 서랍 등 개인업무 환경을 통한 개인정보 및 중요정보의 유·노출을 방지하기 위한 보호대책을 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인PC 등에 대한 개인업무 환경 보안 관리 부주의에 의한 정보유출 등의 보안사고 발생 위험',
                    'protection_plan' => '개인업무 환경에서의 정보보호에 대한 정책 수립/이행',
                    'threatcode' => 'TC1-02',
                ),
            357 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '물리 보안',
                    'depth' => '2.4.7.3',
                    'clause' => '개인 및 공용업무 환경에서의 정보보호 준수여부를 주기적으로 검토하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인PC 등에 대한 개인업무 환경 보안 관리 부주의에 의한 정보유출 등의 보안사고 발생 위험',
                    'protection_plan' => '개인업무 환경에서의 정보보호 준수여부를 주기적으로 점검',
                    'threatcode' => 'TC4-01',
                ),
            358 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인증 및 권한관리',
                    'depth' => '2.5.1.1',
                    'clause' => '정보시스템과 개인정보 및 중요정보에 접근할 수 있는 사용자 계정 및 접근권한의 등록·변경·삭제에 관한 공식적인 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템에 등록된 사용자 계정 및 접근권한 부여 현황에 대한 관리가 미흡하여, 권한의 오남용에 따른 보안사고 발생 및 책임추적성의 확보가 어려울 위험',
                    'protection_plan' => '정보시스템의 사용자 계정 등록/삭제(비활성화) 및 접근권한 등록/변경/삭제에 관한 공식적인 절차 수립/이행',
                    'threatcode' => 'TC1-02',
                ),
            359 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인증 및 권한관리',
                    'depth' => '2.5.1.2',
                    'clause' => '정보시스템과 개인정보 및 중요정보에 접근할 수 있는 사용자 계정 및 접근권한 생성·등록·변경 시 직무별 접근권한 분류 체계에 따라 업무상 필요한 최소한의 권한만을 부여하고 있는가? ',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템에 등록된 사용자 계정 및 접근권한 부여 현황에 대한 관리가 미흡하여, 권한의 오남용에 따른 보안사고 발생 및 책임추적성의 확보가 어려울 위험',
                    'protection_plan' => '정보시스템의 사용자 계정 생성 및 변경 시 직무별 접근권한 분류 체계 따라 업무상 필요한 최소한의 권한만을 부여',
                    'threatcode' => 'TC6-06',
                ),
            360 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인증 및 권한관리',
                    'depth' => '2.5.1.3',
                    'clause' => '사용자에게 계정 및 접근권한을 부여하는 경우 해당 계정에 대한 보안책임이 본인에게 있음을 명확히 인식시키고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '사용자에게 계정에 대한 보안책임을 인식시키지 못해, 계정에 대한 관리가 미흡할 수 있는 위험',
                    'protection_plan' => '사용자에게 계정에 대한 보안책임 인식 제고',
                    'threatcode' => 'TC1-09',
                ),
            361 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인증 및 권한관리',
                    'depth' => '2.5.2.1',
                    'clause' => '정보시스템 및 개인정보처리시스템에서 사용자 및 개인정보취급자를 유일하게 구분할 수 있는 식별자를 할당하고 추측 가능한 식별자의 사용을 제한하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '사용자 계정 및 공용 계정 사용에 대한 통제가 미흡하여 보안사고 발생 시 작업내역 분석 및 추적이 불가능할 위험',
                    'protection_plan' => '정보시스템에서 사용자를 유일하게 구분할 수 있는 식별자를 할당하고 추측 가능한 식별자의 사용 제한',
                    'threatcode' => 'TC7-01',
                ),
            362 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인증 및 권한관리',
                    'depth' => '2.5.2.2',
                    'clause' => '불가피한 사유로 동일한 식별자를 공유하여 사용하는 경우 그 사유와 타당성을 검토하고 보완대책을 마련하여 책임자의 승인을 받고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '사용자 계정 및 공용 계정 사용에 대한 통제가 미흡하여 보안사고 발생 시 작업내역 분석 및 추적이 불가능할 위험',
                    'protection_plan' => '동일한 식별자를 공유하여 사용하는 경우 그 사유와 타당성을 검토하고 책임자의 승인',
                    'threatcode' => 'TC7-01',
                ),
            363 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인증 및 권한관리',
                    'depth' => '2.5.3.1',
                    'clause' => '정보시스템 및 개인정보처리시스템에 대한 접근은 사용자 인증, 로그인 횟수 제한, 불법 로그인 시도 경고 등 안전한 사용자 인증 절차에 의해 통제하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템 접근에 대한 인증 절차 적용이 미흡하여 비인가자에 의한 시스템 접근 등 보안사고가 발생할 위험',
                    'protection_plan' => '정보시스템에 대한 접근은 사용자 인증, 로그인 횟수 제한, 불법 로그인 시도 경고 등 안전한 사용자 인증 절차에 의해 통제',
                    'threatcode' => 'TC2-02',
                ),
            364 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인증 및 권한관리',
                    'depth' => '2.5.3.2',
                    'clause' => '정보통신망을 통해 외부에서 개인정보처리시스템에 접속하려는 경우에는 법적 요구사항에 따라 안전한 인증수단 또는 안전한 접속수단을 적용하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보처리시스템에 접근하는 사용자의 식별 인증 미흡으로 침해사고 발생 시 적절히 대응하지 못할 위험',
                    'protection_plan' => '외부망에서 개인정보처리시스템 접속 시 사용자 인증을 강화하는 추가인증을 도입하거나 전용선 또는 VPN 등을 적용',
                    'threatcode' => 'TC2-02',
                ),
            365 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인증 및 권한관리',
                    'depth' => '2.5.4.1',
                    'clause' => '정보시스템 및 개인정보처리시스템에 대한 안전한 사용자 비밀번호 관리절차 및 작성규칙을 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템 패스워드 관리에 대한 명확한 기준 부재로 인하여 패스워드 관리가 소홀해 지거나 비인가 시스템 접근이 발생할 위험',
                    'protection_plan' => '정보시스템 사용자 패스워드에 대한 정책 적용 관리',
                    'threatcode' => 'TC6-03',
                ),
            366 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인증 및 권한관리',
                    'depth' => '2.5.4.2',
                    'clause' => '정보주체(이용자)가 안전한 비밀번호를 이용할 수 있도록 비밀번호 작성 규칙을 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '고객, 회원 등 이용자 패스워드 관리 기준이 미흡하여 이용자 패스워드가 노출되거나 크랙 등 공격이 발생할 위험',
                    'protection_plan' => '고객, 회원 등 서비스 이용자가 접근하는 정보시스템 또는 웹 서비스의 안전한 이용을 위하여 계정 및 패스워드 관리절차 수립/이행',
                    'threatcode' => 'TC1-04',
                ),
            367 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인증 및 권한관리',
                    'depth' => '2.5.5.1',
                    'clause' => '관리자 권한 등 특수권한은 최소한의 인원에게만 부여될 수 있도록 공식적인 권한 신청 및 승인 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '관리자 및 특수 권한에 대한 관리가 미흡하여 권한의 오남용에 따른 보안사고 발행 위험',
                    'protection_plan' => '관리자 및 특수 권한은 최소한의 인원에게만 부여하고 권한 부여 시 책임자 승인 절차 수립',
                    'threatcode' => 'TC1-02',
                ),
            368 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인증 및 권한관리',
                    'depth' => '2.5.5.2',
                    'clause' => '특수 목적을 위해 부여한 계정 및 권한을 식별하고 별도의 목록으로 관리하는 등 통제절차를 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '관리자 및 특수 권한에 대한 관리가 미흡하여 권한의 오남용에 따른 보안사고 발행 위험',
                    'protection_plan' => '정보시스템 및 중요정보에 대한 접근권한 검토 기준, 검토주체, 검토방법, 주기 등을 정하여 정기적 검토 이행',
                    'threatcode' => 'TC1-04',
                ),
            369 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인증 및 권한관리',
                    'depth' => '2.5.6.1',
                    'clause' => '정보시스템과 개인정보 및 중요정보에 대한 사용자 계정 및 접근권한 생성·등록·부여·이용·변경·말소 등의 이력을 남기고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보처리시스템 접근권한 부여, 변경, 말소에 대한 로그 관리 미흡으로 침해사고 발생 시 적절히 대응하지 못할 위험',
                    'protection_plan' => '개인정보처리시스템 접속 계정의 권한 변경내역에 대한 로그를 기록하고 5년간 보관, 공용계정 사용에 대한 계정관리 수행',
                    'threatcode' => 'TC7-01',
                ),
            370 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인증 및 권한관리',
                    'depth' => '2.5.6.2',
                    'clause' => '정보시스템과 개인정보 및 중요정보에 대한 사용자 계정 및 접근권한의 적정성 검토 기준, 검토주체, 검토방법, 주기 등을 수립하여 정기적 검토를 이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템에 대한 계정 및 권한 현황 관리와 주기적인 검토 활동이 미흡하여 미사용 계정 및 퇴직자 계정, 잘못된 권한 부여 등이 존재할 위험',
                    'protection_plan' => '정보시스템 및 중요정보에 대한 접근권한 검토 기준, 검토주체, 검토방법, 주기 등을 정하여 정기적 검토 이행',
                    'threatcode' => 'TC1-01',
                ),
            371 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '인증 및 권한관리',
                    'depth' => '2.5.6.3',
                    'clause' => '접근권한 검토 결과 접근권한 과다 부여, 권한부여 절차 미준수, 권한 오남용 등 문제점이 발견된 경우 그에 따른 조치절차를 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템에 대한 계정 및 권한 현황 관리와 주기적인 검토 활동이 미흡하여 미사용 계정 및 퇴직자 계정, 잘못된 권한 부여 등이 존재할 위험',
                    'protection_plan' => '접근권한의 검토 결과 접근권한 오남용 등의 이상징후가 발견된 경우 그에 따른 조치절차 수립/이행',
                    'threatcode' => 'TC1-01',
                ),
            372 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '접근통제',
                    'depth' => '2.6.1.1',
                    'clause' => '조직의 네트워크에 접근할 수 있는 모든 경로를 식별하고 접근통제 정책에 따라 내부 네트워크는 인가된 사용자만이 접근할 수 있도록 통제하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '내부 네트워크 접근 통제가 미흡하여 외부 또는 불필요한 내부사용자의 중요시스템 접근이 가능할 위험',
                    'protection_plan' => '접근통제 정책에 따라 인가된 사용자만이 네트워크에 접근할 수 있도록 네트워크 식별자(IP) 할당 등을 통제',
                    'threatcode' => 'TC6-11',
                ),
            373 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '접근통제',
                    'depth' => '2.6.1.2',
                    'clause' => '서비스, 사용자 그룹, 정보자산의 중요도, 법적 요구사항에 따라 네트워크 영역을 물리적 또는 논리적으로 분리하고 각 영역간 접근통제를 적용하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '네트워크 영역을 용도 또는 중요도에 따라 분리하지 않아 비인가 시스템 접근이 가능할 위험',
                    'protection_plan' => '서비스, 사용자 그룹, 정보자산의 중요도, 법적 요구사항에 따라 네트워크 영역을 물리적 또는 논리적으로 분리',
                    'threatcode' => 'TC6-08',
                ),
            374 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '접근통제 ',
                    'depth' => '2.6.1.3',
                    'clause' => '네트워크 대역별 IP주소 부여 기준을 마련하고 DB서버 등 외부 연결이 필요하지 않은 경우 사설 IP로 할당하는 등의 대책을 적용하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '내부 네트워크 접근 통제가 미흡하여 외부 또는 불필요한 내부사용자의 중요시스템 접근이 가능할 위험',
                    'protection_plan' => '내부 네트워크 IP 주소는 사설 IP로 할당하고 국제권고표준 준수',
                    'threatcode' => 'TC6-11',
                ),
            375 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '접근통제 ',
                    'depth' => '2.6.1.4',
                    'clause' => '물리적으로 떨어진 IDC, 지사, 대리점 등과의 네트워크 연결 시 전송구간 보호대책을 마련하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '내부 네트워크 접근 통제가 미흡하여 외부 또는 불필요한 내부사용자의 중요시스템 접근이 가능할 위험',
                    'protection_plan' => '물리적으로 떨어진 IDC 센터, 지사, 대리점 등과의 네트워크 연결 시 전용회선을 구축하고 전용선 구축이 불가능한 경우 VPN(가상사설망) 등의 대책 마련',
                    'threatcode' => 'TC6-11',
                ),
            376 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '접근통제 ',
                    'depth' => '2.6.2.1',
                    'clause' => '서버, 네트워크시스템, 보안시스템 등 정보시스템 별 운영체제(OS)에  접근이 허용되는 사용자, 접근 가능 위치, 접근 수단 등을 정의하여 통제하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템에 대한 접근 통제, 안전한 접근 수단의 적용이 미흡하여 비인가 시스템 접근, 자원 침탈, 정보 유출, 장애 발생 등 위험',
                    'protection_plan' => '서버별로 접근이 허용된 사용자를 명확하게 식별/인증하고 안전한 접근수단 적용',
                    'threatcode' => 'TC2-02',
                ),
            377 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '접근통제 ',
                    'depth' => '2.6.2.2',
                    'clause' => '정보시스템에 접속 후 일정시간 업무처리를 하지 않는 경우 자동으로 시스템 접속이 차단되도록 하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템에 대한 접근 통제, 안전한 접근 수단의 적용이 미흡하여 비인가 시스템 접근, 자원 침탈, 정보 유출, 장애 발생 등 위험',
                    'protection_plan' => '중요 서버의 연결시간 제한',
                    'threatcode' => 'TC2-02',
                ),
            378 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '접근통제 ',
                    'depth' => '2.6.2.3',
                    'clause' => '정보시스템의 사용목적과 관계없는 서비스를 제거하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템에 대한 서비스 구성 및 운영 관리가 미흡하여 비인가 시스템 접근, 자원 침탈, 정보 유출, 장애 발생 등 위험',
                    'protection_plan' => '서버의 사용목적과 관계없는 서비스 제거',
                    'threatcode' => 'TC6-09',
                ),
            379 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '접근통제 ',
                    'depth' => '2.6.2.4',
                    'clause' => '주요 서비스를 제공하는 정보시스템은 독립된 서버로 운영하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템에 대한 서비스 구성 및 운영 관리가 미흡하여 비인가 시스템 접근, 자원 침탈, 정보 유출, 장애 발생 등 위험',
                    'protection_plan' => '주요서비스를 제공하는 서버는 독립된 서버로 운영',
                    'threatcode' => 'TC6-11',
                ),
            380 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '접근통제 ',
                    'depth' => '2.6.3.1',
                    'clause' => '중요정보 접근을 통제하기 위하여 사용자의 업무에 따라 응용프로그램 접근권한을 차등 부여하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '업무 목적에 따른 응용프로그램 접근 통제가 미흡하여 시스템 자원 침탈, 정보유출, 서비스 장애 등 보안사고 발생 위험',
                    'protection_plan' => '응용프로그램 및 중요정보 접근을 통제하기 위하여 사용자의 업무에 따라 접근권한 차등 부여',
                    'threatcode' => 'TC6-06',
                ),
            381 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '접근통제 ',
                    'depth' => '2.6.3.2',
                    'clause' => '중요정보의 불필요한 노출(조회, 화면표시, 인쇄, 다운로드 등)을 최소화할 수 있도록 응용프로그램을 구현하여 운영하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '업무 목적에 따른 응용프로그램 접근 통제가 미흡하여 시스템 자원 침탈, 정보유출, 서비스 장애 등 보안사고 발생 위험',
                    'protection_plan' => '중요정보의 노출(조회, 출력, 다운로드 등)을 최소화 하도록 응용 프로그램 구현',
                    'threatcode' => 'TC4-05',
                ),
            382 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '접근통제 ',
                    'depth' => '2.6.3.3',
                    'clause' => '일정 시간동안 입력이 없는 세션은 자동 차단하고, 동일 사용자의 동시 세션 수를 제한하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '응용프로그램 접근에 대한 안전한 접근 수단 적용이 미흡하여 비인가 시스템 접근, 정보 유출 등 보안사고 발생 위험',
                    'protection_plan' => '일정 시간 동안 입력이 없는 세션은 자동 차단하고, 동일 사용자의 동시 세션 수 제한',
                    'threatcode' => 'TC6-09',
                ),
            383 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '접근통제 ',
                    'depth' => '2.6.3.4',
                    'clause' => '관리자 전용 응용프로그램(관리자 웹페이지, 관리콘솔 등)은 비인가자가 접근할 수 없도록 접근을 통제하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '응용프로그램 접근에 대한 안전한 접근 수단 적용이 미흡하여 비인가 시스템 접근, 정보 유출 등 보안사고 발생 위험',
                    'protection_plan' => '관리자 전용 응용프로그램(관리자 웹 페이지, 관리콘솔 등)을 외부에 오픈 되지 않도록 접근통제',
                    'threatcode' => 'TC6-11',
                ),
            384 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '접근통제 ',
                    'depth' => '2.6.4.1',
                    'clause' => '데이터베이스의 테이블 목록 등 저장·관리되고 있는 정보를 식별하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '저장하고 있는 정보의 식별이 미흡하여, 중요정보 저장에 따른 적절한 관리 및 운영절차가 어려운 위험',
                    'protection_plan' => '데이터베이스 테이블 목록 등에서 저장 및 관리하는 정보를 식별',
                    'threatcode' => 'TC1-04',
                ),
            385 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '접근통제 ',
                    'depth' => '2.6.4.2',
                    'clause' => '데이터베이스 내 정보에 접근이 필요한 응용프로그램, 정보시스템(서버) 및 사용자를 명확히 식별하고 접근통제 정책에 따라 통제하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '데이터베이스 접근에 대한 안전한 접근 수단 적용 및 구성 관리가 미흡하여 주요 데이터베이스에 대한 비인가 조회/수정/삭제가 가능할 위험',
                    'protection_plan' => '데이터베이스 접근을 허용하는 IP, 포트, 응용프로그램을 통제',
                    'threatcode' => 'TC6-11',
                ),
            386 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '접근통제 ',
                    'depth' => '2.6.5.1',
                    'clause' => '무선네트워크를 업무적으로 사용하는 경우 무선 AP 및 네트워크 구간 보안을 위해 인증, 송수신 데이터 암호화 등 보호대책을 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '무선 네트워크 사용에 대한 통제 및 보안 관리가 미흡하여 비인가자의 내부 네트워크 접근, 정보 유출 등 보안사고 발생 위험',
                    'protection_plan' => '조직 내 무선네트워크 환경을 구축(AP 설치)할 경우 허가(승인), 보안성 검토 등 절차를 마련하고 구축에 따른 보호대책 적용',
                    'threatcode' => 'TC1-02',
                ),
            387 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '접근통제 ',
                    'depth' => '2.6.5.2',
                    'clause' => '인가된 임직원만이 무선네트워크를 사용할 수 있도록 사용 신청 및 해지 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '무선 네트워크 사용에 대한 통제 및 보안 관리가 미흡하여 비인가자의 내부 네트워크 접근, 정보 유출 등 보안사고 발생 위험',
                    'protection_plan' => '정상적인 절차에 따라 무선네트워크 사용을 허가한  경우 인가된 임직원만 무선네트워크를 사용할 수 있도록 사용 신청 및 해지 절차 수립',
                    'threatcode' => 'TC1-02',
                ),
            388 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '접근통제 ',
                    'depth' => '2.6.5.3',
                    'clause' => 'AD Hoc 접속 및 조직내 허가 받지 않은 무선 AP 탐지·차단 등 비인가된 무선네트워크에 대한 보호대책을 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '비인가된 무선네트워크에 대한 보호대책이 미흡하여, 비인가된 무선네트워크 사용인원에 대한 네트워크 공격이 발생할 위험',
                    'protection_plan' => '비인가된 무선네트워크에 대한 보호대책 수립·이행',
                    'threatcode' => 'TC4-03',
                ),
            389 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '접근통제 ',
                    'depth' => '2.6.6.1',
                    'clause' => '인터넷과 같은 외부 네트워크를 통한 정보시스템 원격운영은 원칙적으로 금지하고 장애대응 등 부득이하게 허용하는 경우 보완대책을 마련하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템에 대한 원격접근 통제가 미흡하여, 비인가자의 정보시스템에 접근이 가능할 위험',
                    'protection_plan' => '외부 네트워크를 통한 정보시스템 원격운영 시 보호대책 적용 (접속 단말 및 사용자 인증, VPN 등 전송구간 암호화 등)',
                    'threatcode' => 'TC6-11',
                ),
            390 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '접근통제 ',
                    'depth' => '2.6.6.2',
                    'clause' => '내부 네트워크를 통해서 원격으로 정보시스템을 운영하는 경우 특정 단말에 한해서만 접근을 허용하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템에 대한 원격접근 통제가 미흡하여, 비인가자의 정보시스템에 접근이 가능할 위험',
                    'protection_plan' => '내부 네트워크를 통해서 원격으로 시스템을 운영하는 경우 특정 단말에 한해서만 접근 허용',
                    'threatcode' => 'TC6-11',
                ),
            391 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '접근통제 ',
                    'depth' => '2.6.6.3',
                    'clause' => '재택근무, 원격협업, 스마트워크 등과 같은 원격업무 수행 시 중요정보 유출, 해킹 등 침해사고 예방을 위한 보호대책을 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '스마트워크 사용에 대한 보안 대책 수립이 미흡하여 비인가 시스템 접근, 정보유출 등 보안사고 발생 위험',
                    'protection_plan' => '재택근무, 원격협업 등과 같은 원격업무 수행, 클라우드 환경을 이용한 스마트워크 환경에서 주요정보자산을 보호하기 위한 정책 및 절차가 수립/이행',
                    'threatcode' => 'TC1-02',
                ),
            392 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '접근통제 ',
                    'depth' => '2.6.6.4',
                    'clause' => '개인정보처리시스템의 관리, 운영, 개발, 보안 등을 목적으로 원격으로 개인정보처리시스템에 직접 접속하는 단말기는 관리용 단말기로 지정하고 임의조작 및 목적 외 사용 금지 등 안전조치를 적용하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '원격으로 개인정보처리시스템에 직접 접속하는 단말기 관리가 미흡하여, 해당 단말기를 통한 정보 유출 등 보안사고 발생 위험',
                    'protection_plan' => '개인정보처리시스템에 직접 접속하는 단말기는 관리용 단말기로 지정 및 안전조치를 적용',
                    'threatcode' => 'TC1-02',
                ),
            393 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '접근통제 ',
                    'depth' => '2.6.7.1',
                    'clause' => '주요 직무 수행 및 개인정보 취급 단말기 등 업무용 PC의 인터넷 접속에 대한 통제정책을 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '인터넷 접속 및 사용을 제한하지 않아, 고의 또는 실수로 인한 정보 유출, 악성코드 감염 등 보안사고가 발생할 위험',
                    'protection_plan' => '중요정보를 취급/운영하는 주요 직무자 식별하여 인터넷 접속 제한',
                    'threatcode' => 'TC4-01',
                ),
            394 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '접근통제 ',
                    'depth' => '2.6.7.2',
                    'clause' => '주요 정보시스템(DB서버 등)에서 불필요한 외부 인터넷 접속을 통제하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '인터넷 접속 및 사용을 제한하지 않아, 고의 또는 실수로 인한 정보 유출, 악성코드 감염 등 보안사고가 발생할 위험',
                    'protection_plan' => '내부 서버에서 외부 인터넷접속 제한',
                    'threatcode' => 'TC3-12',
                ),
            395 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '접근통제 ',
                    'depth' => '2.6.7.3',
                    'clause' => '관련 법령에 따라 인터넷 망분리 의무가 부과된 경우 망분리 대상자를 식별하여 안전한 방식으로 망 분리를 적용하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '인터넷 접속 및 사용을 제한하지 않아, 고의 또는 실수로 인한 정보 유출, 악성코드 감염 등 보안사고가 발생할 위험',
                    'protection_plan' => '내부 서버에서 외부 인터넷접속 제한',
                    'threatcode' => 'TC3-12',
                ),
            396 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '암호화 적용',
                    'depth' => '2.7.1.1',
                    'clause' => '개인정보 및 주요정보의 보호를 위하여 법적 요구사항을 반영한 암호화 대상, 암호강도, 암호사용 등이 포함된 암호정책을 수립하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보 및 중요정보 저장/전송에 대한 명시적인 기준 수립 및 암호화 적용이 미흡하여, 중요정보가 유출되거나 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보 등 중요정보의 전송 및 저장 시 안전한 보호를 위한 암호 정책 수립/이행',
                    'threatcode' => 'TC1-10',
                ),
            397 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '암호화 적용',
                    'depth' => '2.7.1.2',
                    'clause' => '암호정책에 따라 개인정보 및 중요 정보의 저장, 전송, 전달 시 암호화를 수행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보 및 중요정보 저장/전송에 대한 명시적인 기준 수립 및 암호화 적용이 미흡하여, 중요정보가 유출되거나 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '서비스 이용자 및 내부 사용자(임직원 등) 비밀번호 저장 시 암호화 정책을 수립/이행',
                    'threatcode' => 'TC4-07',
                ),
            398 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '암호화 적용',
                    'depth' => '2.7.2.1',
                    'clause' => '암호키 생성, 이용, 보관, 배포, 변경, 복구, 파기 등에 관한 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '암호키 분실 및 비인가자 접근으로 인한 변조 및 중요정보 유출 위험',
                    'protection_plan' => '암호키 생성, 이용, 보관, 배포, 복구, 파기 등에 관한 절차를 수립/이행',
                    'threatcode' => 'TC1-10',
                ),
            399 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '암호화 적용',
                    'depth' => '2.7.2.2',
                    'clause' => '암호키는 필요시 복구가 가능하도록 별도의 안전한 장소에 보관하고 암호키 사용에 관한 접근권한을 최소화하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '암호키 분실 및 비인가자 접근으로 인한 변조 및 중요정보 유출 위험',
                    'protection_plan' => '암호키 생성 후 암호키는 별도의 안전한 장소에 소산 보관하고 암호키 사용에 관한 접근권한 부여 최소화',
                    'threatcode' => 'TC6-07',
                ),
            400 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '정보시스템 도입 및 개발 보안',
                    'depth' => '2.8.1.1',
                    'clause' => '정보시스템을 신규로 도입·개발 또는 변경하는 경우 정보보호 및 개인정보보호 측면의 타당성 검토 및 인수 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '신규 도입, 개발, 변경하는 정보시스템의 보안성검토, 인수 절차 등이 미흡하여, 해당 시스템의 취약점 발생 및 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '신규 도입, 개발, 변경 시 보안성검토를 수행',
                    'threatcode' => 'TC1-01',
                ),
            401 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '정보시스템 도입 및 개발 보안',
                    'depth' => '2.8.1.2',
                    'clause' => '정보시스템을 신규로 도입·개발 또는 변경하는 경우 법적 요구사항, 최신 취약점 등을 포함한 보안 요구사항을 명확히 정의하고 설계 단계에서부터 반영하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개발에 대한 보안요구사항의 정의 및 업무 절차가 미흡하여 신규 정보시스템 개발 또는 기존 시스템 변경에 따른 취약점 발생 위험',
                    'protection_plan' => '신규 정보시스템 개발 및 기존 시스템 변경 시 법적 요구사항을 포함한 보안 요구사항 정의',
                    'threatcode' => 'TC1-04',
                ),
            402 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '정보시스템 도입 및 개발 보안',
                    'depth' => '2.8.1.3',
                    'clause' => '정보시스템의 안전한 구현을 위한 코딩 표준을 수립하여 적용하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '기술적 취약성에 대한 상시 점검 및 관리가 미흡하여 취약점을 이용한 정보시스템 침해사고 발생 위험',
                    'protection_plan' => '정보시스템의 안전한 구현을 위한 코딩 표준 마련',
                    'threatcode' => 'TC6-16',
                ),
            403 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '정보시스템 도입 및 개발 보안',
                    'depth' => '2.8.2.1',
                    'clause' => '정보시스템의 도입, 개발, 변경 시 분석 및 설계 단계에서 정의한 보안 요구사항이 효과적으로 적용되었는지를 확인하기 위한 시험을 수행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '기술적 취약성에 대한 상시 점검 및 관리가 미흡하여 취약점을 이용한 정보시스템 침해사고 발생 위험',
                    'protection_plan' => '구현된 기능이 사전 정의된 보안 요구사항의 충족 시험 수행',
                    'threatcode' => 'TC6-16',
                ),
            404 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '정보시스템 도입 및 개발 보안',
                    'depth' => '2.8.2.2',
                    'clause' => '정보시스템이 안전한 코딩 기준 등에 따라 안전하게 개발되었는지를 확인하기 위한 취약점 점검이 수행되고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '기술적 취약성에 대한 상시 점검 및 관리가 미흡하여 취약점을 이용한 정보시스템 침해사고 발생 위험',
                    'protection_plan' => '기술적 보안취약점 점검 수행',
                    'threatcode' => 'TC6-16',
                ),
            405 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '정보시스템 도입 및 개발 보안',
                    'depth' => '2.8.2.3',
                    'clause' => '시험 및 취약점 점검 과정에서 발견된 문제점이 신속하게 개선될 수 있도록 개선계획 수립, 이행점검 등의 절차를 이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '시험 및 취약점 점검 시 발견된 문제점에 대한 개선 계획 및 이행점검 등의 절차가 미흡하여, 해당 문제점을 통한 침해사고 발생이 가능한 위험',
                    'protection_plan' => '발견된 문제점에 대한 개선 계획 수립 및 이행점검',
                    'threatcode' => 'TC6-16',
                ),
            406 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '정보시스템 도입 및 개발 보안',
                    'depth' => '2.8.2.4',
                    'clause' => '공공기관은 관련 법령에 따라 개인정보처리시스템 신규 개발 및 변경 시 분석·설계 단계에서 영향평가기관을 통해 영향평가를 수행하고 그 결과를 개발 및 변경 시 반영하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '신규 개발 및 변경 시 영향평가를 수행하지 않아 법적 요구사항을 준수하지 못할 위험',
                    'protection_plan' => '신규 개발 및 변경 시 영향평가 기관을 통한 영향평가 수행 및 결과 반영 ',
                    'threatcode' => 'TC8-01',
                ),
            407 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '정보시스템 도입 및 개발 보안',
                    'depth' => '2.8.3.1',
                    'clause' => '정보시스템의 개발 및 시험 시스템을 운영시스템과 분리하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개발/테스트 시스템과 운영시스템이 분리되지 않아 테스트 용도의 어플리케이션에 내재된 취약점이 악용한 공격이 발생되거나 개발 상의 오류 등이 시스템에 영향을 미쳐 장애가 발생할 위험',
                    'protection_plan' => '정보시스템의 개발 및 시험 시스템을 운영시스템과 분리',
                    'threatcode' => 'TC1-05',
                ),
            408 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '정보시스템 도입 및 개발 보안',
                    'depth' => '2.8.3.2',
                    'clause' => '불가피한 사유로 개발과 운영환경의 분리가 어려운 경우 상호검토, 상급자 모니터링, 변경 승인, 책임추적성 확보 등의 보안대책을 마련하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '주요 직무자에 대한 식별 및 직무 분리가 이뤄지지 않아, 의도적/비의도적 권한 오남용 발생 위험',
                    'protection_plan' => '직무분리가 어려운 경우 직무자간 상호 검토, 상위관리자 정기 모니터링 및 변경사항 승인, 책임추적성 확보 방안 등의 보완통제 마련',
                    'threatcode' => 'TC6-06',
                ),
            409 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '정보시스템 도입 및 개발 보안',
                    'depth' => '2.8.4.1',
                    'clause' => '정보시스템의 개발 및 시험 과정에서 실제 운영 데이터의 사용을 제한하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '시스템 시험 과정에서 실 운영데이터 사용에 대한 제한 및 사용 절차 수립이 미흡하여 실 운영데이터가 유출될 위험',
                    'protection_plan' => '시스템 시험 과정에서 실제 운영 데이터 사용 제한',
                    'threatcode' => 'TC1-05',
                ),
            410 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '정보시스템 도입 및 개발 보안',
                    'depth' => '2.8.4.2',
                    'clause' => '불가피하게 운영데이터를 시험 환경에서 사용할 경우 책임자 승인, 접근 및 유출 모니터링, 시험 후 데이터 삭제 등의 통제 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '시스템 시험 과정에서 실 운영데이터 사용에 대한 제한 및 사용 절차 수립이 미흡하여 실 운영데이터가 유출될 위험',
                    'protection_plan' => '불가피하게 운영데이터를 시험 환경에서 사용할 경우 책임자 승인 등의 인가 절차 수립/이행',
                    'threatcode' => 'TC1-02',
                ),
            411 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '정보시스템 도입 및 개발 보안',
                    'depth' => '2.8.5.1',
                    'clause' => '비인가된 자에 의한 소스 프로그램 접근을 통제하기 위한 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '소스프로그램에 대한 변경 및 보관 관리가 미흡하여 소스프로그램 변조, 장애 등 보안사고 발생 위험',
                    'protection_plan' => '비인가된 자의 소스프로그램의 접근을 통제하기 위하여 절차 수립/이행',
                    'threatcode' => 'TC5-02',
                ),
            412 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '정보시스템 도입 및 개발 보안',
                    'depth' => '2.8.5.2',
                    'clause' => '소스 프로그램은 장애 등 비상시를 대비하여 운영환경이 아닌 곳에 안전하게 보관하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '소스프로그램에 대한 변경 및 보관 관리가 미흡하여 소스프로그램 변조, 장애 등 보안사고 발생 위험',
                    'protection_plan' => '시스템 운영 장애 등 비상시를 대비하여 이전 시스템의 소스 프로그램 보관',
                    'threatcode' => 'TC3-06',
                ),
            413 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '정보시스템 도입 및 개발 보안',
                    'depth' => '2.8.5.3',
                    'clause' => '소스 프로그램에 대한 변경이력을 관리하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '소스프로그램에 대한 변경 및 보관 관리가 미흡하여 소스프로그램 변조, 장애 등 보안사고 발생 위험',
                    'protection_plan' => '소스 프로그램에 대한 변경이력 관리',
                    'threatcode' => 'TC1-04',
                ),
            414 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '정보시스템 도입 및 개발 보안',
                    'depth' => '2.8.6.1',
                    'clause' => '신규 도입·개발 및 변경된 시스템을 운영환경으로 안전하게 이관하기 위한 통제 절차를 수립·이행하고 있는가',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '운영환경으로 이관 작업에 대한 관리가 미흡하여 실수 또는 고의적인 변경, 서비스 장애 등 보안사고가 발생할 위험',
                    'protection_plan' => '운영환경으로의 이관 절차를 수립/이행',
                    'threatcode' => 'TC1-02',
                ),
            415 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '정보시스템 도입 및 개발 보안',
                    'depth' => '2.8.6.2',
                    'clause' => '운영환경으로의 이관 시 발생할 수 있는 문제에 대한 대응 방안을 마련하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '운영환경으로 이관 작업에 대한 관리가 미흡하여 실수 또는 고의적인 변경, 서비스 장애 등 보안사고가 발생할 위험',
                    'protection_plan' => '운영환경으로의 이관 시 발생할 수 있는 문제 대응 방안을 마련',
                    'threatcode' => 'TC1-02',
                ),
            416 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '정보시스템 도입 및 개발 보안',
                    'depth' => '2.8.6.3',
                    'clause' => '운영환경에는 서비스 실행에 필요한 파일만을 설치하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '운영환경으로 이관 작업에 대한 관리가 미흡하여 실수 또는 고의적인 변경, 서비스 장애 등 보안사고가 발생할 위험',
                    'protection_plan' => '운영환경에는 서비스 실행에 필요한 파일만 설치',
                    'threatcode' => 'TC1-02',
                ),
            417 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 운영관리',
                    'depth' => '2.9.1.1',
                    'clause' => '정보시스템 관련 자산(하드웨어, 운영체제, 상용 소프트웨어 패키지 등) 변경에 관한 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템 자산 변경에 대한 통제가 미흡하여 시스템 또는 서비스 장애가 및 보안사고가 발생할 위험',
                    'protection_plan' => '정보시스템 관련 자산(하드웨어, 운영체제, 상용 소프트웨어 패키지 등) 변경에 관한 절차 수립/이행',
                    'threatcode' => 'TC1-04',
                ),
            418 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 운영관리',
                    'depth' => '2.9.1.2',
                    'clause' => '정보시스템 관련 자산 변경을 수행하기 전 성능 및 보안에 미치는 영향을 분석하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템 자산 변경에 대한 통제가 미흡하여 시스템 또는 서비스 장애가 및 보안사고가 발생할 위험',
                    'protection_plan' => '정보시스템 관련 자산 변경을 수행하기 전 성능 및 보안에 미치는 영향 분석',
                    'threatcode' => 'TC1-04',
                ),
            419 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 운영관리',
                    'depth' => '2.9.2.1',
                    'clause' => '정보시스템의 가용성 보장을 위하여 성능 및 용량을 지속적으로 모니터링 할 수 있는 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템 성능 및 용량 임계치 초과로 인한 서비스 장애 발생 위험',
                    'protection_plan' => '정보시스템의 성능 및 용량을 지속적으로 모니터링 하기 위한 절차 수립/이행',
                    'threatcode' => 'TC1-01',
                ),
            420 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 운영관리',
                    'depth' => '2.9.2.2',
                    'clause' => '정보시스템 성능 및 용량 요구사항(임계치)을 초과하는 경우에 대한 대응절차를 수립·이행하고 있는가? ',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템 성능 및 용량 임계치 초과로 인한 서비스 장애 발생 위험',
                    'protection_plan' => '정보시스템 성능 및 용량 요구사항(임계치)을 초과하는 경우 조치절차 수립/이행',
                    'threatcode' => 'TC1-01',
                ),
            421 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 운영관리',
                    'depth' => '2.9.2.3',
                    'clause' => '정보시스템 장애를 즉시 인지하고 대응하기 위한 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템 장애 발생 시 체계적인 대응 및 조치가 이루어지지 않아 서비스 복구 지연, 금전적 손실 등 피해가 발생할 위험',
                    'protection_plan' => '정보시스템 장애를 즉시 인지하고 대응하기 위한 절차 수립/이행',
                    'threatcode' => 'TC1-02',
                ),
            422 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 운영관리',
                    'depth' => '2.9.2.4',
                    'clause' => '장애 발생 시 절차에 따라 조치하고 장애조치보고서 등을 통해 장애조치내역을 기록하여 관리하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템 장애 발생 시 체계적인 대응 및 조치가 이루어지지 않아 서비스 복구 지연, 금전적 손실 등 피해가 발생할 위험',
                    'protection_plan' => '장애 발생 시 절차에 따라 조치하고 장애조치보고서 등을 통해 기록/관리',
                    'threatcode' => 'TC1-04',
                ),
            423 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 운영관리',
                    'depth' => '2.9.2.5',
                    'clause' => '심각도가 높은 장애의 경우 원인분석을 통한 재발방지 대책을 마련하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템 장애 발생 시 체계적인 대응 및 조치가 이루어지지 않아 서비스 복구 지연, 금전적 손실 등 피해가 발생할 위험',
                    'protection_plan' => '심각도가 높은 장애의 경우 원인분석을 통한 재발방지 대책 수립/이행',
                    'threatcode' => 'TC1-04',
                ),
            424 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 운영관리',
                    'depth' => '2.9.3.1',
                    'clause' => '백업 대상, 주기, 방법, 절차 등이 포함된 백업 및 복구절차를 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '중요정보에 대한 백업 및 보관 관리가 미흡하여 보안사고 발생시 시스템 복구가 어려울 위험',
                    'protection_plan' => '백업 대상, 주기, 방법, 절차 등이 포함된 백업 및 복구절차 수립/이행',
                    'threatcode' => 'TC1-04',
                ),
            425 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 운영관리',
                    'depth' => '2.9.3.2',
                    'clause' => '백업된 정보의 완전성과 정확성, 복구절차의 적절성을 확인하기 위하여 정기적으로 복구 테스트를 실시하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '복구 테스트를 통한복구의 정확성과 복구절차의 적절성의 확인이 미흡하여, 복구 시 완전성 및 정확성 보장이 어려운 위험',
                    'protection_plan' => '복구 테스트를 실시하여 복구 정확성 및 복구 절차 확인',
                    'threatcode' => 'TC5-01',
                ),
            426 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 운영관리',
                    'depth' => '2.9.3.3',
                    'clause' => '중요정보가 저장된 백업매체의 경우 재해·재난에 대처할 수 있도록 백업매체를 물리적으로 떨어진 장소에 소산하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '중요정보에 대한 백업 및 보관 관리가 미흡하여 보안사고 발생시 시스템 복구가 어려울 위험',
                    'protection_plan' => '중요정보가 저장된 백업매체의 경우 재난에 대처할 수 있도록 백업매체를 물리적으로 떨어진 장소에 소산',
                    'threatcode' => 'TC1-04',
                ),
            427 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 운영관리',
                    'depth' => '2.9.4.1',
                    'clause' => '서버, 응용프로그램, 보안시스템, 네트워크시스템 등 정보시스템에 대한 로그관리 절차를 수립하고 이에 따라 필요한 로그를 생성하여 보관하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '주요 정보시스템 자산에 대한 로그 기록, 보관 및 관리 절차가 미흡하여 보안사고 발생시 대응이 어려울 위험',
                    'protection_plan' => '주요 정보시스템에 대한 로그관리 절차를 수립하고 이에 따라 로깅',
                    'threatcode' => 'TC7-01',
                ),
            428 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 운영관리',
                    'depth' => '2.9.4.2',
                    'clause' => '정보시스템의 로그기록은 별도 저장장치를 통해 백업하고 로그기록에 대한 접근권한은 최소화하여 부여하고 있는가',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '주요 정보시스템 자산에 대한 로그 기록, 보관 및 관리 절차가 미흡하여 보안사고 발생시 대응이 어려울 위험',
                    'protection_plan' => '로그기록은 별도 저장장치를 통해 백업하고 로그기록에 대한 접근권한 부여 최소화',
                    'threatcode' => 'TC7-02',
                ),
            429 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 운영관리',
                    'depth' => '2.9.4.3',
                    'clause' => '개인정보처리시스템에 대한 접속기록은 법적 요구사항을 준수할 수 있도록 필요한 항목을 모두 포함하여 일정기간 안전하게 보관하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보처리시스템에 대한 접속기록이 6개월이상 보존되지 않아. 유출사고 발생시 감사성, 추적성을 확보하지 못할 위험',
                    'protection_plan' => '개인정보처리시스템에 대한 접속기록 6개월 이상 보존함',
                    'threatcode' => 'TC7-01',
                ),
            430 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 운영관리',
                    'depth' => '2.9.5.1',
                    'clause' => '정보시스템 관련 오류, 오·남용(비인가접속, 과다조회 등), 부정행위 등 이상징후를 인지할 수 있도록 로그 검토 주기, 대상, 방법 등을 포함한 로그 검토 및 모니터링 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템 및 중요정보, 응용프로그램에 대한 사용자 접근이력에 대해 주기적인 점검활동이 없어 내부 악의적인 사용자에 의한 정보유출 등 보안사고 발생 위험',
                    'protection_plan' => '중요정보 및 주요 정보시스템에 대한 사용자 접속 기록 주기적 검토(모니터링)',
                    'threatcode' => 'TC1-01',
                ),
            431 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 운영관리',
                    'depth' => '2.9.5.2',
                    'clause' => '로그 검토 및 모니터링 결과를 책임자에게 보고하고 이상징후 발견 시 절차에 따라 대응하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템 및 중요정보, 응용프로그램에 대한 사용자 접근이력에 대해 주기적인 점검활동이 없어 내부 악의적인 사용자에 의한 정보유출 등 보안사고 발생 위험',
                    'protection_plan' => '사용자 접속기록 검토결과를 책임자에게 보고하고 이상징후 발견 시 절차에 따라 대응',
                    'threatcode' => 'TC1-01',
                ),
            432 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 운영관리',
                    'depth' => '2.9.5.3',
                    'clause' => '개인정보처리시스템의 접속기록은 관련 법령에서 정한 주기에 따라 정기적으로 점검하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보처리시스템에 대한 사용자 접근의 타당성을 정기적으로 검토하고 있지 않아, 사고발생 상황에 대하여 적절히 대응하지 못할 위험',
                    'protection_plan' => '개인정보처리시스템의 경우 사용자 접속내역을 기록하고 접근의 타당성을 정기적으로 검토',
                    'threatcode' => 'TC1-01',
                ),
            433 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 운영관리',
                    'depth' => '2.9.6.1',
                    'clause' => '정보시스템의 시간을 표준시간으로 동기화하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '시각동기화 관리 미흡으로 인한 시스템 내 이슈 발생 시 명확한 시기 파악이 불가능할 위험',
                    'protection_plan' => '각 정보시스템 시각을 표준시각으로 동기화',
                    'threatcode' => 'TC7-01',
                ),
            434 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 운영관리',
                    'depth' => '2.9.6.2',
                    'clause' => '시간 동기화가 정상적으로 이루어지고 있는지 주기적으로 점검하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '시간 동기화가 정상적으로 이루어 지지 않아, 로그 및 접속기록의 신뢰성을 보장하지 못하는 위험',
                    'protection_plan' => '시간 동기화 적용, 오류 등 주기적 점검',
                    'threatcode' => 'TC7-02',
                ),
            435 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 운영관리',
                    'depth' => '2.9.7.1',
                    'clause' => '정보자산의 안전한 재사용 및 폐기에 대한 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템 저장매체의 폐기 또는 재사용 기준 부재 및 불용처리 미흡으로 인한 폐기 또는 재사용 매체를 통한 정보유출 위험',
                    'protection_plan' => '정보시스템 폐기 또는 재사용(양도, 내부판매, 재활용 등)시 저장매체 처리에 관한 절차 수립/이행',
                    'threatcode' => 'TC4-08',
                ),
            436 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 운영관리',
                    'depth' => '2.9.7.2',
                    'clause' => '정보자산 및 저장매체를 재사용 및 폐기하는 경우 개인정보 및 중요정보를 복구되지 않는 방법으로 처리하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템 저장매체의 폐기 또는 재사용 기준 부재 및 불용처리 미흡으로 인한 폐기 또는 재사용 매체를 통한 정보유출 위험',
                    'protection_plan' => '저장매체 폐기 또는 재사용 시 정보가 복구되지 않는 방법으로 처리',
                    'threatcode' => 'TC4-08',
                ),
            437 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 운영관리',
                    'depth' => '2.9.7.3',
                    'clause' => '자체적으로 정보자산 및 저장매체를 폐기할 경우 관리대장을 통해 폐기이력을 남기고 폐기확인 증적을 함께 보관하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템 저장매체의 폐기 또는 재사용 기준 부재 및 불용처리 미흡으로 인한 폐기 또는 재사용 매체를 통한 정보유출 위험',
                    'protection_plan' => '자체적으로 저장매체를 폐기할 경우 관리대장을 통해 폐기이력을 남기고 폐기확인증적 보관',
                    'threatcode' => 'TC4-08',
                ),
            438 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 운영관리',
                    'depth' => '2.9.7.4',
                    'clause' => '외부업체를 통해 정보자산 및 저장매체를 폐기할 경우 폐기 절차를 계약서에 명시하고 완전히 폐기했는지 여부를 확인하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템 저장매체의 폐기 또는 재사용 기준 부재 및 불용처리 미흡으로 인한 폐기 또는 재사용 매체를 통한 정보유출 위험',
                    'protection_plan' => '외부업체를 통해 저장매체를 폐기할 경우 폐기 절차 계약서 명시 및 완전한 폐기 확인',
                    'threatcode' => 'TC4-08',
                ),
            439 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 운영관리',
                    'depth' => '2.9.7.5',
                    'clause' => '정보시스템, PC 등 유지보수, 수리 과정에서 저장매체 교체, 복구 등 발생 시 저장매체 내 정보를 보호하기 위한 대책을 마련하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템 저장매체의 폐기 또는 재사용 기준 부재 및 불용처리 미흡으로 인한 폐기 또는 재사용 매체를 통한 정보유출 위험',
                    'protection_plan' => '정보시스템, PC 등 유지보수, 수리 과정에서 저장매체 교체, 복구 등 발생 시 저장매체 내 정보를 보호하기 위한 대책 마련',
                    'threatcode' => 'TC4-08',
                ),
            440 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.1.1',
                    'clause' => '조직에서 운영하고 있는 보안시스템에 대한 운영절차를 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '보안시스템에 대한 운영관리 절차가 수립되지 않아 비인가 시스템 접근 등 보안사고 발생이 가능할 위험',
                    'protection_plan' => '조직에서 운영하고 있는 보안시스템 운영절차 수립',
                    'threatcode' => 'TC1-02',
                ),
            441 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.1.2',
                    'clause' => '보안시스템 관리자 등 접근이 허용된 인원을 최소화하고 비인가자의 접근을 엄격하게 통제하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '보안시스템에 대한 접근통제 및 정책 관리가 미흡하여 비인가 접근, 불법 정책 변조 등에 의한 침해사고가 발생할 위험',
                    'protection_plan' => '보안시스템 관리자 등 접근이 허용된 인원을 최소화하고 비인가자 접근을 엄격하게 통제',
                    'threatcode' => 'TC6-11',
                ),
            442 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.1.3',
                    'clause' => '보안시스템별로 정책의 신규 등록, 변경, 삭제 등을 위한 공식적인 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '보안시스템에 대한 접근통제 및 정책 관리가 미흡하여 비인가 접근, 불법 정책 변조 등에 의한 침해사고가 발생할 위험',
                    'protection_plan' => '보안시스템별 정책(룰셋 등) 신규 등록, 변경, 삭제 등 절차를 수립하고 정책의 타당성 검토 주기적 수행',
                    'threatcode' => 'TC1-01',
                ),
            443 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.1.4',
                    'clause' => '보안시스템의 예외 정책 등록에 대하여 절차에 따라 관리하고 있으며, 예외 정책 사용자에 대하여 최소한의 권한으로 관리하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '보안시스템의 예외 정책 관리 절차 및 예외 정책 사용자에 대한 권한 부여가 미흡하여, 예외 정책을 통한 보안사고 발생 위험 ',
                    'protection_plan' => '보안시스템의 예외 정책 관리 및 예외 정책 사용자의 권한 최소화',
                    'threatcode' => 'TC1-04',
                ),
            444 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.1.5',
                    'clause' => '보안시스템에 설정된 정책의 타당성 여부를 주기적으로 검토하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '보안시스템에 대한 접근통제 및 정책 관리가 미흡하여 비인가 접근, 불법 정책 변조 등에 의한 침해사고가 발생할 위험',
                    'protection_plan' => '보안시스템별 정책(룰셋 등) 신규 등록, 변경, 삭제 등 절차를 수립하고 정책의 타당성 검토 주기적 수행',
                    'threatcode' => 'TC1-01',
                ),
            445 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.1.6',
                    'clause' => '개인정보처리시스템에 대한 불법적인 접근 및 개인정보 유출 방지를 위하여 관련 법령에서 정한 기능을 수행하는 보안시스템을 설치하여 운영하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '내부 네트워크 접근 통제가 미흡하여 외부 또는 불필요한 내부사용자의 중요시스템 접근이 가능할 위험',
                    'protection_plan' => '접근통제 정책에 따라 인가된 사용자만이 네트워크에 접근할 수 있도록 방화벽, IDS 또는 IPS 등을 통해 내부 네트워크 접근 통제',
                    'threatcode' => 'TC6-11',
                ),
            446 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.2.1',
                    'clause' => '클라우드 서비스 제공자와 정보보호 및 개인정보보호에 대한 책임과 역할을 명확히 정의하고 이를 계약서(SLA 등)에 반영하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '클라우드 사업자의 정보보호 및 개인정보보호 책임 활동의 책임정의 및 피해발생에 대한 구제가 어려울 위험',
                    'protection_plan' => '클라우드 서비스 계약 시 보안요구사항을 정의한 계약 반영',
                    'threatcode' => 'TC1-08',
                ),
            447 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.2.2',
                    'clause' => '클라우드 서비스 이용 시 서비스 유형에 따른 보안위험을 평가하여 비인가 접근, 설정오류 등을 방지할 수 있도록 보안 구성 및 설정 기준, 보안설정 변경 및 승인 절차, 안전한 접속방법, 권한 체계 등 보안 통제 정책을 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '클라우드 서비스 유형별 적절한 보안 통제 정책이 미흡하여, 클라우드 서비스를 통한 보안사고가 발생할 위험',
                    'protection_plan' => '클라우드 서비스 유형별 보안위험의 평가 및 보안 통제 정책을 수립 이행',
                    'threatcode' => 'TC1-02',
                ),
            448 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.2.3',
                    'clause' => '클라우드 서비스 관리자 권한은 역할에 따라 최소화하여 부여하고 관리자 권한에 대한 비인가된 접근, 권한 오남용 등을 방지할 수 있도록 강화된 인증, 암호화, 접근통제, 감사기록 등 보호대책을 적용하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '클라우드 서비스 관리자 권한에 대한 보호대책이 미흡하여, 권한의 오남용에 따른 보안사고가 발생할 위험',
                    'protection_plan' => '클라우드 서비스 관리자 계정의 안전한 접속(OTP, 보안키, VPN 등) 및 로그 모니터링(접속, 권한설정 등) 수행',
                    'threatcode' => 'TC6-06',
                ),
            449 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.2.4',
                    'clause' => '클라우드 서비스의 보안 설정 변경, 운영 현황 등을 모니터링하고 그 적절성을 정기적으로 검토하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '클라우드 서비스의 보안 설정 변경 및 운영 현황 등의 모니터링과 적절성 검토가 미흡하여, 비인가된 보안 설정 및 환경 설정을 통한 보안사고가 발생할 위험',
                    'protection_plan' => '클라우드 보안 설정, 운영 현황 등의 모니터링 및 정기적 검토',
                    'threatcode' => 'TC1-01',
                ),
            450 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.3.1',
                    'clause' => '공개서버를 운영하는 경우 이에 대한 보호대책을 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '공개서버 보안관리 미흡으로 인한 시스템 자원 침탈, 정보유출, 서비스 장애 위험',
                    'protection_plan' => '웹 서버 등 공개 서버에 대한 기술적 취약점 이행 조치',
                    'threatcode' => 'TC1-02',
                ),
            451 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.3.2',
                    'clause' => '공개서버는 내부 네트워크와 분리된 DMZ(Demilitarized Zone)영역에 설치하고 침입차단시스템 등 보안시스템을 통해 보호하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '공개서버에 대한 네트워크 구성 및 접근통제 관리가 미흡하여 비인가 시스템 접근 등 침해사고 발생 위험',
                    'protection_plan' => 'DMZ(Demilitarized Zone) 구성 및 보안시스템을 통한 보호 적용',
                    'threatcode' => 'TC6-08',
                ),
            452 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.3.3',
                    'clause' => '공개서버에 개인정보 및 중요정보를 게시하거나 저장하여야 할 경우 책임자 승인 등 허가 및 게시절차를 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '공개서버 보안관리 미흡으로 인한 시스템 자원 침탈, 정보유출, 서비스 장애 위험',
                    'protection_plan' => '중요정보 게시 절차 수립 및 중요정보 노출 여부 주기적 확인',
                    'threatcode' => 'TC1-02',
                ),
            453 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.3.4',
                    'clause' => '조직의 중요정보가 웹사이트 및 웹서버를 통해 노출되고 있는지 여부를 주기적으로 확인하여 중요정보 노출을 인지한 경우 이를 즉시 차단하는 등의 조치를 취하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '공개서버 보안관리 미흡으로 인한 시스템 자원 침탈, 정보유출, 서비스 장애 위험',
                    'protection_plan' => '중요정보 게시 절차 수립 및 중요정보 노출 여부 주기적 확인',
                    'threatcode' => 'TC1-02',
                ),
            454 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.4.1',
                    'clause' => '전자거래 및 핀테크 서비스를 제공하는 경우 거래의 안전성과 신뢰성 확보를 위한 보호대책을 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '전자거래에 대한 보안 관리가 미흡하여 정보유출, 데이터 조작, 사기 등의 침해사고 발생 위험',
                    'protection_plan' => '전자(상)거래의 안전성과 신뢰성 확보를 위한 보호대책 수립/이행',
                    'threatcode' => 'TC5-01',
                ),
            455 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.4.2',
                    'clause' => '전자거래 및 핀테크 서비스 제공을 위하여 결제시스템 등 외부 시스템과 연계하는 경우 송·수신되는 관련 정보의 보호를 위한 대책을 수립·이행하고 안전성을 점검하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '전자거래에 대한 보안 관리가 미흡하여 정보유출, 데이터 조작, 사기 등의 침해사고 발생 위험',
                    'protection_plan' => '전자(상)거래의 안전성과 신뢰성 확보를 위한 보호대책 수립/이행',
                    'threatcode' => 'TC5-01',
                ),
            456 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.5.1',
                    'clause' => '외부 조직에 개인정보 및 중요정보를 전송할 경우 안전한 전송 정책을 수립하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '외부 조직에 개인정보 및 중요정보 전송에 대한 안전한 전송 정책이 미흡하여, 중요정보 노출 및 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '외부 조직에 개인정보 및 중요정보 전송에 대한 안전한 전송 정책 수립',
                    'threatcode' => 'TC4-02',
                ),
            457 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.5.2',
                    'clause' => '업무상 조직 간에 개인정보 및 중요정보를 상호교환하는 경우 안전한 전송을 위한 협약체결 등 보호대책을 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '조직간 중요정보 전송 시 암호화 미적용에 따른 정보유출 위험',
                    'protection_plan' => '업무상 조직 간에 중요정보(개인정보, 기밀정보 등)를 상호 교환하는 경우 안전한 전송을 위한 협약체결 등 보호대책 수립/이행',
                    'threatcode' => 'TC4-03',
                ),
            458 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.6.1',
                    'clause' => 'PC, 노트북, 가상PC, 태블릿 등 업무에 사용되는 단말기에 대하여 기기인증, 승인, 접근범위 설정, 기기 보안설정 등의 보안 통제 정책을 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '모바일 기기에 대한 물리적, 기술적 보안 통제 미흡으로 인한 비인가 접근 및 정보유출 위험',
                    'protection_plan' => '모바일기기에 대한 보안 통제 정책을 마련하고 이에 따라 이행',
                    'threatcode' => 'TC6-12',
                ),
            459 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.6.2',
                    'clause' => '업무용 단말기를 통해 개인정보 및 중요정보가 유출되는 것을 방지하기 위하여 자료공유프로그램 사용 금지, 공유설정 제한, 무선망 이용 통제 등의 정책을 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '업무용 단밀기를 통한 개인정보 및 중요정보 유출 방지를 위한 통제 정책이 미흡하여, 정보 유출 등 보안사고가 발생할 위험',
                    'protection_plan' => '업무용 단말기의 통제 정책 수립 및 이행(자료공유프로그램 사용 금지, 공유설정 제한, 무선망 이용 통제 등)',
                    'threatcode' => 'TC1-02',
                ),
            460 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.6.3',
                    'clause' => '업무용 모바일 기기의 분실, 도난 등으로 인한 개인정보 및 중요정보의 유·노출을 방지하기 위하여 보안대책을 적용하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '업무용 모바일 기기의 분리, 도난 등에 대한 보안대책이 미흡하여, 비인가된 사용자의 업무용 모바일 기기 사용이 가능한 위험',
                    'protection_plan' => '업무용 모바일 기기에 보안대책 적용(단말기 비밀번호 설정, 원격잠금, MDM 등)',
                    'threatcode' => 'TC6-12',
                ),
            461 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.6.4',
                    'clause' => '업무용 단말기기에 대한 접근통제 대책의 적절성에 대해 주기적으로 점검하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '업무용 단말기에 대한 접근통제 점검이 미흡하여, 불필요한 접근권한 및 보안설정 등을 통해 보안사고가 발생할 위험',
                    'protection_plan' => '업무용 단말기에 대한 접근통제 및 보안설정 현황 및 적절성을 주기적으로 점검',
                    'threatcode' => 'TC1-01',
                ),
            462 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.7.1',
                    'clause' => '외장하드, USB메모리, CD 등 보조저장매체 취급(사용), 보관, 폐기, 재사용에 대한 정책 및 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '휴대용 저장매체 사용에 대한 통제 및 관리가 미흡하여, 중요 정보 유출, 악성코드 감염 등 보안사고가 발생할 위험',
                    'protection_plan' => '외장하드, USB, CD 등 휴대용 저장매체 취급(사용), 보관, 폐기, 재사용에 대한 정책 및 절차 수립/이행',
                    'threatcode' => 'TC1-15',
                ),
            463 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.7.2',
                    'clause' => '보조저장매체 보유현황, 사용 및 관리실태를 주기적으로 점검하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '휴대용 저장매체 사용에 대한 통제 및 관리가 미흡하여, 중요 정보 유출, 악성코드 감염 등 보안사고가 발생할 위험',
                    'protection_plan' => '휴대용 저장매체 보유현황 및 관리실태 주기적 점검',
                    'threatcode' => 'TC1-15',
                ),
            464 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.7.3',
                    'clause' => '주요 정보시스템이 위치한 통제구역, 중요 제한구역 등에서 보조저장매체 사용을 제한하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '휴대용 저장매체 사용에 대한 통제 및 관리가 미흡하여, 중요 정보 유출, 악성코드 감염 등 보안사고가 발생할 위험',
                    'protection_plan' => '주요 정보시스템이 위치한 통제구역, 중요 제한구역 등에서 휴대용 저장매체 사용 제한',
                    'threatcode' => 'TC1-15',
                ),
            465 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.7.4',
                    'clause' => '보조저장매체를 통한 악성코드 감염 및 중요정보 유출 방지를 위한 대책을 마련하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '휴대용 저장매체 사용에 대한 통제 및 관리가 미흡하여, 중요 정보 유출, 악성코드 감염 등 보안사고가 발생할 위험',
                    'protection_plan' => '휴대용 저장매체를 통한 악성코드 감염 및 중요정보 유출 방지를 위한 대책 마련',
                    'threatcode' => 'TC3-12',
                ),
            466 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.7.5',
                    'clause' => '개인정보 또는 중요정보가 포함된 보조저장매체를 잠금장치가 있는 안전한 장소에 보관하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보 또는 중요정보가 포함된 보조저쟁매체의 보관 관리가 미흡하여, 해당 저장매체를 통해 중요정보가 유출 가능한 위험',
                    'protection_plan' => '개인정보, 중요정보가 포함된 보조저장매체를 잠금장치가 있는 안전한 장소에 보관',
                    'threatcode' => 'TC4-08',
                ),
            467 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.8.1',
                    'clause' => '서버, 네트워크시스템, 보안시스템, PC 등 자산별 특성 및 중요도에 따라 운영체제(OS)와 소프트웨어의 패치관리 정책 및 절차를 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'OS 및 어플리케이션 패치 관리가 미흡하여 버그, 보안 취약점을 악용한 침해사고가 발생할 위험',
                    'protection_plan' => '서버, 네트워크 장비, 보안시스템, PC 등 자산 중요도 또는 특성에 따라 OS, 소프트웨어 패치관리 정책 및 절차 수립/이행',
                    'threatcode' => 'TC6-16',
                ),
            468 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.8.2',
                    'clause' => '주요 서버, 네트워크시스템, 보안시스템 등의 경우 설치된 OS, 소프트웨어 패치적용 현황을 주기적으로 관리하고 있는가? ',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'OS 및 어플리케이션 패치 관리가 미흡하여 버그, 보안 취약점을 악용한 침해사고가 발생할 위험',
                    'protection_plan' => '주요 서버, 네트워크 장비 등의 경우 설치된 OS, 소프트웨어 패치적용 현황 관리',
                    'threatcode' => 'TC6-16',
                ),
            469 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.8.3',
                    'clause' => '서비스 영향도 등에 따라 취약점을 조치하기 위한 최신의 패치 적용이 어려운 경우 보완대책을 마련하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '최신 패치의 적용이 되지 않은 운영시스템의 보완대책의 수립이 미흡하여, 최신 취약점을 악용한 침해사고가 발생 가능한 위험',
                    'protection_plan' => '서비스 영향도 등에 따라 최신 패치가 미적용 된 운영 시스템 현황관리 및 보완대책 수립',
                    'threatcode' => 'TC6-16',
                ),
            470 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.8.4',
                    'clause' => '주요 서버, 네트워크시스템, 보안시스템 등의 경우 공개 인터넷 접속을 통한 패치를 제한하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'OS 및 어플리케이션 패치 관리가 미흡하여 버그, 보안 취약점을 악용한 침해사고가 발생할 위험',
                    'protection_plan' => '주요 서버, 네트워크 장비, 정보보호시스템 등의 경우 공개 인터넷 접속을 통한 패치 제한',
                    'threatcode' => 'TC6-16',
                ),
            471 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.8.5',
                    'clause' => '패치관리시스템을 활용하는 경우 접근통제 등 충분한 보호대책을 마련하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'OS 및 어플리케이션 패치 관리가 미흡하여 버그, 보안 취약점을 악용한 침해사고가 발생할 위험',
                    'protection_plan' => 'PMS 시스템에 대한 접근통제 강화',
                    'threatcode' => 'TC6-16',
                ),
            472 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.9.1',
                    'clause' => '바이러스, 웜, 트로이목마, 랜섬웨어 등의 악성코드로부터 정보시스템 및 업무용단말기 등을 보호하기 위하여 보호대책을 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '악성코드 및 바이러스 감염으로 인한 중요 데이터 유출/손실, 시스템 장애가 발생할 위험',
                    'protection_plan' => '바이러스, 웜, 트로이목마 등의 악성코드로부터 정보시스템을 보호하기 위하여 보호대책 수립/이행',
                    'threatcode' => 'TC3-12',
                ),
            473 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.9.2',
                    'clause' => '백신 소프트웨어 등 보안프로그램을 통하여 최신 악성코드 예방·탐지 활동을 지속적으로 수행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '악성코드 및 바이러스 감염으로 인한 중요 데이터 유출/손실, 시스템 장애가 발생할 위험',
                    'protection_plan' => '백신프로그램 등을 통한 최신 악성코드 예방, 탐지 활동 지속 수행',
                    'threatcode' => 'TC3-12',
                ),
            474 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.9.3',
                    'clause' => '백신 소프트웨어 등 보안프로그램은 최신의 상태로 유지하고 필요 시 긴급 보안업데이트를 수행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '백신 등 보안프로그램을 최신의 상태로 유지하지 못하여, 최신 악성코드 감염 등에 의해서 침해사고가 발생 가능한 위험',
                    'protection_plan' => '백신 등 보안프로그램을 최신의 상태로 유지 및 필요 시긴급 보안업데이트 수행',
                    'threatcode' => 'TC3-12',
                ),
            475 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '시스템 및 서비스 보안관리',
                    'depth' => '2.10.9.4',
                    'clause' => '악성코드 감염 발견 시 악성코드 확산 및 피해 최소화 등의 대응절차를 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '악성코드 및 바이러스 감염으로 인한 중요 데이터 유출/손실, 시스템 장애가 발생할 위험',
                    'protection_plan' => '악성코드 감염 발견 시 악성코드 확산 및 피해 최소화 등의 대응절차 수립/이행',
                    'threatcode' => 'TC3-12',
                ),
            476 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '사고 예방 및 대응',
                    'depth' => '2.11.1.1',
                    'clause' => '침해사고 및 개인정보 유출사고를 예방하고 사고 발생시 신속하고 효과적으로 대응하기 위한 체계와 절차를 마련하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '침해사고 대응절차 및 체계 구축이 미흡하여 사고 발생시 효과적으로 대응하지 못할 위험',
                    'protection_plan' => '침해사고 모니터링 및 대응 방법, 절차, 대응 조직 및 인력, 보고 및 승인 방법 등을 포함한 중앙집중적인 대응체계 수립',
                    'threatcode' => 'TC1-01',
                ),
            477 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '사고 예방 및 대응',
                    'depth' => '2.11.1.2',
                    'clause' => '보안관제서비스 등 외부 기관을 통해 침해사고 대응체계를 구축·운영하는 경우 침해사고 대응절차의 세부사항을 계약서에 반영하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '침해사고 대응절차 및 체계 구축이 미흡하여 사고 발생시 효과적으로 대응하지 못할 위험',
                    'protection_plan' => '침해사고 대응절차의 세부사항을 계약서에 반영',
                    'threatcode' => 'TC1-01',
                ),
            478 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '사고 예방 및 대응',
                    'depth' => '2.11.1.3',
                    'clause' => '침해사고의 모니터링, 대응 및 처리를 위하여 외부전문가, 전문업체, 전문기관 등과의 협조체계를 수립하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '침해사고 대응절차 및 체계 구축이 미흡하여 사고 발생시 효과적으로 대응하지 못할 위험',
                    'protection_plan' => '침해사고의 모니터링, 대응 및 처리와 관련된 외부전문가, 전문업체, 전문기관(KISA) 등과의 협조체계 수립',
                    'threatcode' => 'TC1-01',
                ),
            479 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '사고 예방 및 대응',
                    'depth' => '2.11.2.1',
                    'clause' => '정보시스템 취약점 점검 절차를 수립하고 정기적으로 점검을 수행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템에 대한 정기적 취약점점검 체계 부재로 인하여 취약점 노출에 따른 보안사고의 발생 위험',
                    'protection_plan' => '정보시스템 취약점 점검 절차를 수립하여 정기적으로 점검 수행',
                    'threatcode' => 'TC1-04',
                ),
            480 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '사고 예방 및 대응',
                    'depth' => '2.11.2.2',
                    'clause' => '발견된 취약점에 대한 조치를 수행하고 그 결과를 책임자에게 보고하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템에 대한 정기적 취약점점검 체계 부재로 인하여 취약점 노출에 따른 보안사고의 발생 위험',
                    'protection_plan' => '발견된 취약점에 대한 조치를 수행하고 그 결과를 책임자에게 보고',
                    'threatcode' => 'TC1-04',
                ),
            481 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '사고 예방 및 대응',
                    'depth' => '2.11.2.3',
                    'clause' => '최신 보안취약점 발생 여부를 지속적으로 파악하고 정보시스템에 미치는 영향을 분석하여 조치하고 있는가?
',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '최신 보안취약점 발생여부를 파악하지 못하여, 최신 취약점을 악용한 침해사고가 발생 가능한 위험',
                    'protection_plan' => '최신 보안취약점 발생 여부를 지속적으로 파악하여, 정보시스템의 미치는 영향을 분석 및 조치',
                    'threatcode' => 'TC6-16',
                ),
            482 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '사고 예방 및 대응',
                    'depth' => '2.11.2.4',
                    'clause' => '취약점 점검 이력을 기록관리하여 전년도에 도출된 취약점이 재발생하는 등의 문제점에 대해 보호대책을 마련하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '취약점 점검 이력에 대한 관리 또는 재발생 취약점에 대한 보호대책 마련이 미흡하여, 재발생한 취약점을 통한 침해사고가 발생할 위험',
                    'protection_plan' => '취약점 점검 이력을 기록관리 및 재발하는 취약점의 근본적 보호대책 수립',
                    'threatcode' => 'TC1-03',
                ),
            483 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '사고 예방 및 대응',
                    'depth' => '2.11.3.1',
                    'clause' => '내·외부에 의한 침해시도, 개인정보 유출 시도, 부정행위 등 이상행위를 탐지할 수 있도록 주요 정보시스템, 응용프로그램, 네트워크, 보안시스템 등에서 발생한 네트워크 트래픽, 데이터 흐름, 이벤트 로그 등을 수집하여 분석 및 모니터링하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '침해시도에 대한 모니터링이 이루어지지 않아 외부자의 침해 발생 차단 및 대응이 어려울 위험',
                    'protection_plan' => '외부로부터의 침해시도가 의심되는 이상징후를 지체 없이 인지할 수 있도록 모니터링 체계 및 절차 수립',
                    'threatcode' => 'TC1-01',
                ),
            484 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '사고 예방 및 대응',
                    'depth' => '2.11.3.2',
                    'clause' => '침해시도, 개인정보유출시도, 부정행위 등의 여부를 판단하기 위한 기준 및 임계치를 정의하고 이에 따라 이상행위의 판단 및 조사 등 후속 조치가 적시에 이루어지고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '사고 여부를 판단하기 위한 기준 및 임계치를 적절하게 정의하지 못하여, 침해시도 및 개인정보유출시도, 부정행위 등의 여부를 판단하지 못하는 위험',
                    'protection_plan' => '사고 여부의 판단 기준 정의 및 이상행위 판단, 조치 수행',
                    'threatcode' => 'TC4-09',
                ),
            485 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '사고 예방 및 대응',
                    'depth' => '2.11.4.1',
                    'clause' => '침해사고 및 개인정보 유출사고 대응 절차에 관한 모의훈련계획을 수립하고 이에 따라 연1회 이상 주기적으로 훈련을 실시하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '침해사고 대응 절차를 임직원들이 숙지할 수 있도록 한 모의훈련의 부족에 따른 실제 상황에서의 실효성 부재 위험',
                    'protection_plan' => '침해사고 대응절차에 관한 모의훈련계획을 수립하고 이에 따라 주기적으로 훈련 실시',
                    'threatcode' => 'TC1-04',
                ),
            486 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '사고 예방 및 대응',
                    'depth' => '2.11.4.2',
                    'clause' => '침해사고 및 개인정보 유출사고 훈련 결과를 반영하여 침해사고 및 개인정보 유출사고 대응체계를 개선하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '침해사고 및 개인정보 유출사고 훈련에서 발견된 대응 절차의 개선 사항을 반영하지 못히여, 침해사고 및 유출사고 대응이 미흡한 위험',
                    'protection_plan' => '침해사고 및 개인정보 유출사고 훈련 결과를 대응체계의 개선을 위해 침해사고 및 개인정보 유출사고 훈련 결과를 반영',
                    'threatcode' => 'TC1-03',
                ),
            487 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '사고 예방 및 대응',
                    'depth' => '2.11.5.1',
                    'clause' => '침해사고 및 개인정보 유출의 징후 또는 발생을 인지한 경우 정의된 침해사고 대응절차에 따라 신속하게 대응 및 보고가 이루어지고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '침해사고 발생 시 정해진 절차에 따른 사고 경위 분석 및 보고가 미흡하여 적절한 조치, 대응이 이루어지지 않을 위험',
                    'protection_plan' => '침해사고 대응 체계에 따른 보고 수행',
                    'threatcode' => 'TC1-01',
                ),
            488 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '사고 예방 및 대응',
                    'depth' => '2.11.5.2',
                    'clause' => '개인정보 침해사고 발생 시 관련 법령에 따라 정보주체(이용자) 통지 및 관계기관 신고 절차를 이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '침해사고 발생 시 정해진 절차에 따른 사고 경위 분석 및 보고가 미흡하여 적절한 조치, 대응이 이루어지지 않을 위험',
                    'protection_plan' => '침해사고 발생시 관계기관에 신고 통지 절차 수립 및 이행',
                    'threatcode' => 'TC1-01',
                ),
            489 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '사고 예방 및 대응',
                    'depth' => '2.11.5.3',
                    'clause' => '침해사고가 종결된 후 사고의 원인을 분석하여 그 결과를 보고하고 관련 조직 및 인력과 공유하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '침해사고 발생 시 정해진 절차에 따른 사고 경위 분석 및 보고가 미흡하여 적절한 조치, 대응이 이루어지지 않을 위험',
                    'protection_plan' => '침해사고 분석 및 재발방지를 위한 활동 수행
- 사고 원인 분석 및 결과보고',
                    'threatcode' => 'TC1-04',
                ),
            490 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '사고 예방 및 대응',
                    'depth' => '2.11.5.4',
                    'clause' => '침해사고 분석을 통해 얻어진 정보를 활용하여 유사 사고가 재발하지 않도록 대책을 수립하고 필요한 경우 침해사고 대응절차 등을 변경하고 있는가? ',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '침해사고 발생 시 정해진 절차에 따른 사고 경위 분석 및 보고가 미흡하여 적절한 조치, 대응이 이루어지지 않을 위험',
                    'protection_plan' => '침해사고 분석 및 재발방지를 위한 활동 수행
- 재발방지대책 수립 및 침해사고 대응절차 변경 검토',
                    'threatcode' => 'TC1-04',
                ),
            491 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '재해복구',
                    'depth' => '2.12.1.1',
                    'clause' => '조직의 핵심 서비스(업무) 연속성을 위협할 수 있는 IT 재해 유형을 식별하고 유형별 피해규모 및 업무에 미치는 영향을 분석하여 핵심 IT 서비스(업무) 및 시스템을 식별하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'IT재해복구 절차 수립이 미흡하여 사고 발생시 효과적으로 대응하지 못할 위험',
                    'protection_plan' => 'IT 재해복구 체계 구축
- 업무 영향도에 따른 핵심 업무 시스템 식별',
                    'threatcode' => 'TC1-03',
                ),
            492 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '재해복구',
                    'depth' => '2.12.1.2',
                    'clause' => '핵심 IT 서비스 및 시스템의 중요도 및 특성에 따른 복구 목표시간, 복구 목표시점을 정의하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'IT재해복구 절차 수립이 미흡하여 사고 발생시 효과적으로 대응하지 못할 위험',
                    'protection_plan' => 'IT 재해복구 체계 구축
- 핵심 IT 서비스 및 시스템의 복구목표시간, 복구시점을 정의',
                    'threatcode' => 'TC1-03',
                ),
            493 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '재해복구',
                    'depth' => '2.12.1.3',
                    'clause' => '재해 및 재난 발생 시에도 핵심 서비스 및 시스템의 연속성을 보장할 수 있도록 복구 전략 및 대책, 비상시 복구 조직, 비상연락체계, 복구 절차 등 재해 복구 계획을 수립·이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'IT 재해 및 재난 복구 절차 수립이 미흡하여 사고 발생시 효과적으로 대응하지 못할 위험',
                    'protection_plan' => '복구 전략 및 대책, 비상시 복구 조직, 비상연락체계, 복구 절차 등이 포함된 IT 재해 및 재난 복구 계획 수립',
                    'threatcode' => 'TC1-03',
                ),
            494 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '재해복구',
                    'depth' => '2.12.2.1',
                    'clause' => '수립된 IT 재해 복구체계의 실효성을 판단하기 위하여 재해 복구 시험계획을 수립·이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'IT 서비스 복구전략 및 대책에 따라 효과적인 복구가 가능한지 시험 실시하기 위한 재해복구 훈련의 부족에 따른 실제 상황에서의 실효성 부재 위험',
                    'protection_plan' => 'IT재해복구 훈련 시행 계획 수립 및 실시',
                    'threatcode' => 'TC1-04',
                ),
            495 =>
                array (
                    'type' => 'ISMS-P2',
                    'domain' => '재해복구',
                    'depth' => '2.12.2.2',
                    'clause' => '시험결과, 정보시스템 환경변화, 법률 등에 따른 변화를 반영할 수 있도록 복구전략 및 대책을 정기적으로 검토·보완하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'IT 서비스 복구전략 및 대책에 따라 효과적인 복구가 가능한지 시험 실시하기 위한 재해복구 훈련의 부족에 따른 실제 상황에서의 실효성 부재 위험',
                    'protection_plan' => 'IT재해복구 훈련 결과에 따른 체계 보완',
                    'threatcode' => 'TC1-04',
                ),
            496 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.1.1',
                    'clause' => '개인정보를 수집하는 경우 서비스 제공 또는 법령에 근거한 처리 등을 위해 필요한 범위 내에서 최소한의 정보만을 수집하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보통신서비스의 제공을 위하여 필요한 범위에서 최소한의 개인정보의 수집 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '필수동의 항목으로 수집하는 개인정보 항목 수집목적 외 최소화',
                    'threatcode' => 'TC8-01',
                ),
            497 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.1.2',
                    'clause' => '수집 목적에 필요한 최소한의 정보 외의 개인정보를 수집하는 경우 정보주체(이용자)가 해당 개인정보의 제공 여부를 선택할 수 있도록 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '필수 동의와 선택 동의 항목으로 이용자가 직접 개인정보 제공 여부를 선택할 수 있는 절차 제공이 미흡하여 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '수집하는 개인정보 항목에 대하여 이용자가 직접 개인정보 제공 여부를 선택할 수 있도록 필수 동의 항목과 선택 동의 항목으로 각각 구분하여 동의 획득',
                    'threatcode' => 'TC8-01',
                ),
            498 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.1.3',
                    'clause' => '정보주체(이용자)가 수집 목적에 필요한 최소한의 정보 이외의 개인정보 수집에 동의하지 않는다는 이유로 서비스 또는 재화의 제공을 거부하지 않도록 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '이용자가 필요한 최소한의 개인정보 이외의 개인정보를 제공하지 아니한다는 이유로 해당 서비스 제공 거부 금지 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '이용자가 필요한 최소한의 개인정보 이외의 개인정보를 제공하지 아니한다는 이유로 해당 서비스 제공 거부 금지',
                    'threatcode' => 'TC8-01',
                ),
            499 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.2.1',
                    'clause' => '개인정보 수집 시 법령에 특별한 규정이 있는 경우를 제외하고는 정보주체(이용자)에게 관련 내용을 명확하게 고지하고 동의를 받고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보 수집에 대한 동의 획득 절차 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보 수집/이용 목적, 수집 항목, 보유 및 이용 기간, 거부권 및 불이익을 명확히 고지하고 동의 획득',
                    'threatcode' => 'TC8-01',
                ),
        ));
        \DB::table('assetgrades')->insert(array (
            0 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.2.2',
                    'clause' => '정보주체(이용자)에게 동의를 받는 방법 및 시점은 적절하게 되어 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보 수집에 대한 동의 획득 절차 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보 수집/이용 목적, 수집 항목, 보유 및 이용 기간, 거부권 및 불이익을 명확히 고지하고 동의 획득',
                    'threatcode' => 'TC8-01',
                ),
            1 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.2.3',
                    'clause' => '정보주체(이용자)에게 동의를 서면(전자문서 포함)으로 받는 경우 법령에서 정한 중요한 내용에 대해 명확히 표시하여 알아보기 쉽게 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보 수집에 대한 동의 획득 절차 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보 수집/이용 목적, 수집 항목, 보유 및 이용 기간, 거부권 및 불이익을 명확히 고지하고 동의 획득',
                    'threatcode' => 'TC8-01',
                ),
            2 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.2.4',
                    'clause' => '만 14세 미만 아동의 개인정보에 대해 수집·이용·제공 등의 동의를 받는 경우 법정대리인에게 필요한 사항에 대하여 고지하고 동의를 받고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보의 수집/이용에 대한 동의와 제3자 제공, 처리위탁 동의 등에 대한 별도 동의 방식 지원 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보의 수집/이용에 대한 동의와 제3자 동의, 마케팅 목적 처리 동의 등에 대한 별도 동의 방식 지원',
                    'threatcode' => 'TC8-01',
                ),
            3 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.2.5',
                    'clause' => '법정대리인의 동의를 받기 위하여 필요한 최소한의 개인정보만을 수집하고 있으며, 법정대리인이 자격 요건을 갖추고 있는지 확인하는 절차와 방법을 마련하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '법정대리인의 동의를 받기 위한 필요 최소한의 개인정보 수집 및 자격 요건 확인 절차, 방법 마련 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '동의를 받기 위해 필요한 법정대리인의 최소한의 정보(이름，연락처)만을 수집하고, 법정대리인 자격 요건 충족 확인 절차 및 방법 마련',
                    'threatcode' => 'TC8-01',
                ),
            4 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.2.6',
                    'clause' => '정보주체(이용자) 및 법정대리인에게 동의를 받은 기록을 보관하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '이용자 및 법정대리인에게 동의 받은 기록 보관 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '이용자 및 법정대리인에게 동의 받은 기록(동의 일시, 동의 항목, 동의자, 동의 방법 등)을 남기고, 회원탈퇴 등으로 인해 해당 개인정보 파기 시까지 보관',
                    'threatcode' => 'TC8-01',
                ),
            5 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.3.1',
                    'clause' => '주민등록번호는 명확한 법적 근거가 있는 경우에만 처리하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '법률에 근거하지 않는 주민등록번호의 수집 및 이용 금지 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '법에 근거한 주민등록번호 수집 및 처리',
                    'threatcode' => 'TC8-01',
                ),
            6 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.3.2',
                    'clause' => '주민등록번호의 수집 근거가 되는 법조항을 구체적으로 식별하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '주민등록번호의 수집 근거가 되는 법조항에 대한 구체적인 식별이 미흡하여 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '주민등록번호 수집에 대한 처리 근거가 되는 법조항을 구체적으로 식별하여 입증',
                    'threatcode' => 'TC8-01',
                ),
            7 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.3.3',
                    'clause' => '법적 근거에 따라 정보주체(이용자)의 주민등록번호 수집이 가능한 경우에도 아이핀, 휴대폰 인증 등 주민등록번호를 대체하는 수단을 제공하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '회원가입 시 주민등록번호 대체 수단을 제공하지 않음으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '법률에 근거한 주민등록번호 수집 및 처리시에도 주민등록번호 외 회원가입 대체수단 제공
* I-PIN, 공인인증서, 휴대전화 인증 등',
                    'threatcode' => 'TC8-01',
                ),
            8 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.4.1',
                    'clause' => '민감정보는 정보주체(이용자)로부터 별도의 동의를 받거나 관련 법령에 근거가 있는 경우에만 처리하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보의 수집/이용에 대한 동의와 제3자 제공, 처리위탁 동의 등에 대한 별도 동의 방식 지원 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보의 수집/이용에 대한 동의와 제3자 동의, 마케팅 목적 처리 동의 등에 대한 별도 동의 방식 지원',
                    'threatcode' => 'TC8-01',
                ),
            9 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.4.2',
                    'clause' => '고유식별정보(주민등록번호 제외)는 정보주체(이용자)로부터 별도의 동의를 받거나 관련 법령에 구체적인 근거가 있는 경우에만 처리하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보의 수집/이용에 대한 동의와 제3자 제공, 처리위탁 동의 등에 대한 별도 동의 방식 지원 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보의 수집/이용에 대한 동의와 제3자 동의, 마케팅 목적 처리 동의 등에 대한 별도 동의 방식 지원',
                    'threatcode' => 'TC8-01',
                ),
            10 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.5.1',
                    'clause' => '정보주체(이용자) 이외로부터 개인정보를 제공받는 경우 개인정보 수집에 대한 동의획득 책임이 개인정보를 제공하는 자에게 있음을 계약을 통해 명시하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '이용자 이외로부터 수집한 개인정보의 출처 미공개로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '이용자 이외로부터 수집한 개인정보의 수집 출처 고지',
                    'threatcode' => 'TC8-01',
                ),
            11 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.5.2',
                    'clause' => '공개된 매체 및 장소에서 개인정보를 수집하는 경우 정보주체(이용자)의 공개 목적·범위 및 사회 통념상 동의 의사가 있다고 인정되는 범위 내에서만 수집·이용하는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '공개된 매체 또는 장소에서 이용자의 공개 목적·범위 및 동의 의사 확인이 가능한 범위 내 개인정보 수집·이용 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '공개된 매체 또는 장소에서 개인정보 수집 시 이용자의 동의 의사가 있다고 인정되는 범위 내에서만 수집 및 이용',
                    'threatcode' => 'TC8-01',
                ),
            12 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.5.3',
                    'clause' => '서비스 계약 이행을 위해 필요한 경우로서, 사업자가 서비스 제공 과정에서 자동수집장치 등에 의해 수집·생성하는 개인정보(이용내역 등)의 경우에도 최소수집 원칙을 적용하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '서비스 계약 이행 및 제공을 위해 필요한 최소한의 개인정보 수집 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '해당 서비스의 계약 이행 및 제공을 위해 자동수집장치 등에 의해 수집·생성하는 개인정보 항목 최소화',
                    'threatcode' => 'TC8-01',
                ),
            13 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.5.4',
                    'clause' => '정보주체(이용자) 이외로부터 수집하는 개인정보에 대해 정보주체(이용자)의 요구가 있는 경우 즉시 필요한 사항을 정보주체(이용자)에게 알리고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '이용자 이외로부터 수집하는 개인정보에 대한 이용자 요구 발생 시 즉시 필요한 사항의 통지 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '이용자 이외로부터 수집하는 개인정보에 대해 이용자의 요구가 있으면 즉시 필요한 사항을 통지',
                    'threatcode' => 'TC8-01',
                ),
            14 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.5.5',
                    'clause' => '정보주체(이용자) 이외로부터 수집한 개인정보를 처리하는 경우 개인정보의 종류·규모 등이 법적 요건에 해당하는 경우 필요한 사항을 정보주체(이용자)에게 알리고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '이용자 이외로부터 수집 및 처리하는 개인정보의 법적 요건 만족 시 필요한 사항의 통지 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '이용자 이외로부터 수집 및 처리하는 개인정보의 종류·규모 등이 법적 요건에 해당하는 경우 필요한 사항을 이용자에게 통지',
                    'threatcode' => 'TC8-01',
                ),
            15 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.5.6',
                    'clause' => '정보주체(이용자)에게 수집출처에 대해 알린 기록을 해당 개인정보의 파기 시까지 보관·관리하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '이용자에게 수집출처에 대해 알린 기록을 개인정보 파기 시까지 보관·관리하지 않아 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '수집출처 고지 기록을 해당 개인정보의 파기 시까지 보관 및 관리',
                    'threatcode' => 'TC8-01',
                ),
            16 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.6.1',
                    'clause' => '공개된 장소에 영상정보처리기기를 설치·운영할 경우 법적으로 허용한 장소 및 목적인지 검토하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '법적 허용 여부를 검토하지 않고 공개된 장소에 영상정보처리기기를 설치 및 운영하여 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '법적으로 허용된 장소 및 목적에 부합되는지 검토 후에 공개된 장소에 영상정보처리기기를 설치 및 운영',
                    'threatcode' => 'TC8-01',
                ),
            17 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.6.2',
                    'clause' => '공공기관이 공개된 장소에 영상정보처리기기를 설치·운영하려는 경우 공청회·설명회 개최 등의 법령에 따른 절차를 거쳐 관계 전문가 및 이해관계인의 의견을 수렴하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '법적 절차를 거쳐 관계 전문가 및 이해관계인의 의견 수렴없이 영상정보처리기기를 설치 및 운영하여 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '법적 절차를 거쳐 관계 전문가 및 이해관계인의 의견을 수렴하여 공개된 장소에 영상정보처리기기 설치 및 운영',
                    'threatcode' => 'TC8-01',
                ),
            18 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.6.3',
                    'clause' => '영상정보처리기기 설치·운영 시 정보주체가 쉽게 인식할 수 있도록 안내판 설치 등 필요한 조치를 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '영상정보처리기기 설치·운영 시 안내판 설치 등의 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '영상정보처리기기 설치 • 운영 시 설치 목적 및 장소, 관리책임자 성명 및 연락처 등을 명시한 안내판 등을 설치',
                    'threatcode' => 'TC8-01',
                ),
            19 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.6.4',
                    'clause' => '영상정보처리기기 및 영상정보의 안전한 관리를 위한 영상정보처리기기 운영·관리 방침을 마련하여 시행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '안전한 영상정보처리기기 운영·관리 방침 마련이 미흡하여 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '영상정보처리기기 설치 •운영 및 관리에 필요한 방침 마련 및 시행',
                    'threatcode' => 'TC8-01',
                ),
            20 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.6.5',
                    'clause' => '영상정보의 보관 기간을 정하고 있으며, 보관 기간 만료 시 지체 없이 삭제하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '영상정보 보관 기간 미수립 및 만료 시 삭제가 되지 않아 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '영상정보 보유 목적 달성을 위한 최소한의 보관 기간 수립 및 보관 기간 만료 시 지체 없이 삭제',
                    'threatcode' => 'TC8-01',
                ),
            21 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.6.6',
                    'clause' => '영상정보처리기기 설치·운영에 관한 사무를 위탁하는 경우 관련 절차 및 요건에 따라 계약서에 반영하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '영상정보처리기기 설치·운영 위탁 시 필수로 포함시켜야 하는 내용을 문서화하지 않고 계약하여 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '필수 사항을 포함하여 문서화 한 계약서를 통해 영상정보처리기기 설치 • 운영에 관한 위탁 계약 수행
* 위탁 목적 및 범위, 재위탁 제한, 안전성 확보 조치, 관리 현황 점검, 손해배상 책임 사항',
                    'threatcode' => 'TC8-01',
                ),
            22 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.7.1',
                    'clause' => '정보주체(이용자)에게 재화나 서비스를 홍보하거나 판매를 권유하기 위하여 개인정보 처리에 대한 동의를 받는 경우 정보주체(이용자)가 이를 명확하게 인지할 수 있도록 알리고 별도 동의를 받고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보의 수집/이용에 대한 동의와 제3자 제공, 처리위탁 동의 등에 대한 별도 동의 방식 지원 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보의 수집/이용에 대한 동의와 제3자 동의, 마케팅 목적 처리 동의 등에 대한 별도 동의 방식 지원',
                    'threatcode' => 'TC8-01',
                ),
            23 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.7.2',
                    'clause' => '전자적 전송매체를 이용하여 영리목적의 광고성 정보를 전송하는 경우 수신자의 명시적인 사전 동의를 받고 있으며, 2년 마다 정기적으로 수신자의 수신동의 여부를 확인하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '전자적 전송매체를 이용한 영리목적의 광고성 정보 전송 시 동의 방식 지원 및 정기적인 수신동의 여부 확인 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '문서 또는 구술의 방법으로 수신자의 명시적인 수신동의를 받아야 하며, 수신 동의를 받은 날로부터 수신 동의 여부를 2년마다 확인',
                    'threatcode' => 'TC8-01',
                ),
            24 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.7.3',
                    'clause' => '전자적 전송매체를 이용한 영리목적의 광고성 정보 전송에 대해 수신자가 수신거부의사를 표시하거나 사전 동의를 철회한 경우 영리목적의 광고성 정보 전송을 중단하도록 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '수신거부 의사 표시 및 사전 동의 철회 시 영리목적의 광고성 정보 전송에 대한 중단 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '수신자가 수신거부 의사 표시 및 회원탈퇴를 한 경우 영리목적의 광고성 정보 전송 금지',
                    'threatcode' => 'TC8-01',
                ),
            25 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 수집 시 보호조치',
                    'depth' => '3.1.7.4',
                    'clause' => '영리목적의 광고성 정보를 전송하는 경우 전송자의 명칭, 수신거부 방법 등을 구체적으로 밝히고 있으며, 야간시간에는 전송하지 않도록 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '영리목적의 광고성 정보 전송 시 전송자 명칭, 수신거부 방법 고지 및 야간시간에 광고성 정보 전송 금지 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '영리목적의 광고성 정보 전송 시 전송자 명칭, 수신거부 방법 등을 알리고, 영리 목적의 광고성 정보의 야간 전송 금지',
                    'threatcode' => 'TC8-01',
                ),
            26 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 보유 및 이용 시 보호조치',
                    'depth' => '3.2.1.1',
                    'clause' => '수집·보유하고 있는 개인정보의 항목, 보유량, 처리 목적 및 방법, 보유기간 등 현황을 정기적으로 관리하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '수집·보유하는 개인정보 항목, 보유량, 처리 목적 및 방법, 보유기간 등의 정기적인 현황 관리 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보 흐름표，개인정보 흐름도 등을 통해 수집 및 보유하고 있는 개인정보 현황을 정기적으로 점검 및 관리',
                    'threatcode' => 'TC8-01',
                ),
            27 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 보유 및 이용 시 보호조치',
                    'depth' => '3.2.1.2',
                    'clause' => '공공기관이 개인정보파일을 운용하거나 변경하는 경우 관련된 사항을 법률에서 정한 관계기관의 장에게 등록하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '공공기관이 개인정보파일 운용 및 변경 시 적정성 판단 등을 하지 않고, 행정안전부에 등록하지 않아 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보파일 등록 또는 변경 사항을 검토하고 그 적정성을 판단한 후 행정안전부에 60일 이내에 등록',
                    'threatcode' => 'TC8-01',
                ),
            28 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 보유 및 이용 시 보호조치',
                    'depth' => '3.2.1.3',
                    'clause' => '공공기관은 개인정보파일의 보유 현황을 개인정보 처리방침에 공개하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보 처리방침 내 개인정보파일 보유 현황 공개 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보 처리방침 내에 개인정보파일의 보유 현황 공개',
                    'threatcode' => 'TC8-01',
                ),
            29 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 보유 및 이용 시 보호조치',
                    'depth' => '3.2.2.1',
                    'clause' => '수집된 개인정보는 내부 절차에 따라 안전하게 처리하도록 관리하며 최신의 상태로 정확하게 유지하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '기술적•관리적•물리적 안전성 확보조치 등의 내부 절차에 따라 수집된 이용자의 개인정보 관리 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보 암호화, 접근통제, 내부자 권한 오 • 남용，재난 •재해 등에 대비한 백업 •복구 등의 안전한 절차 마련 및 시행',
                    'threatcode' => 'TC8-01',
                ),
            30 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 보유 및 이용 시 보호조치',
                    'depth' => '3.2.2.2',
                    'clause' => '정보주체(이용자)가 개인정보의 정확성, 완전성 및 최신성을 유지할 수 있는 방법을 제공하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '이용자 본인의 개인정보 처리 현황 파악 및 안전하고 편리한 이용을 위한 방법 수립 및 제공 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '이용자가 본인의 개인정보 처리 현황 및 수정을 쉽게 할 수 있고, 안전하게 이용할 수 있는 방법 수립 및 제공',
                    'threatcode' => 'TC8-01',
                ),
            31 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 보유 및 이용 시 보호조치',
                    'depth' => '3.2.3.1',
                    'clause' => '개인정보의 조회 및 출력(인쇄, 화면표시, 파일생성 등) 시 용도를 특정하고 용도에 따라 출력항목을 최소화하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보처리시스템 등에서 개인정보 조회 및 출력 시 용도에 따른 출력항목 최소화 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보처리시스템에 대한 최소한의 개인정보 조회 및 출력이 가능하도록 기능 구현',
                    'threatcode' => 'TC8-01',
                ),
            32 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 보유 및 이용 시 보호조치',
                    'depth' => '3.2.3.2',
                    'clause' => '개인정보 표시제한 보호조치의 일관성을 확보할 수 있도록 관련 기준을 수립하여 적용하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보 마스킹 처리 등 표시제한 보호조치의 일관된 기준 수립 및 적용 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보 마스킹 처리 시 표시제한 조치의 일관성 확보를 위한 기준 수립 및 적용',
                    'threatcode' => 'TC8-01',
                ),
            33 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 보유 및 이용 시 보호조치',
                    'depth' => '3.2.3.3',
                    'clause' => '개인정보가 포함된 종이 인쇄물 등 개인정보의 출력·복사물을 안전하게 관리하기 위해 필요한 보호조치를 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보 포함 출력물, 저장매체에 대한 관리가 미흡하여 정보유출 사고가 발생할 위험',
                    'protection_plan' => '개인정보 포함 문서 출력, 저장 시 업무상 불필요한 정보 최소화 및 암호화/마스킹 등 보호조치 적용하고, 중요서류 및 저장매체를 잠금장치가 있는 장소에 보관',
                    'threatcode' => 'TC4-01',
                ),
            34 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 보유 및 이용 시 보호조치',
                    'depth' => '3.2.3.4',
                    'clause' => '개인정보 검색 시 불필요하거나 과도한 정보가 조회되지 않도록 일치검색 또는 두 가지 항목 이상의 검색조건을 요구하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보 검색 시 일치검색 또는 두 가지 항목 이상의 검색조건을 만족해야 하는 기능 구현 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '업무상 반드시 필요한 경우가 아니라면 개인정보 검색 시 like검색이 되지 않도록 기능 구현',
                    'threatcode' => 'TC8-01',
                ),
            35 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 보유 및 이용 시 보호조치',
                    'depth' => '3.2.3.5',
                    'clause' => '개인정보를 비식별화하여 이용·제공 시 재식별화의 위험을 최소화할 수 있도록 적절한 방법으로 비식별 조치를 수행하고 이에 대한 적정성을 평가하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '재식별화의 위험을 최소화할 수 있는 방법으로 비식별 조치 수행 및 적정성 평가 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '재식별화의 위험을 최소화할 수 있는 비식별 조치를 수행하고, 개인정보 비식별 조치 가이드라인 등의 문서를 참고하여 비식별 적정성 평가 수행',
                    'threatcode' => 'TC8-01',
                ),
            36 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 보유 및 이용 시 보호조치',
                    'depth' => '3.2.3.6',
                    'clause' => '개인정보를 비식별화하여 이용·제공 시 안전조치를 적용하고 재식별 가능성을 모니터링 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '비식별 개인정보 안전조치 적용 및 재식별 가능성 모니터링 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '비식별 정보파일에 대한 관리적, 기술적 보호조치를 적용하고, 재식별 가능성을 정기적으로 모니터링',
                    'threatcode' => 'TC8-01',
                ),
            37 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 보유 및 이용 시 보호조치',
                    'depth' => '3.2.4.1',
                    'clause' => '정보주체(이용자)의 이동통신단말장치 내에 저장되어 있는 정보 및 이동통신단말장치에 설치된 기능에 대하여 접근할 수 있는 권한이 필요한 경우 명확하게 인지할 수 있도록 알리고 정보주체(이용자)의 동의를 받고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '접근권한 필요성에 대한 고지 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '앱 서비스에 접근권한의 필요성에 대해 고지하고 동의를 받도록 함',
                    'threatcode' => 'TC8-01',
                ),
            38 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 보유 및 이용 시 보호조치',
                    'depth' => '3.2.4.2',
                    'clause' => '이동통신단말장치 내에서 해당 서비스를 제공하기 위하여 반드시 필요한 접근권한이 아닌 경우, 정보주체(이용자)가 동의하지 않아도 서비스 제공을 거부하지 않도록 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '접근권한 부여에 대한 동의획득 절차 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '앱 서비스에 접근권한 부여 시 동의여부를 선택하도록 함',
                    'threatcode' => 'TC8-01',
                ),
            39 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 보유 및 이용 시 보호조치',
                    'depth' => '3.2.4.3',
                    'clause' => '이동통신단말장치 내에서 해당 접근권한에 대한 정보주체(이용자)의 동의 및 철회방법을 마련하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '앱 서비스 접근권한에 대한 이용자의 동의 및 철회방법 제공 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '앱 서비스 접근권한별 동의 및 철회방법을 제공할 수 있는 기능 구현',
                    'threatcode' => 'TC8-01',
                ),
            40 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 보유 및 이용 시 보호조치',
                    'depth' => '3.2.5.1',
                    'clause' => '개인정보는 최초 수집 시 정보주체(이용자)로부터 동의 받은 목적 또는 법령에 근거한 범위 내에서만 이용·제공하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '최초로 동의받아 수집한 개인정보의 목적 또는 법에 근거한 범위 내 이용 및 제공 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '이용자에게 최초로 동의받아 수집한 개인정보의 목적 또는 법에 근거한 범위 내에서만 개인정보 이용 및 제공 ',
                    'threatcode' => 'TC8-01',
                ),
            41 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 보유 및 이용 시 보호조치',
                    'depth' => '3.2.5.2',
                    'clause' => '개인정보를 수집 목적 또는 범위를 초과하여 이용하거나 제공하는 경우 정보주체(이용자)로부터 별도의 동의를 받거나 법적 근거가 있는 경우로 제한하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '수집 목적 이외로의 개인정보 유용 시 정보주체의 동의 없이 개인정보가 다른 곳에 사용되어 법적 요구사항을 만족시키지 못할 위험 ',
                    'protection_plan' => '수집 목적 이외로의 개인정보 유용을 절대 금지',
                    'threatcode' => 'TC8-01',
                ),
            42 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 보유 및 이용 시 보호조치',
                    'depth' => '3.2.5.3',
                    'clause' => '개인정보를 목적 외의 용도로 제3자에게 제공하는 경우 제공받는 자에게 이용목적·방법 등을 제한하거나 안전성 확보를 위해 필요한 조치를 마련하도록 요청하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '이용자의 개인정보를 목적 외의 용도로 제3자 제공 시 안전성 확보조치 마련 요청 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보를 제공받는 자에게 안전성 확보를 위하여 필요한 구체적인 조치를 마련하도록 요청 및 책임관계 명확화',
                    'threatcode' => 'TC8-01',
                ),
            43 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 보유 및 이용 시 보호조치',
                    'depth' => '3.2.5.4',
                    'clause' => '공공기관이 개인정보를 목적 외의 용도로 이용하거나 제3자에게 제공하는 경우 그 이용 또는 제공의 법적 근거, 목적 및 범위 등에 관하여 필요한 사항을 관보 또는 인터넷 홈페이지 등에 게재하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '관보 또는 인터넷 홈페이지 등에 개인정보 목적 외 용도로 이용 및 제3자 제공 사항 게재 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보를 목적 외 용도로 이용 및 제3자에게 제공 시 관보 또는 인터넷 홈페이지 등에 게재
*목적 외 이용 등 날짜, 법적 근거, 목적, 개인정보 항목',
                    'threatcode' => 'TC8-01',
                ),
            44 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 보유 및 이용 시 보호조치',
                    'depth' => '3.2.5.5',
                    'clause' => '공공기관이 개인정보를 목적 외의 용도로 이용하거나 제3자에게 제공하는 경우 목적 외 이용 및 제3자 제공대장에 기록·관리하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보 목적 외 이용 및 제3자 제공 시 관리대장 기록 및 관리 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보 목적 외 용도로 이용 또는 제3자 제공 시 관리대장 내에 기록 및 관리 절차 수립',
                    'threatcode' => 'TC8-01',
                ),
            45 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 제공 시 보호조치',
                    'depth' => '3.3.1.1',
                    'clause' => '개인정보를 제3자에게 제공하는 경우 법령에 규정이 있는 경우를 제외하고는 정보주체(이용자)에게 관련 내용을 명확하게 고지하고 동의를 받고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '이용자 개인정보의 제 3자에게 제공에 따른 고지 및 동의를 하지 않아 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '필요한 사항에 대하여 이용자 개인정보의 제 3자에게 제공에 따른 고지 및 동의를 반드시 득함',
                    'threatcode' => 'TC8-01',
                ),
            46 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 제공 시 보호조치',
                    'depth' => '3.3.1.2',
                    'clause' => '개인정보의 제3자 제공 동의는 수집·이용에 대한 동의와 구분하여 받고 이에 동의하지 않는다는 이유로 해당 서비스의 제공을 거부하지 않도록 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보의 수집 이용에 관한 동의와 구분하여 제3자 제공 동의 획득 절차 구현 및 미동의 시 서비스 제공 거부로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보의 수집 • 이용에 대한 동의와 제3자 제공 동의를 구분하여 받고, 이에 동의하지 않는다는 이유로 서비스 제공 거부 금지',
                    'threatcode' => 'TC8-01',
                ),
            47 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 제공 시 보호조치',
                    'depth' => '3.3.1.3',
                    'clause' => '개인정보를 제3자에게 제공하는 경우 제공 목적에 맞는 최소한의 개인정보 항목으로 제한하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '제3자에게 개인정보 제공 시 최소한의 개인정보 항목으로 제한하지 않아 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '제3자에게 이용자의 개인정보 제공 시 최소한의 개인정보 항목만 제공하도록 제한',
                    'threatcode' => 'TC8-01',
                ),
            48 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 제공 시 보호조치',
                    'depth' => '3.3.1.4',
                    'clause' => '개인정보를 제3자에게 제공 하는 경우 안전한 절차와 방법을 통해 제공하고 제공 내역을 기록하여 보관하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '제3자에게 개인정보 제공 시 안전한 절차 및 방법을 통해 제공하지 않고, 제공 내역 기록 및 보관이 미흡하여 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '제3자에게 개인정보 제공 시 전송 과정 암호화, 접근통제 등의 방법 이용 및 개인정보 제공 내역을 기록 및 보관',
                    'threatcode' => 'TC8-01',
                ),
            49 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 제공 시 보호조치',
                    'depth' => '3.3.1.5',
                    'clause' => '제3자에게 개인정보의 접근을 허용하는 경우 개인정보를 안전하게 보호하기 위한 보호절차에 따라 통제하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '제3자에게 개인정보의 접근 허용 시 안전한 통제 절차 수립 미흡으로 인한 법적요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '제3자에게 개인정보 접근 허용 시 안전한 인증 및 접근통제, 접속기록 보존, 전송구간 암호화 조치 등의 통제 절차 수립',
                    'threatcode' => 'TC8-01',
                ),
            50 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 제공 시 보호조치',
                    'depth' => '3.3.2.1',
                    'clause' => '개인정보 처리업무를 제3자에게 위탁하는 경우 인터넷 홈페이지 등에 위탁하는 업무의 내용과 수탁자를 현행화하여 공개하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보 처리 수탁사에 대한 미공개 및 누락으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보 처리 수탁사를 현행화하여 개인정보 처리방침 내 공개
* 개인정보 처리위탁을 받는 자, 위탁 업무 내용',
                    'threatcode' => 'TC8-01',
                ),
            51 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 제공 시 보호조치',
                    'depth' => '3.3.2.2',
                    'clause' => '개인정보 처리 위탁에 대한 동의가 필요한 경우 처리 위탁을 받은 자와 위탁하는 업무의 내용을 알리고 동의를 받고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '이용자에게 개인정보 처리 위탁 동의 획득 시 수탁자, 위탁 업무 내용 고지 및 동의 획득 절차 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보 처리 위탁에 대한 이용자 동의 필요 시 수탁자, 위탁 업무 내용을 고지하고 동의 획득',
                    'threatcode' => 'TC8-01',
                ),
            52 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 제공 시 보호조치',
                    'depth' => '3.3.2.3',
                    'clause' => '재화 또는 서비스를 홍보하거나 판매를 권유하는 업무를 위탁하는 경우에는 서면, 전자우편, 문자전송 등의 방법으로 위탁하는 업무의 내용과 수탁자를 정보주체에게 알리고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '재화 또는 서비스 홍보 및 판매 권유 업무 위탁 시 이용자에게 수탁자, 위탁 업무 내용 통지 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '재화 또는 서비스 홍보 및 판매 권유 업무 위탁 시 이용자에게 전자우편 등을 이용해 수탁자, 위탁 업무 내용 통지',
                    'threatcode' => 'TC8-01',
                ),
            53 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 제공 시 보호조치',
                    'depth' => '3.3.2.4',
                    'clause' => '수탁자 또는 위탁하는 업무의 내용이 변경된 경우 해당 내용을 알리거나 필요한 경우 동의를 받고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '수탁자 또는 위탁업무 내용 변경 시 해당 내용 공개 및 동의 획득 절차 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '수탁자 또는 위탁 업무 내용 변경 시 개인정보 처리방침 내 공개 또는 변경 내용 고지 및 이용자의 재동의 획득 절차 수립',
                    'threatcode' => 'TC8-01',
                ),
            54 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 제공 시 보호조치',
                    'depth' => '3.3.2.5',
                    'clause' => '수탁자가 위탁받은 업무를 제3자에게 재위탁하려는 경우 위탁자의 사전 동의를 받도록 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '위탁받은 업무의 제3자 재위탁에 대한 동의획득 절차 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '위탁자의 사전 동의를 받은 경우에 한하여 수탁자가 위탁받은 업무의 제3자 재위탁이 가능한 절차 수립',
                    'threatcode' => 'TC8-01',
                ),
            55 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 제공 시 보호조치',
                    'depth' => '3.3.3.1',
                    'clause' => '영업의 전부 또는 일부의 양도·합병 등으로 개인정보를 다른 사람에게 이전하는 경우 필요한 사항을 사전에 정보주체(이용자)에게 알리고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '영업양도자가 영업 양도 및 합병에 따른 개인정보 이전에 필요한 사항 통지 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '영업양도자가 영업 양도 및 합병에 따른 개인정보 이전에 필요한 사항을 이용자에게 명확히 고지하고 동의 획득',
                    'threatcode' => 'TC8-01',
                ),
            56 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 제공 시 보호조치',
                    'depth' => '3.3.3.2',
                    'clause' => '영업양수자 등은 법적 통지 요건에 해당될 경우 개인정보를 이전받은 사실을 정보주체(이용자)에게 지체 없이 알리고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '영업양수자가 영업 양수에 따른 개인정보 이전 사실 통지 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '영업 양수에 따른 따른 개인정보 이전 시 이전받은 사실을 이용자에게 통지',
                    'threatcode' => 'TC8-01',
                ),
            57 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 제공 시 보호조치',
                    'depth' => '3.3.3.3',
                    'clause' => '개인정보를 이전받는 자는 이전 당시의 본래 목적으로만 개인정보를 이용하거나 제3자에게 제공하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보를 이전받는 자가 목적 범위 외로 개인정보 이용 또는 제공 시 이용자 동의 획득 절차 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보를 이전받은 자가 당초의 목적 범위 외로 개인정보를 이용 또는 제공 시 해당 내용을 명확히 고지하고 동의 획득',
                    'threatcode' => 'TC8-01',
                ),
            58 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 제공 시 보호조치',
                    'depth' => '3.3.4.1',
                    'clause' => '개인정보를 국외의 제3자에게 제공하는 경우 정보주체(이용자)에게 필요한 사항을 모두 알리고 동의를 받고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '이용자 개인정보의 국외(제 3자) 제공에 따른 고지 및 동의를 하지 않아 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '필요한 사항에 대하여 이용자 개인정보의 국외(제 3자) 제공에 따른 고지 및 동의를 반드시 득함',
                    'threatcode' => 'TC8-01',
                ),
            59 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 제공 시 보호조치',
                    'depth' => '3.3.4.2',
                    'clause' => '정보통신서비스의 제공에 관한 계약을 이행하고 이용자 편의 증진 등을 위하여 필요한 경우로서 이용자의 개인정보를 국외에 처리위탁 또는 보관하는 경우에는 동의에 갈음하여 관련 사항을 이용자에게 알리고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보통신서비스 제공에 관한 계약 이행 및 이용자 편의 증진 등을 위한 경우 이용자 개인정보 국외 처리위탁 또는 보관 시 이용자에게 관련 사항 통지 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '정보통신서비스 제공에 관한 계약 이행 및 이용자 편의 증진 등을 위한 경우 이용자 개인정보 국외 처리위탁 또는 보관 시 개인정보 처리방침 내 공개 또는 전자우편 등을 이용해 관련 사항 통지',
                    'threatcode' => 'TC8-01',
                ),
            60 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 제공 시 보호조치',
                    'depth' => '3.3.4.3',
                    'clause' => '개인정보 보호 관련 법령 준수 및 개인정보 보호 등에 관한 사항을 포함하여 국외 이전에 관한 계약을 체결하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '국외 이전에 관한 계약 체결 시 개인정보 보호에 관한 법령준수 및 필요한 조치에 관한 사항 등의 계약 내용 반영 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '국외 이전에 관한 계약 체결 시 개인정보 보호를 위하여 필요한 조치 등에 관한 사항 협의 및 계약내용에 반영',
                    'threatcode' => 'TC8-01',
                ),
            61 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 제공 시 보호조치',
                    'depth' => '3.3.4.4',
                    'clause' => '개인정보를 국외로 이전하는 경우 개인정보 보호를 위해 필요한 조치를 취하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보 국외 이전 시 개인정보 보호를 위한 절차 수립 및 시행 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보 국외 이전 시 기술적 •관리적 보호조치, 이용자 고충처리 등 개인정보 보호에 필요한 절차 수립 및 시행',
                    'threatcode' => 'TC8-01',
                ),
            62 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 파기 시 보호조치',
                    'depth' => '3.4.1.1',
                    'clause' => '개인정보의 보유기간 및 파기와 관련된 내부 정책을 수립하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보의 보유기간 및 파기 관련 내부 정책 수립 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '파기시점, 법령근거 등을 포함한 개인정보의 보유기간 및 파기 관련 내부 정책 수립',
                    'threatcode' => 'TC8-01',
                ),
            63 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 파기 시 보호조치',
                    'depth' => '3.4.1.2',
                    'clause' => '개인정보의 처리목적이 달성되거나 보유기간이 경과한 경우 지체 없이 해당 개인정보를 파기하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '수집/이용 목적의 달성, 이용 기간 만료, 폐업(서비스 중지)의 경우 개인정보의 완전파기 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '수집 목적을 달성하고 더 이상 필요하지 않은 개인정보의 경우에는 저장하지 않고 파기해야 함(법령에 따라 보존이 필요한 경우 보존기간 만료 시 파기)',
                    'threatcode' => 'TC8-01',
                ),
            64 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 파기 시 보호조치',
                    'depth' => '3.4.1.3',
                    'clause' => '개인정보를 파기할 때에는 복구·재생되지 않도록 안전한 방법으로 파기하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보 파기 시 복구 및 재생되지 않도록 안전한 파기 방법 사용 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보를 파기 시 개인정보 복원이 불가능하도록 완전파괴, 전용 소자장비 등을 이용한 파기 방법 사용',
                    'threatcode' => 'TC8-01',
                ),
            65 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 파기 시 보호조치',
                    'depth' => '3.4.1.4',
                    'clause' => '개인정보 파기에 대한 기록을 남기고 관리하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보 파기 시행 및 결과에 대한 기록 보관 및 관리 미흡으로 인하여 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보 파기 시행 및 결과를 담은 기록 보관 및 관리',
                    'threatcode' => 'TC8-01',
                ),
            66 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 파기 시 보호조치',
                    'depth' => '3.4.2.1',
                    'clause' => '개인정보의 보유기간 경과 또는 처리목적 달성 후에도 관련 법령 등에 따라 파기하지 아니하고 보존하는 경우, 관련 법령에 따른 최소한의 기간으로 한정하여 최소한의 정보만을 보존하도록 관리하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '관련 법령 등에 따라 개인정보를 파기하지 않고 보관 시 최소한의 기간 및 정보만을 보관하지 않아 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '관련 법령 등에 따라 개인정보를 파기하지 않고 보존하는 경우 최소한의 기간으로 최소 정보만을 보관',
                    'threatcode' => 'TC8-01',
                ),
            67 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 파기 시 보호조치',
                    'depth' => '3.4.2.2',
                    'clause' => '개인정보의 보유기간 경과 또는 처리목적 달성 후에도 관련 법령 등에 따라 파기하지 아니하고 보존하는 경우 해당 개인정보 또는 개인정보파일을 다른 개인정보와 분리하여 저장·관리하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '법령에 따라 개인정보 보관 시 별도 분리 보관하지 않아 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '법령에 따라 개인정보 보관 시 별도의 DB로 분리 보관',
                    'threatcode' => 'TC8-01',
                ),
            68 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 파기 시 보호조치',
                    'depth' => '3.4.2.3',
                    'clause' => '분리 보관하고 있는 개인정보에 대하여 법령에서 정한 목적 범위 내에서만 처리 가능하도록 관리하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '법령에 따른 목적 범위 외에 분리 보관되는 이용자의 개인정보 처리 금지 미흡으로 인한 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '법령에 따른 목적 범위 내에서만 분리 보관되는 이용자의 개인정보 처리 허용',
                    'threatcode' => 'TC8-01',
                ),
            69 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 파기 시 보호조치',
                    'depth' => '3.4.2.4',
                    'clause' => '분리 보관하고 있는 개인정보에 대하여 접근권한을 최소한의 인원으로 제한하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '분리 보관되는 이용자의 개인정보 접근 가능 인원 최소화 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '분리 보관되는 이용자의 개인정보가 저장된 DB 접근 가능 인원 최소화',
                    'threatcode' => 'TC8-01',
                ),
            70 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 파기 시 보호조치',
                    'depth' => '3.4.3.1',
                    'clause' => '정보통신서비스 제공자등은 법령에서 정한 기간 동안 이용하지 않는 휴면 이용자의 개인정보를 파기 또는 분리 보관하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '1년 미사용 고객 개인정보에 대한 분리 보관 관리가 미흡하여 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '1년이상 서비스 미이용자의 개인정보를 별도의 DB로 분리보관',
                    'threatcode' => 'TC8-01',
                ),
            71 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 파기 시 보호조치',
                    'depth' => '3.4.3.2',
                    'clause' => '휴면 이용자의 개인정보를 파기하거나 분리하여 저장·관리하려는 경우 이용자에게 알리고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '1년 미이용 기간의 만료 30일 전까지 개인정보의 파기 혹은 분리되어 저장·관리되는 사실과 기간 만료일 및 해당 개인정보의 항목에 대한 이용자 고지 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '1년 미 이용 기간의 만료 30일 전까지 이용자 고지 함
* 개인정보의 파기 혹은 분리되어 저장·관리되는 사실
* 기간 만료일 및 해당 개인정보의 항목',
                    'threatcode' => 'TC8-01',
                ),
            72 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 파기 시 보호조치',
                    'depth' => '3.4.3.3',
                    'clause' => '분리되어 저장·관리하는 휴면 이용자의 개인정보는 법령에 따른 보관 목적 또는 이용자의 요청에 대해서만 이용 및 제공하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '법령에 명시 또는 이용자의 요청에 따른 목적 외에 다른 목적으로 분리 저장·관리되는 휴면 이용자 개인정보 처리 금지 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '법령, 이용자의 요청에 따른 보관 목적 외에 분리 저장·관리되는 휴면 이용자의 개인정보는 마케팅，문자발송 등 다른 목적으로 처리 금지',
                    'threatcode' => 'TC8-01',
                ),
            73 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '개인정보 파기 시 보호조치',
                    'depth' => '3.4.3.4',
                    'clause' => '분리되어 저장·관리하는 휴면 이용자의 개인정보에 대하여 접근권한을 최소한의 인원으로 제한하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '분리 저장·관리되는 휴면 이용자의 개인정보 접근 가능 인원 최소화 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '분리 저장·관리되는 휴면 이용자의 개인정보가 저장된 DB 접근 가능 인원 최소화',
                    'threatcode' => 'TC8-01',
                ),
            74 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '정보주체 권리보호',
                    'depth' => '3.5.1.1',
                    'clause' => '개인정보 처리방침을 정보주체(이용자)가 쉽게 확인할 수 있도록 인터넷 홈페이지 등에 지속적으로 현행화하여 공개하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보 처리방침 변경내역 공개 및 이력관리 미흡으로 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '운영하는 홈페이지 공지를 통해 변경/시행일, 변경된 내용을 변경 전/후를 비교하여 지속적으로 공개',
                    'threatcode' => 'TC8-01',
                ),
            75 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '정보주체 권리보호',
                    'depth' => '3.5.1.2',
                    'clause' => '개인정보 처리방침에는 법령에서 요구하는 내용을 모두 포함하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보 처리방침 공개 미흡으로 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보 처리방침을 쉽게 확인할 수 있도록 홈페이지의 첫 화면 또는 첫 화면 링크를 통해 이용자가 볼 수 있도록 하고, 글자 크기, 색상 등을 활용하여  표시',
                    'threatcode' => 'TC8-01',
                ),
            76 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '정보주체 권리보호',
                    'depth' => '3.5.1.3',
                    'clause' => '개인정보 처리방침이 변경되는 경우 사유 및 변경 내용을 지체없이 공지하고 정보주체(이용자)가 언제든지 변경된 사항을 쉽게 알아 볼 수 있도록 조치하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보 처리방침 변경내역 공개 및 이력관리 미흡으로 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '운영하는 홈페이지 공지를 통해 변경/시행일, 변경된 내용을 변경 전/후를 비교하여 지속적으로 공개',
                    'threatcode' => 'TC8-01',
                ),
            77 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '정보주체 권리보호',
                    'depth' => '3.5.2.1',
                    'clause' => '정보주체(이용자) 또는 그 대리인이 개인정보에 대한 열람, 정정·삭제, 처리정지, 이의제기, 동의 철회(이하 \'열람 등\'이라 함) 요구를 개인정보 수집방법·절차보다 쉽게 할 수 있도록 권리 행사 방법 및 절차를 마련하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '이용자 또는 대리인의 개인정보 열람, 정정·삭제, 처리정지, 이의제기, 동의 철회 요구를 개인정보 수집방법보다 쉬운 절차를 마련하지 않아 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '이용자 또는 대리인의 권리행사 방법 및 절차를 개인정보 수집절차보다 쉬운 방법으로 마련 및 제공',
                    'threatcode' => 'TC8-01',
                ),
            78 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '정보주체 권리보호',
                    'depth' => '3.5.2.2',
                    'clause' => '정보주체(이용자) 또는 그 대리인이 개인정보 열람 요구를 하는 경우 규정된 기간 내에 열람 가능하도록 필요한 조치를 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '이용자 또는 대리인의 개인정보 열람 요구에 대한 기간 내 조치 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '이용자 또는 대리인이 개인정보의 열람 요구 시 지체 없이 개인정보 열람을 가능하도록 하고, 10일 이내에 그 결과를 이용자에게 통보',
                    'threatcode' => 'TC8-01',
                ),
            79 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '정보주체 권리보호',
                    'depth' => '3.5.2.3',
                    'clause' => '정보주체(이용자) 또는 그 대리인이 개인정보 정정·삭제 요구를 하는 경우 규정된 기간 내에 정정·삭제 등 필요한 조치를 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '이용자 또는 대리인의 개인정보 정정·삭제 요구에 대한 기간 내 조치 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '이용자 또는 대리인이 개인정보의 정정·삭제 요구 시 지체 없이 개인정보를 정정 및 삭제하고, 10일 이내에 그 결과를 이용자에게 통보',
                    'threatcode' => 'TC8-01',
                ),
            80 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '정보주체 권리보호',
                    'depth' => '3.5.2.4',
                    'clause' => '정보주체(이용자) 또는 그 대리인이 개인정보 처리정지 요구를 하는 경우 규정된 기간 내에 처리정지 등 필요한 조치를 하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '이용자 또는 대리인의 개인정보 처리정지 요구에 대한 기간 내 조치 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '이용자 또는 대리인이 개인정보의 처리정지 요구 시 지체 없이 처리를 정지하고 10일 이내에 그 결과를 이용자에게 통보',
                    'threatcode' => 'TC8-01',
                ),
            81 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '정보주체 권리보호',
                    'depth' => '3.5.2.5',
                    'clause' => '정보주체(이용자)의 요구에 대한 조치에 불복이 있는 경우 이의를 제기할 수 있도록 필요한 절차를 마련하여 안내하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '이용자가 요구한 조치 사항에 대한 이의 제기 절차 마련 및 안내사항 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '이용자가 요구한 조치 사항에 대해 공정하게 이의를 제기할 수 있도록 내부의 견제장치 마련 등 필요한 절차 수립 및 안내',
                    'threatcode' => 'TC8-01',
                ),
            82 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '정보주체 권리보호',
                    'depth' => '3.5.2.6',
                    'clause' => '정보주체(이용자) 또는 그 대리인이 개인정보 수집·이용·제공 등의 동의를 철회하는 경우 지체 없이 수집된 개인정보를 파기하는 등 필요한 조치를 취하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '이용자 또는 대리인의 개인정보 수집·이용·제공 등의 동의 철회에 대한 개인정보 파기 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '이용자 또는 대리인이 개인정보 수집·이용·제공 등의 동의 철회 시 지체 없이 해당 개인정보 파기 수행',
                    'threatcode' => 'TC8-01',
                ),
            83 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '정보주체 권리보호',
                    'depth' => '3.5.2.7',
                    'clause' => '개인정보 열람 등의 요구 및 처리 결과에 대하여 기록을 남기고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보 열람 요구 등을 처리한 결과의 기록 미흡으로 인하여 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '이용자의 개인정보 열람, 정정, 삭제 요구 등을 접수하고 처리한 결과 기록',
                    'threatcode' => 'TC8-01',
                ),
            84 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '정보주체 권리보호',
                    'depth' => '3.5.2.8',
                    'clause' => '정보통신망에서 사생활 침해 또는 명예훼손 등 타인의 권리를 침해한 경우 침해를 받은 자가 정보통신서비스 제공자에게 정보의 삭제 요청 등을 할 수 있는 절차를 마련하여 시행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '사생활 침해 또는 권리 침해를 당한 이용자에게 정보 삭제 요청 등의 절차 마련 및 시행 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '정보통신망을 통하여 사생활 침해나 권리 침해를 받은 자가 해당 정보의 삭제 또는 반박 내용의 게재를 요청할 수 있는 절차 마련',
                    'threatcode' => 'TC8-01',
                ),
            85 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '정보주체 권리보호',
                    'depth' => '3.5.3.1',
                    'clause' => '법적 의무 대상자에 해당하는 경우 개인정보 이용내역을 주기적으로 정보주체(이용자)에게 통지하고 그 기록을 남기고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '연 1회 이상 개인정보 이용내역의 통지 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '연 1회 이상 개인정보 이용내역의 통지 함
* 개인정보의 수집·이용 목적 및 항목
* 개인정보를 제공받은 자, 목적, 항목
* 개인정보 처리위탁을 받는 자, 위탁 업무 내용',
                    'threatcode' => 'TC8-01',
                ),
            86 =>
                array (
                    'type' => 'ISMS-P3',
                    'domain' => '정보주체 권리보호',
                    'depth' => '3.5.3.2',
                    'clause' => '개인정보 이용내역 통지 항목은 법적 요구항목을 모두 포함하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '연 1회 이상 개인정보 이용내역의 통지 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '연 1회 이상 개인정보 이용내역의 통지 함
* 개인정보의 수집·이용 목적 및 항목
* 개인정보를 제공받은 자, 목적, 항목
* 개인정보 처리위탁을 받는 자, 위탁 업무 내용',
                    'threatcode' => 'TC8-01',
                ),
            87 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '정보보호 정책',
                    'depth' => 'A-1',
                    'clause' => '조직 전반에 적용하고 있는 정보보호 정책/지침 또는 규정이 수립되었는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 활동에 대한 체계적인 문서화 및 세부 활동 정의가 미흡하여 체계적이고 일관된 보안업무 적용이 어려울 위험',
                    'protection_plan' => '정보보호정책의 시행을 위해 필요한 세부적인 방법, 절차, 주기 등을 규정한 정보보호 지침, 절차, 매뉴얼 등 수립',
                    'threatcode' => 'TC1-11',
                ),
            88 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '정보보호 정책',
                    'depth' => 'A-2',
                    'clause' => ' 정기적으로 정보보호정책의 타당성을 검토, 평가하여 수정 보완하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호정책 및 정책시행 문서에 대한 검토활동을 수행하지 않아, 필요 절차가 누락되거나 정보보호 환경 변화 사항을 반영하지 못할 위험',
                    'protection_plan' => '정기적 타당성 검토 절차 수립 및 이행',
                    'threatcode' => 'TC1-12',
                ),
            89 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '정보보호 정책',
                    'depth' => 'A-3',
                    'clause' => '연도별 정보보안업무 세부추진 계획을 수립·시행하고 그 추진결과에 대한 심사 분석·평가를 실시하는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 업무 세부추진 계획 및 심사분석 미비/부재로 인해 실제 업무 추진에 어려울 위험',
                    'protection_plan' => '연간 정보보호 계획서 등을 참고하여 업무 세부추진 계획을 수립 시행하고, 심사 분석평가 결과 제출',
                    'threatcode' => 'TC1-04',
                ),
            90 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '정보보호 정책',
                    'depth' => 'A-4',
                    'clause' => '최근 1년간 기관장에게 연간 보호대책 등의 주요 정보보안 관련 사항을 보고하였는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '주요 정보보안 관련 사항에 대한 보고가 미흡하여 적절한 조치, 대응이 이루어지지 않을 위험',
                    'protection_plan' => '보고 체계에 따라 기관장에게 주요 정보보안 관련 사항의 보고 수행',
                    'threatcode' => 'TC1-01',
                ),
            91 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '정보보호 정책',
                    'depth' => 'A-40',
                    'clause' => '정보보호정책이 문서화되어 있으며 경영자층의 승인을 받고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호정책의 시행 당위성 부재에 따른 정보보호 업무에 대한 기준 적용의 어려울 위험',
                    'protection_plan' => '정보보호 활동의 근거를 포함하는 최상위 정책 수립 및 최고경영자 승인',
                    'threatcode' => 'TC1-13',
                ),
            92 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '정보보호 정책',
                    'depth' => 'A-41',
                    'clause' => '정보보호정책서가 모든 임직원 및 관련자에게 배포되고 모든 임직원 및 관련자가 정보보호정책을 이해하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '명시적인 정보보호 기준이 없을 시 보안기준에 적합하지 않은 업무 수행 위험',
                    'protection_plan' => '모든 임직원 및 관련자에게 정보보호정책서 배포',
                    'threatcode' => 'TC1-09',
                ),
            93 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '정보보호 정책',
                    'depth' => 'A-42',
                    'clause' => '정보보호정책의 내용과 기관의 사업 목표 및 전략 등과의 일관성이 검토되었는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '정보보호 활동에 대한 체계적인 문서화 및 세부적인 정보보호 활동의 정의가 미흡하여 체계적이고 일관된 보안업무 적용이 어려울 위험',
                    'protection_plan' => '정보보호정책과 지침, 절차 등과 같은 정책시행 문서 간 내용의 일관성 여부 검토',
                    'threatcode' => 'TC1-11',
                ),
            94 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '정보보호 정책',
                    'depth' => 'A-43',
                    'clause' => '기관의 정보보안 강화를 위한 중장기(3년 이상) 계획이 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '중장기적인 정보보안 강화 활동에 대한 계획 수립이 미흡하여 체계적이고 일관된 정보보안 활동이 수행되지 않을 위험  ',
                    'protection_plan' => '정보보안 강화 활동을 구체화한 중장기 계획 수립',
                    'threatcode' => 'TC1-02',
                ),
            95 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '정보보호 조직',
                    'depth' => 'A-5',
                    'clause' => '보안활동을 계획, 실행, 검토하는 보안 전담조직 및 전담 보안 담당자가 구성되어 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보안 전담조직 및 담당자 구성이 미흡하여 정보보안활동이 체계적으로 이행되지 않을 위험',
                    'protection_plan' => '정보보안활동을 체계적으로 이행하기 위한 보안 조직 및 담당자 구성',
                    'threatcode' => 'TC1-06',
                ),
            96 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '정보보호 조직',
                    'depth' => 'A-44',
                    'clause' => '보안관련 전문가 집단으로부터 조언을 받고 해당 내용을 반영하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보안 컨설팅 없이 보안 체계 수립 및 반영으로 인하여 보안요구사항 적용 누락 또는 보안기준에 적합하지 않은 업무 수행 등의 위험',
                    'protection_plan' => '객관적이고 다양한 관점에서 외부 보안 전문가들의 컨설팅을 통해 정보보안 체계 수립 및 내용 반영  ',
                    'threatcode' => 'TC1-01',
                ),
            97 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '정보보호 조직',
                    'depth' => 'A-45',
                    'clause' => '정보보호 관련 주요 의사결정을 수행하는 정보보호위원회가 구성되어 있으며 위원회의 역할 및 책임이 명확히 기술되어 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '중요 정보보호 사안에 대한 즉각적이고 효율적인 의사결정이 지연될 위험',
                    'protection_plan' => '정보보호위원회 구성, 운영, 역할 및 책임 등을 정한 규정 수립',
                    'threatcode' => 'TC1-06',
                ),
            98 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '정보보호 조직',
                    'depth' => 'A-46',
                    'clause' => '정보보호관리자의 역할 및 책임이 규명되어 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '정보보호관리자의 역할 및 책임이 불명확하며 정보보호 활동이 체계적으로 수행되지 않을 위험',
                    'protection_plan' => '정보보호관리자의 역할 및 책임 규명',
                    'threatcode' => 'TC1-07',
                ),
            99 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '인적보안',
                    'depth' => 'A-6',
                    'clause' => '신원조회(민간기관 제외)가 수행되고 비밀유지서약서를 작성하고 있으며 주기적으로 갱신되고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '신원조회 및 비밀유지서약서 징구(갱신) 누락으로 인해 정보보호 의식 수준 저하 및 책임을 묻기 어려울 위험',
                    'protection_plan' => '신원 조회 및 주기적인 임직원 비밀유지서약서 갱신',
                    'threatcode' => 'TC1-09',
                ),
            100 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '인적보안',
                    'depth' => 'A-7',
                    'clause' => '계약직 및 임시직원은 물론 정식직원 채용 시 신원, 업무능력, 교육정도, 경력 등에 대한 적격심사가 이루어지고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '직원 채용 시 미흡한 적격심사로 인해 자산분실, 정보유출 등 보안사고가 발생할 위험 ',
                    'protection_plan' => '계약직, 임시, 정식직원 채용시 체계적인 적격심사 수행 및 적절한 직무 할당',
                    'threatcode' => 'TC1-04',
                ),
            101 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '인적보안',
                    'depth' => 'A-47',
                    'clause' => '민감한 직무담당자에 대해 강화된 적격심사가 수행되고 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '미흡한 적격심사로 인해 의도적/비의도적 권한 오남용 발생 위험',
                    'protection_plan' => '민감한 직무담당자(재무정보, 비밀정보 등 민감한 정보 처리 직무, 기술적 및 운영적 보안대책을 우회할 수 있도록 허가되어 있는 직무 등) 채용시 강화된 적격심사 수행 또는 직무 할당시 추가된 적격심사 수행',
                    'threatcode' => 'TC1-06',
                ),
            102 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '인적보안',
                    'depth' => 'A-48',
                    'clause' => '모든 인력에 대하여 정보보호의 책임과 역할을 기술하는 직무기술서가 존재하는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호 책임 및 역할이 문서화되지 않아, 의도적/비의도적 권한 오남용 발생 위험',
                    'protection_plan' => '모든 인력(개발, 운영, 정보보호)에 대한 직무별 역할 및 책임을 직무기술서 기재',
                    'threatcode' => 'TC1-04',
                ),
            103 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '인적보안',
                    'depth' => 'A-49',
                    'clause' => '정보보안정책을 불이행할 경우 이에 대한 징계가 규정에 명시되어 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보안정책 불이행에 따른 징계 규정이 명확히 문서화되지 않아 정보보호 준수에 대한 미이행 및 위반자 처벌이 어려울 위험',
                    'protection_plan' => '정보보안정책 불이행 징계 규정 명시',
                    'threatcode' => 'TC1-10',
                ),
            104 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '인적보안',
                    'depth' => 'A-50',
                    'clause' => '고용계약 만료시 자산 반납 및 접근권한을 삭제하는 절차가 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '고용계약 만료에 따른 자산반납, 권한삭제 체계 및 절차가 미흡하여 퇴직자 등에 의한 자산분실, 정보유출 등 보안사고가 발생할 위험',
                    'protection_plan' => '조직 내 인력의 고용계약 만료시 정보자산 반납, 접근권한 삭제, 결과 확인 등 수립된 절차에 따라 지체 없이 이행',
                    'threatcode' => 'TC6-06',
                ),
            105 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '외부자 보안',
                    'depth' => 'A-8',
                    'clause' => '제3자(외부유지보수직원, 외부용역자포함)에 의한 정보자산 접근과 관련한 보안요구사항을 계약에 포함하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '외부자의 보안규범 준수에 대한 강제화 불가능 및 피해발생에 따른 피해 구제의 어려울 위험',
                    'protection_plan' => '외부자 계약 시 보안요구사항 정의 및 계약 반영',
                    'threatcode' => 'TC1-08',
                ),
            106 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '외부자 보안',
                    'depth' => 'A-9',
                    'clause' => '위탁 기관(업체) 또는 용역사업 참여 업체의 보안관련사항 위반이나 침해사고 발생 시 조치를 수행하는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '위탁 및 용역사업 참여 업체에 대한 보안관리가 이루어지지 않아 정보유출 및 침해사고 발생 등에 대한 신속한 대응이 어려울 위험',
                    'protection_plan' => '보안위반 및 침해사고 발생 등에 대한 주기적인 점검 또는 감사를 수행하고 문제점 발견 시 신속한 조치가 이루어질수 있도록 보호대책 수립 및 이행',
                    'threatcode' => 'TC1-08',
                ),
            107 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '외부자 보안',
                    'depth' => 'A-51',
                    'clause' => '제3자의 보안요구사항 준수 검토를 위해 제3자 관리책임자로부터 보안관리 상황에 대한 주기적인 보고를 받고 수시 점검을 수행하는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '제3자에 대한 보안관리가 이루어지지 않아 정보유출 등 보안사고가 발생할 위험',
                    'protection_plan' => '외주용역업체 담당자에게 보안 요구 준수 사항에 대한 내용을 주기적으로 징구',
                    'threatcode' => 'TC1-08',
                ),
            108 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '외부자 보안',
                    'depth' => 'A-52',
                    'clause' => '외부 관계자에게 정보나 자산에 접근할 수 있는 보안 규정을 사전 통보하고 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '외부 관계자에게 정보 또는 자산 접근에 관한 보안규정을 사전에 통보하지 않아 의도적/비의도적 접근권한 오남용 및 책임을 묻기 어려울 위험',
                    'protection_plan' => '외부자 계약시 정보 또는 자산 접근에 관한 보안 규정을 명시하여 계약 반영',
                    'threatcode' => 'TC1-08',
                ),
            109 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '외부자 보안',
                    'depth' => 'A-53',
                    'clause' => '제3자(외부유지보수직원, 외부용역자포함)에 대한 보안서약서를 가지고 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '외부자 정보보안서약서 미징구에 따른 정보보호 의식 수준 저하 및 책임을 묻기 어려울 위험',
                    'protection_plan' => '외부자에 대한 정보보호서약서 징구 및 보관',
                    'threatcode' => 'TC1-08',
                ),
            110 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '자산분류',
                    'depth' => 'A-10',
                    'clause' => '조직의 중요한 자산(인력, 시설, 장비 등)에 대한 자산분류기준이 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '조직 내 중요 자산에 대한 식별 및 분류가 미흡하여 자산관리 소홀에 따른 사고 발생 위험 ',
                    'protection_plan' => '조직 내 자산 분류기준 수립 및 모든 자산 식별',
                    'threatcode' => 'TC1-02',
                ),
            111 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '자산분류',
                    'depth' => 'A-11',
                    'clause' => '정보자산을 보안등급과 중요도 등에 따라 분류하여 관리하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보자산 중요도, 보안등급 정의 미흡에 따른 관리력 낭비 및 상위 보안등급 정보자산에 대한 관리 소홀에 따른 정보유출 등 보안사고 발생 위험',
                    'protection_plan' => '정보자산별로 중요도를 평가하고 각 자산별 특성에 적합한 보안등급 부여 및 관리',
                    'threatcode' => 'TC1-04',
                ),
            112 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '자산분류',
                    'depth' => 'A-12',
                    'clause' => '정보자산별로 책임자가 지정되어 있으며 소유자, 관리자, 사용자들이 확인되고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '책임소재 불명확화에 따른 정보자산관리 소홀 및 문제 상황이 발생할 위험',
                    'protection_plan' => '식별된 정보자산에 대한 책임자 및 소유자, 관리자, 사용자 지정',
                    'threatcode' => 'TC1-07',
                ),
            113 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '자산분류',
                    'depth' => 'A-54',
                    'clause' => '조직의 주요 자산 목록을 작성하고 변경사항을 유지 관리하고 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '조직 내 모든 자산에 대한 식별 및 정기적인 현황 파악이 미흡하여 정보자산의 관리 소홀에 따른 사고 발생 위험 ',
                    'protection_plan' => '정기적으로 조직 내 자산 현황을 조사하고 자산목록을 최신으로 유지',
                    'threatcode' => 'TC1-04',
                ),
            114 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '자산분류',
                    'depth' => 'A-55',
                    'clause' => '자산에 대한 등급별 보호절차, 접근제한을 실시하고 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '모든 정보자산에 대한 식별 및 분류가 미흡하여 정보자산의 관리 소홀에 따른 사고 발생 위험 ',
                    'protection_plan' => '자산별 등급에 따라 보호절차 및 접근통제 정책 수립/반영',
                    'threatcode' => 'TC1-04',
                ),
            115 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '매체관리',
                    'depth' => 'A-13',
                    'clause' => '미디어 장치의 사용 및 반출입에 대한 관리절차나 문서가 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '미디어 장치 사용 및 반출입에 대한 통제 및 관리가 미흡하여, 중요 정보 유출, 악성코드 감염 등 보안사고가 발생할 위험',
                    'protection_plan' => '미디어 장치 사용, 반입, 반출 등에 대한 관리절차 수립 절차에 따라 이행',
                    'threatcode' => 'TC1-15',
                ),
            116 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '매체관리',
                    'depth' => 'A-14',
                    'clause' => '정보나 매체가 용도 폐기되기 위한 폐기 방법이 수립되고 적절하게 이행되는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템 저장매체의 폐기 또는 재사용 기준 부재 및 관리대장 미작성 등으로(불용처리 미흡으로) 인한 정보유출 위험',
                    'protection_plan' => '정보나 매체 폐기 시 수립된 절차에 따라 이행 ',
                    'threatcode' => 'TC4-08',
                ),
            117 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '매체관리',
                    'depth' => 'A-56',
                    'clause' => '안전을 요하는 매체가 운반될 때 접근 통제가 이루어지고 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '안전을 요하는 매체가 운반될 때 접근 통제가 이루어지지 않아 보안사고가 발생할 위험',
                    'protection_plan' => '매체 운반 시 시건장치된 하드케이스를 이용 등 안전한 운반 대책 수립',
                    'threatcode' => 'TC1-02',
                ),
            118 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '매체관리',
                    'depth' => 'A-57',
                    'clause' => '노트북, USB 메모리 등 이동형 장치의 분실을 통한 자료 유출 대비책이 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '이동형 장치 사용에 대한 통제 및 관리가 미흡하여, 이동형 장치 분실 시 중요 자료가 유출될 위험',
                    'protection_plan' => '이동형 장치 관리대장 작성을 통해 이동형 장치 사용 통제 및 관리 강화',
                    'threatcode' => 'TC1-03',
                ),
            119 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '매체관리',
                    'depth' => 'A-58',
                    'clause' => '보조기억매체의 사용을 주기적 점검을 통해 최신자료를 유지하는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '보조기억매체 사용에 대한 주기적 점검이 이루어지지 않아 관리 소홀에 따른 보안사고 발생 위험',
                    'protection_plan' => '보조기억매체 사용에 대한 주기적 점검 실시',
                    'threatcode' => 'TC1-01',
                ),
            120 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '교육 및 훈련',
                    'depth' => 'A-15',
                    'clause' => '교육 훈련 대상은 관련된 모든 내외 임직원 및 외부 인력을 포함하고 있으며 정보자산에 간접적으로 접근하는 일반 외부 용역 직원에 대해서도 정보보호교육훈련을 수행하는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 교육 대상의 누락 또는 교육의 질적 저하로 인한 조직 전체 보안 수준 및 효율성이 저하될 위험',
                    'protection_plan' => '연 1회 이상 기본 정보보호 교육 수행',
                    'threatcode' => 'TC1-09',
                ),
            121 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '교육 및 훈련',
                    'depth' => 'A-59',
                    'clause' => '정보보호 인식제고를 위한 교육 및 훈련 계획을 종합적으로 수립하여 정기적으로 실시하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '교육 계획 수립 미흡으로 인하여 체계적인 교육이 실시되지 않아 조직 전반의 정보보호 수준이 저하될 위험',
                    'protection_plan' => '정보보호 교육의 시기, 기간, 대상, 내용, 방법 등의 내용이 포함된 연간 정보보호 교육 및 훈련 계획 수립',
                    'threatcode' => 'TC1-09',
                ),
            122 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '교육 및 훈련',
                    'depth' => 'A-60',
                    'clause' => '교육 및 훈련은 대상자의 직위 및 업무 특성에 따라 구분하여 실시하고 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '담당 업무에 적합한 수준의 보안 사고 대응 및 업무 연속성 유지가 어려울 위험',
                    'protection_plan' => '직위 및 업무 특성을 고려한 정보보호 직무특화 교육 시행',
                    'threatcode' => 'TC1-09',
                ),
            123 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '교육 및 훈련',
                    'depth' => 'A-61',
                    'clause' => '교육 훈련의 효과가 측정, 분석되어 차기 교육에 반영되는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '정보보호 교육 대상의 누락 또는 교육의 질적 저하로 인한 조직 전체 보안 수준 및 효율성 저하 위험',
                    'protection_plan' => '교육시행에 대한 기록을 남기고 교육 효과와 적정성을 평가하여 다음 교육 계획에 반영',
                    'threatcode' => 'TC1-09',
                ),
            124 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '교육 및 훈련',
                    'depth' => 'A-62',
                    'clause' => '직원을 대상으로 사이버안전센터 보안권고문·해킹메일주의공지, 윈도우 보안업데이트 사항, 보안취약점 조치요령 등을 공지하는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '직원들을 대상으로 주기적인 정보보안 관련 사항 공지 미흡으로 인한 조직 전체 보안 수준 저하 및 보안사고 발생 위험',
                    'protection_plan' => '조직 내 직원들에게 주기적인 정보보안 관련 사항 공지',
                    'threatcode' => 'TC1-09',
                ),
            125 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '접근통제',
                    'depth' => 'A-16',
                    'clause' => '업무 요구사항에 따라 접근통제의 방법과 범위 등을 정의하고 문서화하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '업무 요구사항에 따른 접근통제 정의가 미흡하여 비인가자에 의한 정보탈취 및 서비스 장애가 유발될 위험',
                    'protection_plan' => '업무 요구사항에 따른 접근 통제영역을 정의하고 접근 통제영역별로 접근통제 방법 정의',
                    'threatcode' => 'TC1-02',
                ),
            126 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '접근통제',
                    'depth' => 'A-17',
                    'clause' => '허가된 원격작업내용, 작업시간, 접근 허가된 내부 시스템 및 서비스 등의 내용을 포함한 재택근무 등의 원격작업에 대한 정책, 절차가 존재하는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '재택근무 등 원격작업에 대한 보안 대책 수립이 미흡하여 비인가 시스템 접근, 정보유출 등 보안사고 발생 위험',
                    'protection_plan' => '재택근무 등과 같은 원격업무 수행 환경에서 주요정보자산을 보호하기 위한 정책 및 절차 수립 및 이행',
                    'threatcode' => 'TC1-02',
                ),
            127 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '접근통제',
                    'depth' => 'A-18',
                    'clause' => '스마트폰·개인휴대단말기(PDA)·전자제어장비 등 첨단 정보통신기기를 활용하는 경우, 업무자료 등 중요정보 보호 및 안전한 전송을 위한 방안이 마련되어 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '업무에 스마트폰, 휴대용단말기 등 활용 시 보안 대책 수립 미흡으로 인한 중요정보 유출 발생 등 위험',
                    'protection_plan' => '스마트폰 등 정보통신기기를 이용한 업무 활용 시 중요 정보 전송 구간 암호화 등의 정보보안 방안 마련',
                    'threatcode' => 'TC1-02',
                ),
            128 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '접근통제',
                    'depth' => 'A-19',
                    'clause' => '정보통신망에 비인가 PC․노트북 등을 연결시 차단하는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템에 대한 접근 통제, 안전한 접근 수단의 적용이 미흡하여 비인가 시스템 접근, 자원 침탈, 정보 유출, 장애 발생 등 위험',
                    'protection_plan' => 'NAC 장비를 통해 정보통신망에 비인가 단말 연결 시 차단 적용 또는 접근이 허용된 사용자를 명확하게 식별 ∙ 인증하고 해당 사용자만 연결되도록 안전한 접근수단 적용',
                    'threatcode' => 'TC6-08',
                ),
            129 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '접근통제',
                    'depth' => 'A-20',
                    'clause' => '정보시스템 및 정보보호시스템 접근기록의 비인가 열람, 훼손 등을 방지하기 위한 대책이 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템, 정보보호시스템 접근기록의 접근통제 및 위변조 방지에 대한 보안 대책 수립 미흡으로 사고발생 시 적절히 대응하지 못할 위험',
                    'protection_plan' => '접근기록에 대한 비인가자 접근통제 및 접근 기록의 위변조 방지를 위한 별도의 물리적인 저장 장치 보관 및 백업 대책 수립',
                    'threatcode' => 'TC1-02',
                ),
            130 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '접근통제',
                    'depth' => 'A-21',
                    'clause' => '무선랜(Wi-Fi 등)은 국가정보원장의 보안성 검토를 필하거나 암호키 설정 등의 적절한 보안조치를 적용하였는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '무선 네트워크 사용에 대한 보안성 검토 및 통제가 미흡하여 비인가자의 내부 네트워크 접근, 정보 유출 등 보안사고가 발생할 위험',
                    'protection_plan' => '조직 내 무선네트워크 환경을 구축(AP 설치)할 경우 보안성 검토, 암호키 설정 등 보안대책을 마련하고 그에 따른 보안대책 적용',
                    'threatcode' => 'TC1-02',
                ),
            131 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '접근통제',
                    'depth' => 'A-22',
                    'clause' => '무선랜 무단 사용 여부, 비인가 무선 중계기(AP) 설치 여부, 우회 정보통신망 사용 차단 여부 등을 주기적으로 점검하는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '무선 네트워크 사용에 대한 통제 및 점검이 미흡하여 비인가자의 내부 네트워크 접근, 정보 유출 등 보안사고 발생 위험',
                    'protection_plan' => '비인가 무선 공유기 사용 금지 및 점검 실시',
                    'threatcode' => 'TC1-01',
                ),
            132 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '접근통제',
                    'depth' => 'A-63',
                    'clause' => '접근통제에 대한 주기적 검토를 통해 접근통제 정책이 적합한지를 확인하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '계정 및 권한 현황 관리와 주기적인 검토 활동이 미흡하여 미사용 계정 및 퇴직자 계정, 잘못된 권한 부여 등이 존재할 위험',
                    'protection_plan' => '접근권한 검토 기준, 검토주체, 검토방법, 주기 등을 정하여 접근통제 정책의 정기적 검토 이행',
                    'threatcode' => 'TC1-01',
                ),
            133 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '접근통제',
                    'depth' => 'A-64',
                    'clause' => '보안상 중요한 접근통제 규칙은 관리자의 승인을 거쳐서 설정 또는 변경하도록 하고 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '접근통제 규칙에 대한 관리자 승인 절차 수립 및 이행 미흡으로 인하여 권한의 오남용, 잘못된 권한 부여 등이 발생할 위험',
                    'protection_plan' => '중요한 접근통제 규칙 설정 시 관리자 승인 절차 수립 및 이행',
                    'threatcode' => 'TC1-02',
                ),
            134 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '접근통제',
                    'depth' => 'A-65',
                    'clause' => '접근통제 방법은 내부 관련 정책 및 절차에 따라 결정되어 반영되는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '내부 정책, 절차에 따른 접근통제 방법 수립 및 적용이 미흡하여 인가되지 않은 사용자 또는 외부인으로부터의 정보탈취 및 서비스 장애유발 위험',
                    'protection_plan' => '업무 요구사항에 따른 접근통제 관련 내부 정책, 절차를 정의하고 접근 통제영역별로 접근통제 방법 적용',
                    'threatcode' => 'TC1-02',
                ),
            135 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '접근통제',
                    'depth' => 'A-66',
                    'clause' => '안전한 로그온 절차, 식별 및 인증관리 등과 같은 시스템 운영체제 접근 통제 방법이 존재하고 이에 따라 이행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템에 대한 접근 통제, 안전한 접근 수단 수립 및 적용이 미흡하여 비인가 시스템 접근, 자원 침탈, 정보 유출, 장애 발생 등 위험',
                    'protection_plan' => '정보시스템별 접근이 허용된 사용자를 명확하게 식별 ∙ 인증하고 안전한 접근수단 방법 수립 및 적용',
                    'threatcode' => 'TC2-02',
                ),
            136 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '접근통제',
                    'depth' => 'A-67',
                    'clause' => '외부에서의 사용자 접근에 대한 안전한 인증방식을 사용하고 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '주요 정보통신 기반시설에 접근하는 사용자의 식별 인증 미흡으로 침해사고 발생 시 적절히 대응하지 못할 위험',
                    'protection_plan' => '외부망에서 주요 정보통신 기반시설에 접속 시 사용자 인증을 강화하는 추가인증(OTP, 이메일, SMS 등) 도입',
                    'threatcode' => 'TC2-02',
                ),
            137 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '접근통제',
                    'depth' => 'A-68',
                    'clause' => '외부에서 내부 시스템의 기능을 사용할 수 있다면 VPN 등 안전한 접속방법을 제공하고 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '정보시스템에 대한 원격접근 통제가 미흡하여, 비인가자의 정보시스템에 접근이 가능할 위험',
                    'protection_plan' => '외부 네트워크를 통한 정보시스템 원격운영 시 보호대책 적용 (접속 단말 및 사용자 인증, VPN 등 전송구간 암호화 등)',
                    'threatcode' => 'TC6-11',
                ),
            138 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '접근통제',
                    'depth' => 'A-69',
                    'clause' => '제3자가 원격에서 진단, 관리 등을 위한 서비스를 제공할때 필요할 때만 연결을 허용하고 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '시스템 등에 대한 원격접근 통제가 미흡하여, 비인가내부 시스템 접근, 정보유출 등 보안사고가 발생할 위험',
                    'protection_plan' => '외부 네트워크를 통한 내부 시스템 원격 진단 및 관리를 위해 허용하는 단말기, 시간 등의 정책 수립 및 이행',
                    'threatcode' => 'TC1-02',
                ),
            139 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '접근통제',
                    'depth' => 'A-70',
                    'clause' => '제3자와의 정보 공유, 네트워크 공유 등에 대한 보안위협에 대한 대책이 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '제3자와 정보 공유, 네트워크 공유 시 보안통제가 미흡하여 비인가자에게 정보 유출 등 보안사고가 발생할 위험',
                    'protection_plan' => '제3자는 별도의 네트워크를 구축하여 내부 네트워크 접속을 제한하고 네트워크 전송 시 암호화, 오프라인 전송 시 보안 USB 활용 등 보안대책 수립',
                    'threatcode' => 'TC1-01',
                ),
            140 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '접근통제',
                    'depth' => 'A-71',
                    'clause' => '민감한 시스템에 따라 네트워크를 분리 운영하여 서로간의 접근을 막고 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '주요 시스템 분류 기준에 의한 네트워크 분리 및 접근통제가 미흡하여 비인가 시스템 접근, 자원침탈, 정보유출, 장애발생 등의 위험',
                    'protection_plan' => '주요 서비스를 제공하는 시스템에 따라 네트워크를 분리하여 접근 통제 수행',
                    'threatcode' => 'TC1-02',
                ),
            141 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '접근통제',
                    'depth' => 'A-72',
                    'clause' => '방화벽, 침입탐지 등 안전한 네트워크를 위한 대책을 마련하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '네트워크 접근통제 등의 보호대책 마련을 위한 정보보호시스템 등의 도입 부재로 인한 비인가 내부 시스템 접근, 자원침탈, 정보유출 등의 위험 ',
                    'protection_plan' => '네트워크 접근통제, 비인가자의 침입탐지 등을 위한 방화벽, IDS, IPS 등의 정보보호시스템 도입',
                    'threatcode' => 'TC1-02',
                ),
            142 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '접근통제',
                    'depth' => 'A-73',
                    'clause' => '내부망(업무망)과 인터넷망을 분리하여 사용하는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '인터넷 접속 및 사용을 제한하지 않아, 고의 또는 실수로 인한 정보 유출, 악성코드 감염 등 보안사고가 발생할 위험',
                    'protection_plan' => '내부망과 인터넷망의 분리를 통해 내부망에서 인터넷 접속 제한',
                    'threatcode' => 'TC4-01',
                ),
            143 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '접근통제',
                    'depth' => 'A-74',
                    'clause' => '망분리 후 안전한 자료전송을 위한 시스템을 도입하여 사용하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '내부망과 인터넷망 분리 후 자료전송 통제 방법 수립 및 도입이 미흡하여 고의 또는 실수로 인한 정보 유출, 악성코드 감염 등 보안사고가 발생할 위험',
                    'protection_plan' => '인터넷 PC와 내부 업무용 PC를 분리하고 있는 경우 PC간의 자료전송 통제 방법 도입',
                    'threatcode' => 'TC1-04',
                ),
            144 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '접근통제',
                    'depth' => 'A-75',
                    'clause' => '인터넷 전화망과 일반 전산망은 분리하여 운용하는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '인터넷 전화망과 전산망 분리 및 운용이 미흡하여 서비스 장애, 정보 유출 등의 위험',
                    'protection_plan' => '물리적인 분리 또는 VLAN 등을 이용하여 논리적으로 전화망과 전산망을 분리하여 운용',
                    'threatcode' => 'TC1-04',
                ),
            145 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '접근통제',
                    'depth' => 'A-76',
                    'clause' => '제3자의 내부 상주 인력에 대한 네트워크를 분리 운영하고 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '외부인에게 네트워크 사용 허가에 대한 보안 통제가 미흡하여 내부정보 유출, 내부 서버 공격 등 보안사고가 발생할 위험',
                    'protection_plan' => '외부인에게 제공하는 네트워크는 내부 네트워크(업무망)와 분리',
                    'threatcode' => 'TC6-08',
                ),
            146 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-23',
                    'clause' => '개발 테스트 설비는 실제 운영설비와 분리되어 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개발업무에 사용되는 설비를 실제 운영설비와 분리 미흡으로 인한 비인가자에 의한 정보 유출, 악성코드 감염 등의 위험',
                    'protection_plan' => '개발 테스트 설비에서 내부 업무용 설비에 접근하지 못하도록 분리하고, 별도의 개발환경을 마련하여 내부 업무용 설비에 대한 비인가자의 접근 차단',
                    'threatcode' => 'TC1-04',
                ),
            147 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-24',
                    'clause' => '시스템을 도입하기 전에 보안성 검토 및 호환성 검토를 실시하는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '시스템 도입에 대한 보안성, 호환성 검토 절차 수립 및 시행이 미흡하여 시스템 또는 서비스 제공 불가 또는 보안 취약점을 악용한 침해사고가 발생할 위험',
                    'protection_plan' => '시스템 도입에 대한 공식적인 보안성 및 호환성 검토 절차를 수립하고 테스트 수행',
                    'threatcode' => 'TC1-01',
                ),
            148 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-25',
                    'clause' => '시스템 및 사용 장비에 대한 보안 취약점에 대한 주기적 검토 및 보완 프로세스가 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '시스템 및 사용 장비에 대한 정기적인 보안 취약점 점검 및 관리 절차 수립이 미흡하여 취약점 노출에 따른 보안사고의 발생 위험',
                    'protection_plan' => '시스템 및 사용 장비에 대한 취약점 점검 절차를 수립하여 정기적으로 점검 수행 맟 보호대책 수립 ∙ 이행',
                    'threatcode' => 'TC1-04',
                ),
            149 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-26',
                    'clause' => '바이러스, 악성코드 등에 대한 대비책을 가지고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '악성코드 및 바이러스 감염으로 인한 중요 데이터 유출/손실, 시스템 장애가 발생할 위험',
                    'protection_plan' => '바이러스, 웜, 트로이목마 등의 악성코드로부터 정보시스템을 보호하기 위하여 보호대책 수립 ∙ 이행',
                    'threatcode' => 'TC3-12',
                ),
            150 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-27',
                    'clause' => '보안규정의 이행여부를 확인하는 주기적인 보안점검 및 불시 보안점검이 이루어지고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '보안점검 미흡으로 인한 보안규범 준수에 대한 강제화 불가능 및 피해발생에 따른 피해 구제가 어려울 위험',
                    'protection_plan' => '보안규범 준수와 피해발생에 따른 피해구제를 위한 주기적인 보안점검 및 불시 보안점검 실시',
                    'threatcode' => 'TC1-01',
                ),
            151 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-28',
                    'clause' => '시스템 및 패스워드 관리지침을 제공하고 시스템 및 패스워드 관리책임을 주지시키고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '패스워드 관리에 대한 명확한 기준 부재로 인하여 패스워드 관리가 소홀해지거나 비인가 시스템 접근이 발생될 위험',
                    'protection_plan' => '패스워드에 대한 정책 적용 관리 교육, 안내 등을 통해 패스워드 관리 절차에 대해 공지하고 그에 따른 책임이 사용자(임직원)에게 있음을 주지',
                    'threatcode' => 'TC1-09',
                ),
            152 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-29',
                    'clause' => '전자기록 보관을 위한 별도의 방법(아카이빙)이 존재하고, 이를 통한 관리를 하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '전자기록을 별도로 보관하고 관리하지 않아, 정보자산의 관리 소홀에 따른 사고 발생 위험',
                    'protection_plan' => '전자기록을 별도의 방법(아카이빙)으로 관리',
                    'threatcode' => 'TC1-14',
                ),
            153 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-30',
                    'clause' => '‘사이버보안진단의 날’ 등과 같이 월별 보안 중점점검사항에 대해 매월 점검하고 조치하는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '월별 보안 중점점검사항에 대한 점검 미흡으로 악성코드 감염 등 보안사고가 발생할 위험',
                    'protection_plan' => '개인업무 환경에서의 정보보호 준수여부 등 월별 보안 점검사항을 주기적으로 점검',
                    'threatcode' => 'TC1-01',
                ),
            154 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-31',
                    'clause' => '비밀(대외비 포함)을 비밀관리기록부에 등재하여 관리하는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '비밀관리기록부에 비밀(대외비 포함)을 등재하여 관리하지 않을 시 회사 내부 자료가 유출될 위험',
                    'protection_plan' => '비밀관리기록부 작성하여 주기적인 책임자의 검토 실시',
                    'threatcode' => 'TC1-14',
                ),
            155 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-32',
                    'clause' => '출력된 비밀문서의 경우 비밀합동보관소 등에 안전하게 보관되어 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '비인가자의 접근으로 인한 중요정보 유출될 위험',
                    'protection_plan' => '대외비 문서 보관을 위한 비밀합동보관소(캐비닛) 설치',
                    'threatcode' => 'TC1-14',
                ),
            156 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-33',
                    'clause' => '비밀 등 중요 정보의 안전한 처리를 위한 시스템을 도입하여 사용하고 있거나 이를 계획하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보자료 반출에 대한 기준이 없고, 비밀 등 중요 정보의 안전한 처리가 되지않고 정보가 외부로 유출될 위험',
                    'protection_plan' => '중요 정보의 안전한 처리를 위한 절차 수립',
                    'threatcode' => 'TC1-04',
                ),
            157 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-34',
                    'clause' => '정보통신망 세부 구성현황 등을 대외비 이상으로 관리하는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '보안등급 정의 미흡에 따른 정보자산, 현황 등에 대한 관리 소홀로 인하여 정보유출 등 보안사고 발생 위험',
                    'protection_plan' => '정보자산, 현황 등에 대한 중요도를 평가하고 특성에 적합한 보안등급 부여',
                    'threatcode' => 'TC1-04',
                ),
            158 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-35',
                    'clause' => '정보보호시스템은 국내용 CC인증을 받았거나, 보안적합성 검증을 받았는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '보안적합성 검증이 되지 않은 정보보호시스템 사용으로 인하여 보안 취약점을 악용한 침해사고가 발생할 위험',
                    'protection_plan' => '공식적인 CC인증 획득 또는 보안적합성 검증을 거친 정보보호시스템 도입',
                    'threatcode' => 'TC1-01',
                ),
            159 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-77',
                    'clause' => '보안책임자는 정보자산 도입 시 보안 정책에 부합하는지 확인하고 승인하는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '정보자산 도입에 대한 보안 적합성 검토 미흡에 따른 보안 정책에 부합하지 못하는 자산 사용으로 인하여 보안사고가 발생할 위험',
                    'protection_plan' => '정보자산 도입 전 적합성 판단 기준 수립 및 테스트에 따른 자산 도입 승인 절차 마련 ',
                    'threatcode' => 'TC1-01',
                ),
            160 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-78',
                    'clause' => '보안정책에 의해 정의된 운영지침과 절차는 문서화되어 관리되고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호 활동에 대한 체계적인 문서화 및 세부적인 정보보호 활동의 정의가 미흡하여 체계적이고 일관된 보안업무 적용이 어려울 위험',
                    'protection_plan' => '정보보호정책의 시행을 위하여 필요한 세부적인 방법, 절차, 주기 등을 규정한 정보보호 지침, 절차, 매뉴얼 등 문서화 및 관리',
                    'threatcode' => 'TC1-11',
                ),
            161 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-79',
                    'clause' => '정보시스템의 변경관리 절차가 존재하며 이에 따라 변경관리가 수행되는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템 자산 변경에 대한 통제가 미흡하여 시스템 또는 서비스 장애 및 보안사고가 발생할 위험',
                    'protection_plan' => '정보시스템 관련 자산(하드웨어, 운영체제, 상용 소프트웨어 패키지 등) 변경에 관한 절차 수립 ∙ 이행',
                    'threatcode' => 'TC1-04',
                ),
            162 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-80',
                    'clause' => '중요 시스템 및 정보보호제품의 설정관리가 승인과정을 통해 이행되는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보시스템, 정보보호제품의 전반적인 설정 변경 등에 대한 관리자 승인 절차 부재로 인하여 권한의 오남용, 잘못된 권한 부여 등이 발생할 위험',
                    'protection_plan' => '정보시스템, 정보보호제품의 중요한 규칙 등 설정 시 관리자 승인 절차 수립 및 이행',
                    'threatcode' => 'TC1-02',
                ),
            163 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-81',
                    'clause' => '개발자와 운영자의 접근 권한은 분리되어 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개발자와 정보시스템 운영자의 접근 권한이 분리되지 않아 권한의 오남용에 따른 보안사고 발생 및 설정 오류 등으로 인한 책임추적성의 확보가 어려울 위험',
                    'protection_plan' => '직무별 접근권한 분류 체계에 따라 개발자와 정보시스템 운영자의 접근 권한 분리',
                    'threatcode' => 'TC1-02',
                ),
            164 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-82',
                    'clause' => '중요 데이터와 일반데이터가 다른 서버에 분리되어 보관되는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '데이터의 중요도 분류 기준에 의한 별도의 분리 보관 미흡에 따른 데이터 보관 서버의 관리 소홀로 인하여 정보유출 등 보안사고 발생 위험',
                    'protection_plan' => '데이터 등에 대한 중요도를 평가하고 중요도에 따라 각기 다른 서버에 분리 보관',
                    'threatcode' => 'TC1-02',
                ),
            165 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-83',
                    'clause' => '장애탐지, 장애기록, 장애분석, 장애복구, 장애보고 등의 사항을 포함하는 시스템의 장애관리 지침이 존재하는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '시스템의 장애관련 지침이 존재하지 않아, 장애발생 시 탐지 및 대응절차가 미흡한 위험',
                    'protection_plan' => '장애 탐지, 기록, 분석, 복구, 보고 등의 사항을 포함하는 장애관리 지침 수립',
                    'threatcode' => 'TC1-11',
                ),
            166 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-84',
                    'clause' => '네트워크 운영 보안 유지를 위해 접근권한 통제, 원격접속 관리, 네트워크 분리 등의 내용을 포함한 네트워크 운영 보안정책이 수립되어 이행되는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '네트워크 운영 보안 유지를 위한 네트워크 운영 보안정책이 수립되어 있지 않아, 체계적인 네트워크 운영이 어려운 위험',
                    'protection_plan' => '접근권한 통제, 원격접속 관리, 네트워크 분리 등의 내용을 포함한 네트워크 운영 보안정책을 수립',
                    'threatcode' => 'TC1-11',
                ),
            167 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-85',
                    'clause' => '시스템과 네트워크의 사용 및 접근에 대한 모니터링 절차와 책임이 정의되어 있고 이에 따라 이행하고 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '시스템과 네트워크 사용 및 접근에 대한 모니터링이 미흡하여, 비정상적인 사용 및 접근에 대하여 탐지하지 못할 위험',
                    'protection_plan' => '시스템과 네트워크 사용 및 접근에 대한 모니터링 절차, 책임 정의와 이행',
                    'threatcode' => 'TC1-01',
                ),
            168 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-86',
                    'clause' => '네트워크를 통해 시스템을 운영하는 경우 원칙적으로 시스템 관리는 내부의 특정 터미널에서만 할 수 있도록 제한하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '원격으로 시스템 운영 시 내부의 특정 터미널에서만 접근 하도록 제한하지 못하여, 비인가 된 인원이 시스템에 접근 시도 가능한 위험',
                    'protection_plan' => '원격으로 시스템 운영 시 원칙적으로 내부 특정 터미널에서만 접근 가능하도록 제한',
                    'threatcode' => 'TC6-11',
                ),
            169 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-87',
                    'clause' => '네트워크, 메신저 등으로부터의 허가되지 않았거나 불분명한 파일의 다운로드를 금지하고, 부득이 다운로드 받을 경우 바이러스 검사를 받는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '불분명한 파일 다운로드를 통한 악성코드 및 바이러스에 감염 가능한 위험',
                    'protection_plan' => '불분명한 파일의 다운로드 금지 및 다운로드 시 바이러스 검사 실시',
                    'threatcode' => 'TC3-12',
                ),
            170 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-88',
                    'clause' => '유지보수 도구를 사용하기 위한 사용 승인 및 통제, 감독이 이루어지는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '유지보수 도구를 사용하기 위한 승인 절차 및 통제, 감독이 이루어 지지 않아, 유지보수 도구로 위장한 악성 프로그램을 실행 가능한 위험',
                    'protection_plan' => '유지보수 도구 사용 승인 및 통제, 감독 수행',
                    'threatcode' => 'TC2-04',
                ),
            171 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-89',
                    'clause' => '원격 유지보수 및 진단 활동에 대한 감시가 이루어지는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '원격 유지보수 및 진단 활동에 대한 감시가 이루어지지않아, 해당 접근을 통한 중요정보 노출이 가능한 위험',
                    'protection_plan' => '원격 유지보수 및 진단 활동에 대한 감시',
                    'threatcode' => 'TC1-08',
                ),
            172 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-90',
                    'clause' => '암호키에 대한 관리지침이 마련되어 있고 이에 따라 관리되고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '암호키에 대해 관리지침이 수립되지 않아, 암호키의 관리가 이루어지지 않을 위험',
                    'protection_plan' => '암호키에 대한 관리지침 마련 및 암호키 관리',
                    'threatcode' => 'TC1-11',
                ),
            173 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-91',
                    'clause' => '암호키를 복구하기 위한 복구 절차가 수립되고 복구 내역이 확인되는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '암호키 복구 내역의 확인 및 무결성 입증이 어려운 위험',
                    'protection_plan' => '암호키 복구 절차 수립 및 복구 내역 기록',
                    'threatcode' => 'TC1-11',
                ),
            174 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-92',
                    'clause' => '침입차단 및 탐지 도구는 조직의 보안 정책과 규칙에 적합하게 설치되어 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '침입차단 및 탐지 도구의 설치가 미흡하여, 침입차단 및 침입탐지가 어려운 위험',
                    'protection_plan' => '침입차단 및 탐지 도구를 보안 정책과 규칙에 적합하게 설치',
                    'threatcode' => 'TC1-01',
                ),
            175 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-93',
                    'clause' => '공중망 및 사설망 통신경로에 대한 신뢰성을 평가하고 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '공중망 및 사설망 통신경로를 통한 네트워크 공격이 발생 가능한 위험 ',
                    'protection_plan' => '공중망 및 사설망 통신경로에 대한 신뢰성 평가 기준 및 실시',
                    'threatcode' => 'TC4-03',
                ),
            176 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-94',
                    'clause' => '스팸 메일 수신을 줄이기 위한 방안(스팸차단 솔루션)이 마련되어 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '스팸 메일 차단이 미흡하여, 스팸 메일을 통한 악성코드 및 바이러스에 감염 가능한 위험',
                    'protection_plan' => '스팸 메일 차단을 위한 방안을 마련',
                    'threatcode' => 'TC3-12',
                ),
            177 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-95',
                    'clause' => '홈페이지 게시 자료에 대해 게시 절차를 마련하고 시행하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '홈페이지 자료 게시 절차가 미흡하여, 홈페이지를 통해 중요정보 및 개인정보의 노출 및 유출이 가능한 위험',
                    'protection_plan' => '홈페이지에 자료 게시 시 절차 수립 및 시행',
                    'threatcode' => 'TC4-05',
                ),
            178 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '운영관리',
                    'depth' => 'A-96',
                    'clause' => '업무용 시스템 및 홈페이지 등 정보시스템의 소스코드를 관리하는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '업무용 시스템 및 홈페이지의 소스코드 관리가 미흡하여, 소스코드 내 중요정보의 노출이 가능한 위험',
                    'protection_plan' => '업무용 시스템 및 홈페이지 등의 소스코드를 안전하게 관리',
                    'threatcode' => 'TC4-07',
                ),
            179 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '업무 연속성 관리',
                    'depth' => 'A-36',
                    'clause' => '업무복구목표와 요구사항에 적합한 업무연속성 전략을 수립하였는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '업무연속성 전략을 수립이 미흡하여, 업무복구목표 내 업무 연속성 복구가 이루어지지 않을 위험',
                    'protection_plan' => '업무복구목표에 적합한 업무연속성 전략을 수립',
                    'threatcode' => 'TC1-03',
                ),
            180 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '업무 연속성 관리',
                    'depth' => 'A-97',
                    'clause' => '모의 훈련 등을 통한 업무 연속성 관리가 지속적으로 검토되고 있으며 조직내의 변경이 있을 경우 이에 대한 사항이 반영되고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '업무 연속성 대책 및 관리의 검토가 이루어지지않아, 비상상황 시 업무 연속성 절차에 따른 실행이 미흡한 위험',
                    'protection_plan' => '모의 훈련 등을 통해 업무 연속성 관리의 주기적인 검토 및 변경사항 반영',
                    'threatcode' => 'TC1-03',
                ),
            181 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '업무 연속성 관리',
                    'depth' => 'A-98',
                    'clause' => '보안중요성이 높은 등급의 시스템들은 이중화하여 관리하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '보안중요성이 높은 시스템들을 이중화하지 못해, 장애발생 시 서비스가 정상적으로 제공되지 않는 위험',
                    'protection_plan' => '보안중요성이 높은 시스템을 이중화하여 관리',
                    'threatcode' => 'TC3-05',
                ),
            182 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '업무 연속성 관리',
                    'depth' => 'A-99',
                    'clause' => '백업은 정기적으로 수행하고 물리적으로 분리된 지역에 보관하는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정기적인 백업을 하지않으며 물리적으로 분리된 지역에 별도 보관하지 않을 시, 백업데이터나 백업매체의 분실,재난에 대한 대처가 불가능한 위험',
                    'protection_plan' => '중요정보가 저장된 백업매체를 물리적으로 떨어진 장소에 소산보관',
                    'threatcode' => 'TC1-02',
                ),
            183 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '사고대응',
                    'depth' => 'A-37',
                    'clause' => '침해사고 발생시 신속한 보안사고 보고를 위한 절차가 문서화되어 있고 이에 따라 신속한 보고가 이루어지고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '침해사고 발생 시 정해진 절차에 따른 사고 경위 분석 및 보고가 미흡하여 적절한 조치, 대응이 이루어지지 않을 위험',
                    'protection_plan' => '명문화된 침해사고 보고체계 수립, 침해사고 대응 체계에 따른 보고 수행',
                    'threatcode' => 'TC1-01',
                ),
            184 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '사고대응',
                    'depth' => 'A-38',
                    'clause' => 'DDoS 대응체계를 수립하고 주기적인 훈련을 실시하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'DDoS 대응체계 수립이 미흡하고, 주기적인 훈련이 없을 경우 DDoS 발생 시 효과적으로 대응하지 못할 위험',
                    'protection_plan' => 'DDoS 모니터링 및 대응 방법, 절차, 대응 조직 및 인력, 보고 및 승인 방법 등을 포함한 대응체계를 수립하고 주기적인 훈련실시',
                    'threatcode' => 'TC1-03',
                ),
            185 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '사고대응',
                    'depth' => 'A-39',
                    'clause' => '개인정보보호를 위해 DB암호화등 개인정보유출에 대한 방안이 마련 되어 있는가? ',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보유출에 대한 방안 마련이 미흡하여, 개인정보유출 시 관련 법령에 따른 벌금, 징계 등이 발생할 위험',
                    'protection_plan' => '개인정보유출에 대한 방안 마련',
                    'threatcode' => 'TC8-01',
                ),
            186 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '사고대응',
                    'depth' => 'A-100',
                    'clause' => '부정접근 사례나 보안사고 내역을 지속적으로 모니터링 하고 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '부정접근, 보안사고 내역을 지속적으로 모니터링하지 않아, 부정접근 또는 보안사고 발생 시 조치 및 대응이 어려운 위험',
                    'protection_plan' => '부정접근 사례 및 보안사고 내역을 지속적으로 모니터링',
                    'threatcode' => 'TC1-01',
                ),
            187 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '사고대응',
                    'depth' => 'A-101',
                    'clause' => '보안사고 유형, 범위, 영향 등을 포함한 보안사고 분석이 기록되어 관리 되는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '보안사고 분석이 미흡하여, 발생한 보안사고에 대해 적절한 사후 조치 및 재발 방지대책 수립 등이 이루어지지 않을 위험',
                    'protection_plan' => '보안사고 유형, 범위, 영향 등을 포함하여 보안사고 분석을 기록 및 관리',
                    'threatcode' => 'TC1-04',
                ),
            188 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '사고대응',
                    'depth' => 'A-102',
                    'clause' => '보안 취약점 및 사고 발생시 이에 대한 보완작업 절차를 마련하고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '보안 취약점 및 사고에 대한 보완작업이 미흡하여, 해당 취약점을 통해 보안사고가 재발 가능한 위험',
                    'protection_plan' => '보안 취약점 및 사고에 대한 보완작업 절차를 마련',
                    'threatcode' => 'TC1-04',
                ),
            189 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '사고대응',
                    'depth' => 'A-103',
                    'clause' => '사이버침해사고 발생 후 재발방지 대책을 수립하고 시행하였는가? ',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '침해사고 발생 시 정해진 절차에 따른 사고 경위 분석 및 보고가 미흡하여 적절한 조치, 대응이 이루어지지 않을 위험',
                    'protection_plan' => '침해사고 분석 및 재발방지를 위한 활동 수행
- 재발방지대책 수립 및 침해사고 대응절차 변경 검토',
                    'threatcode' => 'TC1-04',
                ),
            190 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '사고대응',
                    'depth' => 'A-104',
                    'clause' => '침해사고 대응계획 즉 대응범위, 역할, 임무, 대응절차 등이 문서화되어 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '침해사고 대응절차 및 체계 구축이 미흡하여 사고 발생시 효과적으로 대응하지 못할 위험',
                    'protection_plan' => '침해사고 모니터링 및 대응 방법, 절차, 대응 조직 및 인력, 보고 및 승인 방법 등을 포함하여 문서화
- 침해사고 대응절차/매뉴얼 등',
                    'threatcode' => 'TC1-01',
                ),
            191 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '사고대응',
                    'depth' => 'A-105',
                    'clause' => '사이버위기 ‘주의’이상 경보 발령 및 피해발생 등 필요시 대응할 수 있는 ‘긴급대응반’이 구성되어 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '긴급대응반이 구성되지 않아, 침해사고 및 피해발생 등에 대해 체계적이고 신속한 대응이 어려운 위험',
                    'protection_plan' => '사이버위기 ‘주의’이상 경보 발령 및 피해발생 등 필요시 대응할 수 있는 ‘긴급대응반’을 구성',
                    'threatcode' => 'TC1-03',
                ),
            192 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '사고대응',
                    'depth' => 'A-106',
                    'clause' => '침해사고시 외부기관 및 전문가들과의 대응협조체계가 구축되어 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '침해사고 대응절차 및 체계 구축이 미흡하여 사고 발생시 효과적으로 대응하지 못할 위험',
                    'protection_plan' => '침해사고의 모니터링, 대응 및 처리와 관련된 외부전문가, 전문업체, 전문기관(KISA) 등과의 협조체계 수립',
                    'threatcode' => 'TC1-01',
                ),
            193 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '사고대응',
                    'depth' => 'A-107',
                    'clause' => '침해사고 대응절차 및 방법 숙지를 위해 정기적인 교육을 실시하는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '침해사고 대응 절차를 임직원들이 숙지할 수 있도록 한 모의훈련의 부족에 따른 실제 상황에서의 실효성 부재 위험',
                    'protection_plan' => '침해사고 대응절차에 관한 모의훈련계획을 수립하고 이에 따라 주기적으로 훈련 실시',
                    'threatcode' => 'TC1-04',
                ),
            194 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '사고대응',
                    'depth' => 'A-108',
                    'clause' => '서비스 거부 공격에 대해 공격 정도에 따른 대응 방안이 수립되어 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '공격정도에 따른 서비스 거부 공격에 대한 대응방안이 수립되지 않아, 서비스 거부 공격 발생 시 신속하고 체계적인 대응이 어려운 위험',
                    'protection_plan' => '공격정도에 따른 서비스 거부 공격의 대응 방안 수립 ',
                    'threatcode' => 'TC3-11',
                ),
            195 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '사고대응',
                    'depth' => 'A-109',
                    'clause' => '내부의 DDoS공격방지(그린DDoSZone)를 위한 대응방안이 있는가? ',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'DDoS 발생 시 효과적으로 대응하지 못할 위험',
                    'protection_plan' => '내부에 DDoS 공격방지를 위한 대응방안 수립',
                    'threatcode' => 'TC3-11',
                ),
            196 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '감사',
                    'depth' => 'A-110',
                    'clause' => '정보시스템 관련 법, 규제, 계약상의 요구사항을 정의하고 문서화하고 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '정보시스템 관련 법, 규제, 계약상의 요구사항을 정의 및 문서화하지 않아, 정보시스템 운영 및 설계 시 법, 규제, 계약상의 요구사항을 만족하기 어려운 위험',
                    'protection_plan' => '정보시스템 관련 법, 규제, 계약상의 요구사항을 정의 및 문서화',
                    'threatcode' => 'TC8-01',
                ),
            197 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '감사',
                    'depth' => 'A-111',
                    'clause' => '특허권 및 저작권법, 컴퓨터프로그램보호법 등 관련 법규를 준수하고 있는가?(불법 복제 및 해적판 소프트웨어의 사용 금지 등)',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '특허 및 저작권, SW 관련 법규위반에 따른 벌금, 징계 등',
                    'protection_plan' => '불법 소프트웨어 사용 여부 점검 등 주기적인 점검 활동 및 관련 법규 준수에 따른 홍보활동 수행',
                    'threatcode' => 'TC8-01',
                ),
            198 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '감사',
                    'depth' => 'A-112',
                    'clause' => '보안사고 처리, 계약증빙 및 소송 등을 위한 적정한 증거자료 확보에 관한 지침이 존재하고, 이에 따라 이행되고 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '보안사고 처리, 계약증빙 및 소송 등을 위한 증거자료 확보가 미흡하여, 계약증빙 및 소송 등에서 필요한 사항에 대해 증빙하지 못하는 위험',
                    'protection_plan' => '보안사고 처리, 계약증빙 및 소송 등을 위한 적정한 증거자료 확보에 관한 지침 수립 및 이행',
                    'threatcode' => 'TC1-11',
                ),
            199 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '감사',
                    'depth' => 'A-113',
                    'clause' => '주기적으로 보안감사계획을 수립하고 시행하고 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '보안감사 미흡으로, 보안운영 현황의 검토 및 개선이 어려운 위험',
                    'protection_plan' => '주기적인 보안감사계획 수립 및 시행',
                    'threatcode' => 'TC1-01',
                ),
            200 =>
                array (
                    'type' => 'Infra1',
                    'domain' => '감사',
                    'depth' => 'A-114',
                    'clause' => '감사결과를 관리책임자에게 보고하여 적절한 사후관리를 시행하고 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '감사결과에 대한 사후관리의 당위성 확보가 어려운 위험',
                    'protection_plan' => '관리책임자에게 감사결과 보고 및 사후관리 시행',
                    'threatcode' => 'TC1-13',
                ),
            201 =>
                array (
                    'type' => 'Infra2',
                    'domain' => '접근통제',
                    'depth' => 'P-1',
                    'clause' => '주요 시스템에 대한 별도의 출입통제를 실시하거나 이중의 보호장치를 설치하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '주요 시스템에 대한 별도의 출입통제 및 이중 보호장치 설치가 미흡하여, 주요 시스템 접근의 별도 통제가 어려운 위험',
                    'protection_plan' => '주요 시스템에 대한 별도의 출입통제 실시 또는 보호장치 설치',
                    'threatcode' => 'TC1-04',
                ),
            202 =>
                array (
                    'type' => 'Infra2',
                    'domain' => '접근통제',
                    'depth' => 'P-2',
                    'clause' => '보호구역의 출입에 관한 정책과 절차가 수립되어 있으며 이에 따라 출입통제가 되고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '보호구역의 출입통제가 미흡하여, 비인가자의 출입이 가능한 위험',
                    'protection_plan' => '보호구역의 출입에 관한 정책, 절차 수립 및 출입통제',
                    'threatcode' => 'TC1-11',
                ),
            203 =>
                array (
                    'type' => 'Infra2',
                    'domain' => '접근통제',
                    'depth' => 'P-8',
                    'clause' => '민감한 시설에 대해 물리적으로 접근하는 사람들의 출입기록 및 허가의 타당성을 주기적으로 검토하는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '민감한 시설에 대해  출입기록 및 허가의 타당성 검토가 미흡하여, 권한 만료자 및 불필요한 접근에 대해 식별하지 못할 위험',
                    'protection_plan' => '민감한 시설에 대해 출입기록 및 허가의 타당성을 주기적으로 검토',
                    'threatcode' => 'TC6-17',
                ),
            204 =>
                array (
                    'type' => 'Infra2',
                    'domain' => '감시통제',
                    'depth' => 'P-3',
                    'clause' => '주요시설의 출입구와 전산실 및 통신장비실 내부에 CCTV를 설치하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CCTV 운영이 미흡하여, 주요시설의 출입구와 전산실 및 통신장비실 내부의 감시 및 모니터링이 어려운 위험',
                    'protection_plan' => '주요시설의 출입구와 전산실 및 통신장비실 내부에 CCTV 설치',
                    'threatcode' => 'TC1-04',
                ),
            205 =>
                array (
                    'type' => 'Infra2',
                    'domain' => '감시통제',
                    'depth' => 'P-4',
                    'clause' => 'CCTV 운용 시 중계·관제서버, 관리용 PC, 정보통신망 등에 대해 보안대책을 수립하는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CCTV 운영에 관한 관제서버, 관리용 PC 등의 보안대책이 미흡하여, CCTV 기록의 손실 및 변조가 가능한 위험',
                    'protection_plan' => 'CCTV 운용 시 관제서버, 관리용 PC, 정보통신망 등에 대한 보안대책 수립',
                    'threatcode' => 'TC7-02',
                ),
            206 =>
                array (
                    'type' => 'Infra2',
                    'domain' => '감시통제',
                    'depth' => 'P-5',
                    'clause' => '주요시설에 대한 출입기록은 출입일로부터 일정기간 이상 보관하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '주요시설에 대한 출입기록 보관이 미흡하여, 사고발생 시 비인가자의 출입 및 이상 출입의 확인이 불가능한 위험',
                    'protection_plan' => '주요시설에 대한 출입기록을 일정기간 이상 보관',
                    'threatcode' => 'TC7-01',
                ),
            207 =>
                array (
                    'type' => 'Infra2',
                    'domain' => '감시통제',
                    'depth' => 'P-6',
                    'clause' => '외부인에 대해서 출입증을 발급하고, 출입권한은 출입목적이 필요한 구역내로 한정하는가? ',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '외부인의 출입권한을 과도하게 부여하여, 비인가된 구역에 접근 가능한 위험',
                    'protection_plan' => '외부인의 출입권한을 목적에 필요한 최소한으로 제한',
                    'threatcode' => 'TC2-01',
                ),
            208 =>
                array (
                    'type' => 'Infra2',
                    'domain' => '감시통제',
                    'depth' => 'P-9',
                    'clause' => '제한구역에서의 작업에 대한 추가적인 통제 수단 및 안내 지침이 존재하는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '제한구역 내 작업에 대한 통제가 미흡하여, 제한구역 내  취약점이 발생 가능한 위험',
                    'protection_plan' => '제한구역 에서의 작업에 대한 통제 수단 및 지침 수립',
                    'threatcode' => 'TC1-04',
                ),
            209 =>
                array (
                    'type' => 'Infra2',
                    'domain' => '감시통제',
                    'depth' => 'P-10',
                    'clause' => '전산 장비실에 외부협력업체 출입 시 내부 임직원이 상시 동행하는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '전산 장비실 내 내부 임직원이 동행없이 외부협력업체가 출입 가능하여, 외부직원에 대한 통제가 어려운 위험',
                    'protection_plan' => '전산 장비실에 외부협력업체 출입 시 내부 임직원이 상시 동행',
                    'threatcode' => 'TC1-08',
                ),
            210 =>
                array (
                    'type' => 'Infra2',
                    'domain' => '감시통제',
                    'depth' => 'P-11',
                    'clause' => '시각적으로 구분이 가능한 신분증을 가지고 있으며 패용하고 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '신분증을 통해 신원을 시각적으로 구분하지 못해, 비인가자를 구분하기 힘든 위험',
                    'protection_plan' => '시각적으로 구분이 가능한 신분증을 패용',
                    'threatcode' => 'TC2-01',
                ),
            211 =>
                array (
                    'type' => 'Infra2',
                    'domain' => '감시통제',
                    'depth' => 'P-12',
                    'clause' => '유리창 내 파손감지기, 진동감지기 등 침입감지와 관련된 장비를 설치하여 감시하고 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '유리창 내 침입감지 장비가 설치되지 않아, 유리창을 통한 비인가자의 침입탐지가 어려운 위험',
                    'protection_plan' => '유리창 내 침입감지 장비 설치 및 감시',
                    'threatcode' => 'TC1-04',
                ),
            212 =>
                array (
                    'type' => 'Infra2',
                    'domain' => '전력보호',
                    'depth' => 'P-7',
                    'clause' => '전원공급 이상이나 기타 전기관련 사고로부터 장비가 보호되고 있는가? (UPS, 비상발전기, 이중전원선 등의 설비)',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '전원공급 이상이나 기타 전기관련 사고로부터 장비가 보호되지 않아 발생할 위험 (UPS, 비상발전기, 이중전원선 등의 설비)',
                    'protection_plan' => 'UPS, 비상발전기, 이중전원선 등 전원공급 설비 구축',
                    'threatcode' => 'TC3-03',
                ),
            213 =>
                array (
                    'type' => 'Infra2',
                    'domain' => '전력보호',
                    'depth' => 'P-13',
                    'clause' => '전원공급 이상이나 기타 전기관련 사고로부터 장비를 보호하기 위해 설비 상태에 대해 정기적으로 검토하는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '전원공급 및 전기관련 장비의 주기적인 점검이 미흡하여, 전기관련 사고가 발생할 위험',
                    'protection_plan' => '전원공급 및 전기관련 장비 등의 설비 상태를 정기적으로 검토',
                    'threatcode' => 'TC3-03',
                ),
            214 =>
                array (
                    'type' => 'Infra2',
                    'domain' => '전력보호',
                    'depth' => 'P-14',
                    'clause' => '전원선 및 통신선은 도청이나 손상으로부터 보호되고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '전원선 및 통신선은 도청이나 손상으로부터 보호되지 않아 발생할 위험',
                    'protection_plan' => '전원선과 통신선을 점진적으로 분리 및 이격하고, duct/tray 등 보호관을 사용',
                    'threatcode' => 'TC3-04',
                ),
            215 =>
                array (
                    'type' => 'Infra2',
                    'domain' => '전력보호',
                    'depth' => 'P-15',
                    'clause' => '누전이 발생하였을 때 이를 차단할 수 있도록 누전차단기 또는 누전경보기가 설치되어 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '누전 발생으로 인해 서버와 케이블의 손상 및 화재가 발생할 위험',
                    'protection_plan' => '누전차단기 또는 누전경보기를 설치',
                    'threatcode' => 'TC3-01',
                ),
            216 =>
                array (
                    'type' => 'Infra2',
                    'domain' => '환경통제',
                    'depth' => 'P-16',
                    'clause' => '소방훈련과 같은 재해훈련 시 비상탈출 및 복귀절차가 확립되어 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '재해발생 시 비상탈출 및 복귀절차가 확립되지 않아 신속하게 대피 및 복구하지 못할 위험',
                    'protection_plan' => '비상탈출 및 복귀절차에 따른 훈련실시',
                    'threatcode' => 'TC1-03',
                ),
            217 =>
                array (
                    'type' => 'Infra2',
                    'domain' => '환경통제',
                    'depth' => 'P-17',
                    'clause' => '물리적 중요도에 따라 제한구역, 통제구역 등으로 분류하는 다단계 보호 대책이 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '물리적 중요도에 따라 구역을 분리하지 못하여, 중요도에 따른 보호대책을 수립 운영하지 못할 위험',
                    'protection_plan' => '물리적 중요도에 따라 구역을 분류하는 대책 수립',
                    'threatcode' => 'TC1-04',
                ),
            218 =>
                array (
                    'type' => 'Infra2',
                    'domain' => '환경통제',
                    'depth' => 'P-18',
                    'clause' => '제한구역의 선택, 설계시 화재, 홍수, 폭발, 폭동 혹은 다른 형태의 자연재해 또는 인재로 인한 피해가능성을 고려하였는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '제한구역 선택, 설계시 자연재해 또는 인재 등으로 인한 피해가능성의 고려가 미흡하여, 자연재해 또는 인재 등으로 인한 피해 발생 가능성이 높은 위험',
                    'protection_plan' => '제한구역 선택, 설계시 자연재해 및 인재 등으로 인한 피해가능성을 고려',
                    'threatcode' => 'TC3-01',
                ),
            219 =>
                array (
                    'type' => 'Infra2',
                    'domain' => '환경통제',
                    'depth' => 'P-19',
                    'clause' => '데이터센터는 물리적, 환경적 위험이 적은 곳에 위치하고 건물구조가 안정성을 확보하고 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '물리적, 환경적 위험 고려와 건물구조의 안전성 확보가 미흡하여, 재해발생 시 주요 장비의 손상 및 파손이 발생 가능한 위험',
                    'protection_plan' => '데이터센터 선택, 설계 시 물리적, 환경적 위험 고려 및 건물구조의 안전성 확보',
                    'threatcode' => 'TC3-01',
                ),
            220 =>
                array (
                    'type' => 'Infra2',
                    'domain' => '환경통제',
                    'depth' => 'P-20',
                    'clause' => '주요장비, 대체시스템 및 자료들이 화재, 습도 등의 환경재해로부터 보호되는 적절한 곳에 배치되어 보호되고 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '주요장비 및 대체시스템과 자료의 배치가 화재 등을 고려하지 않아, 화재 등으로 인한 손상 및 파손 등이 발생 가능한 위험',
                    'protection_plan' => '주요장비, 대체시스템 및 자료들을 화재, 습도 등 환경재해로부터 보호되는 곳에 배치',
                    'threatcode' => 'TC3-01',
                ),
            221 =>
                array (
                    'type' => 'Infra2',
                    'domain' => '환경통제',
                    'depth' => 'P-21',
                    'clause' => '전산실에 24시간 항온, 항습을 유지하기 위하여 온습도 측정이 가능하도록 항온항습기가 설치되어 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '항온, 항습이 유지되지 못하여 화재 등이 발생 가능한 위험',
                    'protection_plan' => '전산실에 항온항습기를 설치 운영',
                    'threatcode' => 'TC3-01',
                ),
            222 =>
                array (
                    'type' => 'Infra2',
                    'domain' => '환경통제',
                    'depth' => 'P-22',
                    'clause' => '전산실은 천장을 통하여 외부와의 왕래가 불가능하도록 전산실의 벽면과 접한 천장을 차단하는 조치가 되어 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '외부에서 천장을 통하여 비인가자의 침입이 가능한 위험',
                    'protection_plan' => '전산실의 벽면과 접한 천장을 외부에서 왕래가 불가능하도록 차단',
                    'threatcode' => 'TC6-17',
                ),
            223 =>
                array (
                    'type' => 'Infra2',
                    'domain' => '환경통제',
                    'depth' => 'P-23',
                    'clause' => '방재센터는 화재감지센서의 작동상황이 실시간으로 파악되도록 하고, 화재발생시에 경보신호를 통해 상황을 알 수 있도록 화재감지센서와 연동된 경보장치가 설치되어 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '화재 발생으로 인한 경보장치가 미흡하여, 화재 발생 시 신속한 대응 및 조치가 어려운 위험',
                    'protection_plan' => '화재발생 시 경보신호를 위한 화재감지센서와 연동된 방재센터 및 경보장치를 설치',
                    'threatcode' => 'TC3-01',
                ),
            224 =>
                array (
                    'type' => 'Infra2',
                    'domain' => '환경통제',
                    'depth' => 'P-24',
                    'clause' => '주요시설(중앙감시실, 전산실, 전력관련시설, 통신장비실, 방재센터 등)에는 기존 조명설비의 작동이 멈추는 경우에도 작업이 가능하도록 비상조명이 설치되어 있는가?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '주요시설의 비상조명의 설치가 미흡하여, 재해 등 비상상황 발생 시 조명설비의 미작동으로 인해 대응 및 조치가 미흡할 위험',
                    'protection_plan' => '주요시설(중앙감시실, 전산실, 전력관련시설, 통신장비실, 방재센터 등)에 비상조명 설치',
                    'threatcode' => 'TC1-03',
                ),
            225 =>
                array (
                    'type' => 'Infra2',
                    'domain' => '환경통제',
                    'depth' => 'P-25',
                    'clause' => '배달 및 하역구역은 비인가 지역과 격리되어 보호되고 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '배달 및 하역구역을 통해 비인가자의 침입이 가능한 위험',
                    'protection_plan' => '배달 및 하역구역을 비인가 지역과 격리',
                    'threatcode' => 'TC6-17',
                ),
            226 =>
                array (
                    'type' => 'Infra2',
                    'domain' => '환경통제',
                    'depth' => 'P-26',
                    'clause' => '단위면적당 규정하중을 견딜 수 있도록 설계되어 있는가?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '단위면적당 규정하중을 견딜 수 없어 배치된 장비의 손상 및 파손 등이 발생 가능한 위험',
                    'protection_plan' => '설계 시 단위면적당 규정하중을 견딜 수 있도록 고려',
                    'threatcode' => 'TC3-01',
                ),
            227 =>
                array (
                    'type' => 'ISO1',
                    'domain' => '조직의 상황',
                    'depth' => '4.1',
                    'clause' => '조직은 조직의 목적과 연관되고 정보보호 경영시스템이 의도한 결과를 성취하는데 영향을 미치는 대내외적 사안들을 결정하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 경영시스템 운영에 영향을 미치는 대내외적 사안들을 고려하지 않아, 의도하지 않은 이슈 발생으로 인한 보안사고가 발생할 위험',
                    'protection_plan' => '정보보호 경영시스템 운영 전반에 대내외적 사안들을 고려하여 정보보호 관련 의사결정 기구를 구성하고 해당 기구를 통하여 검토 및 의사결정 진행',
                    'threatcode' => 'TC1-04',
                ),
            228 =>
                array (
                    'type' => 'ISO1',
                    'domain' => '조직의 상황',
                    'depth' => '4.2',
                    'clause' => '조직은 아래의 사항에 대해서 결정하고 있는가?
- 정보보호 경영시스템과 연관된 이해관계자
- 이해관계자들의 정보보호와 관련된 요구사항

* 이해당사자의 요구사항에는 법적 및 규제적 요구사항과 계약상 의무가 포함될 수 있다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 경영시스템 운영과 연관된 이해관계자 식별 및 이해관계자의 정보보호 관련 요구사항 충족 미흡으로 인하여, 체계적이고 안전한 정보보호 업무 수행 및 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '정보보호 경영시스템과 연관된 이해관계자를 명확히 식별하고, 이해관계자들의 정보보호와 관련된 요구사항을 파악하여 관련 지침 수립 및 운영',
                    'threatcode' => 'TC1-04',
                ),
            229 =>
                array (
                    'type' => 'ISO1',
                    'domain' => '조직의 상황',
                    'depth' => '4.3',
                    'clause' => '조직은 정보보호 경영시스템의 범위를 정하기 위한 경계 및 적용 가능성을 결정하고, 범위를 결정할 때 아래와 같은 사항을 고려하고 있는가?
1) 정보보호 경영시스템이 의도한 결과를 성취하는데 영향을 미치는 대내외적 사안들
2) 이해관계자들의 정보보호와 관련된 요구사항
3) 해당 조직 및 타 조직에서 수행되는 활동들 간의 연계성 및 의존관계

* 경영시스템의 범위는 문서화하여 관리해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '조직의 정보보호 경영시스템 운영을 위한 적용 가능성을 결정한 후 여러가지 사항을 고려하여 범위를 명확히 정의하고 문서화하지 않아, 정보보호 경영시스템의 적절한 운영, 통제, 개선이 어려울 위험',
                    'protection_plan' => '정보보호 경영시스템 운영에 필요한 적용 가능성을 결정하고, 체계적인 기준을 수립하여 정보보호 경영시스템 범위정의서 작성',
                    'threatcode' => 'TC1-04',
                ),
            230 =>
                array (
                    'type' => 'ISO1',
                    'domain' => '조직의 상황',
                    'depth' => '4.4',
                    'clause' => '조직은 본 국제표준 요구사항에 따라 정보보호 경영시스템의 계획수립, 구현, 유지관리 및 지속적인 개선을 수행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '구체적인 정보보호 경영시스템 운영 전반에 대한 계획을 수립하고 수립된 계획에 따른 지속적 개선이 미흡하여, 정보보호 경영시스템의 적절한 운영, 통제, 개선이 어려울 위험',
                    'protection_plan' => '구체적인 정보보호 경영시스템 운영을 위한 계획 수립 및 지속적 개선',
                    'threatcode' => 'TC1-04',
                ),
            231 =>
                array (
                    'type' => 'ISO1',
                    'domain' => '리더십',
                    'depth' => '5.1',
                    'clause' => '최고 경영진은 아래와 같은 활동을 통하여 정보보호 경영시스템에 대한 리더십과 의지를 보여주고 있는가?
1) 정보보호 정책과 목적이 수립되고 조직의 전략적 뱡향에 부합되는 것을 보장해야 한다.
2) 조직의 프로세스에 정보보호 경영시스템 요구사항이 통합되는 것을 보장해야 한다.
3) 정보보호 경영시스템이 유지되는데 필요한 자원을 보장해야 한다.
4) 정보보호 경영시스템 요구사항 준수 및 효과적인 정보보호 경영시스템의 중요성에 대한 의사소통이 이루어져야 한다.
5) 정보보호 경영시스템이 의도한 결과를 달성하는 것을 보장해야 한다.
6) 정보보호 경영시스템의 효과성에 기여하는 사람들에 대한 지휘와 지원이 이루어져야 한다.
7) 리더쉽을 발휘하여 지속적인 개선을 촉진하고 다른 관련 관리 역할을 지원해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 경영시스템 운영에 대한 최고 경영진의 적극적인 의지와 지원이 미흡하여, 실행력 저하 및 정보보호 경영시스템의 적절한 운영, 통제, 개선이 어려울 위험',
                    'protection_plan' => '정보보호 경영시스템 운영에 대한 최고 경영진의 적극적인 의지 및 지원',
                    'threatcode' => 'TC1-04',
                ),
            232 =>
                array (
                    'type' => 'ISO1',
                    'domain' => '리더십',
                    'depth' => '5.2',
                    'clause' => '최고 경영진은 다음과 같은 내용을 만족하는 정보보호 정책을 수립하고 있는가?
1 )조직의 목적에 적합해야 한다.
2) 정보보호 목적(6.2 참조)을 포함하거나 정보보호 목적을 설정하기 위한 프레임워크를 제공해야 한다.
3) 정보보호와 관련된 적용 가능한 요구사항을 만족시키고 정보보호 경영시스템의 지속적인 개선을 위한 의지를 포함해야 한다.
4) 정보보호 정책은 다음을 만족해야 한다.
- 정보보호 정책은 문서화해야 한다.
- 정보보호 정책은 조직 내에 공표되어야 한다.
- 관련 이해관계자들에게 제공해야 한다.',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호 경영시스템 수립에 필요한 사항의 체계적인 문서화 및 세부적인 정보보호 활동의 정의가 미흡하여, 체계적이고 일관된 보안업무 적용이 어려울 위험',
                    'protection_plan' => '정보보호 경영시스템 운영에 필요한 정보보호 정책 수립 및 공표',
                    'threatcode' => 'TC1-11',
                ),
            233 =>
                array (
                    'type' => 'ISO1',
                    'domain' => '리더십',
                    'depth' => '5.3',
                    'clause' => '최고 경영진은 다음과 같은 활동에 대한 정보보호와 관련된 역할에 따른 책임과 권한이 조직내에 할당되고 전달되었는지 확인하고 있는가?
1) 정보보호 경영시스템이 본 국제표준의 요구사항에 부합되는 것을 보장해야 한다.
2) 정보보호 경영시스템의 성과를 최고 경영진에게 보고해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 관련 직무별 역할 및 책임을 정의하여 최고 경영진의 검토가 이루어지지 않아, 정보보호 활동이 체계적으로 수행되지 않을 위험',
                    'protection_plan' => '정보보호 관련 담당자의 역할 및 책임을 정의하고 최고 경영진의 검토',
                    'threatcode' => 'TC1-01',
                ),
            234 =>
                array (
                    'type' => 'ISO1',
                    'domain' => '계획',
                    'depth' => '6.1.1',
                    'clause' => '조직은 정보보호 경영시스템 계획 수립 시 대내외적 사안들, 이해관계자 결정, 이해관계자들의 정보보호와 관련된 요구사항들을 고려하고, 아래와 같은 사항을 다루기 위해 필요한 위험 및 기회를 파악하고 있는가?
1) 정보보호 경영시스템이 의도한 결과에 달성할 수 있음을 보장해야 한다.
2) 원하지 않는 영향을 방지하거나 줄이고 지속적인 개선을 달성해야 한다.
3) 조직은 다음을 계획해야 한다.
- 조치사항에 대해 정보보호 경영시스템 프로세스에 통합 및 구현
- 조치사항에 대한 효과성 평가',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 경영시스템 계획 수립 시 위험 및 기회를 파악하지 않아, 체계적인 정보보호 경영시스템 운영 불가 및 의도하지 않은 결과가 발생할 위험',
                    'protection_plan' => '대내외적 사안들을 고려하여 위험 및 기회를 파악하고 정보보호 경영시스템 운영 계획 수립',
                    'threatcode' => 'TC1-04',
                ),
            235 =>
                array (
                    'type' => 'ISO1',
                    'domain' => '계획',
                    'depth' => '6.1.2',
                    'clause' => '조직은 아래 사항들을 충족하는 정보보호 위험평가 프로세스를 정의하고 적용하고 있는가?
1) 위험 수용기준, 정보보호 위험평가를 위한 기준을 포함하여 정보보호 위험기준을 수립하고 유지해야 한다.
2) 반복되는 정보보호 위험평가는 일관되고 유효하며 비교 가능한 결과가 나올 수 있도록 보장해야 한다.
3) 정보보호 위험 식별
- 정보보호 경영시스템 범위 내에서 정보보호 위험평가 프로세스를 적용하여 기밀성, 무결성 및 가용성의 손실과 관련된 위험 식별
- 위험의 소유자 식별
4) 정보보호 위험 분석
- 식별된 위험이 발생하였을 경우 초래되는 잠재적 결과 평가
- 식별된 위험의 발생 가능성에 대해 평가
- 위험 수준 결정
5) 정보보호 위험 평가
- 위험 분석 결과를 위험기준과 비교
- 위험처리를 위해 분석된 위험의 우선순위 결정

* 조직은 정보보호 위험평가 프로세스에 대해 문서화해야 합니다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '위험을 식별하고 평가할 수 있는 방법을 정의하여 위험관리 계획을 수립하고 정기적인 위험평가 를 수행하지 않아, 서비스 및 정보자산의 취약점과 법적 요구사항 준수 여부 등의 위험을 식별하지 못할 위험',
                    'protection_plan' => '위험관리 계획에 따른 정보보호 경영시스템 범위 전 영역에 대해 위험평가를 시행',
                    'threatcode' => 'TC1-02',
                ),
            236 =>
                array (
                    'type' => 'ISO1',
                    'domain' => '계획',
                    'depth' => '6.1.3',
                    'clause' => '조직은 아래의 사항들과 같이 정보보호 위험처리 프로세스를 정의하고 적용하고 있는가?
1) 위험평가 결과를 고려하여 적절한 위험처리 방안을 선택해야 한다.
2) 선택된 정보보호 위험처리 방안을 구현하기 위해 필요한 모든 통제사항을 결정해야 한다.
3) 결정된 통제사항과 부속서 A를 비교하고 필요한 통제사항이 누락되지 않았는지 확인해야 한다.
4) 필요한 통제사항의 선택 사유 및 구현 여부, 부속서 A의 통제사항 중 제외된 항목의 사유를 포함한 적용성 보고서(SoA)를 작성해야 한다.
5) 위험처리 계획을 수립해야 한다.
6) 위험처리 계획 및 위험 수용에 대한 위험 소유자의 승인을 획득해야 한다.

* 조직은 정보보호 위험처리 프로세스에 대해 문서화해야 합니다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '식별된 위험에 대한 처리 전략 및 보호대책 수립이 미흡하여, 적절한 위험처리를 통한 위험수준 감소가 어려운 위험',
                    'protection_plan' => '위험수준 감소를 위한 처리전략을 수립하고, 보호대책을 선정',
                    'threatcode' => 'TC1-02',
                ),
            237 =>
                array (
                    'type' => 'ISO1',
                    'domain' => '계획',
                    'depth' => '6.2',
                    'clause' => '조직은 적절한 기능 및 수준으로 아래 사항에 따라 정보보호 목적을 수립하고 있는가?
1) 정보보호 정책과의 일관성을 유지해야 한다.
2) 실현 가능한 수준에서 측정 가능해야 한다.
3) 적용 가능한 정보보호 요구사항과 위험평가 및 위험처리 결과 고려해야 한다.
4) 적절하게 전달되고 업데이트되어야 한다.
5) 정보보호 목적을 달성하기 위한 방법을 계획할 때 다음 사항에 대해 결정해야 합니다.
- 수행내용
- 필요한 자원
- 책임자
- 완료 시기
- 결과 평가 방법

* 조직은 정보보호 목적에 대해 문서화해야 합니다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 목적을 수립 및 목적 달성을 위한 계획 수립이 미흡하여, 체계적이고 적절한 정보보호 경영시스템 운영, 통제, 개선이 어려울 위험',
                    'protection_plan' => '적절한 기능 및 수준으로 정보보호 목적 및 목적 달성을 위한 계획 수립',
                    'threatcode' => 'TC1-04',
                ),
            238 =>
                array (
                    'type' => 'ISO1',
                    'domain' => '지원',
                    'depth' => '7.1',
                    'clause' => '조직은 정보보호 경영시스템의 계획 수립, 구현, 유지관리 및 지속적인 개선을 위해 필요한 자원을 파악하고 제공하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 경영시스템 운영에 필요한 자원 파악 및 제공이 미흡하여, 정보보호 경영시스템의 적절한 운영, 통제, 개선이 어려울 위험',
                    'protection_plan' => '정보보호 경영시스템 운영에 필요한 자원을 파악하여 적절한 자원 할당',
                    'threatcode' => 'TC1-04',
                ),
            239 =>
                array (
                    'type' => 'ISO1',
                    'domain' => '지원',
                    'depth' => '7.2',
                    'clause' => '조직은 아래의 사항을 수행하고 있는가?
1) 조직의 통제하에서 정보보호 성과에 영향을 미치는 작업을 수행하는 인력이 필요한 역량을 갖추고 있는지 파악해야 한다.
2) 적절한 교육, 훈련 또는 경력을 토대로 적격한 역량을 갖추었는지 보장해야 한다.
3) 해당되는 경우, 필요한 역량 확보를 위한 조치를 취하고 조치한 사항에 대한 효과성을 측정해야 한다.
4) 적격성의 증거를 문서화하여 유지해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 역량을 갖춘 인력 확보 미흡으로 인하여, 조직 전반의 정보보호 수준 저하 위험',
                    'protection_plan' => '정보보호에 필요한 역량을 갖춘 인력 채용 및 역량 확보를 위한 조치(직무 교육, 자격증 지원 등) 수행',
                    'threatcode' => 'TC1-09',
                ),
            240 =>
                array (
                    'type' => 'ISO1',
                    'domain' => '지원',
                    'depth' => '7.3',
                    'clause' => '조직의 통제 하에서 업무를 수행하는 인원은 아래의 사항을 인지하고 있는가?
- 정보보호 정책
- 개선된 정보보호 성과에 따른 이점을 포함한 정보보호 경영시스템의 효과성에 대한 자신의 기여도
- 정보보호 경영시스템의 요구사항 미준수에 따른 결과',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '임직원의 정보보호 정책 및 정보보호 경영시스템 요구사항 미 인지로 인하여, 보안기준에 적합하지 않은 업무를 수행할 위험',
                    'protection_plan' => '정보보호 정책 및 정보보호 경영시스템 요구사항에 대한 공표 및 교육 실시',
                    'threatcode' => 'TC1-09',
                ),
            241 =>
                array (
                    'type' => 'ISO1',
                    'domain' => '지원',
                    'depth' => '7.4',
                    'clause' => '조직은 정보보호 경영시스템과 관련하여 다음과 같은 사항을 포함한 대내외 의사소통의 필요성을 파악하고 있는가?
1) 의사소통 내용
2) 의사소통 시기
3) 의사소통 대상
4) 의사소통 주체
5) 효과적인 의사소통 프로세스',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 경영시스템과 관련한 대내외 의사소통의 필요성을 인지하지 못하여, 중요 정보보호 사안에 대한 즉시적이고 효율적인 의사결정이 지연될 위험',
                    'protection_plan' => '의사소통 내용, 시기, 대상, 주체 등을 결정하여 지속적인 대내외 의사소통 수행',
                    'threatcode' => 'TC1-09',
                ),
            242 =>
                array (
                    'type' => 'ISO1',
                    'domain' => '지원',
                    'depth' => '7.5.1',
                    'clause' => '조직의 정보보호 경영시스템은 다음과 같은 사항을 포함하고 있는가?
1) 본 국제표준에서 요구하는 문서화된 정보
2) 정보보호 경영시스템의 효과성을 위해서 조직에서 필요하다고 판단한 문서화된 정보',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호 경영시스템 운영에 필요한 문서화된 정보의 생성 및 관리 미흡으로 인하여, 정보보호 경영시스템에서 요구하는 문서 작성 누락 및 통제가 어려울 위험',
                    'protection_plan' => '정보보호 경영시스템에서 요구하는 사항의 문서화된 정보 생성 및 관리',
                    'threatcode' => 'TC1-11',
                ),
            243 =>
                array (
                    'type' => 'ISO1',
                    'domain' => '지원',
                    'depth' => '7.5.2',
                    'clause' => '문서화된 정보 생성 및 갱신 시 조직은 아래와 같은 사항이 적합하도록 보장하고 있는가?
1) 식별 및 설명(예 : 제목, 작성일, 작성자 또는 참조 번호)
2) 형식(예 : 언어, 소프트웨어 버전, 그래픽) 및 매체(예 : 서면, 전자문서)
3) 적합성, 타당성을 위한 검토 및 승인',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '문서화된 정보 생성 및 갱신 시 준수해야 할 사항에 대한 인식 및 교육 부족으로 인하여, 체계적이고 일관된 문서 관리가 어려울 위험',
                    'protection_plan' => '문서화된 정보 생성 및 갱신 방법에 대한 전사적인 교육 실시',
                    'threatcode' => 'TC1-09',
                ),
            244 =>
                array (
                    'type' => 'ISO1',
                    'domain' => '지원',
                    'depth' => '7.5.3',
                    'clause' => '본 국제표준 및 정보보호 경영시스템에서 요구되는 문서화된 정보는 다음과 같은 사항을 보장하도록 통제되고 있는가?
1) 문서화된 정보는 필요한 시기 및 장소에서 적절하게 사용 가능해야 한다.
2) 적절하게 보호되어야 한다.(예: 기밀성 훼손, 부적절한 사용, 무결성 손상으로 부터 보호)
3) 문서화된 정보의 통제를 위해 다음과 같은 활동을 수행해야 한다.
- 배포, 접근, 검색 및 사용
- 가독성을 확보하여 저장 및 보존
- 변경에 대한 통제
- 유지 및 폐기

* 정보보호 경영시스템 계획 수립 및 운영상에 필요하다고 판단되는 외부 출처에 대한 문서화된 정보를 적절하게 식별하고 통제해야 한다.',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호 경영시스템 운영에 필요하다고 판단되는 문서화된 정보를 적절하게 식별하고 통제하지 않아, 즉각적이고 효율적인 문서 활용이 불가할 위험 ',
                    'protection_plan' => '정보보호 경영시스템 계획 수립 및 운영상에 필요하다고 판단되는 문서화된 정보를 적절하게 식별하고 통제',
                    'threatcode' => 'TC1-14',
                ),
            245 =>
                array (
                    'type' => 'ISO1',
                    'domain' => '운영',
                    'depth' => '8.1',
                    'clause' => '조직은 아래와 같은 사항을 준수하고 있는가?
1) 정보보호 요구사항을 충족하고, 식별된 위험에 대한 조치사항을 구현하는데 필요한 프로세스를 계획, 구현, 통제해야 한다.
2) 정보보호 목표를 달성하기 위한 계획을 수립해야 한다.
3) 계획에 따라 프로세스들이 수행되었음을 확신하기 위해 필요한 문서화된 정보 유지해야 한다.
4) 계획된 변경 사항을 통제하고 의도하지 않은 변경의 결과를 검토하여 필요한 경우 부정적인 영향을 완화하기 위한 조치를 이행해야 한다.
5) 외주 프로세스를 파악하고 통제해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '식별된 위험에 대한 처리 전략, 보호대책 수립 및 이행계획에 따른 진행 상황 검토 등을 수행하지 않아, 적절한 처리를 통한 위험수준 감소 및 정보보호 활동에 대한 실행력이 저하될 위험',
                    'protection_plan' => '위험수준 감소를 위한 처리전략, 보호대책을 선정하고 이행계획을 수립하여 진행 상황 및 변동 사항 등을 검토',
                    'threatcode' => 'TC1-04',
                ),
            246 =>
                array (
                    'type' => 'ISO1',
                    'domain' => '운영',
                    'depth' => '8.2',
                    'clause' => '조직은 계획된 주기에 따라 또는 주요 변경사항이 제시되거나 발생한 경우, 기존에 수립된 기준을 고려하여 위험평가를 수행하고, 정보보호 위험평가의 결과를 문서화된 정보로 유지하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '다양한 측면에서 발생 가능한 위험을 식별하고 평가할 수 있는 방법을 정의하지 못하여, 합리적이고 실질적인 위험평가가 수행되지 않을 위험',
                    'protection_plan' => '다양한 측면에서 발생 가능한 위험을 식별하고, 합리적이고 실질적으로 위험을 평가할 수 있는 방법을 정의',
                    'threatcode' => 'TC1-04',
                ),
            247 =>
                array (
                    'type' => 'ISO1',
                    'domain' => '운영',
                    'depth' => '8.3',
                    'clause' => '조직은 정보보호 위험처리 계획을 구현하고, 정보보호 위험평가의 결과를 문서화된 정보로 유지하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '식별된 위험에 대한 처리 전략, 보호대책 수립 및 위험평가 결과 보고서 작성 부재로 인하여, 위험을 식별하지 못하고 적절한 처리를 통한 위험수준 감소가 어려운 위험',
                    'protection_plan' => '위험평가에 대한 결과보고서 작성 및 위험수준 감소를 위한 처리전략, 보호대책을 선정',
                    'threatcode' => 'TC1-04',
                ),
            248 =>
                array (
                    'type' => 'ISO1',
                    'domain' => '성과측정',
                    'depth' => '9.1',
                    'clause' => '조직은 아래의 사항을 파악하여 정보보호 경영시스템의 효과성 및 정보보호 성과를 평가하고 있는가?
1) 정보보호 프로세스 및 통제항목을 포함한 측정 및 모니터링이 필요한 대상
2) 유효한 결과를 보장하기 위한 모니터링, 측정, 분석 및 평가에 대한 방법
3) 모니터링 및 측정 수행 시점
4) 모니터링 및 측정 주체
5) 모니터링 및 측정된 결과의 분석과 평가 시점
6) 결과에 대한 분석 및 평가 주체

* 모니터링 및 측정 결과에 대해 문서화하여 관리해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 경영시스템 효과성 및 정보보호 성과 평가를 위한 모니터링 및 측정 수행이 미흡하여, 정보보호 경영시스템 운영 활동 전반에 대한 효과성 검증이 어려울 위험 ',
                    'protection_plan' => '정보보호 경영시스템 효과성 및 정보보호 성과 평가를 위한 주기적인 모니터링 및 측정 수행',
                    'threatcode' => 'TC1-01',
                ),
            249 =>
                array (
                    'type' => 'ISO1',
                    'domain' => '성과측정',
                    'depth' => '9.2',
                    'clause' => '조직은 정보보호 경영시스템에 대해 아래의 사항을 확인하기 위한 정보를 제공하기 위해 계획된 주기에 의해서 내부감사를 수행하고 있는가?
1) 다음 사항을 준수해야 한다.
- 정보보호 경영시스템을 위한 조직 자체의 요구사항 준수 여부
- 본 국제 표준의 요구사항 준수 여부
2) 다음과 같은을 수행해야 한다.
- 주기, 방법, 책임, 계획 요구사항 및 보고를 포함한 심사 프로그램에 대한 계획, 수립, 구현 및 유지관리를 수행
- 감사는 프로세스의 중요성과 이전 심사의 결과 고려
3) 감사별 감사 기준 및 범위를 정의해야 한다.
4) 감사원 선정 및 감사 프로세스의 객관성 및 공정성을 보장하여 감사를 수행해야 한다.
5) 감사 결과가 관련 경영진에게 보고되는 것을 보장해야 한다.
6) 감사 및 감사 결과의 증적을 문서화 하여 관리해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '계획에 따른 독립성, 전문성을 갖춘 감사 인력을 통한 점검 및 점검 후 경영진 보고 등이 미흡하여, 관리체계 점검의 객관성 및 당위성 확보가 어려운 위험',
                    'protection_plan' => '객관성을 갖춘 감사인원을 통해 계획된 주기에 따라 관리쳬계 점검 수행 후 경영진에게 결과 보고',
                    'threatcode' => 'TC1-01',
                ),
            250 =>
                array (
                    'type' => 'ISO1',
                    'domain' => '성과측정',
                    'depth' => '9.3',
                    'clause' => '최고 경영진은 정보보호 경영시스템의 지속적인 적정성, 타당성 및 효과성을 보장하기 위해 다음과 같은 사항을 고려하여 계획된 주기로 검토를 수행하고 있는가?
1) 경영진 검토 시 다음과 같은 사항을 고려해야 한다.
- 이전에 수행한 경영진 검토에 따른 조치 상태
- 정보보호 경영시스템과 관련된 대내외 이슈 변화
2) 정보보호 성과에 대한 피드백에 다음 사항을 포함해야 한다.
- 부적합 및 시정조치 활동
- 모니터링 측정결과
- 감사 결과
- 정보보호 목적의 달성
3) 이해관계자들로부터 피드백을 받아 위험평가 결과 및 위험처리 계획 상태를 지속적으로 개선하기 위한 기회를 제공해야 한다.
4) 경영진 검토 결과에는 지속적인 개선 기회와 관련된 의사결정과 정보보호 경영시스템의 변경을 위한 요구를 포함해야 한다.

* 경영진 검토결과 증적을 문서화 하여 관리해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 경영시스템의 적정성, 타당성 등을 보장하기 위해 계획된 주기에 따른 최고 경영진의 검토 수행 미흡으로 인하여, 실행력 저하 및 정보보호 경영시스템의 적절한 운영, 통제, 개선이 어려울 위험',
                    'protection_plan' => '계획된 주기에 따른 최고 경영진의 정보보호 경영시스템 운영 전반에 대한 검토',
                    'threatcode' => 'TC1-01',
                ),
            251 =>
                array (
                    'type' => 'ISO1',
                    'domain' => '개선',
                    'depth' => '10.1',
                    'clause' => '부적합이 발생할 경우 조직은 아래의 사항들을 수행하고 있는가?
1) 다음을 포함하여 부적합에 대해 대처해야 한다.
- 부적합 통제 및 시정을 위한 조치
- 부적합 결과 처리
2) 부적합이 재발하거나 다른 곳에서 발생하지 않도록 다음과 같은 사항을 수행하여 부적합의 원인을 제거하기 위한 조치의 필요성을 평가해야 한다.
- 부적합 검토
- 부적합 원인 파악
- 유사한 부적합의 존재 또는 잠재적인 부적합의 발생 가능성 파악
3) 필요한 조치사항을 이행해야 한다.
4) 이행된 시정조치의 효과성을 검토해야 한다.
5) 필요한 경우 정보보호 경영시스템을 변경해야 한다.
6) 발생한 부적합의 영향에 따라 적절한 시정 조치를 이행해야 한다.
7) 다음 사항에 대한 증적으로 문서화 하여 관리해야 한다.
- 부적합의 성격 및 취해진 모든 후속 조치사항
- 시정조치의 결과',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '식별된 정보보호 경영시스템 상의 부적합 사항에 대한 분석 및 개선 대책을 수립하지 못하여, 식별된 부적합 사항의 문제점을 적절히 조치하지 못할 위험',
                    'protection_plan' => '식별된 정보보호 경영시스템 상의 부적합 사항에 대한 개선 대책 수립 및 이행',
                    'threatcode' => 'TC1-01',
                ),
            252 =>
                array (
                    'type' => 'ISO1',
                    'domain' => '개선',
                    'depth' => '10.2',
                    'clause' => '조직은 정보보호 경영시스템의 적합성, 적절성 및 효과성을 지속적으로 개선하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 경영시스템 운영 전반에 대한 지속적 개선이 미흡하여, 정보보호 경영시스템의 적절한 운영, 통제, 개선이 어려울 위험',
                    'protection_plan' => '구체적인 정보보호 경영시스템 운영을 위한 계획 수립 및 지속적 개선',
                    'threatcode' => 'TC1-04',
                ),
            253 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '정보보호정책',
                    'depth' => 'A.5.1.1',
                    'clause' => '정보보호 정책은 경영진에 의해 정의되고 승인되어야 하며, 모든 임직원과 관련 외부 조직들에게 공표되고 공유되어야 한다. ',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '경영진에 의한 정책 승인 미흡 및 임직원, 관련 외부 직원에게 수립된 정책을 공유하지 않아, 보안기준에 적합하지 않은 업무를 수행할 위험',
                    'protection_plan' => '정보보호정책 제·개정 시 경영진의 승인을 득한 후 관련 임직원 및 외부직원에게 공유',
                    'threatcode' => 'TC1-09',
                ),
            254 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '정보보호정책',
                    'depth' => 'A.5.1.2',
                    'clause' => '정보보호 정책은 계획된 주기에 따라 혹은 중대한 변화가 발생한 경우, 정책의 지속적인 적합성, 적절성, 효과성을 보장하기 위하여 검토되어야 한다.',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호 정책 검토 미흡으로 대내외 환경 변화를 반영하지 못할 위험',
                    'protection_plan' => '중대한 환경 변화 시 정보보호정책 및 정책시행 문서에 미치는 영향을 분석하고 제·개정 필요성 여부 검토',
                    'threatcode' => 'TC1-12',
                ),
            255 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '정보보호 조직',
                    'depth' => 'A.6.1.1',
                    'clause' => '모든 정보보호 책임은 명확히 정의되고 할당되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 관련 담당자의 직무별 역할이 불명확하여 정보보호 활동이 체계적으로 수행되지 않을 위험',
                    'protection_plan' => 'CEO에 의한 공식적인 정보보호 최고책임자 지정, 정보보호최고책임자의 자격요건, 정보보호 관련 담당자의 역할 및 책임 정의',
                    'threatcode' => 'TC1-07',
                ),
            256 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '정보보호 조직',
                    'depth' => 'A.6.1.2',
                    'clause' => '상충되는 직무와 책임의 영역은 허가되지 않았거나 의도하지 않은 수정 혹은 조직 내 자산의 오남용 가능성을 감소시키기 위하여 분리되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '주요 직무자에 대한 식별 및 직무 분리가 이뤄지지 않아, 의도적/비의도적 권한 오남용이 발생할 위험',
                    'protection_plan' => '직무의 권한 오남용을 예방하기 위하여 정보보호 관련 주요 직무 분리 기준을 수립하고 직무별 역할과 책임 명확화(직무기술서 작성 등)',
                    'threatcode' => 'TC6-06',
                ),
            257 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '정보보호 조직',
                    'depth' => 'A.6.1.3',
                    'clause' => '관련 상급기관과 적절한 연락체계가 유지되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '관련 상급기관과의 연락체계가 미흡하여 사고 발생시 효과적으로 대응하지 못할 위험',
                    'protection_plan' => '보안사고에 대하여 모니터링, 대응 및 처리와 관련된 외부전문가,전문업체, 전문기관(KISA) 등 관련 상급기관과의 협조체계 수립',
                    'threatcode' => 'TC1-01',
                ),
            258 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '정보보호 조직',
                    'depth' => 'A.6.1.4',
                    'clause' => '특수 이익집단이나 전문가 보안포럼 및 전문가 협회들과 적절한 연락체계가 유지되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '보안관련 전문가 및 업체와의 연락체계가 미흡하여 사고 발생시 효과적으로 대응하지 못할 위험',
                    'protection_plan' => '보안사고에 대하여 모니터링, 대응 및 처리와 관련된 외부전문가,전문업체, 전문기관(KISA) 등 관련 상급기관과의 협조체계 수립',
                    'threatcode' => 'TC1-01',
                ),
            259 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '정보보호 조직',
                    'depth' => 'A.6.1.5',
                    'clause' => '프로젝트의 유형과 관계 없이 프로젝트 관리 시 에는 정보보호 측면이 고려되어야 한다.',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '프로젝트 관리 시 정보보호 측면이 고려되지 않아 보안사고 발생 시 대응이 어렵고, 내부 악의적인 사용자에 의한 정보유출 등 보안사고가 발생할 위험',
                    'protection_plan' => '모든 프로젝트에 정보보호 기준을 수립/이행',
                    'threatcode' => 'TC1-10',
                ),
            260 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '정보보호 조직',
                    'depth' => 'A.6.2.1',
                    'clause' => '모바일 디바이스 사용으로 인하여 발생하는 위험을 관리하기 위하여 정책 및 이를 지원하는 보안 대책이 채택되어야 한다.',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '업무용 모바일 기기의 분리, 도난 등에 대한 보안대책이 미흡하여, 비인가된 사용자의 업무용 모바일 기기 사용이 가능할 위험',
                    'protection_plan' => '업무용 모바일 기기에 보안대책 적용(단말기 비밀번호 설정, 원격잠금, MDM, MAM, BYOD 등)',
                    'threatcode' => 'TC6-12',
                ),
            261 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '정보보호 조직',
                    'depth' => 'A.6.2.2',
                    'clause' => '원격 근무 시 접근, 처리, 저장되는 정보의 보호를 위하여 정책 및 보안 대책이 구현되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '스마트워크 사용에 대한 보안 대책 수립이 미흡하여 비인가 시스템 접근, 정보유출 등 보안사고가 발생할 위험',
                    'protection_plan' => '재택근무, 원격협업 등과 같은 원격업무 수행, 클라우드 환경을 이용한 스마트워크 환경에서 주요정보자산을 보호하기 위한 정책 및 절차가 수립/이행',
                    'threatcode' => 'TC1-02',
                ),
            262 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '인적자원 보안',
                    'depth' => 'A.7.1.1',
                    'clause' => '모든 입사 지원자에 대한 신원조회(백그라운드 검증)는 관련 법률, 지침, 윤리강령에 따라 수행해야 하고, 검증 수준은 비즈니스 요구 조건, 접근할 정보의 등급, 인지된 위험에 비례하여 수행해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '신원조회를 수행하지 않아 비즈니스 요구 조건, 접근할 정보의 등급, 인지된 위험에 비례하지 않는 업무 수행 시 보안사고가 발생할 위험',
                    'protection_plan' => '신규 인력 채용 시 백그라운드 검증 수행',
                    'threatcode' => 'TC1-09',
                ),
            263 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '인적자원 보안',
                    'depth' => 'A.7.1.2',
                    'clause' => '
임직원 및 계약자를 위한 고용계약서에는 정보보호를 위한 개인과 조직의 책임을 명시하여야 한다.
',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호서약서 미징구에 따른 정보보호 의식 수준 저하 및 책임을 묻기 어려울 위험',
                    'protection_plan' => '신규 인력 채용 시 정보보호 책임이 명시된 정보보호서약서 징구',
                    'threatcode' => 'TC1-09',
                ),
            264 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '인적자원 보안',
                    'depth' => 'A.7.2.1',
                    'clause' => '경영진은 모든 임직원 및 계약자들이 수립된 조직의 정책 및 절차에 따라 정보보호를 이행하도록 요구하여야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '임직원의 명시적인 정보보호 기준 미 인지로 보안기준에 적합하지 않은 업무를 수행할 위험',
                    'protection_plan' => '정보보호 관련 내부규정 제·개정 시 임직원 및 계약자들에게 공표 및 교육 시행',
                    'threatcode' => 'TC1-09',
                ),
            265 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '인적자원 보안',
                    'depth' => 'A.7.2.2',
                    'clause' => '모든 임직원 및 계약자들은 자신의 직무 기능과 연관된 조직의 정책과 절차에 대해 적절한 인식 교육 및 훈련과 정기적인 갱신 교육을 받아야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 교육 대상의 누락 또는 교육의 질적 저하로 인한 조직 전체 보안 수준 및 효율성이 저하될 위험',
                    'protection_plan' => '정보보호 관리체계 개요, 정보보호 관련 내부규정, 유관 법률, 침해사고 등을 포함하여 정기적으로 정보보호 교육 시행',
                    'threatcode' => 'TC1-09',
                ),
            266 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '인적자원 보안',
                    'depth' => 'A.7.2.3',
                    'clause' => '정보보호를 위반한 임직원에 대해 조치를 취할 수 있도록 공표된 공식 징계 프로세스가 있어야 한다.',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호 책임과 의무에 따른 상벌 규정이 불명확하여 정보보호 준수에 대한 미이행 및 위반자 처벌이 어려울 위험',
                    'protection_plan' => '정보보호 위반 임직원에 대한 공식 징계 프로세스 존재',
                    'threatcode' => 'TC1-10',
                ),
            267 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '인적자원 보안',
                    'depth' => 'A.7.3.1',
                    'clause' => '고용 종료나 직무 변경 이후에도 유효한 정보보호 책임과 의무사항이 정의되어야 하며, 임직원 또는 계약자에게 통지되고, 시행되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호서약서 미징구에 따른 정보보호 의식 수준 저하 및 책임을 묻기 어려울 위험',
                    'protection_plan' => '임직원 퇴직 및 직무 변경 시 별도의 비밀유지에 대한 서약서 징구',
                    'threatcode' => 'TC1-09',
                ),
            268 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '자산관리',
                    'depth' => 'A.8.1.1',
                    'clause' => '정보 및 정보처리 설비과 관련된 자산은 식별되어야 하고, 이 자산들은 목록화 되고 유지관리 되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '자산 목록의 갱신 관리가 미흡하여 자산 변동 사항이 적절히 반영되지 못할 위험',
                    'protection_plan' => '식별된 정보자산 별도 목록으로 관리',
                    'threatcode' => 'TC1-04',
                ),
            269 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '자산관리',
                    'depth' => 'A.8.1.2',
                    'clause' => '자산목록의 자산에는 소유자(책임자)가 지정되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '자산목록 소유자가 지정되지 않아 사고 발생 시 신속한 대응 및 책임소재를 묻기 어려울 위험',
                    'protection_plan' => '식별된 정보자산에 대한 책임자 및 관리자 지정',
                    'threatcode' => 'TC1-07',
                ),
            270 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '자산관리',
                    'depth' => 'A.8.1.3',
                    'clause' => '정보 및 정보처리 시설과 관련된 정보와 자산의 사용 승인 지침이 식별, 문서화 및 시행되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호관리체계 범위내의 모든 정보자산에 대한 식별 및 분류가 미흡하여 정보자산의 관리 소홀에 따른 사고가 발생할 위험 ',
                    'protection_plan' => '정보자산의 분류기준 수립 및 정보보호 관리체계 범위 내 모든 정보자산 식별',
                    'threatcode' => 'TC1-02',
                ),
            271 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '자산관리',
                    'depth' => 'A.8.1.4',
                    'clause' => '임직원, 계약자들은 고용, 계약, 협약의 종료와 함께 가지고 있던 조직의 모든 자산을 반환하여야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '퇴직 및 직무변경에 따른 자산반납, 권한회수 체계 및 절차가 미흡하여 퇴직자 등에 의한 자산분실, 정보유출 등 보안사고가 발생할 위험',
                    'protection_plan' => '조직 내 인력의 직무변경 혹은 퇴직 시 정보자산 반납, 접근권한 조정/회수, 결과 확인 등 수립된 절차에 따라 지체 없이 이행',
                    'threatcode' => 'TC6-06',
                ),
            272 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '자산관리',
                    'depth' => 'A.8.2.1',
                    'clause' => '정보는 그 법적 요구사항, 가치, 중요성 및 허가되지 않은 유출이나 수정시의 위험도와 민감도에 따라 분류되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '보안등급 분류가 미흡하여 중요정보가 안전하게 취급되지 않을 위험',
                    'protection_plan' => '정보자산의 중요도를 평가하기 위한 기준 수립',
                    'threatcode' => 'TC1-02',
                ),
            273 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '자산관리',
                    'depth' => 'A.8.2.2',
                    'clause' => '조직이 채택한 등급분류 체계에 따라 적절한 정보라벨 표시 절차를 개발하고 구현해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호관리체계 범위내의 모든 정보자산에 대한 식별 및 분류가 미흡하여 정보자산의 관리 소홀에 따른 사고가 발생할 위험 ',
                    'protection_plan' => '정보자산의 분류기준 및 중요도를 평가하기 위한 기준 수립',
                    'threatcode' => 'TC1-04',
                ),
            274 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '자산관리',
                    'depth' => 'A.8.2.3',
                    'clause' => '조직이 채택한 등급분류 체계에 따라 적절한 정보취급 절차를 개발하고 구현하여야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '보안등급 분류가 미흡하여 중요정보가 안전하게 취급되지 않을 위험',
                    'protection_plan' => '정보자산의 보안등급에 따른 취급절차(생성, 저장, 이용, 파기 등) 정의 및 이행',
                    'threatcode' => 'TC1-04',
                ),
            275 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '자산관리',
                    'depth' => 'A.8.3.1',
                    'clause' => '조직이 채택한 등급분류 체계에 따라 이동 가능한 매체의 관리 절차가 구현되어야 한다.',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '휴대용 저장매체 사용에 대한 통제 및 관리가 미흡하여, 중요 정보 유출, 악성코드 감염 등 보안사고가 발생할 위험',
                    'protection_plan' => '외장하드, USB, CD 등 휴대용 저장매체 취급(사용), 보관, 폐기, 재사용에 대한 정책 및 절차 수립·이행',
                    'threatcode' => 'TC4-08',
                ),
            276 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '자산관리',
                    'depth' => 'A.8.3.2',
                    'clause' => '매체는 더 이상 필요가 없을 경우, 공식적인 절차에 따라 안전하게 폐기되어야 한다.',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '정보시스템 저장매체의 폐기 기준 부재 및 불용처리 미흡으로 인한 매체 복구 가능 또는 정보가 유출될 위험',
                    'protection_plan' => '외부업체를 통해 저장매체를 폐기할 경우 폐기 절차 계약서 명시 및 완전한 폐기 확인',
                    'threatcode' => 'TC4-08',
                ),
            277 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '자산관리',
                    'depth' => 'A.8.3.3',
                    'clause' => '정보가 담겨있는 매체는 운반 중 비인가 접근, 오용 또는 손상으로부터 보호되어야 한다.',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '정보시스템 저장매체 운반 시 비인가자에 의해 정보 손상 또는 유출될 위험',
                    'protection_plan' => '정보시스템 저장매체 운반 과정에서 정보 손상, 유출 등 발생 시 정보를 보호하기 위한 대책(잠금장치 시건 등) 마련',
                    'threatcode' => 'TC4-08',
                ),
            278 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '접근통제',
                    'depth' => 'A.9.1.1',
                    'clause' => '접근통제 정책은 비즈니스와 정보보호 요구사항을 기반으로 수립되고, 문서화되고, 검토되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '접근통제 관련 정책, 절차의 수립이 미흡하여 인가되지 않은 사용자 또는 외부인으로부터의 정보탈취 및 서비스 장애가 유발될 위험',
                    'protection_plan' => '접근통제 영역을 정의하고 접근통제 영역별로 접근통제 정책 수립',
                    'threatcode' => 'TC1-02',
                ),
            279 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '접근통제',
                    'depth' => 'A.9.1.2',
                    'clause' => '사용자는 특별히 사용이 허가된 네트워크와 네트워크 서비스로만 접근할 수 있어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '내부 네트워크 접근 통제가 미흡하여 외부 또는 불필요한 내부사용자의 중요시스템 접근이 가능할 위험',
                    'protection_plan' => '접근통제 정책에 따라 인가된 사용자만이 네트워크에 접근할 수 있도록 네트워크 식별자(IP) 할당 등을 통제',
                    'threatcode' => 'TC6-11',
                ),
            280 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '접근통제',
                    'depth' => 'A.9.2.1',
                    'clause' => '정식 사용자 등록과 등록 해체 프로세스는 접근 권한의 할당이 가능하도록 구현되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템에 등록된 사용자 계정 및 접근권한 부여 현황에 대한 관리가 미흡하여, 권한의 오남용에 따른 보안사고 발생 및 책임추적성의 확보가 어려울 위험',
                    'protection_plan' => '정보시스템의 사용자 계정 등록/삭제(비활성화) 및 접근권한 등록/변경/삭제에 관한 공식적인 절차 수립/이행',
                    'threatcode' => 'TC1-02',
                ),
            281 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '접근통제',
                    'depth' => 'A.9.2.2',
                    'clause' => '정식 사용자 접근 허용 프로세스는 모든 시스템, 서비스에 모든 사용자 유형에 대해 접근 권한을 부여하거나 취소하도록 구현되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템에 등록된 사용자 계정 및 접근권한 부여 현황에 대한 관리가 미흡하여, 권한의 오남용에 따른 보안사고 발생 및 책임추적성의 확보가 어려울 위험',
                    'protection_plan' => '정보시스템의 사용자 계정 등록/삭제(비활성화) 및 접근권한 등록/변경/삭제에 관한 공식적인 절차 수립/이행',
                    'threatcode' => 'TC1-02',
                ),
            282 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '접근통제',
                    'depth' => 'A.9.2.3',
                    'clause' => '특수 접근 권한의 할당과 사용은 제한되고 통제되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '관리자 및 특수 권한에 대한 관리가 미흡하여 권한의 오남용에 따른 보안사고가 발생할 위험',
                    'protection_plan' => '관리자 및 특수 권한은 최소한의 인원에게만 부여하고 권한 부여 시 책임자 승인 절차 수립',
                    'threatcode' => 'TC6-06',
                ),
            283 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '접근통제',
                    'depth' => 'A.9.2.4',
                    'clause' => '비밀 인증정보의 할당은 공식적인 관리 프로세스를 거쳐 통제되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템 접근에 대한 인증 절차 적용이 미흡하여 비인가자에 의한 시스템 접근 등 보안사고가 발생할 위험',
                    'protection_plan' => '정보시스템에 대한 접근은 사용자 인증, 로그인 횟수 제한, 불법 로그인 시도 경고 등 안전한 사용자 인증 절차에 의해 통제',
                    'threatcode' => 'TC2-02',
                ),
            284 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '접근통제',
                    'depth' => 'A.9.2.5',
                    'clause' => '자산 소유자는 정기적으로 사용자 접근권한을 검토해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템에 대한 계정 및 권한 현황 관리와 주기적인 검토 활동이 미흡하여 미사용 계정 및 퇴직자 계정, 잘못된 권한 부여 등이 존재할 위험',
                    'protection_plan' => '정보시스템 및 중요정보에 대한 접근권한 검토 기준, 검토주체, 검토방법, 주기 등을 정하여 정기적 검토 이행',
                    'threatcode' => 'TC1-01',
                ),
            285 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '접근통제',
                    'depth' => 'A.9.2.6',
                    'clause' => '정보와 정보처리설비에 대한 모든 임직원, 계약자들의 접근 권한은 고용, 계약, 협약의 종료 혹은 변경 시 삭제되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '퇴직 및 직무변경에 따른 자산반납, 권한회수 체계 및 절차가 미흡하여 퇴직자 등에 의한 자산분실, 정보유출 등 보안사고가 발생할 위험',
                    'protection_plan' => '조직 내 인력의 직무변경 혹은 퇴직 시 정보자산 반납, 접근권한 조정/회수, 결과 확인 등 수립된 절차에 따라 지체 없이 이행',
                    'threatcode' => 'TC6-06',
                ),
            286 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '접근통제',
                    'depth' => 'A.9.3.1',
                    'clause' => '사용자는 비밀 인증정보의 사용시 조직 내 방법론을 따라야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템 접근에 대한 인증 절차 적용이 미흡하여 비인가자에 의한 시스템 접근 등 보안사고가 발생할 위험',
                    'protection_plan' => '정보시스템에 대한 접근은 사용자 인증, 로그인 횟수 제한, 불법 로그인 시도 경고 등 안전한 사용자 인증 절차에 의해 통제',
                    'threatcode' => 'TC2-02',
                ),
            287 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '접근통제',
                    'depth' => 'A.9.4.1',
                    'clause' => '정보와 어플리케이션 시스템 기능으로의 접근은 접근통제 정책에 따라 제한되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템에 대한 접근 통제, 안전한 접근 수단의 적용이 미흡하여 비인가 시스템 접근, 자원 침탈, 정보 유출, 장애 등 발생할 위험',
                    'protection_plan' => '서버별로 접근이 허용된 사용자를 명확하게 식별/인증하고 안전한 접근수단 적용',
                    'threatcode' => 'TC2-02',
                ),
            288 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '접근통제',
                    'depth' => 'A.9.4.2',
                    'clause' => '접근통제 정책에 해당되는 경우 시스템과 어플리케이션으로의 접근은 안전한 로그온 절차에 의해 통제되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템에 대한 접근 통제, 안전한 접근 수단의 적용이 미흡하여 비인가 시스템 접근, 자원 침탈, 정보 유출, 장애 등 발생할 위험',
                    'protection_plan' => '서버별로 접근이 허용된 사용자를 명확하게 식별/인증하고 안전한 접근수단 적용',
                    'threatcode' => 'TC2-02',
                ),
            289 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '접근통제',
                    'depth' => 'A.9.4.3',
                    'clause' => '패스워드 관리 시스템은 상호작용하며 양질의 패스워드를 보장해야 한다.',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '정보시스템 패스워드 관리에 대한 명확한 기준 부재로 인하여 패스워드 관리가 소홀해 지거나 비인가 시스템 접근이 발생할 위험',
                    'protection_plan' => '정보시스템 사용자 패스워드에 대한 정책 적용 관리',
                    'threatcode' => 'TC6-03',
                ),
            290 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '접근통제',
                    'depth' => 'A.9.4.4',
                    'clause' => '시스템 및 응용 프로그램 통제 수단을 무력화 시킬 수 있는 유틸리티 프로그램의 사용을 제한해야 하며 엄격하게 통제되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '악성코드 및 바이러스 감염으로 인한 중요 데이터 유출/손실, 시스템 장애가 발생할 위험',
                    'protection_plan' => '바이러스, 웜, 트로이목마 등의 악성코드로부터 정보시스템을 보호하기 위하여 보호대책 수립/이행',
                    'threatcode' => 'TC3-12',
                ),
            291 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '접근통제',
                    'depth' => 'A.9.4.5',
                    'clause' => '프로그램 소스코드로의 접근은 제한되어야 한다.',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '소스프로그램에 대한 변경 및 보관 관리가 미흡하여 소스프로그램 변조, 장애 등 보안사고가 발생할 위험',
                    'protection_plan' => '비인가된 자의 소스프로그램의 접근을 통제하기 위하여 절차 수립/이행',
                    'threatcode' => 'TC5-02',
                ),
            292 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '암호',
                    'depth' => 'A.10.1.1',
                    'clause' => '정보의 보호를 위한 암호화 통제의 사용 정책이 개발되고 구현되어야 한다.',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보 및 중요정보 저장/전송에 대한 명시적인 기준 수립 및 암호화 적용이 미흡하여, 중요정보가 유출되거나 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보 등 중요정보의 전송 및 저장 시 안전한 보호를 위한 암호 정책 수립/이행',
                    'threatcode' => 'TC1-10',
                ),
            293 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '암호',
                    'depth' => 'A.10.1.2',
                    'clause' => '암호키의 사용, 보호, 생명주기에 대한 정책이 개발되고 생명주기 동안 구현되어야 한다.',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '암호키 분실 및 비인가자 접근으로 인해 변조 또는 중요정보 유출될 위험',
                    'protection_plan' => '암호키 생성, 이용, 보관, 배포, 복구, 파기 등에 관한 절차를 수립/이행',
                    'threatcode' => 'TC1-10',
                ),
            294 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '물리적 및 환경적 보안',
                    'depth' => 'A.11.1.1',
                    'clause' => '민감하거나 위험한 정보와 정보처리설비가 포함된 구역을 보호하기 위해 보안 경계가 정의되고 설치되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '비인가자의 물리적 접근 및 환경적 재난이 발생할 위험 ',
                    'protection_plan' => '주요 설비 및 시스템을 보호하기 위하여 물리적 보호구역을 정의하고 구역별 보호대책 수립/이행',
                    'threatcode' => 'TC1-02',
                ),
            295 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '물리적 및 환경적 보안',
                    'depth' => 'A.11.1.2',
                    'clause' => '보안 구역은 오직 허가 받은 직원만 출입할 수 있도록 적절한 출입 통제 수단에 의해 보호 되어야 한다.',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '비인가자의 접근에 따른 정보시스템 분실, 도난, 파괴 등에 따른 장애가 발생할 위험 ',
                    'protection_plan' => '각 보호구역별 내/외부자 출입통제 절차를 마련하고 출입 가능한 임직원 현황 관리',
                    'threatcode' => 'TC6-17',
                ),
            296 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '물리적 및 환경적 보안',
                    'depth' => 'A.11.1.3',
                    'clause' => '사무실, 공간, 설비에 대한 물리적 보안이 설계되고 적용되어야 한다.',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '보호설비 설치 및 운영 관리 미흡으로 인한 서비스 장애가 발생할 위험',
                    'protection_plan' => '각 보호구역의 중요도 및 특성에 따라 화재, 전력 이상 등 인재 및 자연재해 등에 대한 필요한 설비 운영',
                    'threatcode' => 'TC3-01',
                ),
            297 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '물리적 및 환경적 보안',
                    'depth' => 'A.11.1.4',
                    'clause' => '자연 재해, 악의적 공격, 사고로부터의 물리적 보호방안이 설계되고 적용되어야 한다.',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '보호설비 설치 및 운영 관리 미흡으로 인한 서비스 장애가 발생할 위험',
                    'protection_plan' => '각 보호구역의 중요도 및 특성에 따라 화재, 전력 이상 등 인재 및 자연재해 등에 대한 필요한 설비 운영',
                    'threatcode' => 'TC3-01',
                ),
            298 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '물리적 및 환경적 보안',
                    'depth' => 'A.11.1.5',
                    'clause' => '보안 구역내에서 이뤄지는 작업의 절차가 설계되고 적용되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '보호구역 내 작업 통제 미흡으로 인한 서비스 장애가 발생할 위험',
                    'protection_plan' => '보호구역 내 작업기록 주기적 검토',
                    'threatcode' => 'TC1-02',
                ),
            299 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '물리적 및 환경적 보안',
                    'depth' => 'A.11.1.6',
                    'clause' => '배송 및 하역 구역과 허가되지 않은 자가 영내로 접근할 수 있는 접근 지점들은 통제되어야 하고, 가능하다면 허가되지 않은 접근을 방지하기 위해 정보처리설비로부터 격리되어야 한다.',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '비인가자의 접근에 따른 정보시스템 분실, 도난, 파괴 등에 따른 장애가 발생할 위험 ',
                    'protection_plan' => '보안경계를 설정하고 보안규정에 명시',
                    'threatcode' => 'TC6-17',
                ),
            300 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '물리적 및 환경적 보안',
                    'depth' => 'A.11.2.1',
                    'clause' => '장비는 환경적 위협, 위험요인, 허가되지 않은 접근의 위험을 감소시킬 수 있는 장소에 배치하고 보호해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '비인가자의 물리적 접근 및 환경적 재난이 발생할 위험 ',
                    'protection_plan' => '주요 설비 및 시스템을 보호하기 위하여 물리적 보호구역을 정의하고 구역별 보호대책 수립/이행',
                    'threatcode' => 'TC1-02',
                ),
            301 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '물리적 및 환경적 보안',
                    'depth' => 'A.11.2.2',
                    'clause' => '장비는 지원 시설에서 발생할 수 있는 정전 및 공급중단 등으로부터 보호해야 한다.',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '보호설비 설치 및 운영 관리 미흡으로 인한 서비스 장애가 발생할 위험',
                    'protection_plan' => '각 보호구역의 중요도 및 특성에 따라 전력공급설비(UPS, 비상발전기, 전압유지기 등) 설치 운영 및 지속적인 점검 관리',
                    'threatcode' => 'TC3-03',
                ),
            302 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '물리적 및 환경적 보안',
                    'depth' => 'A.11.2.3',
                    'clause' => '데이터와 정보서비스를 지원하는 전력 및 통신 케이블은 차단, 손상으로부터 보호되어야 한다.',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '전력 및 통신케이블의 물리적 손상, 전기 간섭 등으로 인한 서비스 장애가 발생할 위험',
                    'protection_plan' => '데이터를 송수신하는 통신케이블이나 전력을 공급하는 전력 케이블은 손상을 입지 않도록 보호',
                    'threatcode' => 'TC3-04',
                ),
            303 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '물리적 및 환경적 보안',
                    'depth' => 'A.11.2.4',
                    'clause' => '장비는 지속적인 가용성과 무결성을 보장하기 위해 올바르게 유지보수 해야 한다.',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '정보시스템 운영을 위한 유지보수 미흡으로 정보시스템 운영 관리가 소홀하거나 체계적인 운영이 어려울 위험',
                    'protection_plan' => '정보시스템 운영을 위한 운영절차(또는 매뉴얼) 수립',
                    'threatcode' => 'TC4-08',
                ),
            304 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '물리적 및 환경적 보안',
                    'depth' => 'A.11.2.5',
                    'clause' => '장비, 정보, 소프트웨어는 사전 허가 없이 시설 밖으로 반출해서는 안 된다.',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '장비, 정보, 소프트웨어 미승인 반출입으로 인한 정보시스템 분실, 도난 등 보안사고가 발생할 위험',
                    'protection_plan' => '보호구역 내 중요한 장비, 정보, 소프트웨어 등에 대한 반출입 관련 정책 및 절차 수립/이행',
                    'threatcode' => 'TC6-17',
                ),
            305 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '물리적 및 환경적 보안',
                    'depth' => 'A.11.2.6',
                    'clause' => '조직의 영외에서 발생하는 다른 위험들을 고려하여, 조직 영외에 설치된 장비는 보안이 고려되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '조직 영외에 대한 접근통제 관련 정책, 절차의 수립이 미흡하여 인가되지 않은 사용자 또는 외부인으로부터의 정보탈취 및 서비스 장애가 유발될 위험',
                    'protection_plan' => '접근통제 영역을 정의하고 접근통제 영역별(조직 내/외)로 접근통제 정책 수립',
                    'threatcode' => 'TC1-02',
                ),
            306 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '물리적 및 환경적 보안',
                    'depth' => 'A.11.2.7',
                    'clause' => '저장 매체가 포함된 모든 장비는 폐기나 재사용에 앞서, 민감한 데이터와 라이선스가 있는 소프트웨어가 제거되거나 덮어쓰기 되었는지 검증해야 한다.',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '정보시스템 저장매체의 폐기 또는 재사용 기준 부재 및 불용처리 미흡으로 인한 폐기 또는 재사용 매체를 통해 정보가 유출될 위험',
                    'protection_plan' => '저장매체 폐기 또는 재사용 시 정보가 복구되지 않는 방법으로 처리',
                    'threatcode' => 'TC4-08',
                ),
            307 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '물리적 및 환경적 보안',
                    'depth' => 'A.11.2.8',
                    'clause' => '사용자는 자리를 비울 때 장비가 방치되지 않도록 적절한 보호 방안을 적용해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인PC 등에 대한 개인업무 환경 보안 관리 부주의에 의한 정보유출 등의 보안사고가 발생할 위험',
                    'protection_plan' => '개인업무 환경에서의 정보보호에 대한 정책 수립/이행',
                    'threatcode' => 'TC1-02',
                ),
            308 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '물리적 및 환경적 보안',
                    'depth' => 'A.11.2.9',
                    'clause' => '서류와 이동 가능한 매체에 대한 클리어 데스크 정책과 정보처리설비에 대한 클리어 스크린 정책을 적용해야 한다.',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '공용업무 환경 보안관리 부주의에 의한 정보유출 등의 보안사고가 발생할 위험',
                    'protection_plan' => '팩스, 복사기, 프린터, 공용 PC, 파일서버, 문서고 등 공용으로 사용하는 사무장비 및 시설에 대한 보호대책 수립/이행',
                    'threatcode' => 'TC4-01',
                ),
            309 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '운영보안',
                    'depth' => 'A.12.1.1',
                    'clause' => '운영 절차는 문서화되고, 필요로 하는 모든 사람에게 가용해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템 운영 절차 수립 미흡으로 정보시스템 운영 관리가 소홀하거나 체계적인 운영이 어려울 위험',
                    'protection_plan' => '정보시스템 운영을 위한 운영절차(또는 매뉴얼) 수립',
                    'threatcode' => 'TC1-02',
                ),
            310 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '운영보안',
                    'depth' => 'A.12.1.2',
                    'clause' => '조직, 비즈니스 프로세스, 정보처리 설비 및 시스템들에 대한 변경은 관리되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '변경관리를 위한 기준 마련이 미흡하여, 프로세스, 시스템들의 취약점 발생에 따른 보안사고가 발생할 위험',
                    'protection_plan' => '변경관리를 위한 기준을 마련하고, 기준에 따라 변경활동을 이행',
                    'threatcode' => 'TC1-01',
                ),
            311 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '운영보안',
                    'depth' => 'A.12.1.3',
                    'clause' => '자원 사용 상황을 모니터링 하면서 조정해야 하며, 요구된 시스템 성능을 보장할 수 있도록 미래의 용량 요구사항을 예상해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '성능 및 용량 임계치 초과로 인한 서비스 장애 발생 위험',
                    'protection_plan' => '성능 및 용량을 지속적으로 모니터링 하기 위한 절차를 수립하고, 성능 및 용량 요구사항(임계치)을 초과하는 경우 조치절차 수립·이행',
                    'threatcode' => 'TC1-01',
                ),
            312 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '운영보안',
                    'depth' => 'A.12.1.4',
                    'clause' => '운영 환경으로의 허가되지 않은 접근이나 변경의 위험을 줄이기 위해 개발, 테스트, 운영 환경을 각각 분리해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개발/테스트 시스템과 운영시스템이 분리되지 않아 테스트 용도의 어플리케이션에 내재된 취약점을 악용한 공격이 발생되거나 개발 상의 오류 등이 시스템에 영향을 미쳐 장애가 발생할 위험',
                    'protection_plan' => '개발 및 시험 시스템을 운영시스템과 분리',
                    'threatcode' => 'TC1-05',
                ),
            313 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '운영보안',
                    'depth' => 'A.12.2.1',
                    'clause' => '악성 소프트웨어로부터의 보호를 위한 탐지, 예방 및 복구 통제가, 적절한 사용자 인식 제고와 함께, 구현되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '악성코드 및 바이러스 감염으로 인한 중요 데이터 유출/손실, 시스템 장애가 발생할 위험',
                    'protection_plan' => '바이러스, 웜, 트로이목마 등의 악성코드로부터 정보시스템을 보호하기 위하여 보호대책 수립·이행',
                    'threatcode' => 'TC3-12',
                ),
            314 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '운영보안',
                    'depth' => 'A.12.3.1',
                    'clause' => '정보, 소프트웨어, 시스템 이미지는 주기적으로 백업 복사본이 생성되어야 하며, 합의된 백업 정책에 따라 정기적으로 테스트 되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '중요정보에 대한 백업 및 보관 관리가 미흡하여 보안사고 발생시 시스템 복구가 어려울 위험',
                    'protection_plan' => '백업 대상, 주기, 방법, 절차 등이 포함된 백업 및 복구절차 수립 및 정기적 테스트 이행',
                    'threatcode' => 'TC1-04',
                ),
            315 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '운영보안',
                    'depth' => 'A.12.4.1',
                    'clause' => '사용자 활동, 예외, 결함, 정보보호 이벤트를 기록하는 이벤트 로그를 생성하고, 보관하고, 주기적으로 검토해야 한다.',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '정보시스템 및 중요정보, 응용프로그램에 대한 로그 기록, 보관 및 사용자 접근이력 등에 대해 주기적인 점검활동이 없어 보안사고 발생 시 대응이 어렵고, 악의적인 사용자에 의한 정보유출 등 보안사고 발생 위험',
                    'protection_plan' => '주요 정보시스템에 대한 로그관리 절차를 수립하고 이에 따라 로그를 생성 및 보관하고, 로그 기록의 주기적 검토(모니터링)',
                    'threatcode' => 'TC7-01',
                ),
            316 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '운영보안',
                    'depth' => 'A.12.4.2',
                    'clause' => '로그 처리 시설 및 로그 정보는 변조 또는 허가되지 않은 접근을 할 수 없도록 보호해야 한다.',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '주요 정보시스템 자산에 대한 로그 기록, 보관 및 관리 절차가 미흡하여 보안사고 발생시 대응이 어려울 위험',
                    'protection_plan' => '로그기록은 별도 로그 서버, 저장장치를 통해 백업하고 로그기록에 대한 접근권한 부여 최소화',
                    'threatcode' => 'TC7-02',
                ),
            317 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '운영보안',
                    'depth' => 'A.12.4.3',
                    'clause' => '시스템 관리자 및 시스템 운영자 활동은 기록되어야 하고, 로그는 보호되고 주기적으로 검토되어야 한다.',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '시스템 관리자, 운영자에 대한 활동 로그 기록, 보관 및 주기적인 점검활동이 없어 보안사고 발생 시 대응이 어렵고, 내부 악의적인 사용자에 의한 정보유출 등 보안사고 발생 위험',
                    'protection_plan' => '로그관리 절차를 수립하고 이에 따라 로그를 생성 및 보관하고, 로그 기록의 주기적 검토(모니터링)',
                    'threatcode' => 'TC7-01',
                ),
            318 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '운영보안',
                    'depth' => 'A.12.4.4',
                    'clause' => '조직이나 보안 영역 내 관련된 모든 정보 처리시스템의 시계는 일원화된 시각 에 맞추어 동기화해야 한다.',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '시각동기화 관리 미흡으로 인한 시스템 내 이슈 발생 시 명확한 시기 파악이 불가능할 위험',
                    'protection_plan' => '각 정보시스템 시각을 표준시각으로 동기화',
                    'threatcode' => 'TC7-01',
                ),
            319 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '운영보안',
                    'depth' => 'A.12.5.1',
                    'clause' => '운영 시스템에 소프트웨어를 설치하는 것을 통제하는 절차가 구현되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '악성코드 및 바이러스 감염으로 인한 중요 데이터 유출/손실, 시스템 장애가 발생할 위험',
                    'protection_plan' => '바이러스, 웜, 트로이목마 등의 악성코드로부터 정보시스템을 보호하기 위하여 보호대책 수립·이행',
                    'threatcode' => 'TC3-12',
                ),
            320 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '운영보안',
                    'depth' => 'A.12.6.1',
                    'clause' => '사용중인 정보시스템의 기술적 취약점 정보를 동향에 따라 적시에 알아내야 하며, 조직이 이들 취약점에 노출된 정도를 평가해야 한다. 그리고 이들 위험을 보완하는 적절한 조치를 취해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템에 대한 정기적 취약점점검 체계 부재 및 식별된 위험에 대한 처리 전략 및 보호대책 미흡으로 인하여 취약점 노출에 따른 보안사고의 발생 위험 또는 위험수준 감소가 어려운 위험',
                    'protection_plan' => '정보시스템 취약점 점검 절차를 수립하여 정기적으로 점검 을 수행하고, 위험평가를 통해 위험 보완을 위한 보호대책 선정',
                    'threatcode' => 'TC1-04',
                ),
            321 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '운영보안',
                    'depth' => 'A.12.6.2',
                    'clause' => '사용자에 의한 소프트웨어 설치를 억제하는 규칙을 수립하고 구현해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '악성코드 및 바이러스 감염으로 인한 중요 데이터 유출/손실, 시스템 장애가 발생할 위험',
                    'protection_plan' => '바이러스, 웜, 트로이목마 등의 악성코드로부터 정보시스템을 보호하기 위하여 보호대책 수립·이행',
                    'threatcode' => 'TC3-12',
                ),
            322 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '운영보안',
                    'depth' => 'A.12.7.1',
                    'clause' => '업무 프로세스 중단 위험을 최소화하기 위하여, 운영 시스템 검증이 포함된 감사 요구사항 및 활동은 주의 깊게 계획하고 합의해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '운영 시스템 검증 등에 대한 주기적인 감사 활동이 미흡하여, 운영 시스템 장애 등 발생 시 서비스 제공 불가 위험',
                    'protection_plan' => '운영 시스템 검증 등에 대한 주기적인 감사 활동 및 보완을 통한 시스템 장애 발생 최소화',
                    'threatcode' => 'TC1-01',
                ),
            323 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '커뮤니케이션 보안',
                    'depth' => 'A.13.1.1',
                    'clause' => '시스템과 어플리케이션에 존재하는 정보를 보호하기 위해 네트워크는 관리 및 통제되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '내부 네트워크 접근 통제가 미흡하여 외부 또는 불필요한 내부사용자의 중요시스템 접근이 가능할 위험',
                    'protection_plan' => '네트워크를 구성하는 주요자산 목록 등을 최신으로 유지하고, 접근통제 정책에 따라 분리된 네트워크 영역간에 침입차단시스템 등을 통한 접근통제',
                    'threatcode' => 'TC6-08',
                ),
            324 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '커뮤니케이션 보안',
                    'depth' => 'A.13.1.2',
                    'clause' => '네트워크 서비스 계약에는, 이 서비스가 자체 제공되는 서비스이든 아웃소싱하는 서비스이든 관계없이, 모든 네트워크 서비스의 보안 특성, 서비스 수준, 관리 요구사항을 명시하여 포함시켜야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '네트워크 서비스 보안 준수 절차 등에 대한 요구사항을 계약서에 반영하지 않아 네트워크 보안규범 준수에 대한 강제화 불가능 및 피해발생에 따른 피해 구제의 어려움',
                    'protection_plan' => '네트워크 서비스 계약 시 보안요구사항 등을 정의하여 계약 반영',
                    'threatcode' => 'TC1-04',
                ),
            325 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '커뮤니케이션 보안',
                    'depth' => 'A.13.1.3',
                    'clause' => '정보서비스 사용자, 정보 시스템의 그룹은 네트워크 상에서 서로 분리되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '네트워크 영역을 용도 또는 중요도에 따라 분리하지 않아 비인가 시스템 접근이 가능할 위험',
                    'protection_plan' => '서비스, 사용자 그룹, 정보자산의 중요도, 법적 요구사항에 따라 네트워크 영역을 물리적 또는 논리적으로 분리',
                    'threatcode' => 'TC6-08',
                ),
            326 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '커뮤니케이션 보안',
                    'depth' => 'A.13.2.1',
                    'clause' => '모든 유형의 통신 시설을 사용한 정보 전송을 보호하기 위하여 공식적인 교환 정책, 절차, 통제 수단을 마련해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '모든 유형의 통신 시설을 사용한 중요정보 전송시 안전한 정보 전송을 위한 절차 마련 미흡에 따른 정보유출 위험',
                    'protection_plan' => '중요정보(개인정보, 기밀정보 등)를 전송하는 경우 안전한 전송을 위한 공식적인 절차 마련 등 보호대책 수립·이행',
                    'threatcode' => 'TC1-02',
                ),
            327 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '커뮤니케이션 보안',
                    'depth' => 'A.13.2.2',
                    'clause' => '조직과 외부 관계자 사이에서 비즈니스 정보의 안전한 전송을 다룬 전송 협약을 체결해야 한다.',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '조직간 중요정보 전송시 암호화 미적용에 따른 정보유출 위험',
                    'protection_plan' => '업무상 조직 간에 중요정보(개인정보, 기밀정보 등)를 상호교환하는 경우 안전한 전송을 위한 협약체결 등 보호대책 수립·이행',
                    'threatcode' => 'TC4-03',
                ),
            328 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '커뮤니케이션 보안',
                    'depth' => 'A.13.2.3',
                    'clause' => '전자 메시지에 담긴 정보는 적절하게 보호해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '중요정보(개인정보, 인증정보 등) 전송에 대한 암호화가 적용되지 않아 정보유출 등 보안사고 발생 위험',
                    'protection_plan' => '개인정보 및 인증정보 등의 중요한 정보 전송 시 SSL보안서버 구축 등을 통하여 암호화',
                    'threatcode' => 'TC4-02',
                ),
            329 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '커뮤니케이션 보안',
                    'depth' => 'A.13.2.4',
                    'clause' => '조직의 정보 보호 필요성을 반영한 기밀유지 계약이나 비공개 계약의 요구사항을 확인하고, 정기적으로 검토하고, 문서화 해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '기밀유지 계약 등에 따른 보안요구사항의 정의 및 보안규범 준수에 대한 관리가 이루어지지 않아 정보유출 등 보안사고 발생 위험 및 피해발생에 따른 피해 구제의 어려움',
                    'protection_plan' => '계약서에 명시된 보안요구사항을 준수하는지 여부를 주기적으로 점검·감독',
                    'threatcode' => 'TC1-01',
                ),
            330 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '시스템 도입, 개발, 유지관리',
                    'depth' => 'A.14.1.1',
                    'clause' => '정보보호와 관련된 요구사항은, 새로운 정보 시스템의 요구사항이나 기존 정보 시스템 보강에 대한 요구사항에 포함되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개발에 대한 보안요구사항 정의 및 업무 절차가 미흡하여 신규 정보시스템 개발 또는 기존 시스템 변경에 따른 취약점 발생 위험',
                    'protection_plan' => '신규 정보시스템 개발 및 기존 시스템 변경 시 법적 요구사항을 포함한 보안 요구사항 정의',
                    'threatcode' => 'TC1-04',
                ),
            331 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '시스템 도입, 개발, 유지관리',
                    'depth' => 'A.14.1.2',
                    'clause' => '공개된 네트워크를 통과하는 어플리케이션 서비스 관련 정보는 사기 행위, 계약 분쟁, 그리고 허가되지 않는 유출과 수정으로 부터 보호해야 한다.',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '공개된 네트워크를 통한 중요정보 전송시 암호화 미적용에 때른 정보유출 위험',
                    'protection_plan' => '공개된 네트워크를 통해 중요정보(개인정보, 기밀정보 등)를 상호교환하는 경우 안전한 전송을 위한 협약체결 등 보호대책 수립·이행',
                    'threatcode' => 'TC4-03',
                ),
            332 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '시스템 도입, 개발, 유지관리',
                    'depth' => 'A.14.1.3',
                    'clause' => '어플리케이션 서비스 트랜잭션에 관련된 정보는 전송실패, 라우팅 오류, 허가되지 않은 메시지 위변조, 허가되지 않은 유출 허가 되지 않은 메시지 복제나 재생을 방지하도록 보호해야 한다.',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '어플리케이션 서비스 관련 정보에 대한 보안 관리가 미흡하여 정보유출, 데이터 조작, 사기 등의 침해사고 발생 위험',
                    'protection_plan' => '어플리케이션 서비스 관련 정보의 안전성과 신뢰성 확보를 위한 보호대책 수립·이행',
                    'threatcode' => 'TC5-01',
                ),
            333 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '시스템 도입, 개발, 유지관리',
                    'depth' => 'A.14.2.1',
                    'clause' => '소프트웨어와 시스템의 개발을 위한 규칙을 수립하고, 조직 내에서 수행되는 개발에 적용해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개발에 대한 보안요구사항 정의 및 업무 절차가 미흡하여 신규 정보시스템 개발 또는 기존 시스템 변경에 따른 취약점 발생 위험',
                    'protection_plan' => '신규 정보시스템 개발 및 기존 시스템 변경 시 법적 요구사항을 포함한 보안 요구사항 정의',
                    'threatcode' => 'TC1-04',
                ),
            334 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '시스템 도입, 개발, 유지관리',
                    'depth' => 'A.14.2.2',
                    'clause' => '개발 생명주기 내에서 시스템에 대한 변경은 공식적인 변경 관리 절차에 따라 통제되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '시스템 변경에 대한 통제가 미흡하여 시스템 또는 서비스 장애 및 보안사고가 발생할 위험',
                    'protection_plan' => '정보시스템 관련 자산(하드웨어, 운영체제, 상용 소프트웨어 패키지 등) 변경에 관한 절차 수립·이행',
                    'threatcode' => 'TC1-04',
                ),
            335 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '시스템 도입, 개발, 유지관리',
                    'depth' => 'A.14.2.3',
                    'clause' => '운영 체제가 변경되면 중요한 업무용 응용 프로그램을 검토 및 시험하여 조직체의 운영이나 보안에 좋지 않은 영향을 미치지 않는지 확인해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '시스템 변경에 대한 통제가 미흡하여 시스템 또는 서비스 장애 및 보안사고가 발생할 위험',
                    'protection_plan' => '정보시스템 관련 자산 변경을 수행하기 전 성능 및 보안에 미치는 영향 분석',
                    'threatcode' => 'TC1-04',
                ),
            336 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '시스템 도입, 개발, 유지관리',
                    'depth' => 'A.14.2.4',
                    'clause' => '소프트웨어 패키지 수정은 권장해서는 안 되며 꼭 필요한 변경으로 제한해야 한다. 그리고 모든 변경은 엄격하게 통제되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '소프트웨어 패키지 수정에 대한 충분한 검토 및 변경에 대한 통제가 미흡하여 시스템 또는 서비스 장애 및 보안사고가 발생할 위험',
                    'protection_plan' => '소프트웨어 패키지 수정은 꼭 필요한 변경만 허용하고, 변경을 수행하기 전 성능 및 보안에 미치는 영향 분석',
                    'threatcode' => 'TC1-04',
                ),
            337 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '시스템 도입, 개발, 유지관리',
                    'depth' => 'A.14.2.5',
                    'clause' => '보안을 고려한 시스템 엔지니어링 원칙이 수립, 문서화, 유지관리 되어야 하며, 모든 정보시스템 구현 시 적용되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '보안요구사항 정의 및 업무 절차가 미흡하여 신규 정보시스템 개발 또는 기존 시스템 변경에 따른 취약점 발생 위험',
                    'protection_plan' => '신규 정보시스템 개발 및 기존 시스템 변경 시 법적 요구사항을 포함한 보안 요구사항 정의 및 구현',
                    'threatcode' => 'TC1-04',
                ),
            338 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '시스템 도입, 개발, 유지관리',
                    'depth' => 'A.14.2.6',
                    'clause' => '조직은 전체 시스템 개발 생명주기를 다루고 시스템 개발 및 통합 노력을 위한 안전한 개발 환경을 수립하고 적절하게 보호해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '전체 시스템 개발에 대한 보안요구사항 정의 및 업무 절차가 미흡하여 신규 정보시스템 개발 또는 기존 시스템 변경에 따른 취약점 발생 위험',
                    'protection_plan' => '신규 정보시스템 개발 및 기존 시스템 변경 시 법적 요구사항을 포함한 보안 요구사항 정의',
                    'threatcode' => 'TC1-04',
                ),
            339 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '시스템 도입, 개발, 유지관리',
                    'depth' => 'A.14.2.7',
                    'clause' => '조직은 아웃소싱 방식의 소프트웨어 개발 활동을 감독 및 모니터링 해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '외주 위탁 개발에 대한 보안코딩, 보안준수 점검 등 보안요구사항의 정의 및 보안관리 활동이 미흡하여 개발 시스템에 대한 취약점 관리가 어려울 위험',
                    'protection_plan' => '외주 위탁업체가 계약서에 명시된 보안요구사항을 준수하여 개발 활동 여부 관리·감독',
                    'threatcode' => 'TC1-01',
                ),
            340 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '시스템 도입, 개발, 유지관리',
                    'depth' => 'A.14.2.8',
                    'clause' => '보안 기능성 테스트를 개발기간 중 수행해야 한다.',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '보안 기능성 구현에 대한 개발기간 중 테스트 및 관리가 미흡하여 취약점을 이용한 정보시스템 침해사고 발생 위험',
                    'protection_plan' => '구현된 기능이 사전 정의된 보안 요구사항의 충족을 개발기간 중 시험 수행',
                    'threatcode' => 'TC6-16',
                ),
            341 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '시스템 도입, 개발, 유지관리',
                    'depth' => 'A.14.2.9',
                    'clause' => '새로운 정보시스템, 업그레이드 및 새 버전의 인수 테스트 프로그램 및 관련된 승인 기준을 수립해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '인수 적합성 미흡에 따른 시스템 또는 서비스 제공 불가 위험',
                    'protection_plan' => '정보시스템, 업그레이드 등의 인수 적합성 판단을 위한 기준 수립',
                    'threatcode' => 'TC1-01',
                ),
            342 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '시스템 도입, 개발, 유지관리',
                    'depth' => 'A.14.3.1',
                    'clause' => '테스트 데이터는 주의 깊게 선택해야 하며 보호 및 통제해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '테스트 데이터 관리 및 통제 미흡에 따른 데이터 유출 및 오류 발생 위험',
                    'protection_plan' => '시스템 개발 전 적절한 테스트 데이터 선별 및 통제',
                    'threatcode' => 'TC1-01',
                ),
            343 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '공급자 관계',
                    'depth' => 'A.15.1.1',
                    'clause' => '공급자가 접근하는 조직 자산으로부터 발생하는 위험을 완화하기 위한 정보보호 요구사항을 공급자와 합의해야 하고, 문서화 해야 한다.',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '공급자의 보안규범 준수에 대한 강제화 불가능 및 피해발생에 따른 피해 구제의 어려움',
                    'protection_plan' => '공급자와의 계약시 보안요구사항 정의 및 계약 반영',
                    'threatcode' => 'TC1-08',
                ),
            344 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '공급자 관계',
                    'depth' => 'A.15.1.2',
                    'clause' => '조직의 정보에 접근, 처리, 저장, 통신 또는 정보를 위한 IT 시설을 제공하는 공급자와 관련된 모든 보안 요구사항이 수립되고 협의되어야 한다.',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '공급자의 보안규범 준수에 대한 강제화 불가능 및 피해발생에 따른 피해 구제의 어려움',
                    'protection_plan' => '공급자와의 계약시 보안요구사항 정의 및 계약 반영',
                    'threatcode' => 'TC1-08',
                ),
            345 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '공급자 관계',
                    'depth' => 'A.15.1.3',
                    'clause' => '공급자와의 계약에는 ICT 서비스 및 제품 공급 체인과 관련된 정보 보안 위험을 해결하기 위한 요구 사항을 포함해야 한다.',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '공급자의 보안규범 준수에 대한 강제화 불가능 및 피해발생에 따른 피해 구제의 어려움',
                    'protection_plan' => '공급자와의 계약시 보안요구사항 정의 및 계약 반영',
                    'threatcode' => 'TC1-08',
                ),
            346 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '공급자 관계',
                    'depth' => 'A.15.2.1',
                    'clause' => '조직은 주기적으로 공급자의 서비스 제공을 모니터링하고, 검토하고, 감사해야 한다.',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '공급자에 대한 보안관리가 이루어지지 않아 정보유출 등 보안사고가 발생할 위험',
                    'protection_plan' => '공급자가 계약서에 명시한 보안요구사항을 준수하고 있는 지 주기적으로 점검 또는 감사 수행',
                    'threatcode' => 'TC1-08',
                ),
            347 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '공급자 관계',
                    'depth' => 'A.15.2.2',
                    'clause' => '기존의 정보보호 정책, 절차, 통제 수단을 유지 및 개선하는 것을 포함하여 공급자가 제공하는 서비스의 변경은 관련된 비즈니스 정보, 시스템, 프로세스의 심각성을 고려하고 위험을 재평가하여 관리해야 한다.',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '공급자가 제공하는 서비스 변경에 대한 위험관리가 이루어지지 않아 기존 시스템 변경에 따른 취약점 발생 위험',
                    'protection_plan' => '공급자가 제공하는 서비스 변경에 따른 위험을 재평가하여 위험에 따른 보호대책 마련',
                    'threatcode' => 'TC1-08',
                ),
            348 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '정보보호 사고 관리',
                    'depth' => 'A.16.1.1',
                    'clause' => '정보보호 사고에 신속하고 효과적으로 질서 있게 대응할 수 있도록 관리 책임 및 절차를 마련해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '침해사고 대응절차 및 체계 구축이 미흡하여 사고 발생시 효과적으로 대응하지 못할 위험',
                    'protection_plan' => '침해사고 발생 시 신속한 대응을 위한 내용(비상연락체계, 보고절차, 대응 및 복구절차, 훈련 등)을 포함한 대응절차 수립',
                    'threatcode' => 'TC1-01',
                ),
            349 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '정보보호 사고 관리',
                    'depth' => 'A.16.1.2',
                    'clause' => '정보보호 이벤트는 가능한 한 신속하게 적절한 관리 채널을 통하여 보고되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '침해사고 발생 시 정해진 절차에 따른 사고 경위 분석 및 보고가 미흡하여 적절한 조치, 대응이 이루어지지 않을 위험',
                    'protection_plan' => '침해사고 대응 체계에 따른 신속한 보고 수행',
                    'threatcode' => 'TC1-01',
                ),
            350 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '정보보호 사고 관리',
                    'depth' => 'A.16.1.3',
                    'clause' => '정보시스템 서비스를 이용하는 모든 임직원, 계약자들에게 시스템이나 서비스에서 보안 약점을 관찰하거나 보안 약점으로 의심되는 것을 알게 되면 기록해 두고 보고하도록 요구해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '침해사고 대응 절차를 임직원 및 계약자들이 숙지할 수 있도록 체계 구축 및 교육이 미흡하여 사고 발생 시 효과적으로 대응하지 못할 위험',
                    'protection_plan' => '침해사고 의심 시 절차에 따른 기록 및 보고체계가 이루어질 수 있도록 교육 수행',
                    'threatcode' => 'TC1-01',
                ),
            351 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '정보보호 사고 관리',
                    'depth' => 'A.16.1.4',
                    'clause' => '정보보호 이벤트들을 식별해야 하며, 이들 이벤트가 정보보호 사고로 분류될지 결정해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '유형 및 중요도에 따른 정보보호 이벤트를 구분하지 못하여 실제 사고 발생시 효과적으로 대응하지 못할 위험',
                    'protection_plan' => '유형 및 중요도에 따른 정보보호 이벤트 분류체계를 수립하여 신속한 보고 수행',
                    'threatcode' => 'TC1-01',
                ),
            352 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '정보보호 사고 관리',
                    'depth' => 'A.16.1.5',
                    'clause' => '정보보호 사고는 문서화된 절차에 따라 대응해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '침해사고 발생 시 정해진 문서화된 절차에 따른 대응이 미흡하여 적절한 조치, 대응이 이루어지지 않을 위험',
                    'protection_plan' => '침해사고 대응에 관한 문서화된 절차를 수립하여 체계에 따른 대응 및 복구 수행',
                    'threatcode' => 'TC1-04',
                ),
            353 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '정보보호 사고 관리',
                    'depth' => 'A.16.1.6',
                    'clause' => '정보보호 사고를 분석하고 해결하여 얻은 지식을 미래에 일어날 사건의 발생 가능성이나 영향을 감소시키기 위해 활용되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '침해사고 발생에 따른 분석 및 재발방지를 위한 활동이 미흡하여 동일하거나 유사한 사고 발생 시 적절히 대응하지 못할 위험',
                    'protection_plan' => '침해사고 분석을 통해 재발방지대책 수립 및 침해사고 대응절차 변경 검토',
                    'threatcode' => 'TC1-04',
                ),
            354 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '정보보호 사고 관리',
                    'depth' => 'A.16.1.7',
                    'clause' => '조직은 증거의 역할을 할 수 있는 정보의 식별, 수집, 획득, 보존을 위한 절차를 정의하고 적용해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '침해사고 발생에 따른 증거 보존을 위한 절차 수립이 미흡하여 침해사고 발생 시 대응 및 분석이 어려울 위험',
                    'protection_plan' => '사고 발생 시 증거보존을 위한 로그, 감사증적 등을 확보할 수 있는 절차 마련',
                    'threatcode' => 'TC1-04',
                ),
            355 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '비즈니스 연속성 관리 측면에서의 정보보호',
                    'depth' => 'A.17.1.1',
                    'clause' => '정보보호의 연속성을 조직의 비즈니스 연속성 경영 시스템에 내재화 함',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '조직의 경영 시스템을 반영한 IT재해복구 절차 수립이 미흡하여 사고 발생시 효과적으로 대응하지 못할 위험',
                    'protection_plan' => '조직의 경영 시스템을 반영한 BCP 체계 구축',
                    'threatcode' => 'TC1-03',
                ),
            356 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '비즈니스 연속성 관리 측면에서의 정보보호',
                    'depth' => 'A.17.1.2',
                    'clause' => '조직은 불리한 상황에서 정보보호에 대한 연속성의 요구 수준을 보장하기 위한 프로세스, 절차, 통제를 수립하고, 문서화하고, 구현하고, 유지해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'IT재해복구 절차 수립이 미흡하여 사고 발생시 효과적으로 대응하지 못할 위험',
                    'protection_plan' => '공식적인 BIA(BIZ Impact Analysis) 수립 및 BCP 통제 구현',
                    'threatcode' => 'TC1-03',
                ),
            357 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '비즈니스 연속성 관리 측면에서의 정보보호',
                    'depth' => 'A.17.1.3',
                    'clause' => '조직은 수립하고 구현한 정보보호 연속성 통제가 불리한 상황에서 유효하고 효과적임을 보장하기 위해 일정한 간격으로 검증해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'IT 서비스 복구전략 및 대책에 따라 효과적인 복구가 가능한지 시험을 실시하기 위한 재해복구 훈련 부족에 따른 실제 상황에서의 실효성 부재 위험',
                    'protection_plan' => 'BCP 훈련을 주기적으로 실시하고, 훈련 결과에 따른 체계 보완',
                    'threatcode' => 'TC1-03',
                ),
            358 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '비즈니스 연속성 관리 측면에서의 정보보호',
                    'depth' => 'A.17.2.1',
                    'clause' => '정보처리 설비는 가용성 요구사항을 충족시킬 만큼 충분한 다중 설계를 고려하여 구현되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보처리 설비의 장애 발생 가능성에 따른 이중화 설계 미흡으로, 사고 발생 시 가용성 요구사항을 충족하지 못하여 시스템 또는 서비스 제공 불가 위험',
                    'protection_plan' => '장애 발생 등에 대비하여 정보처리 설비에 대한 이중화 설계 절차 수립 및 이행',
                    'threatcode' => 'TC1-03',
                ),
            359 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '준거성',
                    'depth' => 'A.18.1.1',
                    'clause' => '모든 관련 법규, 규제, 지침, 계약에 따른 요구사항 및 조직이 이들 요구사항을 충족하는 방식은 각 정보 시스템 및 조직체에 대해 명확하게 정의되어 문서화 되어야 하며, 최신 상태로 유지되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '조직의 현황에 맞는 관련 정책, 법규 준수 등에 대한 수립 및 주기적 점검 미흡으로, 정보보호에 대한 기준 적용이 어려워 체계적인 보안요건 미준수 및 실행력 저하 위험',
                    'protection_plan' => '조직의 현황에 맞는 관련 정책을 수립하여 이행할 수 있도록 주기적인 교육 및 감사',
                    'threatcode' => 'TC1-04',
                ),
            360 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '준거성',
                    'depth' => 'A.18.1.2',
                    'clause' => '지적 재산권 및 전용 소프트웨어 제품을 사용하는 것에 대한 법률, 규제, 지침, 계약에 따른 요구사항을 준수하게 만드는 적절한 절차를 구현해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '지적 재산권 및 전용 소프트웨어 제품 사용을 위한 정책 수립 및 이행이 미흡하여, 법률 위반에 따른 경제적 손실 및 악성코드, 바이러스 감염으로 인한 중요 데이터 유출/손실, 시스템 장애가 발생할 위험',
                    'protection_plan' => '지적 재산권 및 전용 소프트웨어 제품 사용에 대한 정책을 수립하여 이행할 수 있도록 주기적인 교육 및 감사',
                    'threatcode' => 'TC1-04',
                ),
            361 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '준거성',
                    'depth' => 'A.18.1.3',
                    'clause' => '법규, 지침, 계약, 비즈니스 상의 요구사항에 따라 기록은 손실, 파기, 변조, 허가되지 않은 접근, 허가되지 않은 배포가 발생하지 않도록 보호해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '조직의 주요 문서 등에 대한 기록, 주요 정보시스템 자산 등에 대한 로그 기록, 보관 및 관리 절차가 미흡하여 기밀 유출 및 보안사고 발생시 대응이 어려울 위험',
                    'protection_plan' => '조직의 주요 문서 등에 대한 기록 관리 절차 및 주요 정보시스템 등에 대한 로그 관리 절차를 수립하고 이에 따라 보호',
                    'threatcode' => 'TC1-02',
                ),
            362 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '준거성',
                    'depth' => 'A.18.1.4',
                    'clause' => '해당되는 관련 법률과 지침에서 요구하는 사생활 및 개인 식별 정보의 보호를 보장해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '조직에서 준수해야 하는 관련 법률에 따른 개인정보 보호를 위한 안전성 확보 조치가 미흡하여, 중요정보가 유출되거나 법적요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '조직에서 준수해야 하는 관련 법률을 식별하여 개인정보 등 중요정보의 암호화 조치, 접근통제 등의 정책을 수립하고 주기적 점검 활동 실시',
                    'threatcode' => 'TC1-02',
                ),
            363 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '준거성',
                    'depth' => 'A.18.1.5',
                    'clause' => '암호화 통제는 모든 계약, 법률, 지침에 일치하게 사용해야 한다.',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보 및 중요정보 저장/전송 등에 대한 명시적인 기준 수립 및 암호화 적용이 미흡하여, 중요정보가 유출되거나 법적요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보 등 중요정보의 전송 및 저장 시 안전한 보호를 위한 암호 정책 수립·이행',
                    'threatcode' => 'TC1-10',
                ),
            364 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '준거성',
                    'depth' => 'A.18.2.1',
                    'clause' => '정보보호 및 해당 구현 방식(즉 정보보호의 통제목적, 통제 수단, 정책, 프로세스, 절차)을 관리하는 조직의 접근 방법을 계획된 주기로, 또는 중대한 변화가 발생한 경우 독립적인 검토를 실시해야 한다.',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '절차에 따른 정보보호 통제 등의 접근 방법 및 변화 발생에 대한 독립적인 검토 활동이 미흡하여, 관리체계 운영 활동에 대한 효과성 검증이 어려운 위험',
                    'protection_plan' => '정보보호 정책 또는 변화 발생에 따른 독립적인 감사 수행 등의 주기적 점검 활동 수립 및 실시',
                    'threatcode' => 'TC8-01',
                ),
            365 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '준거성',
                    'depth' => 'A.18.2.2',
                    'clause' => '관리자는 정기적으로 자신의 책임 영역 내에서 정보처리 및 절차의 준수 여부를 적절한 보안 정책, 표준 및 기타 보안 요구사항과 견주어 검토해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '조직에서 수립한 정보보호 정책 등에 대한 정기적인 검토활동을 수행하지 않아, 필요 절차가 누락되거나 정보보호 환경 변화 사항을 반영하지 못할 위험',
                    'protection_plan' => '정기적으로 조직에서 정한 정보보호 정책 등에 대한 준수여부를 검토하여 필요시 관련 정책 제 · 개정 및 절차 준수 교육',
                    'threatcode' => 'TC1-04',
                ),
            366 =>
                array (
                    'type' => 'ISO2',
                    'domain' => '준거성',
                    'depth' => 'A.18.2.3',
                    'clause' => '정보 시스템을 정기적으로 점검하여 조직의 정보보호 정책과 표준에 부합되는지 확인해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '조직에서 수립한 정보보호 정책에 따른 정보 시스템 운영 현황 검토 미흡으로, 필요 절차가 누락되거나 정보보호 환경 변화 사항을 반영하지 못할 위험',
                    'protection_plan' => '정기적으로 조직에서 정한 정보보호 정책에 따른 정보시스템 운영 여부를 검토하여 정책에 따른 운영 활동 지원',
                    'threatcode' => 'TC1-04',
                ),
            367 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '정보보호정책',
                    'depth' => 'A.5.1.1',
                    'clause' => '(27017) 클라우드 서비스 이용자의 클라우드 컴퓨팅에 대한 정보 보안정책은 조직의 정보 및 기타 자산에 대한 정보 보안 위험 수준과 일치해야 하며, 다음과 같은 클라우드 서비스의 특성을 고려하여 정보보안정책을 정의하여야 한다.
- 클라우드 컴퓨팅 환경에 저장되는 데이터에 클라우드 서비스 제공자가 접근할 수 있음
- 자산(응용프로그램 등)이 클라우드 컴퓨팅 환경에 자산이 유지됨
- 멀티 테넌트 환경에서 프로세스가 실행됨
- 데이터가 저장되는 물리적 위치(국가)와 적용받는 법적 분쟁이 발생할 수 있음

(27018) 적용 가능한 PII 보호 법령 규정 준수를 지원하는 선언이나 합의와 공공 클라우드 PII 처리자와 그의 고객들(클라우드 서비스 고객) 간에 합의한 계약 용어를 사용하여 정보 보안 정책이 논의 되어야 한다.
계약상 합의는 공공 클라우드 PII 처리자와 그의 하청 계약자 및 클라우드 서비스 고객 간의 책임을 분명하게 할당해야 한다. 이때 해당 클라우드 서비스 형태(클라우드 컴퓨팅 참조 모델의 IaaS, PasS 혹은 SaaS 분류) 를 고려하여야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '경영진에 의한 정책 승인 미흡 및 임직원, 관련 외부 직원에게 수립된 정책을 공유하지 않아, 보안기준에 적합하지 않은 업무를 수행할 위험',
                    'protection_plan' => '정보보호정책 제·개정 시 경영진의 승인을 득한 후 관련 임직원 및 외부직원에게 공유',
                    'threatcode' => 'TC1-09',
                ),
            368 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '정보보호 조직',
                    'depth' => 'A.6.1.1',
                    'clause' => '(27017) 클라우드 서비스 공급자와 정보보안 역할 및 책임의 적절한 할당에 동의하고 할당 된 역할과 책임을 이행 할 수 있는지 확인하여야 한다.
정보 보안 역할과 양 당사자의 책임은 계약서에 명시하여야 한다.
클라우드 서비스 공급자의 고객지원 및 관리 기능과의 관계를식별하고 관리하여야 한다.

(27018) Public 클라우드 PII 처리자는 계약 하의 PII 처리와 관련하여 클라우드 서비스 고객을 위하여 단일(일관된) 연락Point를 지정해야 한다. (개인정보 처리와 관련된 고충처리)',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '공급자의 보안규범 준수에 대한 강제화 불가능 및 피해발생에 따른 피해 구제의 어려움',
                    'protection_plan' => '공급자와의 계약시 보안요구사항 정의 및 계약 반영',
                    'threatcode' => 'TC1-08',
                ),
            369 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '정보보호 조직',
                    'depth' => 'A.6.1.3',
                    'clause' => '(27017) 클라우드 서비스 고객과 클라우드 서비스 공급자의 결합된 운영과 관련된 권한을 식별하여야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '관리자 및 특수 권한에 대한 관리가 미흡하여 권한의 오남용에 따른 보안사고가 발생할 위험',
                    'protection_plan' => '관리자 및 특수 권한은 최소한의 인원에게만 부여하고 권한 부여 시 책임자 승인 절차 수립',
                    'threatcode' => 'TC6-06',
                ),
            370 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '정보보호 조직',
                    'depth' => 'A.6.3.1 ',
                    'clause' => '(27017) 클라우드 서비스 사용자는 클라우드 서비스 사용에 관한 정책 및 절차를 정의해야 하며, 자신의 역할과 책임을 인식하여야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '클라우드 서비스 사용에 관한 정책 및 절차의 미정의 시 사용자의 역할과 책임에 관한 인식 부족 ',
                    'protection_plan' => '클라우드 관련 정책 및 지침 정의를 하고 서비스 사용자에 관한 역할 부여및 적절한 교육 실시',
                    'threatcode' => 'TC1-02',
                ),
            371 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '인적자원 보안',
                    'depth' => 'A.7.2.2',
                    'clause' => '(27017) 클라우드 서비스 비즈니스 관리자, 클라우드 서비스 관리자, 클라우드 서비스 통합 자 및 클라우드 서비스 사용자 (관련 직원 및 계약자 포함)에 대한 인식, 교육 및 교육 프로그램에 다음 항목을 추가하여야 한다.
- 클라우드 서비스 사용을위한 표준 및 절차
- 클라우드 서비스와 관련된 정보 보안 위험 및 이러한 위험 관리 방법
- 클라우드 서비스의 사용으로 인한 시스템 및 네트워크 환경 위험
- 적용 가능한 법적 및 규제 사항

(27018) 관련 있는 직원들, 특히 PII를 다루도록 지정된 직원들이 개인 정보나 보안 규칙 및 절차의 침해 시 공공 클라우드 PII 처리자에게 일어날 수 있는 결과(법적 결과, 사업 손실, 브랜드나 평판 하락)와 직원에게 일어날 수 있는 결과(징계), 그리고 PII 당사자에게 일어날 수 있는 결과(물리적, 물질적 감정적 결과) 대해 인식하게 만들 수 있는 방법들이 시행 되어야 한다.  ',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 교육 대상의 누락 또는 교육의 질적 저하로 인한 조직 전체 보안 수준 및 효율성이 저하될 위험',
                    'protection_plan' => '정보보호 관리체계 개요, 정보보호 관련 내부규정, 유관 법률, 침해사고 등을 포함하여 정기적으로 정보보호 교육 시행',
                    'threatcode' => 'TC1-09',
                ),
            372 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '자산관리',
                    'depth' => 'A.8.1.1',
                    'clause' => '(27017) 자산 목록은 클라우드 컴퓨팅 환경에 저장된 정보 및 관련 자산을 고려해야함. 인벤토리 기록에는 자산이 유지되는 위치(예 : 클라우드 서비스 식별)가 표시되어야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '자산 목록의 갱신 관리가 미흡하여 자산 변동 사항이 적절히 반영되지 못할 위험',
                    'protection_plan' => '식별된 정보자산 별도 목록으로 관리',
                    'threatcode' => 'TC1-04',
                ),
            373 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '자산관리',
                    'depth' => 'A.8.1.5',
                    'clause' => '(27017) 클라우드 컴퓨팅 환경에 저장된 모든 정보 및 관련 자산은 서비스 종료시 반납 및 삭제 절차를 마련, 문서화 되어야 한다.',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '클라우드 시스템 저장매체의 폐기 기준 부재 및 불용처리 미흡으로 인한 정보가 유출될 위험',
                    'protection_plan' => '클라우드 컴퓨팅 플랫폼을 통해 저장매체를 폐기할 경우 폐기 절차 및 완전한 폐기 확인',
                    'threatcode' => 'TC4-08',
                ),
            374 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '자산관리',
                    'depth' => 'A.8.2.2',
                    'clause' => '(27017) 클라우드 서비스 고객은 클라우드 서비스 고객이 채택한 라벨링 절차에 따라 클라우드 컴퓨팅 환경에서 유지 관리되는 정보 및 관련 자산에 라벨을 지정하여야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호관리체계 범위내의 모든 정보자산에 대한 식별 및 분류가 미흡하여 정보자산의 관리 소홀에 따른 사고가 발생할 위험 ',
                    'protection_plan' => '정보자산의 분류기준 및 중요도를 평가하기 위한 기준 수립',
                    'threatcode' => 'TC1-04',
                ),
            375 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '접근통제',
                    'depth' => 'A.9.1.2',
                    'clause' => '(27017) 클라우드 서비스 고객의 네트워크 서비스 사용에 대한 액세스 제어 정책은 사용되는 각 클라우드 서비스에 대한 사용자 액세스 요구 사항을 지정하여야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '내부 네트워크 접근 통제가 미흡하여 외부 또는 불필요한 내부사용자의 중요시스템 접근이 가능할 위험',
                    'protection_plan' => '접근통제 정책에 따라 인가된 사용자만이 네트워크에 접근할 수 있도록 네트워크 식별자(IP) 할당 등을 통제',
                    'threatcode' => 'TC6-11',
                ),
            376 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '접근통제',
                    'depth' => 'A.9.2.1',
                    'clause' => '(27018) 사용자 등록과 삭제 절차는 비밀번호나 다른 사용자 등록 데이터의 오염이나 변경(부적절한 공개의 결과) 등과 같은 사용자가 접근 통제를 위협 받는 상황을 상정하여야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템에 등록된 사용자 계정 및 접근권한 부여 현황에 대한 관리가 미흡하여, 권한의 오남용에 따른 보안사고 발생 및 책임추적성의 확보가 어려울 위험',
                    'protection_plan' => '정보시스템의 사용자 계정 등록/삭제(비활성화) 및 접근권한 등록/변경/삭제에 관한 공식적인 절차 수립/이행',
                    'threatcode' => 'TC1-02',
                ),
            377 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '접근통제',
                    'depth' => 'A.9.2.3',
                    'clause' => '(27017) 확인 된 위험에 따라 클라우드 서비스 고객의 클라우드 서비스 관리자가 클라우드 서비스의 관리 기능을 인증 할 수 있도록 충분한 인증 기술 (예 : 다중 요소 인증)을 사용하여야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '클라우드 서비스 관리자 접근에 대한 인증 절차 적용이 미흡하여 비인가자에 의한 시스템 접근 등 보안사고가 발생할 위험',
                    'protection_plan' => '클라우드 서비스 관리자에 대한 접근은 사용자 인증, 로그인 횟수 제한, 불법 로그인 시도 경고 등 안전한 사용자 인증 절차에 의해 통제',
                    'threatcode' => 'TC2-02',
                ),
            378 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '접근통제',
                    'depth' => 'A.9.2.4',
                    'clause' => '(27017) 클라우드 서비스 고객은 클라우드 서비스 공급자의 암호와 같은 비밀 인증 정보를 할당하는 관리 절차가 클라우드 서비스 고객의 요구 사항을 충족하는지 확인하여야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '클라우드 서비스 공급자의 접근에 대한 인증 관리가 미흡하여 비인가자에 의한 시스템 접근 등 보안사고가 발생할 위험',
                    'protection_plan' => '클라우드 서비스 공급자의 접근에 대한 인증 관리는 사용자 인증, 로그인 횟수 제한, 불법 로그인 시도 경고 등 안전한 사용자 인증 절차에 의해 통제',
                    'threatcode' => 'TC2-02',
                ),
            379 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '접근통제',
                    'depth' => 'A.9.4.1',
                    'clause' => '(27017) 클라우드 서비스의 정보에 대한 액세스가 액세스 제어 정책에 따라 제한되고 이러한 제한이 실현되는지 확인하여야 한다.
여기에는 클라우드 서비스, 클라우드 서비스 기능 및 서비스에서 유지 관리되는 클라우드 서비스 고객 데이터에 대한 액세스 제한이 포함된다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템에 대한 접근 통제, 안전한 접근 수단의 적용이 미흡하여 비인가 시스템 접근, 자원 침탈, 정보 유출, 장애 등 발생할 위험',
                    'protection_plan' => '서버별로 접근이 허용된 사용자를 명확하게 식별/인증하고 안전한 접근수단 적용',
                    'threatcode' => 'TC2-02',
                ),
            380 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '접근통제',
                    'depth' => 'A.9.4.4',
                    'clause' => '(27017) 유틸리티 프로그램 사용이 허용되는 경우 클라우드 서비스 고객은 클라우드 컴퓨팅 환경에서 사용할 유틸리티 프로그램을 식별하고 클라우드 서비스의 제어를 방해하지 않도록하여야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '악성코드 및 바이러스 감염으로 인한 중요 데이터 유출/손실, 시스템 장애가 발생할 위험',
                    'protection_plan' => '바이러스, 웜, 트로이목마 등의 악성코드로부터 정보시스템을 보호하기 위하여 보호대책 수립/이행',
                    'threatcode' => 'TC3-12',
                ),
            381 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '접근통제',
                    'depth' => 'A.9.5.2',
                    'clause' => '(27017) 가상 머신을 구성하는 경우, 클라우드 서비스 사용자 및 제공자는 적절한 기술적 조치 및 보안환경 설정을 확인하여야 한다.
- 불필요 포트 및 프로토콜, 서비스 제거
- 악성코드 방지 및 로깅',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '악성코드 및 바이러스 감염으로 인한 중요 데이터 유출/손실, 시스템 장애가 발생할 위험',
                    'protection_plan' => '바이러스, 웜, 트로이목마 등의 악성코드로부터 정보시스템을 보호하기 위하여 보호대책 수립/이행',
                    'threatcode' => 'TC3-12',
                ),
            382 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '암호',
                    'depth' => 'A.10.1.1',
                    'clause' => '(27017) 클라우드 서비스 공급자가 암호화를 제공하면 클라우드 서비스 고객은 클라우드 서비스 공급자가 제공 한 모든 정보를 검토하여 암호화 기능이 다음과 같은지 확인하여야 한다.

(27018)Public 클라우드 PII 처리자는 클라우드 서비스 고객에게 그가 처리하는 PII를 보호하기 위해 암호를 사용하는 상황에 대하여 정보를 제공해야 한다. 또한 Public 클라우드 PII 처리자는 클라우드 서비스 고객이 자신의 암호 보호를 적용할 때 그를 지원하기 위해 제공할 수 있는 모든 능력에 대한 정보를 서비스 고객에게 제공해야 한다.',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보 및 중요정보 저장/전송에 대한 명시적인 기준 수립 및 암호화 적용이 미흡하여, 중요정보가 유출되거나 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보 등 중요정보의 전송 및 저장 시 안전한 보호를 위한 암호 정책 수립/이행',
                    'threatcode' => 'TC1-10',
                ),
            383 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '암호',
                    'depth' => 'A.10.1.2',
                    'clause' => '(27017) 클라우드 서비스 고객은 자체 클라우드 서비스 고객이 자체 키 관리 또는 별개의 키 관리 서비스를 사용하는 경우 클라우드 서비스 공급자가 암호화 작업을 위한 암호화 키를 저장하고 관리하도록 허용하여서는 안된다',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '암호키 분실 및 비인가자 접근으로 인해 변조 또는 중요정보 유출될 위험',
                    'protection_plan' => '암호키 생성, 이용, 보관, 배포, 복구, 파기 등에 관한 절차를 수립/이행',
                    'threatcode' => 'TC1-10',
                ),
            384 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '물리적 및 환경적 보안',
                    'depth' => 'A.11.2.7',
                    'clause' => '(27017) 클라우드 서비스 고객은 클라우드 서비스 공급자가 리소스의 안전한 폐기 또는 재사용을 위한 정책과 절차를 가지고 있다는 확인을 요청하여야 한다.

(27018) 장비의 안전한 폐기 및 재사용을 위하여 PII 정보를 저장할 가능성이 있는 저장매체를 포함한 장비는 정보가 저장 되어 있는 것처럼 취급해야 한다.',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '클라우드 시스템 저장매체의 폐기 기준 부재 및 불용처리 미흡으로 인한 정보가 유출될 위험',
                    'protection_plan' => '클라우드 컴퓨팅 플랫폼을 통해 저장매체를 폐기할 경우 폐기 절차 및 완전한 폐기 확인',
                    'threatcode' => 'TC4-08',
                ),
            385 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '운영보안',
                    'depth' => 'A.12.1.3',
                    'clause' => '(27017) 클라우드 서비스가 제공하는 약속 된 용량이 클라우드 서비스 고객의 요구 사항을 충족하는지 확인하여야 한다.
시간이 지남에 따라 클라우드 서비스의 성능을 보장하기 위해 클라우드 서비스의 사용을 모니터링하고 용량 요구를 예측하여야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '성능 및 용량 임계치 초과로 인한 서비스 장애 발생 위험',
                    'protection_plan' => '성능 및 용량을 지속적으로 모니터링 하기 위한 절차를 수립하고, 성능 및 용량 요구사항(임계치)을 초과하는 경우 조치절차 수립·이행',
                    'threatcode' => 'TC1-01',
                ),
            386 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '운영보안',
                    'depth' => 'A.12.1.4',
                    'clause' => '(27018) PII를 테스트 목적의 사용을 피할 수 없는 경우, 위험 평가가 수행 되어야 한다. 식별된 위험을 최소화 하기 위한 기술적 조직적 방법이 구현되어야 한다. ',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개발/테스트 시스템과 운영시스템이 분리되지 않아 테스트 용도의 어플리케이션에 내재된 취약점을 악용한 공격이 발생되거나 개발 상의 오류 등이 시스템에 영향을 미쳐 장애가 발생할 위험',
                    'protection_plan' => '개발 및 시험 시스템을 운영시스템과 분리',
                    'threatcode' => 'TC1-05',
                ),
            387 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '운영보안',
                    'depth' => 'A.12.1.5',
                    'clause' => '(27017) 클라우드 서비스 사용자는 장애 등의 이슈로 인하여 클라우드 내 자산이 손실되어 복구가 힘들 수 있으며, 장애 처리 절차에 대하여 문서화하여야 하며 다음과 같은 내용을 포함하여야 한다.
- 서버, 네트워크 및 스토리지와 같은 가상화 디바이스의 설치, 변경 및 삭제
- 클라우드 서비스 사용을 위한 종료 절차
- 백업 및 복원
문서 상 작업에 대하여 모니터링하여야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '장애 등의 이벤트 발생 시 정해진 문서화된 절차에 따른 대응이 미흡하여 적절한 조치, 대응이 이루어지지 않을 위험',
                    'protection_plan' => '장애 등의 이벤트에 관한 문서화된 절차를 수립하여 체계에 따른 대응 및 복구 수행',
                    'threatcode' => 'TC1-04',
                ),
            388 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '운영보안',
                    'depth' => 'A.12.3.1',
                    'clause' => '(27017) 클라우드 서비스 공급자가 클라우드 서비스의 일부로 백업 기능을 제공하는 경우 클라우드 서비스 고객은 클라우드 서비스 공급자에게 백업 기능의 사양을 요청해야함. 클라우드 서비스 고객은 백업 요구 사항을 충족하는지 확인하여야 한다.

(27018) 클라우드 컴퓨팅 모델을 기반으로 한 정보 처리 시스템은 데이터 손실로부터 보호하고, 데이터 처리 과정의 연속성을 보장하며 중단 이벤트 이후의 데이터 처리 과정을 복구하는 능력을 제공하는 오프-사이트 백업추가/대안 체계를 소개한다. 여러 물리적,논리적 장소의 다수의 데이터 복사본이 백업/복구 목적을 위하여 생성되거나 유지되어야 한다.   
이러한 관점에서 PII-특정 책임은 클라우드 서비스 고객에게 있을 수 있다. Public 클라우드 PII 처리자가 명시적으로 백업과 복구 서비스를 클라우드 서비스 고객에게 제공하는 경우, Public 클라우드 PII 처리자는 클라우드 서비스 고객의 데이터에 대한 백업과 복구 관점에서 클라우드 서비스 용량에 대한 정확한 정보를 클라우드 서비스 고객에게 제공하여야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '중요정보에 대한 백업 및 보관 관리가 미흡하여 보안사고 발생시 시스템 복구가 어려울 위험',
                    'protection_plan' => '백업 대상, 주기, 방법, 절차 등이 포함된 백업 및 복구절차 수립 및 정기적 테스트 이행',
                    'threatcode' => 'TC1-04',
                ),
            389 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '운영보안',
                    'depth' => 'A.12.4.1',
                    'clause' => '(27017) 클라우드 서비스 고객은 이벤트 로깅을위한 요구 사항을 정의하고 클라우드 서비스가 이러한 요구 사항을 충족하는지 확인하여야 한다.

(27018) 불규칙성을 식별하고 해결책을 제시하기 위하여 기술되고 문서화 된 주기로 이벤트 로그를 검사하기 위한 과정을 시행 하여야 한다.
가능하다면, 이벤트의 결과나 누군가에 의하여 PII 변경 되었는지 아닌지(추가, 변경 혹은 삭제)를 이벤트 로그는 기록해야 한다. 클라우드 컴퓨팅 참조 모델에서 다른 서비스 분류의 서비스를 제공하기 위하여 여러 서비스 제공자가 관련된 경우, 이 지침을 구현 하는데 다양하거나 공유되는 역할이 있을 수 있다.
Public 클라우드 PII 처리자는 클라우드 서비스 고객에 의해 언제 어떤 방법으로 로그 정보가 사용 가능하게 되는 지에 대한 기준을 정의하여야 한다. 이러한 절차는 클라우드 서비스 고객이 사용 가능하게 되어야 한다. 
클라우드 서비스 고객이 Public 클라우드 PII 처리자가 통제하는 로그 기록에 접근 허용을 받은 경우, Public 클라우드 PII 처리자는 클라우드 서비스 고객이 오직 클라우드 서비스 고객의 활동과 연관된 로그 기록에만 접근 가능하며 다른 클라우드 서비스 고객의 활동과 연관된 로그 기록에는 접근 할 수 없음을 보증해야 한다.',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '정보시스템 및 중요정보, 응용프로그램에 대한 로그 기록, 보관 및 사용자 접근이력 등에 대해 주기적인 점검활동이 없어 보안사고 발생 시 대응이 어렵고, 악의적인 사용자에 의한 정보유출 등 보안사고 발생 위험',
                    'protection_plan' => '주요 정보시스템에 대한 로그관리 절차를 수립하고 이에 따라 로그를 생성 및 보관하고, 로그 기록의 주기적 검토(모니터링)',
                    'threatcode' => 'TC7-01',
                ),
            390 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '운영보안',
                    'depth' => 'A.12.4.2',
                    'clause' => '(27018) 보안 모니터링과 운영 분석을 위한 목적으로 기록된 로그 정보는 PII를 포함할 수 있다. 기록된 정보가 오직 의도된 목적으로만 사용되는 것을 보증하기 위하여 접근 통제(9.2.3 참조) 등의 방법을 시행 해야 한다',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '주요 정보시스템 자산에 대한 로그 기록, 보관 및 관리 절차가 미흡하여 보안사고 발생시 대응이 어려울 위험',
                    'protection_plan' => '로그기록은 별도 로그 서버, 저장장치를 통해 백업하고 로그기록에 대한 접근권한 부여 최소화',
                    'threatcode' => 'TC7-02',
                ),
            391 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '운영보안',
                    'depth' => 'A.12.4.3',
                    'clause' => '(27017) 권한 작업이 클라우드 서비스 고객에게 위임 된 경우 해당 작업의 작업과 성능을 기록하여야 한다.
클라우드 서비스 고객은 클라우드 서비스 공급자가 제공하는 로깅 기능이 적절한 지 또는 클라우드 서비스 고객이 추가 로깅 기능을 구현해야하는지 여부를 결정하여야 한다.',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '시스템 관리자, 운영자에 대한 활동 로그 기록, 보관 및 주기적인 점검활동이 없어 보안사고 발생 시 대응이 어렵고, 내부 악의적인 사용자에 의한 정보유출 등 보안사고 발생 위험',
                    'protection_plan' => '로그관리 절차를 수립하고 이에 따라 로그를 생성 및 보관하고, 로그 기록의 주기적 검토(모니터링)',
                    'threatcode' => 'TC7-01',
                ),
            392 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '운영보안',
                    'depth' => 'A.12.4.4',
                    'clause' => '(27017) 클라우드 서비스 고객은 클라우드 서비스 공급자 시스템에 사용되는 시간 동기화에 대한 정보를 요청하여야 한다.',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '시각동기화 관리 미흡으로 인한 시스템 내 이슈 발생 시 명확한 시기 파악이 불가능할 위험',
                    'protection_plan' => '각 정보시스템 시각을 표준시각으로 동기화',
                    'threatcode' => 'TC7-01',
                ),
            393 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '운영보안',
                    'depth' => 'A.12.4.5',
                    'clause' => '(27017) 클라우드 서비스 사용자는 클라우드 서비스 제공자에게 클라우드 서비스 모니터링 기능의 정보를 요청하여야 한다.',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '정보시스템 및 중요정보, 응용프로그램에 대한 로그 기록, 보관 및 사용자 접근이력 등에 대해 주기적인 점검활동이 없어 보안사고 발생 시 대응이 어렵고, 악의적인 사용자에 의한 정보유출 등 보안사고 발생 위험',
                    'protection_plan' => '주요 정보시스템에 대한 로그관리 절차를 수립하고 이에 따라 로그를 생성 및 보관하고, 로그 기록의 주기적 검토(모니터링)',
                    'threatcode' => 'TC7-01',
                ),
            394 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '운영보안',
                    'depth' => 'A.12.6.1',
                    'clause' => '(27017) 제공된 클라우드 서비스에 영향을 줄 수있는 기술적 취약성 관리에 관해 클라우드 서비스 공급자에게 정보를 요청하여야 한다.
클라우드 서비스 고객은 관리해야 할 기술적인 취약점을 파악하고 이를 관리하는 프로세스를 명확하게 정의하여야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템에 대한 정기적 취약점점검 체계 부재 및 식별된 위험에 대한 처리 전략 및 보호대책 미흡으로 인하여 취약점 노출에 따른 보안사고의 발생 위험 또는 위험수준 감소가 어려운 위험',
                    'protection_plan' => '정보시스템 취약점 점검 절차를 수립하여 정기적으로 점검 을 수행하고, 위험평가를 통해 위험 보완을 위한 보호대책 선정',
                    'threatcode' => 'TC1-04',
                ),
            395 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '커뮤니케이션 보안',
                    'depth' => 'A.13.1.1',
                    'clause' => '(27017) 클라우드 서비스의 공유 환경에서 테넌트 격리를 달성하고 클라우드 서비스 공급자가 이러한 요구 사항을 충족하는지 확인하기 위해 네트워크 분리에 대한 요구 사항을 정의하여야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '내부 네트워크 접근 통제가 미흡하여 외부 또는 불필요한 내부사용자의 중요시스템 접근이 가능할 위험',
                    'protection_plan' => '네트워크를 구성하는 주요자산 목록 등을 최신으로 유지하고, 접근통제 정책에 따라 분리된 네트워크 영역간에 침입차단시스템 등을 통한 접근통제',
                    'threatcode' => 'TC6-08',
                ),
            396 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '커뮤니케이션 보안',
                    'depth' => 'A.13.2.1',
                    'clause' => '(27018) 정보 전송을 위해 물리 매체를 사용할 때마다 시스템은 물리 매체의 형태, 인가 받은 송/수신자, 일시 및 시간, 물리 매체의 숫자를 포함하여 PII를 갖고 있는 물리 매체의 반입, 반출을 기록 하여야 한다.
가능한 경우 클라우드 서비스 고객은 데이터가 중간 경로가 아닌 오직 목적지에서만  데이터 접근이 가능함을 보증하기 위한 추가적인 방법(암호화)을 시행할 것을 요청 받아야 한다.(전송구간 암호화 등)',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '모든 유형의 통신 시설을 사용한 중요정보 전송시 안전한 정보 전송을 위한 절차 마련 미흡에 따른 정보유출 위험',
                    'protection_plan' => '중요정보(개인정보, 기밀정보 등)를 전송하는 경우 안전한 전송을 위한 공식적인 절차 마련 등 보호대책 수립·이행',
                    'threatcode' => 'TC1-02',
                ),
            397 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '시스템 도입, 개발, 유지관리',
                    'depth' => 'A.14.1.1',
                    'clause' => '(27017) 클라우드 서비스 고객은 클라우드 서비스에 대한 정보 보안 요구 사항을 결정한 다음 클라우드 서비스 공급자가 제공하는 서비스가 이러한 요구 사항을 충족시킬 수 있는지 평가하여야 한다.
이 평가를 위해 클라우드 서비스 고객은 클라우드 서비스 공급자의 정보 보안 기능에 대한 정보를 요청하여야 한다.
클라우드 서비스 공급자는 클라우드 서비스 고객에게 그들이 사용하는 정보 보안 기능에 대한 정보를 제공하여야 한다.
이 정보는 악의적 의도를 가진 사람에게 유용 할 수있는 정보를 공개하지 않고 유익하여야 한다.
클라우드 서비스에 대한 기타 정보 비공개 계약을 맺고있는 클라우드 서비스 고객 또는 잠재적 클라우드 서비스 고객에게 제공되는 클라우드 서비스와 관련되므로 보안 제어에 대한 구현 세부 정보의 공개를 제한하여야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '클라우드 시스템 및 서비스 도입 시 보안요구사항 정의 및 업무 절차가 미흡하여 신규 정보시스템 개발 또는 기존 시스템 변경에 따른 취약점 발생 위험',
                    'protection_plan' => '신규 정보시스템 도입 및 기존 시스템 변경 시 법적 요구사항을 포함한 보안 요구사항 정의',
                    'threatcode' => 'TC1-04',
                ),
            398 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '시스템 도입, 개발, 유지관리',
                    'depth' => 'A.14.2.1',
                    'clause' => '(27017) 클라우드 서비스 고객은 안전한 개발 절차 및 관행을 사용하는 정보를 클라우드 서비스 공급자에게 요청하여야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '클라우드 환경 내 개발에 대한 보안요구사항 정의 및 업무 절차가 미흡하여 신규 정보시스템 개발 또는 기존 시스템 변경에 따른 취약점 발생 위험',
                    'protection_plan' => '신규 정보시스템 개발 및 기존 시스템 변경 시 법적 요구사항을 포함한 보안 요구사항 정의',
                    'threatcode' => 'TC1-04',
                ),
            399 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '공급자 관계',
                    'depth' => 'A.15.1.1',
                    'clause' => '(27017) 클라우드 서비스 공급자를 공급 업체 관계에 대한 정보 보안 정책의 한 유형으로 포함하여야 한다.',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '공급자의 보안규범 준수에 대한 강제화 불가능 및 피해발생에 따른 피해 구제의 어려움',
                    'protection_plan' => '공급자와의 계약시 보안요구사항 정의 및 계약 반영',
                    'threatcode' => 'TC1-08',
                ),
            400 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '공급자 관계',
                    'depth' => 'A.15.1.2',
                    'clause' => '(27017) 서비스 계약에 설명 된대로 클라우드 서비스와 관련된 정보 보안 역할 및 책임을 확인해야함. 여기에는 다음 프로세스가포함될 수 있다.
- 맬웨어 방지
- 백업
- 암호 통제
- 취약성 관리
- 사고 관리
- 기술적 준수 확인
- 보안 테스트
- 감사
- 로그 및 감사 추적을 포함한 증거 수집, 유지 보수 및 보호
- 서비스 계약 종료시 정보 보호
- 인증 및 접근 통제
- 신원 및 액세스 관리',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '공급자의 보안규범 준수에 대한 강제화 불가능 및 피해발생에 따른 피해 구제의 어려움',
                    'protection_plan' => '공급자와의 계약시 보안요구사항 정의 및 계약 반영',
                    'threatcode' => 'TC1-08',
                ),
            401 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '정보보호 사고 관리',
                    'depth' => 'A.16.1.1',
                    'clause' => '(27017) 정보 보안 사고 관리를 위한 책임 할당을 확인하고 클라우드 서비스 고객의 요구 사항을 충족하는지 확인하여야 한다.

(27018) Public 클라우드 PII 처리자는 정보 보안 사고에 대해, 정보 보안 사고 관리 처리의 일환으로 PII와 관련된 치명적인 데이터 침해가 발생했는지 결정하기 위한 검사를 실시해야 한다.
정보 보안 이벤트 때문에 이러한 감사를 실시할 필요는 없다. 정보 보안 이벤트는 PII를 저장하는 PII나 Public 클라우드 PII 처리자의 장비나 설비로의 실제적. 혹은 상당한 개연성을 가진 비인가 접속을 초래하지 않는다. 또한 방화벽이나 에지 서버로의 핑과 다른 형태의 브로드캐스트 공격, 포트 스캔, 로그온 시도, 서비스 거부 공격 및 패킷 스니핑을 포함한다',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '침해사고 대응절차 및 체계 구축이 미흡하여 사고 발생시 효과적으로 대응하지 못할 위험',
                    'protection_plan' => '침해사고 발생 시 신속한 대응을 위한 내용(비상연락체계, 보고절차, 대응 및 복구절차, 훈련 등)을 포함한 대응절차 수립',
                    'threatcode' => 'TC1-01',
                ),
            402 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '정보보호 사고 관리',
                    'depth' => 'A.16.1.2',
                    'clause' => '(27017) 클라우드 서비스 고객은 클라우드 서비스 공급자에게 다음과 같은 메커니즘에 대한 정보를 요청하여야 한다.
- 클라우드 서비스 고객이 감지한 정보 보안 이벤트를 클라우드 서비스 공급자에게 보고
- 클라우드 서비스 공급자가 클라우드 서비스 공급자가 탐지한 정보 보안 이벤트와 관련된 보고서 수신
- 클라우드 서비스 고객이보고된 정보 보안 이벤트의 상태를 추적',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '침해사고 발생 시 정해진 절차에 따른 사고 경위 분석 및 보고가 미흡하여 적절한 조치, 대응이 이루어지지 않을 위험',
                    'protection_plan' => '침해사고 대응 체계에 따른 신속한 보고 수행',
                    'threatcode' => 'TC1-01',
                ),
            403 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '정보보호 사고 관리',
                    'depth' => 'A.16.1.7',
                    'clause' => '(27017) 클라우드 서비스 사용자 및 제공자는 잠재적인 디지털 증거 또는 클라우드 환경에서의 기타 요청에 대한 회신 절차에 동의하여야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '침해사고 발생에 따른 증거 보존을 위한 절차 수립이 미흡하여 침해사고 발생 시 대응 및 분석이 어려울 위험',
                    'protection_plan' => '사고 발생 시 증거보존을 위한 로그, 감사증적 등을 확보할 수 있는 절차 마련',
                    'threatcode' => 'TC1-04',
                ),
            404 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '준거성',
                    'depth' => 'A.18.1.1',
                    'clause' => '(27017) 관련 법률 및 규정이 클라우드 서비스 공급자를 관할하는 관할권 및 클라우드 서비스 고객을 관할하는 관할권의 문제 일 수 있다는 문제를 고려하여야 한다.
클라우드 서비스 고객은 클라우드 서비스 공급자가 클라우드 서비스 고객의 비즈니스에 필요한 관련 규정 및 표준을 준수하는지 확인하여야 한다. 그러한 증거는 제 3 자 심사원에 의해 생성 된 인증 일 수 있다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '조직의 현황에 맞는 관련 정책, 법규 준수 등에 대한 수립 및 주기적 점검 미흡으로, 정보보호에 대한 기준 적용이 어려워 체계적인 보안요건 미준수 및 실행력 저하 위험',
                    'protection_plan' => '조직의 현황에 맞는 관련 정책을 수립하여 이행할 수 있도록 주기적인 교육 및 감사',
                    'threatcode' => 'TC1-04',
                ),
            405 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '준거성',
                    'depth' => 'A.18.1.2',
                    'clause' => '(27017) 클라우드 서비스 고객은 라이센스가 부여 된 소프트웨어를 클라우드 서비스에 설치하기 전에 클라우드 관련 라이센스 요구사항을 식별하는 절차를 가져야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '지적 재산권 및 전용 소프트웨어 제품 사용을 위한 정책 수립 및 이행이 미흡하여, 법률 위반에 따른 경제적 손실 및 악성코드, 바이러스 감염으로 인한 중요 데이터 유출/손실, 시스템 장애가 발생할 위험',
                    'protection_plan' => '지적 재산권 및 전용 소프트웨어 제품 사용에 대한 정책을 수립하여 이행할 수 있도록 주기적인 교육 및 감사',
                    'threatcode' => 'TC1-04',
                ),
            406 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '준거성',
                    'depth' => 'A.18.1.3',
                    'clause' => '(27017) 클라우드 서비스 공급자가 클라우드 서비스 공급자가 클라우드 서비스 고객이 클라우드 서비스를 사용하는 것과 관련된 클라우드 서비스 공급자가 수집하고 저장한 기록의 보호에 대한 정보를 요청하여야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '조직의 주요 문서 등에 대한 기록, 주요 정보시스템 자산 등에 대한 로그 기록, 보관 및 관리 절차가 미흡하여 기밀 유출 및 보안사고 발생 시 대응이 어려울 위험',
                    'protection_plan' => '조직의 주요 문서 등에 대한 기록 관리 절차 및 주요 정보시스템 등에 대한 로그 관리 절차를 수립하고 이에 따라 보호',
                    'threatcode' => 'TC1-02',
                ),
            407 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '준거성',
                    'depth' => 'A.18.1.4',
                    'clause' => '(27017) ISO / IEC 27018, PII 프로세서 역할을하는 공용 클라우드에서 PII 보호 부속서는 이 주제에 대한 추가 정보를 제공하여야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '조직에서 준수해야 하는 관련 법률에 따른 개인정보 보호를 위한 안전성 확보 조치가 미흡하여, 중요정보가 유출되거나 법적요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '조직에서 준수해야 하는 관련 법률을 식별하여 개인정보 등 중요정보의 암호화 조치, 접근통제 등의 정책을 수립하고 주기적 점검 활동 실시',
                    'threatcode' => 'TC1-02',
                ),
            408 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '준거성',
                    'depth' => 'A.18.1.5',
                    'clause' => '(27017) 클라우드 서비스 사용에 적용되는 일련의 암호화 제어가 관련 계약, 법률 및 규정을 준수하는지 확인하여야 한다.',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인정보 및 중요정보 저장/전송 등에 대한 명시적인 기준 수립 및 암호화 적용이 미흡하여, 중요정보가 유출되거나 법적요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보 등 중요정보의 전송 및 저장 시 안전한 보호를 위한 암호 정책 수립·이행',
                    'threatcode' => 'TC1-10',
                ),
            409 =>
                array (
                    'type' => 'ISO27017/27018',
                    'domain' => '준거성',
                    'depth' => 'A.18.2.1',
                    'clause' => '(27017) 클라우드 서비스 고객은 클라우드 서비스에 대한 정보 보안 제어 및 지침의 구현이 클라우드 서비스 공급자가 제기한 모든 주장과 일치한다는 문서화 된 증거를 요청하여야 한다. 그러한 증거에는 관련 표준에 대한 인증이 포함될 수 있다.

(27018) 개별 클라우드 서비스 고객 감사가 비효율적이거나 보안에 위험을 증가시킬 수 있는 경우, Public 클라우드 PII 처리자는 계약 전이거나, 계약 중인  클라우드 서비스 고객에게 정보 보안이 Public 클라우드 PII처리자의 정책 및 절차에 따라 구현 운영 이라는 독립적인 증거를 사용 가능하게 만들어야 한다.
PII 처리자에 의해 선택된 관련된 독립적인 감사는 Public 클라우드 PII 처리자의 처리 과정을 검사하고자 하는 클라우드 서비스 고객의 이해를 충족시키기 위해 일반적으로 수용 가능한 방식이어야 하며, 상당한 투명성이 제공되어야 한다.',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '절차에 따른 정보보호 통제 등의 접근 방법 및 변화 발생에 대한 독립적인 검토 활동이 미흡하여, 관리체계 운영 활동에 대한 효과성 검증이 어려운 위험',
                    'protection_plan' => '정보보호 정책 또는 변화 발생에 따른 독립적인 감사 수행 등의 주기적 점검 활동 수립 및 실시',
                    'threatcode' => 'TC8-01',
                ),
            410 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '동의 및 선택',
                    'depth' => 'A.1.1.1',
                    'clause' => '개인정보 처리자의 의무는 법, 규정 또는 계약에 의해 정의될 수 있습니다. 이러한 의무에는 클라우드 서비스 이용자가 구현을 위해 퍼블릭 클라우드 수탁자의 서비스를 이용한다는 부분을 포함해야 합니다. 예로 개인정보의 적시 수집 또는 삭제에 대한 내용 포함이 있습니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            411 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '동의 및 선택',
                    'depth' => 'A.1.1.2',
                    'clause' => '개인정보 처리자가 퍼블릭 클라우드 수탁자에 개인정보 주체의 권리 행사를 용이하게 하기 위한 정보 또는 기술적 조치에 의존하는 경우 관련 정보 또는 기술 조치가 계약서에 지정되어야합니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            412 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '목적 정당성 및 명세',
                    'depth' => 'A.2.1.1',
                    'clause' => '퍼블릭 클라우드 수탁자와 클라우드 서비스 이용자간의 계약에는 지침이 포함될 수있습니다. (예, 서비스에 의해 달성 될 수 있는 목표, 수집 및 저장 기간 등)',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            413 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '목적 정당성 및 명세',
                    'depth' => 'A.2.1.2',
                    'clause' => '클라우드 서비스 이용자의 목적을 달성하기 위해 클라우드 서비스 이용자의 일반 지침과 일치하지만 클라우드 서비스 이용자의 특별한 서비스가 없는 퍼블릭 클라우드 수탁자가 개인정보 처리 방법을 결정하는 것이 적합한 기술적 이유가 있을 수 있습니다. 예를 들어 네트워크 또는 처리 용량을 효율적으로 활용하려면 개인정보 주체의 특정 특성에 따라 특정 처리 자원을 할당해야 할 수 있습니다. 퍼블릭 클라우드 수탁자가 처리 방법을 결정할 때 명시적 동의없이 마케팅 및 광고를 목적으로 개인정보를 수집 및 사용하는 경우. 그러한 동의는 서비스하거나 / 서비스를 받는 조건이 되어서는 안됩니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            414 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '수집제한',
                    'depth' => 'A.3.1.1',
                    'clause' => '통제 없음',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            415 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '데이터 최소화',
                    'depth' => 'A.4.1.1',
                    'clause' => '정보 시스템은 정상적인 작동 과정에서 임시 파일을 생성 할 수 있습니다. 이러한 파일은 시스템 또는 응용 프로그램에만 적용되지만 데이터베이스 업데이트 및 다른 응용 프로그램 소프트웨어의 작동과 관련된 파일 시스템 롤백 저장 파일 및 임시 파일이 포함될 수 있습니다. 관련 정보 처리 작업이 완료된 후에는 임시 파일이 필요하지 않지만 삭제할 수없는 경우가 있습니다. 이러한 파일이 계속 사용되는 시간은 항상 결정적인 것은 아니지만 "가비지 수집" 절차는 관련 파일을 식별하고 마지막으로 사용 된 이후의 시간을 결정해야합니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            416 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '데이터 최소화',
                    'depth' => 'A.4.1.2',
                    'clause' => '개인정보 처리 정보 시스템은 지정된 기간을 초과하여 사용되지 않는 임시 파일이 삭제되게 주기적으로 점검을 수행해야 합니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            417 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '사용, 보존 및 공개 제한',
                    'depth' => 'A.5.1.1',
                    'clause' => '퍼블릭 클라우드 수탁자는 법적 구속력을 지니지 않는 개인정보공개 요청을 거부하고, 개인정보 공개를하기 전에 합법적으로 허용되는 경우 해당 클라우드 서비스 이용자에게 문의하고 승인 된 개인정보 공개에 대한 계약 상 합의 된 요청을 해당 클라우드 서비스 이용자가 수락한다는 계약상의 보증을 제공해야합니다 .',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            418 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '사용, 보존 및 공개 제한',
                    'depth' => 'A.5.1.2',
                    'clause' => '가능한 공개 금지의 한 예는 법 집행 수사의 기밀을 유지하기위한 형법상의 금지 등이 있습니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            419 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '사용, 보존 및 공개 제한',
                    'depth' => 'A.5.2.1',
                    'clause' => '개인정보는 정상적인 운영 과정에서 공개 될 수 있습니다. 이러한 공개는 기록되어야 합니다 (12.4.1 참조). 적법한 조사 또는 외부 감사에서 비롯된 것과 같은 제 3 자에 대한 추가 공개도 기록되어야합니다. 기록에는 공시를위한 출처와 공리의 출처가 포함되어야합니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            420 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '정확성과 품질',
                    'depth' => 'A.6.1.1',
                    'clause' => '통제 없음',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            421 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '개방성, 투명성 및 고지',
                    'depth' => 'A.7.1.1',
                    'clause' => '개인정보를 처리하기위한 하도급 계약자의 사용에 대한 규정은 클라우드 서비스 이용자와 퍼블릭 클라우드 수탁자 간의 계약에서 투명해야합니다. 계약서에는 하도급 계약자가 서비스 초기에 클라우드 서비스 이용자가 일반적으로 제공 할 수있는 동의를 토대로 위임을받을 수 있음을 명시해야합니다. 퍼블릭 클라우드 수탁자는 클라우드 서비스 이용자가 의도 한 변경 사항을 적시에 클라우드 서비스 이용자에게 알려서 클라우드 서비스 이용자가 그러한 변경을 객관화하거나 계약을 해지 할 수 있어야합니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            422 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '개방성, 투명성 및 고지',
                    'depth' => 'A.7.1.2',
                    'clause' => '공개 된 정보에는 하도급 계약이 사용된다는 사실과 관련 하도급 계약자의 이름이 포함되어야하며 비즈니스 관련 세부 사항은 포함되지 않아야합니다. 공개 된 정보에는 하도급 계약자가 데이터를 처리 할 수있는 국가 (A.11.1 참조)와 하도급 계약자가 퍼블릭 클라우드 수탁자 (A.10.12 참조)를 준수 할 의무가있는 국가도 포함되어야합니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            423 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '개방성, 투명성 및 고지',
                    'depth' => 'A.7.1.3',
                    'clause' => '허용 가능한 한도를 초과하여 보안 위험을 증가시키기 위해 하도급 계약자 정보의 공개가 평가되는 경우 비공개 계약 및 / 또는 클라우드 서비스 이용자의 요청에 따라 공개해야합니다. 클라우드 서비스 이용자는 해당 정보를 사용할 수 있는지 확인해야합니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            424 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '개인의 참여와 접근',
                    'depth' => 'A.8.1.1',
                    'clause' => '통제 없음',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            425 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '책임성',
                    'depth' => 'A.9.1.1',
                    'clause' => '개인정보가 포함 된 데이터 위반 통지를 다루는 조항은 퍼블릭 클라우드 수탁자와 클라우드 서비스 이용자 간의 계약의 일부가되어야합니다. 계약서에는 퍼블릭 클라우드 수탁자가 클라우드 서비스 이용자가 관련 당국에 통보해야 할 의무를 이행하는 데 필요한 정보를 제공하는 방법을 지정해야합니다. 이 통지 의무는 클라우드 서비스 이용자나 개인정보 주체 또는 해당 책임이있는 시스템 구성 요소로 인해 발생하는 데이터 유출 에까지 적용되지 않습니다. 또한 계약은 개인정보를 포함한 데이터 유출 통지의 최대 지연을 정의해야합니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            426 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '책임성',
                    'depth' => 'A.9.1.2',
                    'clause' => '개인 식별 정보가 포함 된 데이터 유출이 발생하는 경우 사건의 설명, 기간, 사건의 결과 (책임자 및 복구 된 데이터 포함) 및 사고가 발생한 사실 개인정보의 손실, 공개 또는 변경을 초래했습니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            427 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '책임성',
                    'depth' => 'A.9.1.3',
                    'clause' => '개인 식별 정보와 관련된 데이터 유출이 발생하는 경우, 기록에는 알려진 경우 데이터 유출에 대한 설명도 포함되어야합니다. 통지가 수행 된 경우 개인정보가 포함 된 데이터 유출에 대해 클라우드 서비스 이용자 및 / 또는 규제 당국 (예 : 개인정보 보호 기관)에게 알리는 조치.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            428 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '책임성',
                    'depth' => 'A.9.2.1',
                    'clause' => '현재 및 과거의 정책 및 절차에 대한 검토가 필요할 수 있습니다. 개인정보 보호 당국에 의한 고객 분쟁 해결 및 조사의 경우 특정 법적 또는 계약 상 요구 사항이 없을 경우 5 년의 최소 보류 기간을 권장합니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            429 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '책임성',
                    'depth' => 'A.9.3.1',
                    'clause' => '어떤 시점에서 개인정보는 어떤 방식으로 처리되어야 할 수도 있습니다. 여기에는 개인정보를 클라우드 서비스 이용자에게 반환하거나,이를 다른 퍼블릭 클라우드 수탁자 또는 개인정보 처리자 (예 : 합병 결과)로 전송하거나, 안전하게 삭제하거나 그렇지 않으면 파기하거나, 익명화하여 보관합니다',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            430 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '책임성',
                    'depth' => 'A.9.3.2',
                    'clause' => '퍼블릭 클라우드 수탁자는 클라우드 서비스 이용자가 계약하에 처리 된 개인정보가 (퍼블릭 클라우드 수탁자 및 그 하부 계약자에 의해) 어디서나 지워지는 것을 보장 할 수 있도록 필요한 정보를 제공해야합니다.. 클라우드 서비스 이용자의 특정 목적에 더 이상 필요하지 않게 되는 즉시 백업 및 비즈니스 연속성의 목적을 달성해야합니다. 폐기 메커니즘 (분리, 덮어 쓰기, 자기 소거, 파괴 또는 기타 형태의 삭제) 및 / 또는 적용 가능한 상업 표준은 계약 상 제공되어야합니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            431 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '책임성',
                    'depth' => 'A.9.3.3',
                    'clause' => '퍼블릭 수탁자는 개인 식별 정보의 처리와 관련하여 정책을 개발하고 구현해야하며 클라우드 서비스 이용자에게이 정책을 제공해야합니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            432 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '책임성',
                    'depth' => 'A.9.3.4',
                    'clause' => '정책은 의도적으로 계약이 만료되어 클라우드 서비스 이용자가 개인정보를 잃지 않도록 보호하기 위해 계약 종료 후 개인정보가 파기되기 전의 개인정보에 대한 보존 기간을 포함해야합니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            433 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '정보보호',
                    'depth' => 'A.10.1.1',
                    'clause' => '퍼블릭 클라우드 수탁자, 직원 및 에이전트 간의 기밀 유지 계약은 직원 및 대리인이 클라우드 서비스 이용자의 지시와 관계없이 개인정보를 공개하지 않도록해야합니다 (A.2.1 참조). 기밀 유지 계약의 의무는 관련 계약의 해지 후에도 유효합니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            434 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '정보보호',
                    'depth' => 'A.10.2.1',
                    'clause' => '하드 카피본은 인쇄로 생성 된 문서도 포함됩니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            435 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '정보보호',
                    'depth' => 'A.10.3.1',
                    'clause' => '데이터 복구 작업을위한 절차와 로그가 있어야합니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            436 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '정보보호',
                    'depth' => 'A.10.4.1',
                    'clause' => '조직의 구역을 벗어나는 미디어에 대한 개인정보는 승인 절차를 거쳐야 하며 공인 된 직원 이외의 사람 (예 : 해당 데이터를 암호화)은 접근 할 수 없어야합니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            437 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '정보보호',
                    'depth' => 'A.10.5.1',
                    'clause' => '휴대용 물리적 매체 및 암호화를 허용하지 않는 휴대용 장치는 어쩔 수없는 경우를 제외하고는 사용해서는 안되며 그러한 휴대용 매체 및 장치의 사용은 문서화되어야합니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            438 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '정보보호',
                    'depth' => 'A.10.6.1',
                    'clause' => '일부 경우, 예를 들어 전자 메일의 교환, 공중 데이터 전송 네트워크 시스템의 고유 한 특성은 효과적인 전송을 위해 일부 헤더 또는 트래픽 데이터가 노출 될 것을 요구할 수 있습니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            439 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '정보보호',
                    'depth' => 'A.10.6.2',
                    'clause' => '여러 서비스 공급자가 클라우드 컴퓨팅 참조 아키텍처의 서로 다른 서비스 범주에서 서비스를 제공하는 경우이 가이드를 구현할 때 다양한 역할이있을 수 있습니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            440 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '정보보호',
                    'depth' => 'A.10.7.1',
                    'clause' => '하드 카피 문서 폐기시 교차 절단, 파쇄, 소각, 펄프 등의 메커니즘을 사용하여 완벽하게 파기해야 합니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            441 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '정보보호',
                    'depth' => 'A.10.8.1',
                    'clause' => '둘 이상의 사용자가 저장된 개인 식별 정보에 접근 할 수있는 경우 식별, 인증 및 권한 부여 목적을 위해 각각 고유 한 사용자 ID가 있어야합니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            442 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '정보보호',
                    'depth' => 'A.10.9.1',
                    'clause' => '퍼블릭 클라우드 수탁자가 접근 권한을 가진 모든 사용자에 대해 사용자 프로파일을 유지 보수해야합니다. 사용자 프로파일은 정보 시스템에 대한 인증 된 접근을 제공하는 기술 제어를 구현하는 데 필요한 사용자 ID를 포함하여 해당 사용자에 관한 데이터 집합을 포함합니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            443 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '정보보호',
                    'depth' => 'A.10.10.1',
                    'clause' => '전체적인 클라우드 컴퓨팅의 참조 아키텍처에서 클라우드 서비스 이용자는 자신의 통제하에 있는 클라우드 하위 유저 사용자에 대한 사용자 ID 관리의 일부 또는 모든 측면을 담당 할 수 있습니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            444 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '정보보호',
                    'depth' => 'A.10.11.1',
                    'clause' => '퍼블릭 클라우드 수탁자와 관련된 정보 보안 및 개인정보 보호 의무는 해당 법률에서 직접 발생할 수 있습니다. 그렇지 않은 경우 퍼블릭 클라우드 수탁자와 관련된 개인정보 보호 의무는 계약서에 포함되어야합니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            445 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '정보보호',
                    'depth' => 'A.10.11.2',
                    'clause' => '이 국제 표준의 통제는 ISO / IEC 27002의 통제와 함께 개인정보와 관련하여 정보 처리 계약을 체결하는 데 도움이되는 측정의 참조 자료 표로 사용됩니다. 퍼블릭 클라우드 수탁자는 개인정보 보호에 관한 서비스 자료의 측면에 관해 계약을 맺기 전에 잠재 클라우드 서비스 이용자에게 알려야합니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            446 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '정보보호',
                    'depth' => 'A.10.11.3',
                    'clause' => '퍼블릭 클라우드 수탁자는 계약 체결 과정에서 그 기능에 대해 투명 해야 합니다. 그러나 궁극적으로 클라우드 서비스 이용자는 퍼블릭 클라우드 수탁자에 의해 구현 된 조치가 의무를 이행하는지 확인해야합니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            447 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '정보보호',
                    'depth' => 'A.10.12.1',
                    'clause' => '개인정보를 처리하기 위해 하도급 계약자를 사용하는 것은 퍼블릭 클라우드 수탁자 간의 계약에서 개인정보를 처리하기 전에 해당 클라우드 서비스 이용자에게 공개해야합니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            448 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '정보보호',
                    'depth' => 'A.10.13.1',
                    'clause' => '정보 시스템에 보유 된 데이터를 클라우드 사용자가 삭제하면 성능 문제는 해당 데이터를 명시 적으로 삭제하는 것이 비실용적이라는 것을 의미 할 수 있습니다. 이로 인해 다른 사용자가 데이터를 읽을 수있는 위험이 있습니다. 이러한 위험은 특정 기술적 조치에 의해 피해야합니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            449 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '정보보호',
                    'depth' => 'A.10.13.2',
                    'clause' => '이 통제를 시행함에있어 모든 경우를 다룰 때 특별한 지침이 특히 적절하지 않습니다. 그러나 예를 들어 클라우드 서비스 사용자가 해당 사용자의 데이터로 덮어 쓰지 않은 저장소 공간을 읽으려고하면 일부 클라우드 인프라, 플랫폼 또는 응용 프로그램이 0을 반환할 수 있습니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            450 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '개인정보 법 준수',
                    'depth' => 'A.11.1.1',
                    'clause' => '개인정보가 저장 될 수있는 국가의 ID는 클라우드 서비스 이용자에게 제공되어야합니다. 계약 된 개인정보 처리의 사용으로 인해 발생하는 국가의 신분이 포함되어야합니다. 모델 계약 조항, Binding Coporate Rulers 또는 Cross Border Privacy Rule과 같은 특정 계약 계약이 데이터의 국제 이전에 적용되는 경우 그러한 계약이 적용되는 계약 및 국가 또는 회선도 식별해야합니다. 퍼블릭 클라우드 수탁자는 클라우드 서비스 이용자에게 그러한 변경에 이의를 제기하거나 계약을 해지 할 수있는 능력이 있음을 알려야 합니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            451 =>
                array (
                    'type' => 'ISO27018A',
                    'domain' => '개인정보 법 준수',
                    'depth' => 'A.11.2.1',
                    'clause' => '데이터 전송 네트워크를 사용하여 전송되는 개인정보는 데이터가 의도 한 목적지에 도달하도록 설계된 적절한 제어를 받아야합니다.',
                    'grade_asset' => 0,
                    
                    'explanation_risk' => NULL,
                    'protection_plan' => NULL,
                    'threatcode' => 'testcode',
                ),
            452 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '개인정보',
                    'depth' => '1.1.1',
                    'clause' => '개인정보를 처리하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 1.1.1 위험내용',
                    'protection_plan' => 'GDPR 1.1.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            453 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '개인정보',
                    'depth' => '1.2.1',
                    'clause' => '민감한 개인정보를 처리하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 1.2.1 위험내용',
                    'protection_plan' => 'GDPR 1.2.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            454 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '개인정보',
                    'depth' => '1.3.1',
                    'clause' => '아동 개인정보를 수집하여 처리하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 1.3.1 위험내용',
                    'protection_plan' => 'GDPR 1.3.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            455 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '적용범위',
                    'depth' => '2.1.1',
                    'clause' => '개인정보처리/위탁자 입니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'GDPR 2.1.1 위험내용',
                    'protection_plan' => 'GDPR 2.1.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            456 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '적용범위',
                    'depth' => '2.2.1',
                    'clause' => '개인정보수탁자 입니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'GDPR 2.2.1 위험내용',
                    'protection_plan' => 'GDPR 2.2.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            457 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '적용범위',
                    'depth' => '2.3.1',
                    'clause' => '주요 EU 본사는 어디에 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'GDPR 2.3.1 위험내용',
                    'protection_plan' => 'GDPR 2.3.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            458 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '적용범위',
                    'depth' => '2.4.1',
                    'clause' => 'EU 외부에 위치하여 EU 주체를 대상으로하거나 모니터링하는 그룹 회사가 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'GDPR 2.4.1 위험내용',
                    'protection_plan' => 'GDPR 2.4.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            459 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '적용범위',
                    'depth' => '2.4.2',
                    'clause' => '만약 그렇다면, 데이터 주체가 있는 EU 국가 중 하나에 EU 대표가 설립되어 있습니까? (해당되는 경우) 문서로 지정되어 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'GDPR 2.4.2 위험내용',
                    'protection_plan' => 'GDPR 2.4.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            460 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '적용범위',
                    'depth' => '2.4.3',
                    'clause' => 'EU 대표자는 (컨트롤러/프로세서 이외에) 감독기관 및 개인정보 주체 처리 문제에 대해 다루도록 위임되어 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'GDPR 2.4.3 위험내용',
                    'protection_plan' => 'GDPR 2.4.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            461 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '적용범위',
                    'depth' => '2.5.1',
                    'clause' => '공동 데이터 개인정보처리자가 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'GDPR 2.5.1 위험내용',
                    'protection_plan' => 'GDPR 2.5.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            462 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '처리에 대한 합법적 근거',
                    'depth' => '3.1.1',
                    'clause' => '각 처리업무에 대한 개인정보를 적법하게 처리할 수 있는 근거가 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 3.1.1 위험내용',
                    'protection_plan' => 'GDPR 3.1.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            463 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '처리에 대한 합법적 근거',
                    'depth' => '3.1.2',
                    'clause' => '각 처리 작업에 대해 민감한 개인정보를 처리할 수 있는 합법적인 근거가 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 3.1.2 위험내용',
                    'protection_plan' => 'GDPR 3.1.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            464 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '처리에 대한 합법적 근거',
                    'depth' => '3.2.1',
                    'clause' => '동의는 어떻게 수집됩니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보 처리시 동의에 대한 합법적 근거에 맞게 수집하지 않고 동의의 기본원칙을 위반하여 과징금을 부과받을 수 있는 위험',
                    'protection_plan' => '개인정보 처리에 대한 동의문구를 이용약관에 포함시키지 말고 별도의 동의를 받아야함',
                    'threatcode' => 'TC1-10',
                ),
            465 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '처리에 대한 합법적 근거',
                    'depth' => '3.2.2',
                    'clause' => '이 동의는 어떻게 증명됩니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보 처리시 동의에 대한 합법적 근거에 맞게 수집하지 않고 동의의 기본원칙을 위반하여 과징금을 부과받을 수 있는 위험',
                    'protection_plan' => '개인정보 처리에 대한 동의문구를 이용약관에 포함시키지 말고 별도의 동의를 받아야함',
                    'threatcode' => 'TC1-10',
                ),
            466 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '처리에 대한 합법적 근거',
                    'depth' => '3.2.3',
                    'clause' => '동의를 철회 할 수 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보 처리시 동의에 대한 합법적 근거에 맞게 수집하지 않고 동의의 기본원칙을 위반하여 과징금을 부과받을 수 있는 위험',
                    'protection_plan' => '동의를  철회할 수 있는 절차를 마련하고 이에 따라 시행하여야 함',
                    'threatcode' => 'TC1-10',
                ),
            467 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '투명성 요구사항',
                    'depth' => '4.1.1',
                    'clause' => '자료주체에 대하여 처리통지를 하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '자료주체에 대해 개인정보 처리를 통지 하지 않아 투명성이 보장받지 못하여 과징금을 부과받을 수 있는 위험',
                    'protection_plan' => '자료주체에 대하여 주기적으로 처리통지를 하여야 함',
                    'threatcode' => 'TC1-14',
                ),
            468 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '투명성 요구사항',
                    'depth' => '4.2.1',
                    'clause' => '데이터가 주체로부터 직접 수집되고 필요한 정보가 제공됩니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 4.2.1 위험내용',
                    'protection_plan' => 'GDPR 4.2.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            469 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '투명성 요구사항',
                    'depth' => '4.2.2',
                    'clause' => '데이터가 주체로부터 수집되지 않고 필요한 정보가 제공되고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 4.2.2 위험내용',
                    'protection_plan' => 'GDPR 4.2.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            470 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '기타 데이터 보호 원칙 및 책임',
                    'depth' => '5.1.1',
                    'clause' => '개인정보는 원래 수집된 목적으로 만 사용됩니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 5.1.1 위험내용',
                    'protection_plan' => 'GDPR 5.1.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            471 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '기타 데이터 보호 원칙 및 책임',
                    'depth' => '5.2.1',
                    'clause' => '개인정보는 처리 목적에 필요한 것으로 제한됩니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 5.2.1 위험내용',
                    'protection_plan' => 'GDPR 5.2.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            472 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '기타 데이터 보호 원칙 및 책임',
                    'depth' => '5.3.1',
                    'clause' => '개인정보를 확인하고 지연없이 부정확한 부분을 바로 잡을 수 있도록 정책과 교육이 마련되어 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보에 대해 인식과 교육이 부족하고 지침이나 절차가 미흡하여 개인정보 유출과 같은 정보유출이 일어날 위험',
                    'protection_plan' => '개인정보 관련 부정확한 부분 정정에 대한 별도의 교육을 마련하고 이에 따라 시행하여야 함',
                    'threatcode' => 'TC1-10',
                ),
            473 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '기타 데이터 보호 원칙 및 책임',
                    'depth' => '5.4.1',
                    'clause' => '개인 정보 보호 정책에 보존 정보가 포함되어 있습니까?
데이터 보관 및 파기 절차가 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보에 대해 인식과 교육이 부족하고 지침이나 절차가 미흡하여 개인정보 유출과 같은 정보유출이 일어날 위험',
                    'protection_plan' => '개인정보 보호 정책에 보존 정보를 포함하여 수립하여야 함',
                    'threatcode' => 'TC1-10',
                ),
            474 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '기타 데이터 보호 원칙 및 책임',
                    'depth' => '5.5.1',
                    'clause' => '데이터를 보호하기 위해 적절한 보안 조치가 사용됩니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 5.5.1 위험내용',
                    'protection_plan' => 'GDPR 5.5.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            475 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '기타 데이터 보호 원칙 및 책임',
                    'depth' => '5.6.1',
                    'clause' => '데이터 보호 원칙 준수를 입증 할 수 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '비정상적인 접근 시도에 대해 실시간으로 모니터링 하고 있지 않아, 비인가자가 악의적인 목적으로 시스템에 접근이 가능하거나 공격 행위를 부인할 위험',
                    'protection_plan' => '로그점검 결과를 주기적으로 검토하고 실시간 모니터링을 수행하여야 함',
                    'threatcode' => 'TC1-01',
                ),
            476 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '데이터 주체권리',
                    'depth' => '6.1.1',
                    'clause' => 'SAR(주체접근요청)을 처리하기 위한 문서화된 정책/절차가 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 6.1.1 위험내용',
                    'protection_plan' => 'GDPR 6.1.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            477 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '데이터 주체권리',
                    'depth' => '6.1.2',
                    'clause' => '개인에게 자신에 대해 보유하고 있는 정보에 대한 접근을 요청할 수 있는 메커니즘이 제공되고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 6.1.2 위험내용',
                    'protection_plan' => 'GDPR 6.1.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            478 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '데이터 주체권리',
                    'depth' => '6.1.3',
                    'clause' => '개인정보처리자가 한 달 안에 주체접근요청에 응답 할 수 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보주체의 개인정보 접근에 대한 구체적인 지침, 절차가 미흡하여 정보주체의 권리를 보장하지 못하여 정보주체의 권리에 영향을 미칠 위험',
                    'protection_plan' => '개인정보처리자가 주체접근요청에 응답할 수 있는 구체적인 기간을 명시하여야 함',
                    'threatcode' => 'TC1-10',
                ),
            479 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '데이터 주체권리',
                    'depth' => '6.2.1',
                    'clause' => '데이터 주체가 개인정보를 구조적이고 일반적으로 사용되며 기계가 읽을 수있는 형식으로 가져올 수 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 6.2.1 위험내용',
                    'protection_plan' => 'GDPR 6.2.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            480 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '데이터 주체권리',
                    'depth' => '6.3.1',
                    'clause' => '개인은 자신에 대해 보유하고있는 개인 정보의 삭제 또는 수정을 요구할 권리를 통보 받았습니까 (해당되는 경우)?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 6.3.1 위험내용',
                    'protection_plan' => 'GDPR 6.3.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            481 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '데이터 주체권리',
                    'depth' => '6.3.2',
                    'clause' => '개인정보가 삭제되거나 차단될 수 있도록 통제 및 공식 절차가 마련되어 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 6.3.2 위험내용',
                    'protection_plan' => 'GDPR 6.3.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            482 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '데이터 주체권리',
                    'depth' => '6.3.3',
                    'clause' => '그러한 요청을 목록과 절차로 관리 할 수 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보주체의 개인정보 접근에 대한 구체적인 지침, 절차가 미흡하여 정보주체의 권리를 보장하지 못하여 정보주체의 권리에 영향을 미칠 위험',
                    'protection_plan' => '개인정보처리 관련 요청에 대한 목록 및 절차가 마련하여 관리하여야 함',
                    'threatcode' => 'TC1-11',
                ),
            483 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '데이터 주체권리',
                    'depth' => '6.4.1',
                    'clause' => '개인에게 특정 유형의 처리에 이의를 제기할 수 있는 권리에 대해 지시하였습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 6.4.1 위험내용',
                    'protection_plan' => 'GDPR 6.4.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            484 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '데이터 주체권리',
                    'depth' => '6.4.2',
                    'clause' => '실제로 권리가 영향을 미칠 수 있도록 보장하기 위한 정책이 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 6.4.2 위험내용',
                    'protection_plan' => 'GDPR 6.4.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            485 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '데이터 주체권리',
                    'depth' => '6.5.1',
                    'clause' => '프로파일링은 동의를 기반으로합니까? (이 경우 명시적이어야 함)',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 6.5.1 위험내용',
                    'protection_plan' => 'GDPR 6.5.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            486 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '데이터 주체권리',
                    'depth' => '6.5.2',
                    'clause' => '프로파일링이 민감한 데이터를 사용합니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 6.5.2 위험내용',
                    'protection_plan' => 'GDPR 6.5.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            487 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '데이터 주체권리',
                    'depth' => '6.5.3',
                    'clause' => '프로파일링에 아동 개인정보가 포함됩니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 6.5.3 위험내용',
                    'protection_plan' => 'GDPR 6.5.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            488 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '데이터 보안',
                    'depth' => '7.1.1',
                    'clause' => '처리에 내재된 위험이 공식적으로 평가, 테스트 및 평가되고 해당 위험을 완화하고 처리의 보안이 구현되도록하는 조치가 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 7.1.1 위험내용',
                    'protection_plan' => 'GDPR 7.1.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            489 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '데이터 보안',
                    'depth' => '7.1.2',
                    'clause' => '개인정보에 대한 기술, 관리 및 물리적 보호를 지정하는 문서화된 보안 프로그램이 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 7.1.2 위험내용',
                    'protection_plan' => 'GDPR 7.1.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            490 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '데이터 보안',
                    'depth' => '7.1.3',
                    'clause' => '보안 관련 불만 및 문제를 해결하기위한 문서화 된 프로세스가 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보 처리가 정보주체의 권리에 미치는 보안수준을 만족하지 못하여 정보주체의 권리에 영향을 미칠 위험',
                    'protection_plan' => '보안관련 불만 및 문제를 해결하기 위한 별도의 프로세스를 마련하고 이에 따라 운영하여야 함',
                    'threatcode' => 'TC1-11',
                ),
            491 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '데이터 보안',
                    'depth' => '7.1.4',
                    'clause' => '보안 격차에 대한 교정조치 계획을 추진하는 담당자가 지정되어 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 7.1.4 위험내용',
                    'protection_plan' => 'GDPR 7.1.4 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            492 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '데이터 보안',
                    'depth' => '7.1.5',
                    'clause' => '개인의 민감한 개인정보를 전송, 저장 및 수신하기 위해 업계 표준 암호화 알고리즘 및 기술이 사용됩니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 7.1.5 위험내용',
                    'protection_plan' => 'GDPR 7.1.5 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            493 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '데이터 보안',
                    'depth' => '7.1.6',
                    'clause' => '개인정보가 더 이상 법적으로 유지되거나 수집 된 목적을 달성 할 필요가 없을 때 개인정보가 체계적으로 파기, 삭제 또는 익명 처리됩니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보 처리가 정보주체의 권리에 미치는 보안수준을 만족하지 못하여 개인정보 유출에 대한 위험',
                    'protection_plan' => '개인정보 파기 및 삭제에 대한 절차를 마련하고 이에 따라 운영하여야 함',
                    'threatcode' => 'TC1-11',
                ),
            494 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '데이터 보안',
                    'depth' => '7.1.7',
                    'clause' => '가능한 경우 개인정보를 가명처리 하기위한 조치가 취해 집니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 7.1.7 위험내용',
                    'protection_plan' => 'GDPR 7.1.7 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            495 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '데이터 보안',
                    'depth' => '7.1.8',
                    'clause' => '물리적 또는 기술적 사고 발생시 개인정보에 대한 가용성 및 액세스를 적시에 복원 할 수 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 7.1.8 위험내용',
                    'protection_plan' => 'GDPR 7.1.8 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            496 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '데이터 보안',
                    'depth' => '7.1.9',
                    'clause' => '개인정보 유출 시 조치방법(유출 시 통제절차 등)이 마련되어 있습니까? ',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 7.1.9 위험내용',
                    'protection_plan' => 'GDPR 7.1.9 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            497 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '국제 데이터 전송 (EEA(유럽경제지역) 외부)',
                    'depth' => '8.1.1',
                    'clause' => '개인정보가 EEA(유럽경제지역) 외부로 전송됩니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'GDPR 8.1.1 위험내용',
                    'protection_plan' => 'GDPR 8.1.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            498 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '국제 데이터 전송 (EEA(유럽경제지역) 외부)',
                    'depth' => '8.1.2',
                    'clause' => '어떤 유형의 개인정보가 전송되며 여기에는 민감한 개인정보가 포함되어 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'GDPR 8.1.2 위험내용',
                    'protection_plan' => 'GDPR 8.1.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            499 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '국제 데이터 전송 (EEA(유럽경제지역) 외부)',
                    'depth' => '8.1.3',
                    'clause' => '이전 목적은 무엇입니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'GDPR 8.1.3 위험내용',
                    'protection_plan' => 'GDPR 8.1.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
        ));
        \DB::table('assetgrades')->insert(array (
            0 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '국제 데이터 전송 (EEA(유럽경제지역) 외부)',
                    'depth' => '8.1.4',
                    'clause' => '누구한테 이전됩니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'GDPR 8.1.4 위험내용',
                    'protection_plan' => 'GDPR 8.1.4 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            1 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '국제 데이터 전송 (EEA(유럽경제지역) 외부)',
                    'depth' => '8.1.5',
                    'clause' => '이전 질문에 대한 답변(예: 데이터의 성격, 처리 목적, 데이터를 수출하는 국가 및 데이터를 받는 국가 및 이전 수령자가 누구인가)을 포함하여 모든 이전 항목이 나열되어 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'GDPR 8.1.5 위험내용',
                    'protection_plan' => 'GDPR 8.1.5 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            2 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '국제 데이터 전송 (EEA(유럽경제지역) 외부)',
                    'depth' => '8.1.6',
                    'clause' => '각 이전에 대한 법적 이전의 적절성 메커니즘을 식별하고 열거하고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'GDPR 8.1.6 위험내용',
                    'protection_plan' => 'GDPR 8.1.6 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            3 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '국제 데이터 전송 (EEA(유럽경제지역) 외부)',
                    'depth' => '8.2.1',
                    'clause' => '구체적인 이전은 구현된 적정성 메커니즘에 의해 적절히 다루어졌는가 아니면 예외에 의해 다루어졌습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'GDPR 8.2.1 위험내용',
                    'protection_plan' => 'GDPR 8.2.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            4 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '국제 데이터 전송 (EEA(유럽경제지역) 외부)',
                    'depth' => '8.3.1',
                    'clause' => '데이터 주체는 개인정보의 의도된 전송에 대해 알고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'GDPR 8.3.1 위험내용',
                    'protection_plan' => 'GDPR 8.3.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            5 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '국제 데이터 전송 (EEA(유럽경제지역) 외부)',
                    'depth' => '8.4.1',
                    'clause' => '해외 당국이나 법원에 개인정보 공개 / 이전 요청을 처리하는 정책이 있습니까? (영국은이 조항을 거부했습니다.)',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'GDPR 8.4.1 위험내용',
                    'protection_plan' => 'GDPR 8.4.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            6 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '다른 개인정보처리자의 의무',
                    'depth' => '9.1.1',
                    'clause' => '데이터 개인정보처리자는 직원에게 어떤 개인정보보호 교육 프로그램을 제공합니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보에 대해 인식과 교육이 부족하고 지침이나 절차가 미흡하여 개인정보 유출과 같은 정보유출이 일어날 위험',
                    'protection_plan' => '주기적인 별도의 개인정보보호 교육을 실시하거나, 정기적인 정보보호 교육에 개인정보 영역을 확대하여 교육을 실시',
                    'threatcode' => 'TC1-09',
                ),
            7 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '다른 개인정보처리자의 의무',
                    'depth' => '9.1.2',
                    'clause' => 'GDPR 준수의 모든 측면에 대해 명확한 문서화 된 정책과 절차가 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR의 각 조항 대한 구체적인 지침, 절차가 미흡하여 정보주체의 권리를 보장받지 못할 위험',
                    'protection_plan' => '현 개인정보보호지침을 GDPR 준수의 모든 측면을 대비하도록 개정작업이 필요함',
                    'threatcode' => 'TC1-10',
                ),
            8 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '다른 개인정보처리자의 의무',
                    'depth' => '9.1.3',
                    'clause' => '정기적인 감사 검토 프로세스를 운영합니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 9.1.3 위험내용',
                    'protection_plan' => 'GDPR 9.1.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            9 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '다른 개인정보처리자의 의무',
                    'depth' => '9.2.1',
                    'clause' => '규정 준수를 처리 활동에 통합하기위한 정책 및 절차가 구축됩니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 9.2.1 위험내용',
                    'protection_plan' => 'GDPR 9.2.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            10 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '다른 개인정보처리자의 의무',
                    'depth' => '9.3.1',
                    'clause' => 'DPO를 임명해야 합니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 9.3.1 위험내용',
                    'protection_plan' => 'GDPR 9.3.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            11 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '다른 개인정보처리자의 의무',
                    'depth' => '9.3.2',
                    'clause' => 'DPO가 필요하지 않은 경우 DPO를 지정해야하는지 고려하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 9.3.2 위험내용',
                    'protection_plan' => 'GDPR 9.3.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            12 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '다른 개인정보처리자의 의무',
                    'depth' => '9.3.3',
                    'clause' => 'DPO가 지정된 곳에는 에스컬레이션 및 보고 라인이 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 9.3.3 위험내용',
                    'protection_plan' => 'GDPR 9.3.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            13 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '다른 개인정보처리자의 의무',
                    'depth' => '9.4.1',
                    'clause' => '회사의 직원 수는 몇 명입니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 9.4.1 위험내용',
                    'protection_plan' => 'GDPR 9.4.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            14 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '다른 개인정보처리자의 의무',
                    'depth' => '9.4.2',
                    'clause' => '민감한 개인정보가 처리됩니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 9.4.2 위험내용',
                    'protection_plan' => 'GDPR 9.4.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            15 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '다른 개인정보처리자의 의무',
                    'depth' => '9.4.3',
                    'clause' => '개인정보에 대한 법적 근거가 기록되고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 9.4.3 위험내용',
                    'protection_plan' => 'GDPR 9.4.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            16 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '다른 개인정보처리자의 의무',
                    'depth' => '9.5.1',
                    'clause' => 'DPIA의 필요성 파악 및 수행(및 문서화) 프로세스가 있으십니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보처리에 관한 영향평가 프로세스가 미흡하여 정보주체의 권리에 영향을 미칠 위험',
                    'protection_plan' => '개인정보영향평가에 대한 문서나 프로세스를 마련하여야 함',
                    'threatcode' => 'TC1-11',
                ),
            17 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '다른 개인정보처리자의 의무',
                    'depth' => '9.5.2',
                    'clause' => '서비스 제공업체의 사전 조사를 수행하고 기록하십니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보처리에 관한 영향평가 프로세스가 미흡하여 정보주체의 권리에 영향을 미칠 위험',
                    'protection_plan' => '서비스 제공업체의 사전조사를 진행하고 문서(파일)로 기록하여야 함',
                    'threatcode' => 'TC1-04',
                ),
            18 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '다른 개인정보처리자의 의무',
                    'depth' => '9.5.3',
                    'clause' => '규정된 조건이 모두 프로세서 계약에 포함되어 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 9.5.3 위험내용',
                    'protection_plan' => 'GDPR 9.5.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            19 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '다른 개인정보처리자의 의무',
                    'depth' => '9.6.1',
                    'clause' => '규정된 모든 조건을 포함하는 개인정보처리자/개인정보수탁자 계약이 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'GDPR 9.6.1 위험내용',
                    'protection_plan' => 'GDPR 9.6.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            20 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '기타 프로세서 의무',
                    'depth' => '10.1.1',
                    'clause' => '기존 하위 처리 약정에 대한 서면 승인이 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'GDPR 10.1.1 위험내용',
                    'protection_plan' => 'GDPR 10.1.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            21 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '기타 프로세서 의무',
                    'depth' => '10.1.2',
                    'clause' => '제안된 하위 처리에 대한 서면 승인이 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'GDPR 10.1.2 위험내용',
                    'protection_plan' => 'GDPR 10.1.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            22 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '기타 프로세서 의무',
                    'depth' => '10.1.3',
                    'clause' => '특정 또는 일반 승인이 제공 되었습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'GDPR 10.1.3 위험내용',
                    'protection_plan' => 'GDPR 10.1.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            23 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '기타 프로세서 의무',
                    'depth' => '10.1.4',
                    'clause' => '일반 승인인 경우, 개인정보수탁자에 의도된 변경 사항을 개인정보처리자에 알리는 프로세스가 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'GDPR 10.1.4 위험내용',
                    'protection_plan' => 'GDPR 10.1.4 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            24 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '기타 프로세서 의무',
                    'depth' => '10.1.5',
                    'clause' => '처리가 규정된 조건을 포함하여 계약의 대상이됩니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'GDPR 10.1.5 위험내용',
                    'protection_plan' => 'GDPR 10.1.5 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            25 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '기타 프로세서 의무',
                    'depth' => '10.1.6',
                    'clause' => '개인정보처리자와의 계약에서 명시한 동일한 의무가 하위 개인정보수탁자에 부과 되었습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'GDPR 10.1.6 위험내용',
                    'protection_plan' => 'GDPR 10.1.6 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            26 =>
                array (
                    'type' => 'GDPR',
                    'domain' => '기타 프로세서 의무',
                    'depth' => '10.2.1',
                    'clause' => 'GDPR에 따라 데이터 개인정보처리자가 규정 준수를 보장하도록 지원할 수 있으십니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'GDPR 10.2.1 위험내용',
                    'protection_plan' => 'GDPR 10.2.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            27 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '응용프로그램 & 인터페이스 보안',
                    'depth' => '1.1',
                    'clause' => '응용 프로그램 및 프로그래밍 인터페이스(API)는 선도적인 산업 표준(예: 웹 응용 프로그램용 OWASP)에 따라 설계, 개발, 배치 및 시험해야 하며, 적용 가능한 법적, 법적 또는 규제 준수 의무를 준수하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 1.1 위험내용',
                    'protection_plan' => 'CSA STAR 1.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            28 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '응용프로그램 & 인터페이스 보안',
                    'depth' => '1.2',
                    'clause' => '고객에게 데이터, 자산 및 정보시스템에 대한 접근을 허가하기 전에 고객접근에 대한 확인된 보안, 계약 및 규제요건을 해결 이행하고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'CSA STAR 1.2 위험내용',
                    'protection_plan' => 'CSA STAR 1.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            29 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '응용프로그램 & 인터페이스 보안',
                    'depth' => '1.3',
                    'clause' => '데이터 입력 및 출력 무결성 루틴(즉, 조정 및 편집 검사)을 애플리케이션 인터페이스 및 데이터베이스에 대해 구현하여 수동 또는 체계적인 처리 오류, 데이터의 손상 또는 오용을 방지하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '데이터 입출력 관련 무결성 검증 절차가 마련되어 있지 않아 입출력 간에 데이터가 위변조될 위험',
                    'protection_plan' => '데이터 입출력 관련 무결성 검증을 위한 절차를 마련하여야 함',
                    'threatcode' => 'TC1-01',
                ),
            30 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '응용프로그램 & 인터페이스 보안',
                    'depth' => '1.4',
                    'clause' => '부적절한 공개, 변경 또는 파괴를 방지하기 위해 복수의 시스템 인터페이스, 관할구역 및 업무 기능에 걸쳐 (기밀성, 무결성 및 가용성) 데이터 보안을 지원하는 정책 및 절차를 수립하고 유지하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 1.4 위험내용',
                    'protection_plan' => 'CSA STAR 1.4 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            31 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '감사 인식 & 준거성',
                    'depth' => '2.1',
                    'clause' => '업무 프로세스 차질을 해결하기 위해 감사 계획을 수립하고 유지하고 있습니까? 

감사계획은 보안 운용의 실시의 실효성을 검토하는 데 중점을 두어야 한다. 모든 감사 활동은 감사를 실행하기 전에 동의하고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'CSA STAR 2.1 위험내용',
                    'protection_plan' => 'CSA STAR 2.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            32 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '감사 인식 & 준거성',
                    'depth' => '2.2',
                    'clause' => '조직이 확립된 정책, 표준, 절차 및 규정 준수 의무의 부적합성을 해소하기 위해 최소한 매년 독립적인 검토와 평가를 수행하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호 감사 이후 조치계획이나 결과확인의 검토가 미흡하여 부적합 사례가 잔존할 위험',
                    'protection_plan' => '부적합 사항에 대한 조치계획 및 결과를 공유하여야 함',
                    'threatcode' => 'TC1-04',
                ),
            33 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '감사 인식 & 준거성',
                    'depth' => '2.3',
                    'clause' => '조직은 자신의 업무상 필요에 관련된 표준, 규제, 법률 및 법적 요건을 포착하는 통제 체계를 만들고 유지하고 있습니까? 

최소한 매년 업무 프로세스에 영향을 미칠 수 있는 변경사항이 반영되도록 관리 프레임워크를 검토하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호정책 및 지침서가 현행화가 미흡하여 업무에 관련된 표준, 법률 등 요건을 만족시키지 못해 업무 프로세스에 악영향을 미칠수 있는 위험',
                    'protection_plan' => '기존 수립된 정보보호 정책 및 지침서를 Cloud 환경에 적합하도록 개정해야 함',
                    'threatcode' => 'TC1-12',
                ),
            34 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '업무 연속성 관리(BCM) & 운영 복원',
                    'depth' => '3.1',
                    'clause' => '모든 업무 연속성 계획이 시험, 유지보수 및 정보보안 요구사항의 우선순위 처리에 일관성을 갖도록 하기 위해 사업 연속성 계획 및 계획 개발을 위한 일관된 통일된 프레임워크를 구축, 문서화 및 채택하고 있습니까? 

업무연속계획(BCP)의 요구사항은 다음과 같다.
- 관련 의존성에 맞춰 정해진 목적과 범위
- 사용할 사람이 접근하고 이해할 수 있음
- 검토, 업데이트 및 승인을 담당하는 지명된 자가 소유
- 정해진 의사소통, 역할, 책임
- 상세 복구 절차, 수동적 해결 방법 및 참조 정보
- 계획초청 방법',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 3.1 위험내용',
                    'protection_plan' => 'CSA STAR 3.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            35 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '업무 연속성 관리(BCM) & 운영 복원',
                    'depth' => '3.2',
                    'clause' => '업무 연속성 및 보안사건 대응계획은 계획한 간격 또는 중대한 조직 또는 환경변화에 따라 시험이행하고 있습니까? 사고 대응 계획은 영향을 받는 고객(테넌트)과 공급망 내 중요한 사업 프로세스 의존성을 나타내는 다른 사업 관계를 포함하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 3.2 위험내용',
                    'protection_plan' => 'CSA STAR 3.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            36 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '업무 연속성 관리(BCM) & 운영 복원',
                    'depth' => '3.3',
                    'clause' => '데이터 센터 유틸리티 서비스 및 환경 조건(예: 물, 전력, 온도 및 습도 제어, 통신 및 인터넷 연결)은 무단 침입 또는 손상으로부터 보호를 보장하기 위해 계획된 간격으로 지속적인 효과를 보장, 감시, 유지 및 시험이행하고 있습니까?계획되거나 계획되지 않은 중단이 발생할 경우 고장 또는 기타 중복을 방지하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 3.3 위험내용',
                    'protection_plan' => 'CSA STAR 3.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            37 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '업무 연속성 관리(BCM) & 운영 복원',
                    'depth' => '3.4',
                    'clause' => '정보시스템 문서(예: 관리자 및 사용자 가이드, 아키텍처 다이어그램)를 인가된 담당자가 이용할 수 있도록 하여 다음 사항을 확인하고 있습니까?
- 정보시스템 구성, 설치 및 운영
- 시스템의 보안 기능을 효과적으로 사용',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'CSA STAR 3.4 위험내용',
                    'protection_plan' => 'CSA STAR 3.4 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            38 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '업무 연속성 관리(BCM) & 운영 복원',
                    'depth' => '3.5',
                    'clause' => '자연적 원인과 재해에 의한 피해에 대한 물리적 보호는 물론, 화재, 홍수, 대기 전력 방출, 태양 유도 지자기 폭풍, 바람, 지진, 쓰나미, 폭발, 원자력 사고, 화산 활동, 생물학적 위험, 민간의 불안, 산사태, 지진, 지진, 폭발, 지진, 폭발, 지진, 폭발 등 의도적인 공격으로부터도 보호된다. 또는 인공 재해는 예상, 설계, 대책을 적용하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 3.5 위험내용',
                    'protection_plan' => 'CSA STAR 3.5 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            39 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '업무 연속성 관리(BCM) & 운영 복원',
                    'depth' => '3.6',
                    'clause' => '환경 위협, 위험 및 무단 접근 기회에 의한 위험을 줄이기 위해, 기기는 높은 확률의 환경 위험이 있는 장소에서 멀리하고 합리적인 거리에 위치한 중복 장비로 보완하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 3.6 위험내용',
                    'protection_plan' => 'CSA STAR 3.6 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            40 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '업무 연속성 관리(BCM) & 운영 복원',
                    'depth' => '3.7',
                    'clause' => '운용 및 지원 인력의 연속성과 가용성을 보장하는 장비 정비를 위해 정책 및 절차를 수립하고, 업무 프로세스 및 기술 대책을 지원하고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'CSA STAR 3.7 위험내용',
                    'protection_plan' => 'CSA STAR 3.7 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            41 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '업무 연속성 관리(BCM) & 운영 복원',
                    'depth' => '3.8',
                    'clause' => '지리적으로 특정된 사업영향평가를 바탕으로 자연적, 인위적 위협에 대응하기 위한 보호대책을 강구하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 3.8 위험내용',
                    'protection_plan' => 'CSA STAR 3.8 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            42 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '업무 연속성 관리(BCM) & 운영 복원',
                    'depth' => '3.9',
                    'clause' => '조직(클라우드 제공자, 클라우드 소비자)에 대한 중단의 영향을 결정하기 위한 정의되고 문서화된 방법이 있어야 하며, 이 방법은 반드시 다음을 통합하고 있습니까?
- 중요 제품 및 서비스 식별
- 프로세스, 애플리케이션, 비즈니스 파트너, 제3자 서비스 프로바이더를 포함한 모든 의존성을 파악
- 중요 제품 및 서비스에 대한 위협 이해
- 계획되거나 계획되지 않은 장애로 인한 영향 및 시간 경과에 따른 변화 결정
- 중단에 대한 최대 허용 기간 설정
- 회복 우선순위 설정
- 최대 허용 가능한 중단 기간 내에 중요 제품 및 서비스 재개를 위한 복구 시간 목표 설정
- 재가동에 필요한 자원 추정',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 3.9 위험내용',
                    'protection_plan' => 'CSA STAR 3.9 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            43 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '업무 연속성 관리(BCM) & 운영 복원',
                    'depth' => '3.10',
                    'clause' => '적절한 IT 거버넌스 및 서비스 관리를 위한 정책 및 절차를 수립하고, 이를 지원하여, 산업에서 수용 가능한 수준에 기초하여 업무 기능, 인력 및/또는 고객을 지원하는 조직의 IT 역량을 적절하게 계획, 제공 및 지원할 수 있도록 이행하고 있습니까?과드(예: ITIL v4 및 COBIT 5). 또한 정책 및 절차에는 정규 직원 교육에 의해 지원되는 정의된 역할과 책임이 포함되어 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 3.1 위험내용',
                    'protection_plan' => 'CSA STAR 3.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            44 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '업무 연속성 관리(BCM) & 운영 복원',
                    'depth' => '3.11',
                    'clause' => '설정된 정책과 절차에 따라 중요 자산의 보존 기간을 정의하고 준수하기 위한 정책 및 절차와 실행된 비즈니스 프로세스 및 기술 조치와 적용 가능한 법적, 법적 또는 규제 준수 의무를 수립하고 이를 지원이행하고 있습니까? 백업 및 복구 대책은 업무 연속성 계획의 일환으로 통합하고 그에 따라 효과성을 측정 이행하고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '적용되는 법률에 따라 백업해야하는 데이터 등을 확인하지 못하여 시스템에 문제가 생기거나 보안사고 발생 시 필요한 데이터를 사용하지 못할 위험',
                    'protection_plan' => '1. 현재 적용받는 법률에서 규정하고 있는 자료의 보관기간을 확인하여 법률에서 정한 기간 이상으로 자료를 백업하여야 함
2. 백업 및 복구 대책의 효과성 측정에 대한 자료를 마련하여야 함',
                    'threatcode' => 'TC8-01',
                ),
            45 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '변경 통제 & 구성 관리',
                    'depth' => '4.1',
                    'clause' => '새로운 데이터, 물리적 또는 가상 애플리케이션, 인프라 네트워크 및 시스템 구성 요소 또는 기업, 운영 및 / 또는 데이터 센터의 개발 및 / 또는 획득을 보장하기 위해 정책 및 절차가 수립되고 구현 된 비즈니스 프로세스 및 기술 조치를 지원하고 있습니까?
시설은 조직의 비즈니스 리더십 또는 기타 책임있는 비즈니스 역할 또는 기능에 의해 사전 정의되어 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'CSA STAR 4.1 위험내용',
                    'protection_plan' => 'CSA STAR 4.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            46 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '변경 통제 & 구성 관리',
                    'depth' => '4.2',
                    'clause' => '외부 업무 제휴사는 조직 내 내부 개발자(예: ITIL 서비스 관리 프로세스)와 동일한 변경 관리, 릴리스 및 테스트를 위한 정책과 절차를 준수이 행하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 4.2 위험내용',
                    'protection_plan' => 'CSA STAR 4.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            47 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '변경 통제 & 구성 관리',
                    'depth' => '4.3',
                    'clause' => '조직은 시스템 가용성, 기밀성 및 시스템 및 서비스의 무결성에 초점을 맞춘 베이스라인, 테스트 및 릴리스 표준을 확립한 품질 변경 통제 및 테스트 프로세스(예: ITIL 서비스 관리)를 따르고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'CSA STAR 4.3 위험내용',
                    'protection_plan' => 'CSA STAR 4.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            48 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '변경 통제 & 구성 관리',
                    'depth' => '4.4',
                    'clause' => '조직적으로 소유하거나 관리하는 사용자 엔드 포인트 기기(예: 발행된 워크스테이션, 노트북, 모바일 기기) 및 IT 인프라 네트워크 및 시스템 구성요소에 대한 무단 소프트웨어 설치를 제한하기 위한 정책 및 절차를 수립하고, 업무 프로세스 및 기술 대책을 지원 이행하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '비 인가된 소프트웨어 설치에 대한 기술적 대책이 마련되어 있지 않아, 비 인가된 소프트웨어 사용으로 인한 데이터 정보유출, 시스템 장애 등 보안사고가 발생할 위험',
                    'protection_plan' => '비인가된 프로그램 설치에 대한 기술적인 대책을 수립하여야 함(예 : AD, 자산관리솔루션)',
                    'threatcode' => 'TC3-14',
                ),
            49 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '변경 통제 & 구성 관리',
                    'depth' => '4.5',
                    'clause' => '변경사항 적용과 관련된 위험관리를 위한 정책 및 절차를 수립되어 있습니까?
- 비즈니스 크리티컬 또는 고객(테넌트)에 영향을 미치는(물리적 및 가상) 애플리케이션과 시스템 시스템 인터페이스(API) 설계 및 구성
- 인프라 네트워크 및 시스템 구성 요소
모든 변경사항이 구축 전 합의서(SLA)에 따라 등록된 변경 요청, 업무상 중요한 또는 고객(테넌트) 및/또는 고객(테넌트)의 승인에 직접 해당함을 보증하기 위한 기술적 조치를 실행이행하고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'CSA STAR 4.5 위험내용',
                    'protection_plan' => 'CSA STAR 4.5 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            50 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '데이터 보안 & 정보 생명주기 관리',
                    'depth' => '5.1',
                    'clause' => '데이터를 포함하는 데이터 및 객체는 데이터 유형, 값, 민감도 및 중요도에 기초하여 데이터 소유자에 의한 분류를 조직에 할당이행하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '모든 정보자산에 대한 중요도 및 식별, 분류가 미흡하여 정보자산의 관리 소홀에 따른 사고가 발생할 위험',
                    'protection_plan' => '물리적 자산 이외 데이터에 대한 자산 중요도를 기준에 따라 분류하고 이에 따라 관리하여야 함',
                    'threatcode' => 'TC1-12',
                ),
            51 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '데이터 보안 & 정보 생명주기 관리',
                    'depth' => '5.2',
                    'clause' => '서비스의 지리적으로 분산 된 (물리적 및 가상) 응용 프로그램 및 인프라 네트워크 내에 상주하거나 (임시 또는 영구적으로) 데이터에 대한 데이터 흐름을 인벤토리, 문서화 및 유지 관리하기 위해 정책 및 절차가 수립되고 구현 된 비즈니스 프로세스 및 기술 조치를 지원하고 법률 또는 공급망 계약 (SLA) 준수 영향을 확인하고 데이터와 관련된 기타 비즈니스 위험을 해결하기 위해 다른 제 3 자와 공유 이행하고 있습니까? 

요청에 따라 공급자는 특히 고객 데이터가 서비스의 일부로 사용되는 경우 고객 (테넌트)에게 준수 영향 및 위험을 알리고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'CSA STAR 5.2 위험내용',
                    'protection_plan' => 'CSA STAR 5.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            52 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '데이터 보안 & 정보 생명주기 관리',
                    'depth' => '5.3',
                    'clause' => '공공 네트워크를 횡단하는 전자 상거래(eCommerce)와 관련된 데이터를 적절히 분류하고 부정행위, 무단 공개 또는 변경으로부터 보호하여 계약상의 분쟁 및 데이터 타협을 방지하도록 이행하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 5.3 위험내용',
                    'protection_plan' => 'CSA STAR 5.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            53 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '데이터 보안 & 정보 생명주기 관리',
                    'depth' => '5.4',
                    'clause' => '데이터를 포함하는 데이터 및 객체의 라벨링, 취급 및 보안에 대한 정책 및 절차를 수립이행하고 있습니까? 데이터용 집계용 컨테이너 역할을 하는 객체에 대해서는 라벨 상속 메커니즘이 구현되어 있습니까?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '모든 정보자산에 대한 중요도 및 식별, 분류가 미흡하여 정보자산의 관리 소홀에 따른 사고가 발생할 위험',
                    'protection_plan' => '데이터를 중요도에 따라 자산목록에 포함시키고 이에 따라 관리하는 방안을 마련하여야 함',
                    'threatcode' => 'TC1-12',
                ),
            54 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '데이터 보안 & 정보 생명주기 관리',
                    'depth' => '5.5',
                    'clause' => '생산 데이터는 비생산 환경에서 복제하거나 사용해서는 안 된다. 비생산 환경에서 고객 데이터를 사용하려면 데이터가 영향을 받는 모든 고객의 명시적이고 문서화된 승인이 필요하며, 민감한 데이터 요소의 스크러빙에 대한 모든 법적 및 규제 요건을 준수 이행하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 5.5 위험내용',
                    'protection_plan' => 'CSA STAR 5.5 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            55 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '데이터 보안 & 정보 생명주기 관리',
                    'depth' => '5.6',
                    'clause' => '모든 데이터는 책임을 지고 정의되고 문서화되고 전달되고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'CSA STAR 5.6 위험내용',
                    'protection_plan' => 'CSA STAR 5.6 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            56 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '데이터 보안 & 정보 생명주기 관리',
                    'depth' => '5.7',
                    'clause' => '모든 저장 매체에서 데이터를 안전하게 처분하고 완전히 제거하기 위해 구현된 업무 프로세스 및 기술 조치를 지원하여 어떠한 컴퓨터 디지털 포렌식 방법으로도 데이터를 복구할 수 없도록 하는 정책 및 절차를 수립하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 5.7 위험내용',
                    'protection_plan' => 'CSA STAR 5.7 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            57 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '데이터센터 보안',
                    'depth' => '6.1',
                    'clause' => '자산은 반드시 업무상 중요성, 서비스 수준 기대치 및 운용 연속성 요건으로 분류이행하고 있습니까? 모든 현장 및/또는 지리적 위치에 위치한 업무상 중요한 자산의 전체 재고와 시간 경과에 따른 사용량을 정기적으로 유지 및 업데이트하고 정의된 역할과 책임에 따라 소유권을 할당하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '모든 정보자산에 대한 중요도 및 식별, 분류가 미흡하여 정보자산의 관리 소홀에 따른 사고가 발생할 위험',
                    'protection_plan' => '데이터를 중요도에 따라 자산목록에 포함시키고 이에 따라 관리하는 방안을 마련하여야 함',
                    'threatcode' => 'TC1-12',
                ),
            58 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '데이터센터 보안',
                    'depth' => '6.2',
                    'clause' => '물리적 보안 범위(예: 울타리, 벽, 장벽, 경비, 게이트, 전자 감시, 물리적 인증 메커니즘, 수신 데스크 및 보안 감시)를 구현하여 민감한 데이터 및 정보시스템을 보호하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 6.2 위험내용',
                    'protection_plan' => 'CSA STAR 6.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            59 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '데이터센터 보안',
                    'depth' => '6.3',
                    'clause' => '연결 인증 방법으로 자동 장비 식별을 사용이행하고 있습니까? 위치 인식 기술을 사용하여 알려진 장비 위치를 기반으로 접속 인증 무결성을 검증을 이행하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 6.3 위험내용',
                    'protection_plan' => 'CSA STAR 6.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            60 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '데이터센터 보안',
                    'depth' => '6.4',
                    'clause' => '하드웨어, 소프트웨어 또는 데이터를 오프사이트 전장으로 이전 또는 이전하기 전에 승인처리를 이행하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 6.4 위험내용',
                    'protection_plan' => 'CSA STAR 6.4 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            61 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '데이터센터 보안',
                    'depth' => '6.5',
                    'clause' => '조직내외에서 사용하는 장비(자산형별)의 안전한 처분에 관한 정책 및 절차를 수립한다. 여기에는 정보의 복구가 불가능하도록 만드는 삭제 솔루션 또는 파괴 프로세스가 포함되어야 한다. 삭제는 드라이브를 완전히 덮어써 재사용 및 배포를 위해 지워진 드라이브가 재고로 유출되거나 파괴될 때까지 안전하게 보관되도록 이행하고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'CSA STAR 6.5 위험내용',
                    'protection_plan' => 'CSA STAR 6.5 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            62 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '데이터센터 보안',
                    'depth' => '6.6',
                    'clause' => '민감한 정보를 저장하는 사무실, 방, 시설, 안전한 작업환경 유지를 위한 정책 및 절차를 수립하고, 업무 프로세스를 지원하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 6.6 위험내용',
                    'protection_plan' => 'CSA STAR 6.6 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            63 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '데이터센터 보안',
                    'depth' => '6.7',
                    'clause' => '보안 구역으로의 출입은 허가된 직원만 출입이 가능하도록 물리적 접근통제 메커니즘에 의해 제한되고 감시하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 6.7 위험내용',
                    'protection_plan' => 'CSA STAR 6.7 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            64 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '데이터센터 보안',
                    'depth' => '6.8',
                    'clause' => '서비스 구역 및 기타 허가되지 않은 인원이 구내에 진입할 수 있는 지점과 같은 출입 지점을 감시, 통제 및 가능한 경우 데이터 저장 및 처리 시설에서 격리하여 허가되지 않은 데이터 손상, 타협 및 손실을 방지 이행하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 6.8 위험내용',
                    'protection_plan' => 'CSA STAR 6.8 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            65 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '데이터센터 보안',
                    'depth' => '6.9',
                    'clause' => '이용자 및 지원 인원에 의한 정보 자산 및 기능에 대한 물리적 접근은 제한하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 6.9 위험내용',
                    'protection_plan' => 'CSA STAR 6.9 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            66 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '암호화 & 키 관리',
                    'depth' => '7.1',
                    'clause' => '키에는 식별 가능한 소유자(신원에 대한 키의 바인딩)가 있어야 하며 키 관리 정책이 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 7.1 위험내용',
                    'protection_plan' => 'CSA STAR 7.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            67 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '암호화 & 키 관리',
                    'depth' => '7.2',
                    'clause' => '서비스의 암호체계에 있어서의 암호키의 관리(예를 들어 키 생성에서 파기·교체까지의 생명주기 관리, 공개키 인프라, 암호 프로토콜 설계 및 알고리즘 사용, 안전한 키 생성을 위한 액세스 제어, 교환·보관)를 위한 정책 및 절차가 있습니까?

암호화된 데이터나 세션에 사용되는 키의 분리를 제외한다.) 요청 시, 특히 고객(테넌트) 데이터가 서비스의 일부로 사용되거나 고객(테넌트)이 제어의 구현에 대해 어느 정도 공유 책임이 있는 경우, 제공자는 고객(테넌트)에게 암호 시스템 내의 변경사항을 통지하고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '정보보호정책 및 지침서가 현행화가 미흡하여 업무에 관련된 표준, 법률 등 요건을 만족시키지 못해 업무 프로세스에 악영향을 미칠수 있는 위험',
                    'protection_plan' => '기존 수립된 정보보호 지침서에 암호화 키 관련 내용을 Cloud 환경에 적합하도록 개정해야 함',
                    'threatcode' => 'TC1-12',
                ),
            68 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '암호화 & 키 관리',
                    'depth' => '7.3',
                    'clause' => '(파일 서버, 데이터베이스 및 최종 사용자 워크 스테이션과 같은) 중요한 데이터를 보호하기 위해 암호화 프로토콜을 사용하고, 사용중인 데이터 (메모리)를 보호하기 위해 정책 및 절차가 수립되고 비즈니스 프로세스 및 기술 조치가 지원하고 있습니까?

(예 : 시스템 인터페이스, 공용 네트워크 및 전자 메시징)에 적용되는 법적, 법규 및 규정 준수 의무에 따라 해당 데이터를 전송하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '저장 매체에 대한 관리가 미흡하여 중요 데이터 정보유출, 시스템 장애 등 보안사고가 발생할 위험',
                    'protection_plan' => 'DLP를 메일에도 적용하여 중요자료 유출에 대한 대책을 마련하여야 함',
                    'threatcode' => 'TC4-08',
                ),
            69 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '암호화 & 키 관리',
                    'depth' => '7.4',
                    'clause' => '플랫폼 및 데이터에 적합한 암호화(예: AES-256)를 공개/검증된 형식과 표준 알고리즘으로 운영하고 있습니까? 

키는 클라우드(즉, 해당 클라우드 제공자에서)에 저장하지 않고 클라우드 소비자 또는 신뢰할 수 있는 키 관리 제공자에 의해 유지되어야 한다. 키 관리 및 키 사용 업무는 분리하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호정책 및 지침서가 현행화가 미흡하여 업무에 관련된 표준, 법률 등 요건을 만족시키지 못해 업무 프로세스에 악영향을 미칠수 있는 위험',
                    'protection_plan' => '기존 수립된 정보보호 지침서에 암호화 키 관련 내용을 Cloud 환경에 적합하도록 개정해야 함',
                    'threatcode' => 'TC1-12',
                ),
            70 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '거버넌스 및 위험 관리',
                    'depth' => '8.1',
                    'clause' => '기본 보안 요건은 개발 또는 취득, 조직 소유 또는 관리, 물리적 또는 가상, 애플리케이션과 인프라 시스템 및 적용 가능한 법적, 법적 및 규제 준수 의무를 준수하는 네트워크 구성 요소에 대해 설정되어야 한다. 표준 베이스라인 구성의 편차는 배치, 프로비저닝 또는 사용에 앞서 변경 관리 정책과 절차에 따라 승인되어야 한다. 보안 기준 요건의 준수는 사업상 필요에 따라 대체 주파수를 설정하고 승인하지 않는 한 최소한 매년 재검토이행하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 8.1 위험내용',
                    'protection_plan' => 'CSA STAR 8.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            71 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '거버넌스 및 위험 관리',
                    'depth' => '8.2',
                    'clause' => '데이터 거버넌스 요건과 관련된 리스크 평가는 계획적인 간격으로 실시해야 하며, 다음 사항을 고려하고 있습니까?
- 응용프로그램, 데이터베이스, 서버, 네트워크 인프라에 걸쳐 중요한 데이터가 저장되고 전송되는 위치에 대한 인식
- 정해진 보존기간 및 폐기종료 요구 사항 준수
- 데이터 분류 및 무단 사용, 접속, 분실, 파괴, 위변조로부터 보호',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '데이터 보존기간에 대한 정의를 하지 않아 법률위반에 따른 벌금, 징계를 받을 수 있고, 관련된 사항에 대해 피해 발생시 구제의 어려움이 있는 위험',
                    'protection_plan' => '현재 적용받는 법률에서 규정하고 있는 자료의 보관기간을 확인하여 법률에서 정한 기간 이상으로 자료를 백업하여야 함',
                    'threatcode' => 'TC8-01',
                ),
            72 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '거버넌스 및 위험 관리',
                    'depth' => '8.3',
                    'clause' => '관리자는 자신의 책임 영역과 관련된 보안 정책, 절차 및 표준에 대한 인식을 유지하고 이를 준수를 하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 8.3 위험내용',
                    'protection_plan' => 'CSA STAR 8.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            73 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '거버넌스 및 위험 관리',
                    'depth' => '8.4',
                    'clause' => '자산 및 데이터를 손실, 오용, 무단 접근, 공개, 변경 및 파기로부터 보호하기 위한 행정, 기술 및 물리적 안전장치를 포함하는 정보보안 관리 프로그램(ISMP)을 개발, 문서화, 승인, 구현이행하고 있습니까? 
보안 프로그램은 사업의 특징과 관련된 다음과 같은 영역을 포함하되 이에 국한되지 않도록 이행하고 있습니까?
- 위험관리
- 보안정책
- 정보보안 조직
- 자산관리
- 인재 확보
- 물리적 및 환경적 보안
- 통신 및 운영 관리
- 접근통제
- 정보시스템 취득, 개발, 유지보수',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'CSA STAR 8.4 위험내용',
                    'protection_plan' => 'CSA STAR 8.4 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            74 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '거버넌스 및 위험 관리',
                    'depth' => '8.5',
                    'clause' => '경영진과 라인 관리는 명확하게 문서화된 방향과 책무를 통해 정보보안을 지원하기 위한 공식적인 조치를 취하고, 그 조치가 책정되었는지 확인한다.',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'CSA STAR 8.5 위험내용',
                    'protection_plan' => 'CSA STAR 8.5 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            75 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '거버넌스 및 위험 관리',
                    'depth' => '8.6',
                    'clause' => '영향을 받는 모든 직원 및 외부 업무 관계에 의한 검토에 대해 정보보안 정책 및 절차를 수립하고 쉽게 이용할 수 있도록 이행하고 있습니까? 

정보보안 정책은 조직의 비즈니스 리더십(또는 기타 책임 있는 업무 역할 또는 기능)의 허가를 받아야 하며, 기업 리더십에 대한 정의된 정보보안 역할 및 책임을 포함하는 전략적 사업계획 및 정보보안 관리프로그램의 지원을 받고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 8.6 위험내용',
                    'protection_plan' => 'CSA STAR 8.6 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            76 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '거버넌스 및 위험 관리',
                    'depth' => '8.7',
                    'clause' => '보안정책 및 절차를 위반한 직원에 대해서는 정식 징계 또는 제재 방침을 정한다. 직원들은 위반 시 어떤 조치를 취할 수 있는지 알고 있어야 하며, 징계 조치는 방침 및 절차에 명시되어 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보안 관련 위반 시 적용받는 구체적인 징계내용이 누락되어 있어, 정보보안정책의 중요성을 인지 하지 못해 보안사고가 일어날 위험',
                    'protection_plan' => '인적보안지침에 정보보안 관련 위반 시 적용받는 구체적인 징계내용을 명시하고, 징계내용과 관련된 위반 시 이에 따라 징계하여야 함',
                    'threatcode' => 'TC1-10',
                ),
            77 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '거버넌스 및 위험 관리',
                    'depth' => '8.8',
                    'clause' => '위험성 평가 결과에는 보안 정책, 절차, 표준 및 제어가 적절하고 효과적으로 유지되도록 갱신하는 내용이 포함되어 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보호관리체계 관련 현황 파악 및 대책수립이 미흡하여 관리 및 운영통제 미흡에 대한 위험',
                    'protection_plan' => '정보보호관리체계 관련 현황 파악 및 대책수립 시 관련 규정이나 지침에 세부적으로 명시하여야 함(장, 절, 조 등)',
                    'threatcode' => 'TC1-04',
                ),
            78 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '거버넌스 및 위험 관리',
                    'depth' => '8.9',
                    'clause' => '조직의 비즈니스 리더십 (또는 기타 책임있는 비즈니스 역할 또는 기능)은 예정된 간격으로 또는 보안 전략, 효율성, 정확성, 관련성 및 적용 가능성에 대한 지속적인 조정을 보장하기 위해 조직 변경의 결과로 정보 보안 정책을 검토이행하고 있습니까? 법적, 법정 또는 규정 준수 의무 사항 등 포함',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'CSA STAR 8.9 위험내용',
                    'protection_plan' => 'CSA STAR 8.9 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            79 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '거버넌스 및 위험 관리',
                    'depth' => '8.10',
                    'clause' => '전사적 프레임워크와 연계하여 질적 및 정량적 방법을 사용하여 확인된 모든 위험의 발생 가능성과 영향을 판단하기 위해 최소한 매년 또는 계획적인 간격으로 공식적인 위험평가를 실시이행하고 있습니까? 모든 위험 범주(예: 감사 결과, 위협 및 취약성 분석, 규제 준수)를 고려하여 고유 위험 및 잔류 위험과 관련된 가능성과 영향을 독립적으로 결정하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 8.1 위험내용',
                    'protection_plan' => 'CSA STAR 8.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            80 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '거버넌스 및 위험 관리',
                    'depth' => '8.11',
                    'clause' => '위험은 허용 가능한 수준으로 완화되어야 한다. 위험 기준에 기초한 수용 수준은 합리적인 해결 시간 틀 및 이해관계자 승인에 따라 설정되고 문서화되어 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '적절하게 관리되지 못한 DoA 승인에 따른 보안사고가 발생할 위험',
                    'protection_plan' => 'DoA를 설정할때 CISO 등 경영진의 의사결정에 의하여 설정되어야 함',
                    'threatcode' => 'TC1-04',
                ),
            81 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '인적 자원',
                    'depth' => '9.1',
                    'clause' => '인력진의 종료 및/또는 외부 사업관계의 만료 시, 조직 소유의 모든 자산은 정해진 기간 내에 반환되어 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 9.1 위험내용',
                    'protection_plan' => 'CSA STAR 9.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            82 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '인적 자원',
                    'depth' => '9.2',
                    'clause' => '지역법, 규정, 윤리 및 계약적 제약에 따라 모든 고용 후보, 계약자 및 제3자는 접근해야 할 데이터 분류, 사업 요건 및 허용 가능한 위험에 비례하여 배경 검증을 받고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'CSA STAR 9.2 위험내용',
                    'protection_plan' => 'CSA STAR 9.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            83 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '인적 자원',
                    'depth' => '9.3',
                    'clause' => '고용 계약서에는 확립된 정보 거버넌스 및 보안 정책을 준수하기 위한 조항 및/또는 조건이 포함되어야 하며, 기업 시설, 자원 및 자산에 대한 인력진의 사용자 접근을 허가하기 전에 신규 채용되거나 기내 인력진(예: 정규 직원 또는 시간제 직원 또는 임시 직원)에 의해 서명되어 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'CSA STAR 9.3 위험내용',
                    'protection_plan' => 'CSA STAR 9.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            84 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '인적 자원',
                    'depth' => '9.4',
                    'clause' => '고용 종료 또는 고용 절차 변경을 수행하기 위한 역할 및 책임을 할당, 문서화 및 전달 이행하고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'CSA STAR 9.4 위험내용',
                    'protection_plan' => 'CSA STAR 9.4 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            85 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '인적 자원',
                    'depth' => '9.5',
                    'clause' => '기업 자원에 대한 모바일 장치 접근 허용과 관련된 비즈니스 위험을 관리하기 위한 정책 및 절차를 수립하고, 이를 지원하는 비즈니스 프로세스 및 기술 대책을 수립해야 하며, 보다 높은 보증 보상 통제와 허용 가능한 사용 정책 및 절차(예: 의무화된 보안 교육, 강인함, 신원, 자격 및 액세스 제어, 장치 모니터링).)를 구현되어 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 9.5 위험내용',
                    'protection_plan' => 'CSA STAR 9.5 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            86 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '인적 자원',
                    'depth' => '9.6',
                    'clause' => '데이터 보호 및 운영 세부사항에 대한 조직의 요구를 반영하는 비공개 또는 기밀유지 협정의 요건은 계획된 간격으로 식별, 문서화 및 검토하고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'CSA STAR 9.6 위험내용',
                    'protection_plan' => 'CSA STAR 9.6 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            87 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '인적 자원',
                    'depth' => '9.7',
                    'clause' => '계약자, 종업원, 제3자 이용자의 역할 및 책임은 정보 자산 및 보안과 관련된 것으로 문서화되어 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '인적 운영 관리의 미흡한 부분으로 인해 보안사고시 역할과 책임이 불분명하여 신속하게 대처를 하지 못할 위험',
                    'protection_plan' => '정보보호 조직 인력 구성 시 관련 전공, 자격증 여부, 관련 경력 등 을 고려하여 조직을 구성하여야 함',
                    'threatcode' => 'TC1-06',
                ),
            88 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '인적 자원',
                    'depth' => '9.8',
                    'clause' => '조직 소유 또는 관리되는 사용자 엔드포인트 장치(예: 발급된 워크스테이션, 노트북 및 모바일 장치)와 IT 인프라 네트워크 및 시스템 구성요소의 사용을 허용하는 허용 범위와 조건을 정의하기 위한 정책과 절차를 수립하고, 이를 지원하는 비즈니스 프로세스 및 기술 대책을 수립하고 있습니까? 

또한, 개인 모바일 기기 및 기업 자원에 대한 접근과 관련된 애플리케이션(즉, BYOD(Bring Your Own Device))의 사용을 허용하는 범위와 조건을 정의하는 것이 적절하다고 간주되고 통합되어 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 9.8 위험내용',
                    'protection_plan' => 'CSA STAR 9.8 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            89 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '인적 자원',
                    'depth' => '9.9',
                    'clause' => '조직의 모든 계약자, 제3자 사용자 및 직원을 대상으로 보안 인식 훈련 프로그램을 수립하고 해당 시 의무화한다. 조직 데이터에 접근할 수 있는 모든 개인은 조직과 관련된 전문적 기능과 관련된 조직 절차, 프로세스 및 정책에 대한 적절한 인식 훈련과 정기적인 업데이트를 받고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 9.9 위험내용',
                    'protection_plan' => 'CSA STAR 9.9 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            90 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '인적 자원',
                    'depth' => '9.10',
                    'clause' => '모든 직원은 다음에 대한 자신의 역할과 책임을 인식하고 있습니까?
- 확립된 정책 및 절차와 관련 법률, 법령 또는 규정 준수 의무에 대한 인식 및 준수 유지
- 안전하고 안전한 작업 환경 유지',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 9.1 위험내용',
                    'protection_plan' => 'CSA STAR 9.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            91 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '인적 자원',
                    'depth' => '9.11',
                    'clause' => '무인 작업 공간에 공개적으로 눈에 띄는(예: 바탕화면에서) 민감한 문서가 없고, 설정된 비활성 기간 후 사용자 컴퓨팅 세션이 비활성화되도록 하기 위한 정책과 절차를 수립 이행하고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'CSA STAR 9.11 위험내용',
                    'protection_plan' => 'CSA STAR 9.11 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            92 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '식별 & 접근 관리',
                    'depth' => '10.1',
                    'clause' => '조직의 정보시스템과 상호 작용하는 감사 도구에 대한 접근 및 사용은 적절히 분리하고 로그 데이터의 부적절한 공개 및 변조를 방지하기 위해 접근을 제한하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 10.1 위험내용',
                    'protection_plan' => 'CSA STAR 10.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            93 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '식별 & 접근 관리',
                    'depth' => '10.2',
                    'clause' => '데이터 및 조직 소유 또는 관리(물리적 및 가상) 애플리케이션 간 액세스 권한을 가진 모든 내부 기업 및 고객(테넌트) 사용자를 위한 적절한 ID, 자격 및 액세스 관리를 보장하기 위해 사용자 액세스 정책 및 절차를 수립하고, 구현을 지원이행하고 있습니까?얼굴 및 인프라 네트워크 및 시스템 구성 요소. 이러한 정책, 절차, 프로세스 및 조치는 다음을 포함이행하고 있습니까?

- 직무 기능에 기반한 최소한의 특권 규칙(예: 내부 직원 및 파견 직원 인력 변경, 고객 통제 액세스, 공급업체의 비즈니스 관계 또는 기타 제3자 비즈니스 관계)에 따른 사용자 계정 자격 프로비저닝 및 해제를 위한 절차, 지원 역할 및 책임
- 높은 수준의 보증 및 다단계 인증 기밀(예: 관리 인터페이스, 키 생성, 원격 액세스, 업무 분리, 비상 액세스, 대규모 프로비저닝 또는 지리적으로 분산된 구축, 중요 시스템에 대한 직원 이중화)에 대한 비즈니스 사례 고려 사항
- 타사(예: 공급자 및/또는 기타 고객(테넌트)의 멀티 테넌트 아키텍처에서 세션 및 데이터에 액세스
- ID 신뢰 검증 및 서비스 간 애플리케이션(API) 및 정보 처리 상호운용성(예: SSO 및 연방)
- 인스턴트화를 통한 계정 인증 생명주기 관리
- 계정 인증 정보 및/또는 ID 저장소가 가능한 경우 최소화 또는 재사용
- 데이터 및 세션에 대한 액세스를 위한 인증, 인증 및 회계(AA) 규칙(예: 암호화 및 강력/다중 요인, 만료 가능, 공유되지 않는 인증 정보)
- 데이터 및 세션 액세스를 위한 인증, 인증 및 회계(AA) 규칙에 대한 고객(테넌트) 제어 권한 및 지원 기능
- 해당 법률, 법률 또는 규정 준수 요구 사항 준수',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '비정상적인 접근 시도에 대해 실시간으로 모니터링 하고 있지 않아, 비인가자가 악의적인 목적으로 시스템에 접근이 가능하거나 공격 행위를 부인할 위험',
                    'protection_plan' => '관리자 및 운영자 등 운영 로그를 주기적이고 구체적인 항목을 기준으로 검토하고 보고하는 절차를 준수해야 함',
                    'threatcode' => 'TC1-04',
                ),
            94 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '식별 & 접근 관리',
                    'depth' => '10.3',
                    'clause' => '진단 및 구성 포트에 대한 사용자 접근은 공인된 개인 및 애플리케이션으로 제한하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 10.3 위험내용',
                    'protection_plan' => 'CSA STAR 10.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            95 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '식별 & 접근 관리',
                    'depth' => '10.4',
                    'clause' => 'IT 인프라에 접속하는 모든 사람에 대한 ID 정보를 저장·관리하고, 그 접속 수준을 결정하는 정책·절차 등을 책정한다. 사용자 ID에 근거해 네트워크 자원에 대한 접근을 제어하는 정책도 개발하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 10.4 위험내용',
                    'protection_plan' => 'CSA STAR 10.4 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            96 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '식별 & 접근 관리',
                    'depth' => '10.5',
                    'clause' => '사용자-역할 이해충돌과 관련된 비즈니스 리스크를 해결하기 위해 정의된 직무분류에 따른 사용자 접근을 제한하기 위해 사용자 접근방침 및 절차를 수립하고, 사업 프로세스와 기술적 조치를 지원 이행하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 10.5 위험내용',
                    'protection_plan' => 'CSA STAR 10.5 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            97 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '식별 & 접근 관리',
                    'depth' => '10.6',
                    'clause' => '조직의 자체 개발한 애플리케이션, 프로그램 또는 객체 소스 코드 또는 기타 형태의 지적 재산권(IP)에 대한 접근 및 독점 소프트웨어의 사용은 확립된 사용자 접근 정책 및 절차에 따라 직무 기능에 기초한 최소한의 특권 규칙에 따라 적절하게 제한되어있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'Two Factor 인증 절차의 강제성이 없어 비인가자가 쉽게 시스템에 접근이 가능할 위험',
                    'protection_plan' => '소스코드 접근 시 아이디, 패스워드 이외의 Two factor 인증 사용 시 선택사항이 아닌 의무사항으로 변경하여 보안수준을 높여야 함',
                    'threatcode' => 'TC2-02',
                ),
            98 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '식별 & 접근 관리',
                    'depth' => '10.7',
                    'clause' => '조직의 정보시스템과 데이터에 제3자가 접근해야 하는 업무 프로세스에서 발생하는 리스크의 식별, 평가 및 우선순위 설정은 허가되지 않거나 부적절한 접근의 가능성과 영향을 최소화, 모니터링 및 측정하기 위한 자원의 조정된 적용이 뒤따라야 한다. 위험 분석에서 도출된 보정 제어는 접근을 프로비저닝하기 전에 구현되어 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 10.7 위험내용',
                    'protection_plan' => 'CSA STAR 10.7 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            99 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '식별 & 접근 관리',
                    'depth' => '10.8',
                    'clause' => '허용 가능한 저장장치와 인증에 사용되는 ID에 대한 접근은 비즈니스에 필요한 것으로 명시적으로 정의된 사용자에게만 최소한의 권한과 복제 제한 규칙을 기반으로 하여만 ID에 액세스할 수 있도록 하기 위해 확립되어 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 10.8 위험내용',
                    'protection_plan' => 'CSA STAR 10.8 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            100 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '식별 & 접근 관리',
                    'depth' => '10.9',
                    'clause' => '데이터 및 조직적으로 소유되거나 관리되는(물리적/가상적) 애플리케이션, 인프라 시스템 및 네트워크 구성요소에 대한 사용자 액세스(예: 직원, 계약업체, 고객(테넌트), 비즈니스 파트너 및/또는 공급업체 관계) 프로비저닝은 액세스를 허가 및 승인하기 전에 조직의 관리자에 의해 승인되어야 한다.확립된 정책 및 절차에 따라 제한됨. 요청이 있을 경우, 제공자는 특히 고객(테넌트) 데이터를 서비스 및/또는 고객(테넌트)이 통제 구현에 대해 공유 책임을 지는 경우 이 사용자 접근에 대해 고객(테넌트)에게 알리고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 10.9 위험내용',
                    'protection_plan' => 'CSA STAR 10.9 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            101 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '식별 & 접근 관리',
                    'depth' => '10.10',
                    'clause' => '조직이 직무 기능에 기초한 최소한의 특권의 규칙을 준수하고 있음을 입증하기 위한 증거에 의해 뒷받침되는 조직의 비즈니스 리더십 또는 기타 책임 있는 업무 역할 또는 기능에 의해 계획된 간격에 따라 사용자 접근에 대한 권한을 부여하고 검증이행하고 있습니까? 

확인된 접근 위반의 경우, 교정조치는 확립된 사용자 접근 정책과 절차를 따르고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '비정상적인 접근 시도에 대해 실시간으로 모니터링 하고 있지 않아, 비인가자가 악의적인 목적으로 시스템에 접근이 가능하거나 공격 행위를 부인할 위험',
                    'protection_plan' => '관리자 및 운영자 등 운영 로그를 주기적이고 구체적인 항목을 기준으로 검토하고 보고하는 절차를 준수해야 함',
                    'threatcode' => 'TC1-04',
                ),
            102 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '식별 & 접근 관리',
                    'depth' => '10.11',
                    'clause' => '조직 소유 또는 관리되는(물리적/가상) 애플리케이션, 인프라 시스템 및 네트워크 구성요소에 대한 사용자 접근의 시간적 권한설정(삭제 또는 수정)은 확립된 정책과 절차에 따라 그리고 사용자의 상태 변화(예: 고용 종료 또는 기타 비즈니스에 근거하여 구현되어야 한다.직책, 직책 변경 또는 전근. 요청이 있을 경우, 제공자는 고객(테넌트) 데이터를 서비스 및/또는 고객(테넌트)이 통제 구현에 대해 공유 책임을 지는 경우 이러한 변경사항을 고객(테넌트)에게 알리고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'CSA STAR 10.11 위험내용',
                    'protection_plan' => 'CSA STAR 10.11 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            103 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '식별 & 접근 관리',
                    'depth' => '10.12',
                    'clause' => '내부 기업 또는 고객(테넌트) 사용자 계정 인증서는 다음과 같이 제한되어, 적절한 신분, 자격 및 접근 관리를 보장하며, 확립된 정책과 절차에 따라 제한되어 있습니까?
- ID 신뢰 검증 및 서비스 간 애플리케이션(API) 및 정보 처리 상호운용성(예: SSO 및 Federation)
- 인스턴트화를 통한 계정 인증 생명주기 관리
- 계정 인증 정보 및/또는 ID 저장소가 가능한 경우 최소화 또는 재사용
- 업계 허용 및/또는 규제 준수 인증, 권한 부여 및 회계(AA) 규칙 준수(예: 강력한/다중 요인, 만료 가능, 공유되지 않는 인증 정보)',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'CSA STAR 10.12 위험내용',
                    'protection_plan' => 'CSA STAR 10.12 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            104 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '식별 & 접근 관리',
                    'depth' => '10.13',
                    'clause' => '시스템, 개체, 네트워크, 가상 시스템 및 애플리케이션 제어를 잠재적으로 재정의할 수 있는 유틸리티 프로그램은 제한되어 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 10.13 위험내용',
                    'protection_plan' => 'CSA STAR 10.13 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            105 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '기반시설 & 가상화 보안',
                    'depth' => '11.1',
                    'clause' => '감사 로그의 보호, 보존 및 생명주기 관리를 위해 더 높은 수준의 보증이 필요하며, 적용 가능한 법적, 법적 또는 규정 준수 의무를 준수하고, 잠재적인 의심스러운 네트워크 동작 및/또는 파일 무결성 이상을 탐지하고, 디지털 포렌식적 조사를 지원하기 위한 고유한 사용자 액세스 책임 제공보안 위반 시 능력을 검증하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '비정상적인 접근 시도에 대해 실시간으로 모니터링 하고 있지 않아, 비인가자가 악의적인 목적으로 시스템에 접근이 가능하거나 공격 행위를 부인할 위험',
                    'protection_plan' => '1. 관리자 및 운영자 등 운영 로그를 주기적이고 구체적인 항목을 기준으로 검토하고 보고하는 절차를 준수해야 함
2. 현재 적용받는 법률에서 규정하고 있는 자료의 보관기간을 확인하여 법률에서 정한 기간 이상으로 자료를 백업하여야 함',
                    'threatcode' => 'TC1-04',
                ),
            106 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '기반시설 & 가상화 보안',
                    'depth' => '11.2',
                    'clause' => '제공자는 모든 가상 시스템 이미지의 무결성을 항상 보장이행하고 있습니까? 가상 시스템 이미지의 변경 사항은 반드시 기록되어야 하며 실행 상태(예: 휴면 상태, 꺼짐 또는 실행 상태)에 관계없이 경고가 표시되어야 한다. 이미지 변경 또는 이동의 결과 및 이미지 무결성에 대한 후속 검증은 전자적 방법(예: 포털 또는 경고)을 통해 고객에게 즉시 제공하고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'CSA STAR 11.2 위험내용',
                    'protection_plan' => 'CSA STAR 11.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            107 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '기반시설 & 가상화 보안',
                    'depth' => '11.3',
                    'clause' => '모든 관련 정보 처리 시스템의 시스템 시계를 동기화하여 활동 일정의 추적 및 재구성을 용이하게 하기 위해 신뢰할 수 있고 상호 합의된 외부 시간 소스를 사용하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 11.3 위험내용',
                    'protection_plan' => 'CSA STAR 11.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            108 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '기반시설 & 가상화 보안',
                    'depth' => '11.4',
                    'clause' => '가용성, 품질 및 적절한 용량 및 자원은 법적, 법적 및 규제 준수 의무에 따라 필요한 시스템 성능을 제공하도록 계획, 준비 및 측정이행하고 있습니까? 

시스템 과부하 위험을 완화하기 위해 향후 용량 요건의 예측이 가능하도록 운영하고 있습니까?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => 'CSA STAR 11.4 위험내용',
                    'protection_plan' => 'CSA STAR 11.4 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            109 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '기반시설 & 가상화 보안',
                    'depth' => '11.5',
                    'clause' => '구현자는 보안 취약성 평가 툴 또는 서비스가 사용되는 가상화 기술(예: 가상화 인식)을 수용하는지 확인하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 11.5 위험내용',
                    'protection_plan' => 'CSA STAR 11.5 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            110 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '기반시설 & 가상화 보안',
                    'depth' => '11.6',
                    'clause' => '네트워크 환경과 가상 인스턴스는 신뢰할 수 있는 연결과 신뢰할 수 없는 연결 간의 트래픽을 제한하고 모니터링하도록 설계 및 구성되어 있습니까?

이러한 구성은 최소한 일 년에 한 번은 검토되어야 하며, 모든 허용되는 서비스, 프로토콜, 포트에 대한 사용에 대한 문서화된 정당성과 조정기를 보상함으로써 어떻게 뒷받침하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 11.6 위험내용',
                    'protection_plan' => 'CSA STAR 11.6 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            111 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '기반시설 & 가상화 보안',
                    'depth' => '11.7',
                    'clause' => '각 운영 체제는 비즈니스 요구를 충족하기 위해 필요한 포트, 프로토콜 및 서비스만 제공하도록 강화되어야 하며, 기본 운영 빌드 표준 또는 템플릿의 일부로 안티바이러스, 파일 무결성 모니터링 및 로깅과 같은 기술 제어를 지원하도록 이행하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 11.7 위험내용',
                    'protection_plan' => 'CSA STAR 11.7 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            112 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '기반시설 & 가상화 보안',
                    'depth' => '11.8',
                    'clause' => '정보자산에 대한 무단접근이나 변경을 방지하기 위해 생산환경과 비생산환경이 분리되어야 한다. 환경의 분리는 상태 저장 검사 방화벽, 도메인/실제 인증 소스 및 직무의 일부로 이러한 환경에 액세스하는 담당자에 대한 명확한 직무 분리를 포함하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 11.8 위험내용',
                    'protection_plan' => 'CSA STAR 11.8 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            113 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '기반시설 & 가상화 보안',
                    'depth' => '11.9',
                    'clause' => '멀티 테넌트(Multi-tenant) 조직 소유 또는 관리(물리적 및 가상) 애플리케이션 및 인프라 시스템 및 네트워크 구성요소는 다음과 같은 고려사항에 따라 제공자 및 고객(테넌트) 사용자 액세스를 다른 테넌트 사용자로부터 적절히 세분화하도록 설계, 개발, 구축 및 구성되어 있습니까?
- 수립된 정책 및 절차
- 비즈니스 크리티컬 자산 및/또는 중요한 사용자 데이터 격리 및 보다 강력한 내부 제어와 높은 수준의 보장을 요구하는 세션
- 법적, 법적 및 규정 준수 의무 준수',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 11.9 위험내용',
                    'protection_plan' => 'CSA STAR 11.9 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            114 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '기반시설 & 가상화 보안',
                    'depth' => '11.10',
                    'clause' => '보안되고 암호화된 통신 채널은 물리적 서버, 애플리케이션 또는 데이터를 가상화된 서버로 마이그레이션할 때 사용되어야 하며, 가능한 경우 그러한 마이그레이션을 위해 생산 수준 네트워크에서 분리된 네트워크를 사용하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 11.1 위험내용',
                    'protection_plan' => 'CSA STAR 11.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            115 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '기반시설 & 가상화 보안',
                    'depth' => '11.11',
                    'clause' => '가상화 시스템을 호스팅하는 시스템의 모든 하이퍼바이저 관리 기능 또는 관리 콘솔에 대한 액세스는 최소한의 권한 원칙에 따라 직원에게 제한되어야 하며 기술적 제어(예: 2단계 인증, 감사 추적, IP 주소 필터링, 방화벽 및 관리 콘솔과 TLS 캡슐화된 통신)를 통해 지원되고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 11.11 위험내용',
                    'protection_plan' => 'CSA STAR 11.11 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            116 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '기반시설 & 가상화 보안',
                    'depth' => '11.12',
                    'clause' => '다음을 포함한 무선 네트워크 환경을 보호하기 위한 정책과 절차를 수립하고, 사업 프로세스와 구현된 기술적 조치를 지원하고 있습니까?
- 무단 트래픽을 제한하도록 구현 및 구성된 경계 방화벽
- 공급업체 기본 설정(예: 암호화 키, 암호 및 SNMP 커뮤니티 문자열)을 대체하여 인증 및 전송을 위한 강력한 암호화를 통해 보안 설정 활성화
- 권한이 부여된 담당자에게 제한된 무선 네트워크 장치에 대한 사용자 액세스
- 네트워크와의 적절한 연결을 위해 무단(불량) 무선 네트워크 장치의 존재를 감지하는 기능',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '무선네트워크의 보안 관련 규정이나 지침이 수립되어 있지 않아, 관리 미흡한 무선네트워크를 통해 사내 내부 네트워크에 침투할 위험',
                    'protection_plan' => '무선네트워크 보안 관련 규정 및 지침을 수립하고 이에 따라 관리하여야 함',
                    'threatcode' => 'TC1-10',
                ),
            117 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '기반시설 & 가상화 보안',
                    'depth' => '11.13',
                    'clause' => '네트워크 아키텍처 다이어그램은 법적 준수 여부에 영향을 미칠 수 있는 고위험 환경 및 데이터 흐름을 명확하게 식별이행하고 있습니까? 비정상적인 수신 또는 송신 트래픽 패턴(예: MAC 스푸핑 및 ARP poisoning 공격) 및/또는 분산된 사용자 거부 공격과 관련된 네트워크 기반 공격을 탐지하고 적시에 대응하기 위한 심층 방어 기법(예: 심층 패킷 분석, 트래픽 조절 및 블랙 홀링)을 구현하고 적용하고 있습니까?

[공격기법 설명]
※ MAC Spoofing 기법
-  MAC 주소를 속여 랜에서의 통신 흐름을 왜곡시키는 공격이다. 공격 대상 컴퓨터와 서버 사이의 트래픽을 공격자의 컴퓨터로 우회시켜 패스워드 정보등 원하는 정보를 획득 할 수 있다
※ ARP poioning 공격
- 목표 서버(같은 네트워크 단위)의 트래픽을 가로채기 위해 서버에 잘못된 MAC주소 정보를 보내 해당 ARP Cache 테이블을 오염시키는 것으로 ARP 프로토콜의 내용의 검증을 확인하지 않는 프로토콜 자체의 취약점을 이용한 공격기법
※ Dos(Denial-of-Service: 서비스거부) 공격
- 시스템을 악의적으로 공격해 해당 시스템의 자원을 부족하게 하여 원래 의도된 용도로 사용하지 못하게 하는 공격이다.
※ DDos(Distributed Denial-of-Service: 분산 서비스거부) 공격
- 여러 대의 공격자를 분산적으로 배치해 동시에 서비스 거부 공격을 하는 방법이다',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'CSA STAR 11.13 위험내용',
                    'protection_plan' => 'CSA STAR 11.13 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            118 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '상호운용성과 휴대성',
                    'depth' => '12.1',
                    'clause' => '제공자는 구성요소 간의 상호운용성을 지원하고 응용프로그램 마이그레이션을 용이하게 하기 위해 공개되고 공표된 API를 사용하고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'CSA STAR 12.1 위험내용',
                    'protection_plan' => 'CSA STAR 12.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            119 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '상호운용성과 휴대성',
                    'depth' => '12.2',
                    'clause' => '모든 구조화 및 비정형 데이터는 고객이 이용할 수 있어야 하며 산업 표준 형식(예: .doc, .xls, .pdf, 로그 및 플랫 파일)으로 요청 시 제공되고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'CSA STAR 12.2 위험내용',
                    'protection_plan' => 'CSA STAR 12.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            120 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '상호운용성과 휴대성',
                    'depth' => '12.3',
                    'clause' => '서비스 간 애플리케이션(API) 및 정보 처리 상호운용성, 애플리케이션 개발 및 정보 교환, 사용 및 무결성 지속성에 대한 고객(테넌트) 요구사항을 충족하기 위한 정책, 절차 및 상호 합의한 사항을 수립하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 12.3 위험내용',
                    'protection_plan' => 'CSA STAR 12.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            121 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '상호운용성과 휴대성',
                    'depth' => '12.4',
                    'clause' => '제공자는 데이터의 수출입과 서비스 관리를 위해 보안(예: 명확하지 않은 텍스트 및 인증된) 표준화된 네트워크 프로토콜을 사용해야 하며, 관련된 관련 상호운용성 및 이식성 표준을 상세히 기술한 문서를 소비자(테넌트)에게 제공하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 12.4 위험내용',
                    'protection_plan' => 'CSA STAR 12.4 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            122 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '상호운용성과 휴대성',
                    'depth' => '12.5',
                    'clause' => '제공자는 상호운용성을 보장하기 위해 업계에서 인정된 가상화 플랫폼과 표준 가상화 형식(예: OVF)을 사용해야 하며, 사용 중인 하이퍼바이저와 고객 검토에 사용할 수 있는 모든 솔루션별 가상화 후크에 대한 사용자 정의 변경 사항을 문서화하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 12.5 위험내용',
                    'protection_plan' => 'CSA STAR 12.5 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            123 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '모바일 보안',
                    'depth' => '13.1',
                    'clause' => '모바일 기기 특유의 악성 소프트웨어 인식 교육은 제공자의 정보보안 인식교육에 포함되어 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '모바일 기기에 대해 인식이 부족하고 적절한 기술적,관리적 지침이나 절차가 없어 비 인가된 소프트웨어를 설치 및 실행 등으로 인해 정보유출, 시스템 장애 등이 일어날 위험',
                    'protection_plan' => '모바일 관련 교육을 기존교육에 포함하거나 별도의 교육을 진행하여야 함',
                    'threatcode' => 'TC1-09',
                ),
            124 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '모바일 보안',
                    'depth' => '13.2',
                    'clause' => '승인된 응용 프로그램 저장소의 문서화된 목록은 공급자 관리 데이터에 액세스하거나 저장하는 모바일 장치에 허용 가능한 것으로 정의되어 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '모바일 기기에 대해 인식이 부족하고 적절한 기술적,관리적 지침이나 절차가 없어 비 인가된 소프트웨어를 설치 및 실행 등으로 인해 정보유출, 시스템 장애 등이 일어날 위험',
                    'protection_plan' => '승인된 응용 프로그램 저장소의 문서목록을 관리 하여야 함',
                    'threatcode' => 'TC1-04',
                ),
            125 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '모바일 보안',
                    'depth' => '13.3',
                    'clause' => '회사는 사전 식별된 애플리케이션 스토어를 통해 획득되지 않은 승인되지 않은 애플리케이션 또는 승인되지 않은 애플리케이션의 설치를 금지하는 문서화된 정책을 보유하고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '모바일 기기에 대해 인식이 부족하고 적절한 기술적,관리적 지침이나 절차가 없어 비 인가된 소프트웨어를 설치 및 실행 등으로 인해 정보유출, 시스템 장애 등이 일어날 위험',
                    'protection_plan' => '승인된 응용 프로그램 저장소의 문서목록을 관리 하여야 함',
                    'threatcode' => 'TC1-04',
                ),
            126 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '모바일 보안',
                    'depth' => '13.4',
                    'clause' => 'BYOD 정책과 지원 인식 교육은 BYOD 사용에 사용될 수 있는 승인된 애플리케이션, 애플리케이션 저장소 및 애플리케이션 확장 및 플러그인을 명확하게 기술되어 있습니까?

[용어 설명]
※ BYOD(Bring Your Own Device): 개인 소유의 노트북이나 스마트폰 같은 정보 단말기를 업무에 활용하는 것을 뜻하는 용어
- 스마트패드나 스마트폰들은 PC못지 않은 성능에다 화면까지 커서, 문서 등을 저장해 놓거나 회사시스템에 접속해 빠르고 편리하게 업무정보를 확인할 수 있게 되었습니다. 이처럼 개인용 기기를 이용해 업무시스템에 접속하거나 중요문서를 열람하는 일이 많아지고 있는데, BYOD가 보안에 있어서 중요한 이유는 개인단말기의 보안수준이 조직에서 요구되는 업무용 보안수준에 미치지 못할 수 있기 때문입니다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '모바일 기기에 대해 인식이 부족하고 적절한 기술적,관리적 지침이나 절차가 없어 비 인가된 소프트웨어를 설치 및 실행 등으로 인해 정보유출, 시스템 장애 등이 일어날 위험',
                    'protection_plan' => 'BYOD 관련 정책을 수립하고 관련 인식교육을 주기적으로 진행하여야 함',
                    'threatcode' => 'TC1-10',
                ),
            127 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '모바일 보안',
                    'depth' => '13.5',
                    'clause' => '제공자는 모바일 장치에 대한 문서화된 정의와 모든 모바일 장치에 대한 허용 가능한 사용 및 요구사항을 포함하는 문서화된 모바일 장치 정책을 가져야 한다. 사업자는 회사의 보안 의식 및 교육 프로그램을 통해 방침 및 요구사항을 게시하고 전달하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '모바일 기기에 대해 인식이 부족하고 적절한 기술적,관리적 지침이나 절차가 없어 비 인가된 소프트웨어를 설치 및 실행 등으로 인해 정보유출, 시스템 장애 등이 일어날 위험',
                    'protection_plan' => 'BYOD 관련 정책을 수립하여야 함',
                    'threatcode' => 'TC1-10',
                ),
            128 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '모바일 보안',
                    'depth' => '13.6',
                    'clause' => '회사의 모바일 기기나 BYOD(Bring Your Own Device)가 사용하는 모든 클라우드 기반 서비스는 회사 업무 데이터의 사용 및 저장을 위해 사전 승인을 받고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '모바일 기기에 대해 인식이 부족하고 적절한 기술적,관리적 지침이나 절차가 없어 비 인가된 소프트웨어를 설치 및 실행 등으로 인해 정보유출, 시스템 장애 등이 일어날 위험',
                    'protection_plan' => 'BYOD 관련 정책을 수립하여야 함',
                    'threatcode' => 'TC1-10',
                ),
            129 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '모바일 보안',
                    'depth' => '13.7',
                    'clause' => '회사는 모바일 기기, 운영 체제 및 애플리케이션 호환성 문제를 테스트하기 위한 문서화된 애플리케이션 검증 프로세스를 보유하고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '모바일 기기에 대해 인식이 부족하고 적절한 기술적,관리적 지침이나 절차가 없어 비 인가된 소프트웨어를 설치 및 실행 등으로 인해 정보유출, 시스템 장애 등이 일어날 위험',
                    'protection_plan' => '애플리케이션 검증 프로세스를 문서화 하여 이에 따라 운영하여야 함',
                    'threatcode' => 'TC1-04',
                ),
            130 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '모바일 보안',
                    'depth' => '13.8',
                    'clause' => 'BYOD(Bring Your Own Device) 정책은 BYOD 사용을 허용하기 위한 장치 및 자격 요건을 정의하고 있습니까?

[용어 설명]
※ BYOD(Bring Your Own Device): 개인 소유의 노트북이나 스마트폰 같은 정보 단말기를 업무에 활용하는 것을 뜻하는 용어
- 스마트패드나 스마트폰들은 PC못지 않은 성능에다 화면까지 커서, 문서 등을 저장해 놓거나 회사시스템에 접속해 빠르고 편리하게 업무정보를 확인할 수 있게 되었습니다. 이처럼 개인용 기기를 이용해 업무시스템에 접속하거나 중요문서를 열람하는 일이 많아지고 있는데, BYOD가 보안에 있어서 중요한 이유는 개인단말기의 보안수준이 조직에서 요구되는 업무용 보안수준에 미치지 못할 수 있기 때문입니다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '모바일 기기에 대해 인식이 부족하고 적절한 기술적,관리적 지침이나 절차가 없어 비 인가된 소프트웨어를 설치 및 실행 등으로 인해 정보유출, 시스템 장애 등이 일어날 위험',
                    'protection_plan' => '애플리케이션 검증 프로세스를 문서화 하여 이에 따라 운영하여야 함',
                    'threatcode' => 'TC1-11',
                ),
            131 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '모바일 보안',
                    'depth' => '13.9',
                    'clause' => '회사 데이터를 저장하고 액세스하는 데 사용되는 모든 모바일 장치의 목록을 보관하고 유지이행하고 있습니까? 이러한 장치의 상태(즉, 운영 체제 및 패치 수준, 분실 또는 폐기 상태, 그리고 장치를 할당 또는 승인(BYOD)하는 상태)에 대한 모든 변경사항은 인벤토리의 각 장치에 대해 포함되어 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '모바일 기기에 대해 인식이 부족하고 적절한 기술적,관리적 지침이나 절차가 없어 비 인가된 소프트웨어를 설치 및 실행 등으로 인해 정보유출, 시스템 장애 등이 일어날 위험',
                    'protection_plan' => '회사에서 지급하는 모바일기기를  자산목록에 포함하여 관리하여야 함',
                    'threatcode' => 'TC1-12',
                ),
            132 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '모바일 보안',
                    'depth' => '13.10',
                    'clause' => '고객 데이터를 저장, 전송 또는 처리할 수 있는 모든 모바일 장치에 중앙 집중식 모바일 장치 관리 솔루션을 구축되어 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '모바일 기기에 대해 인식이 부족하고 적절한 기술적,관리적 지침이나 절차가 없어 비 인가된 소프트웨어를 설치 및 실행 등으로 인해 정보유출, 시스템 장애 등이 일어날 위험',
                    'protection_plan' => '중앙 집중식 모바일 장치 관리 솔루션 도입에 대한 검토 후 결정',
                    'threatcode' => 'TC1-04',
                ),
            133 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '모바일 보안',
                    'depth' => '13.11',
                    'clause' => '모바일 기기 정책은 전체 기기 또는 모든 모바일 기기에서 민감한 것으로 확인된 데이터에 대해 암호화를 사용해야 하며, 기술 제어를 통해 시행하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '모바일 기기에 대해 인식이 부족하고 적절한 기술적,관리적 지침이나 절차가 없어 비 인가된 소프트웨어를 설치 및 실행 등으로 인해 정보유출, 시스템 장애 등이 일어날 위험',
                    'protection_plan' => '모바일 기기내 민감 데이터에 대한 암호화를 적용하여야 함',
                    'threatcode' => 'TC4-09',
                ),
            134 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '모바일 보안',
                    'depth' => '13.12',
                    'clause' => '모바일 장치 정책은 모바일 장치에 내장된 보안 제어 장치(예: 탈옥 또는 로팅)의 방해를 금지해야 하며, 장치에 대한 탐정 및 예방 제어 또는 중앙 집중식 장치 관리 시스템(예: 모바일 장치 관리)을 통해 금지 조치를 시행하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 13.12 위험내용',
                    'protection_plan' => 'CSA STAR 13.12 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            135 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '모바일 보안',
                    'depth' => '13.13',
                    'clause' => 'BYOD 정책은 사생활의 기대, 소송에 대한 요구사항, e-discovery 및 법적 보유를 위한 언어를 명확히 하는 것을 포함하고 있습니까? 

BYOD 정책은 기기 삭제가 필요한 경우 비회사 데이터의 손실에 대한 기대를 명확하게 기술(명시)(하고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '모바일 기기에 대해 인식이 부족하고 적절한 기술적,관리적 지침이나 절차가 없어 비 인가된 소프트웨어를 설치 및 실행 등으로 인해 정보유출, 시스템 장애 등이 일어날 위험',
                    'protection_plan' => '법적 사항을 포함한 BYOD 정책을 수립하고 이에 따라 운영하여야 함',
                    'threatcode' => 'TC1-10',
                ),
            136 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '모바일 보안',
                    'depth' => '13.14',
                    'clause' => 'BYOD 및/또는 회사 소유 기기는 자동 잠금 화면이 필요하도록 구성되며, 이 요건은 기술 제어를 통해 시행되고 있습니까?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => '모바일 기기에 대해 인식이 부족하고 적절한 기술적,관리적 지침이나 절차가 없어 비 인가된 소프트웨어를 설치 및 실행 등으로 인해 정보유출, 시스템 장애 등이 일어날 위험',
                    'protection_plan' => 'BYOD 기능을 수행할 수 있는 솔루션에 대한 검토 후 결정',
                    'threatcode' => 'TC6-12',
                ),
            137 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '모바일 보안',
                    'depth' => '13.15',
                    'clause' => '모바일 기기 운영 체제, 패치 수준 및/또는 애플리케이션의 변경은 회사의 변경 관리 프로세스를 통해 관리하고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '모바일 기기에 대해 인식이 부족하고 적절한 기술적,관리적 지침이나 절차가 없어 비 인가된 소프트웨어를 설치 및 실행 등으로 인해 정보유출, 시스템 장애 등이 일어날 위험',
                    'protection_plan' => '모바일 기기 관련 변경 프로세스를 별도로 관리하여야 함',
                    'threatcode' => 'TC1-11',
                ),
            138 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '모바일 보안',
                    'depth' => '13.16',
                    'clause' => '모바일 장치에 적용되는 암호 정책은 BYOD 사용을 위해 승인된 모든 회사 기기 또는 장치에 대한 기술 제어를 통해 문서화 및 시행되어야 하며, 암호/PIN 길이 및 인증 요구사항의 변경을 금지하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '모바일 기기에 대해 인식이 부족하고 적절한 기술적,관리적 지침이나 절차가 없어 비 인가된 소프트웨어를 설치 및 실행 등으로 인해 정보유출, 시스템 장애 등이 일어날 위험',
                    'protection_plan' => '모바일 기기 관련 암호정책을 수립하고 이에 따라 관리하여야 함',
                    'threatcode' => 'TC1-10',
                ),
            139 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '모바일 보안',
                    'depth' => '13.17',
                    'clause' => '모바일 기기 정책은 BYOD 사용자가 데이터 백업을 수행하고, 승인되지 않은 애플리케이션 스토어의 사용을 금지하며, 악성 소프트웨어 방지(지원되는 경우)를 사용하도록 요구하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 13.17 위험내용',
                    'protection_plan' => 'CSA STAR 13.17 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            140 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '모바일 보안',
                    'depth' => '13.18',
                    'clause' => '회사 BYOD 프로그램을 통해 사용이 허용된 모든 모바일 기기는 회사의 기업 IT에 의한 원격 삭제를 허용하거나 회사의 기업 IT에 의해 회사가 제공한 모든 데이터를 삭제하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '모바일 기기에 대해 인식이 부족하고 적절한 기술적,관리적 지침이나 절차가 없어 비 인가된 소프트웨어를 설치 및 실행 등으로 인해 정보유출, 시스템 장애 등이 일어날 위험',
                    'protection_plan' => '모바일 기기의 원격삭제에 대한 지침 수립 및 이에 따른 관리가 필요함',
                    'threatcode' => 'TC1-10',
                ),
            141 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '모바일 보안',
                    'depth' => '13.19',
                    'clause' => '회사 네트워크에 연결하거나 회사 정보를 저장 및 액세스하는 모바일 기기는 원격 소프트웨어 버전/패치 검증을 허용이행하고 있습니까? 모든 모바일 기기는 기기 제조업체 또는 통신사가 일반 출시할 때 최신 보안 관련 패치를 설치해야 하며, 공인 IT 직원은 이러한 업데이트를 원격으로 수행하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '모바일 기기에 대해 인식이 부족하고 적절한 기술적,관리적 지침이나 절차가 없어 비 인가된 소프트웨어를 설치 및 실행 등으로 인해 정보유출, 시스템 장애 등이 일어날 위험',
                    'protection_plan' => '모바일 보안패치에 대한 지침 수립 및 이에 따른 관리가 필요함',
                    'threatcode' => 'TC1-10',
                ),
            142 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '모바일 보안',
                    'depth' => '13.20',
                    'clause' => 'BYOD 정책은 BYOD 지원 기기의 사용이나 액세스가 허용된 시스템과 서버를 명확히 이행하고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '모바일 기기에 대해 인식이 부족하고 적절한 기술적,관리적 지침이나 절차가 없어 비 인가된 소프트웨어를 설치 및 실행 등으로 인해 정보유출, 시스템 장애 등이 일어날 위험',
                    'protection_plan' => 'BYOD 지원에대한 지침 수립 및 이에 따른 관리가 필요함',
                    'threatcode' => 'TC1-10',
                ),
            143 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '보안 사고 관리, 디스커버리(E-Discovery) & 클라우드 포렌식',
                    'depth' => '14.1',
                    'clause' => '해당 규제 당국, 국가 및 지방 법 집행 기관 및 기타 법적 관할 당국의 연락 지점은 유지되고 정기적으로 업데이트되어야 하며(예: 영향 받은 범위의 변경 및/또는 준수 의무의 변경) 규정 준수 연락 사무소가 설립되었는지 확인하고 다음에서 법 집행에 신속히 관여해야 하는 포렌식 조사를 준비하고 있습니까?

※ 디지털 포렌식
- 디지털 증거물을 분석하여 수사에 활용하는 과학수사 기법의 총칭. 마치 부검하듯이 디지털 기록매체에 복원 프로그램을 사용하고, 암호 등 보안을 해제하고, 메타데이터[1]까지 활용하거나 하드디스크 내부에 삭제로그를 저장하는 스왑파일(스왑폴더라고 하기도 한다)에서 삭제로그를 복원해 디지털 기기의 사용자나 이를 통해 오간 정보를 추적, 조사한다. 원본의 손상을 봉쇄하기 위해 이미지를 뜨는 것이 일반적이라고 한다.',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'CSA STAR 14.1 위험내용',
                    'protection_plan' => 'CSA STAR 14.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            144 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '보안 사고 관리, 디스커버리(E-Discovery) & 클라우드 포렌식',
                    'depth' => '14.2',
                    'clause' => '확립된 IT 서비스 관리 정책 및 절차에 따라 보안 관련 이벤트를 분류하고, 적시에 철저한 사고 관리를 보장하기 위해 정책 및 절차를 수립하고, 사업 프로세스와 기술적 조치를 지원하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 14.2 위험내용',
                    'protection_plan' => 'CSA STAR 14.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            145 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '보안 사고 관리, 디스커버리(E-Discovery) & 클라우드 포렌식',
                    'depth' => '14.3',
                    'clause' => '작업자 및 외부업무 관계는 그 책임을 통고하고, 필요한 경우 모든 정보보안 사건을 적시에 보고하는 데 동의하거나 계약적으로 합의하여야 한다. 정보 보안 이벤트는 사전 정의된 통신 채널을 통해 해당 법적, 법적 또는 규제 준수 의무를 준수하는 적시에 보고하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 14.3 위험내용',
                    'protection_plan' => 'CSA STAR 14.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            146 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '보안 사고 관리, 디스커버리(E-Discovery) & 클라우드 포렌식',
                    'depth' => '14.4',
                    'clause' => '정보 보안 사건 이후 관련 사법권의 대상이 되는 잠재적 법적 조치를 뒷받침하는 증거 제시를 위해서는 구속 체인을 포함한 적절한 포렌식(디지털 포렌식) 절차가 마련되어 있습니까?

고객 및/또는 보안 위반의 영향을 받는 기타 외부 비즈니스 파트너에게 포렌식 조사에 법적으로 허용되는 대로 기회가 주어 지도록 체계가 마련되어 있습니까?

[용어 설명]
※ 디지털 포렌식
- 디지털 증거물을 분석하여 수사에 활용하는 과학수사 기법의 총칭. 마치 부검하듯이 디지털 기록매체에 복원 프로그램을 사용하고, 암호 등 보안을 해제하고, 메타데이터[1]까지 활용하거나 하드디스크 내부에 삭제로그를 저장하는 스왑파일(스왑폴더라고 하기도 한다)에서 삭제로그를 복원해 디지털 기기의 사용자나 이를 통해 오간 정보를 추적, 조사한다. 원본의 손상을 봉쇄하기 위해 이미지를 뜨는 것이 일반적이라고 한다.

해킹과 디지털 포렌식은 언뜻보면 비슷해보이지만 해킹은 피해자의 정보를 악이용하는 것이고[2] 디지털 포렌식은 해킹을 한, 또는 시도한 사람들의 로그를 역추적해 잡는걸 말한다.

형사소송법 개정안으로 인하여 디지털 기기의 증거 능력이 확대 되었다.[',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'CSA STAR 14.4 위험내용',
                    'protection_plan' => 'CSA STAR 14.4 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            147 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '보안 사고 관리, 디스커버리(E-Discovery) & 클라우드 포렌식',
                    'depth' => '14.5',
                    'clause' => '정보보안 사고의 유형, 부피, 비용 등을 감시·정량화하기 위한 메커니즘을 정비이행하고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'CSA STAR 14.5 위험내용',
                    'protection_plan' => 'CSA STAR 14.5 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            148 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '공급자 관계 관리, 투명성 및 책임추적성',
                    'depth' => '15.1',
                    'clause' => '공급자는 데이터 품질 오류 및 관련 위험을 수정하기 위해 클라우드 공급망 파트너를 검사, 설명 및 협력하고 있습니까?

공급자는 자신의 공급망 내의 모든 인력에 대한 적절한 직무 분리, 역할 기반 액세스 및 최소한의 개인 정보 액세스를 통해 데이터 보안 위험을 완화하고 억제하기 위한 제어장치를 설계하고 구현하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '클라우드 서비스 공급자를 공급 업체 관계에 대한 정보보안 정책의 유형으로 포함하지 않아 정보보안 역할 및 책임이 누락될 위험',
                    'protection_plan' => '조직에 영향을 주는 내외부의 이해관계자들을 주기적으로 식별 및 요구사항을 반영하고 평가를 진행하여야 함',
                    'threatcode' => 'TC1-04',
                ),
            149 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '공급자 관계 관리, 투명성 및 책임추적성',
                    'depth' => '15.2',
                    'clause' => '제공자는 영향을 받는 모든 고객과 제공자가 전자적 방법(예: 포털)을 통해 정기적으로 보안 사고 정보를 이용할 수 있도록 이행하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 15.2 위험내용',
                    'protection_plan' => 'CSA STAR 15.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            150 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '공급자 관계 관리, 투명성 및 책임추적성',
                    'depth' => '15.3',
                    'clause' => '중요 업무 또는 고객(테넌트) 애플리케이션 및 시스템 인터페이스(API) 설계 및 구성, 인프라 네트워크 및 시스템 구성요소는 상호 합의한 서비스 및 용량 수준 기대치뿐 아니라 IT 거버넌스 및 서비스 관리 정책(ITIL(Information Technology Infrastructure Library) v4(2019년 2월 18일 배포)기반, ISO 20000-1:2018) 에 따라 설계, 개발 및 구축되어 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 15.3 위험내용',
                    'protection_plan' => 'CSA STAR 15.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            151 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '공급자 관계 관리, 투명성 및 책임추적성',
                    'depth' => '15.4',
                    'clause' => '제공자는 정책, 절차, 지원 방법 및 측정 기준에 대한 적합성 및 효과 성의 연간 내부 평가를 수행하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 15.4 위험내용',
                    'protection_plan' => 'CSA STAR 15.4 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            152 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '공급자 관계 관리, 투명성 및 책임추적성',
                    'depth' => '15.5',
                    'clause' => '제공자와 고객 (세입자) 간의 공급망 계약 (예 : SLA)에는 적어도 다음과 같이 상호 합의한 조항 및 / 또는 조건이 포함되어 있습니까?

- 서비스 제공 및 지원, 공급자 및 고객 (임차인)의 역할 및 책임에 대한 비즈니스 관계 및 서비스 범위 (예 : 고객 (임차인) 데이터 수집, 교환 및 사용, 기능 세트 및 기능, 인력 및 인프라 네트워크 및 시스템 구성 요소) 하도급 또는 외주 구매 비즈니스 관계, 호스팅 서비스의 물리적 지리적 위치 및 알려진 규정 준수 고려 사항)
- 비즈니스 관계가 지속되는 동안 정보 보안 요구 사항, 공급 업체 및 고객 (임차인) 주요 연락 담당자, 효과적인 거버넌스, 위험 관리, 보증 및 법률, 법정 및 법규를 가능하게하기 위해 구현 된 상세한 지원 및 관련 비즈니스 프로세스 및 기술 조치에 대한 언급 영향을받는 모든 비즈니스 관계로 인한 규정 준수 의무
- 고객 (임차인)의 영향을받는 공급자가 관리하는 변경 사항에 대한 통지 및 / 또는 사전 승인
- 모든 고객 (세입자) 및 영향을받는 기타 비즈니스 관계 (즉, 업스트림 및 다운 스트림에 영향을주는 공급망)에 대한 보안 사고 (또는 확인 된 위반)
- 평가 대상 조직에 대한 노출의 허용 할 수없는 비즈니스 위험을 초래하지 않으면 서 계약 조항 및 / 또는 조건 (예 : 업계에서 인정하는 인증, 입증 감사 보고서 또는 이와 동등한 보증 형식)을 준수하는지 평가하고 독립적으로 검증이행하고 있습니까?
- 비즈니스 관계 만료 및 고객 (임차인) 데이터 처리 영향
- 애플리케이션 개발 및 정보 교환, 사용 및 무결성 지속을위한 고객 (거주자) 서비스 - 서비스 애플리케이션 (API) 및 데이터 상호 운용성 및 이식성 요구 사항',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '클라우드 서비스 공급자를 공급 업체 관계에 대한 정보보안 정책의 유형으로 포함하지 않아 정보보안 역할 및 책임이 누락될 위험',
                    'protection_plan' => '계약서에 정보보호에 대한 내용을 구체적으로 포함하여 적용하여야 함',
                    'threatcode' => 'TC1-04',
                ),
            153 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '공급자 관계 관리, 투명성 및 책임추적성',
                    'depth' => '15.6',
                    'clause' => '제공자는 해당 파트너의 위험 관리 및 거버넌스 프로세스를 검토하여 해당 파트너의 클라우드 공급망의 다른 구성원으로부터 상속 된 위험을 설명하기위한 관행이 일관되고 일치되도록 되어 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'CSA STAR 15.6 위험내용',
                    'protection_plan' => 'CSA STAR 15.6 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            154 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '공급자 관계 관리, 투명성 및 책임추적성',
                    'depth' => '15.7',
                    'clause' => '관련 공급망(업스트림/도)에서 공급자와 고객(테넌트) 간의 서비스 계약(예: SLA)을 일관성 있게 검토하기 위한 정책 및 절차를 구현하고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '클라우드 서비스 공급자를 공급 업체 관계에 대한 정보보안 정책의 유형으로 포함하지 않아 정보보안 역할 및 책임이 누락될 위험',
                    'protection_plan' => '조직에 영향을 주는 내외부의 이해관계자들을 주기적으로 식별 및 요구사항을 반영하고 평가를 진행하여야 함',
                    'threatcode' => 'TC1-04',
                ),
            155 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '공급자 관계 관리, 투명성 및 책임추적성',
                    'depth' => '15.8',
                    'clause' => '제공자는 매년 검토를 실시하여 정보 공급망 전반에 걸쳐 합리적인 정보보안을 보장이행하고 있습니까? 검토에는 정보 공급 체인이 의존하는 모든 파트너/제3자 제공자가 포함되어 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '클라우드 서비스 공급자를 공급 업체 관계에 대한 정보보안 정책의 유형으로 포함하지 않아 정보보안 역할 및 책임이 누락될 위험',
                    'protection_plan' => '조직에 영향을 주는 내외부의 이해관계자들을 주기적으로 식별 및 요구사항을 반영하고 평가를 진행하여야 함',
                    'threatcode' => 'TC1-04',
                ),
            156 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '공급자 관계 관리, 투명성 및 책임추적성',
                    'depth' => '15.9',
                    'clause' => '제3자 서비스 제공자는 제3자 계약에 포함된 정보 보안 및 기밀성, 접근 제어, 서비스 정의 및 제공 수준 계약 준수를 증명이행하고 있습니까? 제3자 보고서, 기록 및 서비스는 서비스 제공 계약 준수를 관리하고 유지하기 위해 최소한 일 년에 한 번은 감사 및 검토하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 15.9 위험내용',
                    'protection_plan' => 'CSA STAR 15.9 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            157 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '위협 및 취약점 관리',
                    'depth' => '16.1',
                    'clause' => '조직 소유 또는 관리되는 사용자 엔드포인트 장치(즉, 발급된 워크스테이션, 노트북, 모바일 기기)와 IT 인프라 네트워크 및 시스템 구성요소에 대한 악성 프로그램의 실행을 방지하기 위한 정책 및 절차를 수립하고, 이를 지원하는 비즈니스 프로세스와 기술 대책을 수립되어 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 16.1 위험내용',
                    'protection_plan' => 'CSA STAR 16.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            158 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '위협 및 취약점 관리',
                    'depth' => '16.2',
                    'clause' => '조직 소유 또는 관리되는 애플리케이션, 인프라 네트워크 및 시스템 구성요소(예: 네트워크 취약성 평가, 침투 테스트) 내의 취약성을 적시에 감지할 수 있도록 정책과 절차를 수립하고, 이를 지원하는 프로세스 및 기술 조치를 구현되어 있습니까?

절제력 조절 확인된 취약성의 교정조치의 우선순위를 정하는 위험 기반 모델을 사용이행하고 있습니까? 공급업체에서 제공하는 모든 패치, 구성 변경 또는 조직의 내부에서 개발된 소프트웨어의 변경에 대한 변경 관리 프로세스를 통해 변경 사항을 관리하고 있습니까? 

요청 시, 제공자는 고객(테넌트)에게 정책과 절차를 알리고 특히 고객(테넌트) 데이터를 서비스의 일부로 사용하는 경우 약점을 식별하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 16.2 위험내용',
                    'protection_plan' => 'CSA STAR 16.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            159 =>
                array (
                    'type' => 'CSA_STAR',
                    'domain' => '위협 및 취약점 관리',
                    'depth' => '16.3',
                    'clause' => '신뢰할 수 있거나 신뢰할 수 없는 네트워크를 통해 시스템 간에 전송되고 수신자가 명시적으로 설치 또는 실행하지 않고 로컬 시스템에서 실행되는 소프트웨어로 정의되는 무단 모바일 코드의 실행을 방지하기 위한 정책 및 절차를 수립하였고, 이를 지원하는 비즈니스 프로세스 및 기술 조치를 구현하고 있습니까?

(예 : 발급 된 워크 스테이션, 랩톱 및 모바일 장치) 및 IT 인프라 네트워크 및 시스템 구성 요소에 대한 정보를 제공해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'CSA STAR 16.3 위험내용',
                    'protection_plan' => 'CSA STAR 16.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            160 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '개인의료정보 라이프 사이클',
                    'depth' => '1.1.1',
                    'clause' => 'HIPAA에서 허용하는 경우나, 정보주체 또는 대리인이 서면으로 허용한 경우에만 개인 의료정보(PHI)를 처리하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 1.1.1 위험내용',
                    'protection_plan' => 'HIPPA 1.1.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            161 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '개인의료정보 라이프 사이클',
                    'depth' => '1.1.2',
                    'clause' => '환자나 환자의 대리인이 PHI 공개를 요구하는 경우나 미 보건복지부가 법률 준수 실태 조사 또는 집행 시에만 환자정보를 제공하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 1.1.2 위험내용',
                    'protection_plan' => 'HIPPA 1.1.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            162 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '개인의료정보 라이프 사이클',
                    'depth' => '1.1.3',
                    'clause' => '외부자의 개인의료정보(PHI) 제공 요청에 따른 정보 제공 전 요청한 사람의 신원과 권한을 확인하고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'HIPPA 1.1.3 위험내용',
                    'protection_plan' => 'HIPPA 1.1.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            163 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '개인의료정보 라이프 사이클',
                    'depth' => '1.1.4',
                    'clause' => '환자가본인의 의료정보 공개기록을 요청할 시 HIPAA에서 규정하고 있는 제공불가사항을 제외하고 요청일로부터 최근 6년간의 공개내역을 제공하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 1.1.4 위험내용',
                    'protection_plan' => 'HIPPA 1.1.4 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            164 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '개인의료정보 라이프 사이클',
                    'depth' => '1.1.5',
                    'clause' => '생물테러 위협 및 기타 공중 보건 응급상황 시 담당 공무원에게 환자의 동의없이 개인의료정보(PHI)를 제공할 수 있는 절차를 마련하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 1.1.5 위험내용',
                    'protection_plan' => 'HIPPA 1.1.5 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            165 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '개인의료정보 라이프 사이클',
                    'depth' => '1.1.6',
                    'clause' => '개인의료정보(PHI)를 처리 혹은 공개 시 HIPAA에서 규정하고 있는 예외적이 상황을 제외하고 필요 최소한의 의료정보만을 처리 혹은 공개하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 1.1.6 위험내용',
                    'protection_plan' => 'HIPPA 1.1.6 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            166 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '개인의료정보 라이프 사이클',
                    'depth' => '1.1.7',
                    'clause' => '개인의료정보(PHI)에 대한 공개 혹은 공개요청을 받은 경우 공개에 대한 개인의 검토가 아닌 공개 또는 공개 요청에 대한 기관 내 자체기준을 마련하고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'HIPPA 1.1.7 위험내용',
                    'protection_plan' => 'HIPPA 1.1.7 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            167 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '개인의료정보 라이프 사이클',
                    'depth' => '1.1.8',
                    'clause' => '개인의료정보 파기 시 문서 파쇄, 연소, 데이터 덮어쓰기, 디가우징 등 복구 또는 재생할 수 없는 방법으로 파기하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 1.1.8 위험내용',
                    'protection_plan' => 'HIPPA 1.1.8 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            168 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '개인정보 관행통지',
                    'depth' => '1.2.1',
                    'clause' => '환자에게 기관의 개인정보 관행통지에 대하여 알리고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 1.2.1 위험내용',
                    'protection_plan' => 'HIPPA 1.2.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            169 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '개인정보 관행통지',
                    'depth' => '1.2.2',
                    'clause' => '개인정보 관행통지에 HIPAA에서 요구하는 사항들이 포함되어 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'HIPPA 1.2.2 위험내용',
                    'protection_plan' => 'HIPPA 1.2.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            170 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '개인정보 관행통지',
                    'depth' => '1.2.3',
                    'clause' => '개인정보 관행통지를 고지받은 환자로부터 서면 승인을 받고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'HIPPA 1.2.3 위험내용',
                    'protection_plan' => 'HIPPA 1.2.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            171 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '개인정보 관행통지',
                    'depth' => '1.2.4',
                    'clause' => '개인정보 관행통지 개정 시 개정된 날짜로 부터 60일 이내에 정보주체에게 통지하고 있습니까?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => 'HIPPA 1.2.4 위험내용',
                    'protection_plan' => 'HIPPA 1.2.4 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            172 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '개인정보 관행통지',
                    'depth' => '1.2.5',
                    'clause' => '응급상황 시 응급상황 종료 후 환자에게 즉시 개인정보 관행 통지사항을 알리고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 1.2.5 위험내용',
                    'protection_plan' => 'HIPPA 1.2.5 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            173 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '조직관리',
                    'depth' => '1.3.1',
                    'clause' => '개인정보보호 정책 및 절차 개발 및 구현책임이 있는 개인정보 책임자를 지정하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 1.3.1 위험내용',
                    'protection_plan' => 'HIPPA 1.3.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            174 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '조직관리',
                    'depth' => '1.3.2',
                    'clause' => '환자에게 개인정보보호 관행에 관한 정보를 제공하고 불만사항을 접수할 담당자 또는 연락 사무소를 지정하여 공개하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 1.3.2 위험내용',
                    'protection_plan' => 'HIPPA 1.3.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            175 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '조직관리',
                    'depth' => '1.3.3',
                    'clause' => '모든 인력 구성원을 대상으로 개인정보보호 정책 및 절차를 교육하고 교육 수행 계획 및 결과 등을 문서화하여 보관하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 1.3.3 위험내용',
                    'protection_plan' => 'HIPPA 1.3.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            176 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '조직관리',
                    'depth' => '1.3.4',
                    'clause' => '개인정보 관행 및 개인정보 처리절차를 위반하는 구성원을 상대로 적절한 징계절차를 구현하고 이를 문서화 하고 있습니까?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => 'HIPPA 1.3.4 위험내용',
                    'protection_plan' => 'HIPPA 1.3.4 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            177 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '기타',
                    'depth' => '1.4.1',
                    'clause' => '환자가 PHI 사본 요청 시 부과되는 수수료를 사전에 고지하고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'HIPPA 1.4.1 위험내용',
                    'protection_plan' => 'HIPPA 1.4.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            178 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '기타',
                    'depth' => '1.4.2',
                    'clause' => '사망한지 50년이 안된 사망자의 개인의료정보(PHI)를 HIPAA 규정에 따라 보호대책을 적용하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 1.4.2 위험내용',
                    'protection_plan' => 'HIPPA 1.4.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            179 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '기타',
                    'depth' => '1.4.3',
                    'clause' => '내부 구성원의 역할에 따라 개인의료정보(PHI)의 접근을 제한할 수 있는 접근통제정책을 개발하고 구현하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 1.4.3 위험내용',
                    'protection_plan' => 'HIPPA 1.4.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            180 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '기타',
                    'depth' => '1.4.4',
                    'clause' => '규정에 대한 위반사항이 발견되었을 경우 30일 이내에 수정할 수 있도록 하고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '규정에 대한 위반사항 수정지침이나 규정이 없어 , HIPPA 법률을 위반할 위험',
                    'protection_plan' => '사내 규정이나 지침에 위반사항 발생 시 30일 이내 수정한다는 문구 추가',
                    'threatcode' => 'TC8-01',
                ),
            181 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '개인의료정보(PHI)의 C.I.A',
                    'depth' => '2.1.1',
                    'clause' => '개인의료정보(PHI)가 허가되지 않은 사람에게 공개되거나 공개되지 않도록 하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 2.1.1 위험내용',
                    'protection_plan' => 'HIPPA 2.1.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            182 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '개인의료정보(PHI)의 C.I.A',
                    'depth' => '2.1.2',
                    'clause' => '개인의료정보(PHI)가 무단으로 변경되거나 파괴되지 않도록 하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 2.1.2 위험내용',
                    'protection_plan' => 'HIPPA 2.1.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            183 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '개인의료정보(PHI)의 C.I.A',
                    'depth' => '2.1.3',
                    'clause' => '개인의료정보(PHI)가 허가된 사람의 요청에 따라 접근을 허용하여 사용하도록 하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 2.1.3 위험내용',
                    'protection_plan' => 'HIPPA 2.1.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            184 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '개인의료정보(PHI)의 보안조치',
                    'depth' => '2.2.1',
                    'clause' => '개인의료정보(PHI) 보호를 위한 보안조치를 검토하고 수정하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 2.2.1 위험내용',
                    'protection_plan' => 'HIPPA 2.2.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            185 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '개인의료정보(PHI)의 보안조치',
                    'depth' => '2.2.2',
                    'clause' => '승인되지 않은 물리적 접근, 변조 및 도난으로부터 시설과 장비를 보호하기 위한 설비보안계획을 시행하고 있습니까??',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 2.2.2 위험내용',
                    'protection_plan' => 'HIPPA 2.2.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            186 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '개인의료정보(PHI)의 보안조치',
                    'depth' => '2.2.3',
                    'clause' => '개인의료정보(PHI) 시스템에 접근가능한 모든 워크 스테이션에 물리적 보호를 구현하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 2.2.3 위험내용',
                    'protection_plan' => 'HIPPA 2.2.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            187 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '개인의료정보(PHI)의 보안조치',
                    'depth' => '2.2.4',
                    'clause' => '개인의료정보(PHI)가 저장된 전자매체의 이동 및 전송, 제거, 폐기 및 재사용에 관한 정책 및 절차를 갖추고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 2.2.4 위험내용',
                    'protection_plan' => 'HIPPA 2.2.4 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            188 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '개인의료정보(PHI)의 보안조치',
                    'depth' => '2.2.5',
                    'clause' => '네트워크를 통하여 개인의료정보(PHI) 송·수신 시 무단 접근을 방지하는 기술보안조치를 구현하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 2.2.5 위험내용',
                    'protection_plan' => 'HIPPA 2.2.5 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            189 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '인력관리',
                    'depth' => '2.3.1',
                    'clause' => '보안정책과 절차를 개발하고 이행할 책임이 있는 보안담당자를 지정하고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'HIPPA 2.3.1 위험내용',
                    'protection_plan' => 'HIPPA 2.3.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            190 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '인력관리',
                    'depth' => '2.3.2',
                    'clause' => 'PHI를 이용하는 구성원의 적절한 승인 및 감독을 실시하고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'HIPPA 2.3.2 위험내용',
                    'protection_plan' => 'HIPPA 2.3.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            191 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '인력관리',
                    'depth' => '2.3.3',
                    'clause' => '보안 정책 및 절차와 관련하여 모든 인력구성원을 대상으로 교육하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 2.3.3 위험내용',
                    'protection_plan' => 'HIPPA 2.3.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            192 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '인력관리',
                    'depth' => '2.3.4',
                    'clause' => '보안규정을 위반하는 구성원을 상대로 적절한 징계절차를 구현하고 있습니까?',
                    'grade_asset' => 1,
                    
                    'explanation_risk' => 'HIPPA 2.3.4 위험내용',
                    'protection_plan' => 'HIPPA 2.3.4 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            193 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '시스템 관리',
                    'depth' => '2.4.1',
                    'clause' => '내부직원이 개인의료정보(PHI)에 접근가능한 계정 할당 시 계정이 공유되지 않도록 1인 1계정을 보유하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 2.4.1 위험내용',
                    'protection_plan' => 'HIPPA 2.4.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            194 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '시스템 관리',
                    'depth' => '2.4.2',
                    'clause' => '시스템 추적을 위하여 내부직원의 개인의료정보(PHI) 시스템 계정에 고유 이름 혹은 식별번호를 부여하였습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 2.4.2 위험내용',
                    'protection_plan' => 'HIPPA 2.4.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            195 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '시스템 관리',
                    'depth' => '2.4.3',
                    'clause' => '직원이 퇴직 등의 사유로 조직을 떠날때 개인의료기록(PHI) 시스템에 접근권한을 해지하는 절차를 구현하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 2.4.3 위험내용',
                    'protection_plan' => 'HIPPA 2.4.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            196 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '시스템 관리',
                    'depth' => '2.4.4',
                    'clause' => '세션타임아웃이 개인의료정보(PHI) 시스템에 적용되어 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '일부 시스템의 세션타임아웃 설정이 미흡하여 자리비움 시 비인가자가 악의적인 목적으로 시스템에 접근이 가능할 위험',
                    'protection_plan' => '서버나 프로그램 소스상에서 세션타임아웃 설정',
                    'threatcode' => 'TC6-17',
                ),
            197 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '시스템 관리',
                    'depth' => '2.4.5',
                    'clause' => '로그인 시도 및 비정상적인 로그인 시도를 모니터링하고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '악의적인 사용자의 지속적인 공격시도 위험
비정상적인 접근 시도에 대해 실시간으로 모니터링 하고 있지 않아, 비인가자가 악의적인 목적으로 시스템에 접근이 가능하거나 공격 행위를 부인할 위험',
                    'protection_plan' => '주기적인 로그 모니터링 실시
통합로그관제시스템 솔루션 사용',
                    'threatcode' => 'TC1-01',
                ),
            198 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '시스템 관리',
                    'depth' => '2.4.6',
                    'clause' => '암호를 생성, 변경, 관리하는 절차를 수립·운영하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 2.4.6 위험내용',
                    'protection_plan' => 'HIPPA 2.4.6 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            199 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '시스템 관리',
                    'depth' => '2.4.7',
                    'clause' => '시스템은 지속적인 가용성과 무결성을 보장하도록 정확하게 유지하였습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'HIPPA 2.4.7 위험내용',
                    'protection_plan' => 'HIPPA 2.4.7 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            200 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '암호화',
                    'depth' => '2.5.1',
                    'clause' => '개인의료정보(PHI)를 저장 및 전송 시 암호화 할 수 있는 절차를 마련하고 이를 적용하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 2.5.1 위험내용',
                    'protection_plan' => 'HIPPA 2.5.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            201 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '감사',
                    'depth' => '2.6.1',
                    'clause' => '정기적으로 하드웨어나 소프트웨어를 감사하거나, 시스템 활동을 기록하고 감사하는 절차를 마련하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 2.6.1 위험내용',
                    'protection_plan' => 'HIPPA 2.6.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            202 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '악성코드 예방',
                    'depth' => '2.7.1',
                    'clause' => '정기적으로 시스템을 보안업데이트 하고 있습니까?',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => 'HIPPA 2.7.1 위험내용',
                    'protection_plan' => 'HIPPA 2.7.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            203 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '악성코드 예방',
                    'depth' => '2.7.2',
                    'clause' => '악성 소프트웨어로 부터 개인의료정보(PHI) 시스템을 보호하고 악성코드 탐지 탐지 및 보고절차을 가지고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 2.7.2 위험내용',
                    'protection_plan' => 'HIPPA 2.7.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            204 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '업무 연속성 계획 및 보안사고 절차',
                    'depth' => '2.8.1',
                    'clause' => '재해발생 시 재해 복구 계획 및 비상 모드 운영 계획을 수립하여 손실된 데이터를 복원할 수 있는 절차를 수립하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 2.8.1 위험내용',
                    'protection_plan' => 'HIPPA 2.8.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            205 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '업무 연속성 계획 및 보안사고 절차',
                    'depth' => '2.8.2',
                    'clause' => '재해발생 등의 사유로 비정상적인 상황이 발생 시 비상 모드로 운영 시 개인의료정보(PHI)를 지속적으로 제공할 수 있는 절차가 존재합니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 2.8.2 위험내용',
                    'protection_plan' => 'HIPPA 2.8.2 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            206 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '업무 연속성 계획 및 보안사고 절차',
                    'depth' => '2.8.3',
                    'clause' => '보안사고를 식별하고 대응하는 절차를 보유하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 2.8.3 위험내용',
                    'protection_plan' => 'HIPPA 2.8.3 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            207 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '업무 연속성 계획 및 보안사고 절차',
                    'depth' => '2.8.4',
                    'clause' => '데이터 손실 시 이를 복구하는 절차를 수립·운영하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 2.8.4 위험내용',
                    'protection_plan' => 'HIPPA 2.8.4 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            208 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '업무 연속성 계획 및 보안사고 절차',
                    'depth' => '2.8.5',
                    'clause' => '해킹, 자연재해 등 비상사태에 따라 계획한 모의훈련을 실시하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 2.8.5 위험내용',
                    'protection_plan' => 'HIPPA 2.8.5 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            209 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '업무 연속성 계획 및 보안사고 절차',
                    'depth' => '2.8.6',
                    'clause' => '합의된 백업 정책에 따라 주기적으로 정보, 소프트웨어, 시스템 이미지에 대한 백업 복사본을 생성하고 시험하였습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '시스템에 문제가 생기거나 보안사고 발생 시 필요한 데이터를 사용하지 못할 위험',
                    'protection_plan' => '백업정책을 수립하고 주기적으로 복원테스트 시행',
                    'threatcode' => 'TC1-02',
                ),
            210 =>
                array (
                    'type' => 'HIPPA',
                    'domain' => '위험평가',
                    'depth' => '2.9.1',
                    'clause' => '개인의료정보(PHI)에 대한 위험평가를 실시하고 있습니까?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'HIPPA 2.9.1 위험내용',
                    'protection_plan' => 'HIPPA 2.9.1 보호대책',
                    'threatcode' => 'TC8-01',
                ),
            211 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)관리체계 기반 마련',
                    'depth' => '1.1.5.2',
                    'clause' => '가상자산 거래 서비스를 안전하게 제공/관리하기 위하여 취급업소의 주요 자산분류 및 작업에 대한 보안요구사항이 정책, 매뉴얼, 지침 등에 포함되어 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '가상자산 거래 서비스를 안전하게 제공/관리하기 위한 절차가 미흡하여, 가상자산 서비스 보안관리 소홀에 따른 사고가 발생 가능한 위험',
                    'protection_plan' => '가상자산 거래 서비스를 안전하게 제공/관리하기 위한 주요 작업에 대한 정책, 지침, 매뉴얼 등 수립',
                    'threatcode' => 'TC1-10',
                ),
            212 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)관리체계 기반 마련',
                    'depth' => '1.1.5.4',
                    'clause' => '핫/콜드월렛 관련 주요 작업 지침 및 절차는 비밀로 관리하고 업무상 열람이 필요한 인원으로 배포를 제한하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '가상자산 월렛 관련 주요 작업 지침 및 절차가 비밀로 관리되지 않아, 불필요한 인원에게 주요 절차, 보안 방안 등이 유출될 위험',
                    'protection_plan' => '가상자산 월렛 관련 주요 작업 지침 및 절차를 비인가된 인원이 접근 및 열람이 불가능하도록 기밀로 관리',
                    'threatcode' => 'TC1-14',
                ),
            213 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)관리체계 기반 마련',
                    'depth' => '1.1.6.2',
                    'clause' => '가상자산 거래 서비스의 안전성 확보 및 이용자 보호를 위해 정보기술(IT)부문과 정보보호에 필요한 예산과 인력을 지원하고 있는가?

* 권고
- 정보보호 예산을 정보기술(IT)부문 예산의 100분의 7이상으로 편성
- 정보기술(IT)부문 인력은 총 임직원 수의 100분의 5이상, 정보보호 인력은 정보기술(IT)부문 인력의 100분의 5이상 확보',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '가상자산 관련 서비스의 안전성 확보를 위한 자원 할당이 부족하여, 안전한 IT서비스 구현 및 보안 통제를 적용/수행하지 못할 위험',
                    'protection_plan' => '가상자산 관련 서비스의 안전성 확보 및 이용자 보호를 위한 정보기술(IT, 정보보호 부문에 필요한 예산 및 인력 지원 ',
                    'threatcode' => 'TC1-04',
                ),
            214 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)관리체계 기반 마련',
                    'depth' => '1.2.1.1',
                    'clause' => '가상자산과 관련한 자산을 식별하여 목록으로 관리하고, 최소한 필요한 인원에게만 제공하고 있는가?
- 주요자산 예시 : 개인키, 패스프레이즈, 월렛(핫, 콜드), 월렛금고, 중요 통제구역(월렛 작업공간) CCTV, 출입통제시스템, 월렛서버 및 관련 어플리케이션, 가상자산 노드서버, 가상 인프라(스토리지 포함), 콜드/핫 월렛용 단말기(노트북, PC), 자금세탁방지(AML) 관련 시스템 등',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '가상자산과 관련한 모든 정보자산에 대한 식별 및 분류가 미흡하여 정보자산의 관리 소홀에 따른 사고 발생 위험',
                    'protection_plan' => '정기적으로 정보자산 현황을 조사하고 정보자산 목록을 최신으로 유지하여 최소 필요 인원에게만 제공',
                    'threatcode' => 'TC1-02',
                ),
            215 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)위험 관리',
                    'depth' => '1.2.3.2',
                    'clause' => '위험평가 항목에서 경영진의 승인을 받은 항목에는 가상자산 취급업소에서 관리하는 가상자산의 콜드웰렛과 핫 월렛의 보유액 비율을 포함하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '가상자산의 콜드월렛 및 핫월렛 비율에 대한 위험평가를 수행하지 않아, 과다한 핫월렛 보관 등의 위험을 식별하지 못할 위험',
                    'protection_plan' => '가상자산의 콜드월렛 및 핫월렛 보관 비율을 위험평가 항목에 포함',
                    'threatcode' => 'TC1-04',
                ),
            216 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)위험 관리',
                    'depth' => '1.2.3.4',
                    'clause' => '가상자산 거래 서비스에서 발생할 수 있는 위험을 빠짐없이 식별ㆍ평가하고 있는가?
- 예. CEO 사망, 내부유출, 부정거래, 자연재해, 키 분실, 월렛서버 탈취 등',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '가상자산 거래 서비스에서 발생 가능한 위험의 식별이 누락되어 평가 및 관리하지 못할 위험',
                    'protection_plan' => '가상자산 거래 서비스에서 발생 가능한 위험을 빠짐없이 식별하여 위험평가 수행',
                    'threatcode' => 'TC1-04',
                ),
            217 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)위험 관리',
                    'depth' => '1.2.3.6',
                    'clause' => '가상자산의 특성상 가상자산 노드서버가 공인IP 사용, DMZ 구간에 위치해야 하는 등 운영상 제약이 있는 경우, 그에 따른 위험이 식별되어 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '가상자산 특성에 따른 노드서버의 공인IP 부여, DMZ 구간 위치 등의 위험이 식별되지 않아 적절한 보안통제가 수립되지 않을 위험',
                    'protection_plan' => '가상자산 특성에 따른 노드서버의 공인IP 부여, DMZ 구간 위치 등의 위험 평가 수행',
                    'threatcode' => 'TC1-04',
                ),
            218 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)위험 관리',
                    'depth' => '1.2.3.7',
                    'clause' => '위험식별 내용에는 가상자산별 블록체인에서 멀티시그를 제공하지 않는 경우가 포함되어 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '가상자산별 블록체인에서 멀티시그 제공에 대한 위험이 식별되지 않아 적절한 보안통제가 수립되지 않을 위험',
                    'protection_plan' => '가상자산별 블록체인 멀티시그 적용에 관한 위험평가 수행',
                    'threatcode' => 'TC1-04',
                ),
            219 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)위험 관리',
                    'depth' => '1.2.3.8',
                    'clause' => '콜드월렛과 핫월렛의 보유액 비율에 대한 적정성을 주기적으로 확인하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '콜드월렛과 핫월렛의 보유액 비율에 대한 적절성 검토가 주기적으로 이루어지지 않아, 사고 발생 시 다량의 가상자산 탈취 피해가 발생할 위험',
                    'protection_plan' => '콜드월렛과 핫월렛의 보유액 비율에 대한 적절성 검토를 주기적 수행',
                    'threatcode' => 'TC1-03',
                ),
            220 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)위험 관리',
                    'depth' => '1.2.3.9',
                    'clause' => '권한자 부재시(CEO 사망 또는 권한자 사고발생 시)를 대비해 예비 권한자를 설정하고, 그에 따른 권한을 부여하였는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '권한자 부재 시(사고 발생 시에 적절한 대응을 수행하지 못해 손해가 발생할 위험',
                    'protection_plan' => '권한자 부재시(사고발생 시를 대비하여 예비 권한자를 설정하고 권한 부여',
                    'threatcode' => 'TC1-03',
                ),
            221 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)위험 관리',
                    'depth' => '1.2.3.10',
                    'clause' => '내부 직원의 공모에 의한 사고가 발생하지 않도록 권한 분리 및 모니터링 등의 보호대책을 수립 및 이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '내부 직원의 공모에 의해 가상자산의 도난 및 비인가 사용이 가능한 위험',
                    'protection_plan' => '내부 직원의 공모에 의한 사고 발생 시 책임을 추적 가능하도록 제3자의 모니터링 절차 수립',
                    'threatcode' => 'TC1-03',
                ),
            222 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)위험 관리',
                    'depth' => '1.2.3.11',
                    'clause' => '부정거래(상장 시 업체의 사기 목적,직원의 상장일 유출 등)에 대한 검증을 하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '1. 업체의 사기 목적 : 사기를 목적으로 한 업체가 상장되어 유통 및 피해로 연결될 위험
2. 직원의 상장일 유출 : 상장정보 유출을 통해 부당 이득을 취할 위험',
                    'protection_plan' => '1. 업체의 사기 목적 : 상장 업체에 대한 외부 검증(감사을 수행하거나 내부 검증 강화
2. 직원의 상장일 유출 : 상장일에 대한 정보는 상장 공지 전까지 최소한의 권한자만 알 수 있도록 유지',
                    'threatcode' => 'TC1-04',
                ),
            223 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)위험 관리',
                    'depth' => '1.2.3.12',
                    'clause' => '분실, 파괴 등에 대비하여 월렛 개인키의 백업 및 복구정책을 수립 및 이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '월렛 개인키의 무결성 손상 시 백업 및 복구를 수행하지 못하여 해당 월렛 내 자산을 잃어버릴 위험',
                    'protection_plan' => '주요 월렛 개인키 백업 및 복구 절차 수립 및 이행',
                    'threatcode' => 'TC1-03',
                ),
            224 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)위험 관리',
                    'depth' => '1.2.3.13',
                    'clause' => '월렛서버 해킹에 대비한 보호대책을 마련하고 있는가?  ',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '월렛서버에 개인키가 존재하는 경우, 월렛 서버 해킹 시 개인키 유출을 통한 가상자산 탈취 위험',
                    'protection_plan' => '2개 이상의 개인키를 통해서만 전자지갑을 열수 있게 하는 멀티시그 지갑을 적용하거나 개인키를 암호화',
                    'threatcode' => 'TC1-03',
                ),
            225 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)위험 관리',
                    'depth' => '1.2.4.1',
                    'clause' => '가상자산별 블록체인에서 멀티시그를 제공하지 않는 경우, MFA(Multi Factor Authentication), 키분할, 자체 구축한 멀티시그 방식 등 이를 대체하기 위한 안전장치가 보호대책에 포함되어 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '가상자산별 블록체인에서 멀티시그, MFA, 키분할 등의 안전장치로 보호되지 않아 탈취 및 오출금이 발생할 위험',
                    'protection_plan' => '가상자산별 블록체인에 멀티시그, MFA, 키분할 등의 안전장치 마련',
                    'threatcode' => 'TC1-04',
                ),
            226 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)관리체계 점검 및 개선',
                    'depth' => '1.4.2.1',
                    'clause' => '경영진은 가상자산 거래 서비스 안전성 확보 및 이용자 보호를 위한 법적 요구사항에 대해 임직원의 준수여부를 연 1회 이상 정기적으로 검토하고 최고경영자에게 보고하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '법적 요구사항의 준수여부를 연 1회 이상 검토하지 않아, 법적 요구사항의 준수여부를 파악하지 못할 위험',
                    'protection_plan' => '가상자산과 관련된 법적요구사항을 준수 검토하여 최고경영자에게 보고',
                    'threatcode' => 'TC8-01',
                ),
            227 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)관리체계 점검 및 개선',
                    'depth' => '1.4.2.3',
                    'clause' => '정보보호최고책임자는 정보보안점검의 날을 지정하고, 정보보안 점검항목을 수립하여 매분기 준수여부 점검 및 그 결과를 최고경영자에게 보고하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보보안 점검을 주기적으로 수행하지 않아 정보보호 활동의 모니터링 및 검증 절차가 없는 위험',
                    'protection_plan' => '정보보안점검의 날을 지정하고, 정보보안 점검항목을 통한 준수여부를 확인하여 최고경영자에게 보고',
                    'threatcode' => 'TC1-01',
                ),
            228 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)정책, 조직, 자산 관리',
                    'depth' => '2.1.1.2',
                    'clause' => '조직의 대내외 환경에 중대한 변화(아래 참고) 발생 시 정보보호 및 개인정보보호 관련 정책 및 시행문서에 미치는 영향을 검토하고 필요 시 제ㆍ개정하고 있는가?

* 중대한 변화 예시  : 
- 가상자산의 핫 - 콜드 월렛 보유액 비율 변경
- 블록체인산업 관련 정책 변경 또는 가상자산 거래 관련 규제 신설',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '가상자산 관련 정책 및 시행문서에 대한 검토활동을 수행하지 않아, 필요 절차가 누락되거나 정보보호 환경 변화 사항을 반영하지 못할 위험',
                    'protection_plan' => '조직의 대내외 환경에 중대한 변화 발생 시 가상자산 관련 정책 및 시행문서에 미치는 영향도 검토 및 필요 시 제ㆍ개정',
                    'threatcode' => 'TC1-12',
                ),
            229 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)인적 보안',
                    'depth' => '2.2.1.1',
                    'clause' => '월렛 및 개인키, 거래원장에 접근가능한 직무에 대하여 정의하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '월렛 및 개인키, 거래원장에 접근 가능한 직무가 정의되지 않아, 주요 자산에 불필요한 인원의 통제가 어려운 위험',
                    'protection_plan' => '월렛 및 개인키, 거래원장에 접근가능한 직무 정의',
                    'threatcode' => 'TC1-02',
                ),
            230 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)인적 보안',
                    'depth' => '2.2.4.1',
                    'clause' => ' 정보보호 및 개인정보보호 교육의 시기, 기간, 대상, 내용, 방법 등의 내용이 포함된 연간 교육 계획을 수립하고 경영진의 승인을 받고 있는가?(다음 교육시간 준수)
- 임원 : 3시간 이상(단, 정보보호 최고책임자는 6시간 이상)
- 일반직원 : 6시간 이상
- 정보기술부문업무 담당 직원 : 9시간 이상
- 정보보호업무 담당 직원 : 12시간 이상',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '교육 계획 수립 미흡으로 인하여 체계적인 교육이 실시되지 않아 조직 전반의 정보보호 수준 저하 위험',
                    'protection_plan' => '아래와 같은 직무별 정보보호 교육 시간을 충족하는 정보보호 교육 계획 수립
- 임원 : 3시간 이상(단, 정보보호 최고책임자는 6시간 이상
- 일반직원 : 6시간 이상
- 정보기술부문업무 담당 직원 : 9시간 이상
- 정보보호업무 담당 직원 : 12시간 이상',
                    'threatcode' => 'TC1-09',
                ),
            231 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)인적 보안',
                    'depth' => '2.2.4.4',
                    'clause' => 'IT 및 정보보호, 개인정보보호, 월렛 조직내 임직원은 직무별 정보보호 전문성 제고를 위해 별도의 교육을 수행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'IT 및 정보보호, 개인정보보호, 월렛 조직 내 임직원의 직무별 정보보호 전문성 교육이 부재하여 각 담당자의 전문성 및 보안 의식이 떨어질 위험',
                    'protection_plan' => 'IT 및 정보보호, 개인정보보호, 월렛 조직내 임직원에 대하여 별도 직무별 정보보호 전문성 교육 수행',
                    'threatcode' => 'TC1-09',
                ),
            232 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)외부자 보안',
                    'depth' => '2.3.3.4',
                    'clause' => '제휴, 위탁을 통한 가상자산 거래 서비스, 개인정보처리시스템 개발 시 업무에 사용되는 장소 및 전산설비는 내부업무용과 분리 설치·운영하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '제휴 위탁을 통한 가상자산 거래 서비스의 개발 시 장소 또는 전산설비가 내부업무용과 분리되지 않아 중요정보가 노출될 위험',
                    'protection_plan' => '제휴, 위탁을 통한 가상자산 거래 서비스, 개인정보처리시스템 개발 시 업무공간 및 전산설비는 내부 업무용과 분리',
                    'threatcode' => 'TC4-07',
                ),
            233 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)물리 보안',
                    'depth' => '2.4.1.1',
                    'clause' => '콜드-핫 월렛 관련 보관, 금고, 월렛 사용을 위한 공간 등 중요 통제구역을 일반 업무/보호구역과 별도로 분리하고, 통제구역으로 지정 및 관리하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '월렛을 보관 및 사용하기 위한 공간 등 중요 통제구역이 일반 구역과 분리되지 않아 비인가된 물리적 접근이 가능한 위험',
                    'protection_plan' => '월렛을 보관 및 사용하기 위한 공간 등을 일반 업무 구역과 분리하고 통제구역으로 지정 및 관리',
                    'threatcode' => 'TC6-17',
                ),
            234 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)물리 보안',
                    'depth' => '2.4.1.2',
                    'clause' => '월렛룸 CCTV 및 월렛룸 출입통제장치, 금고관리대장 등 월렛룸에 대한 보호대책을 마련하였는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '월렛이 보관된 보호구역에 출입통제 및 출입을 모니터링할 수 있는 보호대책이 없어 비인가된 물리적 접근이 가능한 위험',
                    'protection_plan' => '월렛룸 CCTV 및 월렛룸에 출입통제장치 및 금고관리대장 등으로 월렛룸에 대한 보호대책 마련',
                    'threatcode' => 'TC6-17',
                ),
            235 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)물리 보안',
                    'depth' => '2.4.2.1',
                    'clause' => '월렛룸에 대한 출입권한은 월렛룸에 출입가능한 인원이 부여하도록 통제하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '월렛룸에 출입이 가능하지 않은 인원의 출입 권한 부여가 가능하여 권한의 오남용 등으로 인가받지 않은 인원이 월렛룸에 출입하여 보안사고가 발생할 위험',
                    'protection_plan' => '월렛룸 출입 권한 부여 인원은 월렛룸에 출입가능한 인원으로 한정',
                    'threatcode' => 'TC6-06',
                ),
            236 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)물리 보안',
                    'depth' => '2.4.2.2',
                    'clause' => '중요 통제구역에 대한 출입관리시스템, CCTV 및 출입관리대장, 출입권한자의 적절성 등에 대하여 매월 관리/검토하고 책임자에게 보고 하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '중요 통제구역 출입에 대한 권한의 오남용 등으로 인한 보안사고가 발생할 위험',
                    'protection_plan' => '중요 통제구역에 대한 출입관리시스템, CCTV 및 출입관리대장, 출입권한자의 적절성 등에 대하여 매월 관리, 검토 및 책임자 보고',
                    'threatcode' => 'TC6-06',
                ),
            237 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)물리 보안',
                    'depth' => '2.4.5.1',
                    'clause' => '월렛룸내 작업 시, 관련 책임자 승인 및 작업절차(코인 이관절차, 감사인 동반 입장 등)를 수립/이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '월렛룸 내 작업 통제 미흡으로 인해 사고 발생 시 책임추적성 확보가 어려울 위험',
                    'protection_plan' => '월렛룸 내 작업 시 관련 책임자 승인 및 작업절차 수립ㆍ이행',
                    'threatcode' => 'TC1-02',
                ),
            238 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)인증 및 권한관리',
                    'depth' => '2.5.5.1',
                    'clause' => '가상자산 노드서버, 키관리 시스템, 월렛서버, 월렛 관련 어플리케이션 등 주요직무에 필요한 정보시스템에 접속할 수 있는 계정/권한을 특수 계정/권한으로 식별하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '월렛 관련 정보시스템 접속이 가능한 계정/권한을 특수 계정/권한으로 식별 및 관리가 미흡하여 권한의 오남용에 따른 보안사고가 발생할 위험',
                    'protection_plan' => '월렛 관련 정보시스템 접속이 가능한 계정/권한을 특수 계정/권한으로 식별 및 관리하고 최소한의 인원에게 최소 권한으로 계정 및 권한 부여',
                    'threatcode' => 'TC1-04',
                ),
            239 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)접근통제',
                    'depth' => '2.6.1.1',
                    'clause' => '가상자산 노드서버존(블록체인 참여 및 거래를 발생시킬 수 있는 서버 등)은 내부 및 다른 서버존의 장비들과 불필요한 통신/터미널 접속이 발생하지 않도록 접근을 제어하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '가상자산 노드서버존과 내부 및 다른 서버존 간의 접근통제를 수행하지 않아 비인가 시스템 접근이 가능할 위험',
                    'protection_plan' => '가상자산 노드서버존과 내부 및 다른 서버존 간의 불필요한 통신 및 터미널 접속이 발생하지 않도록 접근통제 수행',
                    'threatcode' => 'TC6-11',
                ),
            240 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)접근통제',
                    'depth' => '2.6.1.2',
                    'clause' => '월렛 접근 인원/시스템에 대한 별도 네트워크 존을 구성하고 접근통제 정책을 적용하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '월렛 접근 인원 및 시스템에 대한 별도 네트워크 영역을 분리하고 접근통제 정책을 적용하지 않아 비인가 시스템 접근이 가능할 위험',
                    'protection_plan' => '월렛 접근 인원 및 시스템에 대한 네트워크 영역을 분리하고 접근통제 수행',
                    'threatcode' => 'TC6-08',
                ),
            241 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)접근통제',
                    'depth' => '2.6.1.5',
                    'clause' => '노드서버들에 대하여 필수적으로 필요한 포트만 허용하고 있는가
- (권고)1024 이후 포트로 적용',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '노드서버들에 대한 포트 허용 정책 설정이 미흡하여 비인가 시스템 접근, 정보 유출 등이 발생할 위험  ',
                    'protection_plan' => '노드서버들에 대하여 필수적으로 필요한 포트만 허용
- (권고1024 이후 포트로 적용',
                    'threatcode' => 'TC6-11',
                ),
            242 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)접근통제',
                    'depth' => '2.6.2.5',
                    'clause' => '월렛관련 서버에 직접 접속(SSH 등)하거나 클라우드 환경에서 해당 서비스를 변경할 수 있는 관리콘솔에 대한 접근통제(접근권한 분리, 망분리, 추가인증,보안토큰 등) 대책을 마련하고 있는가? ',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '클라우드 관리콘솔에 대한 접근통제 대책이 미흡하여, 비인가 접근 및 설정 등에 따른 보안사고가 발생할 위험',
                    'protection_plan' => '클라우드 관리콘솔에 대한 접근통제(접근권한 분리, 망분리,추가인증, 보안토큰 등 수행',
                    'threatcode' => 'TC1-02',
                ),
            243 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)접근통제',
                    'depth' => '2.6.4.1',
                    'clause' => '가상자산 거래 관련 중요 DB(월렛관련 DB, 회원DB, 가상자산 보유 현황 등)의 테이블 목록 등 저장, 관리되고 있는 정보를 식별하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '저장하고 있는 정보의 식별이 미흡하여, 중요정보 저장에 따른 적절한 관리 및 운영이 어려운 위험',
                    'protection_plan' => '가상자산 거래 관련 중요 데이터베이스 테이블 목록 등에서 저장 및 관리하는 정보를 식별',
                    'threatcode' => 'TC1-04',
                ),
            244 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)접근통제',
                    'depth' => '2.6.5.4',
                    'clause' => 'IDC 내부에 무선통신망 설치 및 운용을 금지하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => 'IDC 내부 무선 네트워크 사용에 대한 통제가 미흡하여 비인가자의 내부 네트워크 접근, 정보 유출 등 보안사고 발생 위험',
                    'protection_plan' => 'IDC 내부에 무선통신망 설치 및 운용 제한',
                    'threatcode' => 'TC1-02',
                ),
            245 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)접근통제',
                    'depth' => '2.6.6.1',
                    'clause' => '월렛 관련 시스템의 접속은 예외없이 외부네트워크를 통한 원격 접근을 금지하고 있는가? ',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '외부 네트워크를 통한 월렛 관련 시스템 원격접근 통제가 미흡하여, 비인가자의 시스템 접근이 가능할 위험',
                    'protection_plan' => '외부 네트워크를 통한 월렛 관련 시스템 원격접근 금지',
                    'threatcode' => 'TC6-11',
                ),
            246 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)접근통제',
                    'depth' => '2.6.7.2',
                    'clause' => '콜드월렛 작업시 월렛 및 개인키를 사용하는 노트북은 전용장비로 구성하고, 사용하지 않을때에는 전원을 OFF 또는, 네트워크의 접속을 차단하고 있는가? (목적외 SW 설치 및 인터넷 사용 금지)',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '월렛 및 개인키 사용 PC의 사용 및 인터넷 접속을 제한하지 않아, 고의 또는 실수로 인한 정보 유출, 악성코드 감염 등 보안사고가 발생할 위험',
                    'protection_plan' => '월렛 및 개인키를 사용하는 전용 PC 사용 및 미사용 시 전원 OFF 또는 네트워크 접속 차단',
                    'threatcode' => 'TC3-12',
                ),
            247 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)암호화 적용',
                    'depth' => '2.7.2.2',
                    'clause' => '핫/콜드 월렛에서 사용되는 키, 패스프레이즈는 물리적으로 안전한 장소에 소산하여 보관하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '키 분실 및 비인가자 접근으로 인한 변조 및 중요정보 유출 위험',
                    'protection_plan' => '핫/콜드 월렛에서 사용되는 키, 페스프레이즈는 별도의 안전한 장소에 소산 보관',
                    'threatcode' => 'TC1-04',
                ),
            248 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)암호화 적용',
                    'depth' => '2.7.2.3',
                    'clause' => '월렛(핫 월렛, 콜드 월렛 등) 개인키의 유출, 도난, 분실을 방지할 수 있는 보안대책 및 절차를 수립ㆍ이행하고 있는가?
- 신규 코인 상장 시 안전한 개인키 생성 및 배포, 보관 절차
- 개인키 passphrase 설정 및 관리 방안
- 개인키의 안전한 보관(핫월렛, 콜드월렛)
- 개인키 접근 및 사용 절차
- 개인키 접근권한자에 의한 유출 및 권한 오남용 방지 대책
- 개인키 백업 및 소산
- 개인키 관련 책임추적성 확보
- 블록체인 및 핫/콜드 월렛 상의 보유량 변동 모니터링
- 기타(키 분할, passhrase 분할, 멀티시그, H/W월렛 등)',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '월렛 개인키에 대한 보안대책 수립ㆍ이행 미흡으로 인한 가상자산 유출 위험',
                    'protection_plan' => '월렛 개인키의 유출, 도난, 분실을 방지할 수 있는 보안대책 및 절차 수립ㆍ이행
- 신규 코인 상장 시 안전한 개인키 생성 및 배포, 보관 절차
- 개인키 passphrase 설정 및 관리 방안
- 개인키의 안전한 보관(핫월렛, 콜드월렛
- 개인키 접근 및 사용 절차
- 개인키 접근권한자에 의한 유출 및 권한 오남용 방지 대책
- 개인키 백업 및 소산
- 개인키 관련 책임추적성 확보
- 블록체인 및 핫/콜드 월렛 상의 보유량 변동 모니터링
- 기타(키 분할, passhrase 분할, 멀티시그, H/W월렛 등',
                    'threatcode' => 'TC1-02',
                ),
            249 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)암호화 적용',
                    'depth' => '2.7.2.4',
                    'clause' => '멀티시그를 지원하지 않는 코인, 토큰, 플랫폼의 경우에도, 취급업소내 가상자산의 송/수신시 2인 이상의 MFA(Multi-Factor Authentication) 인증, 자체 개발한 멀티시그 기능(2개 이상의 key가 있어야만 거래가 가능하도록 통제 적용) 등을 활용하여 보안이 강화된 안전장치를 적용하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '멀티시그 미지원 코인, 토큰, 플랫폼에 대한 보안대책 수립ㆍ이행 미흡으로 인한 가상자산 유출 위험',
                    'protection_plan' => '가상자산 송/수신시 MFA 인증, 자체 개발한 멀티시그 기능(2개 이상의 key가 있어야만 거래가 가능하도록 통제 적용 등을 활용한 보안 강화',
                    'threatcode' => 'TC1-02',
                ),
            250 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)암호화 적용',
                    'depth' => '2.7.2.5',
                    'clause' => '외부 인터넷 구간의 가상자산 노드서버와 분산원장을 동기화하는 취급업소의 노드서버에서는 개인키 및 개인키가 포함된 월렛을 사용하지 않도록 분리하고 있는가?
다만, 노드서버와 월렛이 분리가 불가능한 경우, 그에 대한 보호대책을 마련하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '인터넷 구간 노드서버와 분산원장 동기화 노드서버에서 개인키 및 개인키가 포함된 월렛을 사용하여 개인키 유출 등으로 인한 가상자산 유출 위험',
                    'protection_plan' => '외부 인터넷 구간의 가상자산 노드서버와 분산원장을 동기화하는 취급업소의 노드서버에서는 개인키 및 개인키가 포함된 월렛을 사용하지 않도록 분리
- 노드서버와 월렛 분리가 불가능한 경우, 그에 대한 보호대책 마련 필요',
                    'threatcode' => 'TC1-04',
                ),
            251 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)암호화 적용',
                    'depth' => '2.7.2.6',
                    'clause' => '월렛의 개인키 보안강화를 위하여 멀티시그, 자체 개발 MFA 등 보안강화를 위한 추가 인증수단을 적용하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '월렛의 개인키 보안강화 대책 수립 및 적용이 미흡하여 개인키 유출 등으로 인한 가상자산 유출 위험',
                    'protection_plan' => '월렛의 개인키 보안강화를 위한 멀티시그, 자체 개발 MFA 등 추가 인증수단 적용 대책 수립 및 이행',
                    'threatcode' => 'TC1-04',
                ),
            252 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)정보시스템 도입 및 개발 보안',
                    'depth' => '2.8.1.1',
                    'clause' => '신규 가상자산 상장 시, 멀티시그 적용여부, 가상자산 노드서버 운영, 거래결과 확인방법 등 해당 코인 관련 보안 요구사항을 정의하고 적용하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '신규 가상자산 상장 시 보안 요구사항 정의 및 적용 미흡으로 신규 코인에 대한 보안 취약점 등으로 인한 보안사고가 발생할 위험   ',
                    'protection_plan' => '신규 코인 상장 전 보안 적합성 판단을 위한 기준 수립 및 이행',
                    'threatcode' => 'TC1-01',
                ),
            253 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)정보시스템 도입 및 개발 보안',
                    'depth' => '2.8.1.2',
                    'clause' => '주요 작업관련 정보시스템 등 월렛 관련 응용프로그램 개발시에는 해당 가상자산의 월렛 관련 상세 위험평가(공인IP 필요, DMZ구간에 가상자산 노드서버 배치 필요, 불특정 IP/PORT 통신 등)를 근거로 보안요구사항을 도출하여 이를 설계에 반영하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '월렛 관련 응용프로그램 개발에 대한 위험평가 내용에 따른 보안요구사항 도출 및 설계 반영이 미흡하여 신규 월렛 응용프로그램 개발에 따른 취약점 발생 위험',
                    'protection_plan' => '월렛 관련 응용프로그램 개발 시 월렛 관련 위험평가 내용에 따른 보안 요구사항 도출 및 설계 반영',
                    'threatcode' => 'TC1-04',
                ),
            254 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)정보시스템 도입 및 개발 보안',
                    'depth' => '2.8.2.5',
                    'clause' => '설계단계에서 도출한, 가상자산 월렛 관련 상세 보안요구사항(멀티시그 적용, 공인IP 필요, DMZ구간에 가상자산 노드서버 배치 필요, 불특정 IP/PORT 통신, 거래결과 확인방법 등)을 근거로 이행여부를 확인하기 위한 시험을 수행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '가상자산 관련 신규 도입, 개발, 변경 시 보안성 검토에 대한 검증이 미흡하여, 가상자산 관련 보안 취약점 발생 및 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '가상자산의 월렛 관련 보안 요구사항을 수립하여 신규 도입, 개발, 변경 시 보안성 검토 수행',
                    'threatcode' => 'TC1-01',
                ),
            255 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)정보시스템 도입 및 개발 보안',
                    'depth' => '2.8.3.3',
                    'clause' => '가상자산 거래 서비스 관련 다음과 같은 행위를 하고자 하는 경우 자체 보안성심의를 실시하고 있는가?
- 가상자산 거래에 사용되는 전산프로그램을 정보시스템에 설치 및 변경
- 정보통신망을 이용하여 이용자를 대상으로 신규 가상자산 거래업무 수행
- 복수의 가상자산 거래소가 공동으로 가상자산거래 관련 표준 제정',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '가상자산 거래 서비스 관련 시스템 설치 및 변경, 거래업무 수행 시 보안성심의를 거치지 않아 보안사고가 발생할 위험',
                    'protection_plan' => '가상자산 거래 서비스 관련 시스템 설치 및 변경, 거래업무 수행 시 보안성심의 체크리스트를 수립 및 이행',
                    'threatcode' => 'TC1-01',
                ),
            256 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)정보시스템 도입 및 개발 보안',
                    'depth' => '2.8.5.1',
                    'clause' => '월렛과 관련된 소스프로그램은 개발자 및 관리자 등에 대한 접근 권한을 구분하고 인가된 사용자만이 접근할 수 있도록 엄격하게 통제하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '월렛과 관련한 소스프로그램에 대한 변경 및 보관 관리가 미흡하여 소스프로그램 변조, 장애 등 보안사고 발생 위험',
                    'protection_plan' => '비인가된 자의 월렛과 관련한 소스프로그램의 접근을 통제하기 위하여 안전한 접근수단(전용선 또는 VPN 등 또는 인증방식(MFA 절차 수립/이행',
                    'threatcode' => 'TC5-02',
                ),
            257 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)정보시스템 도입 및 개발 보안',
                    'depth' => '2.8.5.4',
                    'clause' => '중요도가 높은 소스 코드는(커스터마이징한 월렛, 키관리 소프트웨어, 거래 프로그램 등) 접근을 통제하기 위한 사용자 인증, 권한관리 절차를 수립ㆍ이행하고 있는가?

※ 취급업소에서 클라우드 또는 외부 형상관리 솔루션을 통해 소스코드 버전관리를 하는 경우, 중요 소스 프로그램에 대해 외부에서 접속/다운로드 가능한 위험이 존재
※ 상용 KMS 솔루션, HSM 등의 키관리 장비 외에도, 키관리용 소프트웨어를 자체 개발하여 사용하는 경우가 있으므로, 이때 사용되는 소스 프로그램에 대한 안전한 관리가 필요함',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '중요도가 높은 소스프로그램(커스터마이징한 월렛, 키관리 소프트웨어, 거래 프로그램 등에 대한 변경 및 보관 관리가 미흡하여 소스프로그램 변조, 장애 등 보안사고 발생 위험',
                    'protection_plan' => '비인가된 자의 월렛과 관련한 중요도가 높은 소스프로그램의 접근을 통제하기 위하여 안전한 접근수단(전용선 또는 VPN 등 또는 인증방식(MFA 절차 수립/이행',
                    'threatcode' => 'TC5-02',
                ),
            258 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)정보시스템 도입 및 개발 보안',
                    'depth' => '2.8.5.5',
                    'clause' => '소스 프로그램 변경이 필요한 경우 해당 프로그램을 개발 또는 시험 시스템에 복사 후 변경하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개발/테스트 시스템이 아닌 운영시스템에서 직접 작업 시 테스트 용도의 어플리케이션에 내재된 취약점이 악용한 공격이 발생되거나 개발 상의 오류 등이 운영시스템에 영향을 미쳐 장애가 발생할 위험',
                    'protection_plan' => '소스 프로그램 변경 시 개발 또는 테스트 시스템에서 복사 후 변경 작업 절차를 수립/이행 ',
                    'threatcode' => 'TC1-04',
                ),
            259 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)시스템 및 서비스 운영관리',
                    'depth' => '2.9.1.3',
                    'clause' => '장애 또는 오류 등에 의한 이용자 중요 전산원장 변경을 위하여 별도의 변경절차를 수립·운용하고 있는가?
-변경 대상 및 방법 변경 권한자 지정
-변경 전후내용 자동기록 및 보존
-변경 의뢰 시 변경대상 업무, 변경 사유, 변경 내용, 변경요청일 및 작업완료일, 변경의뢰 요청자 및 승인내용 등을 포함
- 원장변경 의뢰내용 및 변경결과에 대해 그 적정성 제3자(감사자 등) 확인',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '오류 등에 의한 이용자의 전산원장 수정 시 체계적인 절차가 미흡하여, 일관되고 안전한 보안업무 적용이 어려울 위험',
                    'protection_plan' => '이용자 중요 전산원장 변경 또는 수정 시 별도의 체계적이고 적법한 보안 절차 수립/이행 ',
                    'threatcode' => 'TC1-11',
                ),
            260 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)시스템 및 서비스 운영관리',
                    'depth' => '2.9.1.4',
                    'clause' => '안전하고 체계적인 일괄작업(batch) 수행을 위하여 다음사항을 준수하고 있는가?
- 작업요청서에 의한 책임자 승인
- 일괄작업의 최대한 자동화 및 오류 최소화
- 일괄작업 오류 발생 시 책임자 확인 및 조치
- 모든 일괄작업내용 기록관리
- 일괄작업 수행자의 주요업무관련행위 책임자 모니터링',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '안전하고 체계적인 일괄작업(batch 절차가 수립되지 않아, 불안전한 일괄작업에 의한 오류가 발생할 위험',
                    'protection_plan' => '안전하고 체계적인 일괄작업(batch 보안 절차를 수립/이행',
                    'threatcode' => 'TC1-02',
                ),
            261 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)시스템 및 서비스 운영관리',
                    'depth' => '2.9.3.3',
                    'clause' => '개인키, 패스프레이즈와 같이 중요정보가 저장된 디바이스, 콜드 월렛, 백업매체 등의 경우 재해ㆍ재난에 대처할 수 있도록 내화금고에 보관하고, 물리적으로 떨어진 장소에 별도 소산하고 있는가?
- 클라우드를 이용하여 서비스 하는 경우에도, 장애를 대비하여 중요정보(개인키, Passphrase 등)를 물리적으로 백업하고, 소산하여야 함',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '중요정보에 대한 백업 및 보관 관리가 미흡하여 보안사고 발생시 시스템 복구가 어려울 위험',
                    'protection_plan' => '중요정보가 저장된 백업매체의 경우 재난에 대처할 수 있도록 백업매체를 물리적으로 떨어진 장소에 소산',
                    'threatcode' => 'TC1-04',
                ),
            262 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)시스템 및 서비스 운영관리',
                    'depth' => '2.9.4.1',
                    'clause' => '월렛에 대한 모든 접근 및 사용은 책임추적성을 확보할 수 있도록 관련 접속기록과 권한부여 및 삭제, 거래 발생 등의 행위이력 로그를 빠짐없이 기록하고 있는가?
- 행위이력과 책임추적성과 달리 개인키값 등 과도하게 불필요한 정보가 로그기록에 저장된 채로 방치되지 않도록 기록항목을 검토하였는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '월렛 관련 정보시스템 자산에 대한 로그 기록, 보관 및 관리 절차가 미흡하여 보안사고 발생시 대응이 어려울 위험',
                    'protection_plan' => '월렛 관련 정보시스템에 대한 로그관리 절차를 수립하고 이에 따라 로깅',
                    'threatcode' => 'TC7-01',
                ),
            263 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)시스템 및 서비스 운영관리',
                    'depth' => '2.9.4.4',
                    'clause' => '정보시스템 가동기록을 1년 이상 유지하고 있는가? ',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '주요 정보시스템 자산에 대한 로그 기록, 보관 및 관리 절차가 미흡하여 보안사고 발생 시 대응이 어려울 위험',
                    'protection_plan' => '주요 정보시스템에 대한 로그관리 절차를 수립하고 이에 따라 1년 이상 가동기록 유지',
                    'threatcode' => 'TC7-01',
                ),
            264 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)시스템 및 서비스 운영관리',
                    'depth' => '2.9.4.5',
                    'clause' => '이용자 중요원장에 직접 접근하여 조회·수정·삭제·삽입한 경우 작업자 및 작업내용 등을 기록하여 5년간 보존하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '중요원장 서버 내 사용자 계정 및 공용 계정 사용에 대한 통제가 미흡하여 보안사고 발생 시 작업내역 분석 및 추적이 불가능할 위험',
                    'protection_plan' => '이용자 중요원장에 직접 접근하여 작업 시 작업자 및 작업내용을 기록하도록 구현하여 5년간 보존',
                    'threatcode' => 'TC5-01',
                ),
            265 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)시스템 및 서비스 운영관리',
                    'depth' => '2.9.5.1',
                    'clause' => '월렛 서버, 가상자산 노드서버 등 취급업소에 특화된 정보시스템에 대해서도 로그 및 접속기록에 대한 검토정책을 누락없이 운영하고 있는가?

- 특히, 월렛 관련 정보시스템에 대한 로그는 개인키, 암호화키, 패스프레이즈 등이 포함될 수 있으므로 암호화하거나, 불필요한 정보가 과다하게 남지 않도록 저장해야 함',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '월렛 관련 특화된 정보시스템의 사용자 접근이력에 대한 주기적인 점검활동이 없어 내/외부 악의적인 사용자에 의한 정보유출 등 보안사고 발생 위험',
                    'protection_plan' => '로그 및 접속기록 검토결과를 책임자에게 보고하고 이상징후 발견 시 절차에 따라 대응',
                    'threatcode' => 'TC1-01',
                ),
            266 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)시스템 및 서비스 운영관리',
                    'depth' => '2.9.5.4',
                    'clause' => '전산원장, 주요정보, 이용자정보 등이 저장된 정보시스템에 대한 중요작업 수행 시 책임자가 이중확인하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '중요정보가 저장된 정보시스템 중요작업 수행에 대한 책임자 이중확인이 미흡하여 내/외부 악의적인 사용자에 의한 정보유출, 오작업 등 보안사고 발생 위험',
                    'protection_plan' => '전산원장, 주요정보, 이용자정보 등이 저장된 정보시스템 중요작업 시 책임자를 선정하여 이중 확인 수행',
                    'threatcode' => 'TC1-01',
                ),
            267 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)시스템 및 서비스 보안관리',
                    'depth' => '2.10.4.1',
                    'clause' => '이용자가 취급업소의 로그인/출금/사용자 정보 변경 등의 서비스를 이용할 경우, 추가 인증수단 또는, 멀티시그를 적용하고 있는가?
* 예. OTP, 인증서, 기기인증 등',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '취급업소에 접근하는 이용자의 중요 서비스 이용에 대한 추가 인증수단 적용 등 미흡으로 침해사고 발생 시 적절히 대응하지 못할 위험',
                    'protection_plan' => '이용자가 취급업소의 로그인/출금/사용자 정보 변경 등의 서비스를 이용 시 추가 인증(OTP, 인증서, 기기인증 등 적용 ',
                    'threatcode' => 'TC2-02',
                ),
            268 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)시스템 및 서비스 보안관리',
                    'depth' => '2.10.4.3',
                    'clause' => '가상자산거래 기록의 보존(5년) 및 관리를 하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '가상자산거래 기록 보관 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '가상자산거래 기록을 5년간 보존 및 관리 ',
                    'threatcode' => 'TC8-01',
                ),
            269 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)시스템 및 서비스 보안관리',
                    'depth' => '2.10.6.2',
                    'clause' => '가상자산 취급업소의 주요 작업 담당자 및 개인정보취급자 업무용 단말기, 콜드/핫 월렛용 단말기에 대해 자료공유프로그램 사용 금지, 공유설정 제한, 무선망 이용 통제 등의 강화된 통제정책을 수립ㆍ이행하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '업무용 단말기를 통한 개인정보 및 중요정보 유출 방지를 위한 통제 정책이 미흡하여, 정보 유출 등 보안사고가 발생할 위험',
                    'protection_plan' => '주요 작업 담당자 및 개인정보취급자 업무용 단말기의 강화된 통제 정책 수립 및 이행(자료공유프로그램 사용 금지, 공유설정 제한, 무선망 이용 통제 등',
                    'threatcode' => 'TC1-02',
                ),
            270 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)사고 예방 및 대응',
                    'depth' => '2.11.1.4',
                    'clause' => '월렛 개인키 유출, 가상자산 탈취 등의 사고 발생시 보호대책으로 수립된 사항에 대해 대응체계 및 절차를 마련하고 있는가?',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '취급업소 관련 침해사고에 대한 대응절차 및 체계 구축이 미흡하여 사고 발생 시 효과적으로 대응하지 못할 위험',
                    'protection_plan' => '취급업소 관련 침해사고에 대한 보호대책을 수립하여 대응체계 및 절차를 수립/이행',
                    'threatcode' => 'TC1-01',
                ),
            271 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)사고 예방 및 대응',
                    'depth' => '2.11.2.1',
                    'clause' => '정보시스템 취약점 점검 절차를 수립하고 정기적으로 점검을 수행하고 있는가?
- 대외서비스: 반기 1회 이상
- 내부시스템: 연1회 이상',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '정보시스템에 대한 정기적 취약점 점검 체계 부재로 인하여 취약점 노출 등의 보안사고 발생 위험',
                    'protection_plan' => '정보시스템 취약점 점검 절차를 수립하여 정기적으로 점검 수행',
                    'threatcode' => 'TC1-04',
                ),
            272 =>
                array (
                    'type' => 'Wallet',
                    'domain' => '(가상자산)사고 예방 및 대응',
                    'depth' => '2.11.3.1',
                    'clause' => ' 월렛 접근과 관련하여 실시간 알람 등을 통해 사고 방지 체계를 구축하고 있는가?
- 월렛에 대한 비인가 접근, 권한 오남용, 개인키 접근 및 유출, 비인가자에 의한 가상자산 이체 등 비정상 행위를 탐지, 대응할 수 있도록 관련 로그 검토 및 모니터링 기준과 절차를 수립ㆍ이행하고 있는가?
※ 24시간 운영 되는 가상자산취급업소 특성상 24*365 모니터링 체계 수립 필요',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '월렛 접근과 관련한 실시간 모니터링 등이 이루어지지 않아 비인가자에 의한 침해 발생 차단 및 대응이 어려울 위험',
                    'protection_plan' => '월렛에 대한 비인가 접근시도가 의심되는 이상징후를 지체 없이 인지할 수 있도록 모니터링 체계 및 절차 수립ㆍ이행',
                    'threatcode' => 'TC1-01',
                ),
            273 =>
                array (
                    'type' => 'ISO27701',
                    'domain' => '수집 및 처리 조건',
                    'depth' => 'B.8.2.1',
                    'clause' => '조직은 개인식별정보(PII)를 처리하기 위한 계약이 고객의 의무에 대한 지원을 제공한다는 조직의 역할을 다룰 수 있도록 해야 한다(처리 특성 및 조직이 이용가능한 정보 고려).',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '이용자에게 개인식별정보(PII) 처리 위탁 동의 획득 시 수탁자, 위탁 업무 내용 고지 및 동의 획득 절차 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인식별정보(PII) 처리 위탁에 대한 이용자 동의 필요 시 수탁자, 위탁 업무 내용을 고지하고 동의 획득',
                    'threatcode' => 'TC8-01',
                ),
            274 =>
                array (
                    'type' => 'ISO27701',
                    'domain' => '수집 및 처리 조건',
                    'depth' => 'B.8.2.2',
                    'clause' => '조직은 고객을 대신하여 처리된 개인식별정보(PII)가 고객의 문서화된 지침에 명시된 목적으로만 처리되도록 보장해야 한다.',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '수집 목적 이외로의 개인식별정보(PII) 유용 시 이용자(정보주체)의 동의 없이 개인식별정보(PII)가 다른 곳에 사용되어 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '수집 목적 이외로의 개인정보 유용을 절대 금지',
                    'threatcode' => 'TC8-01',
                ),
            275 =>
                array (
                    'type' => 'ISO27701',
                    'domain' => '수집 및 처리 조건',
                    'depth' => 'B.8.2.3',
                    'clause' => '조직은 계약에 따라 처리된 개인식별정보(PII)를 해당 개인식별정보(PII) 주체로부터 사전 동의를 얻지 않은 상태에서 마케팅 및 광고 목적으로 사용해서는 안된다. 조직은 마케팅 및 광고 활용 동의가 서비스 제공 조건이 되지 않도록 한다.',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인식별정보(PII) 수집에 대한 동의 획득 절차 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인식별정보(PII) 수집/이용에 대한 동의와 제3자 동의, 마케팅 목적 처리 동의 등에 대한 별도 동의 방식 지원',
                    'threatcode' => 'TC8-01',
                ),
            276 =>
                array (
                    'type' => 'ISO27701',
                    'domain' => '수집 및 처리 조건',
                    'depth' => 'B.8.2.4',
                    'clause' => '조직은 처리 지침이 해당 법률 또는 규정을 위반하는 경우 의견서를 통해 고객에게 알려야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '법률 위반 또는 침해사고 발생 시 이용자(정보주체) 통지, 사고 경위 분석 및 보고가 미흡하여 적절한 조치, 대응이 이루어지지 않을 위험',
                    'protection_plan' => '침해사고 발생 시 관계기관에 신고 통지 절차 수립 및 이행',
                    'threatcode' => 'TC1-01',
                ),
            277 =>
                array (
                    'type' => 'ISO27701',
                    'domain' => '수집 및 처리 조건',
                    'depth' => 'B.8.2.5',
                    'clause' => '조직은 고객이 자신이 의무를 준수한다는 사실을 입증할 수 있도록 적절한 정보를 고객에게 제공해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보 처리방침 공개 미흡으로 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '법적 요구사항을 포함한 내용의 개인정보 처리방침을 홈페이지에 공개',
                    'threatcode' => 'TC8-01',
                ),
            278 =>
                array (
                    'type' => 'ISO27701',
                    'domain' => '수집 및 처리 조건',
                    'depth' => 'B.8.2.6',
                    'clause' => '조직은 고객을 대신하여 수행한 개인식별정보(PII) 처리에 대한 의무(계약에 명시된 대로)를 준수한다는 것을 입증하기 위해 필요한 기록을 결정 및 유지해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '기술적/관리적/물리적 안전성 확보조치 등의 내부 절차에 따라 수집된 이용자의 개인정보 관리 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보 암호화, 접근통제, 내부자 권한 오/남용，재난/재해 등에 대비한 백업, 복구 등의 안전한 절차 마련 및 시행',
                    'threatcode' => 'TC8-01',
                ),
            279 =>
                array (
                    'type' => 'ISO27701',
                    'domain' => '개인식별정보(PII) 주체에 대한 의무사항',
                    'depth' => 'B.8.3.1',
                    'clause' => '조직은 개인식별정보(PII) 주체와 관련된 의무를 준수하기 위한 방법을 고객에게 제공해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '이용자(정보주체)의 개인식별정보(PII) 열람, 정정·삭제, 처리정지, 이의제기, 동의 철회 요구 등의 절차를 마련하지 않아 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '이용자(정보주체)의 권리행사 방법 및 절차를 쉬운 방법으로 마련 및 제공',
                    'threatcode' => 'TC8-01',
                ),
            280 =>
                array (
                    'type' => 'ISO27701',
                    'domain' => '설계에 의한 프라이버시 및 기본적인 프라이버시',
                    'depth' => 'B.8.4.1',
                    'clause' => '조직은 개인식별정보(PII) 처리 과정에서 생성된 임시 파일을 정해진 문서화된 기간 내에 문서화된 절차에 따라 폐기(예: 삭제 또는 파기)하도록 한다. ',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '수집/이용 목적의 달성, 이용 기간 만료, 폐업(서비스 중지)의 경우 개인식별정보(PII)의 완전파기 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '수집 목적을 달성하고 더 이상 필요하지 않은 개인식별정보(PII)의 경우에는 저장하지 않고 파기해야 함(법령에 따라 보존이 필요한 경우 보존기간 만료 시 파기)',
                    'threatcode' => 'TC8-01',
                ),
            281 =>
                array (
                    'type' => 'ISO27701',
                    'domain' => '설계에 의한 프라이버시 및 기본적인 프라이버시',
                    'depth' => 'B.8.4.2',
                    'clause' => '조직은 개인식별정보(PII)를 안전하게 반환, 이전 및/또는 폐기해야 한다. 또한 고객에게 정책을 제공해야 한다.',
                    'grade_asset' => 2,
                    
                    'explanation_risk' => '개인식별정보(PII) 파기 시 복구 및 재생되지 않도록 안전한 파기 방법 사용 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인식별정보(PII)를 파기 시 개인정보 복원이 불가능하도록 완전파괴, 전용 소자장비 등을 이용한 파기 방법 사용',
                    'threatcode' => 'TC8-01',
                ),
            282 =>
                array (
                    'type' => 'ISO27701',
                    'domain' => '설계에 의한 프라이버시 및 기본적인 프라이버시',
                    'depth' => 'B.8.4.3',
                    'clause' => '조직은 데이터 전송 네트워크를 통해 전송된 PII가 데이터가 의도한 목적지에 도달하도록 설계된 적절한 제어를 받도록 해야 한다.
',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => ' 안전한 전송 보호 정책을 따르지 않아 중요 정보가 비인가자에 의해 유출될 수 있는 위험. ',
                    'protection_plan' => ' 전송구간 암호화 또는 파일 암호화를 통해 안전한 전송 정책 및 파일 보호',
                    'threatcode' => 'TC6-11',
                ),
            283 =>
                array (
                    'type' => 'ISO27701',
                    'domain' => '개인식별정보(PII) 공유, 이전 및 공개',
                    'depth' => 'B.8.5.1',
                    'clause' => '조직은 관할권 간의 개인식별정보(PII) 이전 기준과 의도된 변경사항을 적시에 고객에게 통지하여 고객이 이러한 변경사항에 대해 반대하거나 계약을 종료할 수 있도록 해야 한다.
',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '영업양도자가 영업 양도 및 합병에 따른 개인정보 이전에 필요한 사항 통지 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '영업양도자가 영업 양도 및 합병에 따른 개인정보 이전에 필요한 사항을 이용자에게 명확히 고지하고 동의 획득',
                    'threatcode' => 'TC8-01',
                ),
            284 =>
                array (
                    'type' => 'ISO27701',
                    'domain' => '개인식별정보(PII) 공유, 이전 및 공개',
                    'depth' => 'B.8.5.2',
                    'clause' => '조직은 개인식별정보(PII) 이전이 가능한 국가 및 국제 기관들을 명시하고 문서화해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '이용자 개인정보의 국외(제 3자) 제공에 따른 고지 및 동의를 하지 않아 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '필요한 사항에 대하여 이용자 개인정보의 국외(제 3자) 제공에 따른 고지 및 동의를 반드시 득함',
                    'threatcode' => 'TC8-01',
                ),
            285 =>
                array (
                    'type' => 'ISO27701',
                    'domain' => '개인식별정보(PII) 공유, 이전 및 공개',
                    'depth' => 'B.8.5.3',
                    'clause' => '조직은 제3자에게 공개한 개인식별정보(PII)에 대해, 공개된 사항은 무엇인지 및 누구에게, 언제 공개되었는지를 포함하여 기록해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '이용자 개인정보의 제 3자에게 제공에 따른 고지 및 동의를 하지 않아 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '필요한 사항에 대하여 이용자 개인정보의 제 3자에게 제공에 따른 고지 및 동의를 반드시 득함',
                    'threatcode' => 'TC8-01',
                ),
            286 =>
                array (
                    'type' => 'ISO27701',
                    'domain' => '개인식별정보(PII) 공유, 이전 및 공개',
                    'depth' => 'B.8.5.4',
                    'clause' => '조직은 법적 구속력이 있는 개인식별정보(PII) 공개 요청을 고객에게 공지해야 한다.
',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '법적으로 구체적인 근거 없이 수집하거나 개인정보 수집에 대한 미동의로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '고유식별정보(주민등록번호 제외)는 이용자(정보주체)로부터 별도의 동의를 받거나 관련 법령에 구체적인 근거가 있는 경우에만 처리.',
                    'threatcode' => 'TC8-01',
                ),
            287 =>
                array (
                    'type' => 'ISO27701',
                    'domain' => '개인식별정보(PII) 공유, 이전 및 공개',
                    'depth' => 'B.8.5.5',
                    'clause' => '조직은 법적 구속력이 없는 개인식별정보(PII) 공개 요청은 거절하고, 개인식별정보(PII)를 공개하기 전에 고객과 협의하고 해당 고객과 계약상 합의된 PII 요청만 수락해야 한다. ',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '수집 목적 이외로의 개인정보 유용 시 정보주체의 동의 없이 개인정보가 다른 곳에 사용되어 법적 요구사항을 만족시키지 못할 위험 ',
                    'protection_plan' => '수집 목적 이외로의 개인정보 유용을 절대 금지',
                    'threatcode' => 'TC8-01',
                ),
            288 =>
                array (
                    'type' => 'ISO27701',
                    'domain' => '개인식별정보(PII) 공유, 이전 및 공개',
                    'depth' => 'B.8.5.6',
                    'clause' => '조직은 개인식별정보(PII)를 처리하기 위한 협력업체의 참여를 사전에 고객에게 공개해야 한다. ',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '개인정보 처리 수탁사에 대한 미공개 및 누락으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '개인정보 처리 수탁사를 현행화하여 개인정보 처리방침 내 공개
* 개인정보 처리위탁을 받는 자, 위탁 업무 내용',
                    'threatcode' => 'TC8-01',
                ),
            289 =>
                array (
                    'type' => 'ISO27701',
                    'domain' => '개인식별정보(PII) 공유, 이전 및 공개',
                    'depth' => 'B.8.5.7',
                    'clause' => '조직은 고객과의 계약에 따른 개인식별정보(PII) 처리 협력업체만 참여시켜야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '이용자 개인정보의 제 3자에게 제공에 따른 고지 및 동의를 하지 않아 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '필요한 사항에 대하여 이용자 개인정보의 제 3자에게 제공에 따른 고지 및 동의를 반드시 득함',
                    'threatcode' => 'TC8-01',
                ),
            290 =>
                array (
                    'type' => 'ISO27701',
                    'domain' => '개인식별정보(PII) 공유, 이전 및 공개',
                    'depth' => 'B.8.5.8',
                    'clause' => '일반적인 서면 승인의 경우 조직은 개인식별정보(PII) 처리를 위한 협력업체의 추가 또는 교체와 관련된 변경사항을 고객에게 통지하여 고객이 해당 변경사항에 반대할 기회를 제공해야 한다.',
                    'grade_asset' => 3,
                    
                    'explanation_risk' => '수탁자 또는 위탁업무 내용 변경 시 해당 내용 공개 및 동의 획득 절차 미흡으로 인한 법적 요구사항을 만족시키지 못할 위험',
                    'protection_plan' => '수탁자 또는 위탁 업무 내용 변경 시 개인정보 처리방침 내 공개 또는 변경 내용 고지 및 이용자의 재동의 획득 절차 수립',
                    'threatcode' => 'TC8-01',
                ),
        ));






    }


}