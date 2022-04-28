<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Requirements;
class RequirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Requirements::create([
            'name'=>'Edad 3-10(nivel basico)',
         ]);
         Requirements::create([
            'name'=>'Edad 11-18 (nivel intermedio)',
         ]);
         Requirements::create([
            'name'=>'Edad 19 + (nivel avanzado)',
         ]);
    }
}
