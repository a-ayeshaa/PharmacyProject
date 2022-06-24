<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $table='customer';

    public function carts()
    {
        return $this->hasOne(carts::class,'customer_id','customer_id');
    }

    public function users()
    {
        return $this->belongsTo(users::class,'customer_id','u_id');
    }
}
