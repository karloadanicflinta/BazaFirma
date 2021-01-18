<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'IBAN',
        'SWIFT',
    ];

    public function companies() { return $this->hasMany(User::class); }

    public function company() { return $this->hasMany(Office::class); }

    public function invoice() { return $this->hasMany(Invoice::class); }


}
