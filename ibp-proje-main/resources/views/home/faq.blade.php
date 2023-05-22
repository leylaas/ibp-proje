@extends('layouts.frontbase')

@section('title','Frequently Asked Question | ' .$setting->title)
@section('description',$setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" style="height: 450px;"
             data-setbg="{{asset('assets')}}/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Announcements </h2>
                        <div class="bt-option">
                            <a href="{{route('home')}}">Home</a>
                            <span>Announcement</span>
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
                    <div class="section-title contact-title">
                        <h3 style="color:#f36100;">LATEST ANNOUNCEMENTS</h3>
                    </div>
                    <div id="accordion">
                        @foreach($datalist as $rs)
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapse{{$loop->iteration}}">
                                        <h4>{{$rs->question}}</h4>
                                    </a>
                                </div>

                                <div id="collapse{{$loop->iteration}}" class="collapse @once show @endonce" data-parent="#accordion">
                                    <div class="card-body">
                                      <p>{!! $rs->answer !!}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection
