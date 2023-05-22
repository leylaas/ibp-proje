@extends('layouts.frontbase')

@section('title','User Login | ')

@section('content')


    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                     @include('auth.register')
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection
