<nav class="navbar navbar-expand-md navbar-inverse set-top" style="color: white;">
    <a class="navbar-brand pb-2" href="{{URL::to('index')}}">{{config('app.name')}}</a>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarSupportedContent"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
             @guest
                <li class="nav-item py-2">
                    <a class="nav-link" href="login">{{ ('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item py-2">
                    <a class="nav-link" href="register">{{ ('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item py-2">
                    Howdy, 
                    <a href="{{URL::to('dashboard')}}" class="mx-2 mr-5">
                        {{ Auth::user()->username }} 
                    </a>
                    <a href="{{URL::to('logout')}}">
                        {{ ('Logout') }}
                    </a>
                </li>
                <li class="nav-item pl-5 py-2">
                    
                    <a href="{{URL::to('dorms')}}" class="mx-2 mr-5">
                        Dorms
                    </a>
                    <a href="{{URL::to('roommates')}}">
                        {{ ('Roommates') }}
                    </a>
                </li>
                @endguest
        </ul>
      
    </div>
</nav>

