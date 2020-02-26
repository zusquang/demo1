<?php


namespace App\Helpers;


/**
 * Class PackageIdHelper
 * @package App
 */
class PackageIdHelper
{
    public static function generatePackageId($lastPackageId)
    {
        if (!empty($lastPackageId)) {
            list($first, $second, $third) = explode('-', $lastPackageId);
            $third += 1;

            if ($third > 9999) {
                $third = '0001';
                $second += 1;
            }
            if ($second > 999) {
                $second = '001';
                $first += 1;
            }

            return "{$first}-{$second}-{$third}";
        }

        return "01-001-0001";
    }
}
