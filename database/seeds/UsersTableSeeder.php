<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'name'      => 'administrador',
          'email'     => 'gerenciati@ead.unimontes.br',
          'password'  => bcrypt('Ise20@10%+')
        ]);
        User::create([
          'name'      => 'joaog',
          'email'     => 'joao.vitor@ead.unimontes.br',
          'password'  => bcrypt('84219200')
          
        ]);
    }
}
