@extends('layouts.admin')

@section('title-adm', 'Todos os usuários')

@section('content-dashboard')
    <section class="container flex items-center ml-80 justify-start py-20">
        <div>

        <h1 class="text-2xl text-gray-800 font-bold mb-4">Todos os editores cadastrados</h1>

        <table id="Table" class="table table-striped bg-gray-50 shadow-md">
            <thead class="border-b border-gray-300">
                <tr>
                    <th class="p-2">Nome</th>
                    <th class="p-2">E-mail</th>
                    <th class="p-2">Acesso</th>
                    <th class="p-2">Operações</th>
                </tr>
            </thead>
            <tbody id="tbody">

                <tr class="border-b border-gray-300">
                    <td class="p-2">
                        Lucas
                    </td>

                    <td class="p-2">
                        lucas@email.com
                    </td>
                    <td class="p-2">
                        Editor
                    </td>
                    <td class="p-2">
                        <button class="p-1 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300 text-center">Editar</button>
                        <button class="p-1 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300 text-center">Excluir</button>
                    </td>
                </tr>
                <tr class="border-b border-gray-300">
                    <td class="p-2">
                        Lucas
                    </td>

                    <td class="p-2">
                        lucas@email.com
                    </td>
                    <td class="p-2">
                        Editor
                    </td>
                    <td class="p-2">
                        <button class="p-1 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300 text-center">Editar</button>
                        <button class="p-1 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300 text-center">Excluir</button>
                    </td>
                </tr>
                <tr class="border-b border-gray-300">
                    <td class="p-2">
                        Lucas
                    </td>

                    <td class="p-2">
                        lucas@email.com
                    </td>
                    <td class="p-2">
                        Editor
                    </td>
                    <td class="p-2">
                        <button class="p-1 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300 text-center">Editar</button>
                        <button class="p-1 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300 text-center">Excluir</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    </section>
@endsection
