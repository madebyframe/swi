@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
    @include('partials.hero')

    <section class="container content-section">

        <div class="row">
            <div class="col-12 col-md-6 text-center text-md-right">
                {!! the_content() !!}
            </div>

            <div class="col-12 col-md-6">
                {!! the_post_thumbnail('box-photo', ['class' => 'w-100 boxshadow h-auto']) !!}

            </div>
        </div>
    </section>

    @include('partials.gallery', ['gallery' => $gallery])

    @include('partials.content-columns', ['columns' => $content_columns])


    @include('partials.testimonials', ['testimonials' => $testimonials, 'i' => 'Footer'])

    @endwhile
@endsection
