
@extends('layouts.main')

@section('title', 'Film')

@section('content')

  <div style="height: calc(100vh - 520px)" class="px-4 py-5 my-5 text-center d-flex justify-content-center align-items-center flex-column">
    <h1 class="display-5 fw-bold">Scopri il nostro catalogo di film</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a type="button" href="{{route('movie')}}" class="btn btn-primary btn-lg px-4 gap-3">Vai ai film</a>
        <a type="button" href="{{route('about')}}" class="btn btn-outline-secondary btn-lg px-4">Scopri di più</a>
      </div>
    </div>
  </div>



{{-- @foreach ( $films as $item )

<p>{{$item->title}}</p>

@endforeach --}}

@endsection
