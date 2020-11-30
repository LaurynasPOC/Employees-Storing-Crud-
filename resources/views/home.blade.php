@extends('layouts.app')
<style>
    
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card">
                <div class="card-header">{{ __('Hi there') }}</div>

                <div class="card-body">
                    {{ __('WELCOME to my employees storing CRUD app!') }}
                </div>
                <div class="card-footer">
                     <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRieo8uah8aW4rmJpKfN3n-e2nOfwHbL6cn-w&usqp=CAU" alt=""> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
