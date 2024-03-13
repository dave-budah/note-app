<x-layout>
    <div class="header">
        <h5>Created: {{ $note->created_at->diffForHumans() }}</h5>

        <a class="cancel" href="{{ route('note.index') }}">
            <i class="bi bi-house"></i>
        </a>
    </div>
    <hr>
    <div class="note detail">
        <div class="title">
            <h4>{{ $note->title }}</h4>
        </div>
        <div class="content">
            <p>{{ Str::words($note->body) }}</p>
        </div>
        <div class="actions">
            <a href="{{ route('note.edit', $note) }}">
                <i class="bi bi-pencil-square"></i>
            </a>
            <form action="{{ route('note.destroy', $note) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="delete" type="submit">
                    <i class="bi bi-trash"></i>
                </button>
            </form>
        </div>
    </div>
</x-layout>
