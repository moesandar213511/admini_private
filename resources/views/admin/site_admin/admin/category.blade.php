@extends('admin.layouts.site_admin.site_admin_design')
@section('title','Admin | Sub Category')
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
    Category
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <button type="button" name="button" class="btn btn-success pull-right" data-target="#modalBox" data-toggle="modal" data-keyboard="false" data-backdrop="static">Add</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="datatable">
                                    <thead class="text-primary">
                                    <th width="8%">
                                        No
                                    </th>
                                    <th width="18%">
                                        Logo
                                    </th>
                                    <th width="18%">
                                        Name
                                    </th>
                                    <th width="30%">Action</th>
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

        {{-- insert_model --}}
        <div class="modal fade" id="modalBox">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Create New Category</h4>
                        <button data-dismiss="modal" class="close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form id="insert_sub_category" enctype="multipart/form-data" class="md-form">
                            {{csrf_field()}}
                              <div class="row">
                                <div class="col-sm-4 imgUp">
                                    <img src="{{asset('images/default.jpg')}}" id="image" class="imagePreview img-thumbnail">
                                    <label class="btn btn-primary upload_btn">
                                        Upload<input type="file" accept="image/png,image/jpeg,image/jpg" onchange="displaySelectedPhoto('upload_photo','image')" id="upload_photo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" required>
                                    </label>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" id="name" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right" id="btn_submit">Create</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- edit modal -->
        <div class="modal fade" id="edit_modalBox">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Sub Category</h4>
                        <button data-dismiss="modal" class="close">&times;</button>
                    </div>
                    <div class="modal-body">


                        <form id="update_data">
                            {{csrf_field()}}
                            <div class="row">
                                <input type="hidden" name="id" class="form-control" id="id_edit" value="">
                                <div class="col-sm-4 imgUp">
                                    <img src="{{asset('images/default.jpg')}}" id="imgs" class="imagePreview img-thumbnail">
                                    <label class="btn btn-primary upload_btn">
                                        Upload<input type="file" accept="image/png,image/jpeg,image/jpg" onchange="displaySelectedPhoto('update_photo','imgs')" id="update_photo"  class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                                    </label>
                                </div>
                                <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="update_name">Name</label>
                                                    <input type="text" id="update_name" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>

                            <button class=" btn btn-primary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary pull-right" id="update_btn">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

