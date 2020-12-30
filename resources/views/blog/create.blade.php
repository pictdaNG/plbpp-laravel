@extends('layouts.app')

<<<<<<< HEAD


=======
>>>>>>> b8724452b6a3c8b7a2d46606d0345395c5b028b6
@section('scripts')
  <script src="https://cdn.ckeditor.com/ckeditor5/21.0.0/classic/ckeditor.js"></script>
  <script>
    ClassicEditor
<<<<<<< HEAD
    .create( document.querySelector( '#editor' ) )
    .catch( error => {
      console.error( error );
=======
    .create( document.querySelector('#editor'))
    .catch(error => {
      console.error(error);
>>>>>>> b8724452b6a3c8b7a2d46606d0345395c5b028b6
    });
  </script>
@endsection

<<<<<<< HEAD

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
=======
@section('styles') 
  <style>
    .document-editor {
      border: 1px solid var(--ck-color-base-border);
      border-radius: var(--ck-border-radius);
      max-height: 700px;
      display: flex;
      flex-flow: column nowrap;
    }
  </style>
>>>>>>> b8724452b6a3c8b7a2d46606d0345395c5b028b6
@endsection

@section('content')
  <div class="element-wrapper">
<<<<<<< HEAD
    <h6 class="element-header">
      Create a News
    </h6>
    <div class="element-box">
      <form method="post" action="{{ route('admin.news.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        
=======
    <h6 class="element-header">Create a News</h6>
    <div class="element-box">
      <form method="post" action="{{ route('admin.news.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}        
>>>>>>> b8724452b6a3c8b7a2d46606d0345395c5b028b6
        <div class="form-group">
          <label for=""> News Title</label>
          <input class="form-control" placeholder="Enter Project Title" type="text" name="title" >
        </div>
      
        <div class="row">          
          <div class="col-md-12">
            <div class="form-group">
              <label for="">Content</label>
<<<<<<< HEAD
              <textarea class="form-control document-editor" name="content" id="editor" v></textarea>
=======
              <textarea class="form-control document-editor" name="content" id="editor"></textarea>
>>>>>>> b8724452b6a3c8b7a2d46606d0345395c5b028b6
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
<<<<<<< HEAD

=======
>>>>>>> b8724452b6a3c8b7a2d46606d0345395c5b028b6
