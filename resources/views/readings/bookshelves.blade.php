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
            
            <div class="text-center">
                @foreach ($books as $book)
                        <div class='bookshelves'>
                            <h2 class="font-semibold text-gray-800" >
                                <a href="/books/{{ $book->id }}">{{ $book->title }}</a>
                            </h2>
                            <p class='reading_pages'>読んだページ:{{ $book->reading_pages }}</p>
                            <p class='pages'>ページ数:{{ $book->pages }}</p>
                            <p class='author'>著者:{{ $book->author->name }}</p>
                        </div>
                        <a href="/books/default_categories/{{ $book->default_category->id }}">{{ $book->default_category->name }}</a>
                        <div class='category'>
                            @foreach($book->categories as $category)
                            {{ $category->name }}
                            @endforeach
                        </div>
                        <button class="bg-green-400 text-white"><a href="/books/{{ $book->id }}/edit">edit</a></button>
                @endforeach
            </div>
        </body>
    </x-app-layout>
    
</html>