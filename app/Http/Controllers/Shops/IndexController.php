<?php

namespace App\Http\Controllers\Shops;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){

        return view('shops.home.index');
    }
}
