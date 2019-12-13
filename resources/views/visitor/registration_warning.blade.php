


@extends('layouts.visitor')

@section('title', 'Hotel Reservation')
   

@section('css')
    
@endsection

@section('js')
    
@endsection

@section('content')
    <div class="container">
      <div class="well" style="margin-top: 50px; margin-bottom:50px">
          Dear Customer your reservation is saved, please register first to continue reservation. 
          <a href="{{ route('register') }}" class="btn btn-primary">Register</a> <br>
          already have an account? 
          <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
          
      </div>
          
            
    </div>
@endsection


