<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Reading</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <body>
            <!--<h1><a href="/">Reading</a></h1>-->
            <!--<header>-->
            <!--    <nav>-->
            <!--        <ul class="global-nav">-->
            <!--            <li>-->
            <!--                <a href="/posts">Timeline</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="/books/bookshelves">bookshelves</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="/books/mypage">mypage</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="/books/add">addbooks</a>-->
            <!--            </li>-->
            <!--        </ul>-->
            <!--    </nav>-->
            <!--</header>-->
            
            <div class="flex flex-row flex-wrap">
                @foreach ($books as $book)
                        <div class='basis-1/4 ml-12 my-12'>
                            <h2 class="font-semibold text-gray-800 text-center" >
                                <a href="/books/{{ $book->id }}/">{{ $book->title }}</a>
                            </h2>
                            <img class="display:block m-auto w-3/12 " src="/book_icon.png">
                            
                            <p class='text-center'>{{ $book->author->name }}</p>
                            @php
                                $percentage = $book->reading_pages/$book->pages*100
                            @endphp
                            <meter class="w-2/6 h-5 m-auto" min="0" max="100" optimum = "100" value="{{ $percentage }}">
                                {{ $percentage }} %
                            </meter>
                            
                            <a href="/books/default_categories/{{ $book->default_category->id }}">{{ $book->default_category->name }}</a>
                            <div class='category'>
                                @foreach($book->categories as $category)
                                {{ $category->name }}
                                @endforeach
                            </div>
                            <button class="bg-green-400 text-white"><a href="/books/{{ $book->id }}/edit">edit</a></button>
                        </div>
                @endforeach
        </body>
    </x-app-layout>
    
</html>