<?php

use App\Category;
use App\Product;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $catIds = Category::pluck('id')->toArray();
        $products = [];
        $key = 1;

        foreach ($catIds as $catId) {
            for ($i = 1; $i <= 3; $i++) {
                $products[] = [
                    'name' => 'Product_' . $key,
                    'cat_id' => $catId,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ];
                $key ++;
            }
        }

        Product::insert($products);
    }
}
