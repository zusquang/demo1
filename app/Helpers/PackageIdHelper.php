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

            return self::format($first, $second, $third);
        }

        return self::format(1, 1, 1);
    }

    private static function format($first, $second, $third)
    {
        return sprintf("%'.02d-%'.03d-%'.04d", $first, $second, $third);
    }
}
