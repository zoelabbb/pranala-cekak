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
        if ($uri == 0)
        {
            $logo = asset('images/logo.png');
            return view('landing_page/index', compact('logo'));
        }

        $now = now();
        $goesTo = DB::table('redirects')
                    ->where('active', true)
                    ->whereRaw('BINARY `uri` = ?', [(string) $uri])
                    ->where(function ($query) use ($now) {
                        $query->where('expired', '>', $now)
                              ->orWhereNull('expired');
                        })
                    ->first();
        if ($goesTo == null)
        {
            $logo = asset('images/404.png');
            $welcomeText = Str::of("Selamat Datang di <em>Pranala-Cekak</em>")->toHtmlString();
            return view('404/index', compact('logo', 'welcomeText'));
        }
        if ($goesTo->redirect)
            return redirect()->away($goesTo->url);
        else
            $this->microSite($goesTo->uri);
    }

    private function microSite($microCode)
    {
        printf("Redirecting to microsite %s", $microCode);
   }
}
