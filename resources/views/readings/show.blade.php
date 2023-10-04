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
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class='content'>
            <div class="content_post">
                <h3>本文</h3>
                <p>{{ $post->body }}</p>
            </div>
        </div>
        <a href='/posts/create'>post</a>
    </body>
</html>