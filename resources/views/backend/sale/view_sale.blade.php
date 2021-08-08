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
				  <h3 class="box-title">All Sales (under development)</h3>

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">Customer</th>
				<th>Category</th>
				<th>Remarks</th>
				<th>Created</th>
				<th width="15%">Price</th>
				<th>Order Date</th>
				<th>Delivery Date</th>
				<th>Invoiced</th>
				<th width="25%">Action</th>
				 
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Startech</td>
				<td>Support</td>
				<td>24st USB minnen - Erik Schölan</td>
				<td>Peter</td>
				<td>3 388.00</td>
				<td>11/11/11</td>
				<td>30/11/11</td>
				<td>No</td>
				<td>
<a href="#" class="btn btn-info">Edit</a>
<a href="#" class="btn btn-info">Show</a>
<a href="#" class="btn btn-info">Order</a>

				</td>
				 
			</tr>

			<tr>
				<td>Next IT</td>
				<td></td>
				<td>HP 470 G7 laptop - Per Ahrbom</td>
				<td>Ali</td>
				<td>4 188.00</td>
				<td>15/11/11</td>
				<td>31/11/11</td>
				<td>Yes</td>
				<td>
<a href="#" class="btn btn-info">Edit</a>
<a href="#" class="btn btn-info">Show</a>
<a href="#" class="btn btn-info">Order</a>

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
