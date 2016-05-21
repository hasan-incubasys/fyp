<?php

use Illuminate\Database\Seeder;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sub_categories')->delete();

        $sub_categories = array(            [
            'id' => 1,
            'title' => 'Books and Authors',
            'description' => 'IT',
            'cat_id' => 1
        ],
            [
                'id' => 2,
                'title' => 'History',
                'description' => 'beauty',
                'cat_id' => 1
            ],
            [
                'id' => 3,
                'title' => 'Poetry',
                'description' => 'entertainment',
                'cat_id' => 1
            ],
            [
                'id' => 4,
                'title' => 'Hair',
                'description' => 'Computer Science',
                'cat_id' => 2
            ],
            [
                'id' => 5,
                'title' => 'Makeup',
                'description' => 'Computer Science',
                'cat_id' => 2
            ],
            [
                'id' => 6,
                'title' => 'Fashion and Accessories',
                'description' => 'Computer Science',
                'cat_id' => 2
            ],
            [
                'id' => 7,
                'title' => 'Careers and Employment',
                'description' => 'IT',
                'cat_id' => 3
            ],
            [
                'id' => 8,
                'title' => 'Insurance',
                'description' => 'beauty',
                'cat_id' => 3
            ],
            [
                'id' => 9,
                'title' => 'Taxes',
                'description' => 'entertainment',
                'cat_id' => 3
            ],
            [
                'id' => 10,
                'title' => 'Hardware',
                'description' => 'Computer Science',
                'cat_id' => 4
            ],
            [
                'id' => 11,
                'title' => 'Computer Networking',
                'description' => 'Computer Science',
                'cat_id' => 4
            ],
            [
                'id' => 12,
                'title' => 'Programming and Design',
                'description' => 'Computer Science',
                'cat_id' => 4
            ],
            [
                'id' => 13,
                'title' => 'Celebrities',
                'description' => 'IT',
                'cat_id' => 5
            ],
            [
                'id' => 14,
                'title' => 'Movies',
                'description' => 'beauty',
                'cat_id' => 5
            ],
            [
                'id' => 15,
                'title' => 'Music',
                'description' => 'entertainment',
                'cat_id' => 5
            ],
            [
                'id' => 16,
                'title' => 'Family',
                'description' => 'Computer Science',
                'cat_id' => 6
            ],
            [
                'id' => 17,
                'title' => 'Friends',
                'description' => 'Computer Science',
                'cat_id' => 6
            ],
            [
                'id' => 18,
                'title' => 'Marriage and Divorce',
                'description' => 'Computer Science',
                'cat_id' => 6
            ],
            [
                'id' => 19,
                'title' => 'Beer, Wine & Spirits',
                'description' => 'entertainment',
                'cat_id' => 7
            ],
            [
                'id' => 20,
                'title' => 'Cooking and Recipes',
                'description' => 'Cooking and Recipes',
                'cat_id' => 7
            ],
            [
                'id' => 21,
                'title' => 'Non-Alcoholic Drinks',
                'description' => 'Computer Science',
                'cat_id' => 7
            ]
        );
        DB::table('sub_categories')->insert($sub_categories);
    }
}
