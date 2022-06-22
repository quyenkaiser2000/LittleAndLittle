<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventDetail;
class EventController extends Controller
{
    public function index(){
        $events = Event::all();
        return view('front.event',compact('events'));
    }
    public function detail($id){
        $event = EventDetail::where('event_id',$id)->get();
        return view('front.event_detail',compact('event'));
        
    }
}
