<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Drug;
use Illuminate\Http\Request;

class DrugRequestController extends Controller
{
    public function index(){

        $drugs = Drug::where('status', 0)->latest('id')->get();

        return view('admin.drug-request.index', compact('drugs'));
    }


    public function update($id){
     
        $drug = Drug::find($id);
        $drug->status = 1;
        $drug->save();

        return redirect()->back()->with('success', 'Drug request updated successfully');
    }
}
