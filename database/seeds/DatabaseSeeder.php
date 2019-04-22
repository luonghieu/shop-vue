<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $tables = [
            'categories',
            'products',
            'users'
        ];

        $this->command->info('Truncating existing tables');

        foreach ($tables as $table) {
            DB::statement('TRUNCATE TABLE ' . $table . ' RESTART IDENTITY CASCADE;');
        }
        $this->command->info('Creating seeder data');

        $this->call('UsersTableSeeder');
        $this->call('CategoriesTableSeeder');
        $this->call('ProductsTableSeeder');
    }
}
