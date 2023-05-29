<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>リアルタイム電車遅延掲示板</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>リアルタイム電車遅延掲示板</h1>
        
        <form action="{{ route('search') }}" method="GET">
            @csrf
            <input type="text" name="keyword" placeholder="遅延路線名を入力">
            <input type="submit" value="検索">
        </form>
        
        <a href='/reviews/create'>電車遅延状況を投稿する</a>
        <div class='reviews'>
            @foreach ($reviews as $review)
                <div class='review'>
                    <h2 class='title'>
                        <a href="/reviews/{{ $review->id }}">{{ $review->title }}</a>
                    </h2>
                    <p class='body'>{{ $review->body }}</p>
                    <p class='latetime'>{{ $review->latetime }}</p>
                    <p class='station_id'>{{ $review->station->line}}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>