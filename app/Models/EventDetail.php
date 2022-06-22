<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventDetail extends Model
{
    use HasFactory;
    protected $table = 'event_details';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function event(){
        return $this->belongsTo(Event::class , 'event_id','id');
    }
}
