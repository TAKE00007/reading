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
        <div class='records'>
            @foreach ($records as $record)
                    <div class='record'>
                        <h2 class='month_page'>{{ $record->month_page }}</h2>
                        <p class='reading_pages'>{{ $book->reading_pages }}</p>
                        <p class='pages'>{{ $book->pages }}</p>
                    </div>
            @endforeach
        </div>
    </body>
</html>