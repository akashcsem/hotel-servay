<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Room extends Model
{
    
    protected $guarded = ['id'];
    
    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->fill([
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id,
            ]);
        });
        
        static::updating(function ($model) {
            $model->fill([
                'updated_by' => Auth::user()->id,
            ]);
        });
    }
}
