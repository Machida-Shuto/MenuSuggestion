<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Menus</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $menu->name }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>～材料～</h3>
                <p>{!! nl2br(e($menu->ingredient)) !!}</p>
                <h3>＜作り方＞</h3>
                <p>{!! nl2br(e($menu->overview)) !!}</p>    
                <h4>完成！</h4>
                <a href='/menus/{{ $menu->id }}/review'>コメント</a>
            </div>
       　　 <form action="/like/{{$menu->id}}" method="POST">
                 @csrf
                  <input
                        name="menu_id"
                        type="hidden"
                        value="{{ $menu->id }}"
                    >
                    <button type="submit">いいね</button>
            </form>
            <p>{{$menu->likes->count()}}</p>
            </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>