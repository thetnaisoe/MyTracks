@extends('layouts.main')

@section('content')
    <div class="container py-3">
      <h2>Edit project</h2>
      <form action="" method="post">
        @csrf
        <div class="mb-3">
          <label class="form-label" for="name">Project name</label>
          <input value="{{ old('name', $project->name )}}" name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="">
          @error('name')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label class="form-label" for="description">Description</label>
          <textarea  name="description" class="form-control @error('description') is-invalid @enderror" id="description" rows="3">{{ old('description', $project->description )}}</textarea>
          @error('description')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label class="form-label" for="image_url">Background image URL</label>
          <input value="{{ old('image_url', $project->image_url )}}" name="image_url" type="text" class="form-control @error('image_url') is-invalid @enderror" id="image_url" placeholder="">
          @error('image_url')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <button type="submit" class="btn btn-primary">Update project</button>
        </div>

      </form>
    </div>
@endsection