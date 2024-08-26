@extends('layout')
@section('title','Welcome to TPshop')
@section('title2','Welcome to TPshop')
@section('content')
<div class="container">
  
    <form class="needs-validation bg-light" novalidate>
      
      <h2 class="text-center p-3">Góp ý</h2> 
      <hr>
      <div class="mb-3 p-2">
        <label for="feedbackTextarea" class="form-label">Có gì thắc mắc vui lòng góp ý cho shop nhé.</label>
        <textarea class="form-control" id="feedbackTextarea" rows="4"></textarea>
    </div>
    <button type="submit" class="btn btn-danger m-2">Gửi</button>
      
    </form>
   </div>
   @endsection