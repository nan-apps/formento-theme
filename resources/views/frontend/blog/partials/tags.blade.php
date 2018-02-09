<p class="text-center" >
	@foreach ($tags as $tag)
		{!! $tag->getLink() !!}
	@endforeach
</p>
<hr />
