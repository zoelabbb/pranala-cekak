<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LandingPage extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $favicon = "{{ asset('images/favicon.png') }}";
        $logo = "{{ asset('images/logo.png') }}";
        $welcomeText = "Selamat Datang di <em>radneXt shortener</em>";
        return view('microsite/index', compact('favicon', 'logo', 'welcomeText'));
    }
}
