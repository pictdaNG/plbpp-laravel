@extends('layouts.app')

@section('content')

  <div class="element-wrapper">
    <h6 class="element-header">
      Create a New OCDS Year/Month
    </h6>
    <div class="element-box">
      <form method="post" action="{{ route('ocds.year.store') }}">
        {{ csrf_field() }}
        
        <div class="form-group">
          <label for="">Year</label>
          <input class="form-control" placeholder="Enter OCDS Year" type="number" name="year">
        </div>

        <div class="form-group">
          <label for="">Month</label>
          <select class="form-control" name="month">
            <option>-- Select OCDS Month -- </option>
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
        
        <div class="form-group">
          <label>Description (Optional)</label>
          <textarea class="form-control" name="description"></textarea>
        </div>          
    
        <div class="form-buttons-w">
          <button class="btn btn-primary" type="submit"> Submit</button>
        </div>
      </form>
    </div>
  </div>
@endsection

