<video autoplay loop muted class="bgvideo"
       @if(!empty($poster)) poster="{{ wp_get_attachment_image_url(get_post_field('heroBackground'), 'full') }}" @endif>

    @if(is_array($video['mp4']) && !empty($video['mp4'][0]))
    <source src="{{ wp_get_attachment_url($video['mp4'][0]) }}" type="video/mp4">
    @endif
    @if(is_array($video['webm']) && !empty($video['webm'][0]))
    <source src="{{ wp_get_attachment_url($video['webm'][0]) }}" type="video/webm">
    @endif
</video>
