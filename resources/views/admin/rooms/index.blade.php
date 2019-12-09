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
    Room
@endsection



@section('content')

    @include('partials._alert_message')

    <div class="row clearfix" style="padding-top:30px">
        <div class="col-sm-6">
            <h4 style="font-size:25px !important">Room List</h4>
        </div>
        <div class="col-sm-6 text-right">
        <a href="{{ route('admin.rooms.create') }}" class="btn btn-success btn-sm" style="text-decoration:none; flaot:right"> Create New </a>
        </div>
    </div>



    <table class="table table-header table-striped table-sm">
        <thead>
            <tr>
                <th>Sl.</th>
                <th class="name"> Name </th>
                <th class="description"> Description </th>
                <th class="rent"> Rent </th>
                <th class="description"> Offer </th>
                <th class="rent"> Image </th>
                <th class="description"> Action </th>
            </tr>
        </thead>
        
        @foreach($rooms as $key => $room)
            <tr>
                <td> {{ $key + 1 }} </td>
                <td> {{ $room->name }} </td>
                <td> {{ $room->description }} </td>
                <td> {{ $room->rent }} </td>
                <td> {{ $room->offer }} </td>
                <td>
                    <img src="{{ $room->image == "default.png" ? asset('images/default.png') : asset($room->image) }}" alt="Room image" width="70px" height="70px">
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('admin.rooms.edit', $room->id) }}"> Edit </a>
                    
                    <button type="button" onclick="delete_check({{ $room->id }})" class="btn btn-sm btn-danger" title="Delete">
                            Delete
                        </button>

                    <form action="{{ route('admin.rooms.destroy',$room->id)}}" id="deleteCheck_{{ $room->id }}" method="POST">
                        @csrf
                        @method("DELETE")
                    </form>
                </td>
            </tr>
        @endforeach
        @if (count($rooms) < 1)
            <tr>
                <td colspan="7">
                    <h4 class="text-center">No room created yet</h4>
                </td>
            </tr>
        @endif
    </table>

@endsection

@section('js')
    <!-- inline scripts related to this page -->
    <script type="text/javascript">

        function delete_check(id)
        {
            Swal.fire({
                title: 'Are you sure ?',
                html: "<b>You want to delete permanently !</b>",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                width:400,
            }).then((result) =>{
                if(result.value){
                    $('#deleteCheck_'+id).submit();
                }
            })

        }

    </script>
@stop
