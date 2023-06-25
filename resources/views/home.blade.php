<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        {{-- HEADER --}}
        @include('partials/header') 
        <main>
            <div class="jumbotron">
            </div> 
            <div class="products">
                <button class="upperBtn">CURRENT SERIES</button>
                @foreach($comics as $comic)
                <div class="card">
                    {{-- <img src="{{ Vite::asset($comic['thumb']) }}" alt="comic" class="mb-3"/> --}}
                    <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
                    <h6>{{$comic['title']}} </h6>
                </div>
                @endforeach
                <button class="lowerBtn">LOAD MORE</button>
            </div>
        </main>
        {{-- FOOTER --}}
        @include('partials/footer')
    </body>
</html>
