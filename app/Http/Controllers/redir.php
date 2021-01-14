<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class redir extends Controller
{
    public function Main($slug){
        $row = \DB::table('urls')->where('slug', $slug)->first();
        return redirect($row->value);
    }
}