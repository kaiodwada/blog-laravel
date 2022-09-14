@extends('layouts.admin')

@section('title-adm', 'Todos os posts')

@section('content-dashboard')

    <section class="container flex items-center ml-80 justify-start py-20">
        <div class="w-90 h-90 shadow-md rounded-md">
            <h1 class="text-2xl text-gray-800 font-bold mb-3">Todos os posts</h1>
            <table class="table table-striped bg-gray-50 shadow-md">
                <thead class="border-b border-gray-300">
                    <tr>
                        <th class="p-2">
                            Titulo do post
                        </th>
                        <th class="p-2">
                            Operações
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="border-b border-gray-300">
                        <td class="p-2">
                            Post
                        </td>
                        <td class="p-2">
                            <button
                                class="p-1 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300 text-center">Editar</button>
                            <button
                                class="p-1 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300 text-center">Arquivar</button>
                        </td>
                    </tr>

                    <tr class="border-b border-gray-300">
                        <td class="p-2">
                            Post2
                        </td>
                        <td class="p-2">
                            <button
                                class="p-1 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300 text-center">Editar</button>
                            <button
                                class="p-1 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300 text-center">Publicar</button>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </section>

@endsection
