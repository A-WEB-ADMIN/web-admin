<?php

namespace App\Repositories;

use App\Models\Template;
use App\Models\Templatedefault;
use Illuminate\Support\Facades\DB;

class TemplateRepository
{

    /*===============================================================
    =
    =  1. templates
    =
    ================================================================*/
    public function get_templates()
    {
        $templates = Templatedefault::all();
        return $templates;
    }

    /*===============================================================
    =
    =  2. template
    =
    ================================================================*/
    public function get_template($evidence_id)
    {
        $template = Template::where('evidence_id', $evidence_id)->first();

        //dd($template);

        return $template;
    }

    /*===============================================================
    =
    =  2. template_defaults
    =
    ================================================================*/
    public function get_template_defaults()
    {
        $templatedefailts = Templatedefault::all();

        //dd($templatedefailts);

        return $templatedefailts;
    }
    /*===============================================================
    =
    =  2. template_default
    =
    ================================================================*/
    public function get_template_default($templatedefault_id)
    {
        $template_defailt = Templatedefault::find($templatedefault_id)->first();

        return $template_defailt;
    }

    /*===========================================================
    =
    =  4. insert_to_template
    =
    ============================================================*/
    public function insert_to_template($company_id, $evidence_id, $name, $mime , $file_blob)
    {

        $last_id = DB::table('templates')->insertGetId([
            "company_id" => $company_id,
            "evidence_id" => $evidence_id,
            "name" => $name,
            "mime" => $mime,
            "file_blob" => $file_blob
        ]);

        return $last_id;
    }
    /*===========================================================
    =
    =  5. update_to_template
    =
    ============================================================*/
    public function update_to_template($template_id, $file_blob)
    {
        $result = DB::table('templates')->where('id', $template_id)->update([
            "file_blob" => $file_blob
        ]);

        return $result;
    }
    /*===========================================================
    =
    =  7. is_saved_template
    =
    ============================================================*/
    public function is_saved_template($company_id, $evidence_id)
    {
        $result = Template::where('company_id', $company_id)->where('evidence_id', $evidence_id)->exists();

        //dd($result);

        return $result;
    }


}