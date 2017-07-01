@extends("layout")

@section("content")
    <div class="columns">
        <div class="column is-one-quarter"></div>
        <div class="column">
            <a href="/create" class="button is-success">Create new</a>
        </div>
    </div>

    @foreach ($notes as $note)
        <div class="columns">
	    <div class="column is-one-quarter">
		{{ $note->name }}
            </div>
            <div class="column">
		<pre>{{ $note->text }}</pre>
                <a href="/edit/{{ $note->id }}" class="button is-small">Edit</a>
            </div>
        </div>
    @endforeach
@endsection
