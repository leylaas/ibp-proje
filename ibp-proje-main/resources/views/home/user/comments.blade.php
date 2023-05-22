@extends('layouts.frontbase')

@section('title','User Comment & Reviews')

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
                        <h3 style="color: white" style="margin-bottom: 32px;">USER COMMENTS & REVIEWS</h3>
                    </div>
                    <div class="contact-widget" >
                        <table class="table table-bordered " style="color: white">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Product</th>
                                <th>Subject</th>
                                <th>Review</th>
                                <th>Rate</th>
                                <th>Status</th>
                                <th style="width: 40px">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($comments as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td><a href="{{route('product',['id'=>$rs->product_id])}}">{{$rs->product->title}}</a></td>
                                    <td>{{$rs->subject}}</td>
                                    <td>{{$rs->review}}</td>
                                    <td>{{$rs->rate}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('userpanel.reviewsdestroy',['id'=>$rs->id])}}"
                                           class="btn btn-sm btn-danger"
                                           onclick="return confirm('Deleting! Are you sure?')">Delete</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->



@endsection
