<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class FootballController extends Controller
{
    public function index()
    {
        $index = DB::table('news')->select('id','title','img_url','description','rss_id','source_url')-> where ('rss_id','12')-> limit (5)->orderBy('id','DESC')->get();
        return view('football', ['index'=>$index]);
    }
}