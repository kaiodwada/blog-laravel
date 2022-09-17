@extends('layouts.rawLayout')
@section('raw-title', 'Login dashboard')

@section('raw-content')
<section class="h-screen w-screen flex items-center justify-center bg-indigo-900 bg-opacity-30">
    <section class="bg-gray-50 w-80 p-6 rounded-sm shadow-md space-y-4 ">

        <h1 class="font-bold text-center text-xl text-blue-500">Login</h1>
        <div>
            <label for="email" class="block text-sm text-blue-700 font-bold">Email</label>
            <input id="email" name="email" type="email" placeholder="email@email.com"
                class="w-full border-gray-300 text-gray-900 text-sm rounded-lg  focus:border-blue-500
                shadow-md border-gray m-1 focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 placeholder:italic focus:outline-none transition ease-in-out duration-200"
                autocomplete="off">
        </div>

        <div>
            <label for="senha" class="block text-sm text-blue-700 font-bold">Senha</label>
            <input id="senha" name="senha" type="password" placeholder="*******"
                class="w-full border-gray-300 text-gray-900 text-sm rounded-lg  focus:border-blue-500
                shadow-md border-gray m-1 focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 placeholder:italic focus:outline-none transition ease-in-out duration-200"
                autocomplete="off">
        </div>

        <div>
            <button onclick="loginAdmin()"
            class="shadow bg-blue-500 p-2 rounded-md transition  hover:bg-indigo-800 duration-300 text-white w-full">Login</button>
        </div>

        <div class="flex flex-col">
            <a href="#" class="hover:underline hover:text-blue-500 text-base text-gray-500">Esqueci minha senha</a>
        </div>

    </section>
</section>
<script>
    function loginAdmin(){
        window.location.href = "{{ route('home-dashboard') }}"
    }
</script>
@endsection
