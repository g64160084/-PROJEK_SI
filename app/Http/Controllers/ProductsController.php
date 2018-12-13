<?php

namespace App\Http\Controllers;

use App\Konsumen;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades;

class ProductsController extends Controller
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
        $posts = Konsumen::latest() -> paginate(20);
        return view('products', compact('posts'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function products()
    {
        return view('products');
    }

    public function store(Request $request)
    {
        //
        $this ->validate(request(), [
            'nama' => 'required',
            'nohp' => 'required',
            'barang' => 'required',
            'jumlah' => 'required',
        ]);
        
        Konsumen::create([
            'name' => request('nama'),
            'phone' => request('nohp'),
            'goods' => request('barang'),
            'units' => request('jumlah'),
            'konsumen_id' => \Auth::user()->id,
        ]);

        return redirect('/products')->with('success', 'Post Jualan telah berhasil ditambahkan');
        
    }

    

    
}
