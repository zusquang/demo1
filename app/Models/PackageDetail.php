<?php

namespace App\Models;


use App\Helpers\PackageIdHelper;

class PackageDetail extends BaseModel
{
    protected $table = 'package_details';
    protected $fillable = [
        'package_id',
        'name',
        'price',
        'quantity',
        'weight',
    ];

    public function getLastPackageId()
    {
        return $this->orderBy('id', 'desc')->first();
    }

    public function beforeSave()
    {
        $lastPackageId = $this->getLastPackageId();
        $newPackageId = PackageIdHelper::generatePackageId($lastPackageId);
        $this->package_id = $newPackageId;
    }
}
