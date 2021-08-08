@extends('admin.admin_master')
@section('admin')

  <div class="content-wrapper">
	  <div class="container-full">

		<!-- Main content -->
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up hov-rs">
						<div class="box-body text-center">							
							<div class="icon bg-primary-light rounded w-60 h-60 mx-auto">
								<i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Customers</p>
								<h3 class="text-dark mb-0 font-weight-500">3400 <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
							</div>
						</div>
					</div>
				</div>
		
				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up hov-rs">
						<div class="box-body text-center">							
							<div class="icon bg-danger-light rounded w-60 h-60 mx-auto">
								<i class="text-danger mr-0 font-size-24 mdi mdi-phone-incoming"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Sales</p>
								<h3 class="text-dark mb-0 font-weight-500">1,460 <small class="text-danger"><i class="fa fa-caret-up"></i> -1.5%</small></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up hov-rs">
						<div class="box-body text-center">							
							<div class="icon bg-success-light rounded w-60 h-60 mx-auto">
								<i class="text-success mr-0 font-size-24 mdi mdi-phone-outgoing"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Hours</p>
								<h3 class="text-dark mb-0 font-weight-500">1,700 <small class="text-success"><i class="fa fa-caret-up"></i> +0.5%</small></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up hov-rs">
						<div class="box-body text-center">							
							<div class="icon bg-secondary-light rounded w-60 h-60 mx-auto">
								<i class="text-secondary mr-0 font-size-24 mdi mdi-chart-line"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Total Revune</p>
								<h3 class="text-dark mb-0 font-weight-500">$4,500k <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title align-items-start flex-column">
								New Customers
							</h4>
						</div>
						<div class="box-body">
							<div class="table-responsive">
								<table class="table no-border">
									<thead>
										<tr class="text-uppercase bg-lightest">
											<th style="min-width: 250px"><span class="text-dark">customers</span></th>
											<th style="min-width: 100px"><span class="text-dark">hours</span></th>
											<th style="min-width: 150px"><span class="text-dark">task</span></th>
											<th style="min-width: 130px"><span class="text-dark">status</span></th>
											<th style="min-width: 120px"></th>
										</tr>
									</thead>
									<tbody>
										<tr>										
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-1.jpg)"></div>
													</div>

													<div>
														<a href="#" class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
														<span class="text-mute d-block">Pharetra, Nulla , Nec, Aliquet</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-mute font-weight-500 d-block font-size-16">
													Paid
												</span>
												<span class="text-dark">
													6
												</span>
											</td>
											<td>
												<span class="text-mute font-weight-500 d-block font-size-16">
													Sophia
												</span>
												<span class="text-dark">
													Pharetra
												</span>
											</td>
											<td>
												<span class="badge badge-primary-light badge-lg">Approved</span>
											</td>
											<td class="text-right">
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
											</td>
										</tr>
										<tr>										
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-2.jpg)"></div>
													</div>

													<div>
														<a href="#" class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
														<span class="text-mute d-block">Pharetra, Nulla , Nec, Aliquet</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-mute font-weight-500 d-block font-size-16">
													Paid
												</span>
												<span class="text-dark">
													15
												</span>
											</td>
											<td>
												<span class="text-mute font-weight-500 d-block font-size-16">
													Sophia
												</span>
												<span class="text-dark">
													Pharetra
												</span>
											</td>
											<td>
												<span class="badge badge-warning-light badge-lg">In Progress</span>
											</td>
											<td class="text-right">
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
											</td>
										</tr>
										<tr>										
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-3.jpg)"></div>
													</div>

													<div>
														<a href="#" class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
														<span class="text-mute d-block">Pharetra, Nulla , Nec, Aliquet</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-mute font-weight-500 d-block font-size-16">
													Paid
												</span>
												<span class="text-dark">
													30
												</span>
											</td>
											<td>
												<span class="text-mute font-weight-500 d-block font-size-16">
													Sophia
												</span>
												<span class="text-dark">
													Pharetra
												</span>
											</td>
											<td>
												<span class="badge badge-success-light badge-lg">Success</span>
											</td>
											<td class="text-right">
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
											</td>
										</tr>
										<tr>										
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-4.jpg)"></div>
													</div>

													<div>
														<a href="#" class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
														<span class="text-mute d-block">Pharetra, Nulla , Nec, Aliquet</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-mute font-weight-500 d-block font-size-16">
													Paid
												</span>
												<span class="text-dark">
													10
												</span>
											</td>
											<td>
												<span class="text-mute font-weight-500 d-block font-size-16">
													Sophia
												</span>
												<span class="text-dark">
													Pharetra
												</span>
											</td>
											<td>
												<span class="badge badge-danger-light badge-lg">Rejected</span>
											</td>
											<td class="text-right">
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
											</td>
										</tr>
										<tr>										
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-5.jpg)"></div>
													</div>

													<div>
														<a href="#" class="text-dark font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
														<span class="text-mute d-block">Pharetra, Nulla , Nec, Aliquet</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-mute font-weight-500 d-block font-size-16">
													Paid
												</span>
												<span class="text-dark">
													40
												</span>
											</td>
											<td>
												<span class="text-mute font-weight-500 d-block font-size-16">
													Sophia
												</span>
												<span class="text-dark">
													Pharetra
												</span>
											</td>
											<td>
												<span class="badge badge-warning-light badge-lg">In Progress</span>
											</td>
											<td class="text-right">
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>  
				</div>
			</div>
		</section>
		<!-- /.content -->
		<!-- /.content -->
	  </div>
  </div>

  @endsection