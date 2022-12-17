<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array(
            array('id' => 1, 'title' => 'category one', 'slug' => 'category-one'),
            array('id' => 2, 'title' => 'category two',  'slug' => 'category-two'),
        );

        DB::table('categories')->insert($categories);
    }
}
