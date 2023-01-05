<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TabCompany extends Model
{
    protected $fillable = [
        'tab_id',
        'company_id'
    ];

    /**
     *  private $tab
     *  @ManyToOne
     */
    public function tab()
    {
        return $this->belongsTo(Tab::class);
    }



}
