<?php

namespace App\Models\Backend\Subcategories;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Backend\Categories\Categories;

class Subcategories extends Model
{
    use HasFactory;

    public function categories(){
        return $this->belongsTo(Categories::class,'cat_id');
    }
}
