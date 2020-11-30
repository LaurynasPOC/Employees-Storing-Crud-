@extends('layouts.app')
@section('content')
<style>
    input{
    border: none;
    border-bottom: 2px solid red;
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
            <th scope="col-2">Positions</th>
            <th scope="col-3">Employees at position</th>
            <th scope="col-4">Actions</th>
        </tr>
    </thead>
    
    <tr>
        <form method="POST" action="{{ route('positions.index') }}">
            @csrf
        <td><strong>#</strong></td>
        <td><input type="text" name="positions" placeholder="New position.."></td>
        <td></td>
        <td><input type="submit" value="Add Position"></td>
        </form>
    </tr>
    @foreach ($positions as $position)
    <tbody>
    
    <tr>
        <td>{{$position['id'] }}</td>
        <td>{{$position['positions'] }}</td>
        <td>
            @foreach ($position->employees as $empData)
            {{ $empData->fullName }}
                @if( !$loop->last), @endif
            @endforeach
        </td>
        <td>
            <form action={{ route('positions.destroy', $position->id) }} method="POST">
                <a class="btn btn-success" href={{ route('positions.edit', $position->id) }}>Update</a>
                @csrf @method('delete')
                <input type="submit" class="btn btn-danger" value="Delete"/>
            </form>
        </td>
    </tr>
    @endforeach
    
</table>
<form action="{{ route('positions.index') }}">
    <input type="text" name='positions' placeholder="Search position...">
    <input type="submit" value="Search">
    </form>
</tbody>   
@endsection