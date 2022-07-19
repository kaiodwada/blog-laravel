@extends('layouts.default')

@section('title', 'Post')

@section('content')

    <section class="container mx-auto py-20">
        <section class="flex items-center justify-center">
            <span class="text-base text-gray-500 mr-3">Data do post</span>
            <span class="text-md text-gray-400">Autor</span>
        </section>

        <section class="space-y-4 mt-5 text-center pb-5 text-gray-600 border-b border-gray-400">
            <h1 class="text-gray-900 text-5xl">Raclette Blueberry Nextious Level</h1>
            <div class="text-left space-y-2">
                <p class="text-left">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled
                    waistcoat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, vel neque quia totam porro
                    non
                    ullam, maiores ex quidem nostrum deleniti dolorum voluptates quas explicabo molestias, ipsum error?
                    Iure,
                    debitis?</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam bibendum turpis elit, blandit pretium lectus
                    semper ut. Vivamus nec molestie purus. Phasellus tempor nec metus ut lacinia. Aliquam aliquam tempor
                    tellus
                    vitae finibus. Etiam ullamcorper tincidunt augue. Nunc a odio rutrum, semper lorem ut, finibus quam.
                    Nunc
                    augue ante, volutpat ac sollicitudin ac, consequat eget mi. Phasellus iaculis quam erat, sed placerat
                    nibh
                    feugiat vestibulum. Mauris nunc quam, bibendum in rutrum sed, blandit vitae nisi. Class aptent taciti
                    sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam lacus mauris, condimentum
                    sit
                    amet posuere quis, blandit in sapien. Aenean a ligula suscipit, commodo est ac, viverra elit.
                    Suspendisse
                    pharetra tempus mauris, ac mollis mauris ultricies a. </p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam bibendum turpis elit, blandit pretium lectus
                    semper ut. Vivamus nec molestie purus. Phasellus tempor nec metus ut lacinia. Aliquam aliquam tempor
                    tellus
                    vitae finibus. Etiam ullamcorper tincidunt augue. Nunc a odio rutrum, semper lorem ut, finibus quam.
                    Nunc
                    augue ante, volutpat ac sollicitudin ac, consequat eget mi. Phasellus iaculis quam erat, sed placerat
                    nibh
                    feugiat vestibulum. Mauris nunc quam, bibendum in rutrum sed, blandit vitae nisi. Class aptent taciti
                    sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam lacus mauris, condimentum
                    sit
                    amet posuere quis, blandit in sapien. Aenean a ligula suscipit, commodo est ac, viverra elit.
                    Suspendisse
                    pharetra tempus mauris, ac mollis mauris ultricies a.</p>
            </div>
        </section>

        <section class="container mx-auto pt-10" id="comments">
            <div class="border shadow-sm rounded-md">
                <h3 class="p-3 mt-3 ml-3 border w-40 border-gray-900 rounded-xl text-center">Usuário</h3>
                <div class="p-5">
                    <input name="" id=""
                        value="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam bibendum turpis elit"
                        class="w-full border border-gray-800 rounded-md p-4" readonly>
                    <div class="flex justify-start items-center space-x-3">
                        <button
                            class="flex items-center justify-center p-3 mt-2 w-11 h-10 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300">Like</button>
                        <button
                            class="flex items-center justify-center p-3 mt-2 w-15 h-10 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300">Deslike</button>
                        <button
                            class="flex items-center justify-center p-3 mt-2 w-22 h-10 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300">Responder</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="container mx-auto pt-10" id="comments">
            <div class="border shadow-sm rounded-md">
                <h3 class="p-3 mt-3 ml-3 border w-40 border-gray-50 bg-gray-800 text-center text-gray-100 rounded-xl">
                    Anônimo</h3>
                <div class="p-5">
                    <input name="" id=""
                        value="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam bibendum turpis elit"
                        class="w-full border border-gray-800 rounded-md p-4" readonly>
                    <div class="flex justify-start items-center space-x-3">
                        <button
                            class="flex items-center justify-center p-3 mt-2 w-11 h-10 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300">Like</button>
                        <button
                            class="flex items-center justify-center p-3 mt-2 w-15 h-10 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300">Deslike</button>
                        <button
                            class="flex items-center justify-center p-3 mt-2 w-22 h-10 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300">Responder</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="container mx-auto py-10" id="addComments">
            <div class="border shadow-sm rounded-md">
                <h3 class="p-3 mt-3 ml-3 border w-40 border-gray-900 rounded-xl text-center">Usuário</h3>
                <h3 class="p-3 mt-3 ml-3 border w-40 border-gray-50 bg-gray-800 text-center text-gray-100 rounded-xl">
                    Anônimo</h3>
                <div class="p-5">
                    <textarea name="" id="" class="w-full border border-gray-800 rounded-md p-4" cols="30"
                        rows="5" style="resize: none"></textarea>
                    <button
                        class="flex items-center justify-center p-3 mt-2 w-40 h-10 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300">Comentar</button>
                </div>
            </div>
        </section>

    </section>

@endsection
