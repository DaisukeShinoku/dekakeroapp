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
        <form class="grid grid-cols-1 gap-6 m-16">
            <label class="block">
                <span class="text-gray-700">出発地を選択</span>
                <select
                    class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option value="0" selected>どこでもいい</option>
                    <option value="1">新宿駅</option>
                    <option value="2">横浜駅</option>
                    <option value="3">藤沢駅</option>
                    <option value="4">秩父駅</option>
                    <option value="5">千葉駅</option>
                </select>
            </label>
            <label class="block">
                <span class="text-gray-700">屋外 or 屋内</span>
                <select
                    class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option value="2" selected>どっちでもいい</option>
                    <option value="0">屋内</option>
                    <option value="1">屋外</option>
                </select>
            </label>
            <label class="block">
                <span class="text-gray-700">クルマ使う？</span>
                <select
                    class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option value="2" selected>どっちでもいい</option>
                    <option value="0">使う</option>
                    <option value="1">使わない</option>
                </select>
            </label>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                さあ出かけよう！
            </button>
        </form>
    </section>
@endsection