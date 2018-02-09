@foreach ($posts as $i => $post)
    @if ($i == 0)

        <div class="row" >
            <div class="col-lg-8" >
                @include('canvas::frontend.blog.partials.post-preview')
            </div>
            <div class="col-lg-4" >
                <img src="{{ asset($post->page_image) }}" class="img-thumbnail img-responsive">
            </div>
            
        </div>

    @else
        @include('canvas::frontend.blog.partials.post-preview')
    @endif
    <hr>
@endforeach