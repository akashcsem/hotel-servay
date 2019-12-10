@extends('layouts.admin')

@push('css')
    <style type="text/stylesheet">
        table {
            width: 100%; 
            text-align : center;
            border: 1px solid gray;
        }

        .name {
            text-align: center; 
            background-color: #a1cbef;
        }
        .description {
            text-align: center; background-color: #a7b5ce;
        }
        .rent {
            text-align: center; background-color: #a1cbef;
        }
    </style>
@endpush

@section('title')
    Reservation List
@endsection



@section('content')

    @include('partials._alert_message')


      <br><br>
      <h2 class="text-center">Reservation List</h2>
      <table class="table table-header table-striped table-bordered table-sm">
            <thead>
                  <tr>
                        <th>Sl.</th>
                        <th class="name"> Reserved By </th>
                        <th class="description"> Room </th>
                        <th class="rent"> Arrival </th>
                        <th class="description"> Departure </th>
                        <th class="rent"> Number of Room </th>
                        <th class="description"> Number of People </th>
                        <th class="description"> Cost </th>

                  </tr>
            </thead>
            
            @foreach($reservations as $key => $reservation)
            <tr>
                  <td> {{ $key + 1 }} </td>
                  <td>{{ $reservation->reserved_user->name }}</td>
                  <td>{{ $reservation->room->name }}</td>
                  <td>{{ Carbon\Carbon::parse($reservation->arrival_date)->format('Y-m-d') }}</td>
                  <td>{{ Carbon\Carbon::parse($reservation->departure_date)->format('Y-m-d') }}</td>
                  <td>{{ $reservation->number_of_room }}</td>
                  <td>{{ $reservation->number_of_people }}</td>
                  <td>{{ $reservation->number_of_room * $reservation->room->rent }}Tk.</td>
            </tr>
            @endforeach
            @if (count($reservations) < 1)
                  <tr>
                  <td colspan="7">
                        <h4 class="text-center">No category created yet</h4>
                  </td>
                  </tr>
            @endif
      </table>
      {{ $reservations->links() }}
@endsection

@section('js')
  
@stop
