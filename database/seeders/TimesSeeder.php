<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Times;

class TimesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Times::create([
            'nome' => 'Vasco da Gama',
            'sede' => 'Rio de Janeiro',
            'cor' => 'Preto e branco'
        ]);
    }
}
