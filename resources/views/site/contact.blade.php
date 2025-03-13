@extends('site.layouts.base')

@section('title', $title)

@section('content')

<div class="page-content">
    <div class="page-title">
        <h1>Get in Touch with Us</h1>
    </div>

    <div class="page-info">
        <div class="main-contact">
            <form action={{ route('site.contact') }} method="get">
                <input name="name" type="text" placeholder="Name" class="black-border">
                <br>
                <input name="phone" type="text" placeholder="Phone" class="black-border">
                <br>
                <input name="email" type="text" placeholder="Email" class="black-border">
                <br>
                <select name="contact_reason" class="black-border">
                    <option value="">What is the reason for your contact?</option>
                    <option value="1">Question</option>
                    <option value="2">Compliment</option>
                    <option value="3">Complaint</option>
                </select>
                <br>
                <textarea name="message" class="black-border">Enter your message here</textarea>
                <br>
                <button type="submit" class="black-border">SEND</button>
            </form>
        </div>
    </div>
</div>
@endsection
