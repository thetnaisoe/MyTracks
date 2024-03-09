@extends('layouts.main')

@section('content')
    <div class="container py-3">
      <h2>New project</h2>
      <form>
        
        <div class="mb-3">
          <label class="form-label" for="name">Project name</label>
          <input type="text" class="form-control" id="name" placeholder="">
          <div class="invalid-feedback">
            Please choose a username.
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label" for="description">Description</label>
          <textarea class="form-control" id="description" rows="3"></textarea>
          <div class="invalid-feedback">
            Please choose a username.
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label" for="image_url">Background image URL</label>
          <input type="text" class="form-control" id="image_url" placeholder="">
          <div class="invalid-feedback">
            Please choose a username.
          </div>
        </div>

        <div class="mb-3">
          <button type="submit" class="btn btn-primary">Add new project</button>
        </div>

      </form>
    </div>
@endsection