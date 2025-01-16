<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manual extends Model
{
    use HasFactory;
    protected $fillable=['name','phone','email','address','payment_methood','amount','transaction_info','payment_prrof','event_type'];

}
