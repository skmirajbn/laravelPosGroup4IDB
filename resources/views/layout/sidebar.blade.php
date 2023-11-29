<div class="pb-3 sidebar pe-4">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="mx-4 mb-3 navbar-brand">
                    <h3 class="text-info"><i class="fa fa-user-edit me-2"></i>Super Shope</h3>
                </a>
                <div class="mb-4 d-flex align-items-center ms-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bottom-0 p-1 border border-2 border-white bg-success rounded-circle position-absolute end-0"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0 text-info">Bristy</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user me-2"></i>Customers</a>
                        <div class="bg-transparent border-0 dropdown-menu">
                            <a href="addcustomer" class="dropdown-item">Add Customers</a>
                            <a href="viewcustomer" class="dropdown-item">All Customers</a>
                           
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user me-2"></i>Products</a>
                        <div class="bg-transparent border-0 dropdown-menu">
                            <a href="{{ route('product') }}" class="dropdown-item">Add Products</a>
                            <a href="viewproducts" class="dropdown-item">All Products</a>
                           
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Categories</a>
                        <div class="bg-transparent border-0 dropdown-menu">
                            <a href="addcategory" class="dropdown-item">Add Categories</a>
                            <a href="viewcategory" class="dropdown-item">All Categories</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Brands</a>
                        <div class="bg-transparent border-0 dropdown-menu">
                            <a href="addbrands" class="dropdown-item">Add Brands</a>
                            <a href="viewbrands" class="dropdown-item">All Brands</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Units</a>
                        <div class="bg-transparent border-0 dropdown-menu">
                            <a href="addunits" class="dropdown-item">Add Units</a>
                            <a href="viewunits" class="dropdown-item">All Units</a>   
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Sales Order</a>
                        <div class="bg-transparent border-0 dropdown-menu">
                            <a href="salesorder" class="dropdown-item">Create Sales Order</a>
                            <a href="typography.html" class="dropdown-item">All Sales Orders</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Purchase  Order</a>
                        <div class="bg-transparent border-0 dropdown-menu">
                            <a href="button.html" class="dropdown-item">Create Purchase Order</a>
                            <a href="typography.html" class="dropdown-item">All Purchase  Orders</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Suppliers</a>
                        <div class="bg-transparent border-0 dropdown-menu">
                            <a href="addsupp" class="dropdown-item">Add Suppliers</a>
                            <a href="viewsupp" class="dropdown-item">All Suppliers</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Inventory</a>
                        <div class="bg-transparent border-0 dropdown-menu">
                            <a href="button.html" class="dropdown-item">Stock Products</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Users</a>
                        <div class="bg-transparent border-0 dropdown-menu">
                            <a href="button.html" class="dropdown-item">Add User</a>
                            <a href="button.html" class="dropdown-item">All User</a>
                        </div>
                    </div
                </div>
            </nav>
</div>