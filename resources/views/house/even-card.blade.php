<div tabindex="0" aria-label="card 1" class="focus:outline-none lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white p-6 shadow rounded">
    <div class="flex items-center border-b border-gray-200 pb-6">
        <img src="https://cdn.tuk.dev/assets/components/misc/doge-coin.png" alt="coin avatar" class="w-12 h-12 rounded-full" />
        <div class="flex items-start justify-between w-full">
            <div class="pl-3 w-full">
                <p tabindex="0" class="focus:outline-none text-xl font-medium leading-5 text-gray-800">
                    <a href="house/{{ $house['id'] }}">
                        {{ $house['name'] }}
                    </a>
                </p>
                <p tabindex="0" class="focus:outline-none text-sm leading-normal pt-2 text-gray-500">Founded In {{ $house['founded'] }} To {{ $house['diedOut'] }}</p>
            </div>
            <div role="img" aria-label="bookmark">
                <svg  class="focus:outline-none" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.5001 4.66667H17.5001C18.1189 4.66667 18.7124 4.9125 19.15 5.35009C19.5876 5.78767 19.8334 6.38117 19.8334 7V23.3333L14.0001 19.8333L8.16675 23.3333V7C8.16675 6.38117 8.41258 5.78767 8.85017 5.35009C9.28775 4.9125 9.88124 4.66667 10.5001 4.66667Z" stroke="#2C3E50" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>
    </div>
    <div class="px-2">
        <p tabindex="0" class="focus:outline-none text-sm leading-5 py-4 text-gray-600">
             @unless($house['region'] = '') Region : {{ $house['region'] }}, @endunless @unless($house['coatOfArms'] = '')Coat Of Arms : {{ $house['coatOfArms'] }},@endunless
             @unless($house['words'] = '')Words : {{ $house['words'] }},@endunless @unless($house['currentLord'] = '')Current Lord : {{ $house['currentLord'] }},@endunless
             @unless($house['heir'] = '')Heir : {{ $house['heir'] }},@endunless @unless($house['founder'] = '')Founder : {{ $house['founder'] }}@endunless
        </p>
        <div tabindex="0" class="focus:outline-none flex">
{{--            @foreach($book['authors'] as $author)--}}
{{--                <div class="py-2 px-4 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">{{ $author }}</div>--}}
{{--            @endforeach--}}
        </div>
    </div>
</div>
</div>
