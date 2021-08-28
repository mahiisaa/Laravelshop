
@extends('welcome')
@section('content')
<form action="/admin/products/create" method="post">
@csrf
<div class="form-group">
<input type="text" name="title" class="form-control">
</div>
    <div class="form-group">
    <textarea name="body" id="body" cols="30" rows="10" class="form-control">

     </textarea>
    </div>
    
     <button class="btn btn-danger">
         submit
     </button>
</form>
@endsection