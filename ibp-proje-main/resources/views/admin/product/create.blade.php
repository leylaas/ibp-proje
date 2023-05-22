@extends('layouts.adminbase')

@section('title','Add Product')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
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
        <div class="bg-white rounded align-items-start justify-content-center mx-0">
            <div class="col-sm-12 col-xl-12">
                <h3>Add Product</h3>
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Product Elements</h6>
                    <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Parent Product</label>
                            <select class="form-select mb-3" name="category_id" style="">
                                @foreach($data as $rs)
                                    <option
                                        value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Title">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Keywords</label>
                            <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" placeholder="Description">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Price</label>
                            <input type="number" step="any" class="form-control" name="price" value="0">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Month</label>
                            <input type="number" step="any" class="form-control" name="months" value="0">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Detail Information</label>
                            <textarea class="form-control" id="detail" name="detail">

                            </textarea>
                            <script>
                                ClassicEditor
                                    .create(document.querySelector('#detail'))
                                    .then(editor => {
                                        console.log(editor);
                                    })
                                    .catch(error => {
                                        console.error(error);
                                    });
                            </script>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <input class="form-control" type="file" name="image">
                        </div>
                        <label>Status</label>
                        <select class="form-select mb-3" name="status">
                            <option>True</option>
                            <option>False</option>
                        </select>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Blank End -->
@endsection
