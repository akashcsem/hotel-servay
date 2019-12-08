@extends('layouts.admin')

@push('css')
    
@endpush

@section('title')
    Category Edit
@endsection



@section('content')



    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            <div class="row clearfix" style="padding-top:30px">
                <div class="col-sm-6">
                    <h4 style="font-size:25px !important"> Category Edit </h4>
                </div>
                <div class="col-sm-6 text-right">
                <a href="{{ route('admin.categories.index') }}" class="btn btn-success btn-sm" style="text-decoration:none; flaot:right"> Category List </a>
                </div>
            </div>

            @include('partials._alert_message')

            <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="input-group @error('name') has-error @enderror" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Name</span>
                    <input type="text" class="form-control" name="name" value="{{ old('name') ?: $category->name }}" placeholder="Category Name">
                </div>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="input-group" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Description</span>
                    <textarea name="description" class="form-control" rows="3"> {{ old('description') ?: $category->description }} </textarea>
                </div>
            
                <div class="input-group @error('rent') has-error @enderror" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Rent</span>
                    <input type="number" class="form-control" name="rent" value="{{ old('rent') ?: $category->rent }}" placeholder="Category Rent">
                </div>
                @error('rent')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="input-group" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Offer</span>
                    <input type="number" class="form-control" name="offer" value="{{ old('offer') ?: $category->offer }}" placeholder="Category Offer">
                </div>

                <div class="input-group" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Category Image</span>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror



                <div class="form-group pull-right">
                    <button class="btn btn-gray" type="Reset"> <i class="fa fa-refresh"></i> Reset</button>
                    <button class="btn btn-success"> <i class="fa fa-save"></i> Update </button>
                </div>
            
            </form>
        </div>
    </div>

@endsection


@push('js')

@endpush