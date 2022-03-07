<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
            'name' => 'Carlos',
            'last_name'  => 'Osorio',
            'email'  => 'osoriocarlos43@gmail.com',
            'user'  => 'carlososorio',
            'password' => \Hash::make('123456'),
            'type'  => 'admin',
            'active'  => 1, 
            'address'  => 'Carrera 11, numero 19-59',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime

            ],

            [
                'name' => 'Erick',
                'last_name'  => 'Jimenez',
                'email'  => 'eriklomejorcito@gmail.com',
                'user'  => 'erickciyo',
                'password'  => \Hash::make('eriklomejorcito'),
                'type'  => 'user',
                'active'  => 1, 
                'address'  => 'En algún lugar del planeta',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
        
            ],
                
            [
            'name' => 'Manuel',
            'last_name'  => 'Araujo',
            'email'  => 'araujomanuelsaxo@hotmail.com',
            'user'  => 'manuel1995',
            'password'  => \Hash::make('88888888'),
            'type'  => 'admin',
            'active'  => 1, 
            'address'  => 'Cra 31a #66-10  Barrio Fátima',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime

            ],

        );

        User::insert($data);
    }
}
