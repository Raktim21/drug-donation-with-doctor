<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use App\Models\Order;
use Illuminate\Http\Request;

class DrugShopController extends Controller
{
    public function index()
    {
        $drugs = Drug::where('user_id', auth()->user()->id)->latest('id')->paginate(20);

        return view('user.drugshops.index',compact('drugs'));
    }



    public function order(Request $request,$id)
    {

        $request->validate([
            'quantity' => 'required|numeric',
            'note'     => 'required|string',
            'address'  => 'required|string',
        ]);


        $drug = Drug::findOrFail($id);

        if ($drug->quantity < $request->quantity) {

            return redirect()->back()->with('error','Stock is not enough');
        }


        $drup_order = new Order();
        $drup_order->user_id = auth()->user()->id;
        $drup_order->drug_id = $drug->id;
        $drup_order->quantity = $request->quantity;
        $drup_order->note = $request->note;
        $drup_order->address = $request->address;
        $drup_order->save();

        
        $drug->quantity -= $request->quantity;
        $drug->save();


        return redirect()->back()->with('success','Order created successfully');
        
    }



}
