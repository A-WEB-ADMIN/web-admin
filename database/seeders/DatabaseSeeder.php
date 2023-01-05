<?php

namespace Database\Seeders;

use App\Models\Templatedefault;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

            /* user */
            UserSeeder::class,
            /* role */
            RoleSeeder::class,
            RoleUserSeeder::class,

            /* permission */
            PermissionSeeder::class,
            PermissionRoleSeeder::class,

            /* company*/
            CompanySeeder::class,
            CompanyUserSeeder::class,
                //AssetCompanySeeder::class,


            PackageSeeder::class,
            PackageCompanySeeder::class,


            LicenseSeeder::class,
            BankaegisecuSeeder::class,
            BankcustomerSeeder::class,
            StorageSeeder::class,


            /* menu */
            MenuSeeder::class,

            /* tab */
                //TabCompanySeeder::class,
            TabDefaultsSeeder::class,
            //TabSeeder::class,

            /* column */
                //ColumnTabSeeder::class,
            ColumnDefaultsSeeder::class,
            //ColumnSeeder::class,

            /* assets */
            //AssetServerSeeder::class,
            AssetDbSeeder::class,
            AssetCumstomSeeder::class,



            /* standard company */
            StandardDefaultSeeder::class,
            StandardSeeder::class,

                StandardCompanySeeder::class,

            /* standard 표준*/
            Ismsp3Seeder::class,
            Ismsp4Seeder::class,
            Iso27001Seeder::class,

            /* code first criterion 기준표 */
            CodeFirstCriterionSeeder::class,

            /* evidence */
            EvidenceSeeder::class,
            FileSeeder::class,
            TemplatedefaultSeeder::class,

            /* 운영명세서 관련 */
            EvidenceIsmsp3Seeder::class,
            OperatingdocumentSeeder::class,


            /* 전자결재 */
            //DocumentSeeder::class,
            //ApprovalLineSeeder::class,



            /* groups */
            //GroupSeeder::class,

            /* Form */
            FormSeeder::class,

            /* 진단 */
            //DiagnosesSeeder::class,
            DiagnosisStateDefaultSeeder::class,
            DiagnosisStateSeeder::class,
            DiagnosisHistorySeeder::class,


            /* threadgrade */
            ThreatgradeSeeder::class,
            AssetgradeSeeder::class,


        ]);
    }
}
