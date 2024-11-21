@extends('landing.layouts.app')

@section('content')
    @include('landing.layouts.navbar')

    <main class="main">

        @include('landing.partials.hero')

        @include('landing.partials.about')

        @include('landing.partials.value')

        @include('landing.partials.feature')

        @include('landing.partials.service')

        @include('landing.partials.pricing')

        @include('landing.partials.faq')

        @include('landing.partials.portfolio')

        @include('landing.partials.testimonial')

        @include('landing.partials.team')

        @include('landing.partials.client')

        @include('landing.partials.post')

        @include('landing.partials.contact')

    </main>
@endsection
