<?php


namespace App\Services;


use App\Models\Package;
use App\Models\PackageDetail;

/**
 * Class PackageService
 * @package App
 */
class PackageService implements PackageServiceInterface
{
    /**
     * @var Package
     */
    private $package;

    public function __construct(Package $package)
    {
        $this->package = $package;
    }

    public function getPackages()
    {
        return $this->package->orderBy('created_at', 'desc')->get();
    }

    /**
     * @inheritDoc
     */
    public function getDetail($packageId)
    {
        return $this->package->where('package_id', $packageId)->first()->details;
    }
}
