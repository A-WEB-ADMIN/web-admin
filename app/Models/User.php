<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, HasRelationships;

    protected $fillable = [
        'type',
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
     *
     *  ==> [ 방향 ]
     *
     *  역할 private $roles
     *  @ManyToMany
     *
    @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    /**-----------------------------
     * 
     *  @재활용 Relation roles()
     * 
     ------------------------------*/
    public function hasAnyRoles($roles)
    {
        if( $this->roles()->whereIn('name', $roles)->first() )
        {
            return true;
        }

        return false;
    }
    /**------------------------------
     *
     *  @재활용 Relation roles()
     *
     -------------------------------*/
    public function hasRole($role)
    {
        if( $this->roles()->where('name', $role)->first() )
        {
            return true;
        }

        return false;
    }

















    /**@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
     *
     *  ==> [ 방향 ]
     *
     *  회사 private $companies
     *  @ManyToMany
     *
    @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    public function companies()
    {
        return $this->belongsToMany(Company::class);
    }

    public function hasAnyCompany($company_id)
    {
        return $this->companies()->where('id', $company_id)->first();
    }


















    /**=======================================================
     *
     *  ==> [ 방향 Through ]
     *
     *  표준 private $standards
     *  @ManyToManyThrough
     *
    ========================================================*/
    public function standards()
    {
        return $this->hasManyDeep(Standard::class, ['company_user', Company::class, 'standard_company']);
    }

    /**=======================================================
     *
     *  ==> [ 방향 Through ]
     *
     *  탭 private $tabs
     *  @ManyToManyThrough
     *
    ========================================================*/
    public function tabs()
    {
        return $this->hasManyDeep(Tab::class, ['company_user', Company::class, 'tab_company']);
    }

    public function tabs_is_display()
    {
        $result = $this->tabs()->where('is_display', true)->get();

        //dd($result);

        return  $result;
    }

    public function tabs_is_exists()
    {
        $arr = $this->tabs()->where('is_display', true)->get()->toArray();

        $result = sizeof($arr);

        if($result == 0)
        {
            $exist = false;
        }
        else
        {
            $exist = true;
        }

        return $exist;
    }
    /**=======================================================
     *
     *  ==> [ 방향 Through ]
     *
     *  칼럼 private $columns
     *  @ManyToManyThrough
     *
    ========================================================*/
    public function columns()
    {
        return $this->hasManyDeep(Column::class, ['company_user', Company::class, 'tab_company', Tab::class, 'column_tab']);
    }

    public function columns_is_exists()
    {
        $arr = $this->columns()->get()->toArray();

        $size_of_arr = sizeof($arr);

        if($size_of_arr == 0)
        {
            $exist = false;
        }
        else
        {
            $exist = true;
        }

        return $exist;
    }




























}
