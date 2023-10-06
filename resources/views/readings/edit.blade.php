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
        <form action="/books/{{ $book->id }}" method="BOOK">
            @csrf
            @method('PUT')
            <div class="book_title">
                <h2>Title</h2>
                <input type="text" name="book[title]" value="{{ $book->title }}"/>
            </div>
            <div class="body">
                <h2>ReadingPages</h2>
                <input type="text" name="book[reading_pages]" value="{{ $book->reading_pages }}"/>
            </div>
            <input type="submit" value="post"/>
        </form>
        <div class="footer">
            <a href="/posts">戻る</a>
        </div>
    </body>
</html>