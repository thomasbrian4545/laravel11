<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            New post
        </h5>
        <form wire:submit='save'>
            <div class="mb-4">
                <label for="title" class="form-label">Title</label>
                <input type="text" wire:model='form.title' class="form-control" name="title" id="title">
                @error('form.title')
                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-4">
                <label for="body" class="form-label">Body</label>
                <textarea wire:model="form.body" class="form-control" name="body" id="body" rows="3"></textarea>
                @error('form.body')
                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                @enderror
            </div>
            <button class="btn btn-primary">
                Save
            </button>
        </form>
    </div>
</div>
