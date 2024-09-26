<form action="{{ route('tickets.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" name="subject" required class="form-control">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" required class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit Ticket</button>
</form>
