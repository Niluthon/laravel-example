<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Shop;

class ProductShopPivotSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $products = Product::all();

        Shop::all()->each(function ($shop) use ($products){
            $shop->products()->attach(
                $products->random(rand(1,4))->pluck('id')->toArray()
            );
        });
    }
}
