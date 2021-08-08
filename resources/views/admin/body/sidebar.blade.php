@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();

@endphp
<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="../images/logo-dark.png" alt="">
						  <h3><b>Developing</b> BASA</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
        <li class="{{ ($route == 'dashboard')?'active':'' }}" >
          <a href="{{ route('dashboard') }}">
            <i data-feather="pie-chart"></i>
			      <span>Dashboard</span>
          </a>
        </li>  
		
        @if(Auth::user()->role == 'Admin')

        <li class="treeview {{ ($prefix == '/users')?'active':'' }} " >
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Manage User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('user.view') }}"><i class="ti-more"></i>View User</a></li>
            <li><a href="{{ route('users.add') }}"><i class="ti-more"></i>Add User</a></li>
          </ul>		  
        </li> 
        @endif

        <li class="treeview {{ ($prefix == '/profile')?'active':'' }}">
          <a href="#">
            <i data-feather="grid"></i> <span>Manage Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li><a href="{{ route('profile.view') }}"><i class="ti-more"></i>Your Profile</a></li>
        <li><a href="{{ route('password.view') }}"><i class="ti-more"></i>Change Password</a></li>
            
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i data-feather="grid"></i> <span>Customer</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li><a href="{{ route('customer.view') }}"><i class="ti-more"></i>View Customer</a></li>
        <li><a href="{{ route('customer.add') }}"><i class="ti-more"></i>Add Customer</a></li>
            
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i data-feather="grid"></i> <span>Hour</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('hour.view') }}"><i class="ti-more"></i>Working Hour</a></li>
            <li><a href="{{ route('hour.add') }}"><i class="ti-more"></i>Create Hour</a></li>
            <li><a href="{{ route('hour.list') }}"><i class="ti-more"></i>List Hour</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i data-feather="grid"></i> <span>Sales</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('sale.add') }}"><i class="ti-more"></i>New Order</a></li>
            <li><a href="{{ route('sale.view') }}"><i class="ti-more"></i>List Item</a></li>
          </ul>
        </li>

        
{{-- <li class="treeview {{ ($prefix == '/setups')?'active':'' }}">
  <a href="#">
    <i data-feather="credit-card"></i> <span>Setup Management</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-right pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
 <li><a href="{{ route('fee.category.view') }}"><i class="ti-more"></i>Fee Category</a></li>
<li><a href="{{ route('fee.amount.view') }}"><i class="ti-more"></i>Fee Category Amount</a></li>
 <li><a href="{{ route('exam.type.view') }}"><i class="ti-more"></i>Exam Type</a></li>
 <li><a href="{{ route('school.subject.view') }}"><i class="ti-more"></i>School Subject</a></li>
 <li><a href="{{ route('assign.subject.view') }}"><i class="ti-more"></i>Assign Subject</a></li>
 <li><a href="{{ route('designation.view') }}"><i class="ti-more"></i>Designation </a></li>
 
    
  </ul>
</li> --}}


        <li class="" >
          <a href="{{ route('translation.view') }}">
            <i data-feather="pie-chart"></i>
			      <span>Translation</span>
          </a>
        </li>

        <li class="" >
          <a href="{{ route('schedule.view') }}"">
            <i data-feather="pie-chart"></i>
			      <span>Schedule</span>
          </a>
        </li>


        <li class="" >
          <a href="{{ route('backup.view') }}"">
            <i data-feather="pie-chart"></i>
			      <span>Backup</span>
          </a>
        </li>



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
