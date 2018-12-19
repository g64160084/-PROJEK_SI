<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades;
use App\Konsumen;
use App\Bidder;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
    	$products = Konsumen::latest()->paginate(5);
        $bidder = Bidder::latest()->paginate(5);
        return view('admin', compact('products','bidder'));
    }

    public function destroyKonsumen(Konsumen $post)
    {
        //
        $post->delete();

        return redirect()->route('admin')->withDanger('Your post has been successfully lost from existence');
    }

    public function destroyBidder(Bidder $post)
    {
        //
        $post->delete();

        return redirect()->route('admin')->withDanger('Your post has been successfully lost from existence');
    }
}