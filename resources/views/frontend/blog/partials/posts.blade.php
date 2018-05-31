@foreach ($posts as $i => $post)
    

        <div class="row" >
            <div class="col-lg-8" >
                <div class="post-preview">
                    @if ( $post->id == $lastPublishedPostId )
                        <label class="label label-default" >
                            {{ trans('messages.last_post') }}
                        </label>
                    @endif
                    <h2 class="post-title">
                        <a href="{{ $post->url($tag) }}">{{ $post->title }}</a>
                    </h2>
                    <p class="post-meta">
                        {{ $post->published_at->diffForHumans() }} 
                        &#183; 
                        {{ $post->readingTime() }} 
                        {{ trans('messages.reading_time') }}
                        <br>
                        @unless( $post->tags->isEmpty())
                            {!! implode(' ', $post->tagLinks()) !!}
                        @endunless
                    </p>
                    
                </div>
            </div>
            <div class="col-lg-4" >
                <img src="{{ asset($post->page_image) }}" class="img-thumbnail img-responsive">
            </div>
        </div>
        <div class="row" >
            <div class="col-lg-12" >
                <p class="">
                    {{ $post->subtitle }}
                </p>
                <p style="font-size: 13px">
                    <a href="{{ $post->url($tag) }}">
                        {{ trans('messages.read_more') }}...
                    </a>
                </p>
            </div>
        </div>
        

    <hr>
@endforeach