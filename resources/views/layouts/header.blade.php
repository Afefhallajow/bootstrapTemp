    <div style="box-sizing: border-box;"  id="header" >
      <a id="img-header" class="" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="true">  <img src="https://i.pinimg.com/236x/ab/ef/31/abef3102ee2e5ed3bc800b9b56450dbc.jpg">
      </a>

            <a  id="username"  style="display:inline-block;" class=" " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"  aria-expanded="true" v-pre>
afef hallajow
            </a>


            <ul   style="overflow: hidden;z-index: 150" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li>                <a class="dropdown-item" href="{{ route('logout') }}"
                                                                         onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        </a>

                        <form id="logout-form" action="/" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>

            </ul>
<div id="lang">
        <div id="lang" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">


            <p style="position: static"> {{\Illuminate\Support\Facades\App::getLocale()}}</p>


        </div>

        <ul class="dropdown-menu">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li>
                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
                </li>
            @endforeach
        </ul>
</div>
            <a  onclick="openFullscreen()" id="fullscreen"  style="display:inline-block;" class=" " href="#" role="button"   aria-expanded="true" v-pre>
            <span id="fullscreenitem" class="uil uil-expand-arrows-alt"></span>
        </a>

<div  id="dropdownbutton">
<button id="menubutton" class="btn btn-dark">=</button>
    </div>
        <div id="nofication" class="">
            <a id="navbarDropdown" class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <i class="fa fa-bell"></i>
                <span class="badge badge-light bg-success badge-xs"></span>
            </a>
            <ul data-no-collapse="true" class="dropdown-menu">


                            </ul>
        </div>
        <div id="savetest">
            <span class="fa fa-save"></span>
        </div>

    </div>
