<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGroup extends Model
{
    use HasFactory;
    protected $table = 'inv_product_group';
    public $timestamps = false;
    protected $primaryKey = 'IPG_id';
    public $incrementing = true;
    protected $keyType = 'int'; 
    protected $fillable = [
        'IPG_Khname',
        'IPG_Engname',
        'status'
    ];
}
