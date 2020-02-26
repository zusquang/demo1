<?php


namespace App\Services;


use App\Models\PackageDetail;

/**
 * Interface PackageServiceInterface
 * @package App\Services
 */
interface PackageServiceInterface
{
    /**
     * Get all packages
     *
     * @return mixed
     */
    public function getPackages();

    /**
     * Get details of a package
     *
     * @param $packageId
     * @return mixed
     */
    public function getDetail($packageId);

    /**
     * Update package detail
     *
     * @param PackageDetail $packageDetail
     * @param $data
     * @return mixed
     */
    public function update(PackageDetail $packageDetail, $data);
}
