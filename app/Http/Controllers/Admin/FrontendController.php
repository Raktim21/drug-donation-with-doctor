<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Drug;

class FrontendController extends Controller
{
    public function index()
    {
        $data['totalDonation'] = Drug::count();
        $data['requestCount'] = Order::count();
        $data['deliverdCount'] = Order::where('status',1)->count();
        return view('frontend.index',$data);
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function about(){
        return view('frontend.about');
    }

    public function supportTeam(){
        return view('frontend.support-team');
    }
}
