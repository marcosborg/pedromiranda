<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Equipa</h2>
            <p>Conheça a nossa equipa</p>
        </div>

        <div class="row">
            @foreach ($teams as $key => $team)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $key }}00">
                <div class="member">
                    <div class="pic"><img src="{{ $team->photo->getUrl() }}" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>{{ $team->name }}</h4>
                        <span>{{ $team->title }}</span>
                        <div class="social">
                            @if ($team->facebook)
                            <a href="{{ $team->facebook }}"><i class="bi bi-facebook"></i></a>
                            @endif
                            @if ($team->instagram)
                            <a href="{{ $team->instagram }}"><i class="bi bi-instagram"></i></a>
                            @endif
                            @if ($team->linkedin)
                            <a href="{{ $team->linkedin }}"><i class="bi bi-linkedin"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section><!-- End Team Section -->