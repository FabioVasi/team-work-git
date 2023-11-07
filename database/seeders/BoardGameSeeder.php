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
                "price" => "$29.99",
                "description" => "wasd"
            ],
            [
                "name" => "Bang",
                "price" => "$19.99",
                "description" => "wasd"
            ],
            [
                "name" => "Chess",
                "price" => "$49.99",
                "description" => "wasd"
            ],
            [
                "name" => "Trivia",
                "price" => "$59.99",
                "description" => "wasd"
            ]
        ];

        foreach($boardgames as $boardgame) {
            $newBoardGame = new BoardGame();
            $newBoardGame->name = $boardgame['name'];
            $newBoardGame->price = $boardgame['price'];
            $newBoardGame->description = $boardgame['description'];
            $newBoardGame->save();
        }
    }
}
