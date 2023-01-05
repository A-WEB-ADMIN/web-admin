<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{


    /*=======================================================
=
=  사용자 리스트
=
=======================================================*/
    public function list()
    {
        $users = User::all();
        return view('setting.user.list')->with('users', $users);
    }

    public function detail()
    {
        $roles = Role::all();
        return view('setting.user.detail')->with('roles', $roles);
    }

    public function update(Request $req)
    {
        $user_id = $req->input('user_id');
        $role_id = $req->input('role_id');

        DB::table('users')->where('id', $user_id)->update([
            "role_id" => $role_id
        ]);

        return "update";
    }
    /*=======================================================
    =
    =  권한분류 추가 화면단
    =
    =======================================================*/
    public function insert_permission_form()
    {
        return view('setting.user.insert_permission_form');
    }
    /*=======================================================
    =
    =  권한분류 추가 INSERT
    =
    =======================================================*/
    public function insert_permission(Request $req)
    {
        $role_name = $req->input('role-name');

        $permissions = $req->input('permissions');

        $permissions = array_filter($permissions);
        /*====================================
        =
        =====================================*/
        $role = new Role();
        $role->name = $role_name;
        $role->save();
        /*====================================
        =
        =====================================*/
        $role->permissions()->attach($permissions);

        return redirect('setting/user/list');
    }





    /*=======================================================
    =
    =  권한분류 수정 화면단
    =
    =======================================================*/
    public function update_permission_form()
    {
        $asset = Permission::where('type', 'asset')->first();

        //dd($asset);

        return view('setting.user.update_permission_form')->with('asset', $asset);
    }
    /*=======================================================
    =
    =  권한분류 수정 UPDATE
    =
    =======================================================*/
    public function update_permission(Request $req)
    {
        $permission_id = $req->input('permission_id');

        if( $req->has('edit-asset') )
        {
            $edit_asset = $req->input('edit-asset');
        }
        else
        {
            $edit_asset = '';
        }

        Permission::where('id', $permission_id)->update([
            "name" => $edit_asset
        ]);


        return "update";
    }
}
