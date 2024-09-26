<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TicketController extends Controller
{
    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $ticket = Ticket::create([
            'user_id' => auth()->id(),
            'subject' => $request->subject,
            'description' => $request->description,
        ]);

        // Send email to admin
        Mail::to('admin@example.com')->send(new TicketOpened($ticket));

        return redirect()->route('tickets.index')->with('success', 'Ticket created successfully.');
    }

    public function index()
    {
        $tickets = Ticket::where('user_id', auth()->id())->get();
        return view('tickets.index', compact('tickets'));
    }

    public function adminIndex()
    {
        $tickets = Ticket::all();
        return view('tickets.admin_index', compact('tickets'));
    }

    public function respond(Request $request, Ticket $ticket)
    {
        $request->validate(['response' => 'required|string']);

        $ticket->update(['response' => $request->response]);

        return redirect()->back()->with('success', 'Response sent to customer.');
    }

    public function close(Ticket $ticket)
    {
        $ticket->update(['status' => 'closed']);

        // Send email to customer
        Mail::to($ticket->user->email)->send(new TicketClosed($ticket));

        return redirect()->back()->with('success', 'Ticket closed successfully.');
    }
}
