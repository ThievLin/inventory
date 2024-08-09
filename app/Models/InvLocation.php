<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvLocation extends Model
{
    use HasFactory;
    protected $table = 'inv_Location';
    public $timestamps = false;
    protected $primaryKey = 'L_id';
    public $incrementing = true;
    protected $keyType = 'int'; 
    protected $fillable = [
        'S_id',
        'L_name',
        'L_address',
        'L_contact',
        'status'
    ];
}
