@extends('users.main')
@section('content')
    <div class="right_col" role="main">
        <div class="right-content-part">
            <div class="col-sm-9 col-xs-12">
                <div class="row">
                    <h1>Dashboard</h1>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="row">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <div class="panel panel-primary quick-links-clm panel-primary-custom">
                <div class="panel-heading">
                    <h3 class="panel-title">Quick Links</h3>
                </div>
                <div class="panel-body quick-menu-clm">
                    <ul>
                        <li><a href="{{url('admin/sales/pos')}}"><i class="fa fa-th"></i> POS</a></li>
                        <li><a href="{{url('admin/sales/sale-list')}}"><i class="fa fa-shopping-cart"></i> Sales</a></li>
                        <li><a href="{{url('admin/user-list')}}"><i class="fa fa-users"></i> Users</a></li>
                        <li><a href="{{url('admin/all-products')}}"><i class="fa fa-barcode"></i> Products</a></li>
                    </ul>
                </div>
            </div>
            <div class="full-width middle-content-part">
                <div class="col-sm-6 col-xs-12 padd-left-0 padd-r-r-0">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Title</h3>
                        </div>
                        <div class="panel-body">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 padd-right-0 padd-l-r-0">
                    <div class="panel panel-primary quick-links-clm">
                        <div class="panel-heading">
                            <h3 class="panel-title">Title</h3>
                        </div>
                        <div class="panel-body">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

