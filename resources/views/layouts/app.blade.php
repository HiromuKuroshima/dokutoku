<!DOCTYPE html>
<html lang="ja">
    
    <head>
        <meta charset="utf-8">
        <title>Dokutoku</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('css/layouts.css')}}">
    </head>
    <!--ここまでは読み込みとタイトル-->

    <body>

        {{-- ナビゲーションバー --}}
        @include('commons.navbar')
        
<!--ここに、ナビゲーションを表示する。ログイン前後で多少変わるので、注意！-->

        <div class="">
            {{-- エラーメッセージ --}}
            @include('commons.error_messages')

            @yield('content')
            <!--contentを読み込む-->
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        <script src="{{asset('js/main.js')}}"></script>
        <!--ここで記入することによって、javascriptを読み込むことができる。-->
    </body>
</html>