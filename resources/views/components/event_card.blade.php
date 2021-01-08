<div class="d-flex justify-content-center">
    <div class="card text-center shadow mt-2 mb-2" style="width: 1160px; height: fit-content">
        <div class="card-header">
            Staring date: {{$event->start}}
        </div>
        <div class="card-body">
            <h5>
                {{$event->title}}
            </h5>
            <p class="card-text cs-p">
                {{$event->description}}
            </p>
            <img src="{{asset('image/'.$event->image)}}" alt="" class="event-image">
        </div>

        <div class="text-center mb-3">
            <a href="/volForm/{{$event->id}}" class="btn btn-primary">Join Volunteer</a>
            <form action="/test" method="POST" class="d-inline">
                @csrf
                <input type="hidden" name="event_id" value={{$event->id}}>
                <button type="submit" class="btn btn-success">
                    Join Event
                </button>
            </form>
        </div>
        @if (session('user') && $event->isJoin(session('user')->id))
            <small class="text-muted">(You already joined!)</small>
        @endif
        <div class="card-footer text-muted">
            Ending date: {{$event->end}}
        </div>
    </div>
</div>
