<?php

namespace App\Http\Controllers\Visitor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Reservation;
use App\Models\Admin\Room;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ReservationController extends Controller
{
    public function createReservation(Request $request)
    {

       try {
            if (Auth::user()) {
                $user = Auth::user();
                $request->validate([
                    'arrival_date'     => 'required',
                    'room'             => 'required',
                    'number_of_room'   => 'required|numeric|min:1|max:50',
                    'number_of_people' => 'required|numeric|min:1|max:100',
                ]);
            } else {
                $request->validate([
                    'arrival_date'     => 'required',
                    'departure_date'   => 'required',
                    'number_of_room'   => 'required|numeric|min:1|max:50',
                    'number_of_people' => 'required|numeric|min:1|max:100',
                    'name'             => 'required|unique:users,name',
                    'email'            => 'required|email|min:7|max:16|unique:users',
                    'mobile'           => 'required|numeric|min:7|max:16',
                    'password'         => 'required|min:4|max:50'  
                ]);

                $user = User::create([
                    'name'             => $request->name,
                    'role_id'          => 2, 
                    'email'            => $request->email, 
                    'mobile'           => $request->mobile,
                    'password'         => Hash::make($request->password),
                ]);
            }

            Reservation::create([
                'reserved_by'      => $user->id,
                'room_id'          => $request->room,
                'arrival_date'     => $request->arrival_date,
                'departure_date'   => $request->departure_date,
                'number_of_room'   => $request->number_of_room,
                'number_of_people' => $request->number_of_people
            ]);
            

            $room = Room::where('id', $request->room)->first();

            return redirect()->route('visitor.reservation.success');
       } catch (Exception $ex) {
           dd($ex->getMessage());
           return redirect()->back()->with('error', 'Reservation break down');
       }
        
    }



    public function createSuccess ()
    {
        $reservation = Reservation::latest()->first();
        return view('visitor.reservation_message', compact('reservation'));
    }
}
