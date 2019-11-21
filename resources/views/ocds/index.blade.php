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
                  <th>Certified Payment Date</th>
                  <th>Status of Project</th>
                  <th>% Completion</th>
                  <th>Date of award</th>
                  <th>Remarks</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Project Title</th>
                  <th>Contractor</th>
                  <th>Contract Sum</th>                            
                  <th>Certified Payment Date</th>
                  <th>Status of Project</th>
                  <th>% Completion</th>
                  <th>Date of award</th>
                  <th>Remarks</th>
                </tr>
              </tfoot>
              <tbody>
                @foreach($ocds_records as $pro)
                  <tr>
                    <td>{{ $pro->project }}</td>
                    <td>{{ $pro->st_name_of_contractor }}</td>
                    <td>₦ {{ $pro->st_contract_sum }}</td>
                    <td>{{ $pro->st_payment_date }}</td>
                    <td>{{ $pro->st_project_status }}</td>
                    <td>{{ $pro->st_percentage }}</td>
                    <td>{{ $pro->st_date_of_award }}</td>
                    <td>{{ $pro->st_remarks }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

