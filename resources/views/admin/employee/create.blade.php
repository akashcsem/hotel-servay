@extends('layouts.admin')

@push('css')
    
@endpush

@section('title')
    Employee Create
@endsection



@section('content')



    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            <div class="row clearfix" style="padding-top:30px">
                <div class="col-sm-6">
                    <h4 style="font-size:25px !important"> Employee Create </h4>
                </div>
                <div class="col-sm-6 text-right">
                <a href="{{ route('admin.employees.index') }}" class="btn btn-success btn-sm" style="text-decoration:none; flaot:right"> Employee List </a>
                </div>
            </div>

            {{-- @include('partials._alert_message') --}}

            <form action="{{ route('admin.employees.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            
                <div class="input-group @error('name') has-error @enderror" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Name</span>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Employee Name">
                </div>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="input-group @error('mobile') has-error @enderror" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Mobile</span>
                    <input type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" placeholder="Mobile Number">
                </div>
                @error('mobile')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                
                <div class="input-group @error('email') has-error @enderror" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Email</span>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="abc@gamil.com">
                </div>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                
                <div class="form-group">
                    <label class="control-label"> Radio</label>
                    <div class="radio">
                        <label>
                            <input name="gender" checked value="Male" type="radio" class="ace">
                            <span class="lbl"> Male</span>
                        </label>
                        <label>
                            <input name="gender" value="Female" type="radio" class="ace">
                            <span class="lbl"> Female</span>
                        </label>
                        <label>
                            <input name="gender" value="Others" type="radio" class="ace">
                            <span class="lbl"> Others</span>
                        </label>
                    </div>
                </div>
                
                <div class="input-group @error('salary') has-error @enderror" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Salary</span>
                    <input type="text" class="form-control" name="salary" value="{{ old('salary') }}" placeholder="Employee Salary">
                </div>
                @error('salary')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                
                <div class="input-group @error('reference') has-error @enderror" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Reference</span>
                    <input type="text" class="form-control" name="reference" value="{{ old('reference') }}" placeholder="Add a reference">
                </div>
                @error('reference')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                
                <div class="input-group @error('joining_date') has-error @enderror" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Joining Date</span>
                    <input type="date" class="form-control" name="joining_date"  value="{{ old('joining_date') ?: date('Y-m-d') }}" placeholder="Add a reference">
                </div>
                @error('joining_date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            

                <div class="input-group" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Religion</span>
                    <select name="religion" class="form-control">
                        <option value="Muslim">Muslim</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Christian">Christian</option>
                        <option value="Bouddho">Bouddho</option>
                        <option value="Others">Others</option>
                    </select>
                </div>

                <div class="input-group @error('designaion') has-error @enderror" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Designation</span>
                    <select name="designation" class="form-control">
                        <option value="">--Select--</option>
                        @foreach ($designations as $id => $designation)
                            <option value="{{ $id }}" {{ $id == old('designaion') ? 'selected' : '' }}>{{ $designation }}</option>
                        @endforeach
                    </select>
                </div>
                @error('designation')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="input-group" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Employee Image</span>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror


                <div class="input-group" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Address</span>
                    <textarea name="address" class="form-control" rows="3"> {{ old('address') }} </textarea>
                </div>


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