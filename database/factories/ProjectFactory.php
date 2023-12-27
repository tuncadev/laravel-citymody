<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
			$project_start = $this->faker->dateTimeBetween($startDate = '-1 year', $endDate = 'now', $timezone = null);
			$project_end = $this->faker->dateTimeBetween($startDate = $project_start, $endDate = '+1 year', $timezone = null);
         return [
					'project_title' => $this->faker->sentence(),
					'project_desc' => $this->faker->sentence(150),
					'project_skills' => implode(",", $this->faker->randomElements(['Actor', 'Musician', 'Model', 'Singer', 'Videographer', 'Photographer', 'Catwalk Model','Actress', 'Sucker'], 3)),
					'project_category' => $this->faker->randomElement(['Film & Tv', 'Music', 'Dance', 'Model', 'Event & Fair', 'Photographer', 'Video', 'Makeup & Stylist']),
					'project_company' => $this->faker->company(),
					'project_start' => $startDate,
					'project_end' => $project_end,
					'project_location' => implode(",", $this->faker->randomElements(['Izmir', 'Ankara', 'Istanbul', 'Mardin', 'Yozgat', 'Odessa', 'Kahramanmaras', 'Konya', 'Gaziantep'], 3))
        ];
    }
}