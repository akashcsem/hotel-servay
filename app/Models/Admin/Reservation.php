<?php

namespace App\Models\Admin;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = ['id'];


    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function reserved_user()
    {
        return $this->belongsTo(User::class, 'reserved_by', 'id');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
