@extends('layouts.adminbase')

@section('title','Edit Announcement:'.$data->title)

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
            <h3>Edit Announcement: {{$data->title}}</h3>
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Announcement Elements</h6>
                <form action="{{route('admin.faq.update',['id'=>$data->id])}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Question</label>
                        <input type="text" class="form-control" name="question" value="{{$data->question}}">
                    </div>
                    <div class="mb-3" style="background-color: white">
                        <label for="exampleInputEmail1" class="form-label">Answer</label>
                        <textarea class="textarea" id="answer" name="answer">
                                {!! $data->answer !!}
                            </textarea>
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
