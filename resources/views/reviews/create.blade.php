<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>献立提案アプリ</h1>
        <form action="/reviews" method="POST">
            @csrf
            <div class="title">
                <h2>{{ $menu->name }}</h2>
            </div>
            <h2>コメント</h2>
                <textarea name="review[body]" placeholder="簡単に作れて、とてもおいしかったです！"></textarea>
            </div>
            <input type="hidden" name="review[menu_id]" value="{{ $menu->id }}">
            <input type="submit" value="store"/>
            <div class="body">
            <div class="content">
                <div class="content__post">
                    <h3>～材料～</h3>
                    <p>{!! nl2br(e($menu->ingredient)) !!}</p>
                    <h3>＜作り方＞</h3>
                    <p>{!! nl2br(e($menu->overview)) !!}</p>    
                    <h4>完成！</h4>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>