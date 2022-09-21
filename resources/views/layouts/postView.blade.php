<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('postView-title')</title>
</head>

<body>

    <header>

        <nav class="px-2 sm:px-4 py-2.5 bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-600">
            <div class="container flex flex-wrap justify-center items-center mx-auto">

                <div class="justify-start items-center flex order-1" id="navbar-sticky">
                    <a href="{{ route('post-index') }}" type="button"
                        class="py-2.5 px-5  flex text-sm font-medium  focus:outline-none  rounded-lg border  hover:text-gray-100 focus:z-10 focus:ring-4  focus:ring-gray-700 bg-gray-800 text-gray-400 border-gray-600  hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                        </svg>
                        Análise de posts
                    </a>
                   {{--  <ul
                        class="flex p-4 rounded-lg  flex-row space-x-8 mt-0 text-sm font-medium border-0  bg-gray-900 border-gray-700">
                        <li>
                            <a href="#"
                                class="block py-2 pr-4 pl-3  rounded  md:hover:bg-transparent md:hover:text-blue-700 md:p-0  text-gray-400 hover:bg-gray-700 hover:text-white  hover:bg-transparent border-gray-700">About</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pr-4 pl-3  rounded  md:hover:bg-transparent md:hover:text-blue-700 md:p-0  text-gray-400 hover:bg-gray-700 hover:text-white  hover:bg-transparent border-gray-700">Services</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pr-4 pl-3  rounded  md:hover:bg-transparent md:hover:text-blue-700 md:p-0  text-gray-400 hover:bg-gray-700 hover:text-white  hover:bg-transparent border-gray-700">Contact</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pr-4 pl-3  rounded  md:hover:bg-transparent md:hover:text-blue-700 md:p-0  text-gray-400 hover:bg-gray-700 hover:text-white  hover:bg-transparent border-gray-700">About</a>
                        </li>

                    </ul> --}}
                </div>
            </div>
        </nav>
    </header>

    <main class="bg-gray-800 w-screen h-screen">
        @yield('postView-content')
    </main>


</body>

</html>
