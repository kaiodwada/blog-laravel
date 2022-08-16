<section class="" style="width: 750px">

    <form action="{{ route('create-post') }}" class="text-gray-900" method="GET">
        <div class="mb-3 flex items-center justify-center space-x-3">
            <label for="title" class="font-bold text-xl text-gray-600">Titulo:</label>
            <input type="text" id="title"
                class="w-full rounded-md shadow-md bg-gray-100 border-gray m-1 focus:ring-blue-800 focus:ring-opacity-20 focus:ring-2 placeholder:italic focus:outline-none p-1 transition ease-in-out duration-200">
        </div>

        <div class="mb-3 flex items-center justify-center space-x-3">
            <label for="categorie" class="font-bold text-xl text-gray-600">Categoria:</label>

            <select name="categorie" id="categorie"
                class="p-2 w-full bg-gray-100 text-gray-600 border-gray shadow-md rounded-md m-1">
                <option value="1">Esportes</option>
                <option value="0">Games</option>
                <option value="0">Filmes</option>
            </select>
        </div>

        @csrf
        <textarea name="postBlog" id="postBlog">
        Welcome to TinyMCE!
    </textarea>

        <section class="flex items-center justify-center space-x-2">
            <button
                class="flex items-center justify-center p-3 mt-2 w-40 h-10 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300">Create
                Post</button>

            <button
                class="flex items-center justify-center p-3 mt-2 w-40 h-10 border border-gray-800 font-semibold  rounded-lg text-gray-700 hover:bg-gray-100 transition ease-in-out duration-300">
                Save
            </button>
        </section>
    </form>

</section>
