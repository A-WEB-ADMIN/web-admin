<?php

namespace App\Providers;

use App\Repositories\DiagnosisHistoryRepository;
use App\Repositories\DiagnosisStateRepository;
use App\Repositories\RiskJudgementRepository;
use App\Repositories\TemplateRepository;
use App\Repositories\ThreatAnalysisRepository;
use App\Repositories\UserRepository;
use App\Repositories\Evidence_AddtionRepository;
use App\Repositories\Evidence_DetailRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\AssetRepository;
use App\Repositories\ColumnRepository;
use App\Repositories\CompanyRepository;
use App\Repositories\EvidenceRepository;
use App\Repositories\FileRepository;
use App\Repositories\MenuRepository;
use App\Repositories\StandardRepository;
use App\Repositories\TabRepository;
use App\Repositories\OperatingDocumentRepository;
use App\Repositories\DocumentRepository;
use App\Repositories\ApprovalLineRepogitory;
use App\Repositories\ApprovalLineUserConfigRepository;
use App\Repositories\MypageApprovalRepository;
use App\Repositories\DiagnosisRepository;
use App\Repositories\Ismsp4Repository;

class RepositoryServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->singleton(UserRepository::class);

        $this->app->singleton(AssetRepository::class);

        $this->app->singleton(ColumnRepository::class);

        $this->app->singleton(CompanyRepository::class);

        $this->app->singleton(EvidenceRepository::class);

        $this->app->singleton(Evidence_AddtionRepository::class);

        $this->app->singleton(Evidence_DetailRepository::class);

        $this->app->singleton(FileRepository::class);

        $this->app->singleton(MenuRepository::class);

        $this->app->singleton(StandardRepository::class);

        $this->app->singleton(TabRepository::class);

        $this->app->singleton(OperatingDocumentRepository::class);

        $this->app->singleton(DocumentRepository::class);

        $this->app->singleton(ApprovalLineRepogitory::class);

        $this->app->singleton(ApprovalLineUserConfigRepository::class);
        
        $this->app->singleton(MypageApprovalRepository::class);

        $this->app->singleton(DiagnosisRepository::class);

        $this->app->singleton( DiagnosisStateRepository::class );

        $this->app->singleton( Ismsp4Repository::class );

        $this->app->singleton(DiagnosisHistoryRepository::class);

        $this->app->singleton(TemplateRepository::class);

        $this->app->singleton(ThreatAnalysisRepository::class);

        $this->app->singleton(RiskJudgementRepository::class);


    }


    public function boot()
    {
        //
    }
}
