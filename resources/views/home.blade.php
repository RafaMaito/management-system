@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <div class="featured-content">
        <div class="left-section">
            <div class="information">
                <h1>Management System</h1>
                <p>Business management software ideal for your company.</p>
                <div class="call-to-action">
                    <img src="{{ asset('/img/check.png') }}" alt="Check">
                    <span class="white-text">Complete and uncomplicated management</span>
                </div>
                <div class="call-to-action">
                    img src="{{ asset('/img/check.png') }}" alt="Check">
                    <span class="white-text">Your company in the cloud</span>
                </div>
            </div>

            <div class="video">

                <img src="{{ asset('img/player_video.jpg') }}" alt="Player">
            </div>
        </div>

        <div class="right-section">
            <div class="contact">
                <h1>Contact</h1>
                <p>If you have any questions, please contact our team using the form below.</p>
                @component('layouts._components.form_contact', [
                    'border' => 'white-border',
                    'contact_reasons' => $contact_reasons,
                ])
                @endcomponent
            </div>
        </div>
    </div>
@endsection
