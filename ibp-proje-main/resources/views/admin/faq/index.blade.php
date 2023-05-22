@extends('layouts.adminbase')

@section('title','Announcement List')


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
        <div class="row vh-101 bg-white rounded align-items-start justify-content-center mx-0">
            <div class="col-sm-12 col-xl-12">
                <a href="{{route('admin.faq.create')}}" class="btn btn-secondary bg-primary m-3 "
                   style="width: 200px">Add Announcement</a>
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Announcement List</h6>
                    <table class="table table-bordered ">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Answer</th>
                            <th>Status</th>
                            <th style="width: 40px">Edit</th>
                            <th style="width: 40px">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->question}}</td>
                                <td>{!! $rs->answer !!}</td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}"
                                       class="btn btn-sm btn-primary">Edit</a></td>
                                <td><a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}"
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
