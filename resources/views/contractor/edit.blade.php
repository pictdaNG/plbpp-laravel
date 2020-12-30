@extends('layouts.portal.app')

@section('content')
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <!-- <h4 class="page-title">Form Validation</h4> -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Admin</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Contractor</a></li>
            <li class="breadcrumb-item active" aria-current="page">Update</li>
        </ol>
    </div>
 </div>

  <div class="row">
    <div class="col-lg-10">
      <div class="card">
        <div class="card-body">
          <form id="change-password" action="{{ route('admin.contractor.update', $contractor->id)}}"  method="post">
          <form method="post" action="{{ route('admin.contractor.update', $contractor->id) }}">
            {{ csrf_field() }}
              <h4 class="form-header text-uppercase">
              <i class="fa fa-user-circle-o"></i>
              Update Contractor
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Enter Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-11" name="name" required value="{{ $contractor->name}}">
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Phone No.</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-12" name="phone_no" required value="{{ $contractor->phone_no }}">
                </div>
              </div>

              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="input-13" name="email" required value="{{ $contractor->email }}">
                </div>
              </div>
              <div class="form-group row">
              <label for="input-2" class="col-sm-2 col-form-label">Address</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-14" name="address" required value="{{ $contractor->address }}">
              </div>
              </div>
              <div class="form-footer">
                  <button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                  <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div><!--End Row-->
@endsection

