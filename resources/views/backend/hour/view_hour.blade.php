@extends('admin.admin_master')
@section('admin')
<link rel="stylesheet" href="{{ asset('backend/calendar/fullcalendar.css') }}">
{{-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"
integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.js"></script>
<link rel="stylesheet" href="{{ asset('backend/calendar/fullcalendar.css') }}">
<script type="text/javascript" src="{{ asset('backend/calendar/fullcalendar.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/calendar/script.js') }}"></script> --}}

 <div class="content-wrapper">
	<div class="container-full">
	<!-- Content Header (Page header) -->
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-12">
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">View Hours</h3>
							<a href="{{ route('customer.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Hours</a>	
						</div>
						<!-- /.box-header -->
						<div class="box-body">
		
					
							<div class="row">
								<div class="col-xl-9 col-lg-8 col-12">	
									<div id="calendar"></div>
								</div>
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


  @section('calendarScripts')

  <script src="{{ asset('backend/fullcalendar/lib/moment.min.js') }}"></script>
  <script src="{{ asset('backend/fullcalendar/fullcalendar.min.js') }}"></script>
  <script src="{{ asset('backend/fullcalendar/calendar.js') }}"></script>

  @stop
@endsection
