@extends('layouts.frontbase')

@section('title',$data->title)

@section('content')

    <!--stars-->
    <style>
        .txt-center {
            text-align: center;
        }

        .hide {
            display: none;
        }

        .clear {
            float: none;
            clear: both;
        }

        .rating {
            width: 90px;
            unicode-bidi: bidi-override;
            direction: rtl;
            text-align: center;
            position: relative;
        }

        .rating > label {
            float: right;
            display: inline;
            padding: 0;
            padding-bottom: 10px;
            margin: 0;
            position: relative;
            width: 1.1em;
            cursor: pointer;
            color: whitesmoke;
        }

        .rating > label:hover,
        .rating > label:hover ~ label,
        .rating > input.radio-btn:checked ~ label {
            color: transparent;
        }

        .rating > label:hover:before,
        .rating > label:hover ~ label:before,
        .rating > input.radio-btn:checked ~ label:before,
        .rating > input.radio-btn:checked ~ label:before {
            content: "\2605";
            position: absolute;
            left: 0;
            color: #FFD700;
        }
    </style>

    <!--category-->
    <style type="text/css">
        /* hide child elements */
        #nav li ul {
            display: none;
        }
        /* show child elements when hovering over list item */
        #nav li:hover ul {
            display: block;
            float: right;
        }
    </style>
    <!-- Breadcrumb Section Begin -->


    <section class="breadcrumb-section set-bg" data-setbg="{{asset('assets')}}/img/breadcrumb-bg.jpg"
             style="height: 450px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <div class="bt-option">
                            <a href="{{route('home')}}">Home</a>
                            <a>Categories</a>
                            <span>{{$data->category->title}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    @php
        $parenCategories = \App\Http\Controllers\HomeController::maincategorylist();
    @endphp

    <!-- Services Section Begin -->
    <section class="services-section spad" style="padding-top: 80px; padding-bottom: 60px ">
        <div class="container">
            @include('home.messages')
            <div class="row">
                <div class="col-lg-3 row-cols-md-auto" style="margin-right: 12px;">
                    <div class="sidebar-option">
                        <div class="so-categories">
                            <h5 class="title">Categories</h5>
                            @foreach($parenCategories as $rs)
                                <ul id="nav">
                                    <li><a href="#">{{$rs->title}}</a>
                                        <ul>
                                            @if(count($rs->children))
                                                @include('home.categorytree',['children' => $rs->children])
                                            @endif
                                        </ul>
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-1 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="{{Storage::url( $data->image)}}" style="width: 292px ; height: 292px">
                    </div>
                </div>
                <div class="col-lg-5 order-lg-2 col-md-6 p-0">
                    <div class="ss-text ">
                        <h5 style="color: #f36100;"> {{$data->months}} Month {{$data->title}} Only ${{$data->price}}</h5>
                        <p>
                            {{ $data->description}}
                        </p>
                        <br>
                        <div class="row justify-content-center">
                            <a href="{{route('order',['id'=> $data->id])}}" class="primary-btn pricing-btn"
                               {{--send product id --}}
                               style="background-color: #f36100; color: white ; text-align: center;width: 225px">Buy
                                now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details-section spad" style="padding-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 p-0 m-auto">
                    <div class="blog-details-text">
                        <div class="blog-details-pic">
                            <div class="blog-details-title">
                                <h3 style="color: white ">{{ $data->title}}</h3>
                            </div>
                            @foreach($images as $rs)
                                <div class="blog-details-pic-item" style="margin-bottom: 0px;">
                                    <img src="{{Storage::url( $rs->image)}}" style="width: 365px;height: 365px">
                                </div>
                            @endforeach
                        </div>
                        <div class="blog-details-title">
                            <p> {!! $data->detail !!}</p>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 20px">
                        <div class="col-lg-6">
                            <div class="comment-option">
                                @foreach($reviews as $rs)
                                    <div class="co-item">
                                        <div class="co-widget">
                                            <i class="fa fa-user-o"
                                               style="color:whitesmoke;font-size: 14px; "> {{$rs->user->name}}</i>
                                            <i class="fa fa-clock-o"
                                               style="color:whitesmoke;margin-left: 14px ; margin-right: 30px;font-size: 14px;"> {{$rs->created_at}}</i>
                                            @for($i=0 ; $i<$rs->rate ; $i++)
                                                <i style=" color: #FFD700;">★</i>
                                            @endfor
                                            @for($i=0 ; $i<(5-$rs->rate) ; $i++)
                                                <i style=" color: whitesmoke;">☆</i>
                                            @endfor
                                        </div>
                                        <div class="co-text">
                                            <strong style="color:whitesmoke ">{{$rs->subject}}</strong>
                                            <p style="color:whitesmoke ">{{$rs->review}}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="leave-comment">
                                <h5>Leave a comment</h5>
                                <form action="{{route('storecomment')}}" method="post">
                                    @csrf
                                    <input class="input" type="hidden" name="product_id" value="{{$data->id}}">
                                    <input class="input" type="text" name="subject" placeholder="subject">
                                    <textarea class="input" name="review" placeholder="your review"></textarea>
                                    <div class="txt-center">
                                        <div class="rating">
                                            <input id="star5" name="rate" type="radio" value="5"
                                                   class="radio-btn hide"/>
                                            <label for="star5">☆</label>
                                            <input id="star4" name="rate" type="radio" value="4"
                                                   class="radio-btn hide"/>
                                            <label for="star4">☆</label>
                                            <input id="star3" name="rate" type="radio" value="3"
                                                   class="radio-btn hide"/>
                                            <label for="star3">☆</label>
                                            <input id="star2" name="rate" type="radio" value="2"
                                                   class="radio-btn hide"/>
                                            <label for="star2">☆</label>
                                            <input id="star1" name="rate" type="radio" value="1"
                                                   class="radio-btn hide"/>
                                            <label for="star1">☆</label>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    @auth()
                                        <button type="submit">Submit</button>
                                    @else
                                        <a href="/login" class="primary-btn">For Submit Your Rewiev, Please Login</a>
                                    @endauth
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->
@endsection
