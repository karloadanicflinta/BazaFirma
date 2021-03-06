<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'country_id'
    ];


    public function country() { return $this->belongsTo(Country::class); }

    public function invoice() { return $this->hasMany(Invoice::class); }

    public function goods() { return $this->belongsToMany(Good::class); }

}
