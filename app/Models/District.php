<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $guarded = ['id'];
    use HasFactory;


    public function drug()
    {
        return $this->hasMany(Drug::class);
    }
}
