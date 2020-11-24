@extends('layouts.layout')
@section('main')
    <div class="menu w-1/6">
        <ul>
            <li class="text-center text-4 text-blue-500 hover:bg-blue-200 my-4"><a href="/title">分類網誌</a></li>
            <li class="text-center text-4 text-blue-500 hover:bg-blue-200 my-4"><a href="/news">最新文章</a></li>
            <li class="text-center text-4 text-blue-500 hover:bg-blue-200 my-4"><a href="/post">人氣文章</a></li>
            <li class="text-center text-4 text-blue-500 hover:bg-blue-200 my-4"><a href="/know">講座訊息</a></li>
            <li class="text-center text-4 text-blue-500 hover:bg-blue-200 my-4"><a href="/que">問卷調查</a></li>
        </ul>
    </div>
    <div class="main w-5/6 border-solid border-2 border-black m-2">
        <livewire:marquee />
        <ul class="flex ">
        @foreach($classify as $class)
        <li class="border mx-2"> {{$class->classify}}</li>
        @endforeach
    </ul>
    <ul class="flex">
        <li></li>
    </ul>
    </div>
@endsection