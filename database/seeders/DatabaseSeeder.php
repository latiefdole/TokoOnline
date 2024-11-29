<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Produk;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'nama' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'status' => 1,
            'password' => bcrypt('admin'),
            'hp' => '082292219191',
        ]);
        User::create([
            'nama' => 'Abdul Latif',
            'email' => 'latiefdole@gmail.com',
            'role' => '0',
            'status' => 0,
            'password' => bcrypt('password'),
            'hp' => '089650641822',
        ]);
        User::create([
            'nama' => 'Maulana Malik',
            'email' => 'malik@gmail.com',
            'role' => '0',
            'status' => 1,
            'password' => bcrypt('password'),
            'hp' => '082292219191',
        ]);

        #data kategori
        Kategori::create([
            'nama_kategori' => 'Brownies',
        ]);
        Kategori::create([
            'nama_kategori' => 'Combro',
        ]);
        Kategori::create([
            'nama_kategori' => 'Dawet',
        ]);
        Kategori::create([
            'nama_kategori' => 'Mochi',
        ]);
        Kategori::create([
            'nama_kategori' => 'Wingko',
        ]);

        //data produk
        Produk::create([
            'kategori_id' => 1,
            'user_id' => 1,
            'status' => true,
            'nama_produk' => 'Produk 1',
            'detail' => 'Detail produk 1',
            'harga' => 10000.00,
            'stok' => 50,
            'berat' => 1.2,
            'foto' => 'produk1.jpg',
        ]);

        Produk::create([
            'kategori_id' => 2,
            'user_id' => 1,
            'status' => false,
            'nama_produk' => 'Produk 2',
            'detail' => 'Detail produk 2',
            'harga' => 15000.00,
            'stok' => 30,
            'berat' => 0.8,
            'foto' => 'produk2.jpg',
        ]);

        Produk::create([
            'kategori_id' => 1,
            'user_id' => 2,
            'status' => true,
            'nama_produk' => 'Produk 3',
            'detail' => 'Detail produk 3',
            'harga' => 20000.00,
            'stok' => 20,
            'berat' => 1.5,
            'foto' => 'produk3.jpg',
        ]);

        Produk::create([
            'kategori_id' => 3,
            'user_id' => 1,
            'status' => false,
            'nama_produk' => 'Produk 4',
            'detail' => 'Detail produk 4',
            'harga' => 25000.00,
            'stok' => 10,
            'berat' => 2.0,
            'foto' => 'produk4.jpg',
        ]);

        Produk::create([
            'kategori_id' => 2,
            'user_id' => 2,
            'status' => true,
            'nama_produk' => 'Produk 5',
            'detail' => 'Detail produk 5',
            'harga' => 30000.00,
            'stok' => 5,
            'berat' => 1.1,
            'foto' => 'produk5.jpg',
        ]);
    }
}
