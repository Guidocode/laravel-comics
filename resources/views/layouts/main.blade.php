<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    <title>DC Comics | @yield('title')</title>
</head>
<body>


    @include('partials.header')

    <div class="jumbo"></div>

    <main>

        @yield('content')

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


    @include('partials.footer')


</body>
</html>
