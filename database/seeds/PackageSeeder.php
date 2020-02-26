<?php

use App\Models\Package;
use App\Models\PackageDetail;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Package::class, 10)->create()->each(function ($package) {
            $package->details()->save(factory(PackageDetail::class)->make());
        });
    }
}
