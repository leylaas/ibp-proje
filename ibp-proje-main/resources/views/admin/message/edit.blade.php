@extends('layouts.adminbase')

@section('title','Edit Product:'.$data->title)

@section('content')

@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection
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
    <div class="row vh-0 bg-white rounded align-items-start justify-content-center mx-0">
        <div class="col-sm-12 col-xl-12">
            <h3>Edit Product: {{$data->title}}</h3>
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Product Elements</h6>
                <form action="{{route('admin.product.update',['id'=>$data->id])}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label>Parent Category</label>
                        <select class="form-select mb-3" name="category_id" style="">
                            @foreach($datalist as $rs)
                                <option value="{{$rs->id}}"
                                        @if ($rs->id == $data->category_id) selected="selected" @endif >
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
                        <label for="exampleInputEmail1" class="form-label">Price</label>
                        <input type="number" step="any" class="form-control" name="price" value="{{$data->price}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Month</label>
                        <input type="number" step="any" class="form-control" name="months" value="{{$data->months}}">
                    </div>
                    <div class="mb-3" style="background-color: white">
                        <label for="exampleInputEmail1" class="form-label">Detail Information</label>
                        <textarea class="textarea" id="detail" name="detail">
                                {{$data->detail}}
                            </textarea>
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
@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $(function () {
            $('.textarea').summernote()
        })
    </script>
@endsection
