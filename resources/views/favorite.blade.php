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
                <a href="/welcome" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">検索</a>
            </li>
            <li class="mr-2">
                <a href="#" aria-current="page" class="inline-block p-4 text-blue-600 bg-gray-100 rounded-t-lg active dark:bg-gray-800 dark:text-blue-500">お気に入り</a>
            </li>
            <li class="mr-2">
                <a href="/logout" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">ログアウト</a>
            </li>
        </ul>
        <br>
        <p class="text-xl">お気に入りリスト</p>
        <br>
        <a href="#" class="no-underline hover:underline text-l">藤沢駅→お風呂の王様講座渋谷店</a>
        <br>
        <br>
        <a href="#" class="no-underline hover:underline text-l">藤沢駅→お風呂の王様講座渋谷店</a>
        <br>
        <br>
        <a href="#" class="no-underline hover:underline text-l">藤沢駅→お風呂の王様講座渋谷店</a>
        <br>
        <br>
    </section>
@endsection