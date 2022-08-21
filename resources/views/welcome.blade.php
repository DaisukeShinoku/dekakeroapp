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
        <form action="/result" method="post" class="grid grid-cols-1 gap-6 m-16">
            @csrf
            <label class="block">
                <span class="text-gray-700">出発地を選択</span>
                <select name="place"
                    class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option value= 0 selected>どこでもいい</option>
                    @foreach($places as $place)
                    <option value= {{ $place->place_id }} >{{ $place->name }}</option>
                    @endforeach
                </select>
            </label>
            <label class="block">
                <span class="text-gray-700">屋外 or 屋内</span>
                <select name="outside_flg"
                    class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option value= 2 selected>どっちでもいい</option>
                    <option value= 0 >屋内</option>
                    <option value= 1 >屋外</option>
                </select>
            </label>
            <label class="block">
                <span class="text-gray-700">クルマ使える？</span>
                <select name="car_flg"
                    class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option value= "yes" selected>いえす</option>
                    <option value= "no" >のー！</option>
                </select>
            </label>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                さあ出かけよう！
            </button>
        </form>
    </section>
@endsection