<?php

use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('categories')->truncate();
        Category::create([
            'slug'              => 'internet',
            'title'             => 'برامج إنترنت',
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
