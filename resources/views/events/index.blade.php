<a href="{{ route('events.create') }}">New Event</a>
<table>
  <thead>
  </thead>
  <tbody>
      @forelse ($events as $event)
      <tr>
          <td>{{ $event->id }}</td>
          <td>{{ $event->name }}</td>
          <td>{{ $event->start_date?->format('d/m/Y') }} - {{ $event->end_date?->format('d/m/Y') }}</td>
          <td>
              <form method="POST" action="{{ route('events.destroy', ['event' => $event]) }}">
                  @csrf
                  @method('DELETE')
                  <input type="submit" value="delete" />
              </form>
            </td>
      </tr>
      @empty
      <tr>
          <td>No events found</td>
      @endforelse
  </tbody>
</table>

<form method="POST" action="/search">
<label>search <input name="q" /></label>
<input type="submit" value="Search" />
</form>