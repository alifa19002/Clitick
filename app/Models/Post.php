<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'excerpt', 'body'];
    // protected $guarded = ["id"];
}

App\Models\Post::create([
    'title' => 'Judul Pertama',
    'slug' => 'judul-pertama',
    'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum eum pariatu',
    'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum eum pariatur quo cupiditate rem facere possimus quidem iusto quos iste praesentium cum consequatur illo ratione delects maxime ipsam similique tempora, iure sapiente, numquam vero voluptatem, aut officiis? Quos soluta sunt, dolore quas fu giat qui architecto placeat. Quis, suscipit!</p><p>Vero sapiente aliquid maxime, repellat natus aliquam nulla in exercit ationem sunt quam ullam repellendus odio inventore ex unde consequuntur laborum enim delectus dolorum a repudiandae? Quisunt dicta maxime consectetur ea nihil, obcaecati corrupti a in veniam. Pariatur voluptates animi commodi consequuntuculpa necessitatibus, mollitia ea sint voluptas non!</p><p>Voluptas ut, aspernatur ab nisi dolor, ex quaerat nesciunt fugit atque provident animi ad. Dolore aliquid enim debitis nam. Quis voluptatibus optio magnam temporibus recusandae tempore facere! Obcaecati eveniet a praesentium aspernatur ab reprehenderit odit nisi pariatur doloremque ratione cupiditateofficiis cumque maiores quis expedita veniam ipsum dolorum perferendis nostrum eaque, optio qui porro. Alias nisi, repellat eaque eum voluptas iure sequi. Nam dignissimos placeat accusantium, sunt totam commodi error! Repudiandae laboriosam vero neque minus, reiciendis iure ullam officia voluptatum pariatur soluta, exercitationem voluptatibus dolores et totam expedita sequi quisquam, veritatis labore a. Harum, ipsa. Quia at voluptate dignissimos quo odio expedita minus labor iosam autem veniam saepe. Aperiam aliquid dolor molestias. Soluta consequatur consectetur ipsa excepturi rerum, rem enimearum debitis, architecto odit distinctio commodi et aliquam alias ipsum omnis ullam quae ex similique blanditiis? Obc ecati saepe laboriosam in commodi debitis eaque iusto, beatae blanditiis quia aliquam, accusantium minus necessitatibus,alias reiciendis architecto.</p>'