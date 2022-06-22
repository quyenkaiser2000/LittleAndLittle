<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function eventDetail(){
        return $this->hasMany(EventDetail::class , 'event_id','id');
    }

}
