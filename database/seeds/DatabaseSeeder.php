<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Tipo;
use App\Equipamento;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $insertUser = [
            'name' => 'Admin',

            'email' => 'admin@admin.com',

            'email_verified_at' => now(),

            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password

            'remember_token' => 1
        ];

        User::create($insertUser);

        //Tipos
        Tipo::create(['nome'=>'Projetor']);
        Tipo::create(['nome'=>'Caixa de Som']);
        Tipo::create(['nome'=>'Cadeira']);
        Tipo::create(['nome'=>'Microfone']);
        //Equipamentos
        Equipamento::create([
            'nome'=>'Projetor Sala 2',
            'tombamento'=>520,
            'tipo_id' =>'1'
        ]);
        Equipamento::create([
            'nome'=>'Caixa de Som Sala 2',
            'tombamento'=>420,
            'tipo_id' =>'2'
        ]);
        Equipamento::create([
            'nome'=>'Cadeira do L2',
            'tombamento'=>320,
            'tipo_id' =>'3'
        ]);
        Equipamento::create([
            'nome'=>'Microfone da DAEE',
            'tombamento'=>220,
            'tipo_id' =>'4'
        ]);
        
    }
}
