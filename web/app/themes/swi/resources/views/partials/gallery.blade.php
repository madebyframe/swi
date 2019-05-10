@if(!empty($gallery) || !empty($gallery2))
<section class="py-0 px-0">
<div class="magnific-gallery">
     <div class="row no-gutters">
    @foreach($gallery as $gid)
        <div class="col-6 col-sm-4 col-md">
            <a class="d-block" href="{{ wp_get_attachment_image_url($gid, 'full') }}">

                {!! wp_get_attachment_image($gid, 'gallery-thumb', false, ['class' => 'w-100 h-auto']) !!}
            </a>
        </div>
    @endforeach

    @if($gallery2)
    </div>
    <div class="row no-gutters">
        @foreach($gallery2 as $gid)
            <div class="col-6 col-sm-4 col-md">
                <a class="d-block" href="{{ wp_get_attachment_image_url($gid, 'full') }}">

                    {!! wp_get_attachment_image($gid, 'gallery-thumb', false, ['class' => 'w-100 h-auto']) !!}
                </a>
            </div>
        @endforeach

        @endif
    </div>
</div>
</section>
@endif
