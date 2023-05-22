@extends('layouts.adminwindow')

@section('title','User Detail:'.$data->title)


@section('content')


    <!-- Blank Start -->
    <div class="container-fluid pt-4 px-4">
        <div class=" bg-white rounded align-items-sm-baseline mx-0">
            <div class="col-sm-12">
                <div class="bg-light rounded h-100 p-4">
                    <div class="col-sm-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">User Data</h6>
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
                                    <th>Email</th>
                                    <td>{{$data->email}}</td>
                                </tr>
                                <tr>
                                    <th>Roles</th>
                                    <td>
                                        @foreach($data->roles as $role)
                                            {{$role->name}}
                                            <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}"
                                               onclick="return confirm('Deleting! Are you sure?')">[x]</a>
                                        @endforeach
                                    </td>
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

                                    <th>Add Role to User</th>
                                    <td>
                                        <form action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post">
                                            @csrf
                                            <select name="role_id">
                                                @foreach($roles as $role)
                                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                                @endforeach
                                            </select>
                                            <button type="submit" class="btn btn-primary">Add Role</button>
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
