@extends('layouts.frontbase')

@section('title','User Order Detail')

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
                        <h3 style="color: white" style="margin-bottom: 32px;">ORDER ITEM</h3>
                    </div>
                    <div class="contact-widget">
                        <table class="table" style="color: white">
                            <thead>
                            <tr>
                                <th>Name & Surname :</th>
                                <td>{{$order->name}}</td>
                            </tr>
                            <tr>
                                <th>Phone :</th>
                                <td>{{$order->phone}}</td>
                            </tr>
                            <tr>
                                <th>Email :</th>
                                <td>{{$order->email}}</td>
                            </tr>
                            <tr>
                                <th>Note :</th>
                                <td>{{$order->note}}</td>
                            </tr>
                            <tr>
                                <th>Status :</th>
                                <td>{{$order->status}}</td>
                            </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered " style="color: white">
                            <thead style="color: #f36100;">
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Month</th>
                                <th>StartDate</th>
                                <th>FinishDate</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><img src="{{Storage::url( $orderproducts->image)}}"
                                         style="width: 70px;height: 70px">&#160;&#160;&#160;{{$orderproducts->title}}
                                </td>
                                <td>${{$order->price}}</td>
                                <td>{{$order->months}}</td>
                                <td>{{$order->StartDate}}</td>
                                <td>{{$order->FinishDate}}</td>
                                <td>{{$order->status}}
                                    &#160;  &#160;
                                    @if($order->status == 'New')
                                        <a href="{{route('userpanel.cancelorder',['id'=>$order->id])}}"
                                           class="btn btn-sm btn-danger"
                                           onclick="return confirm('Cancelling! Are you sure?')">Cancel</a>
                                    @endif
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->



@endsection
