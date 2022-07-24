@extends('layouts.rawLayout')
@section('raw-title', 'Login dashboard')

@section('raw-content')
<section class="h-screen w-screen flex items-center justify-center bg-indigo-900 bg-opacity-30">
    <section class="bg-gray-50 w-80 p-6 rounded-sm shadow-md space-y-4 ">

        <h1 class="font-bold text-center text-xl text-blue-500">Login</h1>
        <section class=" ">
            <label for="email" class="block text-sm text-gray-600">Email</label>
            <input id="email" name="email" type="email" placeholder="email@email.com"
                class="w-full rounded-md shadow-md bg-gray-100 border-gray m-1 focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 placeholder:italic focus:outline-none p-2 transition ease-in-out duration-200"
                autocomplete="off">
        </section>

        <section class="">
            <label for="senha" class="block text-sm text-gray-600">Senha</label>
            <input id="senha" name="senha" type="password" placeholder="*******"
                class="w-full rounded-md shadow-md bg-gray-100 border-gray m-1 focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 placeholder:italic focus:outline-none p-2 transition ease-in-out duration-200"
                autocomplete="off">
        </section>

        <section>
            <a href="{{ route('home-dashboard') }}" class="shadow bg-blue-500 p-2 rounded-md w-full text-white">Login</a>
        </section>

        <section class="flex flex-col">
            <a href="#" class="hover:underline hover:text-blue-500 text-base text-gray-500">Esqueci minha senha</a>
        </section>

    </section>
</section>
@endsection
