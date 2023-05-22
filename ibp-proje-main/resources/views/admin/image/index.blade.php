@extends('layouts.adminwindow')

@section('title','Product Image Gallery')


@section('content')
    <h2>{{$product->title}}</h2>
    <form action="{{route('admin.image.store',['pid'=>$product->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <hr>
        <div class="input-group">
            <input type="text" class="form-control" name="title" placeholder="Title">
            <input class="form-control" type="file" name="image">
            <div class="input-group-append">
                <input type="submit" class="input-group-text" value="Upload">
            </div>
        </div>
    </form>

    <!-- Blank Start -->
    <div class="bg-light rounded h-100 p-2">
        <br>
        <h6 class="mb-4">Product Image List</h6>
        <table class="table table-bordered ">
            <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Image</th>
                <th style="width: 40px">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($images as $rs)
                <tr>
                    <td>{{$rs->id}}</td>
                    <td>{{$rs->title}}</td>
                    <td>
                        @if ($rs->image)
                            <img src="{{Storage::url($rs->image)}}" style="height: 100px">
                        @endif
                    </td>
                    <td><a href="{{route('admin.image.destroy',['pid'=>$product->id,'id'=>$rs->id])}}"
                           class="btn btn-sm btn-danger"
                           onclick="return confirm('Deleting! Are you sure?')">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- Blank End -->
@endsection
