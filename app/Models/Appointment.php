<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function doctor()
    {
        return $this->belongsTo(User::class, 'd_id', 'id');
    }


    public function patient()
    {
        return $this->belongsTo(User::class, 'p_id', 'id');
    }

}
