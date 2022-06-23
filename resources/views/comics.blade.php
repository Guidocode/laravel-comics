@extends('layouts.main')

@section('content')

    <h3>Comics</h3>

    @foreach ($comics as $comic)
    <div class="gb-card">
        <div class="image-card">
          <img src="{{$comic->image}}" alt="">
        </div>
        <div class="title-card">{{$comic->title}}</div>
    </div>
    @endforeach

@endsection
