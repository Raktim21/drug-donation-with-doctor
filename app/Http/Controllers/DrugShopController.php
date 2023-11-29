<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use App\Models\Order;
use Illuminate\Http\Request;

class DrugShopController extends Controller
{
    public function index()
    {
        $drugs = Drug::where('quantity','>',0)->where('status',1)->where('user_id','!=',auth()->user()->id)->orderBy('id','desc')->get();

        return view('users.drugshops.index',compact('drugs'));
    }



    public function order(Request $request,$id)
    {
        $request->validate([
            'quantity' => 'required|max:10',
        ]);


        $drug = Drug::find($id);

        if ($drug->quantity < $request->quantity) {
            return redirect()->back()->with('error','Quantity is not available');
        }

        if ($drug->user_id == auth()->user()->id) {
            return redirect()->back()->with('error','You cannot order your own drug');
        }

        $order = new Order();
        $order->code        = $id . '-' . hexdec(uniqid());
        $order->customer_id = auth()->user()->id;
        $order->seller_id   = $drug->user_id;
        $order->drug_id     = $id;
        $order->quantity    = $request->quantity;
        $order->save();

        
        return redirect()->back()->with('success','Order placed successfully');
        
    }


    public function myOrder()
    {
        $orders = Order::where('customer_id',auth()->user()->id)->get();
        return view('users.drugshops.my_orders',compact('orders'));
    }




    public function myOrderCancel($id)
    {
        $orders = Order::find($id);

        if ($orders->status != 0) {
            return response()->json([
                'success' => false,
                'message' => 'Order is not cancelable'
            ], 401);
        }
        $orders->delete();
        return response()->json([
            'success' => true,
            'message' => 'Order cancel successfully'
        ], 202);
    }



    public function requests()
    {
        $orders = Order::where('seller_id',auth()->user()->id)->get();
        return view('users.drugshops.my_request',compact('orders'));
    }


    public function requestApprove($id)
    {
        $orders = Order::find($id);
        $orders->status = 1;
        $orders->save();

        $drug = Drug::find($orders->drug_id);
        $drug->quantity = $drug->quantity - $orders->quantity;
        $drug->save();

        return redirect()->back()->with('success','Request approved successfully');
    }



}
