@extends('layout')

@section('contets')
    <section class="mt-10">
        <p class="text-2xl font-bold">お気に入りリスト</p>
        <br>
        <table class="table-auto w-full">
            <thead>
                <tr>
                <th class="px-4 py-2">行先</th>
                <th class="px-4 py-2">出発地</th>
                <th class="px-4 py-2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($favorites as $favorite)
                <tr>
                <td class="border w-11/16 px-4 py-2 no-underline hover:underline text-l text-blue-600">
                    <a href="{{ $favorite->course->url }}" target="_blank" rel="noopener noreferrer">{{ $favorite->course->name }}</a>
                </td>
                <td class="border w-1/4 px-4 py-2 text-center">{{ $favorite->course->place->name }}</td>
                <td class="border w-1/16 px-4 py-2">
                    <form action="/favorite" method="POST" class="w-auto">
                    @csrf
                    @method('DELETE')
                        <input type="hidden" name="course_id" value={{ $favorite->course_id }}>
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded w-full">解除</button>
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <div class="w-auto">
            <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded w-full">
                <a href="/">別のお出かけ情報を検索する！</a>
            </button>
        </div>
    </section>
@endsection