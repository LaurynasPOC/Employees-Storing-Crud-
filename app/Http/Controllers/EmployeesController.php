<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    // public function index() {
    //     $positions = \App\Models\Positions::orderBy('positions')->get();
    //     $employees = \App\Models\Employees::orderBy('fullName')->get();
    //     return view('employees.index', ['positions' => $positions], ['employees' => $employees]);
        
    // }
    public function index(Request $request){
        if(isset($request->positions_id) && $request->positions_id !== 0)
            $employees = \App\Models\Employees::where('positions_id', $request->positions_id)->orderBy('fullName')->get();
        else
            $employees = \App\Models\Employees::orderBy('fullName')->get();
        $positions = \App\Models\Positions::orderBy('positions')->get();
        return view('employees.index', ['employees' => $employees, 'positions' => $positions]);
    }
    public function create() {
        return view('employees.create');
    }
    public function store(Request $request) {
        $this->validate($request, [
            
            'fullName' => 'required|unique:employees',
            'age' => 'required',
            'phoneNumber' => 'required',
            'positions_id' => 'required',
        ]);
        $employee = new Employees();
        $employee->fill($request->all());
        $employee->save();
        return redirect()->route('employees.index')->with('status_success', 'Employee created!');
    }
    public function edit(Employees $employee){
        $positions = \App\Models\Positions::orderBy('positions')->get();
        return view('employees.edit', ['employees' => $employee], ['positions' => $positions]);
    }
 
    public function update(Request $request, Employees $employee){
        $this->validate($request, [
            
            'fullName' => 'required',
            'age' => 'required',
            'phoneNumber' => 'required',
            'positions_id' => 'required',
        ]);
        $employee->fill($request->all());
        $employee->save();
        return redirect()->route('employees.index')->with('status_success', 'Post updated!');
    }
 
     public function destroy(Employees $employee){
         $employee->delete();
         return redirect()->route('employees.index');
     }
 
}
