@extends('layout')

@section('contets')
    <section>
        <h3 class="font-bold text-2xl">DEKAKERO</h3>
        <p class="text-gray-600 pt-2">ログイン画面</p>
    </section>
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
            <button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">ログイン</button>
        </form>
        <div class="max-w-2xl mx-auto text-center mt-12 mb-6">
            <p class="text-black">会員登録はこちらから <a href="#" class="font-bold hover:underline">Sign up</a>.</p>
        </div>
    </section>
@endsection