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
            
            <div class="text-center bg-white p-0 overflow-hidden m-5 divide-y divide-slate-200">
                @foreach ($posts as $post)
                        <div class='box'>
                            <a href="/posts/{{ $post->id }}/edit">
                            <h2 class="font-semibold text-left text-slate-800 text-5xl my-100 pt-6">{{ $post->title }}</h2>
                            </a>
                            <p class="font-semibold text-left text-slate-800 text-xl my-100 pt-6">{{ $post->body }}</p>
                            <div class="flex m-5 space-x-96">
                                <p class="text-rose-400 w-1/2">good!</p>
                                <p class='w-1/2'>{{ $post->created_at }}</p>
                            </div>
                            
                        </div>
                        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="deletePost({{ $post->id }})">delete</button>
                        </form>
                @endforeach
            </div>
            <script>
                function deletePost(id) {
                    'use strict'
                    if (confirm('削除すると復元できません。 \n本当に削除しますか?')) {
                        document.getElementById(`form_${id}`).submit();
                    }
                }
            </script>
            <div class="text-center ">
                <a href='/posts/create'>post</a>
            </div>
        </body>
    </x-app-layout>
</html>