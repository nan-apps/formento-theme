<div class="post-preview">
    <h2 class="post-title">
        <a href="{{ $post->url($tag) }}">{{ $post->title }}</a>
    </h2>
    <p class="post-meta">
        {{ $post->published_at->diffForHumans() }} &#183; {{ $post->readingTime() }} 
        {{ trans('messages.reading_time') }}
        <br>
        @unless( $post->tags->isEmpty())
            {!! implode(' ', $post->tagLinks()) !!}
        @endunless
    </p>
    <p class="postSubtitle">
        {{ str_limit($post->subtitle, config('blog.frontend_trim_width')) }}
    </p>
    <p style="font-size: 13px">
        <a href="{{ $post->url($tag) }}">
            {{ trans('messages.read_more') }}...
        </a>
    </p>
</div>