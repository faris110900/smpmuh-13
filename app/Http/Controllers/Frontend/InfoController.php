<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InfoController extends Controller
{
    public function index(){

        return view('frontend.info.index');
    }
}
