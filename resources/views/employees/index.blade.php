@extends('layouts.app')
@section('content')
<style>
    input{
    border: none;
    border-bottom: 2px solid red;
   
    }
    select {
        border-radius: 15px;
        outline: none;
        border-bottom: 2px solid red;

    }
    option {
        border: none;
        outline: none;
    }
    
</style> 
@if (session('status_success'))
<p style="color: green"><b>{{ session('status_success') }}</b></p>
@else
<p style="color: red"><b>{{ session('status_error') }}</b></p>
@endif

@if ($errors->any())
<div>
    @foreach ($errors->all() as $error)
        <p style="color: red">{{ $error }}</p>
    @endforeach
</div>
@endif

<table class="table">
    <thead>
        <tr>
            <th scope="col-1">ID</th>
            <th scope="col-2">Full name</th>
            <th scope="col-3">Age</th>
            <th scope="col-3">Contact Number</th>
            <th scope="col-3">Position</th>
            <th scope="col-4">Actions</th>
        </tr>
    </thead>
    <tr>
        <form method="POST" action="{{ route('employees.index') }}">
            @csrf @method('POST')
        <td><strong>#</strong></td>
        <td><input type="text" name="fullName" placeholder="Full name.."></td>
        <td><input type="number" name="age" placeholder="Age.."></td>
        <td><input type="number" name="phoneNumber" placeholder="Phone number.."></td>
        <td> 
            <select name="positions_id" id="inputGroupSelect01" >
                <option value="" selected disabled>Choose position</option>
            @foreach ($positions as $position)
                    <option value="{{ $position->id }}">{{ $position->positions }}</option>
             @endforeach
            </select>
        </td>
        
        <td><input type="submit" value="Add new employee"></td>
        </form>
    </tr>
    @foreach ($employees as $employee)
    <tbody>
    
    <tr>
        <td>{{ $employee->id }}</td>
        <td>{{ $employee->fullName }}</td>
        <td>{{ $employee->age }}</td>
        <td>{{ $employee->phoneNumber }}</td>
        <td>{{ $employee->positions->positions }}</td>
    
        <td>
            <form action={{ route('employees.destroy', $employee->id) }} method="POST">
                <a class="btn btn-success" href={{ route('employees.edit', $employee->id) }}>Update</a>
                @csrf @method('delete')
                <input type="submit" class="btn btn-danger" value="Delete"/>
            </form>
        </td>
    </tr>
    @endforeach
  
</table>
<div class="card-body">
    <form class="form-inline" action="{{ route('employees.index') }}" method="GET">
        <select name="positions_id" id="" class="form-control">
            <option value="" selected disabled>Positions filter:</option>
            @foreach ($positions as $position)
            <option value="{{ $position->id }}" 
                @if($position->id == app('request')->input('positions_id')) 
                    selected="selected" 
                @endif>{{ $position->positions }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</tbody>   
@endsection