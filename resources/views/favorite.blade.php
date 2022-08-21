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