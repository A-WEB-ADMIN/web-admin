<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssetCompany extends Model
{
    protected $fillable = [
        'asset_id',
        'company_id'
    ];

    /**
     *  private $asset
     *  @ManyToOne
     */
    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }

    /**
     *  private $company
     *  @ManyToOne
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }


}
