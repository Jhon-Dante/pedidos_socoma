<?php

use Illuminate\Database\Seeder;
use App\Productos;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('productos')->insert([
	    	'nombre'	=> 'Mortadela de Pollo 400gr',
			'código'	=> 'MP400',
			'tipo_peso'	=> 'gr.',
			'peso'		=> '400'
	    ]);

	    \DB::table('productos')->insert([
	    	'nombre'	=> 'Mortadela de Pollo 600gr',
			'código'	=> 'MP600',
			'tipo_peso'	=> 'gr.',
			'peso'		=> '600'
	    ]);

	    \DB::table('productos')->insert([
	    	'nombre'	=> 'Mortadela de Pollo 1kg',
			'código'	=> 'MP1kg',
			'tipo_peso'	=> 'kg.',
			'peso'		=> '1'
	    ]);

	    \DB::table('productos')->insert([
	    	'nombre'	=> 'Salchicas de Pollo',
			'código'	=> 'SP1kg',
			'tipo_peso'	=> 'kg.',
			'peso'		=> '1'
	    ]);
    }
}
