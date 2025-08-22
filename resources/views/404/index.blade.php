@extends('404/layouts.app')

@section('content')
    <div class="app-main d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="app-404-logo">
            <img src="{{ $logo }}" class="img-fluid">
        </div>
    </div>
@endsection
