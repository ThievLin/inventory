<?php

namespace App\Models;

use App\Models\IteamCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Items extends Model
{
    use HasFactory;
    protected $table = 'inv_items';
    public $timestamps = false;
    protected $primaryKey = 'Item_id';
    public $incrementing = true;
    protected $keyType = 'int'; 
    protected $fillable = [
        'Item_Khname',
        'Item_Engname',
        'Item_Cate_id',
        'Expiry_date',
        'image',
        'status'
    ];
    public function iteamCategory()
    {
        return $this->belongsTo(IteamCategory::class, 'Item_Cate_id', 'Item_Cate_id');
    }
}
