<<<<<<< HEAD
@extends('layouts.app')

@section('content')

  <div class="content-i">
    <div class="content-box">
      <div class="element-wrapper">
        <h6 class="element-header">
          All Uploaded Documents
        </h6>
        <div class="element-box">
          <div class="table-responsive">
            <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
=======
@extends('layouts.portal.app')

@section('content')

<div class="row pt-2 pb-2">
  <div class="col-sm-9">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javaScript:void();">Admin</a></li>
      <li class="breadcrumb-item"><a href="javaScript:void();">Documents</a></li>
      <li class="breadcrumb-item active" aria-current="page">List</li>
    </ol>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header"><i class="fa fa-table"></i> List of Uploaded Documents</div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="default-datatable" class="table table-bordered">
>>>>>>> b8724452b6a3c8b7a2d46606d0345395c5b028b6
              <thead>
                <tr>
                  <th>Document Title</th>
                  <th>Preview Link</th>
<<<<<<< HEAD
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Document Title</th>
                  <th>Preview Link</th>
                  
                </tr>
              </tfoot>
=======
                  <th>Date Created</th>

                </tr>
              </thead>
>>>>>>> b8724452b6a3c8b7a2d46606d0345395c5b028b6
              <tbody>
                @foreach($documents as $pro)
                  <tr>
                    <td>{{ $pro->name }}</td>
                    <td><a href="{{ $pro->document_url }}" target="_blank"></a> {{ $pro->document_url }}</td>
<<<<<<< HEAD
=======
                    <td>{{ $pro->created_at}}</td>

>>>>>>> b8724452b6a3c8b7a2d46606d0345395c5b028b6
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
<<<<<<< HEAD
=======
</div><!-- End Row-->
>>>>>>> b8724452b6a3c8b7a2d46606d0345395c5b028b6
@endsection

