@extends('layouts.admin')

@section('title-adm', 'Todos os usuários')

@section('content-dashboard')
    <section class="container flex items-center ml-80 justify-start py-20">
        <div>
            <h1 class="text-2xl text-gray-800 font-bold mb-4">Todos os editores cadastrados</h1>

            <div class="overflow-x-auto relative">
                <table class="w-full text-sm text-left  text-gray-400">
                    <thead class="text-xs  uppercase  bg-gray-700 text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Nome
                            </th>
                            <th scope="col" class="py-3 px-6">
                                E-mail
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Nível de Acesso
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Operações
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($editors as $editor)
                            <tr class="border-b bg-gray-800 border-gray-700 hover:bg-gray-600">
                                <th scope="row" id="name"
                                    class="py-4 px-6 font-medium whitespace-nowrap text-white">
                                    {{ $editor->name }}
                                </th>
                                <td class="py-4 px-6" id="email">
                                    {{ $editor->email }}
                                </td>
                                <td class="py-4 px-6" id="level">
                                    @if ($editor->level === 4)
                                        Editor
                                    @elseif ($editor->level === 3)
                                        Gerente
                                    @elseif ($editor->level === 2)
                                        Aprovador
                                    @elseif($editor->level === 1)
                                        Administrador
                                    @endif
                                </td>

                                <td class="py-4 px-6">
                                    <a href="{{ route('editors-edit', $editor->id) }}"
                                        class="p-1 font-semibold  rounded-lg text-gray-100 hover:text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300 text-center">Atribuições</a>

                                    <form enctype="multipart/form-data" action="{{ route('editors-changeStatus', $editor->id) }}" method="POST">
                                        @csrf
                                        @method('put')

                                        <input type="number" name="status" value="{{ $editor->status }}" hidden readonly>
                                        <input type="text" name="name"  value="{{ $editor->name }}" hidden readonly>
                                        <input type="text" name="gender"  value="{{ $editor->gender }}" hidden readonly>
                                        <input type="date" name="age" value="{{ $editor->age }}" hidden readonly>
                                        <input type="email" name="email" value="{{ $editor->email }}" hidden readonly>
                                        <input type="password" name="password"  value="{{ $editor->password }}" hidden readonly>
                                        <input type="number" name="level" value="{{ $editor->level }}" hidden readonly>
                                        <input type="file" name="image" value="{{ $editor->image }}" hidden readonly>

                                        @if ($editor->status === 0)
                                        <button type="submit"
                                            class="p-1  font-semibold  rounded-lg text-gray-100 hover:text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300 text-center">Ativar</button>
                                    @else
                                        <button type="submit"
                                            class="p-1  font-semibold  rounded-lg text-gray-100 hover:text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300 text-center">Desativar</button>
                                    @endif
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div>
                <ul class="items-center justify-center  p-2  text-white rounded-b-md">
                    {{ $editors->links() }}
                </ul>
            </div>
        </div>
    </section>

@endsection
