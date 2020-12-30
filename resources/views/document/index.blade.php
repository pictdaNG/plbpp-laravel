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
              <thead>
                <tr>
                  <th>Document Title</th>
                  <th>Preview Link</th>
                  <th>Date Created</th>

                </tr>
              </thead>
              <tbody>
                @foreach($documents as $pro)
                  <tr>
                    <td>{{ $pro->name }}</td>
                    <td><a href="{{ $pro->document_url }}" target="_blank"></a> {{ $pro->document_url }}</td>
                    <td>{{ $pro->created_at}}</td>

                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- End Row-->
@endsection

