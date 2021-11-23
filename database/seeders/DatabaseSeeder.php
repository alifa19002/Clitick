<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Event;
use App\Models\Category;
use App\Models\Domisili;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(3)->create();

        User::create([
            'name' => 'admin',
            'username' => 'admin1',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin123'),
            'is_admin' => '1',
            'no_telp' => '972892672872',
            'jk' => 'P',
        ]);

        Category::create([
            'nama_kategori' => 'Webinar'
        ]);
        Category::create([
            'nama_kategori' => 'Lomba'
        ]);
        Category::create([
            'nama_kategori' => 'Konferensi'
        ]);

        Domisili::create([
            'nama_domisili' => 'Jakarta Utara'
        ]);
        Domisili::create([
            'nama_domisili' => 'Yogyakarta'
        ]);
        Domisili::create([
            'nama_domisili' => 'Bandung'
        ]);

        Event::factory(20)->create();
    }
}
