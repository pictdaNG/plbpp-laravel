@extends('layouts.portal.app')

@section('content')
<div class="row pt-2 pb-2">
  <div class="col-sm-9">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javaScript:void();">Admin</a></li>
      <li class="breadcrumb-item"><a href="javaScript:void();">MDAS</a></li>
      <li class="breadcrumb-item active" aria-current="page">List</li>
    </ol>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header"><i class="fa fa-table"></i> List of Available MDAS</div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="default-datatable" class="table table-bordered">
              <thead>
                <tr>
                  <th>Project Title</th>
                  <th>MDA</th>
                  <th>Tender Value</th>
                  <th>Procurement Method</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($tenders as $tender)
                  <tr>
                    <td>{{ $tender->title }}</td>
                    <td>{{ $tender->mda->title }}</td>
                    <td>₦ {{ number_format($tender->tender_value, 2) }}</td>
                    <td>{{ $tender->procurement_method }}</td>
                    <td>
                      <a class="mr-2 mb-2 btn btn-sm btn-primary btn-rounded" href="{{ route('admin.tender.edit', $tender->id) }}">Edit</a>
                      <button class="mr-2 mb-2 btn btn-sm btn-danger btn-rounded" data-target="#onboardingWideTextModal{{$tender->id}}" data-toggle="modal" type="button">Delete</button>
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

  @foreach($tenders as $tender)
  <div class="onboarding-modal modal fade animated" id="onboardingWideTextModal{{$tender->id}}" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg modal-centered" role="document">
      <form method="post" action="{{ route('admin.tender.delete', $tender->id) }}">
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
                  <input type="hidden" name="id" value="{{$tender->id}}">
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

