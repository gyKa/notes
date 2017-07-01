@foreach ($notes as $note)
    {{ $note->name }}
    <pre>{{ $note->text }}</pre>
@endforeach
