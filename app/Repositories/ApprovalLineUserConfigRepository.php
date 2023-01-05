<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class ApprovalLineUserConfigRepository
{
    protected $user;

    public function __construct()
    {
        $this->user = auth()->user();
    }

    public function is_exist_users()
    {
        $result = DB::table('approval_lines_user_config')->where('configed_user_id', $this->user->id)->exists();

        return $result;
    }

    public function get_approval_lines_user_config()
    {
        $result = DB::table('approval_lines_user_config')->get();

        return $result;
    }

    public function insert_to_approval_line_user_config($right_users)
    {
        $exist =DB::table('approval_lines_user_config')->where('configed_user_id', $this->user->id)->exists();

        if($exist)
        {
            DB::table('approval_lines_user_config')->where('configed_user_id', $this->user->id)->delete();

            foreach($right_users as $right_user)
            {
                $last_id = DB::table('approval_lines_user_config')->insertGetId([
                    "configed_user_id" => $this->user->id,
                    "receiver_id" => $right_user['id'],
                    "receiver_name" => $right_user['name']
                ]);

            }
        }
        else
        {
            foreach($right_users as $right_user)
            {
                $last_id = DB::table('approval_lines_user_config')->insertGetId([
                    "configed_user_id" => $this->user->id,
                    "receiver_id" => $right_user['id'],
                    "receiver_name" => $right_user['name']
                ]);

            }
        }

        return $last_id;
    }


}