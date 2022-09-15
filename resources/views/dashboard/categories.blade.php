@extends('layouts.admin')

@section('title-adm', 'Categorias')

@section('content-dashboard')
    <section class="container flex items-center ml-80 justify-start py-20">
        <div class="space-y-4">
            <h1 class="text-2xl text-gray-700 font-semibold">Adicionar categorias</h1>
            <form action="{{ route('store-category') }}" method="POST">
                @csrf
                <div class="mb-2">

                    <input id="name" name="name" type="text" placeholder="Nome da Categoria"
                        class="w-full rounded-md shadow-md bg-gray-100 border-gray m-1 focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 placeholder:italic focus:outline-none p-2 transition ease-in-out duration-200"
                        autocomplete="off">

                    @error('name')
                        <div class="bg-red-800 text-gray-50 rounded-md px-1 mx-3">{{ $message }}</div>
                    @enderror


                </div>

                <div>
                    <select name="status" id="status"
                        class="p-2 w-full bg-gray-100 text-gray-600 border-gray shadow-md rounded-md m-1">
                        <option value="1">Ativo</option>
                        <option value="0">Inativo</option>
                    </select>
                </div>
                <div>
                    <button type="submit"
                        class="flex items-center justify-center p-2 mt-2 ml-2 w-28 h-10 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300">
                        Adicionar</button>
                </div>
            </form>
        </div>

    </section>

    <div class="container flex items-center justify-center -ml-28 py-15 h-40 w-screen ">
        <div>
            <table class="text-gray-500 dark:text-gray-400">
                <thead class="text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="py-2 px-6">
                            Categoria
                        </th>
                        <th class="py-2 px-6">
                            Status
                        </th>
                        <th class="py-2 px-6">
                            Operações
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($categories as $category)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="py-1 px-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $category->name }}
                            </td>
                            <td class="py-1 px-4">
                                {{ $category->status }}
                            </td>
                            <td class="py-1 px-4">
                                @if ($category->status === 0)
                                    <button class="text-indigo-400">Ativar</button>
                                @else
                                    <button class="text-indigo-400">Desativar</button>
                                @endif

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div>
                <ul class="items-center justify-center  p-2 bg-gray-400  text-white rounded-b-md">
                    {{ $categories->links() }}
                </ul>
            </div>
        </div>

    </div>
@endsection
