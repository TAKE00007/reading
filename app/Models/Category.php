<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    public function books(){
        //1つの本が複数のカテゴリー
        return $this->belongsToMany(Book::class);
    }
}
