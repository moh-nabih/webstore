<div class="container mx-auto p-4">
    <h1>{{ isset($item) ? 'Edit' : 'Add a New'}} Item</h1>

    <form method="POST" action="{{ isset($item) ? route('tasks.update', $item->id) : route('tasks.store') }}">
        @csrf
        @if(isset($item))
            @method('PUT')
        @endif
    
        <div class="mb-3">
            <label for="title" class="form-label">Item Name</label>
            <input type="text" class="form-control" name="title" value="{{ $item->name ?? '' }}" required>
        </div>
    
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description">{{ $item->description ?? '' }}</textarea>
        </div>
    
        <div class="mb-3">
            <label for="description" class="form-label">Price</label>
            <textarea class="form-control" name="description">{{ $item->price ?? '' }}</textarea>
        </div>
    
        <div class="mb-3">
            <label for="description" class="form-label">Stock</label>
            <textarea class="form-control" name="description">{{ $item->stock ?? '' }}</textarea>
        </div>
    
        <div class="mb-3">
            <label for="description" class="form-label">Image</label>
            <textarea class="form-control" name="description">{{ $item->image ?? '' }}</textarea>
        </div>
    
        <button type="submit" class="btn btn-primary mx-2">Save</button>
    </form>

    <a href="{{ route('items.index') }}" class="btn btn-warning m-2">← Back to items</a>
</div>