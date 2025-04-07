<?php

namespace Database\Seeders;

<<<<<<< HEAD
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kategori;
=======
use App\Models\User;
use App\Models\Kategori;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
>>>>>>> 565bb27 (First commit)

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        #Data User
=======
        // User::factory(10)->create();

>>>>>>> 565bb27 (First commit)
        User::create([
            'nama' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '0812345678901',
<<<<<<< HEAD
            'password' => bcrypt('Mantap12345!'),//pasword sebelumnya 'P@55word'
            ]);
            #untuk record berikutnya silahkan, beri nilai berbeda pada nilai: nama, email, hp dengan
            // nilai masing-masing anggota kelompok
            User::create([
            'nama' => 'Sopian Aji',
            'email' => 'sopian4ji@gmail.com',
            'role' => '0',
            'status' => 1,
            'hp' => '081234567892',
            'password' => bcrypt('Mantap12345!'),//pasword sebelumnya 'P@55word'
            ]);

            #Data Kategori
            Kategori::create([
                'nama_kategori' => 'Tahu isi',
            ]);
            Kategori::create([
                'nama_kategori' => 'Bakwan',
            ]);
            Kategori::create([
                'nama_kategori' => 'Tempe',
            ]);
=======
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'nama' => 'sahlan muzaqi',
            'email' => 'shlnmzqlocko@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '081234567892',
            'password' => bcrypt('12345678'),
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
>>>>>>> 565bb27 (First commit)
    }
}
