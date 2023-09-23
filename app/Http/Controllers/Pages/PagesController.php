<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
     function index(){
        return view('pages.index');
     }
     function product(){
        return view('pages.products');
     }
}
