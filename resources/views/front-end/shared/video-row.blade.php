<div class="row">
    @foreach($videos as $video)
        <div class="col-lg-4">
            @include('front-end.shared.video-card')
        </div>
    @endforeach
</div>
<div class="row">
    <div class="col-md-12">
        {{ $videos->links() }}
    </div>
</div>