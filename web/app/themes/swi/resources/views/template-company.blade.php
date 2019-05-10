{{--
  Template Name: Company Page Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.hero')

    @include('partials.content-main')

    @include('partials.staff', ['staff' => $staff])

    @include('partials.content-columns', ['columns' => $content_columns])

    @include('partials.gallery', ['gallery' => $gallery])

    @include('partials.testimonials', ['testimonials' => $testimonials, 'i' => 'Footer'])

  @endwhile
@endsection
