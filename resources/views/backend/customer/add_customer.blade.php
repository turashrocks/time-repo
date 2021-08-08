@extends('admin.admin_master')
@section('admin')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add Customer (under development)</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	 <form method="post" action="{{ route('customer.store') }}">
	 	@csrf
					  <div class="row">
						<div class="col-12">	


<div class="row">
	{{-- <div class="col-md-6" >

		<div class="form-group">
	<h5>User Role <span class="text-danger">*</span></h5>
	<div class="controls">
	 <select name="role" id="role" required="" class="form-control">
			<option value="" selected="" disabled="">Select Role</option>
			<option value="Admin">Admin</option>
			<option value="Operator">User</option>
			 
		</select>
	 </div>
          </div>
	</div>  --}}
	<!-- End Col Md-6 -->

	<div class="col-md-6" >		
	<div class="form-group">
		<h5>Customer Name <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="name" class="form-control" required="">  </div>
		 
	</div>

	</div><!-- End Col Md-6 -->
	

</div> <!-- End Row -->



    <div class="row">
	<div class="col-md-6" >

		<div class="form-group">
		<h5>Category Name <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="category_name" class="form-control" required="">  </div>
		 
	</div>

	</div> <!-- End Col Md-6 -->

	<div class="col-md-12" >
	 
		<div class="form-group">
			<h5>Description <span class="text-danger">*</span></h5>
			<div class="controls">
		 <textarea type="email" name="email" class="form-control" required=""></textarea> 
			 
		</div>
	</div>
	

</div> <!-- End Row -->

 
<div class="row">
	<div class="col-md-12 mt-10">
							 
						<div class="text-xs-right">
	 <input type="submit" class="btn btn-rounded btn-info mb-5" value="Create">
						</div>
	</div>
</div>

					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>










 
	  
	  </div>
  </div>





@endsection
