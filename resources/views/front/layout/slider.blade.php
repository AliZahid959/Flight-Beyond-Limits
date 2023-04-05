@section('css')
 
@endsection

<section id="video_section my-5">
    <div class="owl-carousel video-section my-5">
        <div class="item">
            <div>
                <video autoplay loop muted class="js-player" crossorigin playsinline
                    poster="{{ asset('front/assets/video/main.mp4') }}">
                    <source src="{{ asset('front/assets/video/main.mp4') }}" type="video/mp4" size="720">
                </video>
            </div>
        </div>
        <div class="item">
            <div>
                <video autoplay loop muted class="js-player" crossorigin playsinline
                    poster="{{ asset('front/assets/video/home1.mp4') }}">
                    <source src="{{ asset('front/assets/video/home1.mp4') }}" type="video/mp4" size="720">
                </video>
            </div>
        </div>
        <div class="item">
            <div>
                <video autoplay loop muted class="js-player" crossorigin playsinline
                    poster="{{ asset('front/assets/video/home2.mp4') }}">
                    <source src="{{ asset('front/assets/video/home2.mp4') }}" type="video/mp4" size="720">
                </video>
            </div>
        </div>
    </div>
</section>


@section('script')
 
@endsection
