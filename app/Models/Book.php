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
    
     public function getByBookLimit(int $limit_count = 1)
    {
        return $this->with('author')->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    
    
    protected $fillable = [
        'title',
        'pages',
        'reading_pages',
        'author_id',
        'default_category_id',
    ];
    
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
    
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
    
    public function default_category(){
        return $this->belongsTo(DefaultCategory::class);
    }
}
