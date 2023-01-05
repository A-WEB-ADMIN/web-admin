<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name'
    ];

    /*===========================================================
    =
    =   방향 =>
    =
    =   public $permissions
    =
    =   @ManyToMany
    =
    ============================================================*/
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function hasAnyPermission($permission)
    {
        if( $this->permissions()->where('name', $permission)->first() )
        {
            logger("__111_hasAnyPermission:");
            return true;
        }
            logger("__222_hasAnyPermission:");
        return false;
    }





}
