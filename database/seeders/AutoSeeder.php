<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Auto;




class AutoSeeder extends Seeder
{

   
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $autos = [
            [
                "model" => "Mercedes",
                "description" => "Auto tedesca",
            ]
            ];



            foreach ($autos as $auto) {
                $listaAuto = new Auto();
                $listaAuto ->model = ($auto['model']);
                $listaAuto ->description = ($auto['description']);
                $listaAuto->save();
            }
    

    }
}
