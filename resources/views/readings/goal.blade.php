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
            <div text-center>
            <form action="/books/{{ $record->id }}" method="POST">
            @csrf
            @method('PUT')
                <div class="p-5">
                    <h2 class="p-5 text-5xl border-s-green-400">目標を設定</h2>
                        <input type="text" name="record[goal]"  value="{{ $record->goal }}" placeholder="目標ページ数"/>
                </div>
                <div class="text-center">
                    <input class="bg-green-400 text-3xl text-white text-white text-center w-44 block mx-auto mb-3" type="submit" value="store"/>
                </div>
            </form>
            <svg class="relative">
                <circle cx="150" cy="75" r="70" class="relative fill-none stroke-2 stroke-gray-50 w-36 h-36"></circle>
            </svg>
            </div>
        </body>
    </x-app-layout>