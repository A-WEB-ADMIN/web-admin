<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateAssetView extends Migration
{
    public function up()
    {
        DB::statement( $this->createView() );
    }

    public function down()
    {
        DB::statement( $this->dropView() );
    }

    private function createView()
    {
        return "
            CREATE VIEW asset_view AS
                
                SELECT tab, status, type, code, manager, admin, department
                
                FROM asset_servers 
                
                UNION
                
                SELECT tab, status, type, code, manager, admin, department
                
                FROM asset_dbs
        ";
    }

    private function dropView()
    {
        return "
            DROP VIEW IF EXISTS `asset_view`;
        ";
    }
}
