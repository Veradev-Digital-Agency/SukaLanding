<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav class="bg-white border-gray-200 fixed top-0 left-0 w-full z-50 font-roboto">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="#" class="h-8" alt="Logo" />
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full lg:block lg:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 lg:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 lg:flex-row lg:space-x-8 rtl:space-x-reverse lg:mt-0 lg:border-0 lg:bg-white">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white bg-blue-950 rounded-sm lg:bg-transparent lg:text-blue-950 lg:p-0"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-950 lg:p-0">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-950 lg:p-0">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-950 lg:p-0">Pricing</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-950 lg:p-0">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="mt-16 relative text-white font-roboto">
        <div class="absolute inset-0 bg-fixed bg-center bg-cover z-0"
            style="background-image: url('{{ asset('storage/laptop-background.jpeg') }}');">
        </div>

        <!-- Overlay Gelap -->
        <div class="absolute inset-0 bg-black opacity-60 z-10"></div>

        <div class="relative px-6 py-20 pr-18 z-20 space-y-4 max-w-3xl md:max-w-2xl lg:pl-14">
            <a class="capitalize bg-blue-950 px-4 py-2 text-sm inline-block">we are trusted our customers</a>
            <h1 class="text-3xl font-semibold leading-relaxed md:max-w-sm md:text-4xl lg:max-w-xl lg:text-5xl">We
                Provide
                Experts To Great
                Value For
                Business</h1>
            <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto ipsa repudiandae
                ea labore nemo voluptate earum et? Ad, temporibus enim?</p>
            <a href="" class="bg-blue-950 text-base px-10 py-3 rounded-lg font-medium inline-block">Contact
                Us</a>
        </div>
    </header>

    <section class="font-roboto text-gray-900 px-6 py-10 grid grid-cols-1 gap-y-4 md:grid-cols-3 md:gap-x-6 md:px-10 lg:px-16">
        @foreach (collect($cards)->slice(0)->take(3) as $card)
            <article
                class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-lg transition duration-300 {{ $card['class'] ?? '' }}">
                <div class="space-y-2">
                    <figure>
                        <img src="{{ asset('storage/' . $card['image']) }}" alt="{{ $card['title'] }}"
                            class="w-12 h-12 mb-4" loading="lazy">
                    </figure>
                    <h3 class="text-2xl font-semibold tracking-tight text-gray-900 capitalize min-h-[3.5rem]">
                        {{ $card['title'] }}
                    </h3>
                    <p class="text-gray-700 text-justify">
                        {{ $card['description'] }}
                    </p>
                </div>
            </article>
        @endforeach
    </section>

    <main class="font-roboto text-gray-900 px-10 py-18 space-y-10 md:space-y-0 md:flex md:gap-x-12 items-center">
        <!-- Konten Kiri -->
        <div class="capitalize flex flex-col space-y-4 md:w-1/2">
            <h3 class="text-blue-950 uppercase text-2xl font-bold">Who we are</h3>
            <h2 class="font-medium text-4xl">Welcome To Business Our Solution Company</h2>
            <p class="text-sm text-justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin diam justo, scelerisque non felis
                porta, placerat vestibulum nisi. Vestibulum ac elementum massa...
            </p>
            <ul>
                <li class="flex items-center space-x-4">
                    <img src="{{ asset('storage/checklist.svg') }}" alt="" class="w-5 h-5">
                    <span>Lorem, ipsum dolor.</span>
                </li>
            </ul>
            <a href="#"
                class="bg-blue-950 w-1/2 text-white text-center py-2 rounded self-center mt-4 md:self-start md:w-1/3">
                Contact
            </a>
        </div>

        <!-- Gambar Kanan -->
        <div class="md:w-1/2 h-72 md:h-96">
            <img src="{{ asset('storage/laptop-background.jpeg') }}" alt="Anuapaya"
                class="w-full h-full object-cover rounded-lg shadow">
        </div>
    </main>

    <section class="text-gray-900 p-10 space-y-10 font-roboto"
        style="background-image: url('{{ asset('storage/bg-white.jpeg') }}'); background-size: cover;">
        <div class="text-center space-y-4">
            <h3 class="uppercase text-blue-950 text-2xl font-bold">Success with US</h3>
            <h2 class="capitalize font-medium text-4xl">Why Choose Us</h2>
            <p class="text-md font-medium md:mx-auto md:max-w-2xl">Lorem ipsum dolor sit amet, consectetur
                adipiscing
                elit. Proin
                diam
                justo, scelerisque
                non felis
                porta, placerat vestibulum nisi. Vestibulum ac elementum massa. In rutrum quis risus quis
                sollicitudin. Pellentesque non eros ante. Vestibulum sed tristique massa.</p>
        </div>

        <div class="grid grid-cols-1 gap-y-8 md:grid-cols-3 md:gap-x-6 lg:px-20 lg:gap-x-10 ">
            @foreach (collect($cards)->slice(3)->take(3) as $card)
                <article class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-xl overflow-hidden">
                    <figure>
                        <img src="{{ asset('storage/' . $card['image']) }}" alt="{{ $card['title'] }}"
                            class="w-full h-48 object-cover rounded-t-lg" />
                    </figure>
                    <section class="p-5">
                        <header>
                            <h2 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">
                                {{ $card['title'] }}
                            </h2>
                        </header>
                        <p class="mb-3 font-base text-gray-700 text-justify">
                            {{ $card['description'] }}
                        </p>
                    </section>
                </article>
            @endforeach
        </div>
    </section>

    <section class="text-gray-900 p-10 space-y-10 font-roboto">
        <div class="text-center space-y-4">
            <h3 class="uppercase text-blue-950 text-2xl font-bold">EXPLORE OUR SERVICES</h3>
            <h2 class="capitalize font-medium text-4xl">Our Professional Services</h2>
            <p class="text-md font-medium md:mx-auto md:max-w-2xl">it. Proin diam justo, scelerisque non felis
                porta, placerat vestibulum nisi. Vestibulum ac elementum massa. In rutrum quis risus quis
                sollicitudin. Pellentesque non eros ante. Vestibulum sed tristique massa.</p>
        </div>

        <div class="grid grid-cols-1 gap-y-4 md:grid-cols-3 md:gap-x-6 md:px-10 lg:px-20">
            @foreach (collect($cards)->slice(0)->take(3) as $card)
                <article
                    class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-lg transition duration-300 {{ $card['class'] ?? '' }}">
                    <div class="space-y-2 flex flex-row space-x-6">
                        <figure>
                            <img src="{{ asset('storage/' . $card['image']) }}" alt="{{ $card['title'] }}"
                                class="w-12 h-12 mb-4" loading="lazy">
                        </figure>
                        <div>
                            <h3 class="text-2xl font-semibold tracking-tight text-blue-950 capitalize min-h-[3.5rem]">
                                {{ $card['title'] }}
                            </h3>
                            <p class="text-blue-950 text-justify">
                                {{ $card['description'] }}
                            </p>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

    <section
        class="text-white p-10 bg-blue-950 text-center font-roboto lg:text-left lg:flex lg:items-center lg:justify-between lg:px-20">
        <h2 class="capitalize font-medium text-4xl mb-8 lg:mb-0">
            Get to know us better
        </h2>

        <ul class="flex flex-col space-y-6 lg:flex-row lg:space-y-0 lg:space-x-10">
            <li class="flex flex-col items-center lg:items-start font-semibold space-y-1">
                <span class="text-4xl font-bold">120+</span>
                <span class="text-2xl">Happy Clients</span>
            </li>
            <li class="flex flex-col items-center lg:items-start font-semibold space-y-1">
                <span class="text-4xl font-bold">80+</span>
                <span class="text-2xl">Projects Delivered</span>
            </li>
            <li class="flex flex-col items-center lg:items-start font-semibold space-y-1">
                <span class="text-4xl font-bold">15</span>
                <span class="text-2xl">Awards Won</span>
            </li>
        </ul>
    </section>

    <section class="text-gray-900 p-10 pb-18 space-y-10 font-roboto">
        <div class="text-center space-y-4">
            <h3 class="uppercase text-blue-950 text-2xl font-bold">PROJECTS</h3>
            <h2 class="capitalize font-medium text-4xl">Our Latest Projects</h2>
            <p class="text-md font-medium md:mx-auto md:max-w-2xl">it. Proin diam justo, scelerisque non felis
                porta, placerat vestibulum nisi. Vestibulum ac elementum massa. In rutrum quis risus quis
                sollicitudin. Pellentesque non eros ante. Vestibulum sed tristique massa.</p>
        </div>

        <div class="grid grid-cols-1 gap-y-4 md:grid-cols-3 md:gap-x-6 md:px-10 lg:px-20">
            @foreach (collect($cards)->slice(6)->take(6) as $card)
                <div class="aspect-[1/1] ">
                    <img src="{{ asset('storage/' . $card['image']) }}" alt="{{ $card['title'] }}" class="rounded-xl shadow-xl">
                </div>
            @endforeach
        </div>
    </section>

    <section class="text-white px-6 py-8 bg-blue-950 text-center font-roboto">
        <div class="max-w-2xl mx-auto space-y-6">
            <header class="space-y-1">
          <h2 class="capitalize font-semibold text-3xl md:text-4xl">
            Are You Looking For Professional Advice?
          </h2>
          <p class="text-md md:text-lg font-medium">
            We’re here to help you grow and succeed in your business.
          </p></header>
          <a href="#"
             class="inline-block bg-white text-blue-950 font-semibold px-6 py-3 rounded-lg text-lg md:text-base hover:bg-gray-200 transition">
            Contact Us
          </a>
        </div>
      </section>
      
      <footer class="bg-gray-900 text-white pt-12 px-6">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 pb-12 border-t-4 border-indigo-700/50">
          
          <!-- Column 1: Site Info -->
          <div>
            <h2 class="text-xl font-semibold mb-4">My Site</h2>
            <p class="text-sm text-gray-400 leading-relaxed">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin diam justo, scelerisque non felis porta, placerat vestibulum nisi.
            </p>
            <div class="flex space-x-4 mt-4">
              <a href="#" class="hover:text-indigo-500"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="hover:text-indigo-500"><i class="fab fa-twitter"></i></a>
              <a href="#" class="hover:text-indigo-500"><i class="fab fa-instagram"></i></a>
              <a href="#" class="hover:text-indigo-500"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
      
          <!-- Column 2: Services -->
          <div>
            <h2 class="text-xl font-semibold mb-4">Our Services</h2>
            <ul class="space-y-2 text-sm text-gray-300">
              <li><a href="#" class="hover:text-white">Analytic Solution</a></li>
              <li><a href="#" class="hover:text-white">Partnership System</a></li>
              <li><a href="#" class="hover:text-white">Quality Control</a></li>
              <li><a href="#" class="hover:text-white">Business Innovation</a></li>
              <li><a href="#" class="hover:text-white">Product Control</a></li>
            </ul>
          </div>
      
          <!-- Column 3: Quick Links -->
          <div>
            <h2 class="text-xl font-semibold mb-4">Quick Links</h2>
            <ul class="space-y-2 text-sm text-gray-300">
              <li><a href="#" class="hover:text-white">Blog</a></li>
              <li><a href="#" class="hover:text-white">Services</a></li>
              <li><a href="#" class="hover:text-white">About</a></li>
              <li><a href="#" class="hover:text-white">Contact</a></li>
            </ul>
          </div>
      
          <!-- Column 4: Contact -->
          <div>
            <h2 class="text-xl font-semibold mb-4">Contact Us</h2>
            <ul class="space-y-4 text-sm text-gray-300">
              <li class="flex items-start space-x-2">
                <svg class="w-5 h-5 text-indigo-500 mt-1" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13..."/></svg>
                <span>1, My Address, My Street, New York City, NY, USA</span>
              </li>
              <li class="flex items-center space-x-2">
                <svg class="w-5 h-5 text-indigo-500" fill="currentColor" viewBox="0 0 24 24"><path d="M21 8V7l-3 2..."/></svg>
                <a href="mailto:contact@domain.com">contact@domain.com</a>
              </li>
              <li class="flex items-center space-x-2">
                <svg class="w-5 h-5 text-indigo-500" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.91..."/></svg>
                <span>+1234567890</span>
              </li>
            </ul>
          </div>
      
        </div>
      
        <!-- Bottom Line -->
        <div class="text-center text-sm text-gray-500 py-6 border-t border-white/10">
          &copy; 2025 My Site. All rights reserved.
        </div>
      </footer>
      
</body>

</html>