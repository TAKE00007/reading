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
            <div>
                <h2>category</h2>
                @foreach($categories as $category)
                
                    <label>
                        <!--valueを'$categoryのid'に、nameを'配列名[]'に-->
                        <input type="checkbox" value="{{ $category->id }}" name="categories_array[]">
                            {{$category->name}}
                        </input>
                    </label>
                @endforeach
            </div>
            <input type="submit" value="store"/>
        </form>
    </body>
</html>