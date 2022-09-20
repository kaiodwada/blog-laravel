@extends('layouts.admin')

@section('title-adm', 'Análise de post')

@section('content-dashboard')

    <section class="container flex flex-wrap items-center ml-80 justify-start py-20">

        <div class="">
            <h1 class="text3xl font-bold m-5">{{ $post->title }}</h1>

            <div class="w-80">
                {{ $post->content }}
            </div>
        </div>


        <section class="flex items-center justify-center space-x-2 mt-5">
            <button
                class="py-2.5 px-5 w-full  text-sm font-medium  focus:outline-none  rounded-lg border  hover:text-gray-100 focus:z-10 focus:ring-4  focus:ring-gray-700 bg-gray-800 text-gray-400 border-gray-600  hover:bg-gray-700">
                Aprovar
            </button>
        </section>

    </section>

@endsection
