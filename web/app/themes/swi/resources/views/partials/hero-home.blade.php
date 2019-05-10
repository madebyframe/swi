@if( $hero_background )
    <section class="hero hero-home d-flex"
             @if(!$hero_video)
             style="background-image: {{ $hero_background }}"
             @else
             style="background: transparent {{ $hero_background }} 50% 50% / cover no-repeat; z-index: -1"
            @endif
    >
        <h1 class="text-center text-md-left my-auto">{!! $hero !!}</h1>

        @if( $hero_video )
            @include('partials.video', [
              'video' => $hero_video
            ])
        @endif
    </section>
@endif
