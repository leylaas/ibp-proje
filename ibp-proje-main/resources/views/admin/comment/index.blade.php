@extends('layouts.adminbase')

@section('title','Comment & Review List')


@section('content')
    <!-- Spinner Start -->
    <div id="spinner"
         class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Blank Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row vh-100 bg-white rounded align-items-start justify-content-center mx-0">
            <div class="col-sm-12 col-xl-12">

                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Comment List</h6>
                    <table class="table table-bordered ">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Product</th>
                            <th>Subject</th>
                            <th>Review</th>
                            <th>Rate</th>
                            <th>Status</th>
                            <th style="width: 40px">Show</th>
                            <th style="width: 40px">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->user->name}}</td>
                                <td><a href="{{route('admin.product.show',['id'=>$rs->product_id])}}">{{$rs->product->title}}</a></td>
                                <td>{{$rs->subject}}</td>
                                <td>{{$rs->review}}</td>
                                <td>{{$rs->rate}}</td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('admin.comment.show',['id'=>$rs->id])}}" class="btn btn-sm btn-success"
                                       onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">
                                        Show
                                    </a>
                                </td>
                                <td><a href="{{route('admin.comment.destroy',['id'=>$rs->id])}}"
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
    <!-- Blank End -->

@endsection
