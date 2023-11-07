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

        foreach ($boardgames as $boardgame) {
            $newBoardGame = new BoardGame();
            $newBoardGame->name = $boardgame['name'];
            $newBoardGame->price = $boardgame['price'];
<<<<<<< HEAD
            $newBoardGame->creator = $boardgame['creator'];
=======
            $newBoardGame->description = $boardgame['description'];
>>>>>>> a8f4599b075790da1895d276d9af95ec1b30048d
            $newBoardGame->save();
        }
    }
}
