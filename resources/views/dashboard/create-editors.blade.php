@extends('layouts.admin')

@section('title-adm', 'Editors')

@section('content-dashboard')

<section class="container flex items-center ml-80 justify-start py-20 border-b-2">
    <div class="space-y-4 rounded-lg border  shadow-md sm:p-6 md:p-8 bg-gray-800 border-gray-700">
        <h1 class="text-3xl text-gray-300 font-bold">Adicione um novo editor</h1>
        <form enctype="multipart/form-data" action="{{ route('editors-store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <input name="name" id="name" type="text" value="{{ old('name') }}" placeholder="Adicione o nome" autocomplete="off" class="shadow-md border text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 placeholder:italic focus:outline-none transition ease-in-out duration-200" >

            @error('name')
                <div class="bg-red-800 text-gray-50 rounded-md px-1 mx-3">{{ $message }}</div>
            @enderror
            </div>
            <div>
                <input name="age" id="age" type="date" value="{{ old('age') }}" placeholder="Adicione a idade" autocomplete="off" class="shadow-md border text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-gray-400 focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 placeholder:italic focus:outline-none transition ease-in-out duration-200" >

            @error('age')
                <div class="bg-red-800 text-gray-50 rounded-md px-1 mx-3">{{ $message }}</div>
            @enderror
            </div>
            <div>
                <input name="email" id="email" type="text" value="{{ old('email') }}" placeholder="Adicione o email" autocomplete="off" class="shadow-md border text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 placeholder:italic focus:outline-none transition ease-in-out duration-200" >

            @error('email')
                <div class="bg-red-800 text-gray-50 rounded-md px-1 mx-3">{{ $message }}</div>
            @enderror
            </div>
            <div>
                <input name="password" id="password" type="password" placeholder="Adicione a senha" autocomplete="off" class="shadow-md border text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 placeholder:italic focus:outline-none transition ease-in-out duration-200" >

            @error('password')
                <div class="bg-red-800 text-gray-50 rounded-md px-1 mx-3">{{ $message }}</div>
            @enderror
            </div>
            <div>
                <select name="gender" id="gender" class="border-gray-500 placeholder-gray-400 text-gray-400 bg-gray-600 border 0 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="" selected>Selecione o gênero</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="não-binário">Não binário</option>
                </select>

            @error('gender')
                <div class="bg-red-800 text-gray-50 rounded-md px-1 mx-3">{{ $message }}</div>
            @enderror
            </div>
            <div>
                <select name="role" id="role" class="border-gray-500 placeholder-gray-400 text-gray-400 bg-gray-600 border 0 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="">Selecione a função</option>
                    <option value="Editor">Editor</option>
                    <option value="Gerente">Gerente</option>
                    <option value="Aprovador">Aprovador</option>
                    <option value="Administrador">Administrador</option>
                </select>
            @error('role')
                <div class="bg-red-800 text-gray-50 rounded-md px-1 mx-3">{{ $message }}</div>
            @enderror
            </div>

            <div>
                <select name="status" id="status" class="border-gray-500 placeholder-gray-400 text-gray-400 bg-gray-600 border 0 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="" selected>Selecione o status</option>
                    <option value="1">Ativo</option>
                    <option value="0">Inativo</option>
                </select>
            @error('status')
                <div class="bg-red-800 text-gray-50 rounded-md px-1 mx-3">{{ $message }}</div>
            @enderror
            </div>
            <div>
                <label for="image" class="text-lg font-semibold text-center mb-2  text-gray-300"><h2>Adicione uma foto para o  editor</h2></label>
                <input name="image" id="image" type="file" class="mt-2 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:outline-none">

            @error('image')
                <div class="bg-red-800 text-gray-50 rounded-md px-1 mx-3">{{ $message }}</div>
            @enderror
            </div>

            <div class="flex justify-center">
                <button type="submit" class="py-2.5 px-5 w-full  text-sm font-medium  focus:outline-none  rounded-lg border  hover:text-gray-100 focus:z-10 focus:ring-4  focus:ring-gray-700 bg-gray-800 text-gray-400 border-gray-600 dhover:text-white hover:bg-gray-700">Cadastrar</button>
            </div>
        </form>
    </div>

    <div class="rounded-lg border  shadow-md sm:p-6 md:p-8 bg-gray-800 border-gray-700">
        <h1 class="text-center text-3xl font-bold block mb-2  text-gray-300">Preview</h1>
        <div class="flex w-70 h-70 p-2  mx-20 rounded-md bg-gray-400 justify-center align-center">
            <img id="imgPreview" src="{{ Storage::url('default/default.png') }}">
        </div>
    </div>
</section>

<script>
    let imagem = document.querySelector('[name=image]')
    imagem.addEventListener('change', e => {
        let file = e.target.files[0]
        let fileReader = new FileReader()
        fileReader.onloadend = () =>{
            document.querySelector('#imgPreview').setAttribute('src', fileReader.result)
        }
        fileReader.readAsDataURL(file)
    })

</script>

@endsection
