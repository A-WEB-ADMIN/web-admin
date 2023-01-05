<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tab extends Model
{
    protected $casts = [
        'is_display' => 'boolean'
    ];

    protected $fillable = [
        'id',
        'tab',
        'tab_korean',
        'explanation',
        'ordering',
        'is_display',
    ];

    /**=======================================================
     *
     *  <== [방향]
     * 
     *  private $companies
     *  @ManyToMany
     *
    ========================================================*/
    public function companies()
    {
        return $this->belongsToMany(Company::class, 'tab_company');
    }

}


