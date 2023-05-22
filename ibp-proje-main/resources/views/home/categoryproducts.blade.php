@extends('layouts.frontbase')

@section('title',$category->title .' Products')



@section('content')

    <!--category-->
    <style type="text/css">
        /* hide child elements */
        #nav li ul {
            display: none;
        }

        /* show child elements when hovering over list item */
        #nav li:hover ul {
            display: block;
        }
    </style>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg"   style="height: 450px;" data-setbg="{{asset('assets')}}/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Products</h2>
                        <div class="bt-option">
                            <a href="{{route('home')}}">Home</a>
                            <a>Category</a>
                            <span>{{$category->title}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Pricing Section Begin -->
    <section class="pricing-section spad">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($products as $rs)
                    <div class="col-lg-4 col-md-8">
                        <div class="ps-item">
                            <h3>{{$rs->title}}</h3>
                            <div class="pi-price">
                                <h2>$ {{$rs->price}}</h2>
                                <span>{{$rs->months}} Month</span>
                                <span>{{$rs->keywords}}</span>
                            </div>
                            <ul>
                                <li>{{$rs->description}}</li>
                            </ul>
                            <a href="{{route('product',['id'=> $rs->id])}}" class="primary-btn pricing-btn">GET INFO</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->
@endsection
