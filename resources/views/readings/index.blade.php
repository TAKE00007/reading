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
            <div class='books'>
                @foreach ($books as $book)
                        <div class="text-center space-y-10">
                            <h2 class="font-semibold text-9xl test-gray-800 leading-tight space-y-10">{{ $book->title }}</h2>
                            
                            @php
                                $percentage = $book->reading_pages/$book->pages*100
                            @endphp
                            <meter class="w-5/6 h-52" min="0" max="100" optimum = "100" value="{{ $percentage }}">
                                {{ $percentage }} %
                            </meter>
                        </div>
                @endforeach
            </div>
            <div class="edit"><a href="/books/{{ $book->id }}/edit">edit</a></div>
        </body>
    </x-app-layout>
</html>