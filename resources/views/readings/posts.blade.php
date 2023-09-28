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
        <div class='posts'>
            @foreach ($posts as $post)
                    <div class='post'>
                        <h2 class='title'>{{ $post->title }}</h2>
                        <p class='body'>{{ $post->body }}</p>
                        <p class='created_at'>{{ $post->created_at }}</p>
                    </div>
            @endforeach
        </div>
    </body>
</html>