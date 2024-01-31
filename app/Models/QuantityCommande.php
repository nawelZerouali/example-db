<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Order Model
class QuantityCommande extends Model
{
    public function product()
    {
        return $this->belongsTo(Product::class, 'prod_id');
    }

    public function order()
    {
        return $this->belongsTo(order::class,'commande_id');
    }

}
