<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckPosts extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function post(){
        return $this->belongsTo(Posts::class, 'post_id');
    }
}
