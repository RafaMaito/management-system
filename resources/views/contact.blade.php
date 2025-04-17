@extends('site.layouts.base')

@section('title', $title)

@section('content')

<div class="page-content">
    <div class="page-title">
        <h1>Get in Touch with Us</h1>
    </div>

    <div class="page-info">
        <div class="main-contact">
           @component('site.layouts._components.form_contact', ['border' => 'black-border', 'contact_reasons' => $contact_reasons])
           <p>If you have any questions, please contact our team using the form below.</p>
           <p>Our team will respond as soon as possible.</p>
           @endcomponent
        </div>
    </div>
</div>
@endsection
