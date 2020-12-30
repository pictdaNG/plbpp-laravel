@extends('layouts.portal.app')

@section('content')
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <!-- <h4 class="page-title">Form Validation</h4> -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Admin</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Tender</a></li>
        <li class="breadcrumb-item active" aria-current="page">Create</li>
      </ol>
    </div>
 </div>

 <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <form id="change-password" method="post" action="{{ route('admin.tender.store') }}">
        {{ csrf_field() }}

        <div class="form-group">
          <label for=""> Project Title</label>
          <input class="form-control" placeholder="Enter Project Title" type="text" name="title">
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="">MDA</label>
              <select class="form-control" name="mda_id">
                <option>-- Select MDA -- </option>
                @foreach($mdas as $mda)
                <option value="{{$mda->id}}">{{$mda->title}}</option>
                @endforeach

              </select>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for=""> Budget Amount</label>
              <input class="form-control" placeholder="Enter Budget Amount" type="text" name="tender_value">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="">Tag</label>
              <select class="form-control" name="tag">
                <option>-- Select Tag -- </option>
                <option value="tender">Tender</option>
                <option value="award">Award</option>
                <option value="contract">Contract</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="">Description</label>
              <textarea class="form-control" name="description"></textarea>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="">Bid Submission Date</label>
              <input class="form-control" placeholder="Enter Advert Date" type="date" name="bid_submission_open_date">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="">Bid Submission Close Date</label>
              <input class="form-control" placeholder="Enter Project Title" type="date" name="bid_submission_close_date">
            </div>
          </div>


          <div class="col-md-4">
            <div class="form-group">
              <label for="">Tender</label>
              <select class="form-control" name="tender_status">
                <option>-- Select Tender Status -- </option>
                <option value="active">Active</option>
                <option value="complete">Complete</option>
                <option value="cancelled">Cancelled</option>
                 <option value="planned">Planned</option>
                 <option value="planning">Planning</option>
                 <option value="unsuccessful">Unsuccessful</option>
                 <option value="withdrawn">Withdrawn</option>

              </select>
            </div>
          </div>


        </div>


        <div class="row">

          <div class="col-md-6">
            <div class="form-group">
              <label for="">Procurement Category</label>
              <select class="form-control" name="procurement_category">
                <option>-- Select Category -- </option>
                <option value="works">Works</option>
                <option value="goods">Goods</option>
                <option value="services">Services</option>
                <option value="consultingServices">Consulting services</option>

              </select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="">Procurement Method Used</label>
              <select class="form-control" name="procurement_method">
                <option>-- Select Method -- </option>
                <option value="open">Open</option>
                <option value="selective">Selective</option>
                <option value="limited">Limited</option>
                <option value="direct">Direct</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="">Award Criteria</label>
              <select class="form-control" name="award_criteria">
                <option>-- Select Criteria -- </option>
                 <option value="priceOnly">Price only</option>
                 <option value="costOnly">Cost only</option>
                 <option value="qualityOnly">Quality only</option>
                 <option value="ratedCriteria">Rated criteria</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="">Award Amount</label>
              <input class="form-control" placeholder="Enter Award Criteria" type="text" name="award_amount">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="">Award Status</label>
              <select class="form-control" name="award_status">
                <option>-- Select Status -- </option>
                 <option value="active">Active</option>
                 <option value="cancelled">Cancelled</option>
                 <option value="pending">Pending</option>
                 <option value="unsuccessful">Unsuccessful</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Contractor</label>
              <select class="form-control" name="contractor_id">
                <option>-- Select Contractor -- </option>
                @foreach($contractors as $contractor)
                  <option value="{{$contractor->id}}">{{$contractor->name}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Project Status</label>
              <select class="form-control" name="contract_status">
                <option>-- Select Status -- </option>
                 <option value="active">Active</option>
                 <option value="cancelled">Cancelled</option>
                 <option value="completed">Completed</option>
                 <option value="terminated">Terminated</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-md-4">
            <div class="form-group">
              <label for="">Date of Award</label>
              <input class="form-control" placeholder="Enter Award Date" type="date" name="award_date">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="">Contract Start Date</label>
              <input class="form-control" placeholder="Enter Project Cost" type="date" name="start_date">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="">Contract End Date</label>
              <input class="form-control" placeholder="Enter Project Title" type="date" name="end_date">
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

