<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Requirement;
class RequirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Requirement::create([
            'name'=>'Edad 3-10(nivel basico)',
         ]);
         Requirement::create([
            'name'=>'Edad 11-18 (nivel intermedio)',
         ]);
         Requirement::create([
            'name'=>'Edad 19 + (nivel avanzado)',
         ]);
    }
}
