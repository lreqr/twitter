<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
    ];

    public function scopeFilterSearch($query, $search)
    {
        return $this->where('content', 'like', '%' . $search . '%');
    }
}
