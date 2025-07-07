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

            <div class="relative px-6 py-20 pr-18 z-20 space-y-4">
                <a class="capitalize bg-blue-950 px-4 py-2 text-sm inline-block">we are trusted our customers</a>
                <h1 class="text-3xl font-semibold leading-relaxed">We Provide Experts To Great Value For Business</h1>
                <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto ipsa repudiandae
                    ea labore nemo voluptate earum et? Ad, temporibus enim?</p>
                <a href="" class="bg-blue-950 text-base px-10 py-3 rounded-lg font-medium inline-block">Contact
                    Us</a>
            </div>
        </header>
    </body>

</html>
