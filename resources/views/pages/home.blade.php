@extends('layouts.app')

@section('content')
<div class="home-main-jumbotron">
    <div class="container home">
        @guest
            <h1 class="display-4">Hello, guest!</h1>
        @else
            <h1 class="display-4">Hello, {{Auth::user()->name}}!</h1>
        @endguest
        <p class="home-main-mssg">TEMUKAN TIKETMU HANYA DI SINI</p>
    </div>
</div>

<div class="home-context">
    <div class="wallpaper komika">
        <button type="button" class="ref">Komika</button>
    </div>
    <div class="wallpaper video">
        <button type="button" class="ref">Video</button>
    </div>
    <div class="wallpaper tiket">
        <button type="button" class="ref">Tiket</button>
    </div>
</div>

@endsection