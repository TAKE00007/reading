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
            
            <div class="text-center bg-white">
                @foreach ($posts as $post)
                        <div class='post'>
                            <h2 class="font-semibold text-slate-800 text-xl my-100">{{ $post->title }}</h2>
                            <p class="font-semibold text-slate-800 my-100">{{ $post->body }}</p>
                            <p class='created_at'>{{ $post->created_at }}</p>
                        </div>
                        <div class="edit"><a href="/posts/{{ $post->id }}/edit">edit</a></divs>
                @endforeach
            </div>
            <a href='/posts/create'>post</a>
        </body>
    </x-app-layout>
</html>