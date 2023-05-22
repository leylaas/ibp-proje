@extends('layouts.adminbase')

@section('title','Settings')

@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
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
    <form action="{{route('admin.setting.update')}}" method="post"
          enctype="multipart/form-data">
        @csrf
        <div class="container-fluid pt-4 px-4">
            <div class="row vh-101 bg-white rounded align-items-start justify-content-center mx-0">
                <div class="col-sm-12 col-xl-12">
                    <div class="bg-light rounded h-auto p-4">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-general-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-general" type="button" role="tab"
                                        aria-controls="nav-general"
                                        aria-selected="true">General
                                </button>
                                <button class="nav-link" id="nav-smtpemail-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-smtpemail" type="button" role="tab"
                                        aria-controls="nav-smtpemail" aria-selected="false">Smtp Email
                                </button>
                                <button class="nav-link" id="nav-socialmedia-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-socialmedia" type="button" role="tab"
                                        aria-controls="nav-socialmedia" aria-selected="false">Social Media
                                </button>
                                <button class="nav-link" id="nav-aboutus-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-aboutus" type="button" role="tab"
                                        aria-controls="nav-aboutus"
                                        aria-selected="true">About Us
                                </button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-contact" type="button" role="tab"
                                        aria-controls="nav-contact"
                                        aria-selected="true">Contact Page
                                </button>
                                <button class="nav-link" id="nav-references-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-references" type="button" role="tab"
                                        aria-controls="nav-references"
                                        aria-selected="true">References
                                </button>
                            </div>
                        </nav>
                        <div class="tab-content pt-3" id="nav-tabContent">
                            <div class="tab-pane fade show active " id="nav-general" role="tabpanel"
                                 aria-labelledby="nav-general-tab">
                                <input type="hidden" id="id" class="form-control" name="id" value="{{$data->id}}">
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
                                    <input type="text" class="form-control" name="description"
                                           value="{{$data->description}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Company</label>
                                    <input type="text" class="form-control" name="company" value="{{$data->company}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Address</label>
                                    <input type="text" class="form-control" name="address" value="{{$data->address}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{$data->phone}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{$data->email}}">
                                </div>
                                <div class="mb-3">
                                    <label>Status</label>
                                    <select class="form-select mb-3" name="status">
                                        <option selected>{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Icon</label>
                                    <input class="form-control" type="file" name="icon">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-smtpemail" role="tabpanel"
                                 aria-labelledby="nav-smtpemail-tab">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Smtpserver</label>
                                    <input type="text" class="form-control" name="smtpserver"
                                           value="{{$data->smtpserver}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Smtpemail</label>
                                    <input type="text" class="form-control" name="smtpemail"
                                           value="{{$data->smtpemail}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Smtppassword</label>
                                    <input type="text" class="form-control" name="smtppassword"
                                           value="{{$data->smtppassword}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Smtpport</label>
                                    <input type="number" class="form-control" name="smtpport"
                                           value="{{$data->smtpport}}">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-socialmedia" role="tabpanel"
                                 aria-labelledby="nav-socialmedia-tab">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Fax</label>
                                    <input type="text" class="form-control" name="fax" value="{{$data->fax}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" value="{{$data->facebook}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Instagram</label>
                                    <input type="text" class="form-control" name="instagram"
                                           value="{{$data->instagram}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Twitter</label>
                                    <input type="text" class="form-control" name="twitter" value="{{$data->twitter}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Youtube</label>
                                    <input type="text" class="form-control" name="youtube" value="{{$data->youtube}}">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-aboutus" role="tabpanel"
                                 aria-labelledby="nav-aboutus-tab">
                                <div class="mb-3" style="background-color: white">
                                    <label for="exampleInputEmail1" class="form-label p-1 ">About us</label>
                                    <textarea class="textarea" id="aboutus" name="aboutus">
                                          {{$data->aboutus}}
                                  </textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                 aria-labelledby="nav-contact-tab">
                                <div class="mb-3" style="background-color: white">
                                    <label for="exampleInputEmail1" class="form-label p-1 ">Contact</label>
                                    <textarea class="textarea" id="contact" name="contact">
                                          {{$data->contact}}
                                  </textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-references" role="tabpanel"
                                 aria-labelledby="nav-references-tab">
                                <div class="mb-3" style="background-color: white">
                                    <label for="exampleInputEmail1" class="form-label p-1 ">References</label>
                                    <textarea class="textarea" id="references" name="references">
                                          {{$data->references}}
                                  </textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Setting <br></button>
                    </div>
                </div>
            </div>
        </div>
    </form>
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
