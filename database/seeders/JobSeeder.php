<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory(3)->create();

        // Use sequence to determine if job is featured
        // so 50% featured and 50% not featured
        Job::factory(20)->hasAttached($tags)->create(new Sequence([
            'featured' => 'false',
            'schedule' => 'Full Time'
        ], [
            'featured' => 'true',
            'schedule' => 'Part Time'
        ]));
    }
}
