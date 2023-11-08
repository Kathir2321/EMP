<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tenant extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'property_id',
        	'name',	'email',	'phone',	'is_advance_paid',	'advance_paid_date'
    ];
}
