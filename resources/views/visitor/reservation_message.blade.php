


@extends('layouts.visitor')

@section('title', 'Hotel Reservation')
   

@section('css')
    
@endsection

@section('js')
    
@endsection

@section('content')
    <div class="container">
          Congratulation,
          Dear Customer you have reserved {{ $reservation->number_of_room }} room and you are total {{ $reservation->number_of_people }} person, if you want to confirm your reservarion, so please confirm your payment, your total cost is, {{ number_format($reservation->room->rent * $reservation->number_of_room) }} Tk. only

            <img src="{{ asset($reservation->room->image) }}" alt="">
    <a href="create-payment/{{ $reservation->id }}" class="btn btn-primary">Make Payment</a>
    </div>
@endsection


