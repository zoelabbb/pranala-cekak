@extends('microsite/layouts.app')

@section('content')
    <div class="container mt-3">
        <section id="hero" class="text-center mb-5">
            <h1 class="ms-h1 mb-0">{{ $namaAcara }}</h1>
            <h4 class="ms-h4">{{ $waktuAcara }} | {{ $lokasiAcara }}</h4>
        </section>
        <section id="registration-form" class=" mb-5 text-center">
            <div class="d-grid gap-3 col-6 mx-auto">

                @foreach($links as $link)
                    @php
                        $status = FALSE;
                        if (!$link->mulai && !$link->selesai)
                            $status = TRUE;
                        elseif (!$link->mulai && now() < $link->selesai)
                            $status = TRUE;
                        elseif ($link->mulai < now() && !$link->selesai)
                            $status = TRUE;
                        elseif ($link->mulai < now() && now() < $link->selesai)
                            $status = TRUE;
                    @endphp
                    <a href="{{ ($status)? $link->url: $url }}" type="button" class="btn btn-lg {{ ($status)? '': 'disabled' }}
                        {{ ($status)? 'btn-outline-primary': 'btn-outline-danger' }}"
                        target=_>{{ $link->link_name }}</a>
                @endforeach
            </div>
        </section>
    </div>
@endsection
