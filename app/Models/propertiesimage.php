<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertiesImage extends Model
{
    use HasFactory;

    protected $table = 'properties_images'; // Set the correct table name if it's different from the default naming conventions

    protected $fillable = [
        'property_id',
        'image',
        'status',
    ];

    public function propertie()
    {
        return $this->belongsTo(propertie::class);
    }
}
