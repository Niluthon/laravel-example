<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Brand::class,5)->create();
    }
}
