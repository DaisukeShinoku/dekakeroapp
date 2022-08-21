<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DEKAKERO</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .body-bg {
            background-color: #90ee90;
        }
    </style>
</head>
<body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
    <header class="max-w-2xl mx-auto">
        <a href="#">
            <h1 class="text-4xl font-bold text-white text-center">DEKAKERO</h1>
        </a>
    </header>
    <main class="bg-white max-w-2xl mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section class="mt-10">
            @if ($errors->any())
                <div>
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
                </div>
            @endif
            @php
                $cur_path = isset(parse_url(url()->current())['path']) ? parse_url(url()->current())['path'] : '/';
            @endphp
            @if ($cur_path == '/login')
                <section>
                    <h3 class="font-bold text-2xl">DEKAKEROへのログイン</h3>
                </section>
            @else
                <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
                    @if ($cur_path == ('/'))
                        <li class="mr-2">
                            <a tabindex="-1" aria-current="page" class="inline-block p-4 text-blue-600 bg-gray-100 rounded-t-lg active dark:bg-gray-800 dark:text-blue-500">検索</a>
                        </li>
                    @elseif ($cur_path == ('/result'))
                        <li class="mr-2">
                            <a tabindex="-1" aria-current="page" class="inline-block p-4 text-blue-600 bg-gray-100 rounded-t-lg active dark:bg-gray-800 dark:text-blue-500">検索結果</a>
                        </li>
                    @else
                        <li class="mr-2">
                            <a href="/" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">検索</a>
                        </li>
                    @endif
                    @if ($cur_path == ('/favorite'))
                        <li class="mr-2">
                            <a tabindex="-1" aria-current="page" class="inline-block p-4 text-blue-600 bg-gray-100 rounded-t-lg active dark:bg-gray-800 dark:text-blue-500">お気に入り</a>
                        </li>
                    @else
                        <li class="mr-2">
                            <a href="/favorite" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">お気に入り</a>
                        </li>
                    @endif
                    @if (Auth::check())
                    <li class="mr-2">
                        <a href="/logout" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">ログアウト</a>
                    </li>
                    @else
                    <li class="mr-2">
                        <a href="/login" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">ログイン</a>
                    </li>
                    @endif
                </ul>
                @if (Auth::check())
                    <div class="text-right">{{ Auth::user()->name }} <small> でログイン中</small></div>
                @endif
            @endif
            @yield('contets')
        </section>
    </main>
</body>
</html>