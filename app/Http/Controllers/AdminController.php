<?php

namespace WePly\Http\Controllers;

use Illuminate\Http\Request;
use WePly\User;
use WePly\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        return view('index');
    }
}