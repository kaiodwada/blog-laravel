@extends('layouts.postView')

@section('postView-title', 'Análise de post')

@section('postView-content')

    <section class="py-20">

        <div class="flex flex-col text-white">
            <h1 class="text-center font-bold text3xl">{{ $post->title }}</h1>

            <div class="justify-center p-3 ">
                {!! $post->content !!}
            </div>

            <div class="text-end p-2 mr-2">
                {{ $post->author }}
            </div>

        </div>

    </section>

    <div class="container flex justify-center  space-x-2 mt-5 dark">

        <div class="space-y-4 rounded-lg border  p-2 shadow-md  bg-gray-800 border-gray-700">
            <form action="" method="POST">
                @csrf
                <div class="mb-2">
                    <input id="name" name="name" type="text" placeholder="Motivo da reprovação"
                        class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white"
                        autocomplete="off">

                </div>


                <div>
                    <button type="submit"
                        class="py-2.5 px-5 w-full mt-3  text-sm font-medium  focus:outline-none  rounded-lg border  hover:text-gray-100 focus:z-10 focus:ring-4  focus:ring-gray-700 bg-gray-800 text-gray-400 border-gray-600  hover:bg-gray-700">
                        Reprovar</button>
                </div>
            </form>
        </div>

        <div class="rounded-lg border p-2 shadow-md flex items-center  bg-gray-800 border-gray-700">
            <form action="" method="POST">
                @csrf

                <div class="">
                    <button type="submit"
                        class="py-2.5 px-5 w-full text-sm font-medium  focus:outline-none  rounded-lg border  hover:text-gray-100 focus:z-10 focus:ring-4  focus:ring-gray-700 bg-gray-800 text-gray-400 border-gray-600  hover:bg-gray-700">
                        Aprovar</button>
                </div>
            </form>
        </div>

    </div>
@endsection
