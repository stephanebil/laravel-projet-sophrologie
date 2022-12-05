<nav class="lg:flex lg:justify-between bg-bluefirst text-goldfirst items-center py-5 px-6 w-full md:px-20 fixed z-50  top-0 ">
    <div class="flex justify-between items-center">
        {{-- logo --}}
        <div class="text-xl font-bold text-center px-2 py-1 border-b-2 border-goldfirst rounded-lg bg-bluefirst">
            <a href="/" class="">
                <div class="font-light text-sm italic"><span class="text-goldhover font-bold text-lg">V</span>alérie <span class="text-goldhover font-bold text-lg">D</span>elcourt</div>
                <div class="uppercase text-goldhover">Sophrologue</div>
            </a>
        </div>
        {{-- hamburger --}}
        <div class="-mr-2 flex items-center lg:hidden">
            <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-goldfirst hover:text-goldhover hover:bg-bluehover focus:outline-none focus:bg-goldfirst focus:text-bluehover transition duration-150 ease-in-out" id="menu-btn" aria-expanded="false">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
    {{-- menu --}}
    <div class="w-full bg-bluefirst absolute left-0 -translate-y-[500px] py-4 px-[35%] lg:px-0 -z-10 lg:visible uppercase text-xs flex flex-col lg:flex-row lg:static   lg:z-10 lg:w-[75%] xl:w-[65%] lg:transform-none justify-between " id="toggled-menu">
        <div class="grid lg:flex  ">
            
                <a href="{{ route('quisuisje') }}" class="hover:text-goldhover hover:bg-bluehover px-3 py-2 rounded-lg duration-300 {{ Request::is('pages/quisuisje') ? ' active:bg-bluehover ':'' }}">Qui suis je?</a>
                <a href="{{ route('lasophrologie') }}" class="hover:text-goldhover hover:bg-bluehover px-3 py-2 rounded-lg duration-300">La Sophrololgie</a>
                <a href="{{ route('rdv') }}" class="hover:text-goldhover hover:bg-bluehover px-3 py-2 rounded-lg duration-300">Prendre RDV</a>
                <a href="{{ route('tarif') }}" class="hover:text-goldhover hover:bg-bluehover px-3 py-2 rounded-lg duration-300">Tarif</a>
                <a href="{{ route('blog') }}" class="hover:text-goldhover hover:bg-bluehover px-3 py-2 rounded-lg duration-300 ">Blog</a>
                {{-- <a href="{{ route('register') }}" class="hover:text-goldhover hover:bg-bluehover px-3 py-2 rounded-lg duration-300">Inscription</a> --}}
            @auth    
                <a href="{{ route('dashboard') }}" class="hover:text-goldhover hover:bg-bluehover px-3 py-2 rounded-lg duration-300">Dashboard</a>
            @endauth
        </div>
        <div class="grid lg:flex ">
            
                <a href="{{ route('listcontacts.create') }}" class="hover:text-goldhover hover:bg-bluehover px-3 py-2 rounded-lg duration-300">Contactez Moi</a>
            @guest
                <a href="{{ route('dashboard') }}" class="hover:text-goldhover hover:bg-bluehover px-3 py-2 rounded-lg duration-300">Connexion</a>
            @endguest    
            @auth   
                <x-items.btn-logout/>
            @endauth
        </div>
    </div>
    
</nav>