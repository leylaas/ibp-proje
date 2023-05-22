@extends('layouts.frontbase')

@section('title','Contact | ' .$setting->title)
@section('description',$setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" style="height: 450px;"
             data-setbg="{{asset('assets')}}/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Contact Us</h2>
                        <div class="bt-option">
                            <a href="{{route('home')}}">Home</a>
                            <span>Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title contact-title">
                        <span>Contact Information</span>
                    </div>
                    <div class="contact-widget">
                        {!! $setting->contact !!}

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="leave-comment">
                        <div class="section-title contact-title">
                            <span>Contact Form</span>
                        </div>
                        {{--                        <h3 style="color: white ; padding-bottom: 15px;">{{Session::get('info')}} </h3>--}}
                        @include('home.messages')
                        <form action="{{route("storemessage")}}" method="post">
                            @csrf
                            <input type="text" name="name" placeholder="Name & Surname">
                            <input type="tel" name="phone" placeholder="Phone Number">
                            <input type="email" name="email" placeholder="Email">
                            <input type="text" name="subject" placeholder="Subject">
                            <textarea type="text" name="message" placeholder="Your Message"></textarea>
                            <input type="submit" value="Send Message">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->



@endsection
