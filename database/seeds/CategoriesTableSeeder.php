<?php

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
        //
        DB::table('categories')->delete();

        $categories = array(
            [
                'id' => 1,
                'title' => 'Arts and Humanities',
                'description' => 'descp',
            ],
            [
                'id' => 2,
                'title' => 'Beauty and Style',
                'description' => 'beauty',
            ],
            [
                'id' => 3,
                'title' => 'Business and Finance',
                'description' => 'business',
            ],
            [
                'id' => 4,
                'title' => 'Computer and Internet',
                'description' => 'Computer',
            ],
            [
                'id' => 5,
                'title' => 'Entertainment and Music',
                'description' => 'Computer Science',
            ],
            [
                'id' => 6,
                'title' => 'Family and Relationships',
                'description' => 'Computer Science',
            ],
            [
                'id' => 7,
                'title' => 'Food and Drink',
                'description' => 'Computer Science',
            ]

        );
        DB::table('categories')->insert($categories);
    }
}
