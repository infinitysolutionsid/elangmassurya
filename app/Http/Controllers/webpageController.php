<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
use App\blogImages;
use App\album_photos;
use App\albums;
use App\Mail\sendContact;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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
    public function contact(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'services' => 'required',
            'message' => 'required',
        ]);
        $getDM = $request->all();
        // return response()->json($getAppointment);
        Mail::to('marketing@elangmassurya.co.id')
        ->cc('pieter.ho999@gmail.com')
        ->send(new sendContact($getDM));
        return back()->with('success', 'You have successfully register your new account');
    }
}
