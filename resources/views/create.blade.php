@extends("layout")

@section("content")
    <div class="columns">
        <div class="column">
	    <form action="/{{ isset($note) ? 'edit' : 'create' }}" method="post">
                @if (isset($note))
                    <input type="hidden" name="id" value="{{ $note->id }}">
		@endif
	        <div class="field">
                    <p class="control">
                        <input class="input" type="text" value="{{ $note->name or '' }}" name="name" placeholder="Name">
                    </p>
                </div>
                <div class="field">
                    <p class="control">
                        <textarea class="textarea" placeholder="Text" rows="4" cols="50" name="text">{{ $note->text or '' }}</textarea>
                </div>
                <div class="field">
                    <p class="control">
                        <input type="submit" class="button is-primary" value="Submit">
                    </p>
                </div>
            </form>
        </div>
    </div>
@endsection
