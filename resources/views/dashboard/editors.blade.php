@extends('layouts.admin')

@section('title-adm', 'Editors')

@section('content-dashboard')



<section class="container mx-auto flex items-center justify-center -ml-40 mt-5">



    <div class="space-y-4">
        <h1 class="text-2xl text-gray-700">Adicione um novo editor</h1>
        <form class="space-y-4">
            <div>
                <input type="text" class="w-full rounded-md shadow-md bg-gray-100 border-gray m-1 focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 placeholder:italic focus:outline-none p-2 transition ease-in-out duration-200" placeholder="Adicione o nome">
            </div>
            <div>
                <input type="text" class="w-full rounded-md shadow-md bg-gray-100 border-gray m-1 focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 placeholder:italic focus:outline-none p-2 transition ease-in-out duration-200" placeholder="Adicione a idade">
            </div>
            <div>
                <input type="text" class="w-full rounded-md shadow-md bg-gray-100 border-gray m-1 focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 placeholder:italic focus:outline-none p-2 transition ease-in-out duration-200" placeholder="Adicione o email">
            </div>
            <div>
                <input type="text" class="w-full rounded-md shadow-md bg-gray-100 border-gray m-1 focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 placeholder:italic focus:outline-none p-2 transition ease-in-out duration-200" placeholder="">
            </div>
            <div>
                <input type="text" class="w-full rounded-md shadow-md bg-gray-100 border-gray m-1 focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 placeholder:italic focus:outline-none p-2 transition ease-in-out duration-200" placeholder="">
            </div>
            <div>
                <input type="text" type="file" class="w-full rounded-md shadow-md bg-gray-100 border-gray m-1 focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 placeholder:italic focus:outline-none p-2 transition ease-in-out duration-200">
            </div>
        </form>
    </div>
</section>

@endsection
