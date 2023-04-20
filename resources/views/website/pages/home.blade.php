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
@if (1==2)
<x-testimonials :testimonials="$testimonials" />
<x-portfolio :categories="$categories" :infos="$infos" />
@endif
<x-team :teams="$teams" />
<x-contact :contact="$contact" />

@endsection