<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class News extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'news';

    public function author()
    {
        return $this->belongsTo(Author::class, 'autor', 'id');
    }
}
