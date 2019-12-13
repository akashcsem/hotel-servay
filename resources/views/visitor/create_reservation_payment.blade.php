


@extends('layouts.visitor')

@section('title', 'Hotel Reservation')
   

@section('css')
    
@endsection

@section('js')
    
@endsection

@section('content')
    <div class="container">


        <div class="row" style="margin-top:40px; margin-bottom:40px">
            <div class="col-md-8 col-md-offset-2">
                <ul class="list-group">
                    <li class="list-group-item">Name: {{ $reservation->reserved_user->name }}</li>
                    <li class="list-group-item">Email: {{ $reservation->reserved_user->email }}</li>
                    <li class="list-group-item">Mobile: {{ $reservation->reserved_user->mobile }}</li>
                    <li class="list-group-item">Reserved From: {{ $reservation->arrival_date }} -- To -- {{ $reservation->departure_date }}</li>
                    <li class="list-group-item">Selectd Room: {{ $reservation->room->name }}</li>
                    <li class="list-group-item">Number of room: {{ $reservation->number_of_room }}</li>
                    <li class="list-group-item">Number of People: {{ $reservation->number_of_people }}</li>
                </ul>
            </div>
            <div class="col-md-8 col-md-offset-2">
            <form action="/visitor/create-paymentsd" method="POST">
                    @csrf
                    <input type="hidden" name="reservation_id" value="{{ $reservation->id }}">
                    <input type="hidden" name="reserved_by" value="{{ $reservation->reserved_by }}">
                    
                    <div class="form-group">
                        <label for="email">Amount:</label>
                        <input type="text" name="amount" class="form-control" readonly value="{{ $reservation->room->rent * $reservation->number_of_room }}">
                    </div>

                    <div class="form-group">
                      <label for="pwd">Reference:</label>
                      <input type="text" placeholder="Add a reference" class="form-control" id="pwd" name="reference">
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection


