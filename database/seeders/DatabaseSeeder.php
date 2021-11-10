<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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

        // User::create([
        //     'name' => 'Putri Ainur Fitri',
        //     'email' => 'putriaf@gmail.com',
        //     'password' => bcrypt('putri')
        // ]);

        // User::create([
        //     'name' => 'Alifa Hafida',
        //     'email' => 'alifa@gmail.com',
        //     'password' => bcrypt('alifa')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, dolore!',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, dignissimos. Nisi, natus quia beatae unde iusto, ut iure asperiores eveniet odio et odit consequuntur aliquid exercitationem quam incidunt non quo excepturi rem commodi ducimus dolorum quasi ad nihil fuga. Ad qui ratione nam mollitia temporibus, harum, omnis enim nihil eum ut atque libero aut saepe ipsum animi pariatur corrupti exercitationem iusto dolore ipsa. Velit dolorem error magnam explicabo recusandae eaque impedit voluptates placeat molestiae dolore. Exercitationem tenetur illo earum a.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, dolore!',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, dignissimos. Nisi, natus quia beatae unde iusto, ut iure asperiores eveniet odio et odit consequuntur aliquid exercitationem quam incidunt non quo excepturi rem commodi ducimus dolorum quasi ad nihil fuga. Ad qui ratione nam mollitia temporibus, harum, omnis enim nihil eum ut atque libero aut saepe ipsum animi pariatur corrupti exercitationem iusto dolore ipsa. Velit dolorem error magnam explicabo recusandae eaque impedit voluptates placeat molestiae dolore. Exercitationem tenetur illo earum a.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, dolore!',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, dignissimos. Nisi, natus quia beatae unde iusto, ut iure asperiores eveniet odio et odit consequuntur aliquid exercitationem quam incidunt non quo excepturi rem commodi ducimus dolorum quasi ad nihil fuga. Ad qui ratione nam mollitia temporibus, harum, omnis enim nihil eum ut atque libero aut saepe ipsum animi pariatur corrupti exercitationem iusto dolore ipsa. Velit dolorem error magnam explicabo recusandae eaque impedit voluptates placeat molestiae dolore. Exercitationem tenetur illo earum a.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, dolore!',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, dignissimos. Nisi, natus quia beatae unde iusto, ut iure asperiores eveniet odio et odit consequuntur aliquid exercitationem quam incidunt non quo excepturi rem commodi ducimus dolorum quasi ad nihil fuga. Ad qui ratione nam mollitia temporibus, harum, omnis enim nihil eum ut atque libero aut saepe ipsum animi pariatur corrupti exercitationem iusto dolore ipsa. Velit dolorem error magnam explicabo recusandae eaque impedit voluptates placeat molestiae dolore. Exercitationem tenetur illo earum a.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
