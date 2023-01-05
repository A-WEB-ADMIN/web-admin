<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evidence extends Model
{
    protected $table = "evidences";

    protected $fillable = [
        "company_id",
        "standard_id",
        "CODE",
        "subject",
        "content"
    ];

    /*=============================================
     *
     *  ==> [방향]
     *
     *  private $ismsp3s
     *
     *  @ManyToMany
     *
     =============================================*/
     public function ismsp3s()
     {
         return $this->belongsToMany(Ismsp3::class, 'evidence_ismsp3','evidence_id','ismsp3_id');
     }
    /*=============================================
     *
     *  ==> [방향]
     *
     *  private $evidenceManager
     *
     *  @OneToMany
     *
     =============================================*/
     public function evidenceManagers()
     {
         return $this->hasMany(EvidenceManager::class, 'evidence_id', 'id');
     }
    /*=============================================
     *
     *  ==> [방향]
     *
     *  private $document
     *
     *  @OneToMany
     *
     =============================================*/
     public function document()
     {
        return $this->hasOne(Document::class, 'evidence_id', 'id');
     }

}
