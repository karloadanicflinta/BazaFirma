<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];


    public function countries() { return $this->belongsTo(Supplier::class); }


    public function invoices() { return $this->hasMany(Invoice::class); }


    public function goods() { return $this->belongsToMany(Company::class); }


    public function goodsupplied() { return $this->belongsToMany(Supplier::class); }

}
