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
    Employee
@endsection



@section('content')

    @include('partials._alert_message')

    <div class="row clearfix" style="padding-top:30px">
        <div class="col-sm-6">
            <h4 style="font-size:25px !important">Employee List</h4>
        </div>
        <div class="col-sm-6 text-right">
        <a href="{{ route('admin.employees.create') }}" class="btn btn-success btn-sm" style="text-decoration:none; flaot:right"> Create New </a>
        </div>
    </div>



    <table class="table table-header table-bordered table-striped table-sm">
        <thead>
            <tr>
                <th>Sl.</th>
                <th class="name"> Name </th>
                <th class="description"> Mobile </th>
                <th class="rent"> Email </th>
                <th class="rent"> Designation </th>
                <th class="description"> Gender </th>
                <th class="description"> Reference </th>
                <th class="description"> Salary </th>
                <th class="description"> Address </th>
                <th class="rent"> Image </th>
                <th class="description" style="min-width:150px"> Action </th>
            </tr>
        </thead>
        
        @foreach($employees as $key => $employee)
            <tr>
                <td> {{ $key + 1 }} </td>
                <td> {{ $employee->name }} </td>
                <td> {{ $employee->mobile }} </td>
                <td> {{ $employee->email }} </td>
                <td> {{ $employee->designation->name }} </td>
                <td> {{ $employee->gender }} </td>
                <td> {{ $employee->reference }} </td>
                <td> {{ $employee->salary }} </td>
                <td> {{ $employee->address }} </td>
                <td>
                    <img src="{{ $employee->image == 'default.png' ? asset('images/default.png') : asset($employee->image) }}" alt="Employee image" width="70px" height="70px">
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('admin.employees.edit', $employee->id) }}"> Edit </a>
                    
                    <button type="button" onclick="delete_check({{ $employee->id }})" class="btn btn-sm btn-danger" title="Delete">
                            Delete
                        </button>

                    <form action="{{ route('admin.employees.destroy',$employee->id)}}" id="deleteCheck_{{ $employee->id }}" method="POST">
                        @csrf
                        @method("DELETE")
                    </form>
                </td>
            </tr>
        @endforeach
        @if (count($employees) < 1)
            <tr>
                <td colspan="11">
                    <h4 class="text-center">No employee added in list</h4>
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
