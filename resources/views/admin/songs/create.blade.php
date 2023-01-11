@extends('layouts.app')
@section('content')


<h1>Add a new Song</h1>
<form action="{{route('admin.songs.store')}}" method="post">
    @csrf

    <div class="m-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Title">
        <small id="titleHelper " class="text-muted"> Add a title for the current song, max 100 characters</small>
    </div>
    <div class="m-3">
        <label for="artist" class="form-label">Artist</label>
        <input type="text" name="artist" id="title" class="form-control" placeholder="Artist">
        <small id="titleHelper " class="text-muted"> Add the main artist
        </small>

    </div>
    <div class="m-3">
        <label for="album" class="form-label">Album</label>
        <input type="text" name="album" id="album" class="form-control" placeholder="Album">
        <small id="titleHelper " class="text-muted"> Add the name of the Album</small>
    </div>
    <button type="submit" class=" m-3 btn btn-primary">Create</button>
</form>
@endsection