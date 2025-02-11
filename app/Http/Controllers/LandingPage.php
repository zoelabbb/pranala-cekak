<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $welcomeText = Str::of("Selamat Datang di <em>radneXt Shortener</em>")->toHtmlString();
        return view('microsite/index', compact('favicon', 'logo', 'welcomeText'));
    }
}
