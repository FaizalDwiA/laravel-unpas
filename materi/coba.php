<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
    @error('title')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-3">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
    @error('slug')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <select name="category_id" class="form-select">
        @foreach ($Categories as @category)
        @if(old('category_id') == $category->id)
        <option value="{{ $category->id }}" selected>{{ @category->name }}</option>
        @else
        <option value="{{ $category->id }}">{{ @category->name }}</option>
        @endif
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label for="body" class="form-label">Body</label>
    @error('body')
    <p class="danger">{{ $message }}</p>
    @enderror
    <input type="hidden" id="body" name="body" value="{{ old('body') }}">
    <trix-editor input="body"></trix-editor>
</div>