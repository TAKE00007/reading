<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Reading</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
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
            
            <div class='records'>
                @foreach ($records as $record)
                        <div class='record'>
                            <h2 class='month_page'>1か月に読んだページ：{{ $record->month_page }}</h2>
                            <p class='month'>{{ $record->month }}</p>
                            <p class='goal'>今月の目標:{{ $record->goal }}</p>
                            <p class='progress'>総ページ数：{{ $record->progress }}</p>
                        </div>
                        @php
                            $goal_percentage = $record->progress/$record->goal*100
                        @endphp
                        <meter class="w-5/6 h-52" min="0" max="100" optimum = "100" value="{{ $goal_percentage }}">
                                {{ $goal_percentage }} %
                        </meter>
                @endforeach
            <div class="goal"><a href="/books/mypage/{{ $record->id }}/goal">目標設定</a></div>
            <div>
              <canvas id="bar_chart"></canvas>
            </div>
            <div>
              <canvas id="myChart"></canvas>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            
            <script>
              const data1 = @json($month_page);
              const label1 = @json($month);
              const ctx = document.getElementById('bar_chart');
              const data = [120, 130, 140];
              console.log(data1,label1)
              
              new Chart(ctx, {
                type: 'bar',
                data: {
                labels: label1,
                datasets: [{
                  data: data1,
                }]
                },
                options: {
                }
              });
              
              // const cty = document.getElementById('myChart');
            
              // new Chart(cty, {
              //   type: 'pie',
              //   data: {
              //     labels: ['Red','green','blue'],
              //     datasets: [{
              //       data: data,
              //     }]
              //   },
              //   options: {
              //   }
              // });
            </script>
            
            

            </div>
            <!--<div>-->
            <!--    <canvas class="w-10 h-10"></canvas>-->
            <!--</div>-->
    </body>
    </x-app-layout>
    
    
</html>