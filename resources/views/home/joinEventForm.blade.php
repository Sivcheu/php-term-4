<form action="/test" method="POST">
    @csrf
    <input type="text" name="event_id" value={{$event->id}}>
    <button type="submit" class="btn btn-outline-success">
        join now
    </button>
</form>
