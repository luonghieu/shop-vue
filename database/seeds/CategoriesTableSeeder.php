<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cats = [];
        for ($i = 1; $i <= 5; $i++) {
            $cats[] = [
                'name' => 'Cat_' . $i,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ];
        }
        Category::insert($cats);
    }
}
