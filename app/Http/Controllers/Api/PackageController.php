<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\PackageServiceInterface;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index(PackageServiceInterface $packageService){
        $packages = $packageService->getPackages();

        return response()->json([
            'status' => 1,
            'data' => $packages
        ]);
    }

    public function detail($packageId, PackageServiceInterface $packageService){
        $data = $packageService->getDetail($packageId);
        return response()->json([
            'status' => 1,
            'data' => $data
        ]);
    }
}
