<?php


namespace App\Services;


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
}
