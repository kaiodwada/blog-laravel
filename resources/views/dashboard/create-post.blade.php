@extends('layouts.admin')

@section('title-adm', 'Knowledge Poster')

@section('content-dashboard')

<section class="flex items-center justify-center h-screen container mx-auto " style="width: 790px">
    <form action="{{ route('knowledge-store') }}" class="text-gray-900" method="POST">
        @csrf

    <div class="mb-3 flex items-center justify-center space-x-3">
        <label for="title" class="font-bold text-xl text-gray-600">Titulo:</label>
        <input type="text" name="title" id="title"
            class="w-full border-gray-300 text-gray-900 text-sm rounded-lg  focus:border-blue-500
            shadow-md border-gray m-1 focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 placeholder:italic focus:outline-none transition ease-in-out duration-200">
    </div>

    <div class="mb-3 flex items-center justify-center space-x-3">
        <label for="category_id" class="font-bold text-xl text-gray-600">Categoria:</label>

        <select name="category_id" id="category_id"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            <option value="" selected>Selecione a categoria</option>
            @foreach ($categories as $category)
                @if ($category->status === 1)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endif

            @endforeach
        </select>
    </div>

    <x-forms.tinymce-editor/>


    <section class="flex items-center justify-center space-x-2">
        <button
            class="flex items-center justify-center p-3 mt-2 w-40 h-10 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-800 hover:text-gray-50 transition ease-in-out duration-300">Create
            Post</button>

        <button
            class="flex items-center justify-center p-3 mt-2 w-40 h-10 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-800 hover:text-gray-50 transition ease-in-out duration-300">
            Save
        </button>
    </section>
    </form>
</section>

@endsection
