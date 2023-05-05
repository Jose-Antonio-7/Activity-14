<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tarea2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('media')->insert([
                'name' => 'El Señor de los Anillos',
                'classification' => 'Aventura, Fantasía',
                'date_of_release' => '21/12/2001',
                'general_review' => 'Historia donde los protagonistas buscan destruir el anillo único para evitar la avenida del señor
                                    oscuro Sauron.',
                'seasons' => 'No aplica',
                'personaje_id' => 1,
            ]);
            DB::table('media')->insert([
                    'name' => 'The Mandalorian',
                    'classification' => 'Aventura, Acción, Ciencia Ficción',
                    'date_of_release' => '12/11/2019',
                    'general_review' => 'Un solitario cazarecompensas se encuentra a un niño, cuidando de el y buscando regresarlo con los suyos.',
                    'seasons' => '3',
                    'personaje_id' => 2,
                ]);
    }
}
