@extends('microsite/layouts.app')

@section('content')
    <h4 class="app-h4">{{$welcomeText}}</h4>
    <!--a href="https://radnet-digital.id"><button class="btn btn-primary app-btn mt-3">Web Site</button></a>
    <a href="mailto:wecare@radnet-digital.id"><button class="btn btn-primary app-btn">Email</button></a>
    <button class="btn btn-primary app-btn text-start">
        <img src="{{ asset('images/favicon.png') }}" class="img-fluid" style="height:2.5em;width:auto;">
        <span class="app-btn-txt ms-2">Facebook</span>
    </button>
    <button class="btn btn-primary app-btn">Instagram</button>
    <button class="btn btn-primary app-btn">Tiktok</button>
    <button class="btn btn-primary app-btn">Whatsapp</button>
    <button class="btn btn-primary app-btn align-middle">               
        <img  src="{{ asset('images/favicon.png') }}"/>
        <span class="app-btn-txt ms-2">website</span>
    </button-->

    <button class="btn btn-primary app2-btn text-center">
        <div id="app2-btn_container">
            <img  src="{{ asset('images/favicon.png') }}" class="img-fluid"/>
            <span class="app2-btn-txt text-center">website</span>
        </div>
    </button>
    <button class="btn btn-primary app2-btn">
        <div id="app2-btn_container">
            <img  src="{{ asset('images/favicon.png') }}" class="img-fluid"/>
            <span class="app2-btn-txt">email</span>
        </div>
    </button>
    <button class="btn btn-primary app2-btn">
        <div id="app2-btn_container">
            <img  src="{{ asset('images/favicon.png') }}" class="img-fluid"/>
            <span class="app2-btn-txt">whatsapp</span>
        </div>
    </button>
    <button class="btn btn-primary app2-btn">
        <div id="app2-btn_container">
            <img  src="{{ asset('images/favicon.png') }}" class="img-fluid"/>
            <span class="app2-btn-txt">facebook</span>
        </div>
    </button>
    <button class="btn btn-primary app2-btn">
        <div id="app2-btn_container">
            <img  src="{{ asset('images/favicon.png') }}" class="img-fluid"/>
            <span class="app2-btn-txt">instagram</span>
        </div>
    </button>
    <button class="btn btn-primary app2-btn">
        <div id="app2-btn_container">
            <img  src="{{ asset('images/favicon.png') }}" class="img-fluid"/>
            <span class="app2-btn-txt">tiktok</span>
        </div>
    </button>

@endsection
