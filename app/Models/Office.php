<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'company_id',
        'city_id',
    ];

    public function company() { return $this->belongsTo(Company::class); }
    public function city() { return $this->belongsTo(City::class); }


}
