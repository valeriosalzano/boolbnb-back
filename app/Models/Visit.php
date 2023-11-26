<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'apartment_id',
        'ip',
        'date'
    ];

    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }
}
