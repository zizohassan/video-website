<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Latest Comments</h4>
                <p class="card-category">Here you can see the latest comments in website</p>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover">
                    <thead class="text-warning">
                    <tr><th>ID</th>
                        <th>Name</th>
                        <th>Video</th>
                        <th>comment</th>
                        <th>date</th>
                        <th>control</th>
                    </tr></thead>
                    <tbody>
                    @foreach($comments as $comment)
                        <tr>
                            <td>{{ $comment->id }}</td>
                            <td>
                                <a href="{{ route('users.edit' , ['id' => $comment->user->id]) }}">
                                    {{ $comment->user->name }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('videos.edit' , ['id' => $comment->video->id]) }}">
                                    {{ $comment->video->name }}
                                </a>
                            </td>
                            <td> {{ $comment->comment }}</td>
                            <td>{{ $comment->created_at }}</td>
                            <td>
                                <a href="{{ route('comment.delete' , ['id' => $comment->id]) }}">
                                    delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {!! $comments->links() !!}
            </div>
        </div>
    </div>
</div>