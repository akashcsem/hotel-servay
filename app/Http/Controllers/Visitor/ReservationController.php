<?php

namespace App\Http\Controllers\Visitor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Payment;
use App\Models\Admin\Reservation;
use App\Models\Admin\Room;
use App\User;
use Exception;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ReservationController extends Controller
{
    public function createReservation(Request $request)
    {
        
       try {
            if (Auth::check()) {
                $user = Auth::user();
                
                $request->validate([
                    'arrival_date'     => 'required',
                    'room'             => 'required',
                    'number_of_room'   => 'required|numeric|min:1|max:50',
                    'number_of_people' => 'required|numeric|min:1|max:100',
                ]);

                $reservation = Reservation::create([
                    'reserved_by'      => $user->id,
                    'room_id'          => $request->room,
                    'arrival_date'     => $request->arrival_date,
                    'departure_date'   => $request->departure_date,
                    'number_of_room'   => $request->number_of_room,
                    'number_of_people' => $request->number_of_people
                ]);
                $room = Room::where('id', $request->room)->first();
                if ($request->session()->has('room_id')){
                    $request->session()->forget('room_id');
                    $request->session()->forget('arrival_date');
                    $request->session()->forget('number_of_room');
                    $request->session()->forget('number_of_people');
                }
                return view('visitor.reservation_message', compact('room', 'reservation'));
            } else {
                $request->session()->put('room_id',          $request->room);
                $request->session()->put('arrival_date',     $request->arrival_date);
                $request->session()->put('departure_date',   $request->departure_date);
                $request->session()->put('number_of_room',   $request->number_of_room);
                $request->session()->put('number_of_people', $request->number_of_people); 
                $request->session()->save();

                return redirect()->route('visitor.warning');
            } 
        } catch (Exception $ex) {
            return $ex->getMessage();
           return redirect()->back()->with('error', 'Reservation break down');
        }
        
    }


    // redirect to reservation message page when a user reserved a room
    public function createSuccess ()
    {
        $reservation = Reservation::latest()->first();
        return view('visitor.reservation_message', compact('reservation'));
    }


    // redirect to create_reservation_payment page to load payment form 
    public function createPayment (Reservation $reservation)
    {
        return view('visitor.create_reservation_payment', compact('reservation'));
    } 


    public function storePayment (Request $request)
    {
        // dd($request->all());
        $request->validate([
            'amount' => 'required'
        ]);
        try {
            $payment = new Payment();
            $payment->reservation_id = $request->reservation_id;
            $payment->user_id = $request->reserved_by;
            $payment->amount = $request->amount;
            $payment->reference = $request->reference;
            $payment->created_by = 1;
            $payment->updated_by = 1;
            $payment->save();
        
            $reservation = Reservation::where('id', $request->reservation_id)->first();
            return view('visitor.resurvation_success_message', compact('reservation'));
        } catch (Exception $ex) {
            // dd($ex->getMessage());
            return redirect()->back()->with('error', 'Some error please check');
        }
    }

    public function reservationSuccess ()
    {
        return view('visitor.resurvation_success_message');
    }


    public function cancel(Reservation $reservation)
    {
        try {
            $reservation->delete();
            return redirect()->route('visitor.rooms.index');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function warning ()
    {
        return view('visitor.registration_warning');
    }

}
