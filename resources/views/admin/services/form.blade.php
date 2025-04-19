<div class="form-group">
    <label>Category</label>
    <select name="category_id" class="form-control" required>
        <option value="">Select Category</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id', $service->category_id ?? '') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label>Name</label>
    <input type="text" name="name" value="{{ old('name', $service->name ?? '') }}" class="form-control" required>
</div>

<div class="form-group">
    <label>Description</label>
    <textarea name="description" class="form-control">{{ old('description', $service->description ?? '') }}</textarea>
</div>

<div class="form-group">
    <label>Price</label>
    <input type="number" step="0.01" name="price" value="{{ old('price', $service->price ?? '') }}" class="form-control" required>
</div>

<div class="form-group">
    <label>Image</label>
    <input type="file" name="image" class="form-control">
    @if(isset($service) && $service->image)
        <img src="{{ asset('storage/' . $service->image) }}" width="100" class="mt-2">
    @endif
</div>
