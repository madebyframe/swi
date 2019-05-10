@if( $hero_background )
    <section class="hero @if(empty($hero_buttons))d-flex @endif"
             @if(!$hero_video)
             style="background-image: {{ $hero_background }}"
             @else
             style="background: transparent {{ $hero_background }} 50% 50% / cover no-repeat; z-index: -1"
            @endif
    >
        <h1 class="mx-auto my-auto">{!! $hero !!}
        <span>{{ $hero_teaser }}</span>
        </h1>
        {{--<h3 class="mx-auto w-100 d-block">{{ $hero_teaser }}</h3>--}}
        {{--@include('partials.buttons', ['buttons' => $hero_buttons])--}}
        @if( $hero_video )
            @include('partials.video', [
              'video' => $hero_video
            ])
        @endif
    </section>
@endif
