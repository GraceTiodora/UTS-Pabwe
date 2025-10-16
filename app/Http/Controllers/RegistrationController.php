<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Participant;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create(Request $request)
    {
        $events = Event::orderBy('date')->get();
        $selected = $request->query('event_id'); // preselect
        return view('register', compact('events','selected'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|min:3',
            'email'   => 'required|email',
            'event_id'=> 'required|exists:events,id',
        ]);

        Participant::create($data);

        return redirect()->route('participants.index')
            ->with('success', 'Pendaftaran berhasil!');
    }
}
