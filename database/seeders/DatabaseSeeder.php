<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Event;
use App\Models\Category;
use App\Models\Domisili;
use Illuminate\Database\Seeder;

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
