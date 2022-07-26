@extends('layouts.admin')

@section('title-adm', 'Knowledge Poster')

@section('content-dashboard')

    <section class="container flex items-center justify-center h-screen ml-80" style="width: 790px">

        <div class="bg-gray-800 sm:p-6 md:p-8 rounded-lg">
            <h1 class="text-3xl font-bold text-gray-100 mb-2">Post builder</h1>
            <form action="{{ route('post-store') }}" class="text-gray-900" method="POST">
                @csrf
                <input type="text" name="version" value="1.0" hidden readonly>
                <input type="text" name="status" value="0" hidden readonly>
                <div class="mb-3 flex items-center justify-center space-x-3">
                    {{-- <label for="title" class="font-bold text-xl text-gray-100">Titulo:</label> --}}
                    <input type="text" name="title" id="title" placeholder="Titulo..."
                        class="shadow-md border text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-gray-400 focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 focus:outline-none transition ease-in-out duration-200">
                </div>

                <div class="mb-3 flex items-center justify-center space-x-3">
                    {{-- <label for="excerpt" class="font-bold text-xl text-gray-100">Resumo:</label> --}}
                    <input type="excerpt" name="excerpt" id="excerpt" placeholder="Resumo..."
                        class="shadow-md border text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-gray-400 focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 focus:outline-none transition ease-in-out duration-200">
                </div>

                <div class="mb-3 flex items-center justify-center space-x-3">
                    {{-- <label for="category_id" class="font-bold text-xl text-gray-100">Categoria:</label> --}}

                    <select name="category_id" id="category_id"
                        class="shadow-md border text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 bg-gray-600 text-gray-400 border-gray-500 placeholder-gray-400  focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 placeholder:italic focus:outline-none transition ease-in-out duration-200">
                        <option value="" selected>Selecione a categoria</option>
                        @foreach ($categories as $category)
                            @if ($category->status === 1)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <x-forms.tinymce-editor />


                <section class="flex items-center justify-center space-x-2 mt-5">
                    <button
                        class="py-2.5 px-5 w-full  text-sm font-medium  focus:outline-none  rounded-lg border  hover:text-gray-100 focus:z-10 focus:ring-4  focus:ring-gray-700 bg-gray-800 text-gray-400 border-gray-600  hover:bg-gray-700">
                        Send for approval
                    </button>

                    {{-- <button
            class="py-2.5 px-5 w-full  text-sm font-medium  focus:outline-none  rounded-lg border  hover:text-gray-100 focus:z-10 focus:ring-4  focus:ring-gray-700 bg-gray-800 text-gray-400 border-gray-600  hover:bg-gray-700">
            Save
        </button> --}}
                </section>
            </form>
        </div>
    </section>

@endsection
