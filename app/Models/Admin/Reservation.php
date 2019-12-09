<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = ['id'];


    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
