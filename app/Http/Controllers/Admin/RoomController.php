<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Support\Str;
use Exception;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        return view('admin.rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name')->pluck('name', 'id');
        return view('admin.rooms.create', compact('categories'));
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
            'name'        => 'required|unique:rooms,name',
            'category_id' => 'required',
            'rent'        => 'required',
            'image'       => 'nullable|mimes:jpg,jpeg,png,PNG,pdf|max:5000'
        ]);

        try {
            $created = Room::create([
                            'name'        => $request->name,
                            'category_id' => $request->category_id,
                            'description' => $request->description,
                            'rent'        => $request->rent,
                            'offer'       => $request->offer
                        ]);

            if ($created) {
                $this->upload_image($created, $request);
            }
            return redirect()->route('admin.rooms.index')->with('message', 'Room created successfull');
        } catch (Exception $ex) {
            dd($ex->getMessage());
            return redirect()->back()->with('error', 'Some error, please check');
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        $categories = Category::orderBy('name')->pluck('name', 'id');
        return view('admin.rooms.edit', compact('categories', 'room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $request->validate([
            'name'        => 'required|unique:rooms,name,'.$room->id,
            'rent'        => 'required',
            'image'       => 'nullable|mimes:jpg,jpeg,png,PNG,pdf|max:5000'
        ]);

        try {
            if ($request->file('image')) {
                if ($room->image != 'default.png') {
                    unlink($room->image);
                }
            }
            $room->update($request->all());
            $this->upload_image($room, $request);

            return redirect()->route('admin.rooms.index')->with('message', 'Room updated successfull');
        } catch (Exception $ex) {
            return redirect()->back()->with('error', 'Some error, please check');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        if ($room && $room->image && $room->image != 'default.png'){
            unlink($room->image);
        }
        try {
            $room->delete();
            return redirect()->back()->with('message', 'Room deleted successfull');
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
                $directory   = './images/'.'rooms/'. date('Y') .'/';
                $image->move($directory,$imageName);
                $upload_image_name =  $directory.$imageName;
            }
            $created->image = $upload_image_name;
            $created->save();
        }
    }
}
