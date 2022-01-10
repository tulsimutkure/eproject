<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transcation;
class TranscationController extends Controller
{
    public function index( )
    {
        $transcation=Transcation::all();
        return view('transcations.index',compact('transcation'));
    }
    public function edit($id)
    {
        $transcation = Transcation::find($id);
        return view('transcations.edit',compact('transcation'));
    }
    public function update($id, Request $request)
    {
        $transcation =Transcation::find($id);
        // $transcation->user_id = $request->user_id;
        $transcation->order_id = $request->order_id;
        $transcation->type = $request->type;
        $transcation->mode = $request->mode;
        $transcation->status = $request->status;
        $transcation->update();
        return redirect()->route('transcations.index');
    }
    public function delete($id, Request $request)
    {
        $transcation= Transcation::find($id);
        $transcation->delete();
        return redirect()->route('transcations.index');
    }
}
