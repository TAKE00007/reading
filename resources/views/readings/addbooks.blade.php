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
            <form action="/books" method="BOOK">
            @csrf
                <div class="p-5">
                    <h2 class="p-5 text-5xl border-s-green-400">Title</h2>
                    <input type="text" name="book[title]" placeholder="タイトル"/>
                </div>
                <div class="p-5">
                    <h2 class="p-5 text-5xl border-s-green-400">Author</h2>
                    <input type='text' name="author[name]" placeholder="著者"/>
                </div>
                <div class="p-5">
                    <h2 class="p-5 text-5xl border-s-green-400">Page</h2>
                    <input type="text" name="book[pages]" placeholder="ページ数"/>
                </div>
                <div class="p-5">
                    <h2 class="p-5 text-5xl border-s-green-400">category</h2>
                    @foreach($categories as $category)
                    
                        <label>
                            <!--valueを'$categoryのid'に、nameを'配列名[]'に-->
                            <input type="checkbox" value="{{ $category->id }}" name="categories_array[]">
                                {{$category->name}}
                            </input>
                        </label>
                    @endforeach
                </div>
                <div class="text-center">
                    <input class="bg-green-400 text-3xl text-white text-white text-center w-44 block mx-auto mb-3" type="submit" value="store"/>
                </div>
                
            </form>
        </div>
        
    </body>
    </x-app-layout>
    
</html>