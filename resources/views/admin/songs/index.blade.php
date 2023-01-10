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
                    <i class="fas fa-eye fa-sm fa-fw"></i>
                    <i class="fas fa-pencil fa-sm fa-fw"></i>
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