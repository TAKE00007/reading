<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Reading</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <body>
            <!--<h1><a href="/">Reading</a></h1>-->
            <!--<header>-->
            <!--    <nav>-->
            <!--        <ul class="global-nav">-->
            <!--            <li>-->
            <!--                <a href="/posts">Timeline</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="/books/bookshelves">bookshelves</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="/books/mypage">mypage</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="/books/add">addbooks</a>-->
            <!--            </li>-->
            <!--        </ul>-->
            <!--    </nav>-->
            <!--</header>-->
            
            <div class="flex flex-col flex-wrap divide-y divide-slate-200">
                <div class="flex flex-row flex-wrap">
                    <p>未読</p>
                    @foreach ($book_unreads as $book_unread)
                        <div class='basis-1/5  my-12 text-center'>
                            <h2 class="font-semibold text-gray-800 text-2xl underline decoration-solid" >
                                <a href="/books/{{ $book_unread->id }}/edit">{{ $book_unread->title }}</a>
                            </h2>
                            <img class="mx-auto w-3/12 " src="/book_icon.png">
                            <p class='author'>{{ $book_unread->author->name }}</p>
                            @php
                                $percentage = $book_unread->reading_pages/$book_unread->pages*100
                            @endphp
                            <meter class="w-2/6 h-5" min="0" max="100" optimum = "100" value="{{ $percentage }}">
                                {{ $percentage }} %
                            </meter>
                        </div>
                    @endforeach
                </div>
                <div class="flex flex-row flex-wrap">
                    <p>読み途中</p>
                    @foreach ($book_reads as $book_read)
                        <div class='basis-1/5 text-center my-12'>
                            <h2 class="font-semibold text-gray-800 text-2xl underline decoration-solid" >
                                <a href="/books/{{ $book_read->id }}/edit">{{ $book_read->title }}</a>
                            </h2>
                            <img class="display:block w-3/12 mx-auto " src="/book_icon.png">
                            
                            <p class='author'>{{ $book_read->author->name }}</p>
                            @php
                                $percentage = $book_read->reading_pages/$book_read->pages*100
                            @endphp
                            <meter class="w-2/6 h-5 m-auto" min="0" max="100" optimum = "100" value="{{ $percentage }}">
                                {{ $percentage }} %
                            </meter>
                        </div>
                    @endforeach
                </div>
                <div class="flex flex-row flex-wrap">
                    <p>既読</p>
                    @foreach ($book_completes as $book_complete)
                        <div class='basis-1/5 text-center my-12'>
                            <h2 class="font-semibold text-gray-800 text-2xl underline decoration-solid" >
                                <a href="/books/{{ $book_complete->id }}/edit">{{ $book_complete->title }}</a>
                            </h2>
                            <img class="display:block w-3/12 mx-auto" src="/book_icon.png">
                            <p class='author'>{{ $book_complete->author->name }}</p>
                            @php
                                $percentage = $book_complete->reading_pages/$book_complete->pages*100
                            @endphp
                            <meter class="w-2/6 h-5 m-auto" min="0" max="100" optimum = "100" value="{{ $percentage }}">
                                {{ $percentage }} %
                            </meter>
                        </div>
                    @endforeach
                </div>
            </div>
        </body>
    </x-app-layout>
    
</html>

<!--bootableの中からdefaultcategoryidが未読のもののみを持ってくるwhere文
withで持ってくる-->