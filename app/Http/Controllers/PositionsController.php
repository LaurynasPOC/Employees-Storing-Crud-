<?php

namespace App\Http\Controllers;

use App\Models\Positions;
use Illuminate\Http\Request;

class PositionsController extends Controller
{
    public function index(Request $request) {
        if(isset($request->positions) && $request->positions !== 0)
        $positions = \App\Models\Positions::where('positions', $request->positions)->get();
        else
        $positions = \App\Models\Positions::orderBy('positions')->get();
        return view('positions.index', ['positions' => $positions]);
        
    }
    
    public function create() {
        return view('positions.create');
    }
    public function store(Request $request) {
        $this->validate($request, [
            'positions' => 'required|unique:positions',
        ]);
        $position = new Positions();
        $position->fill($request->all());
        $position->save();
        return redirect()->route('positions.index')->with('status_success', 'Position created!');
    }
    public function edit(Positions $position){
        return view('positions.edit', ['positions' => $position]);
    }
 
    public function update(Request $request, Positions $position){
        $this->validate($request, [
            'positions' => 'required',
        ]);
        $position->fill($request->all());
        $position->save();
        return redirect()->route('positions.index')->with('status_success', 'Post updated!');
    }
 
     public function destroy(Positions $position){
         $position->delete();
         return redirect()->route('positions.index');
     }
 
 
}
