<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    
    public function getByLimit(int $limit_count = 10)
    {
        return $this->with('author')->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    
    
    protected $fillable = [
        'title',
        'pages',
        'reading_pages',
        'author_id',
    ];
    
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
