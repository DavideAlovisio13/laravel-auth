@extends('layouts.admin')

@section('content')
{{-- <div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">{{__('ID')}}</th>
            <th scope="col">{{__('Name')}}</th>
            <th scope="col">{{__('Title')}}</th>
            <th scope="col">{{__('Description')}}</th>
            <th scope="col">{{__('Create at')}}</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <th scope="row">{{{ $project->id }}}</th>
                <td>{{{ $project->name }}}</td>
                <td>{{{ $project->title }}}</td>
                <td>{{{ $project->description }}}</td>
                <td>{{{ $project->created_at }}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div> --}}
@endsection
