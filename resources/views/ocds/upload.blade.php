@extends('layouts.portal.app')

@section('content')
	<div class="row pt-2 pb-2">
		<div class="col-sm-9">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javaScript:void();">Admin</a></li>
				<li class="breadcrumb-item"><a href="javaScript:void();">OCDS</a></li>
				<li class="breadcrumb-item active" aria-current="page">Bulk Upload</li>
			</ol>
		</div>
	</div>

 	<div class="row">
		<div class="col-lg-12">
			@if(session()->has('message'))
				<div class="alert alert-success" role="alert" style="padding: 5px">
					<h4 class="alert-heading">Success!</h4>
					<p> {{ session()->get('message') }} </p>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			@endif
			<div class="card">
				<div class="card-body">
					
					<form method="post" action="{{ route('admin.tender.bulk.upload') }}" enctype="multipart/form-data">
						{{ csrf_field() }}

						<div class="form-group">
							<label for=""> Select OCDS Template File</label>
							<input class="form-control" type="file" name="ocds_template">
						</div>

						<div class="form-buttons-w">
							<button class="btn btn-primary" type="submit"> Submit</button>
							<a href="{{ URL::asset('assets/docs/ocds_template.xlsx') }}" class="btn btn-info pull-right" >
								Download OCDS Template
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection

