@extends('layouts.admin')

@section('title-adm', 'Seja bem vindo adm')

@section('content-dashboard')
    <section class="container h-screen flex mt-5">
        <div class="mx-auto flex mt-5 justify-center space-x-4">
            <div class="flex items-center justify-center w-40 h-40 rounded-full bg-blue-600">
                <h1 class="text-white text-xl">20 posts criados</h1>
            </div>
            <div class="flex items-center justify-center w-40 h-40 rounded-full bg-green-600">
                <h1 class="text-white text-xl">7 Categorias</h1>
            </div>

            <div class="flex items-center justify-center text-center w-40 h-40 rounded-full bg-gray-600">
                <h1 class="text-white text-xl">5 editores cadastrados</h1>
            </div>
        </div>
    </section>
@endsection
