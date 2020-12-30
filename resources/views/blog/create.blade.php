@extends('layouts.app')



@section('scripts')
  <script src="https://cdn.ckeditor.com/ckeditor5/21.0.0/classic/ckeditor.js"></script>
  <script>
    ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .catch( error => {
      console.error( error );
    });
  </script>
@endsection


@section('styles') 
    <style>
      .document-editor {
        border: 1px solid var(--ck-color-base-border);
        border-radius: var(--ck-border-radius);

        /* Set vertical boundaries for the document editor. */
        max-height: 700px;

        /* This element is a flex container for easier rendering. */
        display: flex;
        flex-flow: column nowrap;
    }
    </style>
@endsection

@section('content')
  <div class="element-wrapper">
    <h6 class="element-header">
      Create a News
    </h6>
    <div class="element-box">
      <form method="post" action="{{ route('admin.news.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        
        <div class="form-group">
          <label for=""> News Title</label>
          <input class="form-control" placeholder="Enter Project Title" type="text" name="title" >
        </div>
      
        <div class="row">          
          <div class="col-md-12">
            <div class="form-group">
              <label for="">Content</label>
              <textarea class="form-control document-editor" name="content" id="editor" v></textarea>
            </div>              
          </div>
        </div>
        
        <div class="form-group">
          <label>Select Image (optional)</label>
          <input class="form-control" type="file" name="news_image">
        </div>
        
        <div class="form-buttons-w">
          <button class="btn btn-primary" type="submit"> Submit</button>
        </div>
      </form>
    </div>
  </div>
@endsection

