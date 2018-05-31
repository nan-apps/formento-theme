<div class="container">
    @if(!empty(\Canvas\Models\Settings::disqus()))
        @include('canvas::frontend.blog.partials.disqus')
    @endif
    <div style="text-align: center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <hr>
                <p class="small">
                    {{trans('messages.powered_by')}} 
                    <a href="https://cnvs.io" target="_blank">Canvas</a>
                    
                    <br/>
                    
                    {{trans('messages.customized_by')}} 
                    <a href="http://nan-apps.com" target="_blank">Nan-Apps</a> &#183; 
                    <a href="https://github.com/nan-apps/formento-blog">
                        <i class="fa fa-github"></i> {{trans('messages.code')}}
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- scroll to top button -->
<span id="top-link-block" class="hidden hover-button">
    <a id="scroll-to-top" href="#top">
        <span class="fa-stack fa-lg">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-chevron-up fa-stack-1x fa-inverse"></i>
        </span>
    </a>
</span>

@if (!empty(\Canvas\Models\Settings::gaId()))
    @include('canvas::frontend.blog.partials.analytics')
@endif