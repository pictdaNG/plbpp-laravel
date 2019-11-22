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
                      <a class="mr-2 mb-2 btn btn-sm btn-primary btn-rounded" href="{{ route('ocds.edit', $pro->id) }}">Edit</a> <br>
                      <a class="mr-2 mb-2 btn btn-sm btn-danger btn-rounded" href="{{ route('ocds.delete', $pro->id) }}">Delete</a> 
                      {{-- <button class="mr-2 mb-2 btn btn-sm btn-danger btn-rounded" data-target="#onboardingWideTextModal" data-toggle="modal" type="button">Modal with text only</button> --}}
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

  <div class="onboarding-modal modal fade animated" id="onboardingWideTextModal" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg modal-centered" role="document">
      <div class="modal-content text-center">
        <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Skip Intro</span><span class="os-icon os-icon-close"></span></button>
        <div class="onboarding-side-by-side">
          <div class="onboarding-media">
            <img alt="" src="img/bigicon2.png" width="200px">
          </div>
          <div class="onboarding-content with-gradient">
            <h4 class="onboarding-title">
              Warning: Are you sure you want to Delete this record?
            </h4>
            <div class="onboarding-text text-center" >
              This action can't be reversed!

              <form >
                <button class="mr-2 mb-2 btn btn-md btn-danger">
                  Yes... Delete Record!
                </button>
              </form>
            </div>

            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

