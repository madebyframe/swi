<div class="page-header container-fluid">
  <h1 id="page-title-h1" class="d-inline-block">{!! App::title() !!}</h1>
  @if( $subtitle )
    <h2 id="page-subtitle-h2" class="d-inline-block">{!! $subtitle !!}</h2>
    <script type="text/javascript">
      // jQuery(document).ready( function(){
      //     jQuery('#page-subtitle-h2').width( jQuery('#page-title-h1').width() + 'px' ).fitText();
      //
      // });
      {{--

        jQuery(document).ready(function () {
            var h1          = jQuery('#page-title-h1'),
                h2          = jQuery('#page-subtitle-h2'),
                cont_width    = h1.width(),
                txt           = h2.html(),
                one_line      = jQuery('<span class="stretch_it">' + txt + '</span>'),
                nb_char       = h2.text().length,
                spacing       = cont_width/nb_char,
                txt_width;

            h2.html(one_line);
            txt_width = one_line.width();

            if (txt_width < cont_width){
                var  char_width     = txt_width/nb_char,
                    ltr_spacing    = spacing - char_width + (spacing - char_width)/nb_char ;

                one_line.css({'letter-spacing': ltr_spacing});
            } else {
                one_line.contents().unwrap();
                h2.addClass('justify');
            }
        });
    --}}
    </script>
  @endif
</div>
