<?php
namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\Event;
use Barryvdh\DomPDF\Facade\Pdf;

class ParticipantController extends Controller
{
    public function index()
    {
        $participants = Participant::with('event')->latest()->get();
        return view('participants', compact('participants'));
    }

    public function destroy(Participant $participant)
    {
        $participant->delete();
        return back()->with('success','Peserta dihapus.');
    }

    public function exportPdf()
    {
        $participants = Participant::with('event')->orderBy('created_at')->get();
        $pdf = Pdf::loadView('participants_pdf', compact('participants'))
                  ->setPaper('a4','portrait');
        return $pdf->download('peserta_acara.pdf');
    }
}

