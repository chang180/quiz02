@extends('layouts.layout')
@section('main')
    <div class="menu w-1/4">
    <ul>
        <li><a href="/admin/admin">帳號管理</a></li>
        <li><a href="/admin/post">分類網誌</a></li>
        <li><a href="/admin/news">最新文章管理</a></li>
        <li><a href="/admin/know">講座管理</a></li>
        <li><a href="/admin/que">問卷管理</a></li>
    </ul>
    </div>
        <div class="main w-3/4 border-solid border-2 border-black m-2">
            <div class="text-4xl text-center">請選擇管理項目</div>
        </div>
@endsection
