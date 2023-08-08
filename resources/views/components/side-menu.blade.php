<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="" class="brand-link elevation-4">
        <img src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SHOP NAME</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('assets/dist/img/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="" class="d-block">CASHIER NAME</a>
            </div>
        </div>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-collapse-hide-child nav-flat" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a id="dashboard" href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a id="pos" href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Point Of Sale
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a id="repair_center" href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Repair Center
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a id="products" href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Products & Categories
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a id="supplier" href="{{route('supplier.dashboard')}}" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Suppliers
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a id="customer" href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Customers
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a id="invoice" href="{{route('invoice.dashboard')}}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Invoice
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a id="company_repair" href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Company Repair
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a id="purchases" href="#" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Purchases
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a id="stocks" href="#" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Stocks
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a id="cashier" href="#" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Cashier
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a id="reports" href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Reports
                        </p>
                    </a>
                </li>
                <li id="settings" class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Settings
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul id="settings_submenu"  class="nav nav-treeview">
                        <li class="nav-item">
                            <a id="employee" href="{{route('settings.employee')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Employee</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="permission_role" href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Permission & Roles</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="user_login" href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User Login</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="shop" href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Shops</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header"></li>
            </ul>
        </nav>
    </div>
</aside>

