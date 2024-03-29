{{-- Navbar  --}}
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
{{-- Left navbar links --}}
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
  </li>
  <li class="nav-item d-none d-sm-inline-block">
    <a href="index3.html" class="nav-link">Home</a>
  </li>
  <li class="nav-item d-none d-sm-inline-block">
    <a href="#" class="nav-link">Contact</a>
  </li>
</ul>

{{-- SEARCH FORM --}}
<form class="form-inline ml-3">
  <div class="input-group input-group-sm">
    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
    <div class="input-group-append">
      <button class="btn btn-navbar" type="submit">
        <i class="fas fa-search"></i>
      </button>
    </div>
  </div>
</form>

{{-- Right navbar links --}}
<ul class="navbar-nav ml-auto">
  {{-- Messages Dropdown Menu --}}
  <li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#">
      <i class="far fa-comments"></i>
      <span class="badge badge-danger navbar-badge">3</span>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
      <a href="#" class="dropdown-item">
        {{-- Message Start --}}
        <div class="media">
          <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
          <div class="media-body">
            <h3 class="dropdown-item-title">
              Brad Diesel
              <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
            </h3>
            <p class="text-sm">Call me whenever you can...</p>
            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
          </div>
        </div>
        {{-- Message End --}}
      </a>
      <div class="dropdown-divider"></div>
      <a href="#" class="dropdown-item">
        {{-- Message Start --}}
        <div class="media">
          <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
          <div class="media-body">
            <h3 class="dropdown-item-title">
              John Pierce
              <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
            </h3>
            <p class="text-sm">I got your message bro</p>
            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
          </div>
        </div>
        {{-- Message End --}}
      </a>
      <div class="dropdown-divider"></div>
      <a href="#" class="dropdown-item">
        {{-- Message Start --}}
        <div class="media">
          <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
          <div class="media-body">
            <h3 class="dropdown-item-title">
              Nora Silvester
              <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
            </h3>
            <p class="text-sm">The subject goes here</p>
            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
          </div>
        </div>
        {{-- Message End --}}
      </a>
      <div class="dropdown-divider"></div>
      <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
    </div>
  </li>
  {{-- Notifications Dropdown Menu --}}
  <li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#">
      <i class="far fa-bell"></i>
      <span class="badge badge-warning navbar-badge">15</span>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
      <span class="dropdown-item dropdown-header">15 Notifications</span>
      <div class="dropdown-divider"></div>
      <a href="#" class="dropdown-item">
        <i class="fas fa-envelope mr-2"></i> 4 new messages
        <span class="float-right text-muted text-sm">3 mins</span>
      </a>
      <div class="dropdown-divider"></div>
      <a href="#" class="dropdown-item">
        <i class="fas fa-users mr-2"></i> 8 friend requests
        <span class="float-right text-muted text-sm">12 hours</span>
      </a>
      <div class="dropdown-divider"></div>
      <a href="#" class="dropdown-item">
        <i class="fas fa-file mr-2"></i> 3 new reports
        <span class="float-right text-muted text-sm">2 days</span>
      </a>
      <div class="dropdown-divider"></div>
      <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
    </div>
  </li>
  {{-- <li class="nav-item">
    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
      <i class="fas fa-th-large"></i>
    </a>
  </li> --}}
  {{-- Settings Dropdown --}}
  <div class="ml-3 relative">
      <x-jet-dropdown align="right" width="48">
          <x-slot name="trigger">
              @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                  <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                      <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                  </button>
              @else
                  <span class="inline-flex rounded-md">
                      <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                          {{ Auth::user()->name }}

                          <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                      </button>
                  </span>
              @endif
          </x-slot>

          <x-slot name="content">
              {{-- Account Management --}}
{{--               <div class="block px-4 py-2 text-xs text-gray-400">
                  {{ __('Manage Account') }}
              </div> --}}

              {{-- <x-jet-dropdown-link href="{{ route('profile.show') }}">
                  {{ __('Profile') }}
              </x-jet-dropdown-link> --}}

              @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                  <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                      {{ __('API Tokens') }}
                  </x-jet-dropdown-link>
              @endif

              {{-- <div class="border-t border-gray-100"></div> --}}
              <x-jet-dropdown-link href="#">
                  {{ __('Editar perfil') }}
              </x-jet-dropdown-link>

              <!-- Authentication -->
              <form method="POST" action="{{ route('logout') }}">
                  @csrf

                  <x-jet-dropdown-link href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                  this.closest('form').submit();">
                      {{ __('Salir') }}
                  </x-jet-dropdown-link>
              </form>
          </x-slot>
      </x-jet-dropdown>
  </div>
</ul>
</nav>
{{--navbar--}}