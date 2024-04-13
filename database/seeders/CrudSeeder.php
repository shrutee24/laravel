<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CrudModel;

class CrudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        echo "Running CrudSeeder\n"; // Debug message
        CrudModel::factory()->count(20)->create(); 
    }
}
