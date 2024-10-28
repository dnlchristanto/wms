<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'description'
    ];

    public function item()
    {
        return $this->hasMany(Item::class);
    }
}
