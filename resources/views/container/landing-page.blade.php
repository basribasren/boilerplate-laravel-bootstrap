@extends('layouts.landing')

@section('content')

    @include('component-landing.header.header-wrapper')

    @include('component-landing.landing-welcome')

    @include('component-landing.special.special-wrapper')

    @include('component-landing.feature.feature-wrapper')

    @include('component-landing.landing-video')

    @include('component-landing.fact.fact-wrapper')

    @include('component-landing.screenshot.screenshot-wrapper')

    @include('component-landing.pricing.pricing-wrapper')

    @include('component-landing.feedback.feedback-wrapper')

    @include('component-landing.landing-promotion')

    @include('component-landing.team.team-wrapper')

    @include('component-landing.contact.contact-wrapper')

    @include('component-landing.footer.footer-wrapper')

@stop