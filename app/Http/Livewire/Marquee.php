<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Marquee extends Component
{
    public function render()
    {
        $marquee='請民衆踴躍投稿電子報，譲電子報成為大家相互交流、分享的園地！詳見最新文章';
        return view('livewire.marquee',['marquee'=>$marquee]);
    }
}
