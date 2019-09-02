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
                          <th>Cost</th>
                          <th>Budget Amount</th>                            
                          <th>Rationale</th>
                          <th>Location</th>
                          <th>Procurement Category</th>
                          <th>Procurement Method Used</th>
                          <th>Date of Advert</th>
                          <th>Date Advert Closed</th>
                          {{-- <th>Award Criteria</th> --}}
                          {{-- <th>Completion Date</th> --}}
                          {{-- <th>Contract BOQ</th> --}}
                          {{-- <th>Date Awarded</th> --}}
                          {{-- <th>Date Signed</th> --}}
                          {{-- <th>Commencement Date</th>
                          <th>Contract Duration</th>
                          <th>Contractor Name</th>
                          <th>Contractor Address</th>
                          <th>Contractor Phone</th>
                          <th>Contractor Email</th>
                          <th>Project Funding</th>
                          <th>Project Status</th>
                          <th>Project Year</th> --}}
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Project Title</th>
                          <th>Cost</th>
                          <th>Budget Amount</th>                            
                          <th>Rationale</th>
                          <th>Location</th>
                          <th>Procurement Category</th>
                          <th>Procurement Method Used</th>
                          <th>Date of Advert</th>
                          <th>Date Advert Closed</th>
                          {{-- <th>Award Criteria</th> --}}
                          {{-- <th>Completion Date</th> --}}
                          {{-- <th>Contract BOQ</th> --}}
                          {{-- <th>Date Awarded</th> --}}
                          {{-- <th>Date Signed</th> --}}
                          {{-- <th>Commencement Date</th>
                          <th>Contract Duration</th>
                          <th>Contractor Name</th>
                          <th>Contractor Address</th>
                          <th>Contractor Phone</th>
                          <th>Contractor Email</th>
                          <th>Project Funding</th>
                          <th>Project Status</th>
                          <th>Project Year</th> --}}
                        </tr>
                      </tfoot>
                      <tbody>
                        @foreach($ocds_records as $pro)
                          <tr>
                            <td>{{ $pro->project }}</td>
                            <td>₦ {{ $pro->cost }}</td>
                            <td>₦ {{ $pro->budget_amount }}</td>
                            <td>{{ $pro->rationale }}</td>
                            <td>{{ $pro->location }}</td>
                            <td>{{ $pro->procurement_category }}</td>
                            <td>{{ $pro->procurement_method_used }}</td>
                            <td>{{ $pro->date_of_advert }}</td>
                            <td>{{ $pro->date_of_advert_close }}</td>
                            {{-- <td>{{ $pro->award_criteria }}</td> --}}
                            {{-- <td>{{ $pro->final_date_of_completion }}</td> --}}
                            {{-- <td>{{ $pro->contract_boq }}</td> --}}
                            {{-- <td>{{ $pro->date_of_award }}</td> --}}
                            {{-- <td>{{ $pro->date_of_signing_of_contract }}</td> --}}
                            {{-- <td>{{ $pro->commencement_date }}</td>
                            <td>{{ $pro->contract_duration }}</td>
                            <td>{{ $pro->name_of_contractor }}</td>
                            <td>{{ $pro->address_of_contractor }}</td>
                            <td>{{ $pro->contractor_phone }}</td>
                            <td>{{ $pro->contractor_email }}</td>
                            <td>₦ {{ $pro->project_funding }}</td>
                            <td>{{ $pro->project_status }}</td>
                            <td>{{ $pro->project_year }}</td> --}}
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

