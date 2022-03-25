<!-- component -->
<div class="py-6 flex flex-col sm:py-12">
    <div class="grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4 px-4">

        <!-- SMALL CARD ROUNDED -->
        <div class="bg-gray-100 border-indigo-600 dark:bg-gray-800 bg-opacity-95 border-opacity-60 | p-4 border-solid rounded-3xl border-2 | flex justify-around cursor-pointer | hover:bg-indigo-400 dark:hover:bg-indigo-600 hover:border-transparent | transition-colors duration-500">
            <div class="flex flex-col justify-center">
                <p class="text-gray-900 dark:text-gray-300 font-semibold">Number Of pages</p>
                <p class="text-black dark:text-gray-100 text-justify font-semibold">{{ $book['numberOfPages'] }}</p>
            </div>
        </div>
        <!-- END SMALL CARD ROUNDED -->

        <!-- SMALL CARD ROUNDED -->
        <div class="bg-gray-100 border-red-600 dark:bg-gray-800 bg-opacity-95 border-opacity-60 | p-4 border-solid rounded-3xl border-2 | flex justify-around cursor-pointer | hover:bg-red-400 dark:hover:bg-red-600 hover:border-transparent | transition-colors duration-500">
            <div class="flex flex-col justify-center">
                <p class="text-gray-900 dark:text-gray-300 font-semibold">Publishers</p>
                <p class="text-black dark:text-gray-100 text-justify font-semibold">{{ $book['publisher'] }}</p>
            </div>
        </div>
        <!-- END SMALL CARD ROUNDED -->

        <!-- SMALL CARD ROUNDED -->
        <div class="bg-gray-100 border-yellow-600 dark:bg-gray-800 bg-opacity-95 border-opacity-60 | p-4 border-solid rounded-3xl border-2 | flex justify-around cursor-pointer | hover:bg-yellow-400 dark:hover:bg-yellow-600 hover:border-transparent | transition-colors duration-500">
            <div class="flex flex-col justify-center">
                <p class="text-gray-900 dark:text-gray-300 font-semibold">Country</p>
                <p class="text-black dark:text-gray-100 text-justify font-semibold">{{ $book['country'] }}</p>
            </div>
        </div>
        <!-- END SMALL CARD ROUNDED -->

        <!-- SMALL CARD ROUNDED -->
        <div class="bg-gray-100 border-green-600 dark:bg-gray-800 bg-opacity-95 border-opacity-60 | p-4 border-solid rounded-3xl border-2 | flex justify-around cursor-pointer | hover:bg-green-400 dark:hover:bg-green-600 hover:border-transparent | transition-colors duration-500">
            <div class="flex flex-col justify-center">
                <p class="text-gray-900 dark:text-gray-300 font-semibold">Media Type</p>
                <p class="text-black dark:text-gray-100 text-justify font-semibold">{{ $book['mediaType'] }}</p>
            </div>
        </div>
        <!-- END SMALL CARD ROUNDED -->

        <!-- SMALL CARD ROUNDED -->
        <div class="bg-gray-100 border-green-600 dark:bg-gray-800 bg-opacity-95 border-opacity-60 | p-4 border-solid rounded-3xl border-2 | flex justify-around cursor-pointer | hover:bg-green-400 dark:hover:bg-green-600 hover:border-transparent | transition-colors duration-500">
            <div class="flex flex-col justify-center">
                <p class="text-gray-900 dark:text-gray-300 font-semibold">Release Date</p>
                <p class="text-black dark:text-gray-100 text-justify font-semibold">{{ $book['released'] }}</p>
            </div>
        </div>
        <!-- END SMALL CARD ROUNDED -->
    </div>
</div>
