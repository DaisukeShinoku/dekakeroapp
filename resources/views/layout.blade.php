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
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
</head>
<body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
    <header class="max-w-2xl mx-auto">
        <a href="/">
            <h1 class="text-4xl font-bold text-white text-center">DEKAKERO</h1>
        </a>
    </header>
    <main class="bg-white max-w-2xl mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section class="mt-10">
            @php
                $cur_path = isset(parse_url(url()->current())['path']) ? parse_url(url()->current())['path'] : '/';
            @endphp
            @if ($cur_path == '/login')
                <section>
                    <h3 class="font-bold text-2xl">DEKAKERO</h3>
                    <br>
                    <p>
                        <strong>「どこかにリフレッシュしに行きたいけど良い場所が思いつかない」</strong><br>
                        <br>
                        DEKAKEROはそんなあなたにぴったりのアプリです。<br>
                        ボタン１つでDEKAKEROがお出かけ先を自動で提案してくれます。
                    </p>
                </section>
                <br>
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
                    <div class="font-semibold text-right">{{ Auth::user()->name }} <small class="font-light"> でログインしています</small></div>
                @endif
            @endif
            @if ($errors->any())
                <div>
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
                </div>
            @endif
            @if (session('flash_message'))
                <div id="flash-message" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    {{ session('flash_message') }}
                    <span id="flash-message-cancel" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                    </span>
                </div>
            @endif
            @if (session('success_message'))
                <div id="flash-message" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    {{ session('success_message') }}
                    <span id="flash-message-cancel" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                    </span>
                </div>
            @endif
            @yield('contets')
        </section>
    </main>
    <script src="{{ asset('js/function.js') }}"></script> 
</body>
</html>