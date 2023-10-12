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
        
        <form action="/books/{{ $book->id }}" method="POST"><!--値を更新する際はmethodはPOSTにする-->
            @csrf
            @method('PUT')
            <div class="book_title">
                <h2>Title</h2>
                <input type='text' name='book[title]' value="{{ $book->title }}"/>
            </div>
            <div class="reading_pages">
                <h2>ReadingPages</h2>
                <input type='text' name='book[reading_pages]' value="{{ $book->reading_pages }}"/>
            </div>
            <div class='default_category'>
                <!--<h2>読書状態</h2>-->
                <!--<select name="book[default_category_id]">-->
                <!--   <div class='default_category'>-->
                <h2>読書状態</h2>
                <select name="book[default_category_id]">
                    @foreach($default_categories as $default_category)
                        <option value="{{ $default_category->id }}">{{ $default_category->name }}</option>
                    @endforeach
                </select>
            </div>
            </div>
            <input type="submit" value="update"/>
        </form>
        <div class="footer">
            <a href="/books/bookshelves">戻る</a>
        </div>
    </body>
</html>