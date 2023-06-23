<style>
    .rounded-img {
        border-radius: 8%; 
    }
</style>

@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')    
    <div class="row">
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('/img/2.jpg') }}" class="img-fluid rounded-img">
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('/img/3.jpg') }}" class="img-fluid rounded-img">
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('/img/1.jpg') }}" class="img-fluid rounded-img">
        </div>
    </div>
@endsection

