@extends('layouts.admin')

@section('title-adm', 'Categorias')

@section('content-dashboard')
    <section class="container  flex items-center ml-80 justify-start py-20 border-b-2 border-gray-400">
        <div class="space-y-4">
            <h1 class="text-2xl text-gray-700 font-semibold">Adicionar categorias</h1>
            <form action="" class="">
                <div class="mb-2">
                    <input id="email" name="email" type="email" placeholder="Categoria"
                        class="w-full rounded-md shadow-md bg-gray-100 border-gray m-1 focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 placeholder:italic focus:outline-none p-2 transition ease-in-out duration-200"
                        autocomplete="off">
                </div>

                <div>
                    <select name="status" id="status"
                        class="p-2 w-full bg-gray-100 text-gray-600 border-gray shadow-md rounded-md m-1">
                        <option value="">Ativo</option>
                        <option value="">Inativo</option>
                    </select>
                </div>
                <div>
                    <button
                        class="flex items-center justify-center p-2 mt-2 ml-2 w-28 h-10 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300">Adicionar</button>
                </div>
            </form>
        </div>

    </section>

    <div class="container flex items-center justify-center -ml-28 py-15 h-40 w-screen mt-14">
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
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="py-1 px-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Filmes
                        </td>
                        <td class="py-1 px-4">
                            Inativo
                        </td>
                        <td class="py-1 px-4">
                            <button class="text-indigo-400">Ativar</button>
                        </td>
                    </tr>

                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="py-1 px-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Jogos
                        </td>
                        <td class="py-1 px-4">
                            Ativo
                        </td>
                        <td class="py-1 px-4">
                            <button class="text-indigo-400">Desativar</button>
                        </td>
                    </tr>

                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="py-1 px-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Esportes
                        </td>
                        <td class="py-1 px-4">
                            Inativo
                        </td>
                        <td class="py-1 px-4">
                            <button class="text-indigo-400">Ativar</button>
                        </td>
                    </tr>
                </tbody>
            </table>



            <div>
                <ul class="flex items-center justify-center space-x-3 p-2 bg-gray-600 text-white rounded-b-md">
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </div>
        </div>

    </div>
@endsection
