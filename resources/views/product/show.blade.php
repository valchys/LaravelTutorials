@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://laravel.com/img/logotype.min.svg" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
          {{ $viewData["product"]["name"] }}
        </h5>
        <p class="card-text">{{ $viewData["product"]["description"] }}</p>
        @if((int) filter_var($viewData["product"]["price"], FILTER_SANITIZE_NUMBER_INT) > 100) 
        <p class="card-text"style="color: red">{{ $viewData["product"]["price"] }}</p>
        @else
        <p class="card-text">{{ $viewData["product"]["price"] }}</p>
        @endif        
      </div>
    </div>
  </div>
</div>
@endsection
