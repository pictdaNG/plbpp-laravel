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

		.download-btn {
			color: #ffffff;
			background-color: #306c49;
		}

		.download-btn:hover {
			color: #306c49;
			background-color: #ffffff;
		}
	</style>
@endsection



@section('content')
	<section class="body container-fluid">
		<div class="row">
			<!-- <div class="col-md-12 col-lg-3 ">
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
			</div> -->
			<div class="col-md-12 col-lg-12">
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
											{{ count($tenders) }}
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
											₦ {{ number_format((int)$sum, 2) }}
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
											₦ {{ number_format((int)$max, 2) }}
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
											₦ {{ number_format((int)$min, 2) }}
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
		<div class="row el-paddingTop10" uk-filter="target: .js-filter">
			<div class="col-md-12 col-lg-3 ">
				<div class="row">
					<div class="col">

					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-12 ">
				<div class="row">
					<div class="col">
						<h3>PROJECTS</h3>
					</div>
				</div>
				<div class="uk-overflow-auto" >
					<table id="example" class="uk-table uk-table-hover uk-table-striped js-filter" style="width:100%">
						<thead class="el-tableHead">
							<tr>
              <th>OCID</th>
								<th>Project Title</th>
                <th>Description</th>
                  <th>MDA</th>
                  <th>Budget Amount</th>
                  <th>Project Status</th>
                  <th>Date Awarded</th>
							</tr>
						</thead>
						<tbody class="">
							@foreach($tenders as $tender)
								<tr>
                <td>{{ $tender->ocid }}</td>
									<td>{{ $tender->title }}</td>
                  <td>{{ $tender->description }}</td>
                  <td>{{ $tender->mda->title }}</td>
                  <td>₦ {{ number_format($tender->tender_value, 2) }}</td>
                  <td>{{ $tender->status }}</td>
                  <td>{{ $tender->award_date }}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>

				<div class="row">
					<div class="col" style="margin-top: 30px; margin-bottom:30px;">
						<a href="{{route('ocds.export')}}" class="uk-button uk-button-default uk-button-small download-btn" style="margin-right: 30px;">
							Download OCDS Document
						</a>
					</div>
				</div>

				<div class="row">
					<div class="col">
						<h3>CHART SUMMARY</h3>
					</div>
				</div>
				<div class="row" style="display:none">
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
