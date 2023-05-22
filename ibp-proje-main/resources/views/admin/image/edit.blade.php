@extends('layouts.adminbase')

@section('title','Edit Category:'.$data->title)


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
                <h3>Edit Category: {{$data->title}}</h3>
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Category Elements</h6>
                    <form action="{{route('admin.category.update',['id'=>$data->id])}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Parent Category</label>
                            <select class="form-select mb-3" name="parent_id" style="">
                                <option value="0" selected="selected">Main Category</option>
                                @foreach($datalist as $rs)
                                    <option value="{{$rs->id}}"
                                            @if ($rs->id == $data->parent_id) selected="selected" @endif >
                                        {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{$data->title}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Keywords</label>
                            <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" value="{{$data->description}}">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <input class="form-control" type="file" name="image">
                        </div>
                        <label>Status</label>
                        <select class="form-select mb-3" name="status">
                            <option selected>{{$data->status}}</option>
                            <option>True</option>
                            <option>False</option>
                        </select>
                        <button type="submit" class="btn btn-primary">Update Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Blank End -->




@endsection
