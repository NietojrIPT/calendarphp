<?php

namespace App\Http\Controllers;

use App\Services\CalendarService;
use Illuminate\Http\Request;

class CalendarController extends Controller {

    function getEventCalendarByIdEvent($idEvent) {
        return CalendarService::getEventbyId($idEvent);
    }

    function getEventCalendarAllEvent() {
        return CalendarService::getAllEvent();
    }

    function addEventCalendarDyDayTime() {
        return CalendarService::addEventByDayTime();
    }

    function addEventCalendarAllDay() {
        return CalendarService::addEventAllDay();
    }

    function updateEventCalendarByIdEvent($idEvent) {
        return CalendarService::updateEventByCode($idEvent);
    }

    function deleteEventCalendarByIdEvent($idEvent) {
        return CalendarService::deleteEventByCode($idEvent);
    }


}