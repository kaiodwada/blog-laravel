@extends('layouts.admin')

@section('title-adm', 'Editors')

@section('content-dashboard')

<section class="container flex items-center ml-80 justify-start py-20 border-b-2">
    <div class="space-y-4">
        <h1 class="text-3xl text-gray-700 font-bold">Adicione um novo editor</h1>
        <form action="{{ route('editors-store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <input name="name" id="name" type="text" value="{{ old('name') }}" placeholder="Adicione o nome" autocomplete="off" class="w-full rounded-md shadow-md bg-gray-100 border-gray m-1 focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 placeholder:italic focus:outline-none p-2 transition ease-in-out duration-200" >

            @error('name')
                <div class="bg-red-800 text-gray-50 rounded-md px-1 mx-3">{{ $message }}</div>
            @enderror
            </div>
            <div>
                {{-- <label for="age" class="text-lg text-gray-700 text-center font-semibold"><h2>Adicione uma idade para o editor</h2></label> --}}
                <input name="age" id="age" type="date" value="{{ old('age') }}" placeholder="Adicione a idade" autocomplete="off" class="w-full rounded-md shadow-md bg-gray-100 border-gray m-1 focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 placeholder:italic focus:outline-none p-2 transition ease-in-out duration-200" >

            @error('age')
                <div class="bg-red-800 text-gray-50 rounded-md px-1 mx-3">{{ $message }}</div>
            @enderror
            </div>
            <div>
                <input name="email" id="email" type="text" value="{{ old('email') }}" placeholder="Adicione o email" autocomplete="off" class="w-full rounded-md shadow-md bg-gray-100 border-gray m-1 focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 placeholder:italic focus:outline-none p-2 transition ease-in-out duration-200" >

            @error('email')
                <div class="bg-red-800 text-gray-50 rounded-md px-1 mx-3">{{ $message }}</div>
            @enderror
            </div>
            <div>
                <input name="password" id="password" type="password" placeholder="Adicione a senha" autocomplete="off" class="w-full rounded-md shadow-md bg-gray-100 border-gray m-1 focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 placeholder:italic focus:outline-none p-2 transition ease-in-out duration-200" >

            @error('password')
                <div class="bg-red-800 text-gray-50 rounded-md px-1 mx-3">{{ $message }}</div>
            @enderror
            </div>
            <div>
                <select name="gender" id="gender" class="w-full text-gray-700 rounded-md shadow-md bg-gray-100 border-gray m-1 focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 placeholder:italic focus:outline-none p-2 transition ease-in-out duration-200">
                    <option value="" selected>Selecione o gênero</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="nao-binario">Não binário</option>
                </select>

            @error('gender')
                <div class="bg-red-800 text-gray-50 rounded-md px-1 mx-3">{{ $message }}</div>
            @enderror
            </div>
            <div>
                <select name="level" id="level" class="w-full text-gray-700 rounded-md shadow-md bg-gray-100 border-gray m-1 focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 placeholder:italic focus:outline-none p-2 transition ease-in-out duration-200">
                    <option value="" selected>Selecione o nível de acesso</option>
                    <option value="4">Editor</option>
                    <option value="3">Gerente</option>
                    <option value="2">Aprovador</option>
                    <option value="1">Administrador</option>
                </select>
            @error('level')
                <div class="bg-red-800 text-gray-50 rounded-md px-1 mx-3">{{ $message }}</div>
            @enderror
            </div>

            <div>
                <select name="status" id="status" class="w-full text-gray-700 rounded-md shadow-md bg-gray-100 border-gray m-1 focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 placeholder:italic focus:outline-none p-2 transition ease-in-out duration-200">
                    <option value="" selected>Selecione o status</option>
                    <option value="1">Ativo</option>
                    <option value="0">Inativo</option>
                </select>
            @error('status')
                <div class="bg-red-800 text-gray-50 rounded-md px-1 mx-3">{{ $message }}</div>
            @enderror
            </div>
            <div>
                <label for="image" class="text-lg text-gray-700 text-center font-semibold"><h2>Adicione uma foto para o  editor</h2></label>
                <input name="image" id="image" type="file" class="w-full rounded-md shadow-md bg-gray-100 border-gray m-1 focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 placeholder:italic focus:outline-none p-2 transition ease-in-out duration-200">

            @error('image')
                <div class="bg-red-800 text-gray-50 rounded-md px-1 mx-3">{{ $message }}</div>
            @enderror
            </div>

            <div class="flex justify-center">
                <button type="submit" class="flex items-center justify-center p-3 mt-2 w-40 h-10 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300">Cadastrar</button>
            </div>
        </form>
    </div>

    <div>
        <h1 class="text-center text-3xl font-bold text-gray-700">Preview</h1>
        <div class="w-80 h-80  mx-20 rounded-md bg-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-80 w-80" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
        </div>
    </div>
</section>

@endsection
