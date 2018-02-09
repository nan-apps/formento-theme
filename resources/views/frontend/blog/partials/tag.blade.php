@if (isset($tag->title))
    <p class="tag-link"><i class="fa fa-fw fa-tag"></i> {{ trans('messages.tagged_in') }} <a href="#">{{ $tag->title or '' }}</a></p>
    <p class="tag-subtitle">" {{ $tag->subtitle }} "</p>
    <hr style="width: 60%">
@endif