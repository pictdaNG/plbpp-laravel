@extends('layouts.portal.app')

@section('content')
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <!-- <h4 class="page-title">Form Validation</h4> -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Admin</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">MDA</a></li>
            <li class="breadcrumb-item active" aria-current="page">Update</li>
        </ol>
    </div>
 </div>

  <div class="row">
    <div class="col-lg-10">
      <div class="card">
        <div class="card-body">
          <form id="change-password" action="{{ route('admin.mda.update', $mda->id)}}"  method="post">
          <form method="post" action="{{ route('admin.mda.update', $mda->id) }}">
            {{ csrf_field() }}
              <h4 class="form-header text-uppercase">
              <i class="fa fa-user-circle-o"></i>
              Update MDA
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Enter Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-11" name="title" required value="{{ $mda->title }}">
                </div>
              </div>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">MDA Code</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-12" name="mda_code" required value="{{ $mda->mda_code }}">
                </div>
              </div>
              <div class="form-group row">
              <label for="input-2" class="col-sm-2 col-form-label">Address</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-13" name="address" required value="{{ $mda->address }}">
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

