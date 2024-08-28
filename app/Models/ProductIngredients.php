<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductIngredients extends Model
{
    use HasFactory;
    protected $table = 'view_product_ingredients';
    public $timestamps = false;
    protected $fillable = [
        'Pro_id',
        'Product_Name',
        'Product_Category',
        'Item_Name',
        'Qty',
        'UOM',
        'IIQ_name'
    ];
}

