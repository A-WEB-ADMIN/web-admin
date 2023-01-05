<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiagnosisHistory extends Model
{
    protected $fillable = [
        'ismsp4_id',
        'company_id',
        'type',
        'depth',
        'version',
        'explanation',
        'grade'
    ];

    /**=======================================================
     *
     *  ==> [방향]
     *
     *  private $threatgrades
     *  @OneToMany
     *
    ========================================================*/
    public function threatgrades()
    {
        return $this->hasMany(Threatgrade::class);
    }


}
