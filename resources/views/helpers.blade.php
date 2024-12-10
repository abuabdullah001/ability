@if($events && $events->count() > 0)
    <label for="event_id">Event</label>
    <select name="event_id" id="event_id" class="form-control" required>
        <option value="">Select Event</option>
        @foreach ($events as $event)
            <option value="{{ $event->id }}">{{ $event->name }}</option>
        @endforeach
    </select>
@endif

@if($projects && $projects->count() > 0)
    <label for="projects_id">Project</label>
    <select name="projects_id" id="projects_id" class="form-control" required>
        <option value="">Select Project</option>
        @foreach ($projects as $event)
            <option value="{{ $event->id }}">{{ $event->name }}</option>
        @endforeach
    </select>
@endif

@if($champaign && $champaign->count() > 0)
    <label for="champaign_id">Champaign</label>
    <select name="champaign_id" id="champaign_id" class="form-control" required>
        <option value="">Select Champaign</option>
        @foreach ($champaign as $event)
            <option value="{{ $event->id }}">{{ $event->name }}</option>
        @endforeach
    </select>
@endif
