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

@if( !empty( $page_video ) )
<section class="container">
    <div class="embed-responsive embed-responsive-16by9">
        {!! wp_oembed_get($page_video) !!}
    </div>
</section>
@endif