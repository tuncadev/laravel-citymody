<?php

namespace Database\Seeders;

use App\Models\Skills;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
	 /* 
	 
*/
    public function run(): void
    {
			Skills::create(
				[
					'skill_name' => 'Singer',
				 'parent_category_id' => 2, //  Film & TV
				]
			);
			Skills::create(
				[
					'skill_name' => 'Music Group',
				 'parent_category_id' => 2, //  Film & TV
				]
			);
			Skills::create(
				[
					'skill_name' => 'DJ',
				 'parent_category_id' => 2,
				]
			);
			Skills::create(
				[
					'skill_name' => 'Rapper',
				 'parent_category_id' => 2,
				]
			);
			Skills::create(
				[
					'skill_name' => 'Guitarist',
				 'parent_category_id' => 2,
				]
			);
			Skills::create(
				[
					'skill_name' => 'Bass Guitarist',
				 'parent_category_id' => 2,
				]
			);
			Skills::create(
				[
					'skill_name' => 'Pianist',
				 'parent_category_id' => 2,
				]
			);
			Skills::create(
				[
					'skill_name' => 'Editor',
				 'parent_category_id' => 2,
				]
			);
			Skills::create(
				[
					'skill_name' => 'Composer & Songwriter',
				 'parent_category_id' => 2,
				]
			);

			Skills::create(
				[
					'skill_name' => 'Music Producer',
				 'parent_category_id' => 2,
				]
			);
			Skills::create(
				[
					'skill_name' => 'Music Teacher',
				 'parent_category_id' => 2,
				]
			);
			Skills::create(
				[
					'skill_name' => 'Solist',
				 'parent_category_id' => 2,
				]
			);
			Skills::create(
				[
					'skill_name' => 'Sound Specialist',
				 'parent_category_id' => 2,
				]
			);
			Skills::create(
				[
					'skill_name' => 'Vocalist',
				 'parent_category_id' => 2,
				]
			);
			
    }
}