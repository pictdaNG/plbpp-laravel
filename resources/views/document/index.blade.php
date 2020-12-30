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
              <thead>
                <tr>
                  <th>Document Title</th>
                  <th>Preview Link</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Document Title</th>
                  <th>Preview Link</th>
                  
                </tr>
              </tfoot>
              <tbody>
                @foreach($documents as $pro)
                  <tr>
                    <td>{{ $pro->name }}</td>
                    <td><a href="{{ $pro->document_url }}" target="_blank"></a> {{ $pro->document_url }}</td>
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

