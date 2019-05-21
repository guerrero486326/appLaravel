<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
        	'Alimentación',
        	'Transporte',
        	'Arriendo',
        	'Energía Eléctrica',
        	'Acueducto',
        	'Internet',
        	'Teléfono',
        	'Televisión',
        	'Netflix',
        	'Ropa',
        	'celulares',
        	'youtube'
        ];

        foreach ($names as $name) {
        	$category = \App\Category::create(['name'=>$name]);
        }
    }
}
