@extends('layouts.portal.app')

@section('content')
<div class="row pt-2 pb-2">
  <div class="col-sm-9">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javaScript:void();">Admin</a></li>
      <li class="breadcrumb-item"><a href="javaScript:void();">Tenders</a></li>
      <li class="breadcrumb-item active" aria-current="page">List</li>
    </ol>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header"><i class="fa fa-table"></i> List of Available Tenders</div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="default-datatable" class="table table-bordered">
              <thead>
                <tr>
                  <th>Project Title</th>
                  <th>MDA</th>
                  <th>Tag</th>
                  <th>Tender Value</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($tenders as $tender)
                  <tr>
                    <td>{{ $tender->title }}</td>
                    <td>{{ $tender->mda->title }}</td>
                    <td>{{ $tender->tag }}</td>
                    <td>₦ {{ number_format($tender->tender_value, 2) }}</td>
                    <td>
                      <a class="mr-2 mb-2 btn btn-sm btn-primary btn-rounded" href="{{ route('admin.tender.edit', $tender->id) }}">Edit</a>
                      <button class="mr-2 mb-2 btn btn-sm btn-danger btn-rounded" data-target="#dangermodal{{$tender->id}}" data-toggle="modal" type="button">Delete</button>
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
  <div class="modal fade" id="dangermodal{{$tender->id}}" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
    <div class="modal-content border-danger">

      <div class="modal-header bg-danger">
        <h5 class="modal-title text-white">Delete Tender</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form method="post" action="{{ route('admin.tender.delete', $tender->id) }}">
          <div class="modal-body">

            <!-- <div class="onboarding-media">
              <img alt="" src="../assets/img/alert-warning.svg.png" width="20px">
            </div> -->
              <h5 class="onboarding-title">
                Warning: Are you sure you want to Delete this record?
              </h4>
              <div class="onboarding-text" >
                This action can't be reversed!
              </div>

              <div class="onboarding-text" >
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$tender->id}}">
              </div>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
            <button type="submit" class="btn btn-danger"><i class="fa fa-check-square-o"></i> Delete</button>
          </div>
        </form>

  </div>
  @endforeach
@endsection

