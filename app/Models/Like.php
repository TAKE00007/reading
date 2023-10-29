<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    
    public function likes()
    {
        return $this->belongsToMany('App\Models\Post', 'likes','user_id')
    }
}
