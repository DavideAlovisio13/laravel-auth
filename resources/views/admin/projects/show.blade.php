@extends('layouts.admin')
@section('title', $project->title)

@section('content')
<section>
    <h1>{{$project->name}}</h1>
    <h2>{{$project->title}}</h2>
    <p>{{$project->description}}</p>
    <p>{{$project->created_at}}</p>
</section>
@endsection