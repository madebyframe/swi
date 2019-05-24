<header class="banner">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-4 col-xl-6 order-lg-12">
        @if( $custom_logo = get_theme_mod('custom_logo') )
          <a class="" href="{{ home_url('/') }}"><img src="{!! esc_url( wp_get_attachment_image_src( $custom_logo )[0] ) !!}" class="w-100 h-auto" /></a>
        @else
          <a class="brand ml-auto" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
        @endif

      </div>

      <div class="col-12 col-lg-8 col-xl-6 order-lg-1  d-flex">

        <nav class="nav-primary align-self-center">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
          @endif
        </nav>
      </div>
    </div>

  </div>
</header>
