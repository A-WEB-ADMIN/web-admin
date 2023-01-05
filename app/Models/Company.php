<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;

class Company extends Model
{
    use HasRelationships;

    protected $table = "companies";

    protected $fillable = [
        'code',
        'name'
    ];

    /**=======================================================
     *
     *  <== [방향]
     *
     *  private $users
     *  @ManyToMany
     *
    ========================================================*/
    public function users()
    {
        return $this->belongsToMany(User::class, 'company_user');
    }
    /**=======================================================
     *
     *  ==> [방향]
     *
     *  private $tabs
     *  @ManyToMany
     *
    ========================================================*/
    public function tabs()
    {
        return $this->belongsToMany(Tab::class, 'tab_company');
    }
    /**>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
     *
     *  ==> [ 방향 Through ]
     *
     *  private $columns
     *  @ManyToManyThrough
     *
    >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>*/
    public function columns()
    {
        return $this->hasManyDeep(Column::class, ['tab_company', Tab::class, 'column_tab']);
    }






}


