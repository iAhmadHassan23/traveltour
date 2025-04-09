@extends('layouts.master')
@section('title', 'Contact-us')
@section('style') 
@endsection
    @section('ogimage' ,'https://ozcleaningperth.com.au/assets/images/home-banner.jpg')
@section('mainContent')
<section class="srp-page-banner asr-contact-sec d-flex align-items-center position-relative bg-overlay">
    <div class="container">
        <h1 class="fw-bold text-white text-center">Contact Us</h1>
    </div>
</section>
    <section class="asr-contact-sec py-4 py-lg-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="asr-contact-form bg-white rounded">
                        @if (Session::has('message'))
                            <div class="col-md-12">
                                <div class="alert alert-success">{{ Session::get('message') }}</div>
                            </div>
                        @endif
                        <h2 class="position-relative">Get In Touch!</h2>
                        <form method="POST" action="{{ route('contact_us.store') }}" class="asr-form-block">
                            @csrf 
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label class="d-block mb-1 fw-medium">Name</label>
                                    <input type="text" class="form-control " value="" name="name" id="name" placeholder="Your Name" fdprocessedid="1ftlz" required>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label class="d-block mb-1 fw-medium">Email</label>
                                    <input type="email" name="email" value="" placeholder="Your real Email" class="form-control  " fdprocessedid="buagaj" required>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label class="d-block mb-1 fw-medium">Phone</label>
                                    <input type="text" name="phone" value="" placeholder="Your Phone" class="form-control  " fdprocessedid="5ixdu" required>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label class="d-block mb-1 fw-medium">Subject</label>
                                    <input type="text" name="subject" value="" placeholder="Subject" class="form-control  " fdprocessedid="u9ocyj" required>
                                </div>
                                <div class="col-12 form-group mb-3">
                                    <label class="d-block mb-1 fw-medium">Message</label>
                                    <textarea name="message" placeholder="Your Message" class="form-control  " required></textarea>
                                </div>
                            </div>
                            <div class="text-center pt-1">
                                <button type="submit" class="btn-grad fw-medium rounded-pill" fdprocessedid="i53z5g">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <ul class="asr-contact-list fw-medium list-unstyled">
                        @isset($contact[0]['email'])
                        <li class="asr-contact-col d-flex flex-column align-items-center text-center">
                            <i class="fa-solid fa-envelope"></i>
                            <strong class="asr-contact-text-caption d-block">Send Mail</strong>
                            <p class="mb-0"><a href="mailto:{{ $contact[0]['email'] }}">{{ $contact[0]['email'] }}</a></p>
                        </li>
                        @endisset
                        @isset($contact[0]['phone'])
                        <li class="asr-contact-col d-flex flex-column align-items-center text-center">
                            <i class="fa-solid fa-phone-volume"></i>
                            <strong class="asr-contact-text-caption d-block">Phone Number</strong>
                            <p class="mb-0"><a href="tel:{{$contact[0]['phone']}}">{{ $contact[0]['phone'] }}</a></p>
                        </li>
                        @endisset
                        @isset($contact[0]['address'])
                        <li class="asr-contact-col d-flex flex-column align-items-center text-center">
                            <i class="fa-solid fa-location-dot"></i>
                            <strong class="asr-contact-text-caption d-block">Location</strong>
                            <p class="mb-0 address">{{ $contact[0]['address'] }}</p>                         
                        </li>
                        @endisset
                        <li class="asr-contact-col d-flex flex-column align-items-center text-center">
                            <i class="fa-regular fa-clock"></i>
                            <strong class="asr-contact-text-caption d-block">Working Hours</strong>
                            <div class="">
                                <span class="d-block">Monday - Sunday: 24 Hours</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
