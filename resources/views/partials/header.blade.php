
<header class="gb-container">
    <div class="logo">
        <a href="{{route('home')}}">
            <img src="{{asset('img/dc-logo.png')}}" alt="Logo">
        </a>
    </div>

    <nav>
      <ul class="d-flex m-0">
        <li>
          <a class="{{Route::currentRouteName() === 'characters' ? 'active' : ''}}" href="{{route('characters')}}">characters</a>
          <a class="{{Route::currentRouteName() === 'comics' ? 'active' : ''}}" href="{{route('comics')}}">comics</a>
          <a class="{{Route::currentRouteName() === 'movies' ? 'active' : ''}}" href="{{route('movies')}}">movies</a>
          <a class="{{Route::currentRouteName() === 'tv' ? 'active' : ''}}" href="{{route('tv')}}">tv</a>
          <a class="{{Route::currentRouteName() === 'games' ? 'active' : ''}}" href="{{route('games')}}">games</a>
          <a class="{{Route::currentRouteName() === 'collectibles' ? 'active' : ''}}" href="{{route('collectibles')}}">collectibles</a>
          <a class="{{Route::currentRouteName() === 'videos' ? 'active' : ''}}" href="{{route('videos')}}">videos</a>
          <a class="{{Route::currentRouteName() === 'fans' ? 'active' : ''}}" href="{{route('fans')}}">fans</a>
          <a class="{{Route::currentRouteName() === 'news' ? 'active' : ''}}" href="{{route('news')}}">news</a>
          <a class="{{Route::currentRouteName() === 'shop' ? 'active' : ''}}" href="{{route('shop')}}">shop</a>
        </li>
      </ul>
    </nav>
</header>
