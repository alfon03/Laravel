<?php

namespace App\Http\Controllers;

use App\Models\Gifts;
use Illuminate\Http\Request;

class gitftsController extends Controller
{
    //
    public function index(){
        $posts = Gifts::all();
        return view('letter', data:['posts' => $posts]);
    }
}
