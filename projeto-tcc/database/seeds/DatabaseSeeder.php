<?php

use Illuminate\Database\Seeder;
use App\Entities\User;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'cpf'           => '17123373723',
            'name'          => 'Thiago',
            'phone'         => '34434343434',
            'birth'         => '1980-10-01',
            'gender'        => 'M',

            'rua'           => 'Avenida Duque de Caxias',
            'cep'           => '25070070',
            'numero'        => '175',
            'municipio'     => 'Duque de caxias',
            'estado'        => 'Rio de janeiro',

            // 'titular'       => 'thiago',
            // 'ncartao'       => '1232323232',
            // 'dtvalidade'    => '12-03-1993',
            // 'bandeira'      => 'master',
            'funcao'        => 'cuidador',
            'descri'        => 'Sou um profissional de 3 anos de experiência',
            'salario'       => '2000',
            // 'terms'         => true,
            'cobranca'      => 'mensalista',
            'email'         => 'thiago@sistema.com',
            'password'      => env("PASSWORD_HASH") ? bcrypt('123456'): 123456,
        ]);




        // $this->call(UsersTableSeeder::class);
    }
}
