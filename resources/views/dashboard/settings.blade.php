@extends('layouts.admin')

@section('title-adm', 'Configurações')

@section('content-dashboard')

    <section class="container flex items-center ml-80 justify-start py-20">

        <div class="p-4 w-80 max-w-sm  rounded-lg border  shadow-md sm:p-6 md:p-8 bg-gray-800 border-gray-700">
            <form class="space-y-6" action="#">
                <h5 class="text-xl font-medium text-white">Dados da minha conta</h5>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-300"> Nome</label>
                    <input type="email" name="email" id="email"
                        class="border  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white"
                        autocomplete="off">
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-300">Email</label>
                    <input type="email" name="email" id="email"
                        class="border cursor-not-allowed  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white"
                        readonly>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-300">Data de nascimento</label>
                    <input type="email" name="email" id="email"
                        class="border cursor-not-allowed  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white"
                        readonly>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-300">Gênero</label>
                    <select name="gender" id="gender" class="bg-gray-600 border border-gray-500 text-gray-50 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                        <option value="não-binário">Não binário</option>
                    </select>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-300">Nível de Acesso</label>
                    <input type="email" name="email" id="email"
                        class="border cursor-not-allowed  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white"
                        readonly>
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium  text-gray-300">Senha</label>
                    <input type="password" name="password" id="password"
                        class="border cursor-not-allowed  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white" readonly>
                </div>
                <hr>
                <div class="flex items-center mb-4">
                    <input id="checkboxPermission" type="checkbox" onclick="showInputEmail()"
                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded  ring-offset-gray-800 focus:ring-2 border-gray-600">
                    <label for="checkboxPermission" class="ml-2 text-sm font-medium  text-gray-300">Exigir mudança de
                        e-mail</label>
                </div>
                <div id="emailBox" class="ml-2 hidden">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-300">Novo e-mail a ser
                        exigido</label>
                    <input type="email" name="newEmail" id="newEmail"
                        class="border  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white">

                </div>
                <button type="submit"
                    class="w-full text-white  focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Concluir
                    alterações</button>

            </form>
        </div>


        <div class="p-4 w-80 max-w-sm  rounded-lg rounded-tl-none rounded-bl-none border border-l-0  shadow-md sm:p-6 md:p-8 bg-gray-800 border-gray-700">
            <div class="p-2.5 mt-1 flex items-center rounded-md justify-center">
                <img src="{{ Storage::url('default/m-1.png') }}" class="border border-gray-400 p-1">
            </div>

            <div>
                <input type="file" name="image" id="image"
                class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer focus:outline-none">
            </div>

        </div>
    </section>
    <script>
        function showInputEmail() {
            let checkbox = document.getElementById('checkboxPermission')
            let input = document.getElementById('emailBox')
            console.log(checkbox)
            if (checkbox.checked == true) {
                input.classList.remove('hidden')
            } else {
                input.classList.add('hidden')
            }
        }
    </script>
@endsection
