<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePackageRequest;
use App\Models\PackageDetail;
use App\Services\PackageServiceInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Get all packages
     *
     * @param PackageServiceInterface $packageService
     * @return JsonResponse
     */
    public function index(PackageServiceInterface $packageService)
    {
        $packages = $packageService->getPackages();

        return response()->json([
            'status' => 1,
            'data' => $packages
        ]);
    }

    /**
     * Get package details by package id
     *
     * @param $packageId
     * @param PackageServiceInterface $packageService
     * @return JsonResponse
     */
    public function detail($packageId, PackageServiceInterface $packageService)
    {
        $data = $packageService->getDetail($packageId);
        return response()->json([
            'status' => 1,
            'data' => $data
        ]);
    }

    /**
     * Update a package by id
     *
     * @param PackageDetail $packageDetail
     * @param UpdatePackageRequest $request
     * @param PackageServiceInterface $packageService
     * @return JsonResponse
     */
    public function update(
        PackageDetail $packageDetail,
        UpdatePackageRequest $request,
        PackageServiceInterface $packageService
    ) {
        $status = $packageService->update($packageDetail, $request->all());
        return response()->json([
            'status' => ($status) ? 1 : 0
        ]);
    }
}
