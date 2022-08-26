<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
use App\blogImages;
use App\album_photos;
use App\albums;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class webpageController extends Controller
{
    public function index()
    {
        $lang = 'id';
        if (array_key_exists($lang, Config::get('languages'))) {
            Session::put('applocale', $lang);
        }
        return view('home.index');
    }
    public function news()
    {
        $blog = blog::orderBy('created_at', 'desc')->where('status', 1)->with('user', 'image')->paginate(9);
        return view('home.blog-2', ['blogs' => $blog]);
    }
    public function events()
    {
        return view('home.events');
    }
    public function gallery()
    {
        return view('home.galleries');
    }
    public function aboutUs()
    {
        return view('home.about');
    }
    public function contactUs()
    {
        return view('home.contact');
    }
}
