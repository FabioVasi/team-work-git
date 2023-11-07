<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Card;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cards = [
            [
                "title" => "Dragon Ball",
                "description" => "Goku",
                "rare" => "300"

            ]
        ];

        foreach ($cards as $card) {
            $NewCard = new Card();
            $NewCard->title = $card['title'];
            $NewCard->description = $card['description'];
            $NewCard->rare = $card['rare'];


            //SAVE THE DATA
            $NewCard->save();
        }
    }
}
