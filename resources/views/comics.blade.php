@extends('layouts.main')

@section('content')

    <main>

        <!-- Titolo contenitore -->
        <div class="gb-container">
        <div class="title-content">current series</div>
        </div>
        <!-- /Titolo contenitore -->


        <div class="gb-container container-cards d-flex flex-wrap">

            @foreach ($comics as $comic)
            <div class="gb-card">
                <div class="image-card">
                <img src="{{$comic->image}}" alt="{{$comic->title}}">
                </div>
                <div class="title-card">{{$comic->title}}</div>
            </div>
            @endforeach

        </div>


        <div class="gb-container  text-center">
            <button type="button" class="btn btn-primary gb-btn">Load More</button>
        </div>

    </main>

@endsection
