<div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
<header class="site-navbar light site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3">
              <div class="site-logo">
                <a href="{{route('question.index')}}"><strong>Forum</strong></a>
              </div>
            </div>

            <div class="col-9  text-right">

              <span class="d-inline-block d-lg-none"><a href="#" class=" site-menu-toggle js-menu-toggle py-5 "><span class="icon-menu h3 text-black"></span></a></span>

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto ">


                  @if (Auth::check())
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><img src="{{asset('images/user.png')}}" height="50px">
                        <div class="dropdown-menu"></a>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex align-items-center">

                         <img src="{{asset('images/user.png')}}" height="50px">
                                <div class="ml-1">
                                    <h5 class="mb-0">{{Auth::user()->name}} </h5>
                                        <p class="mb-0 text-dark">
                                               {{Auth::user()->email}}
                                        </p>

                                </div>
                             </div>
                        </a>
                         <div class="dropdown-divider"></div>

                        <a class="dropdown-item text-primary" href="{{route('history')}}">My History</a>

                        <a class="dropdown-item" >
                             <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                <button class="border-0 bg-transparent text-danger">Logout</button>

                            </form>
                        </a>
                        </div>
                    </li>

                  @else

                  <li>
                  <a href="{{route('login')}}" class="nav-link">
                    <button class="btn btn-success px-4">Login</button>
                  </a>

                  </li>
                  <li>
                  <a href="{{route('register')}}" class="nav-link"><button class="btn btn-primary px-4">Register</button>
                  </a>

                  </li>
                     @endif
                </ul>
              </nav>
            </div>


          </div>
        </div>

      </header>
