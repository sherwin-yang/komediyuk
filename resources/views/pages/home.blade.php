@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid home-main-jumbotron">
    <div class="container home">
      <h1 class="display-4">Hello, !</h1>
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