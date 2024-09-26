@foreach ($tickets as $ticket)
    <div>
        <h5>{{ $ticket->subject }}</h5>
        <p>{{ $ticket->description }}</p>
        <p>Status: {{ $ticket->status }}</p>
        @if ($ticket->response)
            <p>Response: {{ $ticket->response }}</p>
        @endif
    </div>
@endforeach
