<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('admin') }}" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          
        </div>
     
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div>
  

      <!-- SidebarSearch Form -->
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

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="{{ url('admin') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
        
             <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Members
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('all_members') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Members</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('active_members') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Members</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('#') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Memberships (Unlimited)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('#') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Memberships (Limited)</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users-class"></i>
              <p>
                Classes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('#') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Open Classes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('#') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Past Classes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('#') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Canceled Classes</p>
                </a>
              </li>
              
            </ul>
          </li>
             <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-invoice-dollar"></i>
              <p>
                Income
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('paid_invoice') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Paid Invoices</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('partiallypaid_invoice') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Partially Paid Invoices</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('unpaid_invoice') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>UnPaid Invoices</p>
                </a>
              </li>
              
            </ul>
          </li>
           
           
                        
              </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
   