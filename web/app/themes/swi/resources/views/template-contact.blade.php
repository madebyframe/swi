{{--
  Template Name: Contact Page Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')

<section class="container">

    <div class="row">
        <div class="col-12 col-md-5 offset-md-1 col-with-divider">
            {!! the_content() !!}
        </div>

        <div class="col-12 col-md-5 contacts">

@foreach( $contacts as $contact )

    <h4>{{ $contact['label'] }}</h4>
    @if( !empty($contact['link']) )
    <a href="{{ $contact['link'] }}" target="_blank" class="contact contact-{{ $contact['contact'] }}">
    @endif
        {{ $contact['info'] }}
    @if( !empty($contact['link']) )
    </a>
    @endif
@endforeach

@foreach( $address as $label => $addy )

    <h4>{{ $label }}</h4>
    {!! implode( ', <br class="d-md-none" />', $addy ) !!}

    @endforeach

@foreach( $hours as $label => $hour )
    <h4>{{ $label }}</h4>
    {!! nl2br($hour) !!}
@endforeach

        </div>

    </div>
</section>
<section class="container pt-0">
    <div class="row">
        <div class="col-12 col-sm-10 offset-sm-1">

        {!!  Ninja_Forms()->display(3) !!}
        </div>
    </div>
</section>


      @include('partials.map')

      @include('partials.testimonials', ['testimonials' => $testimonials, 'i' => 'Footer'])

  @endwhile
@endsection
