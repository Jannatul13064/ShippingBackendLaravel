<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookedList extends Model
{
    use HasFactory;



    public function multimodal(){

        return $this->hasMany(Multimodal::class,'booking_id','id');
    }

}
