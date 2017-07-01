@extends("layout")

<div class="row">
    <div class="col-sm">
        <a href="/create" role="button" class="tertiary">Create</a>
    </div>
</div>

@foreach ($notes as $note)
    <div class="row">
        <div class="col-sm-2">
	    {{ $note->name }}
	</div>
        <div class="col-sm-10">
            <pre>{{ $note->text }}</pre>
        </div>
    </div>
@endforeach
