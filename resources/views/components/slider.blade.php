<!-- ======= Hero Section ======= -->
<section id="hero">
    @foreach ($hero->images as $key => $image)
    <div id="image{{ $key + 1 }}" class="hero-images animated-background{{ rand(1, 2) }}"></div>
    @endforeach
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
        <h1>{{ $hero->title }}</h1>
        <h2>{{ $hero->subtitle }}</h2>
        <div class="d-flex">
            <a href="{{ $hero->button_link }}" class="btn-get-started scrollto">{{ $hero->button_text }}</a>
        </div>
    </div>
</section><!-- End Hero -->
@section('styles')
@foreach ($hero->images as $key => $image)
<style>
    #image{{ $key + 1 }} {
        background: url("{{ $image->getUrl() }}") top center;
    }
</style>
@endforeach
@endsection
@section('scripts')
<script>
    $(() => {
        var images = {!! $hero->images !!}
        var time = 5000;
        var currentIndex = 1;
        var length = Object.keys(images).length;
        var hero = $('#hero');
        
        setInterval(() => {
            currentIndex = (currentIndex < length) ? currentIndex + 1 : 1;
            $('.hero-images').fadeOut(1000);
            $('#image' + currentIndex).fadeIn(1000);
        }, time);
    });
</script>
@endsection