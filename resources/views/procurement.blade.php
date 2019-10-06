@extends('layouts.master')

@section('title')
  Procurement | Welcome to Plateau State Bureau of Public procurement
@endsection

@section('procurement')
	uk-active
@endsection

@section('styles')
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.uikit.min.css">
	<style type="text/css">
		.portal-btn {
			color: #ffffff;
		}

		.portal-btn:hover {
			color: #306c49;
			background-color: #ffffff;
		}
	</style>
@endsection

@section('scripts')	
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.uikit.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable();
		});
	</script>
@endsection

@section('content')
	<section class="body container-fluid">
		<div class="row">
			<div class="col-md-12 col-lg-3 ">
				<div class="el-banner">
					<div class="row">
						<div class="col el-center el-flex align-items-center">
							<div class="el-leftHolder">
								<img src="./assets/img/platStet.png" alt="" />
								<h3>Plateau State Open Contracting Portal</h3>
								<a href="http://15.188.63.156/login" target="_blank" class="uk-button uk-button-default uk-button-small portal-btn" style="margin-right: 30px;">Portal</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-9">
				<div class="el-cards-holder">
					<div class="row">
						<div class="col">
							<h3>SUMMARY</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12">
							<div class="el-card el-flex">
								<div class="col-md-4  el-bgColorGreen  el-center">
									<img src="./assets/img/abacus.png" alt="" />
								</div>
								<div class="col-md-8 el-flex align-items-center">
									<div class="el-content-holder">
										<p class="el-cardTitle">
											TOTAL NUMBER OF PROJECTS
										</p>
										<p class="el-cardFigure">
											{{ count($procurements) }}
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12">
							<div class="el-card el-flex">
								<div class="col-md-4  el-bgColorRed  el-center">
									<img src="./assets/img/cashbox.png" alt="" />
								</div>
								<div class="col-md-8 el-flex align-items-center">
									<div class="el-content-holder">
										<p class="el-cardTitle">
											TOTAL SUM OF PROJECTS
										</p>
										<p class="el-cardFigure">
											₦ {{ number_format($sum, 2) }}
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12">
							<div class="el-card el-flex">
								<div class="col-md-4  el-bgColorYellow el-center">
									<img src="./assets/img/graph.png" alt="" />
								</div>
								<div class="col-md-8 el-flex align-items-center">
									<div class="el-content-holder">
										<p class="el-cardTitle">
											HIGHEST CONTRACT AMOUNT
										</p>
										<p class="el-cardFigure">
											₦ {{ number_format($max, 2) }}
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12">
							<div class="el-card el-flex">
								<div class="col-md-4  el-bgColorGreen el-center">
									<img src="./assets/img/graph(2).png" alt="" />
								</div>
								<div class="col-md-8 el-flex align-items-center">
									<div class="el-content-holder">
										<p class="el-cardTitle">
											LOWEST CONTRACT AMOUNT
										</p>
										<p class="el-cardFigure">
											₦ {{ number_format($min, 2) }}
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="container-fluid body ">
		<div class="row el-paddingTop30" uk-filter="target: .js-filter">
			<div class="col-md-12 col-lg-3 ">
				<div class="row">
					<div class="col">
						{{-- <h3>FILTER PROJECTS</h3> --}}
						{{-- <div class="uk-margin uk-card uk-card-body uk-card-default">
							<label class="uk-form-label">
								<h5>FILTER BY MINISTRIES, DEPARTMENTS &amp; AGENCIES</h5>
							</label>
							<div class="uk-form-controls" uk-filter="target: .js-filter">
								<select class="uk-select">
									@foreach($procurements as $pro)                                        
										<option uk-filter-control="[data-tags*='{{ $pro->procuring_entity }}']">
											{{ $pro->procuring_entity }}
										</option>
									@endforeach                                    
								</select>
							</div>
						</div> --}}
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-9 ">
				<div class="row">
					<div class="col">
						<h3>PROJECTS</h3>
					</div>
				</div>
				<div class="uk-overflow-auto" >
					<table id="example" class="uk-table uk-table-hover uk-table-striped js-filter" style="width:100%">
						<thead class="el-tableHead">
							<tr>
								<th>Project Title</th>
								<th>Cost</th>
								<th>Budget Amount</th>                            
								<th>Rationale</th>
								<th>Location</th>
								<th>Procurement Category</th>
								<th>Procurement Method Used</th>
								<th>Date of Advert</th>
								<th>Date Advert Closed</th>
								<th>Award Criteria</th>
								<th>Completion Date</th>
								<th>Contract BOQ</th>
								<th>Date Awarded</th>
								<th>Date Signed</th>
								<th>Commencement Date</th>
								<th>Contract Duration</th>
								<th>Contractor Name</th>
								<th>Contractor Address</th>
								<th>Contractor Phone</th>
								<th>Contractor Email</th>
								<th>Project Funding</th>
								<th>Project Status</th>
								<th>Project Year</th>
							</tr>
						</thead>
						<tbody class="">
							@foreach($ocds_records as $pro)
								<tr data-tags="{{ $pro->procuring_entity }}">
									<td>{{ $pro->project }}</td>
									<td>₦ {{ $pro->cost }}</td>
									<td>₦ {{ $pro->budget_amount }}</td>
									<td>{{ $pro->rationale }}</td>
									<td>{{ $pro->location }}</td>
									<td>{{ $pro->procurement_category }}</td>
									<td>{{ $pro->procurement_method_used }}</td>
									<td>{{ $pro->date_of_advert }}</td>
									<td>{{ $pro->date_of_advert_close }}</td>
									<td>{{ $pro->award_criteria }}</td>
									<td>{{ $pro->final_date_of_completion }}</td>
									<td>{{ $pro->contract_boq }}</td>
									<td>{{ $pro->date_of_award }}</td>
									<td>{{ $pro->date_of_signing_of_contract }}</td>
									<td>{{ $pro->commencement_date }}</td>
									<td>{{ $pro->contract_duration }}</td>
									<td>{{ $pro->name_of_contractor }}</td>
									<td>{{ $pro->address_of_contractor }}</td>
									<td>{{ $pro->contractor_phone }}</td>
									<td>{{ $pro->contractor_email }}</td>
									<td>₦ {{ $pro->project_funding }}</td>
									<td>{{ $pro->project_status }}</td>
									<td>{{ $pro->project_year }}</td>
								</tr>
							@endforeach                        
						</tbody>
					</table>
				</div>
				<div class="row">
					<div class="col">
						<h3>CHART SUMMARY</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12 col-sm-12">
						<canvas height="300" id="myChart"></canvas>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12">
						<canvas height="300" id="myChart2"></canvas>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="container-fluid body"></section>
	@endsection