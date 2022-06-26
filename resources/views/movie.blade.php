@extends('layouts.main')

@section('content')

<div class="d-flex container flex-wrap text-center">
    @foreach ($films as $item )
        <div style="height: calc(100vh - 520px)" class="px-4 py-5 my-5 text-center d-flex justify-content-center align-items-center flex-column">
                <p>Titolo: {{$item->title}}</p><br>
                <p>Nazionalità: {{$item->nationality}}</p><br>
                <p>Data di uscita: {{$item->date}}</p><br>
                <p>Voto: {{$item->vote}} / 10</p><br><br>
                <hr>

        </div>
    @endforeach
</div>

@endsection
