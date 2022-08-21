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
        <br>
        <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
            <p class="text-xl">
                {{ $course->place->name }} から {{ $course->name }} に出かけてみよう！
            </p>
        </div>
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
        @if ($favorite_flg)
            <div class="w-auto">
                <button class="bg-green-300 hover:bg-green-400 text-white font-bold py-2 px-4 rounded w-full disabled cursor-not-allowed">
                    既にお気に入りに登録済みです
                </button>
            </div>
        @else
            <form action="/favorite" method="POST" class="w-auto">
                @csrf
                <input type="hidden" name="course_id" value={{ $course->course_id }} >
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded w-full">
                    お気に入りに登録する！
                </button>
            </form>
        @endif
        <br>
        <br>
        <div class="w-auto">
            <button type="button" onclick="history.back()" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded w-full">
                別のお出かけ情報を検索する！
            </button>
        </div>
        <br>
        <br>
    </section>
@endsection