@extends('admin.admin_master')
@section('admin')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
			 

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Customer List (under development)</h3>
	<a href="{{ route('customer.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Customer</a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">SL</th>
				<th>Name</th>
				<th>Company Name</th>
				<th>Description</th>
				<th width="25%">Action</th>
				 
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Peter</td>
				<td>Express Soft</td>
				<td>Tomorrows Technology</td>
				<td>
<a href="#" class="btn btn-info">Edit</a>
<a href="#" class="btn btn-danger" id="delete">Delete</a>

				</td>
				 
			</tr>

			<tr>
				<td>2</td>
				<td>Jhon</td>
				<td>ABC Technologies</td>
				<td>Hardware and Software Services</td>
				<td>
<a href="#" class="btn btn-info">Edit</a>
<a href="#" class="btn btn-danger" id="delete">Delete</a>

				</td>
				 
			</tr>
							 
						</tbody>
						<tfoot>
							 
						</tfoot>
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			       
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>





@endsection
