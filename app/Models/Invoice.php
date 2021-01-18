<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'number',
        'fiscal_number',
        'invoice_date',
        'due_date'

    ];

    public function company() { return $this->belongsTo(Company::class); }
    public function supplier() { return $this->belongsTo(Supplier::class); }
    public function good() { return $this->belongsTo(Good::class); }

}
