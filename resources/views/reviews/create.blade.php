<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>リアルタイム電車遅延掲示板</title>
    </head>
    <body>
        <h1>リアルタイム電車遅延掲示板</h1>
        <form action="/reviews" method="POST">
            @csrf
            <div class="body">
                <h2>電車遅延状況</h2>
                <textarea name="review[body]" placeholder="○時○分○駅着の電車がまだ来てないです。">{{ old('review.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('review.body') }}</p>
            </div>
            <div class="station">
                <p>路線を選択してください</p>
            <select name="review[station_id]">
                <option></option>
                @foreach($stations as $station)
                <option value={{$station->id}}>{{$station->line}}</option>
                @endforeach
            </select>
                <p class="station_id__error" style="color:red">{{ $errors->first('review.station_id') }}</p>
            </div>
            <div class="latetime">
                <input name="review[latetime]" type="time" value="0000">
                <p class="latetime__error" style="color:red">{{ $errors->first('review.latetime') }}</p>
            <div>
            <input type="submit" value="投稿"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>