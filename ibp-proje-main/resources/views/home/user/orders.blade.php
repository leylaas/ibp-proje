@extends('layouts.frontbase')

@section('title','User Order List')

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
                        <h3 style="color: white" style="margin-bottom: 32px;">USER ORDER LIST</h3>
                    </div>
                    <div class="contact-widget" >
                        <table class="table table-bordered " style="color: white">
                            <thead>
                            <tr>
                                <th>Name & Surname</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th style="width: 40px">Cancel</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                                <tr>
                                    <td>{{$rs->name}}</td>
                                    <td>{{$rs->phone}}</td>
                                    <td>{{$rs->email}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('userpanel.orderdetail',['id'=>$rs->id])}}"
                                           class="btn btn-sm btn-danger">Detail</a></td>
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
