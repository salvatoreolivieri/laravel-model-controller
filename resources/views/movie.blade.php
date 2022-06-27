@extends('layouts.main')

@section('content')

<div class="container">
   <h1>Il mio film preferito è: {{$favourite->title}}, ed è uscito il {{$favourite->date}} </h1>

   <h2>Il film con ID 5 è : {{$fiveElement->title}}</h2>

   <div>
    <h2>Film con titoli che contengono la 'Y'</h2>
       <ul>
        @foreach ($containY as $item)
        <li>{{$item->title}}</li>
        @endforeach
       </ul>
   </div>

</div>

<div class="d-flex container flex-wrap text-center">
    <h2>I primi 3 con il voto più alto</h2>
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
