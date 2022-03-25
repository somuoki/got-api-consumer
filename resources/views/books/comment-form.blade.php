<form action="/book/{{ $book['id'] }}/comment" method="post">
    <div class="md:px-20 pt-6">
        <div class=" bg-gray-200 rounded-md px-6 py-10 max-w-2xl mx-auto">
            <h1 class="text-center text-2xl font-bold text-gray-500 mb-10">Add Comment</h1>
            <div class="space-y-4">
                <div>
                    @csrf
                    <input type="hidden" name="id" value="{{ $book['id'] }}">
                    <label for="description" class="block mb-2 text-lg font-serif">Comment:</label>
                    <textarea id="description" name="body" cols="30" rows="10" placeholder="write here.." class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md"></textarea>
                </div>
                <button class=" px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600">ADD COMMENT</button>
            </div>
        </div>
    </div>
</form>
