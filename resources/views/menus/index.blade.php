<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
    <x-slot name="header">
        　献立提案アプリ
    </x-slot>
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class='mesus'>
            <div class='menu'>
                <h1 class="title">- 今日の献立 -</h1>
                <a href="/menus/{{ $menu->id }}"><p class='body'>{{ $menu->name }}</p></a>
            </div>
        </div>
    </body>
    </x-app-layout>
</html>