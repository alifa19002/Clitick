<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function domisili()
    {
        return $this->belongsTo(Domisili::class, 'domisili_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
