<div id="testimonial{{ $i }}Indicators" class="testimonials carousel slide" data-ride="carousel">
    @if( count($testimonials) > 1 )
    <ol class="carousel-indicators">
        @foreach($testimonials as $t => $testimonial)
        <li data-target="#testimonial{{ $i }}Indicators" data-slide-to="{{ $t }}" @if($t == 0) class="active" @endif></li>
        @endforeach
    </ol>
    @endif
    <div class="carousel-inner">
        @foreach($testimonials as $t => $testimonial)
        <div class="carousel-item @if( $t == 0 ) active @endif"
            style="background: linear-gradient( rgba(255,255,255,0.4), rgba(255,255,255,0.4) ), url({{ get_the_post_thumbnail_url($testimonial->ID, 'full') }}"
        >
            <div class="container">
                <div class="row">
                    <div class="col-10 offset-1">
                        <div class="testimony text-center">
                            {!! apply_filters('the_content', $testimonial->post_content) !!}
                        </div>
                        <div class="credit text-center">
                            {!! get_the_title($testimonial->ID) !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{--
    <a class="carousel-control-prev" href="#testimonial{{ $i }}Indicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#testimonial{{ $i }}Indicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    --}}
</div>