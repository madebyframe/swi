@foreach( $columns as $row )
@if( !empty($row['content']) && !empty($row['photo']) )
<section class="container content-section">

    <div class="row">
        @if( $row['colorder'] == 'cp' )
        <div class="col-12 col-md-6 text-center text-md-right">
            {!! apply_filters('the_content', $row['content']) !!}
        </div>

        <div class="col-12 col-md-6">
            @foreach( $row['photo'] as $photo )
            {!! wp_get_attachment_image($photo, 'box-photo', false, ['class' => 'w-100 boxshadow h-auto']) !!}
            @endforeach
        </div>
        @else

        <div class="col-12 col-md-6 pb-3">
            @foreach( $row['photo'] as $photo )
                {!! wp_get_attachment_image($photo, 'box-photo', false, ['class' => 'w-100 boxshadow h-auto']) !!}
            @endforeach
        </div>
        <div class="col-12 col-md-6 text-center text-md-left">
            {!! apply_filters('the_content', $row['content']) !!}
        </div>
        @endif
    </div>
</section>
@endif
@endforeach