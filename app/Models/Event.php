<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['category'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('nama_event', 'like', '%' . $search . '%')
                ->orWhere('deskripsi_event', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('nama_kategori', $category);
            });
        });
    }
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
