@extends('site.layouts.base')

@section('title', $title)

@section('content')

    <div class="featured-content">
        <div class="left-section">
            <div class="information">
                <h1>Management System</h1>
                <p>Business management software ideal for your company.</p>
                <div class="call-to-action">
                    <img src="/img/check.png">
                    <span class="white-text">Complete and uncomplicated management</span>
                </div>
                <div class="call-to-action">
                    <img src="img/check.png">
                    <span class="white-text">Your company in the cloud</span>
                </div>
            </div>

            <div class="video">
                <img src="img/player_video.jpg">
            </div>
        </div>

        <div class="right-section">
            <div class="contact">
                <h1>Contact</h1>
                <p>If you have any questions, please contact our team using the form below.</p>
                <form>
                    <input type="text" placeholder="Name" class="white-border">
                    <br>
                    <input type="text" placeholder="Phone" class="white-border">
                    <br>
                    <input type="text" placeholder="Email" class="white-border">
                    <br>
                    <select class="white-border">
                        <option value="">What is the reason for your contact?</option>
                        <option value="">Question</option>
                        <option value="">Compliment</option>
                        <option value="">Complaint</option>
                    </select>
                    <br>
                    <textarea class="white-border">Enter your message here</textarea>
                    <br>
                    <button type="submit" class="white-border">SEND</button>
                </form>
            </div>
        </div>
    </div>
@endsection
