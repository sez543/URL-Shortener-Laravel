<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class URL extends Controller
{
    public function Create(){
        if(\DB::table('urls')->where('slug', request('slug'))->exists()){
            return redirect('/')->with(['msg' => 'An URL is already assigned to this slug. Please choose a different one.']);
        }else{
            \DB::table('urls')->insert(
                ['value' => request('url'), 'slug' => request('slug')]
            );
            return redirect('/')->with(['success' => true, 'msg' => 'URL successfully saved. You can visit it through ', 'url' => url('/').'/url/'.request('slug')]);
        }
    }
}