<header class="banner">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-6 offset-sm-6">
        @if( $custom_logo = get_theme_mod('custom_logo') )
          <a class="" href="{{ home_url('/') }}"><img src="{!! esc_url( wp_get_attachment_image_src( $custom_logo )[0] ) !!}" class="w-100 h-auto" /></a>
        @else
          <a class="brand ml-auto" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
        @endif

      </div>

    </div>

  </div>
</header>
