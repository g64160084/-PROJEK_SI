<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konsumen extends Model
{
    //
    protected $fillable = ['name', 'phone', 'goods', 'units', 'konsumen_id' ];
    public function user()
    {return $this->belongsTo(user::class, 'konsumen_id');}
}
