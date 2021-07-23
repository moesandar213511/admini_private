@extends('admin.layouts.site_admin.site_admin_design')
@section('title','Admin | Contact')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .imagePreview {
            width: 100%;
            height: 150px;
            background-position: center center;
            background:url('http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg');
            background-color:#fff;
            background-size: cover;
            background-repeat:no-repeat;
            display: inline-block;
            /* box-shadow:0px -3px 6px 2px rgba(0,0,0,0.2); */
        }
        .upload_btn
        {
            display:block;
            border-radius:10px;
            /* box-shadow:0px 4px 6px 2px rgba(0,0,0,0.2); */
            margin-bottom: 15px;
        }
        .imgUp
        {
            margin-bottom:15px;
        }
    </style>
@endsection

@section('nav_bar_text')
    Gallery
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <button type="button" name="button" class="btn btn-primary pull-right" data-keyboard="false" data-backdrop="static"></button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <form style="width: 100%;">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="photo_file" class="btn btn-primary">Photo</label>
                                            <input type="file" id="photo_file" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="author">Title</label>
                                            <input class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" class=" btn btn-primary" value="Upload">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <button type="button" name="button" class="btn btn-primary pull-right" data-target="#modalBox" data-toggle="modal" data-keyboard="false" data-backdrop="static"></button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="datatable" >
                                <thead class=" text-primary">
                                <th>
                                    No
                                </th>
                                <th>
                                    Photo
                                </th>
                                <th>
                                    Title
                                </th>

                                <th>Date</th>
                                <th>Action</th>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </div>



@endsection
