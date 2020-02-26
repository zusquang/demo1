<?php

namespace App\Models;

use App\Helpers\PackageIdHelper;

class Package extends BaseModel
{
    protected $table = 'packages';
    protected $fillable = [
        'name',
        'package_id',
        'tracking_number',
        'received_at',
    ];

    public function details()
    {
        return $this->hasMany(PackageDetail::class, 'package_id', 'package_id');
    }

    public function getLastPackageId()
    {
        $lastPackage = $this->orderBy('id', 'desc')->first();

        if (!empty($lastPackage)) {
            return $lastPackage->package_id;
        }

        return null;
    }

    public function beforeSave()
    {
        if (empty($this->package_id)) {
            $lastPackageId = $this->getLastPackageId();
            $newPackageId = PackageIdHelper::generatePackageId($lastPackageId);
            $this->package_id = $newPackageId;
        }
    }

}
