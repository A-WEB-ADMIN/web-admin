<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ColumnTab extends Model
{
    protected $fillable = [
        'column_id',
        'tab_id',
        'company_id'
    ];

    /**
     *  private $column
     *  @ManyToOne
     */
    public function column()
    {
        return $this->belongsTo(Column::class);
    }

}
