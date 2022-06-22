<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketDetail extends Model
{
    use HasFactory;
    protected $table = 'ticket_details';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function ticket(){
        return $this->belongsTo(Ticket::class , 'ticket_id','id');
    }
}
