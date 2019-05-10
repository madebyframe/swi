@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
    @include('partials.hero-home')

    <section class="container">

        <div class="row">
            <div class="col-12 col-md-6 col-with-divider d-flex align-items-center">
                {!! the_content() !!}
            </div>

            <div class="col-12 col-md-6 menu home-menu">
                @if (has_nav_menu('primary_navigation'))
                    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
                @endif
            </div>

        </div>
    </section>


    @endwhile
@endsection
