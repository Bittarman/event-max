@if($errors->any())
    <div class="errors">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('events.store') }}" method="POST">
    @csrf
    <div class="input-group">
        <label for="name">Name:</label>
        <input name="name" type="text" maxlength="255" />
    </div>
    <div class="input-group">
        <label for="date">Start Date:</label>
        <input type="date" name="start_date" />
    </div>
    <div class="input-group">
        <label for="date">End Date:</label>
        <input type="date" name="end_date" />
    </div>
    <input type="submit" value="Save" />
</form>
<a href="{{ route('events.index') }}">Back</a>