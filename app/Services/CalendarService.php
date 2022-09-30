<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\GoogleCalendar\Event;

class CalendarService {

    public static function getEventbyId($idEvent){
        Event::find($idEvent);
    }

    public static function getAllEvent(){
        $events = Event::get();
    }

    public static function getEventFirst(){
        $eventId = Event::get()->first()->id;
    }


    public static function addEventByDayTime(){
        $event = new Event;

        $event->name = 'A new event';
        $event->description = 'Event description';
        $event->startDateTime = Carbon\Carbon::now();
        $event->endDateTime = Carbon\Carbon::now()->addHour();
        $event->addAttendee([
            'email' => 'john@example.com',
            'name' => 'John Doe',
            'comment' => 'Lorum ipsum',
        ]);
        $event->addAttendee(['email' => 'anotherEmail@gmail.com']);

        $event->save();
    }


    public static function addEventSatic(){
        Event::create([
            'name' => 'A new event Static',
            'startDateTime' => Carbon\Carbon::now(),
            'endDateTime' => Carbon\Carbon::now()->addHour(),
         ]);
    }

    public static function addEventAllDay(){
        $event = new Event;

        $event->name = 'A new full day event';
        $event->description = 'Event description';
        $event->startDate = Carbon\Carbon::now();
        $event->endDate = Carbon\Carbon::now()->addDay();
        
        $event->save();
    }

    public static function deleteEventByCode($idEvent){
        $event = Event::find($idEvent);

        $event->delete();
    }


    public static function updateEvent(){
        $firstEvent = $events->first();
        $firstEvent->name = 'updated name';
        $firstEvent->save();

        $firstEvent->update(['name' => 'updated again']);
    }

    public static function updateEventByCode($idEvent){
        $event = Event::find($idEvent);

        $event->name = 'My updated title';
        $event->save();

    }



}

