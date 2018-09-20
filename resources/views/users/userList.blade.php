@extends('users.main')
@section('content')
    <div class="right_col" role="main">
        <div class="right-content-part">
            <div class="col-sm-9 col-xs-12">
                <div class="row">
                    <h1>List Users</h1>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="row">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item"><a href="#">User</a></li>
                        <li class="breadcrumb-item active">User List</li>
                    </ol>
                </div>
            </div>
            @if(session('success_message'))
                <div id="success-msg" class="alert alert-success pull-left green-bg">
                    <?php echo session('success_message'); ?>
                 </div>
            @endif
            <div id="delete-msg">
            </div>
            <a href="{{url('admin/add-user')}}">
                <button class="btn btn-success pull-right add-user">
                    <i class="fa fa-plus"></i> Add User
                </button>
            </a>
            <div class="col-sm-12 col-xs-12">
                <div class="row">
                    <div class="panel panel-primary panel-primary-custom">
                        <div class="panel-heading">
                            <h3 class="panel-title">All Users</h3>
                        </div>
                        <div class="table-list-user">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Sr No.</th>
                                        <th scope="col">Full Name <i class="caret"></i></th>
                                        <th scope="col">Email <i class="fa fa-sort"></i></th>
                                        <th scope="col">Contact Number <i class="caret"></i> </th>
                                        <th scope="col">Address <i class="caret"></i></th>
                                        <th scope="col">Role <i class="caret"></i></th>
                                        <th scope="col">Actions <i class="caret"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @if(isset($users))
                                        @foreach($users as $user)
                                            <?php $userDetail = \App\UserMeta::where('user_id',$user['ID'])->first(); ?>
                                            <tr id="record-{{$user['ID']}}">
                                                <td>{{$i}}</td>
                                                <td>{{ucwords($userDetail['name'])}}</td>
                                                <td>{{$user['user_email']}}</td>
                                                <td>{{$userDetail['contact_number']}}</td>
                                                <td>{{$userDetail['address']}}</td>
                                                <td><span class="status-shown">{{$user['user_role']}}</span></td>
                                                <td>
                                                    <a href="{{url('admin/user/edit/'.$user['ID'])}}" data-toggle="tooltip" title="Edit User">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" onclick="deleteUser({{$user['ID']}});" data-toggle="tooltip" title="Delete User">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="7">No Records.</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @if(isset($users))
                        <div class="paginatio-row">
                            {{ $users->links() }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@stop
