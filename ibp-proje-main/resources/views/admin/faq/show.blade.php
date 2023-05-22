@extends('layouts.adminbase')

@section('title','Show Product:'.$data->title)


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
        <div class=" bg-white rounded align-items-sm-baseline mx-0">
            <div class="col-sm-12">
                <div class="m-3">
                    <a href="{{route('admin.product.edit',['id'=>$data->id])}}" class="btn btn-secondary bg-primary"
                       style="width: 200px">Edit</a>
                    <a href="{{route('admin.product.destroy',['id'=>$data->id])}}" class="btn btn-secondary bg-danger"
                       style="width: 200px;margin-left: 14%"
                       onclick="return confirm('Deleting! Are you sure?')">Delete</a>
                </div>
                <div class="bg-light rounded h-100 p-4">
                    <div class="col-sm-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Detail Data</h6>
                            <table class="table table-striped" style="margin-right: auto;margin-left: auto">
                                <tr>
                                    <th>Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th>Category</th>
                                    <td>
                                        {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category, $data->category->title)}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Title</th>
                                    <td>{{$data->title}}</td>
                                </tr>
                                <tr>
                                    <th>Keywords</th>
                                    <td>{{$data->keywords}}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{$data->description}}</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>{{$data->price}}</td>
                                </tr>
                                <tr>
                                    <th>Month</th>
                                    <td>{{$data->months}}</td>
                                </tr>
                                <tr>
                                    <th>Detail Information</th>
                                    <td>{!! $data->detail !!}</td>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <td> @if ($data->image)
                                            <img src="{{Storage::url($data->image)}}" style="height: 100px">
                                        @endif</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{$data->status}}</td>
                                </tr>
                                <tr>
                                    <th>Created Data</th>
                                    <td>{{$data->created_at}}</td>
                                </tr>
                                <tr>
                                    <th>Update Data</th>
                                    <td>{{$data->updated_at}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blank End -->
@endsection
