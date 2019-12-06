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
        
        <div class="form-group">
          <label for=""> Contractor</label>
          <input class="form-control" placeholder="Enter contractor name" type="text" name="name_of_contractor">
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for=""> Contract Sum</label>
              <input class="form-control" placeholder="Enter Project Cost" type="text" name="contract_sum">
            </div>              
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="">Certified Payment To Date</label>
              <input class="form-control" placeholder="Enter Certified Payment Date" type="text" name="payment_date">
            </div>              
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for=""> Status of Project</label>
              <select class="form-control" name="project_status">
                <option>-- Select status -- </option>
                <option value="On Going">On Going</option>
                <option value="Completed">Completed</option>
                <option value="Expected to be completed">Expected to be completed</option>
                <option value="Nil">Nil</option>
              </select>
            </div>              
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="">% Completion</label>
              <input class="form-control" placeholder="Enter %" type="text" name="percentage">
            </div>              
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="">Date of award</label>
              <input class="form-control" placeholder="Enter Project Title" type="date" name="date_of_award">
            </div>              
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="">Date of Entry</label>
              <input class="form-control" placeholder="Enter Project Title" type="date" name="st_entry_date">
            </div>              
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="">Remarks</label>
              <textarea class="form-control" placeholder="Enter Remark" name="remarks"></textarea>
            </div>              
          </div>
        </div>        
    
        <div class="form-buttons-w">
          <button class="btn btn-primary" type="submit"> Submit</button>
        </div>
      </form>
    </div>
  </div>
@endsection

