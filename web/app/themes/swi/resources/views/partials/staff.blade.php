<section class="staff container-fluid px-0 content-section">
    <div class="row no-gutters">
        @foreach( $staff as $p )
            <div class="col-6 col-md staff-individual" data-overlay="{{ $p->ID }}">
                {!! get_the_post_thumbnail($p, 'square', ['class' => 'w-100 h-auto']) !!}

                <div class="staff-overlay" id="{{ $p->ID }}">
                    <div class="staff-info">
                    <h5>
                        {!! get_the_title($p) !!}
                        @if (!empty( $p->qualifications ) )
                        <span>{{ $p->qualifications }}</span>
                        @endif
                    </h5>
                    @if( !empty( $p->position ) )
                    <strong>{{ $p->position }}</strong>
                    @endif

                    @if( count($p->socials) )
                    <div class="staff-links">

                        @foreach( $p->socials as $link )
                            <a href="{{ $link['link'] }}" target="_blank">
                                <i class="{{ $link['icon'] }}"></i>
                            </a>
                        @endforeach
                    </div>
                    @endif

                    </div>

                </div>
            </div>
        @endforeach
    </div>
</section>