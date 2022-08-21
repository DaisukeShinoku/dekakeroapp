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
        <form class="flex flex-col" action="/login" method="post">
        @csrf
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email">メールアドレス</label>
                <input type="text" name="email" value="{{ old('email') }}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3">
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">パスワード</label>
                <input type="password" name="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3">
            </div>
            <button class="bg-blue-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">ログイン</button>
        </form>
        <br>
        <br>
        <hr>
        <br>
        <br>
        <h4 class="text-2xl">DEKAKERO会員以外の方</h4>
        <br>
        <form class="flex flex-col" action="/login" method="post">
            @csrf
            <input type="hidden" name="email" value="guest@guest">
            <input type="hidden" name="password" value="guest">
            <button class="bg-green-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200 w-full" type="submit">
                ゲストユーザーでログイン
            </button>
        </form>
        <br>
        <div class="w-auto">
            <button class="bg-gray-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200 w-full" type="submit">
                <a href="/">ログインせずにDEKAKEROで遊ぶ</a>
            </button>
        </div>
    </section>
@endsection