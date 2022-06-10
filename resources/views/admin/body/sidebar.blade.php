  @php
 $prefix = Request::route()->getPrefix();
 $route = Route::current()->getName();

 @endphp

  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{asset('backend/images/logo-dark.png')}}" alt="">
						  <h3><b>Sunny</b> Admin</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li class="{{ ($route == 'dashboard')?'active':'' }}">
          <a href="{{route('dashboard')}}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
		
        <li class="treeview {{ ($prefix == '/users')?'active':'' }}">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Manage Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'user.view')?'active':'' }}"><a href="{{route('user.view')}}"><i class="ti-more"></i>View Users</a></li>
            <li class="{{ ($route == 'user.add')?'active':'' }}"><a href="{{route('user.add')}}"><i class="ti-more"></i>Add New User</a></li>
          </ul>
        </li> 
		  
        <li class="treeview  {{ ($prefix == '/Bank')?'active':'' }}">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Manage Banks</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'bank.view')?'active':'' }}"><a href="{{route('bank.view')}}"><i class="ti-more"></i>View Banks</a></li>
            <li class="{{ ($route == 'bank.add')?'active':'' }}" ><a href="{{route('bank.add')}}"><i class="ti-more"></i>Add New Bank</a></li>
          </ul>
        </li>

        <li class="treeview {{ ($prefix == '/Bank/Branch')?'active':'' }} " >
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Manage Bank Branches</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'bank.branch.view')?'active':'' }}"><a href="{{route('bank.branch.view')}}"><i class="ti-more"></i>View Branches</a></li>
            <li class="{{ ($route == 'bank.branch.add')?'active':'' }}"><a href="{{route('bank.branch.add')}}"><i class="ti-more"></i>Add New Branch</a></li>
          </ul>
        </li>
				  
		 
        <li class="header nav-small-cap">Employee Management</li>

        <li class="treeview {{ ($prefix == '/Employee')?'active':'' }}">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Employees</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li class="{{ ($route == 'employee.view')?'active':'' }}"><a href="{{route('employee.view')}}"><i class="ti-more"></i>View Employees</a></li>
            <li class="{{ ($route == 'employee.add')?'active':'' }}"><a href="{{route('employee.add')}}"><i class="ti-more"></i>Add New Employee</a></li>

          </ul>
        </li>


        <li class="header nav-small-cap">Reports Management</li>

        <li class="treeview {{ ($prefix == '/Reports')?'active':'' }}">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li class="{{ ($route == 'show.report')?'active':'' }}"><a href="{{route('show.report')}}"><i class="ti-more"></i>Bank Branches Report</a></li>
           {{-- <li class="{{ ($route == 'employee.add')?'active':'' }}"><a href="{{route('employee.add')}}"><i class="ti-more"></i>Add New Employee</a></li> --}}

          </ul>
        </li>
			  
		  
		  
		<li>
          <a href="auth_login.html">
            <i data-feather="lock"></i>
			<span>Log Out</span>
          </a>
        </li> 
        
      </ul>
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>