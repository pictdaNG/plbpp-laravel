@extends('layouts.portal.app')

@section('content')
<div class="row pt-2 pb-2">
  <div class="col-sm-9">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javaScript:void();">Admin</a></li>
      <li class="breadcrumb-item"><a href="javaScript:void();">Contractors</a></li>
      <li class="breadcrumb-item active" aria-current="page">List</li>
    </ol>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header"><i class="fa fa-table"></i> List of Available Contractors</div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="default-datatable" class="table table-bordered">
              <thead>
                <tr>
                  <th>SNO</th>
                  <th>Name</th>
                  <th>Phone No.</th>
                  <th>Address</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php $i = 1; ?>
                @foreach($contractors as $contractor)
                  <tr>
                  <td>{{$i++}}</td>
                    <td>{{ $contractor->name}}</td>
                    <td>{{ $contractor->phone_no}}</td>
                    <td>{{ $contractor->address}}</td>
                    <td>
                      <a class="mr-2 mb-2 btn btn-sm btn-primary btn-rounded" href="{{ route('admin.contractor.edit', $contractor->id) }}">Edit</a>
                      <button class="mr-2 mb-2 btn btn-sm btn-danger btn-rounded" data-target="#onboardingWideTextModal{{$contractor->id}}" data-toggle="modal" type="button">Delete</button>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  @foreach($contractors as $contractor)
  <div class="onboarding-modal modal fade animated" id="onboardingWideTextModal{{$contractor->id}}" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg modal-centered" role="document">
      <form method="post" action="{{ route('admin.contractor.delete', $contractor->id) }}">
        <div class="modal-content text-center">
          <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Cancel Action</span><span class="os-icon os-icon-close"></span></button>
          <div class="onboarding-side-by-side">
            <div class="onboarding-media">
              <img alt="" src="../assets/img/alert-warning.svg.png" width="200px">
            </div>
            <div class="onboarding-content with-gradient">
              <h4 class="onboarding-title">
                Warning: Are you sure you want to Delete this record?
              </h4>
              <div class="onboarding-text" >
                This action can't be reversed!
              </div>

              <div class="onboarding-text" >
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$contractor->id}}">
                <button class="mr-2 mb-2 btn btn-md btn-danger">
                  Yes... Delete Record!
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-warning" data-dismiss="modal" type="button"> Cancel</button>
        </div>
      </form>
    </div>
  </div>
  @endforeach
@endsection

