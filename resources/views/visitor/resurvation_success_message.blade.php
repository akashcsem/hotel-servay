



@extends('layouts.visitor')

@section('title', 'Hotel Reservation')
   

@section('css')
    
@endsection

@section('js')
    
@endsection

@section('content')
    <div class="container">

      <br><br>
            <div class="well">
                  Dear customer your reservation is successfully completed, You are most welcome, 
            in any kind of information you can contact with us, <a href="{{ route('visitor.contact.us') }}" class="btn btn-primary btn-outline-primary">Contact Us</a>
            </div>

      <br><br>
    </div>
@endsection


