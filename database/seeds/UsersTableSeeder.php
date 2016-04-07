<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'correo@correo.es',
            'is_admin' => 1,
            'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
            'name' => 'Usuario',
            'email' => 'correo2@correo.es',
            'is_admin' => 0,
            'password' => bcrypt('secret'),
        ]);
    }
}
