<form method="POST" action="{{ route('import') }}" enctype="multipart/form-data">
  {{ csrf_field() }}
  <input type="file" name="file" />
  <button type="submit">Upload File</button>
</form>