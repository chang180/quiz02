@extends('layouts.layout')
@section('main')
    <div class="menu w-1/4">
        <ul>
            <li><a href="/title">分類網誌</a></li>
            <li><a href="/news">最新文章</a></li>
            <li><a href="/post">人氣文章</a></li>
            <li><a href="/know">講座訊息</a></li>
            <li><a href="/que">問卷調查</a></li>
        </ul>
    </div>
    <div class="main w-3/4 border-solid border-2 border-black m-2">
        <livewire:marquee />
    主要內容
    </div>
@endsection