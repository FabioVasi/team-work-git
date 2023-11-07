<?php

namespace Database\Seeders;

use App\Models\BoardGame;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BoardGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $boardgames = [
            [
                "name" => "Monopoli",
                "price" => "$29.99"
            ],
            [
                "name" => "Bang",
                "price" => "$19.99"
            ],
            [
                "name" => "Chess",
                "price" => "$49.99"
            ],
            [
                "name" => "Trivia",
                "price" => "$59.99"
            ]
        ];

        foreach($boardgames as $boardgame) {
            $newBoardGame = new BoardGame();
            $newBoardGame->name = $boardgame['name'];
            $newBoardGame->price = $boardgame['price'];
            $newBoardGame->save();
        }
    }
}