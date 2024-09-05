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
        'Product_ENGName',
        'Product_KHName',
        'IIQ_name',
        'IIQ_name_kh',
        'Product_Category_ENG',
        'Product_Category_KH',
        'Item_ENGName',
        'Item_KHName',
        'Qty',
        'UOM',
    ];
}

