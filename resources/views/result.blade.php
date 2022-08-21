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
            @if ($prev_path == '/')
            <button type="button" onclick="history.back()" class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">
                別のお出かけ情報を検索する！
            </button>
            @else
            <button type="button" onclick="history.back()" class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">
                <a href="/">別のお出かけ情報を検索する！</a>
            </button>
            @endif
        </div>
        <br>
        <br>
    </section>
@endsection