<!-- ======= Features Section ======= -->
<section id="features" class="features">
    <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row d-flex">
            @foreach ($features as $key => $feature)
            <li class="nav-item col-3">
                <a class="mt-4 nav-link {{ $key == 0 ? 'active show' : '' }}" data-bs-toggle="tab" href="#tab-{{ $key }}">
                    {!! $feature->icon !!}
                    <h4 class="d-none d-lg-block">{{ $feature->title }}</h4>
                </a>
            </li>
            @endforeach
        </ul>

        <div class="tab-content">
            @foreach ($features as $key => $feature)
            <div class="tab-pane {{ $key == 0 ? 'active show' : '' }}" id="tab-{{ $key }}">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                        {!! $feature->text !!}
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="{{ $feature->image->getUrl() }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section><!-- End Features Section -->