@extends('layouts.frontbase')

@section('title','About Us | ' .$setting->title)
@section('description',$setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg"   style="height: 450px;" data-setbg="{{asset('assets')}}/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>About Us</h2>
                        <div class="bt-option">
                            <a href="{{route('home')}}">Home</a>
                            <span>About</span>
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
                <div class="col-lg-12">
                    {!! $setting->aboutus !!}
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection
