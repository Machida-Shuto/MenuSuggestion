<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
    <x-slot name="header">
        　献立提案アプリ
    </x-slot>
    <head>
        <meta charset="utf-8">
        <title>献立提案アプリ</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>献立提案アプリ</h1>
        <div class='posts'>
            <div class='post'>
                <h2 class='title'>コメント</h2>
                <p class='body'>This is a sample body.</p>
            </div>
        </div>
    </body>
    </x-app-layout>
</html>