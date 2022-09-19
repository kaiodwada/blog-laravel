@extends('layouts.admin')

@section('title-adm', 'Categorias')

@section('content-dashboard')
    <section class="container flex items-center ml-80 justify-start py-20">
        <div class="space-y-4 rounded-lg border  shadow-md sm:p-6 md:p-8 bg-gray-800 border-gray-700">
            <h1 class="text-2xl text-gray-100 font-semibold">Adicionar categorias</h1>
            <form action="{{ route('category-store') }}" method="POST">
                @csrf
                <div class="mb-2">
                    <input id="name" name="name" type="text" placeholder="Nome da Categoria"
                        class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white"
                        autocomplete="off">

                    @error('name')
                        <div class="bg-red-800 text-gray-50 rounded-md px-1 mx-3">{{ $message }}</div>
                    @enderror

                </div>

                <div>
                    <select name="status" id="status"
                        class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white">
                        <option value="1">Ativo</option>
                        <option value="0">Inativo</option>
                    </select>
                </div>
                <div>
                    <button type="submit"
                        class="py-2.5 px-5 w-full mt-3  text-sm font-medium  focus:outline-none  rounded-lg border  hover:text-gray-100 focus:z-10 focus:ring-4  focus:ring-gray-700 bg-gray-800 text-gray-400 border-gray-600 dhover:text-white hover:bg-gray-700">
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
