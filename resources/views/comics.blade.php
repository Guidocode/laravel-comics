@extends('layouts.main')

@section('content')

    <div class="jumbo"></div>


    <main>

        {{-- Comics --}}
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


        <div class="gb-container  text-center mb-5">
            <button type="button" class="btn btn-primary gb-btn">Load More</button>
        </div>
        {{-- /Comics --}}




        {{-- Light Blue Band --}}
        <div class="light-blue-band py-5">
            <div class="gb-container">
              <ul class="d-flex justify-content-between m-0 px-5">

                <!-- Voci menu -->
                <li>
                  <a class="d-flex align-items-center" href="#">
                    <div class="icon"
                    style="background-image: url('{{ asset('img/buy-comics-digital-comics.png')}}');"></div>
                    <span>digital comics</span>
                  </a>
                </li>
                <li>
                  <a class="d-flex align-items-center" href="#">
                    <div class="icon"
                    style="background-image: url('{{ asset('img/buy-comics-merchandise.png')}}');"></div>
                    <span>dc merchandise</span>
                  </a>
                </li>
                <li>
                  <a class="d-flex align-items-center" href="#">
                    <div class="icon"
                    style="background-image: url('{{ asset('buy-comics-subscriptions.png')}}');"></div>
                    <span>subscription</span>
                  </a>
                </li>
                <li>
                  <a class="d-flex align-items-center" href="#">
                    <div class="icon"
                    style="background-image: url('{{ asset('img/buy-comics-shop-locator.png')}}');"></div>
                    <span>comics shop locator</span>
                  </a>
                </li>
                <li>
                  <a class="d-flex align-items-center" href="#">
                    <div class="icon"
                    style="background-image: url('{{ asset('img/buy-dc-power-visa.svg')}}');"></div>
                    <span>dc power visa</span>
                  </a>
                </li>
                <!-- /Voci menu -->

              </ul>
            </div>
          </div>
        {{-- /Light Blue Band --}}

    </main>

@endsection
