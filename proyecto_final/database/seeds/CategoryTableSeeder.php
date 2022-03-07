<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Category;

class CategoryTableSeeder extends Seeder {

	/**
	 * Run the Categories table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$data = array(
			[
				'name' => 'Libros Nuevos', 
				'author' => 'Gabriel Garcia Marquez', 
				'description' => 'Libros nuevos del autor Gabriel Garcia Marquez.', 
				'type' => 'Novela'
			],
			[
				'name' => 'Libros Usados', 
				'author' => 'Miguel de Cervantes', 
				'description' => 'Libros usados del autor miguel de Cervantes.', 
				'type' => 'Parodia'
			]
		);

		Category::insert($data);

	}
}