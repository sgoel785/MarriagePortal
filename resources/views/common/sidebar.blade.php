<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <ul class="nav side-menu">
            <li>
                <a href="{{url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="{{url('admin/sales/pos')}}"><i class="fa fa-th"></i> POS</a>
            </li>
            <li>
                <a>
                    <i class="fa fa-barcode"></i> Products
                    <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                    <li><a href="{{url('admin/add-product')}}">Add Product</a></li>
                    <li><a href="{{url('admin/all-products')}}">Products List</a></li>
                </ul>
            </li>
            <li>
                <a>
                    <i class="fa fa-shopping-cart"></i> Sales
                    <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                    <li><a href="{{url('admin/sales/sale-list')}}">List Sales</a></li>
                    <li><a href="{{url('admin/sales/invoice')}}">Billing</a></li>
                </ul>
            </li>
            <li>
                <a>
                    <i class="fa fa-users"></i> Users
                    <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                    <li><a href="{{url('admin/add-user')}}">Add User</a></li>
                    <li><a href="{{url('admin/user-list')}}">List Users</a></li>
                </ul>
            </li>
            <li>
                <a href="{{url('admin/pos/repair-tracking')}}"><i class="fa fa-signal"></i> Repair Tracking</a>
            </li>
            <li>
                <a>
                    <i class="fa fa-money"></i> Invoices
                    <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                    <li><a href="{{url('admin/sale-billing')}}">Sale Invoice</a></li>
                    <li><a href="{{url('admin/service-billing')}}">Service Invoice</a></li>
                </ul>
            </li>
            <li>
                <a>
                    <i class="fa fa-bar-chart-o"></i> Reports
                    <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                    <li><a href="{{url('admin/sales/report/daily-sales')}}">Daily Sales</a></li>
                    <li><a href="{{url('admin/sales/report/monthly-sales')}}">Monthly Sales</a></li>
                    <li><a href="{{url('admin/sales/report/sales-report')}}">Sales Report</a></li>
                </ul>
            </li>
            <li><a href="{{url('logout')}}"><i class="fa fa-power-off"></i> Logout</a>
            </li>
        </ul>
    </div>
</div>
