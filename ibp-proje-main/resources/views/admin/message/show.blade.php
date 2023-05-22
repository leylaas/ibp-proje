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
                                    <th>Name & Surname</th>
                                    <td>{{$data->name}}</td>
                                </tr>
                                <tr>
                                    <th>Phone Number</th>
                                    <td>{{$data->phone}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$data->email}}</td>
                                </tr>
                                <tr>
                                    <th>Subject</th>
                                    <td>{{$data->subject}}</td>
                                </tr>
                                <tr>
                                    <th>Message</th>
                                    <td>{{$data->message}}</td>
                                </tr>
                                <tr>
                                    <th>Ip Number</th>
                                    <td>{{$data->ip}}</td>
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
                                        <form action="{{route('admin.message.update',['id'=>$data->id])}}" method="post">
                                            @csrf
                                            <textarea cols="100" id="note" name="note">{{$data->note}}</textarea>
                                            <button type="submit" class="btn btn-primary">Update Note</button>
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
