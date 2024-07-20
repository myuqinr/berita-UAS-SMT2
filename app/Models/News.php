<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    use HasFactory;

    protected $table = 'berita';

    protected $fillable = [
        'judul',
        'slug',
        'sampul',
        'konten',
        'dilihat',
        'id_kategori',
        'id_user'
    ];

    protected $attributes = [
        'dilihat' => 0
    ];

    public function kategori(): BelongsTo{
        return $this->belongsTo(Category::class, 'id_kategori', 'id');
    }

    public function user(): BelongsTo{
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
