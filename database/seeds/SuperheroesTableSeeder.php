<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuperheroesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('superheroes')->truncate();
        DB::table('superheroes')->insert([
            [
                'nombre'=> 'Simi',
                'poder'=> 'Medico General',
                'creador'=> '666',
                'villano'=> 'wasp',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'nombre'=> 'Dre',
                'poder'=> 'Rap',
                'creador'=> '783487',
                'villano'=> 'Black Adam',
                'created_at'=> now(),
                'updated_at'=> now(),   
            ],
            [
                'nombre'=> 'Dr. Manhatan',
                'poder'=> 'omnipotente',
                'creador'=> '0000000',
                'villano'=> 'Comediante',
                'created_at'=> now(),
                'updated_at'=> now(),
            ]    
        ]);
        //
    }
}
