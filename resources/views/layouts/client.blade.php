<!doctype html>
<html lang="en">
<head>
    {{--INCLUDE HEAD SECTION FOR THE WEBSITE--}}
    @include('includes.head')
</head>
<body>
{{--START MAIN NAVIGATION--}}
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand mr-auto mr-lg-0 logo" href="{{route('showMainPage')}}"><img src="{{asset('/img/logo.png')}}" alt="limundo-logo"></a>
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">

            <div class="collapse navbar-collapse flex-grow-0">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('showAuctionPage')}}">Kupi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Moj Limundo</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="#">Lista želja</a>
                            <a class="dropdown-item" href="{{route('showUserDataPage')}}">Moji podaci</a>
                            <a class="dropdown-item" href="#">Račun</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pomoć</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
{{--END MAIN NAVIGATION--}}

{{--START SECOND NAVIGATION--}}
<nav class="navbar navbar-expand-lg navbar-light bg-grey">
    <div class="container">
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">

            <div class="collapse navbar-collapse flex-grow-0">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><button class="btn btn-danger">Besplatno postavi predmet</button></a>
                    </li>
                    <li class="nav-item p-2">
                        <input class="form-control" type="text" placeholder="Pretraži limundo...">
                    </li>
                    <li class="nav-item pl-2">
                        <a class="nav-link" href="#"><button class="btn btn-primary">Traži</button></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}"><button class="btn btn-warning">Registracija</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}"><button class="btn btn-success">Ulaz</button></a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{route('showProfilePage', auth()->user()->username)}}" class="btn btn-link">{{auth()->user()->username}}</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="btn btn-link">500 novih predmeta</a>
                        </li>
                       <li class="nav-item">
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                               @csrf
                           </form>
                           <a  href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                               <button class="btn btn-link">{{ __('Odjava') }}</button>
                           </a>
                       </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</nav>
{{--END SECOND NAVIGATION--}}
@if(\Request::is('main'))
    {{--START CONTENT--}}
    <main role="main" class="container">
        <div class="text-center pt-5">
            <div class="row">
                {{--START NAVIGATION FOR CATEGORIES--}}
                <div class="col-2 text-center p-0 m-0">
                    <ul class="nav flex-column main-back text-left" id="mainNavigation">
                    </ul>
                    <div class="ads pt-5">
                        <a href="#"><img src="{{asset('/img/reklama1.png')}}" alt="reklama1" width="180"></a>
                    </div>
                </div>
                {{--END NAVIGATION FOR CATEGORIES--}}
                <div class="col-8">
                    {{--YIELD CONTENT FROM OTHER BLADE FILE--}}
                    @yield('content')
                </div>
                <div class="col-2  p-0 m-0">
                    <div class="tips">
                        <div class="row text-left">
                            <div class="col-12">
                                <h4 class="txt-color">Saveti</h4>
                            </div>
                            <div class="col-12 pt-2">
                                <a href="#">Sve što treba da znate o novoj opciji “Pratim”</a>
                            </div>
                            <div class="col-12 pt-2">
                                <a href="#">Kako da jeftinije kupite sve za školu?</a>
                            </div>
                            <div class="col-12 pt-2">
                                <a href="#">Limundo je dobio mobilnu aplikaciju</a>
                            </div>
                        </div>

                        <div class="navigation pt-5 text-left">
                            <ul class="nav flex-column main-back">
                                <li class="nav-item"><a class="nav-link hover-link" href="">Link 1</a></li>
                                <li class="nav-item"><a class="nav-link hover-link" href="">Link 2</a></li>
                                <li class="nav-item"><a class="nav-link hover-link" href="">Link 3</a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="ads pt-5">
                        <a href="#"><img src="{{asset('/img/reklama2.png')}}" alt="reklama2" width="180"></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    {{--END CONTENT--}}
@else
    {{--START CONTENT--}}
    @yield('content')
    {{--END CONTENT--}}
@endif


<footer class="pt-4 my-md-5 pt-md-5 border-top">
  <div class="container">
      <div class="row">
          <div class="col-12 text-center">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam at atque, beatae culpa cupiditate dolore, dolorem eligendi expedita fuga, itaque maiores minima molestias officia quae quis reiciendis rem saepe. Eius, odit, quasi. Aliquam assumenda, consectetur ea eligendi eos, eveniet ex ipsum iusto minima modi nemo, numquam sunt tenetur ut voluptatibus?</p>
          </div>
          <div class="col-12 text-center">
              <h5>Limundo</h5>
          </div>
      </div>
  </div>
</footer>

{{--INCLUDE JAVASCRIPT FILES--}}
@include('includes.script')
</body>
</html>
