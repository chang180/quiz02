@extends('layouts.layout')
@section('main')
    <div class="menu w-1/6">
    <ul>
        <li class="text-center text-4 text-blue-500 hover:bg-blue-200 my-4"><a href="/admin/admin">帳號管理</a></li>
        <li class="text-center text-4 text-blue-500 hover:bg-blue-200 my-4"><a href="/admin/post">分類網誌</a></li>
        <li class="text-center text-4 text-blue-500 hover:bg-blue-200 my-4"><a href="/admin/news">最新文章管理</a></li>
        <li class="text-center text-4 text-blue-500 hover:bg-blue-200 my-4"><a href="/admin/know">講座管理</a></li>
        <li class="text-center text-4 text-blue-500 hover:bg-blue-200 my-4"><a href="/admin/que">問卷管理</a></li>
    </ul>
    </div>
        <div class="main w-5/6 border-solid border-2 border-black m-2">
            <div class="text-4xl text-center">請選擇管理項目</div>
        </div>
@endsection
