<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personajes')->insert([
            'name' => 'Aragorn',
            'movie_series' => 'El Señor de los Anillos',
            'picture' => 'aragorn.jpg',
            'general_description' => 'Legitimo heredero de Gondor y Arnor, ayuda a luchar contras las fuerzas de Sauron y se te
                                        termina volviendo el legítimo Rey.'
        ]);
        DB::table('personajes')->insert([
            'name' => 'Grogu',
            'movie_series' => 'The Mandalorian',
            'picture' => 'grogu.jpg',
            'general_description' => 'Sobreviviente de la orden 66, se encuentra con un mandaloriano que lo ayudará a buscar a los suyos.'
        ]);
    }
}
