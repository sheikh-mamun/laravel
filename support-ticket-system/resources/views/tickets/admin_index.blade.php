@foreach ($tickets as $ticket)
    <div>
        <h5>{{ $ticket->subject }}</h5>
        <p>{{ $ticket->description }}</p>
        <p>Status: {{ $ticket->status }}</p>
        <form action="{{ route('tickets.respond', $ticket) }}" method="POST">
            @csrf
            <textarea name="response" required class="form-control"></textarea>
            <button type="submit" class="btn btn-success">Respond</button>
        </form>
        <form action="{{ route('tickets.close', $ticket) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Close Ticket</button>
        </form>
    </div>
@endforeach
