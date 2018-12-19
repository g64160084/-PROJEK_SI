<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bidder extends Model
{
    //
    protected $fillable = ['name', 'phone', 'konsumen_name', 'goods', 'price', 'bidder_id' ];
    public function user()
    {return $this->belongsTo(user::class, 'bidder_id');}
}
