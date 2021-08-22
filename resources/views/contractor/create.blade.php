@extends('layouts.portal.app')
@section('content')

<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <!-- <h4 class="page-title">Form Validation</h4> -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Admin</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Contractor</a></li>
            <li class="breadcrumb-item active" aria-current="page">Registration</li>
        </ol>
    </div>
 </div>

  <div class="row">
    <div class="col-lg-10">
      <div class="card">
        <div class="card-body">
          <form id="change-password" action="{{ route('admin.contractor.store')}}"  method="post">
          {{csrf_field()}}
              <h4 class="form-header text-uppercase">
              <i class="fa fa-user-circle-o"></i>
              Register Contractor
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Enter Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-11" name="name" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Phone No.</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-12" name="phone_no" required >
                </div>
              </div>

              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="input-13" name="email" required >
                </div>
              </div>
              <div class="form-group row">
                <label for="input-2" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-14" name="address" required >
                </div>
              </div>
              <div class="form-group row">
                <label for="input-2" class="col-sm-2 col-form-label">State</label>
                <div class="col-sm-10">
                    <select class="form-control" name="state">
                    <option>-- Select State -- </option>
                    <option value="Benue">Benue</option>
                    <option value="Plateau">Plateau</option>
                    <option value="Abuja">Abuja</option>
                    <option value="Kano">Kano</option>
                    <option value="Kaduna">Kaduna</option>

                  </select>
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

