<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Soluções</h2>
            <p>Soluções Exclusivas Corporate</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">
            @foreach ($services as $service)
            <div class="col-md-6">
                <div class="icon-box">
                    {!! $service->icon !!}
                    <h4><a href="{{ $service->link }}">{!! $service->title !!}</a></h4>
                    <p>{!! $service->text !!}</p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section><!-- End Services Section -->