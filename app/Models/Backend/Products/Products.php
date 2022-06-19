<?php

namespace App\Models\Backend\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Backend\Categories\Categories;
use App\Models\Backend\Subcategories\Subcategories;

class Products extends Model
{
    use HasFactory;

    public function Category(){
        return $this->belongsTo(Categories::class,'cat_id');
    }
    public function Subcategory(){
        return $this->belongsTo(Subcategories::class,'subcat_id');
    }
}
