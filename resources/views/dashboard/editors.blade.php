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
                        <th class="p-2">Nível de Acesso</th>
                        <th class="p-2">Operações</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                    @foreach ($editors as $editor)
                        <tr class="border-b border-gray-300">
                            <td class="p-2">
                                {{ $editor->name }}
                            </td>
                            <td class="p-2">
                                {{ $editor->email }}
                            </td>
                            <td class="p-2 text-center">
                                {{ $editor->level }}
                            </td>
                            <td class="p-2">
                                <button
                                    class="p-1 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300 text-center">Editar</button>
                                @if ($editor->status === 0)
                                <button
                                class="p-1 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300 text-center">Ativar</button>

                                @else
                                    <button
                                    class="p-1 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300 text-center">Desativar</button>
                                @endif

                                </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </section>
@endsection
