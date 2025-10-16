<?php
namespace App\Http\Controllers;

use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('date')->get();
        return view('home', compact('events'));
    }
}