@extends('layouts.admin')

@push('css')
    
@endpush

@section('title')
    Designation Create
@endsection



@section('content')



    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            <div class="row clearfix" style="padding-top:30px">
                <div class="col-sm-6">
                    <h4 style="font-size:25px !important"> Designation Create </h4>
                </div>
                <div class="col-sm-6 text-right">
                <a href="{{ route('admin.designations.index') }}" class="btn btn-success btn-sm" style="text-decoration:none; flaot:right"> Designation List </a>
                </div>
            </div>

            @include('partials._alert_message')

            <form action="{{ route('admin.designations.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            
                <div class="input-group @error('name') has-error @enderror" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Name</span>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Designation Name">
                </div>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="form-group pull-right">
                    <button class="btn btn-gray" type="Reset"> <i class="fa fa-refresh"></i> Reset</button>
                    <button class="btn btn-success"> <i class="fa fa-save"></i> Save </button>
                </div>
            
            </form>
        </div>
    </div>

@endsection


@push('js')

@endpush