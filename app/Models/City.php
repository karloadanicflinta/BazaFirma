<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'country_id',
    ];

    public function cities() { return $this->hasMany(User::class); }
    public function city() { return $this->hasMany(Office::class); }


    public function country() { return $this->belongsTo(Country::class); }

}
