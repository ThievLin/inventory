<?php

namespace App\Models;

use App\Models\Items;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IteamCategory extends Model
{
    use HasFactory;
    protected $table = 'inv_item_cate';
    public $timestamps = false;
    protected $primaryKey = 'inv_item_cate';
    public $incrementing = true;
    protected $keyType = 'int'; 
    protected $fillable = [
        'Item_Cate_Khname',
        'Item_Cate_Engname',
        'item_Cate_type',
        'status'
    ];
    public function items()
    {
        return $this->hasMany(Items::class, 'Item_Cate_id', 'Item_Cate_id');
    }
}
