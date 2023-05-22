@extends('layouts.adminbase')

@section('title','Product List')


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
        <div class="row bg-white rounded align-items-start justify-content-center mx-0">
            <div class="col-sm-12 col-xl-12">
                <a href="{{route('admin.product.create')}}" class="btn btn-secondary bg-primary m-3 "
                   style="width: 200px">Add Product</a>
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Product List</h6>
                    <table class="table table-bordered ">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Month</th>
                            <th>Image</th>
                            <th>Image<br>Gallery</th>
                            <th>Status</th>
                            <th style="width: 40px">Edit</th>
                            <th style="width: 40px">Delete</th>
                            <th style="width: 40px">Show</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category, $rs->category->title)}}</td>
                                <td>{{$rs->title}}</td>
                                <td>{{$rs->price}}</td>
                                <td>{{$rs->months}}</td>
                                <td>
                                    @if ($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                    @endif
                                </td>
                                <td><a href="{{route('admin.image.index',['pid'=>$rs->id])}}"
                                       onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">
                                        <img src="{{asset('assets')}}/admin/img/gallery.png" style="height: 40px">
                                    </a>
                                </td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('admin.product.edit',['id'=>$rs->id])}}"
                                       class="btn btn-sm btn-primary">Edit</a></td>
                                <td><a href="{{route('admin.product.destroy',['id'=>$rs->id])}}"
                                       class="btn btn-sm btn-danger"
                                       onclick="return confirm('Deleting! Are you sure?')">Delete</a></td>
                                <td><a href="{{route('admin.product.show',['id'=>$rs->id])}}"
                                       class="btn btn-sm btn-success">Show</a>
                                </td>
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
