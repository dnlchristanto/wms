<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $guarded=[
        'id',
        'created_at',
        'updated_at'
    ];

    public function productgroup()
    {
        return $this->belongsTo(ProductGroup::class);
    }

    public function transactionline()
    {
        return $this->hasMany(TransactionLine::class);
    }
}
