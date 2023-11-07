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
                "image" => "https://picsum.photos/200/300"
            ],
            [
                "name" => "Bang",
                "price" => "$19.99",
                "image" => "https://picsum.photos/200/300"
            ],
            [
                "name" => "Chess",
                "price" => "$49.99",
                "image" => "https://picsum.photos/200/300",
            ],
            [
                "name" => "Trivia",
                "price" => "$59.99",
                "image" => "https://picsum.photos/200/300",
            ]
        ];

        foreach($boardgames as $boardgame) {
            $newBoardGame = new BoardGame();
            $newBoardGame->name = $boardgame['name'];
            $newBoardGame->price = $boardgame['price'];
            $newBoardGame->image = $boardgame['image'];

            $newBoardGame->save();
        }
    }
}
