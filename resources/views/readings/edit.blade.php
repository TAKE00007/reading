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
            
            <form action="/posts/{{ $post->id }}" method="POST"><!--値を更新する際はmethodはPOSTにする-->
                @csrf
                @method('PUT')
                <div class="title">
                    <h2>Title</h2>
                    <input type='text' name='post[title]' value="{{ $post->title }}"/>
                </div>
                <div class="body">
                    <h2>body</h2>
                    <input type='text' name='post[body]' value="{{ $post->body }}"/>
                </div>
                <input type="submit" value="update"/>
            </form>
            <div class="footer">
                <a href="/posts/">戻る</a>
            </div>
        </body>
    </x-app-layout>
    
</html>