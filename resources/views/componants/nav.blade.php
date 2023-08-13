<?php $color = " bg-dark" ; ?> 

@if (Auth::check() && Auth::user()->type === 'admin') 
<?php $color ="bg-info"?>
@endif 
<nav class="navbar navbar-expand-lg navbar-dark <?=$color?>">
  <a class="navbar-brand font-weight-bold" href="#">Temp<span class="text-danger">Hoster</span> | </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 h6">

      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="/services" >Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/about">about us  </a>
      </li>
   
      @if (Auth::check() ) 
      <li class="nav-item">
        <a class="nav-link " href="/Template">HTML Template </a>
      </li>
      @endif
     
    
     
    </ul>
 
    <form class="form-inline my-2 my-lg-0">

    @if (Auth::check() && Auth::user()->type ==='user' ) 
    <button class="btn btn-primary my-2 my-sm-0 p-10 m-5" type="submit"> Desgin on Demand </button>
    @endif
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 h6 text-end">
    @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
</ul>
  </div>
  @if (Auth::check() && Auth::user()->type === 'admin') 
      
      <a class="btn btn-danger" href="/Admin">Back to Control Panel </a>

    @endif
</nav>