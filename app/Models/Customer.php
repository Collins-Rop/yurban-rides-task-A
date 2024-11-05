<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_number',
        'pin', 
    ];

    
    public function setPinAttribute($value)
    {
        $this->attributes['pin'] = bcrypt($value);
    }

    public function rides()
    {
        return $this->hasMany(Ride::class);
    }
}
