@extends('layouts.app')
@section('content')
<h1>Songs</h1>
<a name="" id="" class="btn btn-primary position-fixed bottom-0 end-0 m-3" href="{{route('admin.songs.create')}}" role="button">New Song
    <i class="fa fa-plus-circle" aria-hidden="true"></i>
</a>

<div class="table-responsive">
    <table class="table table-striped
    table-hover	
    table-borderless
    table-primary
    align-middle">
        <thead class="table-light">
            <caption></caption>
            <tr>
                <th>ID</th>
                <th>Title </th>
                <th>Album</th>
                <th>Artist</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody class="table-group-divider">
            @forelse($song as $song)
            <tr class="table-primary">
                <td scope="row">{{$song->id}}</td>
                <td>{{$song->title}}</td>
                <td>{{$song->album}}</td>
                <td>{{$song->artist}}</td>
                <td>
                    <!-- show -->
                    <a href="{{route('admin.songs.show', $song->slug)}}">
                        <i class="fas fa-eye fa-sm fa-fw"></i>
                    </a>
                    <!-- edit -->
                    <a href="{{route('admin.songs.edit', $song->slug)}}">
                        <i class="fas fa-pencil fa-sm fa-fw"></i>
                    </a>
                    <!-- delete -->
                    <i class="fas fa-trash fa-sm fa-fw"></i>

                </td>

            </tr>


            @empty

            <tr>
                <td>No Songs</td>
            </tr>
            @endforelse
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>
@endsection