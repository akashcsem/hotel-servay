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
    Category
@endsection



@section('content')

    @include('partials._alert_message')

    <div class="row clearfix" style="padding-top:30px">
        <div class="col-sm-6">
            <h4 style="font-size:25px !important">Category List</h4>
        </div>
        <div class="col-sm-6 text-right">
        <a href="{{ route('admin.categories.create') }}" class="btn btn-success btn-sm" style="text-decoration:none; flaot:right"> Create New </a>
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
        
        @foreach($categories as $key => $category)
            <tr>
                <td> {{ $key + 1 }} </td>
                <td> {{ $category->name }} </td>
                <td> {{ $category->description }} </td>
                <td> {{ $category->rent }} </td>
                <td> {{ $category->offer }} </td>
                <td>
                    <img src="{{ $category->image == "default.png" ? asset('images/default.png') : asset($category->image) }}" alt="Category image" width="70px" height="70px">
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('admin.categories.edit', $category->id) }}"> Edit </a>
                    
                    <button type="button" onclick="delete_check({{ $category->id }})" class="btn btn-sm btn-danger" title="Delete">
                            Delete
                        </button>

                    <form action="{{ route('admin.categories.destroy',$category->id)}}" id="deleteCheck_{{ $category->id }}" method="POST">
                        @csrf
                        @method("DELETE")
                    </form>
                </td>
            </tr>
        @endforeach
        @if (count($categories) < 1)
            <tr>
                <td colspan="7">
                    <h4 class="text-center">No category created yet</h4>
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
