<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesShipmentLine extends Model
{
    use HasFactory;

    protected $guarded=[
        'id',
        'created_at',
        'updated_at'
    ];

    public function salesshipmentheader()
    {
        return $this->belongsTo(TransactionHeader::class,'sj_id','id');

    }

}
