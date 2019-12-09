<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Designation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designations = Designation::all();
        return view('admin.designations.index', compact('designations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.designations.create');
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
            'name'        => 'required|unique:designations,name',
        ]);

        try {
            $created = Designation::create($request->all());
            return redirect()->route('admin.designations.index')->with('message', 'Designation created successfull');
        } catch (Exception $ex) {
            dd($ex->getMessage());
            return redirect()->back()->with('error', 'Some error, please check');
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function show(Designation $designation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function edit(Designation $designation)
    {
        return view('admin.designations.edit', compact('designation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Designation $designation)
    {
        $request->validate([
            'name'        => 'required|unique:designations,name,'.$designation->id
        ]);

        try {
            $designation->update($request->all());
            return redirect()->route('admin.designations.index')->with('message', 'Designation updated successfull');
        } catch (Exception $ex) {
            return redirect()->back()->with('error', 'Some error, please check');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Designation $designation)
    {
        try {
            $designation->delete();
            return redirect()->back()->with('message', 'Designation deleted successfull');
        } catch (Exception $ex) {
            return redirect()->back()->with('error', 'Some error, please check');
        }
    }

}
