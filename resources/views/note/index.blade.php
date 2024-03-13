<x-layout>
    <div class="header">
        <h1>Notes</h1>
        <div class="space-x-2.5 flex">
            <a href="{{ route('profile.edit') }}">{{ Auth::user()->name }}</a>
            <a href="{{ route('note.create') }}">
            <i class="bi bi-pencil-square"></i>
            </a>
             <form method="POST" action="{{ route('logout') }}" class="p-0 m-0">
                @csrf
                <a href="{{ route('logout') }}" class="text-yellow-500"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </a>
            </form>
        </div>
    </div>
    <hr>
    <div class="notes">
        @foreach($notes as $note)
            <div class="note">
                <div class="title">
                    <h4>{{ $note->title }}</h4>
                </div>
                <div class="content">
                    <p>{{ Str::words($note->body, 15) }}</p>
                </div>
                <div class="actions">
                    <a href="{{ route('note.show', $note) }}">
                        <i class="bi bi-eye"></i>
                    </a>
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
        @endforeach
    </div>
    <div class="px-5">
            {{ $notes->links() }}
    </div>
</x-layout>
