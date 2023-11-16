<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tickets extends Model
{
    use HasFactory;

    protected $table = 'tickets';
    protected $fillable = ['flightno','plane_id','from','to','arrival','date','departure','remainingseats','price','airport_a','airport_d'];
}
