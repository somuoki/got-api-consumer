@extends('layout')
@section('content')
    <div aria-label="group of cards" tabindex="0" class="focus:outline-none py-8 w-full space-y-7">

        @foreach($houses as $house)
            @if ($loop->odd)
                @include('house.odd-card', $house)
            @endif

            @if ($loop->even)
                @include('house.even-card', $house)
            @endif

        @endforeach
        <ul class="flex">
            <li class="mx-1 px-3 py-2 bg-gray-200 text-gray-500 rounded-lg">
                <a class="flex items-center font-bold" href="#">
                    <span class="mx-1">previous</span>
                </a>
            </li>
            <li class="mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg">
                <a class="font-bold" href="#">1</a>
            </li>
            <li class="mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg">
                <a class="font-bold" href="#">2</a>
            </li>
            <li class="mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg">
                <a class="font-bold" href="#">3</a>
            </li>
            <li class="mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg">
                <a class="flex items-center font-bold" href="#">
                    <span class="mx-1">Next</span>
                </a>
            </li>
        </ul>
    </div>

@endsection
