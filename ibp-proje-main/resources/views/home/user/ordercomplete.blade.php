@extends('layouts.frontbase')

@section('title','Order Complete' )

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg"   style="height: 275px;" data-setbg="{{asset('assets')}}/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
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
                    @include('home.messages')
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection
