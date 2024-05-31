@extends('layouts.admin')
@section('title', 'Projects')

@section('content')
    <section>
        @if (session()->has('message'))
            <div class="alert alert-success">{{ session()->get('message') }}</div>
        @endif
        <div class="d-flex justify-content-between align-items-center py-4">
            <h1>Projects</h1>
            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Crea nuovo post</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Create at</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->created_at }}</td>
                        <td>
                            <a href="{{ route('admin.projects.show', $project->slug) }}"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('admin.projects.edit', $project->slug) }}"><i class="fa-solid fa-pen"></i></a>
                            <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST"
                                class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button border-0 bg-transparent"
                                    data-item-title="{{ $project->title }}">
                                    <i class="fa-solid fa-trash"></i>
                                </button>

                            </form>


                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </section>
    @include('partials.modal-delete')
@endsection
