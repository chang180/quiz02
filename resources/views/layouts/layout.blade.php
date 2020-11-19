<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>健康促進網</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @livewireStyles
</head>

<body>
    <div class="container">
        <div class="header">
            <div id="title">
    {{ $date }} | 今日瀏覽: {{ $today }} | 累積瀏覽: {{ $sum }}<a href="/" class="float-right">回首頁</a></div>
    <a href="/" title=""><img src="{{ asset('/img/02B01.jpg') }}" title="健康促進網" class="w-full"></a>
</div>
<div class="main flex">
    @yield("main")
</div>
<div class="footer w-full">
    本網站建議使用：IE9.0以上版本，1024 x 768 pixels 以上觀賞瀏覽 ， Copyright © 2020健康促進網社群平台 All Right Reserved
   <br>
   服務信箱：health@test.labor.gov.tw<img src="{{ asset('/img/02B02.jpg') }}" width="45" class="float-right">
</div>

</div>
    
    @livewireScripts
</body>
</html>
