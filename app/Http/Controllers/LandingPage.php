<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Redirects;

class LandingPage extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index($uri=0)
    {
        $goesTo = DB::table('redirects')
                            ->where('active', true)
                            ->where('uri', (string) $uri)
                            ->first();
        if ($goesTo == NULL)
        {
            echo "404 Not Found";
            exit;
        }

        if ($goesTo->redirect)
            return redirect()->away($goesTo->url);
        else
        {
            $logo = asset('images/logo.png');
            $welcomeText = Str::of("Selamat Datang di <em>radneXt Shortener</em>")->toHtmlString();
            return view('microsite/index', compact('logo', 'welcomeText'));
        }
    }
}
