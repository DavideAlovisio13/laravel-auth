@extends('layouts.admin')
@section('title', 'Modifica Project')
@section('content')
    <section class="container bg-white mt-4">
        <h1>Edit</h1>
        <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label @error('name') is-invalid @enderror">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="titleHelp" name="name"
                    value="{{ $project->name }}" required>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="title" class="form-label @error('title') is-invalid @enderror">Titolo</label>
                <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title"
                    value="{{ $project->title }}" required>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control">
            {{$project->description}}
           </textarea>
            </div>
            <div class="mb-3">
                <label for="create_at" class="form-label">Creato il</label>
                <input type="datetime-local" class="form-control" id="datetime-local" name="datetime-local" value="{{ $project->create_at }}"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Modifica</button>
            <button type="reset" class="btn btn-danger">Annulla</button>
        </form>
    </section>
@endsection
