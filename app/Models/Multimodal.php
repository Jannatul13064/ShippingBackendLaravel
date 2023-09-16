<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multimodal extends Model
{
    use HasFactory;

    public function bookedlist(){

        return $this->belongsTo(BookedList::class,'booking_id','id');
    }

}