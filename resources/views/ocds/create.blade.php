@extends('layouts.app')

@section('content')

  <div class="element-wrapper">
      <h6 class="element-header">
        Create a New OCDS
      </h6>
      <div class="element-box">
        <form method="post" action="{{ route('ocds.store') }}">
          {{ csrf_field() }}
          
          <div class="form-group">
            <label for=""> Project Title</label>
            <input class="form-control" placeholder="Enter Project Title" type="text" name="project">
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for=""> Cost</label>
                <input class="form-control" placeholder="Enter Project Cost" type="text" name="cost">
              </div>              
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for=""> Budget Amount</label>
                <input class="form-control" placeholder="Enter Project Title" type="text" name="budget_amount">
              </div>              
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for=""> Rationale</label>
                <input class="form-control" placeholder="Enter Project Rationale" type="text" name="rationale">
              </div>              
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Location</label>
                <input class="form-control" placeholder="Enter Project Cost" type="text" name="location">
              </div>              
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="">Procurement Category</label>
                <input class="form-control" placeholder="Enter Project Title" type="text" name="procurement_category">
              </div>              
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="">Procurement Method Used</label>
                <input class="form-control" placeholder="Enter Project Rationale" type="text" name="procurement_method_used">
              </div>              
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Date of Advert</label>
                <input class="form-control" placeholder="Enter Advert Date" type="date" name="date_of_advert">
              </div>              
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="">Date of Advert Close</label>
                <input class="form-control" placeholder="Enter Project Title" type="date" name="date_of_advert_close">
              </div>              
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="">Award Criteria</label>
                <input class="form-control" placeholder="Enter Award Criteria" type="text" name="award_criteria">
              </div>              
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Final Date of Completion</label>
                <input class="form-control" placeholder="Enter Project Cost" type="date" name="final_date_of_completion">
              </div>              
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="">Contract BOQ</label>
                <input class="form-control" placeholder="Enter Project Title" type="date" name="contract_boq">
              </div>              
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="">Date of Award</label>
                <input class="form-control" placeholder="Enter Project Rationale" type="date" name="date_of_award">
              </div>              
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Date of Signing of Contract</label>
                <input class="form-control" placeholder="Enter Project Rationale" type="date" name="date_of_signing_of_contract">
              </div>              
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Commencement Date</label>
                <input class="form-control" placeholder="Enter Commencement Date" type="date" name="commencement_date">
              </div>              
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Contract Duration</label>
                <input class="form-control" placeholder="Enter Contract Duration" type="text" name="contract_duration">
              </div>              
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Name Of Contractor</label>
                <input class="form-control" placeholder="Enter Contractor Name" type="text" name="name_of_contractor">
              </div>              
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Contractor Address</label>
                <textarea class="form-control" name="address_of_contractor"></textarea>
              </div>              
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Contractor Phone</label>
                <input class="form-control" placeholder="Enter Contractor Phone" type="text" name="contractor_phone">
              </div>              
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Contractor Email</label>
                <input class="form-control" placeholder="Enter Contractor Email" type="email" name="contractor_email">
              </div>              
            </div>
            
          </div>

          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="">Project Funding</label>
                <input class="form-control" placeholder="Enter Project Funding" type="text" name="project_funding">
              </div>              
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">Project Status</label>
                <input class="form-control" placeholder="Enter Project Status" type="text" name="project_status">
              </div>              
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">Project Month</label>
                <select class="form-control" name="project_month">
                  <option>-- Select Project Month -- </option>
                  <option value="January">January</option>
                  <option value="Febuary">Febuary</option>
                  <option value="March">March</option>
                  <option value="April">April</option>
                  <option value="May">May</option>
                  <option value="June">June</option>
                  <option value="July">July</option>
                  <option value="August">August</option>
                  <option value="September">September</option>
                  <option value="October">October</option>
                  <option value="November">November</option>
                  <option value="December">December</option>
                </select>
              </div>            
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">Project Year</label>
                <input class="form-control" placeholder="Enter Project Year" type="text" name="project_year">
              </div>              
            </div>            
          </div>
          
          <div class="form-group">
            <label>Select Project Image</label>
            <input class="form-control" type="file" name="project_photographs">
          </div>
          
      
          <div class="form-buttons-w">
            <button class="btn btn-primary" type="submit"> Submit</button>
          </div>
        </form>
      </div>
    </div>
@endsection

