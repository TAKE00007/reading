<!DOCTYPE html>
@vite(['resources/css/app.css', 'resources/js/app.js'])
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        <meta charset="utf-8">
        <title>Reading</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <body>
        @csrf
            <div class='pt-10'>
                @foreach ($books as $book)
                        <div class="text-center space-y-10">
                            <h2 class="font-semibold text-9xl test-gray-800 leading-tight space-y-10 m-2">{{ $book->title }}</h2>
                            <img class="display:block m-auto w-3/12 " src="/book_icon.png">
                            @php
                                $percentage = $book->reading_pages/$book->pages*100
                            @endphp
                            <meter class="w-1/2 h-24 rounded-none" min="0" max="100" optimum = "100" value="{{ $percentage }}">
                                {{ $percentage }} %
                            </meter>
                        </div>
                @endforeach
            </div>
            <div class="text-center">
                <a class="bg-sky-500 hover-bg-sky-800 text-3xl text-white text-white text-center w-44 block mx-auto mb-3" href="/books/{{ $book->id }}/edit">edit</a>
            </div>
        </body>
    </x-app-layout>
</html>