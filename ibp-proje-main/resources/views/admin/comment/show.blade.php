@extends('layouts.adminwindow')

@section('title','Show Message:'.$data->title)


@section('content')


    <!-- Blank Start -->
    <div class="container-fluid pt-4 px-4">
        <div class=" bg-white rounded align-items-sm-baseline mx-0">
            <div class="col-sm-12">
                <div class="bg-light rounded h-100 p-4">
                    <div class="col-sm-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Detail Message Data</h6>
                            <table class="table table-striped" style="margin-right: auto;margin-left: auto">
                                <tr>
                                    <th>Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th>Product</th>
                                    <td>{{$data->product->title}}</td>
                                </tr>
                                <tr>
                                    <th>Name & Surname</th>
                                    <td>{{$data->user->name}}</td>
                                </tr>
                                <tr>
                                    <th>Subject</th>
                                    <td>{{$data->subject}}</td>
                                </tr>
                                <tr>
                                    <th>Message</th>
                                    <td>{{$data->review}}</td>
                                </tr>
                                <tr>
                                    <th>Rate</th>
                                    <td>{{$data->rate}}</td>
                                </tr>
                                <tr>
                                    <th>Ip Number</th>
                                    <td>{{$data->IP}}</td>
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
                                    <th>Updated Data</th>
                                    <td>{{$data->updated_at}}</td>
                                </tr>
                                <tr>

                                    <th>Admin Note :</th>
                                    <td>
                                        <form action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post">
                                            @csrf
                                            <select name="status">
                                                <option selected>{{$data->status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>

                                            <button type="submit" class="btn btn-primary">Update Comment</button>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blank End -->
@endsection
