@extends('layouts.main')

@section('content')

<div style="height: calc(100vh - 520px)" class="px-4 py-5 my-5 text-center d-flex justify-content-center align-items-center flex-column">
    @foreach ($films as $item )
        <p>Titolo: {{$item->title}}</p><br>
        <p>Nazionalità: {{$item->nationality}}</p><br>
        <p>Data di uscita: {{$item->date}}</p><br>
        <p>Voto: {{$item->title}} / 10</p><br><br>
        <hr>

    @endforeach
</div>

@endsection
