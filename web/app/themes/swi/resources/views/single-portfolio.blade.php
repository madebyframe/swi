@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')

<section class="container">
    <div class="row">
        <div class="col-12 col-md-6 text-right">
            <h6 class="pb-0">{!! the_title() !!}</h6>
            @if( !empty($location) )
            <div class="pb-3">
                {!! $location !!}<br />
            </div>
            @endif

            {!! the_content() !!}

            @if( !empty( $services ) )
                <h6 class="pb-0 pt-3">Services Provided</h6>
                @foreach($services as $term)
                        {!! $term->name !!}<br />
                @endforeach
            @endif
        </div>

        <div class="col-12 col-md-6">
            {!! the_post_thumbnail('square', ['class' => 'w-100 h-auto']) !!}

        </div>

    </div>
</section>

<section class="container portfolio-gallery magnific-gallery">
    @foreach( $pphotos as $photo )
        <div class="row">
            @foreach($photo['photo'] as $ph )
                <div class="col pb-4">
                    <a class="d-block" href="{{ wp_get_attachment_image_url($ph, 'full') }}">
                    {!! wp_get_attachment_image($ph, $photo['orientation'], false, ['class' => $photo['orientation'] . ' w-100 h-auto']) !!}
                    </a>
                </div>
            @endforeach
        </div>
    @endforeach
</section>

      @include('partials.gallery', ['gallery' => $pgallery])

      @include('partials.testimonials', ['testimonials' => $testimonials, 'i' => 'Footer'])

  @endwhile
@endsection
