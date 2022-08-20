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
        <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d52044.73145463975!2d139.4405167395108!3d35.38552234920258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e3!4m5!1s0x60184fcad532942d%3A0x83bd847775c8252d!2z56We5aWI5bed55yM6Jek5rKi5biCIOiXpOayoumnhQ!3m2!1d35.3388984!2d139.4874695!4m5!1s0x601856bee39019eb%3A0xd238e36740f756f2!2z56We5aWI5bed55yM5aSn5ZKM5biC5riL6LC377yV5LiB55uu77yS77ySIOOBiuOBteOCjeOBrueOi-anmCDpq5jluqfmuIvosLfpp4XliY3lupc!3m2!1d35.432817!2d139.464201!5e0!3m2!1sja!2sjp!4v1660828324611!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <br>
        <div class="w-auto">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">
                ここに行ってくる！
            </button>
        </div>
        <br>
        <br>
        <div class="w-auto">
            <button class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">
                とりあえずお気に入りに登録する！
            </button>
        </div>
        <br>
        <br>
        <div class="w-auto">
            <button class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">
                やっぱ検索条件を変える！
            </button>
        </div>
        <br>
        <br>
        <div class="w-auto">
            <button class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">
                別のところがいい！
            </button>
        </div>
        <br>
        <br>
    </section>
@endsection