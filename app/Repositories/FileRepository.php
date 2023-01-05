<?php

namespace App\Repositories;

use App\Models\File;

class FileRepository
{

    /*
     *
     *
     */
    public function __construct()
    {

    }
    /**=================================================
     *
     *  1. PDF 경로 INSERT
     *
     =================================================*/
    public function insert_evidence_id_and_PDFPath($company_id, $evidence_id, $symbolic_url, $size)
    {

        $file = new File();
        $file->company_id = $company_id;
        $file->evidence_id = $evidence_id;
        $file->type = 'PDF';
        $file->path = $symbolic_url;
        $file->size = $size;
        $file->upload_at = now();
        $file->save();

        return $file->id;
    }
    /**=================================================
     *
     *  2. PDF 경로 얻기
     *
    =================================================*/
    public function get_pdfPath(string $evidence_id)
    {
        if( File::where('evidence_id', $evidence_id)->first() )
        {
            $pdf_path = File::where('evidence_id', $evidence_id)->first()->path;
        }
        else
        {
            $pdf_path = "";
        }

        return $pdf_path;
    }


}