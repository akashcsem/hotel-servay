


@extends('layouts.visitor')

@section('title', 'Hotel Reservation')
   

@section('css')
    
@endsection

@section('js')
    
@endsection

@section('content')
    <div class="container">
      <div class="well" style="margin-top: 50px; margin-bottom:50px">
          Congratulation,
          Dear Customer you have reserved {{ $reservation->number_of_room }} room and you are total {{ $reservation->number_of_people }} person, if you want to confirm your reservarion, so please confirm your payment, your total cost is, {{ number_format($reservation->room->rent * $reservation->number_of_room) }} Tk. only 
          <a href="create-payment/{{ $reservation->id }}" class="btn btn-primary">Make Payment</a>
          <a href="reservation-cancel/{{ $reservation->id }}" onclick="return confirm('Are you sure to cancel this reservation')" class="btn btn-danger">Cancel Reservation</a>
          
      </div>
      <div class="well">
          <img src="{{ asset($reservation->room->image) }}" style="height:450px; width:300px; " alt="">
      </div>
          
            
    </div>
@endsection


