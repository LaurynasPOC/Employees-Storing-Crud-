@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Change position</div>
                <div class="card-body">
                    <form action="{{ route('positions.update', $positions->id) }}" method="POST">
                        @method('PUT') @csrf
                        <input class="form-control" type="text" name="positions" value="{{ $positions->positions }}"><br>
                        <input class="btn btn-primary" type="submit" value="UPDATE">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
