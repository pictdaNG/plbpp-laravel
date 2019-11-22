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
@endsection

