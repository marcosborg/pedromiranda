<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up"">
                <div class=" section-title">
        <h2>Contactos</h2>
        <p>Contacte connosco</p>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>Onde estamos</h3>
                        <p>{{ $contact->address }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box mt-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email</h3>
                        <p>{!! $contact->email !!}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box mt-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Contactos</h3>
                        <p>{!! $contact->contact !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-4 mt-lg-0" id="form-contact">
            @if(session('message'))
            <div class="row mb-2">
                <div class="col-lg-12">
                    <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                </div>
            </div>
            @endif
            @if($errors->count() > 0)
            <div class="alert alert-danger">
                <ul class="list-unstyled">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="/forms/contact" method="post" role="form" class="php-email-form" id="form-contact">
                @csrf
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nome">
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto">
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Mensagem"></textarea>
                </div>
                <div class="text-center mt-4"><button type="submit">Enviar mensagem</button></div>
            </form>
        </div>
    </div>
</section><!-- End Contact Section -->