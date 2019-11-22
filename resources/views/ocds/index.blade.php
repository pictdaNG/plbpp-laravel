@extends('layouts.app')

@section('content')

  <div class="content-i">
    <div class="content-box">
      <div class="element-wrapper">
        <h6 class="element-header">
          OCDS Records
        </h6>
        <div class="element-box">
          <div class="table-responsive">
            <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
              <thead>
                <tr>
                  <th>Project Title</th>
                  <th>Contractor</th>
                  <th>Contract Sum</th>                            
                  <th>Certified Payment to Date</th>
                  <th>Status of Project</th>
                  <th>% Completion</th>
                  <th>Date of award</th>
                  <th>Remarks</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Project Title</th>
                  <th>Contractor</th>
                  <th>Contract Sum</th>                            
                  <th>Certified Payment to Date</th>
                  <th>Status of Project</th>
                  <th>% Completion</th>
                  <th>Date of award</th>
                  <th>Remarks</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                @foreach($ocds_records as $pro)
                  <tr>
                    <td>{{ $pro->project }}</td>
                    <td>{{ $pro->st_name_of_contractor }}</td>
                    <td>₦ {{ number_format($pro->st_contract_sum, 2) }}</td>
                    <td>{{ $pro->st_payment_date }}</td>
                    <td>{{ $pro->st_project_status }}</td>
                    <td>{{ $pro->st_percentage }}</td>
                    <td>{{ $pro->st_date_of_award }}</td>
                    <td>{{ $pro->st_remarks }}</td>
                    <td>
                      <a class="mr-2 mb-2 btn btn-sm btn-primary btn-rounded" href="{{ route('ocds.edit', $pro->id) }}">Edit Record</a> <br>
                      <button class="mr-2 mb-2 btn btn-sm btn-danger btn-rounded" data-target="#onboardingWideTextModal{{$pro->id}}" data-toggle="modal" type="button">Delete Record</button>
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

  @foreach($ocds_records as $pro)
  <div class="onboarding-modal modal fade animated" id="onboardingWideTextModal{{$pro->id}}" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg modal-centered" role="document">
      <form method="post" action="{{ route('ocds.delete', $pro->id) }}">
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
                  <input type="hidden" name="id" value="{{$pro->id}}">
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

