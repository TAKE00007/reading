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
        <div class='bookshelves'>
            @foreach ($books as $book)
                    <div class='bookshelves'>
                        <h2 class='title'>
                            <a href="/books/{{ $book->id }}">{{ $book->title }}</a>
                        </h2>
                        <p class='reading_pages'>読んだページ:{{ $book->reading_pages }}</p>
                        <p class='pages'>ページ数:{{ $book->pages }}</p>
                        <p class='author'>著者:{{ $book->author->name }}</p>
                    </div>
                    <div class='category'>
                        @foreach($book->categories as $category)
                        {{ $category->name }}
                        @endforeach
                    </div>
                    <div class="edit"><a href="/books/{{ $book->id }}/edit">edit</a></div>
            @endforeach
        </div>
    </body>
</html>