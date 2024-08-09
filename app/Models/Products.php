<?php

namespace App\Models;

use App\Models\invProductCate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Products extends Model
{
    use HasFactory;
    protected $table = 'inv_product';
    public $timestamps = false;
    protected $primaryKey = 'Pro_id';
    public $incrementing = true;
    protected $keyType = 'int'; 
    protected $fillable = [
        'Pro_name_eng',
        'Pro_name_kh',
        'Pro_Cate_id',
        'image',
        'status'
    ];
    public function productCategory()
    {
        return $this->belongsTo(invProductCate::class, 'Pro_Cate_id', 'Pro_Cate_id');
    }
}
