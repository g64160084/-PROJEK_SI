<?php

namespace App\Http\Controllers;

use App\Bidder;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades;

class BidderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        $posts = Bidder::latest() -> paginate(20);
        return view('bidder', compact('posts'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function bidder()
    {
        return view('bidder');
    }

    public function store(Request $request)
    {
        //
        $this ->validate(request(), [
            'nohp' => 'required|min:10',
            'nama_konsumen' => 'required',
            'barang' => 'required',
            'harga' => 'required',
        ]);
        
        Bidder::create([
            'name' => \Auth::user()->name,
            'phone' => request('nohp'),
            'konsumen_name' => request('nama_konsumen'),
            'goods' => request('barang'),
            'price' => request('harga'),
            'bidder_id' => \Auth::user()->id,
        ]);

        return redirect('/bidder')->with('success', 'Post Jualan telah berhasil ditambahkan');
        
    }

    

    
}
