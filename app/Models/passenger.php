<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class passenger extends Model
{
    use HasFactory;

    protected $table = 'passenger';
    protected $fillable = ['Firstname','user_id','Lastname','no_of_passengers','date','contactname','mobilephone','email','price','ticket_id'];
}
