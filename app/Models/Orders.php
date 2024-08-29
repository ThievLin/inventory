<?php

namespace App\Models;

use App\Models\UOM;
use App\Models\Items;
use App\Models\Invshop;
use App\Models\OrderInfor;
use App\Models\InvLocation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'inv_order';
    public $timestamps = false;
    protected $primaryKey = 'Order_id';
    public $incrementing = true;
    protected $keyType = 'int'; 
    protected $fillable = [
        'Order_Info_id',
        'Item_id',
        'Item_Qty',
        'UOM_id',
        'Order_Qty',
        'price',
        'Currency_id'

    ];
     // Define the inverse of the one-to-many relationship
    public function orderInfo()
    {
        return $this->belongsTo(OrderInfor::class, 'Order_Info_id', 'Order_Info_id');
    }

    public function item()
    {
        return $this->belongsTo(Items::class, 'Item_id', 'Item_id');
    }
    public function uom()
    {
        return $this->belongsTo(UOM::class, 'UOM_id', 'UOM_id');
    }
}

