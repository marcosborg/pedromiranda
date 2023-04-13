@extends('website.layout.website')

@section('header')
<section style="background: #15222b;">
    <div class="container" style="
    margin-top: 80px;
    border-top: solid 1px #ffffff;
    padding-top: 20px;
">
        <h1 style="
    color: #fff;
">{{ $info->categories[0]->name }} | {{ $info->title }}</h1>
    </div>
</section>
@endsection

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col">
                {!! $info->page_text !!}
            </div>
            <div class="col">
                <img src="{{ $info->featured_image->getUrl() }}" class="img-fluid img-thumbnail">
            </div>
        </div>
    </div>
</section>
@endsection

<script>
    console.log({!! $info !!})
</script>