<x-layout>
     <div class="header">
           <h1>Update Note</h1>
           <a class="cancel" href="{{ route('note.index') }}">
               Cancel
           </a>
       </div>
    <hr>
    <form action="{{ route('note.update', $note) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $note->title }}">
        </div>
        <div class="form-group">
            <label for="body" class="form-label">Body</label>
            <textarea class="form-control" id="body" name="body" rows="3">{{ $note->body }}</textarea>
        </div>
       <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-3">
                {{ __('Update') }}
            </x-primary-button>
        </div>
    </form>
</x-layout>
