<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Product::class,350)->create();
    }
}
