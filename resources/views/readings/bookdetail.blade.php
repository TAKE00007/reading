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
            <div class="text-5xl text-center my-64 underline decoration-solid">
                <a href="/books/bookshelves">{{ $book->title }}</a></a>
            </div>
        </body> 
    </x-app-layout>
    
</html>