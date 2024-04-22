<?php

namespace App\Http\Controllers;

use App\Http\Resources\EventResource;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        // $events = Event::all();
        return EventResource::collection(
            Event::all()
        );
        // dd('sdf');
    }
}
