@extends('layout')

@section('contets')
    <section class="mt-10">
        @if ($errors->any())
            <div>
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
            </div>
        @endif
        <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
            <li class="mr-2">
                <a href="#" aria-current="page" class="inline-block p-4 text-blue-600 bg-gray-100 rounded-t-lg active dark:bg-gray-800 dark:text-blue-500">検索</a>
            </li>
            <li class="mr-2">
                <a href="/favorite" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">お気に入り</a>
            </li>
            <li class="mr-2">
                <a href="/logout" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">ログアウト</a>
            </li>
        </ul>
        <br>
        <p class="text-xl">ここに行け！</p>
        <p class="text-2xl">{{ $course->name }}</p>
        <br>
        <iframe src="{{ $course->gmap_url }}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <br>
        <div class="w-auto">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">
                <a href="{{ $course->url }}" target="_blank" rel="noopener noreferrer">ここに行ってくる！</a>
            </button>
        </div>
        <br>
        <br>
        <div class="w-auto">
            <button class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">
                お気に入りに登録する！
            </button>
        </div>
        <br>
        <br>
        <div class="w-auto">
            @if ($prev_path == '/welcome')
            <button type="button" onclick="history.back()" class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">
                別のお出かけ情報を検索する！
            </button>
            @else
            <button type="button" onclick="history.back()" class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">
                <a href="/welcome">別のお出かけ情報を検索する！</a>
            </button>
            @endif
        </div>
        <br>
        <br>
    </section>
@endsection