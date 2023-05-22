@extends('layouts.adminwindow')

@section('title','Show Detail')


@section('content')


    <!-- Blank Start -->
    <div class="container-fluid pt-4 px-4">
        <div class=" bg-white rounded align-items-sm-baseline mx-0">
            <div class="col-sm-12">
                <div class="bg-light rounded h-100 p-4">
                    <div class="col-sm-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Order Detail</h6>
                            <table class="table table-striped" style="margin-right: auto;margin-left: auto">
                                <tr>
                                    <th>Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th>User</th>
                                    <td>{{$data->user->name}}</td>
                                </tr>
                                <tr>
                                    <th>Name&Surname</th>
                                    <td>{{$data->name}}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{$data->phone}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$data->email}}</td>
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

                                    <th>Admin Note:
                                        <br><br><br>
                                        Status :
                                    </th>
                                    <td>
                                        <form action="{{route('admin.order.update',['id'=>$data->id])}}"
                                              method="post">
                                            @csrf
                                            <textarea name="note" cols="100">{{$data->note}}</textarea>
                                            <br>
                                            <select name="status">
                                                <option selected>{{$data->status}}</option>
                                                <option>Accepted</option>
                                                <option>Cancelled</option>
                                            </select>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                            <table class="table table-bordered ">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Month</th>
                                    <th>StartDate</th>
                                    <th>FinishDate</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>${{$rs->price}}</td>
                                        <td>{{$rs->months}}</td>
                                        <td>{{$data->StartDate}}</td>
                                        <td>{{$data->FinishDate}}</td>
                                        <td>
                                            @if ($rs->image)
                                                <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                            @endif
                                        </td>
                                        <td>{{$rs->status}}</td>
                                        <td><a href="{{route('admin.order.acceptorder',['id'=>$data->id])}}"
                                               class="btn btn-sm btn-primary"
                                               onclick="return confirm('Accepting! Are you sure?')">Accept</a>
                                            &#160;
                                            <a href="{{route('admin.order.cancelorder',['id'=>$data->id])}}"
                                               class="btn btn-sm btn-danger"
                                               onclick="return confirm('Cancelling! Are you sure?')">Cancel</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blank End -->
@endsection
