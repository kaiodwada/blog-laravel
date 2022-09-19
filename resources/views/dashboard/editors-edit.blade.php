@extends('layouts.admin')

@section('title-adm', 'Dados do editor')

@section('content-dashboard')

    <section class="container flex items-center ml-80 justify-start py-20">

        <div class="p-4 w-1/2  max-w rounded-lg border  shadow-md sm:p-6 md:p-8 bg-gray-800 border-gray-700">
            <form class="space-y-6" action="#">
                <h5 class="text-xl font-medium text-white">Dados de {{ $editor->name }}</h5>

                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-300">Email</label>
                    <input type="email" name="email" id="email" value="{{ $editor->email }}"
                        class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white">
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-300">Data de nascimento</label>
                    <input type="date" name="email" id="email" value="{{ $editor->age }}"
                        class="border cursor-not-allowed  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white"
                        readonly>
                </div>
                <div>
                    <label for="gender" class="block mb-2 text-sm font-medium text-gray-300">Gênero</label>
                    <input name="gender" id="gender" value="{{ $editor->gender }}" class="border cursor-not-allowed  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white"  type="text" readonly>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-300">Nível de Acesso</label>
                    <select name="level" id="level" class="border-gray-500 placeholder-gray-400 text-white bg-gray-600 border 0 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="{{ $editor->level }}"> @if ($editor->level === 4) *Editor @elseif($editor->level === 3)*Gerente @elseif($editor->level === 2) *Aprovador @elseif($editor->level === 1) *Administrador @endif</option>
                        <option value="4">Editor</option>
                        <option value="3">Gerente</option>
                        <option value="2">Aprovador</option>
                        <option value="1">Administrador</option>
                    </select>
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium  text-gray-300">Senha</label>
                    <div class="flex items-center mb-4 ml-3">
                        <input id="default-checkbox" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-checkbox" class="ml-2 font-medium  text-gray-300">Liberar mudança de
                            senha</label>
                    </div>
                </div>

                <div>
                    <button type="button"
                        class="py-2.5 px-5 w-full  text-sm font-medium  focus:outline-none  rounded-lg border  hover:text-gray-100 focus:z-10 focus:ring-4  focus:ring-gray-700 bg-gray-800 text-gray-400 border-gray-600 dhover:text-white hover:bg-gray-700">Salvar
                        alterações</button>
                </div>

            </form>
        </div>
        <div
            class="p-4 w-80 max-w-sm flex justify-center flex-wrap rounded-lg rounded-tl-none rounded-bl-none border border-l-0  shadow-md sm:p-6 md:p-8 bg-gray-800 border-gray-700">
            <div>
                <input type="text" name="name" id="name" value="{{ $editor->name }}"
                    class="border cursor-not-allowed text-md text-center rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-1 bg-gray-600 border-gray-500 placeholder-gray-400 text-white"
                    autocomplete="off" readonly>
            </div>

            <div class="p-2.5 mt-1 flex items-center rounded-md justify-center">
                <img src="{{ Storage::url($editor->image) }}" class="border border-gray-400 p-1">
            </div>
            <div class="flex justify-center align-center">
                <span class="font-medium text-gray-200 p-1">Desde:</span>
                <input type="text" name="createdAt" id="createdAt" value="{{ $editor->updated_at }}"
                    class="border cursor-not-allowed text-center text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-1 bg-gray-600 border-gray-500 placeholder-gray-400 text-white"
                    autocomplete="off" readonly>
            </div>
        </div>
    </section>

@endsection
