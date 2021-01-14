<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Table extends Controller
{
    public function Render($urls){
        foreach($urls as $url){
            echo "<tr>";
            echo "<th scope='row'>".$url->id."</th><td>".$url->slug."</td><td>".$url->value."</td>";
            echo "</tr>";
        }
    }
}