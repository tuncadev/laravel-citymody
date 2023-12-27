<?php

namespace Database\Seeders;

use App\Models\ProjectCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
		public function run()
    {
        // \App\Models\User::factory(10)->create();

        ProjectCategory::create(
					[
            'category_name' => 'Film & TV',
           'parent_category_id' => '',
					]
				);
				ProjectCategory::create(
					[
            'category_name' => 'Music',
           'parent_category_id' => '',
					]
				);
				ProjectCategory::create(
					[
            'category_name' => 'Dance',
           'parent_category_id' => '',
					]
				);
				ProjectCategory::create(
					[
            'category_name' => 'Model',
           'parent_category_id' => '',
					]
				);
				ProjectCategory::create(
					[
            'category_name' => 'Event & Fair',
           'parent_category_id' => '',
					]
				);
				ProjectCategory::create(
					[
            'category_name' => 'Photographer',
           'parent_category_id' => '',
					]
				);
				ProjectCategory::create(
					[
            'category_name' => 'Video',
           'parent_category_id' => '',
					]
				);
				ProjectCategory::create(
					[
            'category_name' => 'Makeup & Stylist',
           'parent_category_id' => '',
					]
				);
    }
}