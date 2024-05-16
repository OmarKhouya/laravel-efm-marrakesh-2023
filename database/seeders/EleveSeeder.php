<?php

namespace Database\Seeders;

use App\Models\Eleve;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Eleve::factory()->count(10)->create();
        Eleve::create([
            'club_id' => 1,
            'nom' => 'test',
            'prenom' => 'test',
        ]);
    }
}
