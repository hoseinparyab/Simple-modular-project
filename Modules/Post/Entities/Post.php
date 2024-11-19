<?php

namespace Modules\Post\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Category\Entities\Category;
use Modules\Post\Database\factories\PostFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}
