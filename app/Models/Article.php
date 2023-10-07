<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // category_id
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id'); 

    }
}
