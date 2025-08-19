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
        if ($uri == 0) // If no URI is provided, show the landing page
        {
            $logo = asset('images/logo.png');
            return view('landing_page/index', compact('logo'));
        }

        // If a URI is provided, check if it exists in the redirects table
        $uri = Str::of($uri)->trim('/')->toString(); // Remove leading and trailing slashes
        $now = now(); 
        $goesTo = DB::table('redirects')
                    ->where('active', true)
                    ->whereRaw('BINARY `uri` = ?', [(string) $uri])
                    ->where(function ($query) use ($now) {
                        $query->where('expired', '>', $now)
                              ->orWhereNull('expired');
                        })
                    ->first();
        
        if ($goesTo == null) // If no redirect found, show 404 page
        {
            $logo = asset('images/404.png');
            $url = Str::of(url()->current())->toHtmlString();
            return view('404/index', compact('logo', 'url'));
        }

        if ($goesTo->redirect)
            return redirect()->away($goesTo->url); // Redirect to the URL if redirect is true
        else
        {
            $url = Str::of(url()->current())->toHtmlString();
            $whichMicrosite = $goesTo = DB::table('microsites')
                    ->where('redirects_id', $goesTo->id)
                    ->first();
            $namaAcara = $whichMicrosite->micro_name;
            $waktuAcara = \Carbon\Carbon::parse($whichMicrosite->time)->locale('id')->translatedFormat('d F Y | H:i');
            $lokasiAcara = $whichMicrosite->location;
            $links = $this->micrositeContents($whichMicrosite->id);
//            print_r($whichMicrosite);
//            echo "<br>";
//            print_r($micrositeContents);
            return view('microsite/index', compact('url', 'namaAcara', 'waktuAcara', 'lokasiAcara', 'links'));
        }
    }

    private function micrositeContents($micrositesID)
    {
        return(DB::table('microsites_contents')
                    ->where('microsites_id', $micrositesID)
                    ->get());
   }
}
