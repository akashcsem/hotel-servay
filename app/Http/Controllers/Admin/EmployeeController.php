<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Designation;
use Exception;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::orderBy('name')->paginate(20); 
        return view('admin.employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $designations = Designation::orderBy('name')->pluck('name', 'id');
        return view('admin.employee.create', compact('designations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'required|unique:employees,name',
            'mobile'       => 'required|numeric|min:7',
            'email'        => 'required|email|unique:employees,email',
            'designation'  => 'required',
            'joining_date' => 'required',
            'image'        => 'nullable|mimes:jpeg,jpg,png,PNG|max:10000'
        ]);

        try {
            $created = Employee::create([
                'name'           => $request->name,
                'mobile'         => $request->mobile,
                'email'          => $request->email,
                'designation_id' => $request->designation,
                'religion'       => $request->religion,
                'gender'         => $request->gender,
                'joining_date'   => $request->joining_date,
                'salary'         => $request->salary,
                'address'        => $request->address,
                'reference'      => $request->reference
            ]);
            if ($created) {
                $this->upload_image($created, $request);
            }
            return redirect()->route('admin.employees.index')->with('message', 'Employee created successfull');
        } catch (Exception $ex) {
            dd($ex->getMessage());
            return redirect()->back()->with('error', 'Some error, please check');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        $designations = Designation::orderBy('name')->pluck('name', 'id');
        return view('admin.employee.edit', compact('employee', 'designations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name'           => 'required|unique:employees,name,' . $employee->id,
            'mobile'         => 'required|numeric|min:7',
            'email'          => 'required|email|unique:employees,email,' . $employee->id,
            'designation_id' => 'required',
            'joining_date'   => 'required',
            'image'          => 'nullable|mimes:jpeg,jpg,png,PNG|max:10000'
        ]);

        
        try {
            if ($request->file('image')) {
                if ($employee->image != 'default.png') {
                    unlink($employee->image);
                }
            }
            $employee->update($request->all());
            $this->upload_image($employee, $request);

            return redirect()->route('admin.employees.index')->with('message', 'Employee updated successfull');
        } catch (Exception $ex) {
            dd($ex->getMessage());
            return redirect()->back()->with('error', 'Some error, please check');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        
        if ($employee && $employee->image && $employee->image != 'default.png'){
            unlink($employee->image);
        }
        try {
            $employee->delete();
            return redirect()->back()->with('message', 'Employee deleted successfull');
        } catch (Exception $ex) {
            return redirect()->back()->with('error', 'Some error, please check');
        }
    }


    
    private function upload_image($created, $request)
    {
        if ($request->file('image')) {
            $upload_image_name = "";

            $image = $request->file('image');
            $slug  = Str::slug($request->name);

            if (isset($image)) {
                $imageName   = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
                $directory   = './images/'.'employees/'. date('Y') .'/';
                $image->move($directory,$imageName);
                $upload_image_name =  $directory.$imageName;
            }
            $created->image = $upload_image_name;
            $created->save();
        }
    }
}
