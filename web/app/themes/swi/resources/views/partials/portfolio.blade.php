@if( !empty($portfolio) )
<section class="portfolio">
    <div class="container">


        <div class="row no-gutters">
        @foreach($portfolio as $item)
            <div class="col-6 col-sm-4 col-md-3 item
                @if( !empty($item->post_content) && !empty($item->subtitle) )
                has-overlay" data-overlay="portfolio-{{ $item->ID }}">
                <a class="d-block" href="{{ get_permalink($item) }}" title="{{ $item->post_title }} by SWI &raquo;">
                @else
                ">
                @endif

                    {!! get_the_post_thumbnail($item, 'square', ['class' => 'w-100 h-auto']) !!}

                    <div class="portfolio-overlay" id="portfolio-{{ $item->ID }}">
                        <div class="portfolio-info">
                        <h6>{!! $item->post_title !!}</h6>
                        {!! implode(', ', wp_get_post_terms($item->ID, 'services', ['fields' => 'names'])) !!}
                        </div>
                    </div>

                @if( !empty($item->post_content) && !empty($item->subtitle) )
                </a>
                @endif
            </div>
        @endforeach
        </div>
    </div>
</div>
</section>
@endif
