@extends('website.layout.website')

@section('header')
<x-slider :hero="$hero" />
@endsection

@section('content')

<x-about :about="$about" />
<x-boxes :boxes="$boxes" />
<x-clients :clients="$clients" />
<x-features :features="$features" />
<x-services :services="$services" />
<x-testimonials :testimonials="$testimonials" />

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Informação</h2>
            <p>Toda a informação sobre nós e as nossas parcerias</p>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">Todos</li>
                    @foreach ($categories as $category)
                    <li data-filter=".filter-{{ $category->id }}">{{ $category->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($infos as $info)
            <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $info->categories[0]->id }}">
                <img src="{{ $info->featured_image->getUrl() }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>{{ $info->title }}</h4>
                    <p>{{ $info->categories[0]->name }}</p>
                    <a href="{{ $info->featured_image->getUrl() }}" data-gallery="portfolioGallery"
                        class="portfolio-lightbox preview-link" title="{{ $info->title }}"><i class="bx bx-plus"></i></a>
                    <a href="\informacao\{{ $info->id }}" class="details-link" title="Ver página"><i
                            class="bx bx-link"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section><!-- End Portfolio Section -->

<x-team :teams="$teams" />
<x-contact :contact="$contact" />

@endsection