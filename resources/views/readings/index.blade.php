<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Reading</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1><a href="/">Reading</a></h1>
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
        
        <div class='books'>
            @foreach ($books as $book)
                    <div class='book'>
                        <h2 class='title'>{{ $book->title }}</h2>
                        <p class='reading_pages'>{{ $book->reading_pages }}</p>
                        <p class='pages'>{{ $book->pages }}</p>
                        @php
                            $percentage = $book->reading_pages/$book->pages*100
                        @endphp
                        {{ $percentage }}%
                    </div>
            @endforeach
        </div>
        <div class="edit"><a href="/books/{{ $book->id }}/edit">edit</a></div>
    </body>
</html>