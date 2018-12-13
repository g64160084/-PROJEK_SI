<?php

namespace App;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function konfirmasi(Request $request)
    {
        $request = new product;
        $request ->name = input::get("Nama");
        $request ->created_at = input::get("Nomor Telepon");
        $request ->jenis = input::get("Jenis");
        $request ->jumlah = input::get("Jumlah");
        $request ->save();
        return ("Data Saved");
    }
}
}
