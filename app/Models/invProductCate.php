<?php

namespace App\Models;

use App\Models\Products;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class invProductCate extends Model
{
    use HasFactory;
    protected $table = 'inv_product_cate';
    public $timestamps = false;
    protected $primaryKey = 'Pro_Cate_id';
    public $incrementing = true;
    protected $keyType = 'int'; 
    protected $fillable = [
        'Cate_Khname',
        'Cate_Engname',
        'IPG_id',
        'status'
    ];
    public function products()
    {
        return $this->hasMany(Products::class, 'Pro_Cate_id', 'Pro_Cate_id');
    }
}
