@extends('layouts.admin')

@push('css')
    
@endpush

@section('title')
    Employee Edit
@endsection



@section('content')



    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            <div class="row clearfix" style="padding-top:30px">
                <div class="col-sm-6">
                    <h4 style="font-size:25px !important"> Employee Edit </h4>
                </div>
                <div class="col-sm-6 text-right">
                <a href="{{ route('admin.employees.index') }}" class="btn btn-success btn-sm" style="text-decoration:none; flaot:right"> Employee List </a>
                </div>
            </div>

            {{-- @include('partials._alert_message') --}}

            <form action="{{ route('admin.employees.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            
                <div class="input-group @error('name') has-error @enderror" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Name</span>
                    <input type="text" class="form-control" name="name" value="{{ old('name') ?: $employee->name }}" placeholder="Employee Name">
                </div>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="input-group @error('mobile') has-error @enderror" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Mobile</span>
                    <input type="text" class="form-control" name="mobile" value="{{ old('mobile') ?: $employee->mobile }}" placeholder="Mobile Number">
                </div>
                @error('mobile')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                
                <div class="input-group @error('email') has-error @enderror" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Email</span>
                    <input type="email" class="form-control" name="email" value="{{ old('email') ?: $employee->email }}" placeholder="abc@gamil.com">
                </div>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                
                <div class="form-group">
                    <label class="control-label"> Radio</label>
                    <div class="radio">
                        <label>
                            <input name="gender" {{ $employee->genger == 'Male' ? 'checked' : '' }} value="Male" type="radio" class="ace">
                            <span class="lbl"> Male</span>
                        </label>
                        <label>
                            <input name="gender" {{ $employee->genger == 'Female' ? 'checked' : '' }} value="Female" type="radio" class="ace">
                            <span class="lbl"> Female</span>
                        </label>
                        <label>
                            <input name="gender" {{ $employee->genger == 'Others' ? 'checked' : '' }} value="Others" type="radio" class="ace">
                            <span class="lbl"> Others</span>
                        </label>
                    </div>
                </div>
                
                <div class="input-group @error('salary') has-error @enderror" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Salary</span>
                    <input type="text" class="form-control" name="salary" value="{{ old('salary') ?: $employee->salary }}" placeholder="Employee Salary">
                </div>
                @error('salary')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                
                <div class="input-group @error('reference') has-error @enderror" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Reference</span>
                    <input type="text" class="form-control" name="reference" value="{{ old('reference') ?: $employee->reference }}" placeholder="Add a reference">
                </div>
                @error('reference')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                
                <div class="input-group @error('joining_date') has-error @enderror" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Joining Date</span>
                    <input type="date" class="form-control" name="joining_date"  value="{{ old('joining_date') ?: $employee->joining_date }}" placeholder="Add a reference">
                </div>
                @error('joining_date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            

                <div class="input-group" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Religion</span>
                    <select name="religion" class="form-control">
                        <option value="Muslim" {{ $employee->religion == 'Muslim' ? 'selected' : '' }}>Muslim</option>
                        <option value="Hindu" {{ $employee->religion == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                        <option value="Christian" {{ $employee->religion == 'Christian' ? 'selected' : '' }}>Christian</option>
                        <option value="Bouddho" {{ $employee->religion == 'Bouddho' ? 'selected' : '' }}>Bouddho</option>
                        <option value="Others" {{ $employee->religion == 'Others' ? 'selected' : '' }}>Others</option>
                    </select>
                </div>

                <div class="input-group @error('designation_id') has-error @enderror" style="width: 100%; margin-bottom:12px">
                    <span class="input-group-addon" style="text-align:left; width:125px">Designation</span>
                    <select name="designation_id" class="form-control">
                        <option value="">--Select--</option>
                        @foreach ($designations as $id => $designation)
                            <option value="{{ $id }}" {{ $id == old('designation_id') || $employee->designation_id == $id ?  'selected' : '' }}>{{ $designation }}</option>
                        @endforeach
                    </select>
                </div>
                @error('designation_id')
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
                    <textarea name="address" class="form-control" rows="3"> {{ old('address') ?: $employee->address }} </textarea>
                </div>


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