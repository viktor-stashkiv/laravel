@extends('layouts.main')

@section('content')
    <div>
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ old('title') }}">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" name="content" id="content" placeholder="Content">{{ old('content') }}</textarea>
                @error('content')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="category">Select category</label>
                <select class="form-select" aria-label="category" name="category_id" id="category">
                    @foreach($categories as $category)
                        <option
                            {{ old('category_id') ==  $category->id ? 'selected' : '' }}
                            value="{{ $category->id }}">{{ $category->title }}
                        </option>
                    @endforeach
                </select>

            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" name="image" class="form-control" id="image" placeholder="Image" value="{{ old('image') }}">
                @error('image')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="tags">Tags</label>
                <select multiple class="form-control" name="tags[]" id="tags">

                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach

                </select>
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
