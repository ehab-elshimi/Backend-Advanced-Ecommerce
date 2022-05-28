@extends('admin.admin_master')
@section('admin')

<div class="container-full">

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">
		<div class="icon bg-primary-light rounded w-60 h-60">
			<i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
		</div>
		<div>
			<p class="text-mute mt-20 mb-0 font-size-16">Today's Sale</p>
			<h3 class="text-white mb-0 font-weight-500"><small class="text-success"><i class="fa fa-caret-up"></i> Usd</small></h3>
		</div>
	</div>
</div>
</div>
<div class="col-xl-3 col-6">
<div class="box overflow-hidden pull-up">
	<div class="box-body">
		<div class="icon bg-warning-light rounded w-60 h-60">
			<i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
		</div>
		<div>
			<p class="text-mute mt-20 mb-0 font-size-16">Monthly Sale </p>
			<h3 class="text-white mb-0 font-weight-500"><small class="text-success"><i class="fa fa-caret-up"></i> Usd</small></h3>
		</div>
	</div>
</div>
</div>
<div class="col-xl-3 col-6">
<div class="box overflow-hidden pull-up">
	<div class="box-body">
		<div class="icon bg-info-light rounded w-60 h-60">
			<i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
		</div>
		<div>
			<p class="text-mute mt-20 mb-0 font-size-16">Yearly Sale </p>
			<h3 class="text-white mb-0 font-weight-500"><small class="text-danger"><i class="fa fa-caret-down"></i> Usd</small></h3>
		</div>
	</div>
</div>
</div>
<div class="col-xl-3 col-6">
<div class="box overflow-hidden pull-up">
	<div class="box-body">
		<div class="icon bg-danger-light rounded w-60 h-60">
			<i class="text-danger mr-0 font-size-24 mdi mdi-phone-incoming"></i>
		</div>
		<div>
			<p class="text-mute mt-20 mb-0 font-size-16">Pending Orders </p>
			<h3 class="text-white mb-0 font-weight-500"><small class="text-danger"><i class="fa fa-caret-up"></i> Order </small></h3>
		</div>
	</div>
</div>
</div>


<div class="col-12">
<div class="box">
	<div class="box-header">
		<h4 class="box-title align-items-start flex-column">
		 Recent All Orders

		</h4>
	</div>


	<div class="box-body">
		<div class="table-responsive">
			<table class="table no-border">
				<thead>

<tr class="text-uppercase bg-lightest">
	<th style="min-width: 250px"><span class="text-white">Date</span></th>
	<th style="min-width: 100px"><span class="text-fade">Invoice</span></th>
	<th style="min-width: 100px"><span class="text-fade">Amount</span></th>
	<th style="min-width: 150px"><span class="text-fade">Payment</span></th>
	<th style="min-width: 130px"><span class="text-fade">Status</span></th>
	<th style="min-width: 120px"><span class="text-fade">Process</span> </th>
</tr>
				</thead>

			</table>
		</div>
	</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>

@endsection
