<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
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
            'name'        => 'required|unique:categories,name',
            'rent'        => 'required',
            'image'       => 'nullable|mimes:jpg,jpeg,png,PNG,pdf|max:5000'
        ]);

        try {
            $created = Category::create([
                            'name'        => $request->name,
                            'description' => $request->description,
                            'rent'        => $request->rent,
                            'offer'       => $request->offer
                        ]);

            if ($created) {
                $this->upload_image($created, $request);
            }
            return redirect()->route('admin.categories.index')->with('message', 'Category created successfull');
        } catch (Exception $ex) {
            dd($ex->getMessage());
            return redirect()->back()->with('error', 'Some error, please check');
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name'        => 'required|unique:categories,name,'.$category->id,
            'rent'        => 'required',
            'image'       => 'nullable|mimes:jpg,jpeg,png,PNG,pdf|max:5000'
        ]);

        try {
            if ($request->file('image')) {
                if ($category->image != 'default.png') {
                    unlink($category->image);
                }
            }
            $category->update($request->all());
            $this->upload_image($category, $request);

            return redirect()->route('admin.categories.index')->with('message', 'Category updated successfull');
        } catch (Exception $ex) {
            return redirect()->back()->with('error', 'Some error, please check');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if ($category && $category->image && $category->image != 'default.png'){
            unlink($category->image);
        }
        try {
            $category->delete();
            return redirect()->back()->with('message', 'Category deleted successfull');
        } catch (Exception $ex) {
            return redierct()->back()->with('error', 'Some error, please check');
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
                $directory   = './images/'.'categories/'. date('Y') .'/';
                $image->move($directory,$imageName);
                $upload_image_name =  $directory.$imageName;
            }
            $created->image = $upload_image_name;
            $created->save();
        }
    }
}
