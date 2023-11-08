<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propertie extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',	
        'rent_amount',
        'advance_amount',
        'status'

    ];
    public function properties_images(){
        $this->hasOne(PropertiesImage::class);
    }

}
