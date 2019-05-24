<footer class="content-info">
  <div class="container">
    <div class="row">
      <div class="col-6 col-md-3 @if( is_front_page() )d-none d-md-flex @endif">
        <h6>Find Out More</h6>
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </div>
      <div class="col-6 col-md-4 @if( is_front_page() )offset-3 offset-md-0 text-center text-md-left @endif">
        <h6>Visit Our Showroom</h6>
        @php dynamic_sidebar('sidebar-footer') @endphp
      </div>
      <div class="col-12 col-md-4 offset-md-1 contacts @if( is_front_page() )d-none d-md-block @endif text-center text-md-left">
        <h6>Follow Us</h6>

        <div class="social-icons">

          <a href="#" class="social d-inline-block"><i class="fab fa-facebook-square"></i></a>
        </div>

        <h6>Write Us</h6>
        <p>We would love to hear from you! Please share your stories with us, or if you have any quesitons don’t hesitate to ask.</p>
        <p>
          <a href="mailto:hello@swi.design?subject=Website+Inquiry" class="write-us">hello@swi.design</a>
        </p>
      </div>
    </div>

  </div>
</footer>
