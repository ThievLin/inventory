<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    use HasFactory;
    protected $table = 'inv_suppliers';
    public $timestamps = false;
    protected $primaryKey = 'Sup_id';
    public $incrementing = true;
    protected $keyType = 'int'; 
    protected $fillable = [
        'Sup_name',
        'Sup_contact',
        'Sup_address',
    ];
}
