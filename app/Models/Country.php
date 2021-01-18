<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function countries() { return $this->hasMany(User::class); }


    public function cities() { return $this->hasMany(City::class); }


    public function suppliers() { return $this->hasMany(Supplier::class); }


}

