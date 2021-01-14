<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class fetch_urls extends Controller
{
    public function Main(){
        return view('all', ['urls' => DB::table('urls')->get()]);
    }
}