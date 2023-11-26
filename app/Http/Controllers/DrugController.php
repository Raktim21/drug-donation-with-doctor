<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Drug;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DrugController extends Controller
{
    public function index(){
        $drugs = Drug::where('user_id', auth()->user()->id)->latest('id')->paginate(20);

        return view('users.drugs.index', compact('drugs'));
    }


    public function create(){
        $districts = District::orderBy('name', 'asc')->get();
        return view('users.drugs.create', compact('districts'));
    }


    public function store(Request $request){
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'quantity'    => 'required|integer|min:1',
            'generic'     => 'required|string|max:255',
            'brand'       => 'required|string|max:255',
            'exp_date'    => 'required|date',
            'photo'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'district'    => 'required|exists:districts,id',
            'address'     => 'required|string|max:255',
        ]);


        $drug = new Drug();
        $drug->sku         = rand(100000, 999999);
        $drug->name        = $request->name;
        $drug->description = $request->description;
        $drug->quantity    = $request->quantity;
        $drug->generic     = $request->generic;
        $drug->brand       = $request->brand;
        $drug->exp_date    = Carbon::parse($request->exp_date);
        $drug->user_id     = auth()->user()->id;
        $drug->district_id = $request->district;
        $drug->address     = $request->address;
        $drug->save();


        if ($request->hasFile('photo')){
            
            $image = $request->file('photo');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/drugs/'), $image_name);
            $drug->photo = 'uploads/drugs/'.$image_name;
            $drug->save();
        }


        return redirect()->route('user.drugs.index')->with('success','Drug Created Successfully');
        
    }


    public function updateQuantity(Request $request, $id){
        $request->validate([
            'exp_date' => 'required|date',
            'quantity' => 'required|integer|min:1',
        ]);


        $drug = Drug::findOrFail($id);
        $drug->exp_date = Carbon::parse($request->exp_date);
        $drug->quantity = $request->quantity;
        $drug->save();

        return redirect()->back()->with('success','Drug Quantity Updated Successfully');
    }


    public function destroy($id){
        
        $drug = Drug::findOrFai($id);
        $drug->delete();

        return redirect()->route('user.drugs.index')->with('success','Drug Deleted Successfully');
    }
}
