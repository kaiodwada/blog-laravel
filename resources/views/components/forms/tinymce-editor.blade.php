<section class="container mx-auto mt-5 py-20 w-10/12 ">
    <form action="{{ route('create-post') }}" class="text-gray-900" method="GET">
        @csrf
        <textarea name="postBlog" id="postBlog">
        Welcome to TinyMCE!
    </textarea>
    <section>
            <button type="submit" class="p-3 mt-3 bg-indigo-600 rounded-md text-gray-200 hover:bg-indigo-400 hover:text-gray-900">Create Post</button>
    </section>


    </form>

</section>
