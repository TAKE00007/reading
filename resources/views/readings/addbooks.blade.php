<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Reading</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav>
                <ul class="global-nav">
                    <li>
                        <a href="/posts">Timeline</a>
                    </li>
                    <li>
                        <a href="/books/bookshelves">bookshelves</a>
                    </li>
                    <li>
                        <a href="/books/mypage">mypage</a>
                    </li>
                    <li>
                        <a href="/books/add">addbooks</a>
                    </li>
                </ul>
            </nav>
        </header>
        <h1>Reading</h1>
        <form action="/books" method="BOOK">
            @csrf
            <div class="titile">
                <h2>Title</h2>
                <input type="text" name="book[title]" placeholder="タイトル"/>
            </div>
            <div class="author">
                <h2>Author</h2>
                <input type='text' name="author[name]" placeholder="著者"/>
            </div>
            <div class="page">
                <h2>Page</h2>
                <input type="text" name="book[pages]" placeholder="ページ数"/>
            </div>
            <input type="submit" value="store"/>
        </form>
    </body>
</html>