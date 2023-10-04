<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    
    public function books()
    {
        return $this->hasMany(Book::class);
    }
    
    public function getByAuthor(int $limit_count = 10)
    {
        return $this->books()->with('author')->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
}
