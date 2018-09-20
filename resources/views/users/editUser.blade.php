@extends('users.main')
@section('content')
    <div class="right_col" role="main">
        <div class="right-content-part">
            <div class="col-sm-8 col-xs-12 col-sm-offset-2">
                <div class="col-sm-9 col-xs-12">
                    <div class="row">
                        <h1>Edit User</h1>
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="panel panel-primary panel-primary-custom">
                            <div class="panel-heading">
                                <h3 class="panel-title">Please fill in the information below</h3>
                            </div>
                            <div class="panel-body">
                                <form id="add-user-form" method="post" action="{{url('admin/updateUser')}}">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                    <input type="hidden" name="id" value="{{\Illuminate\Support\Facades\Crypt::encrypt($user->ID)}}"/>
                                    <div class="col-sm-12 col-xs-12 margin-bottom-10">
                                        <div class="form-group">
                                            <label>Full Name <span class="mandatory-field-icon">*</span></label>
                                            <input type="text" name="name" placeholder="Enter First Name" value="{{$userDetail['name']}}" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-sm-6 col-xs-12 margin-bottom-10">
                                        <div class="form-group">
                                            <label>Email <span class="mandatory-field-icon">*</span></label>
                                            <input type="email" name="email" placeholder="Enter Email" value="{{$user->user_email}}" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-sm-6 col-xs-12 margin-bottom-10">
                                        <div class="form-group">
                                            <label>Contact Number <span class="mandatory-field-icon">*</span></label>
                                            <input type="tel" name="contact_number" placeholder="Enter Contact Number" value="{{$userDetail['contact_number']}}" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 margin-bottom-10">
                                        <div class="form-group">
                                            <label>Address <span class="mandatory-field-icon">*</span></label>
                                            <textarea name="address" placeholder="Enter Address..." class="form-control" autocomplete="off">{{$userDetail['address']}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 ">
                                        <div class="form-group">
                                            <input type="submit" value="Update User" class="pull-right"/>
                                            <a href="{{url('admin/user-list')}}">
                                                <input type="button" value="Cancel" class="btn pull-right"/>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-xs-12">
                <div class="row">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item"><a href="#">User</a></li>
                        <li class="breadcrumb-item active">Add User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@stop

