<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DefaultCategory extends Model
{
    use HasFactory;
    
    // protected $table = 'default_categories';
    
    public function books(){
        //1つの本が複数のカテゴリー
        return $this->hasMany(Book::class);
    }
    
    public function getByDefaultCategory(int $limit_count = 5)
    {
        return $this->books()->with('default_category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
