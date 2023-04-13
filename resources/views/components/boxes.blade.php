<!-- ======= About Boxes Section ======= -->
<section id="about-boxes" class="about-boxes">
    <div class="container" data-aos="fade-up">
        <div class="row">
            @foreach ($boxes as $box)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                    <img src="{{ $box->image->getUrl() }}" class="card-img-top" alt="...">
                    <div class="card-icon">
                        {!! $box->icon !!}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="">{{ $box->title }}</a></h5>
                        <p class="card-text">{{ $box->text }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section><!-- End About Boxes Section -->