@extends('layouts.admin')

@section('title-adm', 'Posts publicados')

@section('content-dashboard')

<section class="container flex items-center justify-start ml-80  py-20">

        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <h1 class="text-2xl text-gray-800 font-bold mb-4">Todos os posts publicados</h1>
            <table class="w-full text-sm text-left text-gray-400">
                <thead class="text-xs  uppercase  bg-gray-700 text-gray-400">
                    <tr class="text-center">
                        <th scope="col" class="py-3 px-6">
                            Author
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Status
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Criado em
                        </th>
                        <th scope="col" class="py-3 px-6">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr class=" border-b bg-gray-800 border-gray-700 hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium  whitespace-nowrap text-white">
                            {{ $post->author }}
                        </th>
                        <td class="py-4 px-6">
                           @if ($post->status === 0)
                           Aguardando analise
                           @else
                               Publicado
                           @endif
                        </td>
                        <td class="py-4 px-6">
                            {{ $post->created_at }}
                        </td>
                        <td class="py-4 px-6 text-right">
                            <a href="#" class="font-medium text-blue-500 hover:underline">Analisar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$posts->links()}}
        </div>

    </section>
@endsection
