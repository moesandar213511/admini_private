@extends('admin.layouts.site_admin.site_admin_design')
@section('title','Admin | Member')
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
    Member Account
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
{{--                           <h5> Member List</h5>--}}
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
                                        Name
                                    </th>
                                    <th width="20%">
                                        Phone
                                    </th>
                                    <th width="30%">
                                        Address
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
            <div class="modal-dialog modal-md" style="max-width:800px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Create New Member</h4>
                        <button data-dismiss="modal" class="close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form enctype="multipart/form-data" class="md-form">
                            {{csrf_field()}}
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <img src="{{asset('images/default.jpg')}}" id="image" class="imagePreview img-thumbnail" style="width:200px!important">
                                        <label class="btn btn-primary upload_btn" style="width:200px;">
                                        Upload<input type="file" accept="image/png,image/jpeg,image/jpg" onchange="displaySelectedPhoto('upload_photo','image')" id="upload_photo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" required>
                                    </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text"  id="name" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                         <input type="phone" class="form-control" id="phone" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="position">Position</label>
                                         <input type="text" class="form-control" id="position" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="type"><b>Type</b></label><br>
                                       <select id="type" class="form-control" required>
                                            <option value="">-- Select Member Type--</option>
                                            <option value="special">Special</option>
                                            <option value="normal">Normal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" id="password" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="c_password">Confirm Password</label>
                                        <input type="password" id="c_password" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address
                                            "><b>Address</b></label><br>
                                        <textarea  rows="1" class="form-control" id="address" required></textarea>
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="education"><b>Education</b></label><br>
                                        <input type="text" id="education" class="form-control" required>
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="detail
                                            "><b>Detail</b></label><br>
                                        <textarea id="detail" rows="2" class="form-control" required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="fb_link
                                            "><b>Facebook</b></label><br>
                                        <input type="text" id="fb_link" class="form-control">
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="tw_link
                                            "><b>Twitter</b></label><br>
                                        <input type="text" id="tw_link" class="form-control">
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="in_link
                                            "><b>Instagram</b></label><br>
                                        <input type="text" id="in_link" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Create</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- edit modal -->
        <div class="modal fade" id="edit_modalBox">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Member Data</h4>
                        <button data-dismiss="modal" class="close">&times;</button>
                    </div>
                    <div class="modal-body">

                         <form>
                            {{csrf_field()}}
                            <input type="hidden" name="id" id="id_edit">
                              <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <img src="{{asset('images/default.jpg')}}" id="imgs" class="imagePreview img-thumbnail">
                                        <label class="btn btn-primary upload_btn">
                                        Upload<input type="file" accept="image/png,image/jpeg,image/jpg" onchange="displaySelectedPhoto('upload_img','imgs')" id="upload_img" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                                    </label>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="update_name">Name</label>
                                        <input type="text" class="form-control" id="update_name" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="update_type"><b>Type</b></label><br>
                                       <select id="update_type" class="form-control" required>
                                            <option value="">-- Select Member Type--</option>
                                            <option value="special">Special</option>
                                            <option value="normal">Normal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="update_phone">Phone</label>
                                         <input type="phone" class="form-control" id="update_phone" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="update_position">Position</label>
                                         <input type="text" class="form-control" id="update_position" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="update_address
                                            "><b>Address</b></label><br>
                                        <textarea rows="2" class="form-control" id="update_address" required></textarea>
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="update_education"><b>Education</b></label><br>
                                        <input type="text" id="update_education" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="update_detail"><b>Detail</b></label><br>
                                        <textarea id="update_detail" rows="2" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="update_fb_link
                                            "><b>Facebook</b></label><br>
                                        <input type="text" id="update_fb_link" class="form-control">
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="update_tw_link
                                            "><b>Twitter</b></label><br>
                                        <input type="text" id="update_tw_link" class="form-control">
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="update_in_link
                                            "><b>Instagram</b></label><br>
                                        <input type="text" id="update_in_link" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Update</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
