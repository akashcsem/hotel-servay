@extends('layouts.admin')

@push('css')
    
@endpush

@section('title')
    Room Create
@endsection



@section('content')



    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            <div class="row clearfix" style="padding-top:30px">
                <div class="col-sm-6">
                    <h4 style="font-size:25px !important"> Room Create </h4>
                </div>
                <div class="col-sm-6 text-right">
                <a href="{{ route('admin.rooms.index') }}" class="btn btn-success btn-sm" style="text-decoration:none; flaot:right"> Room List </a>
                </div>
            </div>

            @include('partials._alert_message')

            <form action="{{ route('admin.rooms.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            
                <div class="input-group @error('name') has-error @enderror" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Name</span>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Room Name">
                </div>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="input-group @error('category_id') has-error @enderror" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Category</span>
                    <select name="category_id" class="form-control">
                        <option value="">Select</option>
                        @foreach ($categories as $id => $category)
                        <option value="{{ $id }}" {{ $id == old('category_id') ? 'selected' : '' }}>{{ $category }}</option>
                        @endforeach
                    </select>
                </div>
                @error('category_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="input-group" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Description</span>
                    <textarea name="description" class="form-control" rows="3"> {{ old('description') }} </textarea>
                </div>
            
                <div class="input-group @error('rent') has-error @enderror" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Rent</span>
                    <input type="number" class="form-control" name="rent" value="{{ old('rent') }}" placeholder="Room Rent">
                </div>
                @error('rent')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="input-group" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Offer</span>
                    <input type="number" class="form-control" name="offer" value="{{ old('offer') }}" placeholder="Room Offer">
                </div>

                <div class="input-group" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Room Image</span>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
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