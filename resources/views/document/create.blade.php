@extends('layouts.app')

@section('content')
  <div class="element-wrapper">
    <h6 class="element-header">
      Upload a new Document
    </h6>
    <div class="element-box">
      <form method="post" action="{{ route('admin.document.store') }}">
        {{ csrf_field() }}
        
        <div class="form-group">
          <label for=""> Document Title</label>
          <input class="form-control" placeholder="Enter Document Title" type="text" name="name">
        </div>       
        
        <div class="form-group">
          <label>Select Document</label>
          <input class="form-control" type="file" name="document_url">
        </div>
    
        <div class="form-buttons-w">
          <button class="btn btn-primary" type="submit"> Submit</button>
        </div>
      </form>
    </div>
  </div>
@endsection

