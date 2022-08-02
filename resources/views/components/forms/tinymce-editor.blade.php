<section class="" style="width: 750px">

    <form action="{{ route('create-post') }}" class="text-gray-900" method="GET">
        <div class="mb-3 flex items-center justify-center space-x-3">
            <label for="title" class="font-bold text-xl">Titulo</label>
            <input type="text" id="title" class="w-full shadow-md border border-gray-500 rounded-md">
        </div>
        @csrf
        <textarea name="postBlog" id="postBlog">
        Welcome to TinyMCE!
    </textarea>

        <section class="flex items-center justify-center">
            <button
                class="flex items-center justify-center p-3 mt-2 w-40 h-10 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300">Create
                Post</button>
        </section>
    </form>

</section>
