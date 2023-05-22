@extends('layouts.frontbase')

@section('title','User Panel')

@section('content')

    <!-- Contact Section Begin -->
    <section class="contact-section spad" style="padding-top: 200px">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="leave-comment">
                        <div class="section-title contact-title" style="margin-bottom: 32px;">
                            <h3 style="color: white;">USER MENU</h3>
                        </div>
                        <div style="color: cornflowerblue;">
                            @include('home.user.usermenu')
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="section-title contact-title">
                        <h3 style="color: white" style="margin-bottom: 32px;">USER PROFİLE</h3>
                    </div>
                    <div class="contact-widget">
                        @include('profile.show')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->



@endsection
