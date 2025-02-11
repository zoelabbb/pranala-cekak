@extends('microsite/layouts.app')


@section('content')
    <h4 class="app-h4">Selamat Datang di <em>{{ config('app.name')}}</em></h4>
    <a href="https://radnet-digital.id"><button class="btn btn-primary app-btn">Web Site</button></a>
    <a href="mailto:wecare@radnet-digital.id"><button class="btn btn-primary app-btn">Email</button></a>
    <button class="btn btn-primary app-btn">Facebook</button>
    <button class="btn btn-primary app-btn">Instagram</button>
    <button class="btn btn-primary app-btn">Tiktok</button>
    <button class="btn btn-primary app-btn">Whatsapp</button>
@endsection
