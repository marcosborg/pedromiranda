@section('content')
<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="row">

            <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
                <img src="{{ $about->image->getUrl() }}" class="img-fluid" alt="">
                @if ($about->youtube)
                <a href="https://www.youtube.com/watch?v={{ $about->youtube }}" class="glightbox play-btn mb-4"></a>
                @endif
            </div>

            <div class="col-lg-6 pt-3 pt-lg-0 content">
                <h3>{{ $about->title }}</h3>
                {!! $about->text !!}
            </div>

        </div>
    </div>
</section><!-- End About Section -->