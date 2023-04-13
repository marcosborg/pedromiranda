<!-- ======= Clients Section ======= -->
<section id="clients" class="clients">
    <div class="container" data-aos="zoom-in">
        <div class="row">
            @foreach ($clients as $client)
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{ $client->logo->getUrl() }}" class="img-fluid" alt="">
            </div>
            @endforeach
        </div>
    </div>
</section><!-- End Clients Section -->