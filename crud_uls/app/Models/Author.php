<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Author extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'autors';

    public function news()
    {
        return $this->hasMany(News::class, 'id', 'autor');
    }

}
