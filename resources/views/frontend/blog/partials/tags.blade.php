<p class="text-center" >
	@if(isset($returnToIndex))
		<a href="/">#Todxs</a>&nbsp;
	@endif
	@foreach ($tags as $tag)
		{!! $tag->getLink() !!}
	@endforeach
</p>
<hr />
