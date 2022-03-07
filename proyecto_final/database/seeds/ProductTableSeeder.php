<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Products;

class ProductTableSeeder extends Seeder {

	/**
	 * Run the Products table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$data = array(
			[
				'name' 			=> 'DON QUIJOTE DE LA MANCHA',
				'author' 		=> 'Miguel de Cervantes',
				'description' 	=> 'El ingenioso hidalgo Don Quijote de la Mancha, tal y como fue titulada esta obra cuando se publicó su primera parte allá por 1605, es la novela que convirtió a Miguel de Cervantes Saavedra (1547-1616) en una de las máximas figuras de la literatura española. Esta obra es considerada la primera verdaderamente antirromance, por la forma en que entre sus líneas es desmitificada la tradición caballeresca.',
				'extract' 		=> 'Autor: Miguel de Cervantes',
				'price' 		=> 40.000,
				'image' 		=> 'https://www.65ymas.com/uploads/s1/19/69/05/9788466236645_1_621x621.jpeg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'EL PRINCIPITO',
				'author' 		=> 'Antoine de Saint-Exupery',
				'description' 	=> 'El Principito es una fábula infantil disfrutada por niños y adultos por igual. Publicada por primera vez en 1943, la novela ha sido traducida a más de 250 idiomas, incluida una versión en braille. También es uno de los libros más vendidos en el mundo después de La Biblia y El capital, de Karl Marx.',
				'extract' 		=> 'Autor: Antoine de Saint-Exupery',
				'price' 		=> 38.900,
				'image' 		=> 'https://panamericana.vteximg.com.br/arquivos/ids/322834-1600-1600/el-principito-9789807716161.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'CIEN AÑOS DE SOLEDAD',
				'author' 		=> 'Gabriel García Márquez',
				'description' 	=> 'En 2007, coincidiendo con el octogésimo cumpleaños de Gabriel García Márquez, la Real Academia Española y la Asociación de Academias de la Lengua Española prepararon esta edición conmemorativa de Cien años de soledad publicada por Alfaguara. Se trata de la última versión que revisó y corrigió personalmente el autor de este clásico contemporáneo sin igual en nuestra lengua.',
				'extract' 		=> 'Autor: Gabriel García Márquez',
				'price' 		=> 62.000,
				'image' 		=> 'https://panamericana.vteximg.com.br/arquivos/ids/348536-1600-1600/cien-anos-de-soledad-9789585118010.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'LA CADENA',
				'author' 		=> 'Adrian McKinty',
				'description' 	=> 'Un argumento diabólicamente inteligente, un estilo eléctrico y una trama muy original.',
				'extract' 		=> 'Autor: Adrian McKinty',
				'price' 		=> 49.000,
				'image' 		=> 'https://panamericana.vteximg.com.br/arquivos/ids/348894-1600-1600/la-cadena.png',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'EL VISITANTE',
				'author' 		=> 'Stephen King',
				'description' 	=> 'Un niño de once años ha sido brutalmente violado y asesinado. Todas las pruebas apuntan a uno de los ciudadanos más queridos de Flint City: Terry Maitland, entrenador en la liga infantil, profesor de literatura, marido ejemplar y padre de dos niñas.',
				'extract' 		=> 'Autor: Stephen King',
				'price' 		=> 67.000,
				'image' 		=> 'https://panamericana.vteximg.com.br/arquivos/ids/303273-1600-1600/9789585457157.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'PARANORMAL COLOMBIA',
				'author' 		=> 'Mario Mendoza',
				'description' 	=> 'El escritor colombiano que más hondo ha cavado en las tinieblas del alma humana, el narrador de nuestra capacidad para infringir dolor, regresa con un libro sobre los caminos insospechados del conocimiento.',
				'extract' 		=> 'Autor: Mario Mendoza',
				'price' 		=> 39.000,
				'image' 		=> 'https://panamericana.vteximg.com.br/arquivos/ids/205696-1600-1600/paranormal-colombia-1-9789584242082.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'EL CÓDIGO DA VINCI',
				'author' 		=> 'Dan Brown',
				'description' 	=> 'Robert Langdon, experto en simbología, recibe una llamada en mitad de la noche: el conservador del museo del Louvre ha sido asesinado en extrañas circunstancias y junto a su cadáver ha aparecido un desconcertante mensaje cifrado.',
				'extract' 		=> 'Autor: Dan Brown',
				'price' 		=> 34.900,
				'image' 		=> 'https://panamericana.vteximg.com.br/arquivos/ids/346595-1600-1600/el-codigo-da-vinci-9789584240323.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'DOCTOR SUEÑO',
				'author' 		=> 'Stephen King',
				'description' 	=> 'Ahora Danny Torrance, aquel niño aterrorizado del Hotel Overlook, es un adulto alcohólico atormentado por los fantasmas de su infancia. Un día se siente atraído por una ciudad de New Hampshire, donde encontrará trabajo en una residencia de ancianos y donde se apuntará a las reuniones de Alcohólicos Anónimos. En ese lugar le llega la visión de Abra Stone, una niña que necesita su ayuda.',
				'extract' 		=> 'Autor: Stephen King',
				'price' 		=> 44.000,
				'image' 		=> 'https://panamericana.vteximg.com.br/arquivos/ids/337092-1600-1600/doctor-sueno-9789585579286.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			
		);

		products::insert($data);

	}

}