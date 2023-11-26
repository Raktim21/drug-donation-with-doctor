<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use App\Models\Order;
use Illuminate\Http\Request;

class DrugShopController extends Controller
{
    public function index()
    {
        $drugs = Drug::where('quantity','>',0)->orderBy('id','desc')->where('status',1)->get();

        return view('users.drugshops.index',compact('drugs'));
    }



    public function order(Request $request,$id)
    {
        $request->validate([
            'quantity' => 'required',
        ]);


        $drug = Drug::find($id);

        $order = new Order();
        $order->code        = $id . '-' . hexdec(uniqid());
        $order->customer_id = auth()->user()->id;
        $order->seller_id   = $drug->user_id;
        $order->drug_id     = $id;
        $order->quantity    = $request->quantity;
        $order->save();

        
        return redirect()->back()->with('success','Order placed successfully');
        
    }



}
