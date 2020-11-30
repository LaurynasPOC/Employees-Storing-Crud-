@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Change employee info</div>
                <div class="card-body">
                    <form action="{{ route('employees.update', $employees->id) }}" method="POST">
                        @method('PUT') @csrf
                        <input class="form-control" type="text" name="fullName" value="{{ $employees->fullName }}"><br>
                        <input class="form-control" type="text" name="age" value="{{ $employees->age }}"><br>
                        <input class="form-control" type="text" name="phoneNumber" value="{{ $employees->phoneNumber }}"><br>
                        <select name="positions_id" id="inputGroupSelect01" >
                            <option value="" selected disabled>Choose position</option>
                        @foreach ($positions as $position)
                            <option value="{{ $position->id }}" @if($position->id == $employees->positions_id) selected="selected" @endif>{{ $position->positions }}</option>
                         @endforeach
                        </select>
                        <input class="btn btn-primary" type="submit" value="UPDATE">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
