<?php

namespace Database\Seeders;

use App\Models\Resource;
use Illuminate\Database\Seeder;
use App\Models\Story;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stories = Story::Factory(40)->create();

        foreach ($stories as $story) {
            Resource::factory(1)->create([
                'resourceable_id' =>  $story->id,
                'resourceable_type' => 'App\Models\Stories'
            ]);
        }
    }
}
