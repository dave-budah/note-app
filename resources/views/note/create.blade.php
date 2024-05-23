<x-layout>
      <div class="header">
           <h1>New Note</h1>
           <a class="cancel" href="{{ route('note.index') }}">
               Cancel
           </a>
       </div>
    <hr>

    <form action="{{ route('note.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="body" class="form-label">Note</label>
            <textarea class="form-control" id="body" name="body" rows="5">{{ old('body') }}</textarea>
        </div>
       <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-3">
                {{ __('Save') }}
            </x-primary-button>
        </div>
    </form>
</x-layout>
