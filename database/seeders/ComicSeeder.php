<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $comics = [
            [
                'title' => 'Superman',
                'description' => 'Descripción del Comic 1',
                'price' => 9.99,
            ],
            [
                'title' => 'Batman',
                'description' => 'Descripción del Comic 2',
                'price' => 12.99,
            ],
            [
                'title' => 'Spiderman',
                'description' => 'Descripción del Comic 2',
                'price' => 10.99,
            ],
        ];

        foreach ($comics as $comic) {
            Comic::create($comic);
        }
    }
}

