@extends('layouts.admin')

@section('title-adm', 'Categorias')

@section('content-dashboard')
    <section class="container flex items-center ml-80 justify-start py-20">
        <div class="space-y-4">
            <h1 class="text-2xl text-gray-700 font-semibold">Adicionar categorias</h1>
            <form action="{{ route('category-store') }}" method="POST">
                @csrf
                <div class="mb-2">
                    <input id="name" name="name" type="text" placeholder="Nome da Categoria"
                        class="p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  focus:border-blue-500  w-full
                        shadow-md border-gray m-1 focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 placeholder:italic focus:outline-none transition ease-in-out duration-200"
                        autocomplete="off">

                    @error('name')
                        <div class="bg-red-800 text-gray-50 rounded-md px-1 mx-3">{{ $message }}</div>
                    @enderror

                </div>

                <div>
                    <select name="status" id="status"
                        class="p-3 w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg shadow-md border-gray m-1">
                        <option value="1">Ativo</option>
                        <option value="0">Inativo</option>
                    </select>
                </div>
                <div>
                    <button type="submit"
                        class="flex items-center justify-center p-2 mt-2 ml-2 w-28 h-10 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-800 hover:text-gray-50 transition ease-in-out duration-300">
                        Adicionar</button>
                </div>
            </form>
        </div>

    </section>
    <hr>
    <section class="container flex items-center ml-80 justify-start py-10">
        <div class="rounded-lg">
            <p class="text-2xl text-gray-700 font-semibold p-3">Categorias cadastradas</p>
            <table class="w-full text-sm text-left  text-gray-400">
                <thead class="text-xs  uppercase  bg-gray-700 text-gray-400">
                    <tr>
                        <th class="py-3 px-6">
                            Categoria
                        </th>

                        <th class="py-3 px-6">
                            Operações
                        </th>
                    </tr>
                </thead>


                <tbody>
                    @foreach ($categories as $category)
                        <form action="{{ route('category-changeStatus', $category->id) }}" method="POST">
                            @csrf
                            @method('put')
                            <input type="text" name="name" value="{{ $category->name }}" readonly hidden>
                            <input type="number" name="status" value="{{ $category->status }}" readonly hidden>
                            <tr class="border-b bg-gray-800 border-gray-700 hover:bg-gray-600">
                                <th scope="row" class="py-4 px-6 font-medium whitespace-nowrap text-white">
                                    {{ $category->name }}
                                </th>
                                <td class="py-4 px-6">
                                    @if ($category->status === 0)
                                        <button type="submit"
                                            class="text-indigo-400 p-1 rounded-md hover:text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300">Ativar</button>
                                    @else
                                        <button type="submit"
                                            class="text-indigo-400 p-1 rounded-md hover:text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300">Desativar</button>
                                    @endif

                                </td>
                            </tr>
                        </form>
                    @endforeach
                </tbody>

            </table>

            <div >
                <ul class="bg-gray-500 text-gray-50 p-2 rounded-b-md">
                    {{$categories->links()}}
                </ul>
            </div>
        </div>
    </section>



@endsection
