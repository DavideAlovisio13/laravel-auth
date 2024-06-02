@extends('layouts.admin')
@section('title', 'Projects')

@section('content')
    <section id="projects" class="container-fluid">
        @if (session()->has('message'))
            <div class="alert alert-success">{{ session()->get('message') }}</div>
        @endif
        <div class="d-flex justify-content-between align-items-center py-4">
            <h1 class="text-danger">Projects</h1>
            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Crea nuovo post</a>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-danger">Id</th>
                                    <th scope="col" class="text-danger">Name</th>
                                    <th scope="col" class="text-danger">Title</th>
                                    <th scope="col" class="text-danger">Description</th>
                                    <th scope="col" class="text-danger">Create at</th>
                                    <th scope="col" class="text-danger">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach ($projects->take(4) as $project)
                                    <tr>
                                        <td>{{ $project->id }}</td>
                                        <td>{{ $project->name }}</td>
                                        <td>{{ $project->title }}</td>
                                        <td>{{ $project->description }}</td>
                                        <td>{{ $project->created_at }}</td>
                                        <td class="d-flex flex-column justify-content-center align-items-center">
                                            <a href="{{ route('admin.projects.show', $project->slug) }}"><i
                                                    class="fa-solid text-danger fa-eye"></i></a>
                                            <a href="{{ route('admin.projects.edit', $project->slug) }}"><i
                                                    class="fa-solid text-danger fa-pen"></i></a>
                                            <form action="{{ route('admin.projects.destroy', $project->slug) }}"
                                                method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="delete-button border-0 bg-transparent"
                                                    data-item-title="{{ $project->title }}">
                                                    <i class="fa-solid text-danger fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="container text-center d-flex flex-column">
                        <div class="row">
                            <div class="col p-2">
                                <img src="/images/404-det.jpg" class="card-img-top rounded-circle p-1"
                                    style="width: 300px height: 300px" alt="logo-profile">
                            </div>
                            <div class="col align-items-center justify-content-center d-flex">
                                <h2 class="text-white fs-1">{{ Auth::user()->name }}</h2>
                            </div>
                        </div>
                        <div class="row pt-4 fs-1 text-white">
                            <div
                                class="col social_card my-4 d-flex flex-column justify-content-center align-content-center">
                                <a href=""><i class="fa-brands fa-github fa-2xl text-danger"></i></a>
                                <h4 class="pt-3">GitHub</h4>
                            </div>
                            <div
                                class="col social_card my-4 d-flex flex-column justify-content-center align-content-center">
                                <a href=""><i class="fa-brands fa-facebook fa-2xl text-danger"></i></a>
                                <h4 class="pt-3">Facebook</h4>
                            </div>
                            <div
                                class="col social_card my-4 d-flex flex-column justify-content-center align-content-center">
                                <a href=""><i class="fa-brands fa-instagram fa-2xl text-danger"></i></a>
                                <h4 class="pt-3">Instagram</h4>
                            </div>
                            <div
                                class="col social_card my-4 d-flex flex-column justify-content-center align-content-center">
                                <a href=""><i class="fa-brands fa-x-twitter fa-2xl text-danger"></i></a>
                                <h4 class="pt-3">Twitter</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="card text-bg-danger mb-3" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Danger card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card text-bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Success card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card text-bg-warning mb-3" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Warning card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.modal-delete')
@endsection
