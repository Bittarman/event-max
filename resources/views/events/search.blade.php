
<table>
  <thead>
  </thead>
  <tbody>
      @forelse ($events as $event)
      <tr>
          <td>{{ $event->id }}</td>
          <td>{{ $event->name }}</td>
          <td>{{ $event->start_date?->format('d/m/Y') }} - {{ $event->end_date?->format('d/m/Y') }}</td>
      </tr>
      @empty
      <tr>
          <td>No results found</td>
      @endforelse
  </tbody>
</table>

<form method="POST" action="/search">
<label>search <input name="q" /></label>
<input type="submit" value="Search" />
</form>

<a href="{{ route('events.index') }}">Back</a>