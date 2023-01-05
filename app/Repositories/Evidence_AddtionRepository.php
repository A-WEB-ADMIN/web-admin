<?php

namespace App\Repositories;

use App\Models\Ismsp3;
use App\Models\Evidence;
use App\Models\Operatingdocument;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class Evidence_AddtionRepository
{
    protected $company_id;
    protected $standard_id;
    protected $completedCODE;
    protected $evidence_name;
    protected $content;
    protected $field_inspection;
    protected $cycle;
    protected $contorl_items = [];
    protected $evidence_managers = [];

    /**=================================================
     *
     *  1. 생성된 NEW CODE를 evidences 테이블에 INSERT 하기
     *
    ====================================================*/
    public function insert_to_evidences()
    {
        $evidence = new Evidence();
        $evidence->company_id = $this->getCompanyId();
        $evidence->standard_id = $this->getStandardId();
        $evidence->CODE = $this->getCompletedCODE();
        $evidence->subject = $this->getEvidenceName();
        $evidence->content = $this->getContent();
        $evidence->field_inspection = $this->getFieldInspection();
        $evidence->cycle = $this->getCycle();
        $evidence->save();

        return $evidence->id;
    }
    /**=================================================
     *
     *  2. evidence_ismsp3 테이블에 INSERT 하기
     *
    ====================================================*/
    public function insert_to_evidence_ismsp3($evidence_id)
    {
        $contorl_items = $this->getContorlItems();

        foreach($contorl_items as $contorl_item)
        {
            $ismsp3_table = DB::table('ismsp3s')->where('depth', $contorl_item['depth'])->first();


            //logger("__________" . $ismsp3_table->id);


            $last_id = DB::table('evidence_ismsp3')->insertGetId([
                "evidence_id" => $evidence_id,
                "ismsp3_id" => $ismsp3_table->id
            ]);
        }

        return $last_id;
    }
    /**=================================================
     *
     *  3. operatingdocuments 테이블에 INSERT 하기
     *
    ====================================================*/
    public function insert_to_operatingdocuments()
    {
        $contorl_items = $this->getContorlItems();

        foreach($contorl_items as $contorl_item)
        {
            if( DB::table('operatingdocuments')->where('depth', $contorl_item['depth'])->exists() )
            {
                $last_id = 0;
            }
            else
            {
                $operatingDocument = new Operatingdocument();
                $operatingDocument->depth = $contorl_item['depth'];
                $operatingDocument->save();

                $last_id = $operatingDocument->id;
            }
        }

        return $last_id;
    }
    /**=================================================
     *
     *  4. evidence_manager 테이블에 INSERT 하기
     *
    ====================================================*/
    public function insert_to_eviece_manager($evidence_last_id)
    {
        $evidence_managers = $this->getEvidenceManagers();

        foreach($evidence_managers as $evidence_manager)
        {
            $user = DB::table('users')->where('id', $evidence_manager['id'])->first();

            $last_id = DB::table('evidence_manager')->insertGetId([
                "evidence_id" => $evidence_last_id,
                "manager_id" => $evidence_manager['id'],
                "manager_name" => $user->name
            ]);
        }

        return $last_id;
    }
    /**=================================================
     *
     *  5. 증적 담당자 textarea에 뿌릴 데이터 구하기
     *
    ====================================================*/
    public function get_evidence_manager_names($evidence_managers)
    {
        $selected_user_names = DB::table('users')->whereIn('id', $evidence_managers)->pluck('name');

        return $selected_user_names;
    }
    /**=================================================
     *
     *  6. 통제항목 선택된거 display를 위해서
     *
    ====================================================*/
    public function get_selected_control_items($control_items)
    {
        $selected_control_items = DB::table('ismsp3s')->whereIn('depth', $control_items)->get();

        return $selected_control_items;
    }
    /**=================================================
     *
     *  팝업 통제항목 관리체계 리스트
     *
    ====================================================*/
    public function get_tabs()
    {
        $control_tabs = Ismsp3::all();

        return $control_tabs;
    }
    /**=================================================
     *
     *  SETTER, GETTER
     *
    ====================================================*/
    public function getCompanyId()
    {
        return $this->company_id;
    }

    public function setCompanyId($company_id)
    {
        $this->company_id = $company_id;
        return $this;
    }

    public function getStandardId()
    {
        return $this->standard_id;
    }

    public function setStandardId($standard_id)
    {
        $this->standard_id = $standard_id;
        return $this;
    }

    public function getCompletedCODE()
    {
        return $this->completedCODE;
    }

    public function setCompletedCODE($completedCODE)
    {
        $this->completedCODE = $completedCODE;
        return $this;
    }

    public function getEvidenceName()
    {
        return $this->evidence_name;
    }

    public function setEvidenceName($evidence_name)
    {
        $this->evidence_name = $evidence_name;
        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    public function getContorlItems()
    {
        return $this->contorl_items;
    }

    public function setContorlItems($contorl_items)
    {
        $this->contorl_items = $contorl_items;
        return $this;
    }

    public function getEvidenceManagers()
    {
        return $this->evidence_managers;
    }

    public function setEvidenceManagers($evidence_managers)
    {
        $this->evidence_managers = $evidence_managers;
        return $this;
    }

    public function getFieldInspection()
    {
        return $this->field_inspection;
    }

    public function setFieldInspection($field_inspection)
    {
        $this->field_inspection = $field_inspection;
        return $this;
    }

    public function getCycle()
    {
        return $this->cycle;
    }

    public function setCycle($cycle)
    {
        $this->cycle = $cycle;
        return $this;
    }
}