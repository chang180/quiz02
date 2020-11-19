<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Total;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $view = [];

    public function __construct()
    {
        $today = date("Y-m-d");
        // dd(Total::where('today',$today)->count());
        $count = Total::where('today', $today)->count();
        // dd($count);
        if ($count == 0) {
            session()->put('today', 1);
            $count = new Total;
            $count->today=$today;
            $count->total=1;
            $count->save();
        } else {
            if(!session()->has('today')){
                $count = Total::where('today', $today)->first();
                $count->total+1;
                $count->save();
                session()->put('today',$count);
            }
            // dd($count);
        }
        $this->view['today']=Total::where('today',$today)->first()->total;
        $this->view['sum']=Total::sum('total');
        $this->view['date']=date("m 月 d 號 星期N");
    }
}
