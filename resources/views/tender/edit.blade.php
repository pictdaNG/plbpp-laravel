@extends('layouts.portal.app')

@section('content')
@section('content')
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <!-- <h4 class="page-title">Form Validation</h4> -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Admin</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Tender</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit</li>
      </ol>
    </div>
 </div>

 <div class="row">
    <div class="col-lg-10">
      <div class="card">
        <div class="card-body">
      <form method="post" action="{{ route('admin.tender.update', $tender->id) }}">
        {{ csrf_field() }}
        <div class="form-group">
          <label for=""> Project Title</label>
          <input class="form-control" placeholder="Enter Project Title" type="text" name="title" value="{{$tender->title}}">
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="">MDA</label>
              <select class="form-control" name="mda_id">
                @foreach($mdas as $mda)
                <option value="{{$mda->id}}">{{$mda->title}}</option>
                @endforeach

              </select>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for=""> Budget Amount</label>
              <input class="form-control" placeholder="Enter Budget Amount" type="text" name="tender_value" value="{{$tender->tender_value}}">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="">Tag</label>
              <select class="form-control" name="tag">
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
              <textarea class="form-control" name="description">{{$tender->description}}</textarea>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="">Procurement Category</label>
              <select class="form-control" name="procurement_category">
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
                <option value="open">Open</option>
                <option value="selective">Selective</option>
                <option value="limited">Limited</option>
                <option value="direct">Direct</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Bid Submission Date</label>
              <input class="form-control" placeholder="Enter Advert Date" type="date" name="bid_submission_open_date" value="{{$tender->bid_submission_open_date}}">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="">Bid Submission Close Date</label>
              <input class="form-control" placeholder="Enter Project Title" type="date" name="bid_submission_close_date" value="{{$tender->bid_submission_close_date}}">
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

