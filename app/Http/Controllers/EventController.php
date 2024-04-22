<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Resources\EventResource;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class EventController extends Controller
{
    public function index(){
        return EventResource::collection(
            Event::all()
        );
    }

    public function store(StoreEventRequest $request)
    {
        $event = Event::create($request->validated());
        $event['event_date'] = Carbon::now();
        return new EventResource($event);
    }

    public function show(Event $event)
    {
        return new EventResource($event);
    }


    public function update(Event $event, StoreEventRequest $request)
    {
        $event->update($request->validated());
        return new EventResource($event);
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return response(null, 204);
    }


}
