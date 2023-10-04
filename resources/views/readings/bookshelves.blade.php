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
                    <li>Timeline</li>
                    <li>Bookshelves</li>
                    <li>Mypage</li>
                    <li>add books</li>
                </ul>
            </nav>
        </header>
        <h1>Reading</h1>
        <div class='bookshelves'>
            @foreach ($books as $book)
                    <div class='bookshelves'>
                        <h2 class='title'>{{ $book->title }}</h2>
                        <p class='reading_pages'>{{ $book->reading_pages }}</p>
                        <p class='pages'>{{ $book->pages }}</p>
                    </div>
            @endforeach
            <div class="author">
                <h2>Author</h2>
                <select name="book[author_id]">
                    @foreach($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </body>
</html>