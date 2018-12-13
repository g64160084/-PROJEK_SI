<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades;
use App\Konsumen;

class KonsumenController extends Controller
{
   
        public function __construct()
        {
         $this->middleware('auth');
        }
        public function konsumen()
        {
        $products = Konsumen::latest()->paginate(5);
        return view('konsumen', compact('products'));
        }

    
}
