<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'book_id',
        'quantity',
    ];

    public function buku(){
        return $this->belongsTo(Book::class, 'book_id');
    }

    public function pembeli(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
