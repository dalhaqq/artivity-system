
<nav class="px-5 lg:px-20 py-3 bg-white border-gray-200">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
    <a href="{{ route('home') }}" class="flex items-center">
        <img src="{{ asset('images/artivity-logo.png') }}" class="h-6 mr-3 sm:h-10" alt="Artivity Logo" />
    </a>
    <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="navbar-dropdown" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
      <ul class="flex flex-col md:items-center p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white ">
        <li>
          <a href="{{ route('home') }}" class="block py-2 pl-3 pr-4 text-gray-700 rounded md:bg-transparent @if(in_array(Request::segment(1), ['home'])){{ 'text-white md:text-blue-700 bg-blue-700' }}@endif md:p-0" aria-current="page">Home</a>
        </li>
        <li>
            <a href="{{ route('produk.index') }}" class="block py-2 pl-3 pr-4 text-gray-700 rounded md:bg-transparent @if(in_array(Request::segment(1), ['produk'])){{ 'text-white md:text-blue-700 bg-blue-700' }}@endif md:p-0" aria-current="page">Produk</a>
        </li>
        <li>
            <a href="{{ route('kontak') }}" class="block py-2 pl-3 pr-4 text-gray-700 rounded md:bg-transparent @if(in_array(Request::segment(1), ['kontak'])){{ 'text-white md:text-blue-700 bg-blue-700' }}@endif md:p-0" aria-current="page">Kontak</a>
        </li>
        <li class="mb-2 md:mb-0">
            <a href="{{ route('profil') }}" class="block py-2 pl-3 pr-2 text-gray-700 rounded md:bg-transparent @if(in_array(Request::segment(2), ['profil'])){{ 'text-white md:text-blue-700 bg-blue-700' }}@endif md:p-0" aria-current="page">Profil</a>
        </li>
        @auth
        @if (Auth::user()->id == 1)
        <li class="mb-2 md:mb-0">
            <a href="{{ route('dashboard') }}" class="block py-2 pl-3 pr-2 text-gray-700 rounded md:bg-transparent @if(in_array(Request::segment(2), ['dashboard'])){{ 'text-white md:text-blue-700 bg-blue-700' }}@endif md:p-0" aria-current="page">Dashboard</a>
        </li>
        @endif
        <hr class="hidden md:inline w-px h-6 bg-slate-200" />
        <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full pl-3 pr-4 font-medium text-gray-700 rounded md:bg-transparent @if(in_array(Request::segment(1), ['tentang'])){{ 'text-white md:text-blue-700 bg-blue-700' }}@endif md:p-0">{{ Auth::user()->name }} <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>

            <div id="dropdownNavbar" class="z-10 border border-solid border-gray-300 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                  <li>
                    <a href="{{ route('akun-setting') }}" class="block px-4 py-2 hover:bg-gray-100 @if(in_array(Request::segment(2), ['setting'])){{ 'text-white md:text-blue-700 md:bg-white bg-blue-700' }}@endif">Akun</a>
                  </li>
                  <li>
                    <a href="{{ route('my-order') }}" class="block px-4 py-2 hover:bg-gray-100 @if(in_array(Request::segment(1), ['my-order'])){{ 'text-white md:text-blue-700 md:bg-white bg-blue-700' }}@endif">Pesanan</a>
                  </li>
                </ul>
                <div class="py-1">
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <a class="font-medium text-sm text-indigo-500 hover:text-indigo-600 flex items-center py-1 px-3"
                            href="{{ route('logout') }}"
                            @click.prevent="$root.submit();"
                            @focus="open = true"
                            @focusout="open = false"
                        >
                            {{ __('Sign Out') }}
                        </a>
                    </form>
                </div>
            </div>
        </li>
        @endauth
        @guest
        <li>
            <div class="bg-blue-400 p-1 px-3 rounded transition ease duration-300 hover:bg-blue-500">
                <a href="{{ route('login') }}" class="block py-2 pl-3 pr-2 text-white rounded md:bg-transparent md:p-0" aria-current="page">Login</a>
            </div>
        </li>
        <li>
            <div class="border-blue-400 border p-1 px-3 rounded mt-2 md:mt-0 md:-ml-5 transition ease duration-300 hover:border-blue-500 hover:text-blue-500">
                <a href="{{ route('register') }}" class="block py-2 pl-3 pr-2 text-blue-400 hover:text-blue-500 rounded md:bg-transparent md:p-0 transition ease duration-300" aria-current="page">Sign Up</a>
            </div>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
