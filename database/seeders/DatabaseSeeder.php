<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kategori;
use App\Models\Level;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Level::create([
            'nm_level' => 'admin'
        ]);

        Level::create([
            'nm_level' => 'user'
        ]);

        Kategori::create([
            'nm_kategori' => 'buket bunga'
        ]);

        Kategori::create([
            'nm_kategori' => 'buket boneka'
        ]);

        Kategori::create([
            'nm_kategori' => 'buket uang'
        ]);

        Kategori::create([
            'nm_kategori' => 'buket makanan'
        ]);

        User::create([
            'name'=>'salma',
            'email'=>'salma@gmail.com',
            'levels_id' =>1,
            'password'=>bcrypt('1234')
        ]);

        User::create([
            'name'=>'salma',
            'email'=>'sal@gmail.com',
            'levels_id' =>2,
            'password'=>bcrypt('123')
        ]);

        Produk::create([
            'name' =>'buket mawar',
            'kategori' => 'buket bunga',
            'harga'=> 20000,
            'stok'=> 50,
            'gambar' => ''
        ]);
    }
}
